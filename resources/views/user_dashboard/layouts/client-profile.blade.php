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
      <form class="custom-form profile-custom-form"
            enctype="multipart/form-data">
            @csrf <!-- Add CSRF token for security -->

            <div id="form-step-1">
                <div class="dashboard-title">Personal Information</div>

                <!-- Upload Profile Photo -->
                <div class="form-item mt-5">
                    <label for="profile-photo">Upload Profile Photo</label>

                    <div class="upload-profile-photo-container" id="uploadContainer">
                        <input type="file" name="avatar" id="upload-profile-photo-input" accept="image/*" hidden>

                        <p class="upload-photo-text" id="uploadText">Upload Profile Photo</p>

                        <!-- Show existing photo if available -->
                        <div class="uploaded-profile-photo" id="uploadedPhotoContainer">
                            @if ($client && $client->avatar)
                                <img src="{{ asset('user_dashboard/client/avatars/' . $client->avatar) }}"
                                    alt="Uploaded Profile" class="uploaded-profile-photo-img" width="100" height="100">
                            @endif
                        </div>

                    </div>
                </div>

                <!-- Address -->
                <div class="form-item">
                    <label for="city">Address</label>
                    <input placeholder="Enter your Business Address" id="city" name="city" type="text"
                        value="{{ $client ? $client->city : '' }}">

                </div>

                <div class="step-form-actions mt-5">


                    <a class="next-btn" onclick="client_update({{ $client->id }});">Save and Next</a>
                </div>


            </div>
        </form>
    
    </div>
@endsection

@push('scripts')
    <script>
        function client_update(client_id) {
            var city = $("#city").val();
            var avatar = $("#upload-profile-photo-input")[0].files[0];

            // Create a FormData object and append the necessary fields
            var formData = new FormData();
            formData.append('city', city);
            if (avatar) {
                formData.append('avatar', avatar);
            }
            formData.append('_token', '{{ csrf_token() }}'); // Include CSRF token

            // AJAX request
            $.ajax({
                url: "{{ route('client.profile.update') }}", // Use the correct route here
                type: "POST",
                dataType: "JSON",
                processData: false, // Prevent jQuery from processing the data
                contentType: false, // Prevent jQuery from setting contentType
                data: formData,
                success: function(response) {
                    if (response.status === "success") {
                        toastr.success(response.message);
                        window.location.href = response.route; // Redirect if needed
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    toastr.error("An error occurred. Please try again.");
                }
            });
        }
    </script>
@endpush



