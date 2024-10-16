@extends('front_end.app')


@section('content')
    <style>
        .dropdown-menu {
            display: block;
            position: relative;
        }

        .dropdown-item,
        li {
            padding: 5px 8px;
            cursor: pointer;
            background-color: #f8f9fa;
            transition: background-color 0.3s ease;
            /* border: 1px solid rgb(142, 135, 135) !important; */

        }
    </style>




    <!-- banner start -->
    <div class="home-banner">
        <div class="text-content">
            <div data-aos="fade-right" class="home-banner-title">
                Find Trusted <br> <span>Tax Professionals</span>
                <br> Near You
            </div>
            <div data-aos="fade-right" class="home-banner-text">
                Search for experienced tax preparers by location, service type, and price to get your taxes done right
            </div>
            <!-- search bar start -->
            <form method="POST">
                @csrf
                <div data-aos="fade-right" class="search-bar">
                    <div class="left">

                        <input class="search-input" id="search-input" name="city" placeholder="Search..." value=""
                            type="text">
                        <div class="search-list-show">
                        </div>

                    </div>
                    <div class="right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="158" height="60" viewBox="0 0 158 60"
                            fill="none">
                            <path
                                d="M18.9458 5.94945C20.5483 2.33234 24.1325 0 28.0887 0H148C153.523 0 158 4.47715 158 10V50C158 55.5228 153.523 60 148 60H10.3677C3.13621 60 -1.70439 52.5611 1.22475 45.9495L18.9458 5.94945Z"
                                fill="url(#paint0_linear_8547_2139)" />
                            <defs>
                                <linearGradient id="paint0_linear_8547_2139" x1="-5" y1="0" x2="33.9009"
                                    y2="105.681" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#09BD3F" />
                                    <stop offset="1" stop-color="#09812D" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                            viewBox="0 0 24 25" fill="none">
                            <g clip-path="url(#clip0_8547_2141)">
                                <path
                                    d="M17.6129 15.9659C19.0653 14.0165 19.7159 11.5994 19.4343 9.19845C19.1528 6.79746 17.96 4.58955 16.0945 3.01646C14.2291 1.44336 11.8285 0.62109 9.37314 0.714149C6.91777 0.807208 4.58866 1.80873 2.85178 3.51836C1.11491 5.22798 0.0983577 7.51962 0.00550496 9.93481C-0.0873478 12.35 0.750346 14.7106 2.35099 16.5444C3.95164 18.3781 6.1972 19.5498 8.63841 19.825C11.0796 20.1002 13.5365 19.4586 15.5174 18.0286H15.5159C15.5599 18.0876 15.6089 18.1441 15.6629 18.1982L21.4379 23.8786C21.7191 24.1554 22.1007 24.311 22.4986 24.3112C22.8965 24.3113 23.2782 24.156 23.5596 23.8793C23.8411 23.6026 23.9993 23.2274 23.9994 22.836C23.9996 22.4446 23.8416 22.0692 23.5604 21.7923L17.7854 16.112C17.7318 16.0586 17.6741 16.0107 17.6129 15.9659ZM17.9999 10.2945C17.9999 11.3601 17.7865 12.4153 17.3719 13.3998C16.9573 14.3844 16.3496 15.2789 15.5835 16.0325C14.8174 16.786 13.908 17.3837 12.907 17.7915C11.9061 18.1993 10.8333 18.4092 9.74988 18.4092C8.66648 18.4092 7.59368 18.1993 6.59274 17.7915C5.59181 17.3837 4.68233 16.786 3.91625 16.0325C3.15017 15.2789 2.54248 14.3844 2.12788 13.3998C1.71327 12.4153 1.49988 11.3601 1.49988 10.2945C1.49988 8.1423 2.36908 6.07828 3.91625 4.55646C5.46343 3.03465 7.56185 2.17971 9.74988 2.17971C11.9379 2.17971 14.0363 3.03465 15.5835 4.55646C17.1307 6.07828 17.9999 8.1423 17.9999 10.2945Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_8547_2141">
                                    <rect width="24" height="23.6066" fill="white"
                                        transform="translate(0 0.705078)" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>
                </div>
            </form>
            <!-- search bar end -->
        </div>
        <div data-aos="fade-left" class="img-content">
            <img src="{{ asset('front_end/assets/images/home-banner-right.png') }} " alt="">
        </div>
    </div>
    <!-- banner end -->


    @include('front_end.layouts.home_one')
@endsection


@push('scripts')
    <script>
        $('#search-input').keyup(function() {
            // token
            var _token = $('input[name="_token"]').val();
            var city = $(this).val();
            console.log(_token, city);

            $.ajax({
                type: 'POST',
                url: "{{ route('search_locations') }}",
                data: {
                    _token: _token,
                    city: city
                },
                success: function(response) {
                    console.log(response)
                    var html = "<ul class='dropdown-menu'>";

                    $.each(response, function(key, value) {
                        var business_address = value.business_address;
                        var searchUrl = "{{ route('search_results', ['address' => '']) }}" +
                            business_address;

                        html +=
                            `<li><a href="${searchUrl}" class='dropdown-item'>${business_address}</a></li>`;
                    });

                    html = html + "</ul>";
                    $(".search-list-show").html(html);
                    console.log(response);
                }
            });
        })
    </script>
@endpush
