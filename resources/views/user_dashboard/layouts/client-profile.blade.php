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
        <form class="custom-form profile-custom-form" action="{{ route('client.profile.update') }}" method="POST"
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
                        <div>
                            @if ($client && $client->avatar)
                                <img src="{{ asset('user_dashboard/client/avatars/' . $client->avatar) }}"
                                    alt="Uploaded Profile" class="uploaded-profile-photo-img" width="100" height="100">
                                <a class="profile-photo-cross-btn" id="deleteBtn">x</a>
                            @endif
                        </div>
                        {{-- <div class="uploaded-profile-photo" id="uploadedPhotoContainer">
                            <img accept="image/*" width="100$" height="100" class="uploaded-profile-photo-img"
                                id="uploadedImage"
                                src="{{ asset('user_dashboard/client/avatars/' . $client->avatar) }}"
                                alt="Uploaded Profile">
                            <a class="profile-photo-cross-btn" id="deleteBtn">x</a>
                        </div> --}}
                    </div>
                </div>

                <!-- Address -->
                <div class="form-item">
                    <label for="city">Address</label>
                    <input placeholder="Enter your Business Address" id="city" name="city" type="text"
                        value="{{ $client ? $client->city : '' }}">

                </div>

                <div class="step-form-actions mt-5">
                    <button type="submit" onclick="client_update({{ $client->id }});" class="next-btn">Save and
                        Next</button>
                </div>
            </div>
        </form>

    </div>
@endsection







<script>
 function client_update(client_id) {

var city = $("#city").val();
var avatar = $("#upload-profile-photo-input")[0].files[0];

    // AJAX request
    $.ajax({
                url: "/client/profile/update",
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


{{-- For Toaster message --}}
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Display success toastr message
        @if(session('success'))
            toastr.success('{{ session('success') }}');
        @endif

        // Display error toastr message
        @if(session('error'))
            toastr.error('{{ session('error') }}');
        @endif
    });
</script> --}}

