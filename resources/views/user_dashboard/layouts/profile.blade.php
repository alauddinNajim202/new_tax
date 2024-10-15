@extends('user_dashboard.app')

@section('user_dashboard_content')
    <div class="main-content tm-dashboard-home">
        <!-- mobile searchbar start -->
        <!-- search bar start -->
        <div class="mobile-search-bar">
            <div class="left">
                <input id="searchBarMobile" class="search-input" placeholder="Search..." value="" type="text" />
                <div class="search-list">
                    <div class="search-item">London, Uk</div>
                    <div class="search-item">Tokyo, Jp</div>
                    <div class="search-item">Paris, Fr</div>
                    <div class="search-item">Sydney, Au</div>
                    <div class="search-item">Berlin, De</div>
                    <div class="search-item">Toronto, Ca</div>
                    <div class="search-item">Moscow, Ru</div>
                    <div class="search-item">Mumbai, In</div>
                    <div class="search-item">London, Uk</div>
                    <div class="search-item">Tokyo, Jp</div>
                    <div class="search-item">Paris, Fr</div>
                    <div class="search-item">Sydney, Au</div>
                    <div class="search-item">Berlin, De</div>
                    <div class="search-item">Toronto, Ca</div>
                    <div class="search-item">Moscow, Ru</div>
                    <div class="search-item">Mumbai, In</div>
                </div>
            </div>
            <div class="right">
                <svg width="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                </svg>
            </div>
        </div>
        <form class="custom-form profile-custom-form" action="" enctype="multipart/form-data">
            <div id="form-step-1">
                <div class="form-step-progress mb-5">
                    <div class="active-progress-title progress-title">Personal information</div>
                    <div class="active-progress-arrow progress-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16"
                            fill="none">
                            <path d="M0 0H3.85027L10 8L3.85027 16H0L6.17647 8L0 0Z" fill="" />
                        </svg>
                    </div>
                    <div class="progress-title">Certification and Credentials</div>
                    <div class="progress-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16"
                            fill="none">
                            <path d="M0 0H3.85027L10 8L3.85027 16H0L6.17647 8L0 0Z" fill="" />
                        </svg>
                    </div>
                    <div class="progress-title">Services availability and Pricing</div>

                </div>
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
                    <label for="">Full Name</label>
                    <input placeholder="Enter your Full Name" id="full-name"
                        value="{{ $tax_prepare ? $tax_prepare->full_name : '' }}" name="full-name" type="text">
                </div>
                <div class="form-item">
                    <label for="">Business Name</label>
                    <input placeholder="Enter your Business Name" id="business-name"
                        value="{{ $tax_prepare ? $tax_prepare->business_name : '' }}" name="business-name" type="text">
                </div>
                <div class="form-item">
                    <label for="">Business Address</label>
                    <input placeholder="Enter your Business Address" id="business-address"
                        value="{{ $tax_prepare ? $tax_prepare->business_address : '' }}" name="business-address"
                        type="text">
                </div>
                <div class="step-form-actions mt-5">
                    <a id="form-step-1-next-btn" class="next-btn">Save and Next</a>
                </div>
            </div>

            <div id="form-step-2">
                <div class="form-step-progress mb-5">
                    <div class="active-progress-title progress-title">Personal information</div>
                    <div class="active-progress-arrow progress-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16"
                            fill="none">
                            <path d="M0 0H3.85027L10 8L3.85027 16H0L6.17647 8L0 0Z" fill="" />
                        </svg>
                    </div>
                    <div class="active-progress-title progress-title">Certification and Credentials</div>
                    <div class="active-progress-arrow progress-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16"
                            fill="none">
                            <path d="M0 0H3.85027L10 8L3.85027 16H0L6.17647 8L0 0Z" fill="" />
                        </svg>
                    </div>
                    <div class="progress-title">Services availability and Pricing</div>

                </div>
                <div class="dashboard-title mt-5">Professional Details</div>
                <div class="form-item mt-5">
                    <label for="">Professional Title</label>
                    <input placeholder="Ex: e.g., CPA, EA, Tax Attorney" id="professional-detail"
                        value="{{ $tax_prepare ? $tax_prepare->professional_title : '' }}" name="professional-detail"
                        type="text">
                </div>
                <div class="form-item">
                    <label for="">Years of Experience</label>
                    <select class="form-select" id="year-of-experience" name="year-of-experience">
                        <option selected disabled value="">Select Experience</option>

                        <option @if ($tax_prepare->years_of_experience == 1) selected @endif value="1">1-2 Years</option>
                        <option @if ($tax_prepare->years_of_experience == 2) selected @endif value="2">2-5 Years</option>
                        <option @if ($tax_prepare->years_of_experience == 5) selected @endif value="5">5+ Years</option>
                    </select>
                </div>

                <div class="form-item">
                    <label for="">Upload License/Certification</label>
                    <div class="upload-documents-container mt-3">
                        <input type="file" id="file-upload" id="certification" name="certification[]"
                            accept=".txt, .pdf, .doc, .docx, .xls, .xlsx" multiple style="display:none;">
                        <div class="upload-area" id="upload-area">
                            <p id="upload-btn">Upload Documents</p>
                        </div>
                        <div class="uploaded-files-list" id="uploaded-files-list">



                        </div>


                    </div>
                    @foreach ($tax_prepare->certifications as $certification)
                        <div>
                            <a href="{{ asset('user_dashboard/tax_prepare/certifications/' . $certification->certification_file) }}"
                                target="_blank">
                                {{ $certification->certification_file }}
                            </a>
                        </div>
                    @endforeach


                </div>
                <div class="step-form-actions mt-5">
                    <a id="form-step-2-prev-btn" class="prev-btn">Previous Page</a>
                    <a id="form-step-2-next-btn" class="next-btn">Save and Next</a>
                </div>
            </div>

            <div id="form-step-3">
                <div class="form-step-progress mb-5">
                    <div class="active-progress-title progress-title">Personal information</div>
                    <div class="active-progress-arrow progress-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16"
                            fill="none">
                            <path d="M0 0H3.85027L10 8L3.85027 16H0L6.17647 8L0 0Z" fill="" />
                        </svg>
                    </div>
                    <div class="active-progress-title progress-title">Certification and Credentials</div>
                    <div class="active-progress-arrow progress-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16"
                            fill="none">
                            <path d="M0 0H3.85027L10 8L3.85027 16H0L6.17647 8L0 0Z" fill="" />
                        </svg>
                    </div>
                    <div class="active-progress-title progress-title">Services availability and Pricing</div>

                </div>
                <div class="dashboard-title my-5">Services availability and Pricing</div>


                <div class="service-categories mb-5">
                    <div class="service-categories-btn">
                        <span>Service Categories</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path d="M4 8.5L12 16.5L20 8.5H4Z" fill="#6B6B6B" />
                        </svg>
                    </div>
                    <div class="service-categories-selected-items">

                    </div>
                    <div class="service-categories-modal">

                        @foreach ($service_categories as $category)
                            <div id="{{$category->id}}" class="item">{{$category->name}} </div>
                        @endforeach

                    </div>
                </div>



                <div class="form-item">
                    <label for="">Upload A photo describing your service </label>

                    <div class="service-upload-profile-photo-container" id="service-uploadContainer">
                        <input hidden type="file" name="service-profile-photo" id="service-upload-profile-photo-input"
                            accept="image/*">

                        <p class="service-upload-photo-text" id="service-uploadText">Upload Photo</p>

                        <div class="service-uploaded-profile-photo" id="service-uploadedPhotoContainer">
                            <img accept="image/*" class="service-uploaded-profile-photo-img" id="service-uploadedImage"
                                src="" alt="Uploaded Profile">
                            <a class="service-profile-photo-cross-btn" id="service-deleteBtn">x</a>
                        </div>
                    </div>

                </div>
                <div style="margin-top: 40px;" class="rate-container ">
                    <input id="rate-type" value="hourly" type="hidden" name="rate-type" />
                    <div id="hourly"
                        class="rate-box {{ $tax_prepare->type_rate == 'hourly' ? 'active-rate-box' : '' }} ">
                        <div class="top">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                fill="none">
                                <path d="M16 10.6666V17.3333" stroke="#393939" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M16.0002 29.3333C9.56016 29.3333 4.3335 24.1067 4.3335 17.6667C4.3335 11.2267 9.56016 6 16.0002 6C22.4402 6 27.6668 11.2267 27.6668 17.6667"
                                    stroke="#393939" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M12 2.66663H20" stroke="#393939" stroke-width="1.5" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M19.8667 24.6666V23.1199C19.8667 21.2133 21.2267 20.4266 22.88 21.3866L24.2134 22.1599L25.5467 22.9333C27.2 23.8933 27.2 25.4533 25.5467 26.4133L24.2134 27.1866L22.88 27.9599C21.2267 28.9199 19.8667 28.1333 19.8667 26.2266V24.6666Z"
                                    stroke="#393939" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <div class="bullet-point"></div>
                        </div>
                        <div class="rate-title">Hourly Rate</div>
                    </div>
                    <div id="fixed"
                        class="rate-box {{ $tax_prepare->type_rate == 'fixed' ? 'active-rate-box' : '' }}">
                        <div class="top">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                fill="none">
                                <path
                                    d="M11.5625 19.1065C11.5625 20.8265 12.8825 22.2132 14.5225 22.2132H17.8692C19.2958 22.2132 20.4558 20.9998 20.4558 19.5065C20.4558 17.8798 19.7492 17.3065 18.6958 16.9332L13.3225 15.0665C12.2692 14.6932 11.5625 14.1198 11.5625 12.4932C11.5625 10.9998 12.7225 9.7865 14.1492 9.7865H17.4958C19.1358 9.7865 20.4558 11.1732 20.4558 12.8932"
                                    stroke="#393939" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M16 8V24" stroke="#393939" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M15.9998 29.3333C23.3636 29.3333 29.3332 23.3638 29.3332 16C29.3332 8.63616 23.3636 2.66663 15.9998 2.66663C8.63604 2.66663 2.6665 8.63616 2.6665 16C2.6665 23.3638 8.63604 29.3333 15.9998 29.3333Z"
                                    stroke="#393939" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <div class="bullet-point"></div>
                        </div>
                        <div class="rate-title">Fixed Price</div>
                    </div>
                </div>
                <div class="price-container mt-3 mt-md-5">
                    <div>
                        <label for="">From</label>
                        <div class="price-box">
                            $<input placeholder="0.000"
                                value="{{ $tax_prepare->from_rate ? $tax_prepare->from_rate : '' }}" type="number"
                                name="from_price" id="" />/hr
                        </div>
                    </div>
                    <div>
                        <label for="">To</label>
                        <div class="price-box">
                            $<input placeholder="0.000" value="{{ $tax_prepare->to_rate ? $tax_prepare->to_rate : '' }}"
                                type="number" name="to_price" id="" />/hr
                        </div>
                    </div>
                </div>
                <div class=" mt-5">
                    <label class="form-item-checkbox-title" for="">Set Your Availability</label>

                    @php
                        $days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

                        $availabilities = $tax_prepare->availibilities()->get();
                        // dd($days, $available);
                    @endphp

                    <div class="availability-container mt-3">
                        @foreach ($days as $index => $day)
                            @php
                                // Check if this day is available
                                $availability = $availabilities->firstWhere('day', $day);
                                $is_checked = $availability ? 'checked' : '';
                                $from_time = $availability ? $availability->from_time : '';
                                $to_time = $availability ? $availability->to_time : '';

                            @endphp



                            <div class="item">
                                <div class="left">
                                    <input class="form-check-input" name="day[{{ $index }}]" type="checkbox"
                                        {{ $is_checked }}>
                                    <label for="day[{{ $index }}]">{{ $day }}</label>
                                </div>
                                <div class="right">
                                    <div class="unavailable-content">Unavailable</div>
                                    <div class="available-content" style="display: {{ $is_checked ? 'flex' : 'none' }}">
                                        <select name="from_time[{{ $index }}]">
                                            <option selected disabled value="">From</option>
                                            <option value="9" {{ $from_time == '9' ? 'selected' : '' }}>
                                                9.00 AM
                                            </option>
                                            <option value="10" {{ $from_time == '10' ? 'selected' : '' }}>
                                                10.00 AM
                                            </option>
                                            <option value="11" {{ $from_time == '11' ? 'selected' : '' }}>
                                                11.00 AM
                                            </option>
                                        </select>
                                        <select name="to_time[{{ $index }}]">
                                            <option selected disabled value="">To</option>
                                            <option value="5" {{ $to_time == '5' ? 'selected' : '' }}>
                                                5.00 PM
                                            </option>
                                            <option value="6" {{ $to_time == '6' ? 'selected' : '' }}>
                                                6.00 PM
                                            </option>
                                            <option value="7" {{ $to_time == '7' ? 'selected' : '' }}>
                                                7.00 PM
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>



                    <div class="step-form-actions mt-5">
                        <a id="form-step-3-prev-btn" class="prev-btn">Previous Page</a>
                        <a class="next-btn" onclick="tax_prepare_update({{ $tax_prepare->id }});">Save and Next</a>

                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection

@push('scripts')
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
            var business_address = $("#business-address").val();
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

            // service image
            if (service_photo) {
                formData.append("service_photo", service_photo);
            }


            // services categories
            $(".service-categories-modal .item").each(function() {

                formData.append("service_categories[]", $(this).attr('id'));
            });

            // Hourly or Fixed rate selection
            var rate_type = $("#rate-type").val();

            formData.append("rate_type", rate_type);

            if (rate_type === "hourly") {
                var fromPrice = $("input[name='from_price']").val();
                var toPrice = $("input[name='to_price']").val();
                console.log(fromPrice, toPrice);
                formData.append("from_price", fromPrice);
                formData.append("to_price", toPrice);
            }

            // Availability (days and time)
            $(".availability-container .item").each(function() {
                var checked = $(this).find("input[type='checkbox']").is(":checked");
                if (checked) {
                    var day = $(this).find('label').text().trim(); // Get the day
                }


                var from_time = $(this).find("select[name^='from_time']").val();
                var to_time = $(this).find("select[name^='to_time']").val();
                console.log(day, from_time, to_time);

                if (day) {
                    formData.append("days[]", day);
                    formData.append("from_time[]", from_time);
                    formData.append("to_time[]", to_time);
                }
            });



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
@endpush
