@extends('user_dashboard.app')

@section('user_dashboard_content')
    <div class="main-content tm-dashboard-home">
        <!-- mobile searchbar start -->
        <!-- search bar start -->
        <div class="mobile-search-bar">

            <div class="right">
                <svg width="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                </svg>
            </div>
        </div>

        <!-- Update form to point to the controller's store method -->
        <form class="custom-form profile-custom-form" action="{{ route('client.profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf <!-- Add CSRF token for security -->

            <div id="form-step-1">
                <div class="dashboard-title">Personal Information</div>

                <!-- Upload Profile Photo -->
                <div class="form-item mt-5">
                    <label for="profile-photo">Upload Profile Photo</label>

                    <div class="upload-profile-photo-container" id="uploadContainer">
                        <input type="file" name="avatar" id="upload-profile-photo-input" accept="image/*" hidden>

                        <p class="upload-photo-text" id="uploadText">Upload Profile Photo</p>

                        {{-- <!-- Show existing photo if available -->
                        <div class="uploaded-profile-photo" id="uploadedPhotoContainer">
                            @if ($client && $client->avatar)
                                <img src="{{ asset('user_dashboard/client/avatars/' . $client->avatar) }}" alt="Uploaded Profile" class="uploaded-profile-photo-img" width="100" height="100">
                                <a class="profile-photo-cross-btn" id="deleteBtn">x</a>
                            @endif
                        </div> --}}
                        <div class="uploaded-profile-photo" id="uploadedPhotoContainer">
                            <img accept="image/*" width="100$" height="100" class="uploaded-profile-photo-img"
                                id="uploadedImage"
                                src="{{ asset('user_dashboard/client/avatars/' . $client->avatar) }}"
                                alt="Uploaded Profile">
                            <a class="profile-photo-cross-btn" id="deleteBtn">x</a>
                        </div>
                    </div>
                </div>

                <!-- Address -->
                <div class="form-item">
                    <label for="city">Address</label>
                    <input placeholder="Enter your Business Address" id="city" name="city" type="text" value="{{ $client ? $client->city : '' }}">
                </div>

                <div class="step-form-actions mt-5">
                    <button type="submit" class="next-btn">Save and Next</button>
                </div>
            </div>
        </form>
    </div>
@endsection








{{-- @extends('user_dashboard.app')

@section('user_dashboard_content')
    <div class="main-content tm-dashboard-home">
        <!-- mobile searchbar start -->
        <!-- search bar start -->
        <div class="mobile-search-bar">

            <div class="right">
                <svg width="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                </svg>
            </div>
        </div>
        <form class="custom-form profile-custom-form" action="" enctype="multipart/form-data">
            <div id="form-step-1">

                <div class="dashboard-title">Personal Information</div>
                <div class="form-item mt-5">
                    <label for="">Upload Profile Photo</label>

                    <div class="upload-profile-photo-container" id="uploadContainer">
                        <input hidden type="file" name="profile-photo" id="upload-profile-photo-input" accept="image/*"
                            value="{{ $tax_prepare->profile_photo }}">

                        <p class="upload-photo-text" id="uploadText">Upload Profile Photo</p>

                        <div class="uploaded-profile-photo" id="uploadedPhotoContainer">
                            <img accept="image/*" width="100$" height="100" class="uploaded-profile-photo-img"
                                id="uploadedImage"
                                src="{{ asset('user_dashboard/tax_prepare/images/' . $tax_prepare->profile_photo) }}"
                                alt="Uploaded Profile">
                            <a class="profile-photo-cross-btn" id="deleteBtn">x</a>
                        </div>
                    </div>

                </div>

                <div class="form-item">
                    <label for="">Address</label>
                    <input placeholder="Enter your Business Address" id="city"
                        value="{{ $tax_prepare ? $tax_prepare->business_address : '' }}" name="city"
                        type="text">
                </div>
                <div class="step-form-actions mt-5">
                    <a id="form-step-1-next-btn" class="next-btn">Save and Next</a>
                </div>
            </div>


            <div class="step-form-actions mt-5">
                <a class="next-btn" onclick="tax_prepare_update({{ $tax_prepare->id }});">Save and Next</a>
            </div>

    </div>

    </form>
    </div>
@endsection --}}

{{-- @push('scripts')
    <script>
        // // select availability
        const checkboxes = document.querySelectorAll('.form-check-input');

        // Add event listeners to each checkbox
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const parentItem = checkbox.closest('.item'); // Find the parent .item div
                const availableContent = parentItem.querySelector('.available-content');
                const unavailableContent = parentItem.querySelector('.unavailable-content');

                if (checkbox.checked) {
                    // Show available content and hide unavailable content when checked
                    availableContent.style.display = 'flex';
                    unavailableContent.style.display = 'none';
                } else {
                    // Show unavailable content and hide available content when unchecked
                    availableContent.style.display = 'none';
                    unavailableContent.style.display = 'block';
                }
            });

            // Trigger initial state based on the checkbox being pre-checked or unchecked
            checkbox.dispatchEvent(new Event('change'));
        });
    </script>


    <script>
        const selected_categories = @json($selected_categories)
    </script>


    <script>
        function tax_prepare_update(tax_prepare_id) {
            var full_name = $("#full-name").val();
            var business_name = $("#business-name").val();
            var business_address = $("#city").val();
            var profile_photo = $("#upload-profile-photo-input")[0].files[0];
            var service_photo = $("#service-upload-profile-photo-input")[0].files[0];
            var professional_detail = $("#professional-detail").val();
            var year_of_experience = $("#year-of-experience").val();

            // File upload
            var files = $('#file-upload')[0].files;

            var formData = new FormData(); // Corrected this line

            formData.append("_token", "{{ csrf_token() }}");
            formData.append("tax_prepare_id", tax_prepare_id);
            formData.append("full_name", full_name);
            formData.append("business_name", business_name);
            formData.append("business_address", business_address);
            formData.append("professional_detail", professional_detail);
            formData.append("year_of_experience", year_of_experience);

            // Fixed the variable name to formData
            for (var i = 0; i < files.length; i++) {
                formData.append("certification[]", files[i], files[i]['name']); // Corrected this line
            }

            // profile image
            if (profile_photo) {
                formData.append("profile_photo", profile_photo);
            }







            // AJAX request
            $.ajax({
                url: "/tax-prepare/profile/update",
                type: "POST",
                dataType: "JSON",
                processData: false,
                contentType: false,
                data: formData,
                success: function(response) {
                    if (response.status === "success") {
                        toastr.success(response.message);
                        window.location.href = response.route;
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    toastr.error(response.message);
                }
            });
        }
    </script>
@endpush --}}
