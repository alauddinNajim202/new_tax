@extends('front_end.app')

@section('content')
<!-- step-form start -->
<div class="tax-preparer-information">
    <div class="left">
        <img src="{{asset('front_end/assets/images/stepform-left.png')}} " alt="banner" />
    </div>
    <form class="step-form-container custom-form">
        <div id="step-1">
            <div class="step-count"><span>1</span>/3 Create Profile</div>
            <div class="step-title mt-3">Tell Us About Yourself</div>
            <div class="form-item">
                <label for="">Full Name</label>
                <input placeholder="Enter your Full Name" id="full-name"
                    value="" name="full-name" type="text">
            </div>
            <div class="form-item">
                <label for="">Business Name</label>
                <input placeholder="Enter your Business Name" id="business-name"
                    value="" name="business-name" type="text">
            </div>
            <div class="form-item">
                <label for="">Business Address</label>
                <input placeholder="Enter your Business Address" id="business-address"
                    value="" name="business-address"
                    type="text">
            </div>

            <div class="form-progress">
                <div class="progress-container">
                    <div class="count">20%</div>
                    <div class="progress-bar">
                        <div style="width: 20%" class="progress-completed"></div>
                    </div>
                </div>
                <div class="form-actions">
                    <a href="" class="prev-btn">Previous Page</a>
                    <a id="step-1-next" class="next-btn">Save and Next</a>
                </div>
            </div>
        </div>
        <div id="step-2">
            <div class="step-count"><span>2</span>/3 Verify</div>
            <div class="step-title mt-3">Verify Your Credentials</div>
            <div class="form-item mt-5">
                <label for="">Professional Title</label>
                <input placeholder="Ex: e.g., CPA, EA, Tax Attorney" id="professional-title" name="professional-title" type="text" />
            </div>
            <div class="form-item">
                <label for="">Years of Experience</label>
                <select id="year-of-experience" name="year-of-experience">
                    <option selected disabled value="">Select Experience</option>
                    <option value="1-2">1-2 Years</option>
                    <option value="2-5">2-5 Years</option>
                    <option value="5+">5+ Years</option>
                </select>
            </div>

            <div class="form-item">
                <label for="">Upload License/Certification</label>
                <div class="upload-documents-container mt-3">
                    <input type="file" id="file-upload" accept=".txt, .pdf, .doc, .docx, .xls, .xlsx" multiple
                        style="display: none" id="certification" name="certification[]" />
                    <div class="upload-area" id="upload-area">
                        <p id="upload-btn">Upload Documents</p>
                    </div>
                    <div class="uploaded-files-list" id="uploaded-files-list"></div>
                </div>
            </div>

            <div class="form-progress">
                <div class="progress-container">
                    <div class="count">40%</div>
                    <div class="progress-bar">
                        <div style="width: 40%" class="progress-completed"></div>
                    </div>
                </div>
                <div class="form-actions">
                    <a id="step-2-prev" class="prev-btn">Previous Page</a>
                    <a id="step-2-next" class="next-btn">Save and Next</a>
                </div>
            </div>
        </div>
        <div id="step-3">
            <div class="step-count"><span>3</span>/3 Verify</div>
            <div class="step-title mt-3">Let's Get Down to Business!</div>

            <div style="margin-top: 40px;" class="rate-container ">
                <input id="rate-type" value="hourly" type="hidden" name="rate-type" />
                <div id="hourly"
                    class="rate-box active-rate-box ">
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
                    class="rate-box ">
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
                            value="" type="number"
                            name="from_price" id="" />/hr
                    </div>
                </div>
                <div>
                    <label for="">To</label>
                    <div class="price-box">
                        $<input placeholder="0.000" value=""
                            type="number" name="to_price" id="" />/hr
                    </div>
                </div>
            </div>


            <div class="form-progress">
                <div class="progress-container">
                    <div class="count">80%</div>
                    <div class="progress-bar">
                        <div style="width: 80%" class="progress-completed"></div>
                    </div>
                </div>
                <div class="form-actions">
                    <a id="step-3-prev" class="prev-btn">Previous Page</a>
                    <a id="submit-step-form-btn" onclick="tax_prepare_update({{ request('tax-prepare') }});" class="next-btn">Save and Next</a>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- step-form end -->


@endsection

@push('scripts')
 <!-- js -->
 <script src="./assets/js/jquery-3.7.1.min.js"></script>
 <script src="./assets/js/plugins.js"></script>
 <script src="./assets/js/index.js"></script>
 <script src="{{asset('front_end/assets/js/tax-preparer-steps.js')}}"></script>

 <script>
     $(document).ready(function() {
         $("select").niceSelect();
     });
 </script>

<script>
    function tax_prepare_update(tax_prepare_id) {
        console.log(tax_prepare_id);
        var full_name = $("#full-name").val();
        var business_name = $("#business-name").val();
        var business_address = $("#business-address").val();

        var professional_detail = $("#professional-title").val();
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





        // AJAX request
        $.ajax({
            url: "/tax-prepare/store",
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
