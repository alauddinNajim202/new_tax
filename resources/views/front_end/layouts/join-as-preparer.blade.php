@extends('front_end.app')


@section('content')
    <!-- banner start -->
    <div class="join-as-preparer-banner">
        <div data-aos="fade-right" class="banner-title text-center">
            Grow Your <span>Tax Practice</span> <br />
            with TAXDAX
        </div>
        <div data-aos="fade-right" class="banner-text text-center">
            Connect with more clients, manage appointments, and streamline your
            services—all in one place.
        </div>
        <div data-aos="fade-right" class="banner-actions">
            <a href="" class="join-now-btn">Join TAXDAX Now</a>
            <a href="" class="get-start-btn">Get Started for Free</a>
        </div>
    </div>
    <!-- banner end -->

    <!-- banner cards start -->
    <div class="join-as-preparer-banner-cards ">
        <div data-aos="fade-right" class="img-container">
            <img src=" {{asset('front_end/assets/images/join-banner-img-1.png')}} " alt="" />
            <div class="img-overlay"></div>
        </div>
        <div class="img-container">
            <img src="{{asset('front_end/assets/images/join-banner-img-2.png')}}" alt="" />
            <div class="img-overlay"></div>
        </div>
        <div class="img-container">
            <img src="{{asset('front_end/assets/images/join-banner-img-3.png')}}" alt="" />
            <div class="img-overlay"></div>
        </div>
        <div data-aos="fade-left" class="img-container">
            <img src="{{asset('front_end/assets/images/join-banner-img-4.png')}}" alt="" />
            <div class="img-overlay"></div>
        </div>
    </div>
    <!-- banner cards end -->

    <!-- why join tadax start -->
    <div class="why-join-tadax">
        <div class="card-parent">
            <div data-aos="fade-right" class="long-card card-item">
                <div class="main-title">Why Join <span>TAXDAX?</span></div>
                <div class="main-text">
                    Discover the benefits of working with verified professionals who
                    make tax preparation stress-free and reliable.
                </div>
                <a href="" class="common-btn">Get Started for Free</a>
            </div>
            <div data-aos="fade-left" class="small-card card-item">
                <div class="img-container">
                    <img src=" {{ asset('front_end/assets/images/why-join-tadax-1.png') }}" alt="" />
                </div>
                <div class="overlay"></div>
                <div class="text-content">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="126" height="126" viewBox="0 0 126 126"
                            fill="none">
                            <g filter="url(#filter0_dd_8807_2888)">
                                <rect x="25" y="5" width="76" height="76" rx="38" fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M58.8734 23.9702C60.1547 23.3322 61.5675 23 63 23C64.4325 23 65.8453 23.3322 67.1266 23.9702L77.0469 28.9088C77.9344 29.3509 78.6808 30.0305 79.2024 30.8713C79.7239 31.7121 80.0001 32.681 80 33.6694V48.2744C80.0001 49.8334 79.6022 51.3668 78.8436 52.7304C78.085 54.094 76.9907 55.243 75.6635 56.0694L65.8327 62.1905C64.9833 62.7195 64.0017 63 63 63C61.9983 63 61.0167 62.7195 60.1673 62.1905L50.3365 56.0694C49.0093 55.243 47.915 54.094 47.1564 52.7304C46.3978 51.3668 45.9999 49.8334 46 48.2744V33.6694C45.9999 32.681 46.2761 31.7121 46.7977 30.8713C47.3192 30.0305 48.0656 29.3509 48.9531 28.9088L58.8734 23.9702ZM69.8583 40.044C70.0014 39.9111 70.1163 39.7509 70.1959 39.5728C70.2756 39.3948 70.3184 39.2026 70.3218 39.0077C70.3253 38.8129 70.2893 38.6193 70.216 38.4386C70.1427 38.2578 70.0336 38.0937 69.8953 37.9558C69.7569 37.818 69.5921 37.7094 69.4106 37.6364C69.2292 37.5634 69.0349 37.5275 68.8392 37.531C68.6436 37.5344 68.4506 37.5771 68.2719 37.6564C68.0931 37.7357 67.9323 37.8501 67.7989 37.9927L61.0571 44.7078L58.2011 41.8631C57.9249 41.6067 57.5596 41.4671 57.1821 41.4738C56.8046 41.4804 56.4444 41.6327 56.1774 41.8987C55.9104 42.1646 55.7575 42.5233 55.7509 42.8993C55.7442 43.2754 55.8843 43.6393 56.1417 43.9144L60.0274 47.7848C60.3006 48.0566 60.671 48.2093 61.0571 48.2093C61.4433 48.2093 61.8136 48.0566 62.0869 47.7848L69.8583 40.044Z"
                                    fill="url(#paint0_linear_8807_2888)" />
                            </g>
                            <defs>
                                <filter id="filter0_dd_8807_2888" x="0" y="0" width="126" height="126"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="10" />
                                    <feGaussianBlur stdDeviation="5" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.04 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow_8807_2888" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="20" />
                                    <feGaussianBlur stdDeviation="12.5" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                    <feBlend mode="normal" in2="effect1_dropShadow_8807_2888"
                                        result="effect2_dropShadow_8807_2888" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_8807_2888"
                                        result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_8807_2888" x1="46" y1="23" x2="85.4775"
                                    y2="56.5559" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#09BD3F" />
                                    <stop offset="1" stop-color="#09812D" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="title">Analytics and Insights</div>
                    <div class="text">
                        Track your performance and client engagement with real-time data.
                    </div>
                </div>
            </div>
        </div>
        <div class="card-parent">
            <div data-aos="fade-right" class="small-card card-item">
                <div class="img-container">
                    <img src="{{ asset('front_end/assets/images/why-join-tadax-2.png') }}" alt="" />
                </div>
                <div class="overlay"></div>
                <div class="text-content">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="126" height="126" viewBox="0 0 126 126"
                            fill="none">
                            <g filter="url(#filter0_dd_8807_2888)">
                                <rect x="25" y="5" width="76" height="76" rx="38" fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M58.8734 23.9702C60.1547 23.3322 61.5675 23 63 23C64.4325 23 65.8453 23.3322 67.1266 23.9702L77.0469 28.9088C77.9344 29.3509 78.6808 30.0305 79.2024 30.8713C79.7239 31.7121 80.0001 32.681 80 33.6694V48.2744C80.0001 49.8334 79.6022 51.3668 78.8436 52.7304C78.085 54.094 76.9907 55.243 75.6635 56.0694L65.8327 62.1905C64.9833 62.7195 64.0017 63 63 63C61.9983 63 61.0167 62.7195 60.1673 62.1905L50.3365 56.0694C49.0093 55.243 47.915 54.094 47.1564 52.7304C46.3978 51.3668 45.9999 49.8334 46 48.2744V33.6694C45.9999 32.681 46.2761 31.7121 46.7977 30.8713C47.3192 30.0305 48.0656 29.3509 48.9531 28.9088L58.8734 23.9702ZM69.8583 40.044C70.0014 39.9111 70.1163 39.7509 70.1959 39.5728C70.2756 39.3948 70.3184 39.2026 70.3218 39.0077C70.3253 38.8129 70.2893 38.6193 70.216 38.4386C70.1427 38.2578 70.0336 38.0937 69.8953 37.9558C69.7569 37.818 69.5921 37.7094 69.4106 37.6364C69.2292 37.5634 69.0349 37.5275 68.8392 37.531C68.6436 37.5344 68.4506 37.5771 68.2719 37.6564C68.0931 37.7357 67.9323 37.8501 67.7989 37.9927L61.0571 44.7078L58.2011 41.8631C57.9249 41.6067 57.5596 41.4671 57.1821 41.4738C56.8046 41.4804 56.4444 41.6327 56.1774 41.8987C55.9104 42.1646 55.7575 42.5233 55.7509 42.8993C55.7442 43.2754 55.8843 43.6393 56.1417 43.9144L60.0274 47.7848C60.3006 48.0566 60.671 48.2093 61.0571 48.2093C61.4433 48.2093 61.8136 48.0566 62.0869 47.7848L69.8583 40.044Z"
                                    fill="url(#paint0_linear_8807_2888)" />
                            </g>
                            <defs>
                                <filter id="filter0_dd_8807_2888" x="0" y="0" width="126" height="126"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="10" />
                                    <feGaussianBlur stdDeviation="5" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.04 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow_8807_2888" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="20" />
                                    <feGaussianBlur stdDeviation="12.5" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                    <feBlend mode="normal" in2="effect1_dropShadow_8807_2888"
                                        result="effect2_dropShadow_8807_2888" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_8807_2888"
                                        result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_8807_2888" x1="46" y1="23"
                                    x2="85.4775" y2="56.5559" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#09BD3F" />
                                    <stop offset="1" stop-color="#09812D" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="title">Build Your Reputation</div>
                    <div class="text">
                        Track your performance and client engagement with real-time data.
                    </div>
                </div>
            </div>
            <div data-aos="fade-left" class="long-card card-item">
                <div class="img-container">
                    <img src="{{ asset('front_end/assets/images/why-join-tadax-3.png') }}" alt="" />
                </div>
                <div class="overlay"></div>
                <div class="text-content">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="126" height="126" viewBox="0 0 126 126"
                            fill="none">
                            <g filter="url(#filter0_dd_8807_2888)">
                                <rect x="25" y="5" width="76" height="76" rx="38" fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M58.8734 23.9702C60.1547 23.3322 61.5675 23 63 23C64.4325 23 65.8453 23.3322 67.1266 23.9702L77.0469 28.9088C77.9344 29.3509 78.6808 30.0305 79.2024 30.8713C79.7239 31.7121 80.0001 32.681 80 33.6694V48.2744C80.0001 49.8334 79.6022 51.3668 78.8436 52.7304C78.085 54.094 76.9907 55.243 75.6635 56.0694L65.8327 62.1905C64.9833 62.7195 64.0017 63 63 63C61.9983 63 61.0167 62.7195 60.1673 62.1905L50.3365 56.0694C49.0093 55.243 47.915 54.094 47.1564 52.7304C46.3978 51.3668 45.9999 49.8334 46 48.2744V33.6694C45.9999 32.681 46.2761 31.7121 46.7977 30.8713C47.3192 30.0305 48.0656 29.3509 48.9531 28.9088L58.8734 23.9702ZM69.8583 40.044C70.0014 39.9111 70.1163 39.7509 70.1959 39.5728C70.2756 39.3948 70.3184 39.2026 70.3218 39.0077C70.3253 38.8129 70.2893 38.6193 70.216 38.4386C70.1427 38.2578 70.0336 38.0937 69.8953 37.9558C69.7569 37.818 69.5921 37.7094 69.4106 37.6364C69.2292 37.5634 69.0349 37.5275 68.8392 37.531C68.6436 37.5344 68.4506 37.5771 68.2719 37.6564C68.0931 37.7357 67.9323 37.8501 67.7989 37.9927L61.0571 44.7078L58.2011 41.8631C57.9249 41.6067 57.5596 41.4671 57.1821 41.4738C56.8046 41.4804 56.4444 41.6327 56.1774 41.8987C55.9104 42.1646 55.7575 42.5233 55.7509 42.8993C55.7442 43.2754 55.8843 43.6393 56.1417 43.9144L60.0274 47.7848C60.3006 48.0566 60.671 48.2093 61.0571 48.2093C61.4433 48.2093 61.8136 48.0566 62.0869 47.7848L69.8583 40.044Z"
                                    fill="url(#paint0_linear_8807_2888)" />
                            </g>
                            <defs>
                                <filter id="filter0_dd_8807_2888" x="0" y="0" width="126" height="126"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="10" />
                                    <feGaussianBlur stdDeviation="5" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.04 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow_8807_2888" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="20" />
                                    <feGaussianBlur stdDeviation="12.5" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                    <feBlend mode="normal" in2="effect1_dropShadow_8807_2888"
                                        result="effect2_dropShadow_8807_2888" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_8807_2888"
                                        result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_8807_2888" x1="46" y1="23"
                                    x2="85.4775" y2="56.5559" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#09BD3F" />
                                    <stop offset="1" stop-color="#09812D" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="title">Manage Appointments Seamlessly</div>
                    <div class="text">
                        Simplify scheduling and stay organized with our integrated
                        calendar and booking tools.
                    </div>
                </div>
            </div>
        </div>
        <div class="card-parent">
            <div data-aos="fade-right" class="long-card card-item">
                <div class="img-container">
                    <img src="{{ asset('front_end/assets/images/why-join-tadax-4.png') }}" alt="" />
                </div>
                <div class="overlay"></div>
                <div class="text-content">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="126" height="126" viewBox="0 0 126 126"
                            fill="none">
                            <g filter="url(#filter0_dd_8807_2888)">
                                <rect x="25" y="5" width="76" height="76" rx="38" fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M58.8734 23.9702C60.1547 23.3322 61.5675 23 63 23C64.4325 23 65.8453 23.3322 67.1266 23.9702L77.0469 28.9088C77.9344 29.3509 78.6808 30.0305 79.2024 30.8713C79.7239 31.7121 80.0001 32.681 80 33.6694V48.2744C80.0001 49.8334 79.6022 51.3668 78.8436 52.7304C78.085 54.094 76.9907 55.243 75.6635 56.0694L65.8327 62.1905C64.9833 62.7195 64.0017 63 63 63C61.9983 63 61.0167 62.7195 60.1673 62.1905L50.3365 56.0694C49.0093 55.243 47.915 54.094 47.1564 52.7304C46.3978 51.3668 45.9999 49.8334 46 48.2744V33.6694C45.9999 32.681 46.2761 31.7121 46.7977 30.8713C47.3192 30.0305 48.0656 29.3509 48.9531 28.9088L58.8734 23.9702ZM69.8583 40.044C70.0014 39.9111 70.1163 39.7509 70.1959 39.5728C70.2756 39.3948 70.3184 39.2026 70.3218 39.0077C70.3253 38.8129 70.2893 38.6193 70.216 38.4386C70.1427 38.2578 70.0336 38.0937 69.8953 37.9558C69.7569 37.818 69.5921 37.7094 69.4106 37.6364C69.2292 37.5634 69.0349 37.5275 68.8392 37.531C68.6436 37.5344 68.4506 37.5771 68.2719 37.6564C68.0931 37.7357 67.9323 37.8501 67.7989 37.9927L61.0571 44.7078L58.2011 41.8631C57.9249 41.6067 57.5596 41.4671 57.1821 41.4738C56.8046 41.4804 56.4444 41.6327 56.1774 41.8987C55.9104 42.1646 55.7575 42.5233 55.7509 42.8993C55.7442 43.2754 55.8843 43.6393 56.1417 43.9144L60.0274 47.7848C60.3006 48.0566 60.671 48.2093 61.0571 48.2093C61.4433 48.2093 61.8136 48.0566 62.0869 47.7848L69.8583 40.044Z"
                                    fill="url(#paint0_linear_8807_2888)" />
                            </g>
                            <defs>
                                <filter id="filter0_dd_8807_2888" x="0" y="0" width="126" height="126"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="10" />
                                    <feGaussianBlur stdDeviation="5" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.04 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow_8807_2888" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="20" />
                                    <feGaussianBlur stdDeviation="12.5" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                    <feBlend mode="normal" in2="effect1_dropShadow_8807_2888"
                                        result="effect2_dropShadow_8807_2888" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_8807_2888"
                                        result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_8807_2888" x1="46" y1="23"
                                    x2="85.4775" y2="56.5559" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#09BD3F" />
                                    <stop offset="1" stop-color="#09812D" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="title">Secure Document Handling</div>
                    <div class="text">
                        Simplify scheduling and stay organized with our integrated
                        calendar and booking tools.
                    </div>
                </div>
            </div>
            <div data-aos="fade-left" class="small-card card-item">
                <div class="img-container">
                    <img src="{{ asset('front_end/assets/images/why-join-tadax-5.png') }}" alt="" />
                </div>
                <div class="overlay"></div>
                <div class="text-content">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="126" height="126" viewBox="0 0 126 126"
                            fill="none">
                            <g filter="url(#filter0_dd_8807_2888)">
                                <rect x="25" y="5" width="76" height="76" rx="38" fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M58.8734 23.9702C60.1547 23.3322 61.5675 23 63 23C64.4325 23 65.8453 23.3322 67.1266 23.9702L77.0469 28.9088C77.9344 29.3509 78.6808 30.0305 79.2024 30.8713C79.7239 31.7121 80.0001 32.681 80 33.6694V48.2744C80.0001 49.8334 79.6022 51.3668 78.8436 52.7304C78.085 54.094 76.9907 55.243 75.6635 56.0694L65.8327 62.1905C64.9833 62.7195 64.0017 63 63 63C61.9983 63 61.0167 62.7195 60.1673 62.1905L50.3365 56.0694C49.0093 55.243 47.915 54.094 47.1564 52.7304C46.3978 51.3668 45.9999 49.8334 46 48.2744V33.6694C45.9999 32.681 46.2761 31.7121 46.7977 30.8713C47.3192 30.0305 48.0656 29.3509 48.9531 28.9088L58.8734 23.9702ZM69.8583 40.044C70.0014 39.9111 70.1163 39.7509 70.1959 39.5728C70.2756 39.3948 70.3184 39.2026 70.3218 39.0077C70.3253 38.8129 70.2893 38.6193 70.216 38.4386C70.1427 38.2578 70.0336 38.0937 69.8953 37.9558C69.7569 37.818 69.5921 37.7094 69.4106 37.6364C69.2292 37.5634 69.0349 37.5275 68.8392 37.531C68.6436 37.5344 68.4506 37.5771 68.2719 37.6564C68.0931 37.7357 67.9323 37.8501 67.7989 37.9927L61.0571 44.7078L58.2011 41.8631C57.9249 41.6067 57.5596 41.4671 57.1821 41.4738C56.8046 41.4804 56.4444 41.6327 56.1774 41.8987C55.9104 42.1646 55.7575 42.5233 55.7509 42.8993C55.7442 43.2754 55.8843 43.6393 56.1417 43.9144L60.0274 47.7848C60.3006 48.0566 60.671 48.2093 61.0571 48.2093C61.4433 48.2093 61.8136 48.0566 62.0869 47.7848L69.8583 40.044Z"
                                    fill="url(#paint0_linear_8807_2888)" />
                            </g>
                            <defs>
                                <filter id="filter0_dd_8807_2888" x="0" y="0" width="126" height="126"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="10" />
                                    <feGaussianBlur stdDeviation="5" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.04 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow_8807_2888" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="20" />
                                    <feGaussianBlur stdDeviation="12.5" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                    <feBlend mode="normal" in2="effect1_dropShadow_8807_2888"
                                        result="effect2_dropShadow_8807_2888" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_8807_2888"
                                        result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_8807_2888" x1="46" y1="23"
                                    x2="85.4775" y2="56.5559" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#09BD3F" />
                                    <stop offset="1" stop-color="#09812D" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="title">Reach More Clients</div>
                    <div class="text">
                        Track your performance and client engagement with real-time data.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- why join tadax end -->

    <!-- how it works start -->
    <div class="how-it-works">
        <div data-aos="fade-right" class="section-title">
            How it <span>Works
        </div>

        <div data-aos="fade-right" class="section-text">
            Discover the benefits of working with verified professionals who make
            tax preparation stress-free and reliable.
        </div>
        <!-- process start -->
        <div class="home-process">
            <div data-aos="fade-right" class="item">
                <div class="process-count">1</div>
                <div class="light-container">
                    <svg class="light-off" xmlns="http://www.w3.org/2000/svg" width="54" height="54"
                        viewBox="0 0 54 54" fill="none">
                        <path
                            d="M38.917 25.6914C38.917 19.1289 33.5625 13.7744 27 13.7744C20.4375 13.7744 15.083 19.1289 15.083 25.6914C15.083 26.6368 15.1876 27.5822 15.4501 28.5255C15.7659 30.0472 16.3422 30.9926 17.1297 32.3051C17.2876 32.6209 17.4968 32.9347 17.708 33.3018C17.9705 33.7222 18.1797 34.1426 18.4422 34.5097C19.4922 36.2426 20.1218 37.2393 20.1218 39.2881V44.2222C20.1218 45.4814 21.0138 46.4801 22.2218 46.6893C22.7468 49.3676 24.3218 51.0472 27.0001 51.0472C29.6784 51.0472 31.3047 49.3676 31.7784 46.6893C32.9864 46.4801 33.8784 45.4301 33.8784 44.2222V39.2881C33.8784 37.2414 34.508 36.1914 35.558 34.5097C35.7672 34.1426 36.0297 33.7222 36.2922 33.3018C36.5014 32.9347 36.7126 32.6189 36.8705 32.3051C37.658 30.9926 38.2364 30.0472 38.5501 28.5255C38.8126 27.5822 38.9172 26.6368 38.9172 25.6914H38.917ZM31.8295 40.5494H22.275V39.3415C22.275 39.079 22.275 38.8698 22.2217 38.6586H31.8297C31.8297 38.8678 31.7764 39.079 31.7764 39.3415L31.7784 40.5494H31.8295ZM31.3578 44.6981H22.6417C22.3792 44.6981 22.2213 44.4889 22.2213 44.2777V42.6494H31.7758V44.2777C31.8291 44.4869 31.6199 44.6981 31.3574 44.6981H31.3578ZM26.9999 49.0027C26.4215 49.0027 24.9532 49.0027 24.3749 46.7981H29.6784C29.1001 49.0027 27.5784 49.0027 27.0001 49.0027H26.9999ZM36.5034 28.1072C36.2409 29.2618 35.8205 30.0493 35.0863 31.2572C34.8771 31.573 34.7192 31.8868 34.508 32.2538C34.2455 32.6742 34.0363 33.0947 33.8251 33.4084C33.1955 34.4584 32.6171 35.4038 32.2501 36.5051H21.8545C21.4875 35.4017 20.9625 34.4584 20.2795 33.4084C20.0704 33.0413 19.8079 32.6743 19.5966 32.2538C19.3874 31.8867 19.1762 31.5197 19.0183 31.2572C18.2841 29.998 17.8637 29.2618 17.6012 28.0538C17.392 27.2663 17.2854 26.4788 17.2854 25.6913C17.2854 20.2833 21.6945 15.8744 27.1024 15.8744C32.5104 15.8744 36.9193 20.2835 36.9193 25.6913C36.8168 26.4788 36.7122 27.2663 36.503 28.1072H36.5034Z"
                            fill="#111111" />
                        <path
                            d="M48.6296 24.6406H44.2717C43.6933 24.6406 43.2217 25.1123 43.2217 25.6906C43.2217 26.269 43.6934 26.7406 44.2717 26.7406H48.6296C49.2079 26.7406 49.6796 26.2689 49.6796 25.6906C49.6796 25.1143 49.2079 24.6406 48.6296 24.6406Z"
                            fill="#111111" />
                        <path
                            d="M39.1795 14.5615C39.442 14.5615 39.7045 14.4569 39.9137 14.2457L43.0103 11.149C43.4307 10.7286 43.4307 10.099 43.0103 9.67859C42.5899 9.25818 41.9603 9.25818 41.5399 9.67859L38.4432 12.7752C38.0228 13.1957 38.0228 13.8252 38.4432 14.2457C38.6545 14.4569 38.917 14.5615 39.1794 14.5615H39.1795Z"
                            fill="#111111" />
                        <path
                            d="M27.0002 9.46964C27.5785 9.46964 28.0502 8.99796 28.0502 8.41964V4.06172C28.0502 3.48338 27.5785 3.01172 27.0002 3.01172C26.4219 3.01172 25.9502 3.4834 25.9502 4.06172V8.41964C25.9502 8.99798 26.4219 9.46964 27.0002 9.46964Z"
                            fill="#111111" />
                        <path
                            d="M14.084 14.2486C14.2932 14.4578 14.5557 14.5644 14.8182 14.5644C15.0806 14.5644 15.3432 14.4598 15.5523 14.2486C15.9727 13.8282 15.9727 13.1986 15.5523 12.7782L12.4556 9.68152C12.0352 9.26111 11.4056 9.26111 10.9852 9.68152C10.5648 10.1019 10.5648 10.7315 10.9852 11.1519L14.084 14.2486Z"
                            fill="#111111" />
                        <path
                            d="M9.7795 24.6406H5.42158C4.84324 24.6406 4.37158 25.1123 4.37158 25.6906C4.37158 26.269 4.84326 26.7406 5.42158 26.7406H9.7795C10.3578 26.7406 10.8295 26.2689 10.8295 25.6906C10.8295 25.1143 10.3578 24.6406 9.7795 24.6406Z"
                            fill="#111111" />
                        <path
                            d="M14.0838 37.1366L10.9872 40.2333C10.5668 40.6537 10.5668 41.2833 10.9872 41.7037C11.1964 41.9129 11.4589 42.0195 11.7213 42.0195C11.9838 42.0195 12.2463 41.9149 12.4555 41.7037L15.5522 38.607C15.9726 38.1866 15.9726 37.557 15.5522 37.1366C15.1338 36.7162 14.4529 36.7162 14.0838 37.1366H14.0838Z"
                            fill="#111111" />
                        <path
                            d="M39.9161 37.1366C39.4957 36.7162 38.8661 36.7162 38.4457 37.1366C38.0253 37.557 38.0253 38.1866 38.4457 38.607L41.5423 41.7037C41.7515 41.9129 42.014 42.0195 42.2765 42.0195C42.539 42.0195 42.8015 41.9149 43.0107 41.7037C43.4311 41.2833 43.4311 40.6537 43.0107 40.2333L39.9161 37.1366Z"
                            fill="#111111" />
                    </svg>
                </div>
                <div class="item-title">Sign Up as Tax Prepaerer</div>
                <div class="item-text">
                    Join TAXDAX by creating a professional profile. Add your
                    qualifications, certifications, and a brief bio to let potential
                    clients know who you are and what makes your services stand out.
                </div>
            </div>
            <div class="item">
                <div class="process-count">2</div>
                <div class="light-container">
                    <svg class="light-off" xmlns="http://www.w3.org/2000/svg" width="54" height="54"
                        viewBox="0 0 54 54" fill="none">
                        <path
                            d="M38.917 25.6914C38.917 19.1289 33.5625 13.7744 27 13.7744C20.4375 13.7744 15.083 19.1289 15.083 25.6914C15.083 26.6368 15.1876 27.5822 15.4501 28.5255C15.7659 30.0472 16.3422 30.9926 17.1297 32.3051C17.2876 32.6209 17.4968 32.9347 17.708 33.3018C17.9705 33.7222 18.1797 34.1426 18.4422 34.5097C19.4922 36.2426 20.1218 37.2393 20.1218 39.2881V44.2222C20.1218 45.4814 21.0138 46.4801 22.2218 46.6893C22.7468 49.3676 24.3218 51.0472 27.0001 51.0472C29.6784 51.0472 31.3047 49.3676 31.7784 46.6893C32.9864 46.4801 33.8784 45.4301 33.8784 44.2222V39.2881C33.8784 37.2414 34.508 36.1914 35.558 34.5097C35.7672 34.1426 36.0297 33.7222 36.2922 33.3018C36.5014 32.9347 36.7126 32.6189 36.8705 32.3051C37.658 30.9926 38.2364 30.0472 38.5501 28.5255C38.8126 27.5822 38.9172 26.6368 38.9172 25.6914H38.917ZM31.8295 40.5494H22.275V39.3415C22.275 39.079 22.275 38.8698 22.2217 38.6586H31.8297C31.8297 38.8678 31.7764 39.079 31.7764 39.3415L31.7784 40.5494H31.8295ZM31.3578 44.6981H22.6417C22.3792 44.6981 22.2213 44.4889 22.2213 44.2777V42.6494H31.7758V44.2777C31.8291 44.4869 31.6199 44.6981 31.3574 44.6981H31.3578ZM26.9999 49.0027C26.4215 49.0027 24.9532 49.0027 24.3749 46.7981H29.6784C29.1001 49.0027 27.5784 49.0027 27.0001 49.0027H26.9999ZM36.5034 28.1072C36.2409 29.2618 35.8205 30.0493 35.0863 31.2572C34.8771 31.573 34.7192 31.8868 34.508 32.2538C34.2455 32.6742 34.0363 33.0947 33.8251 33.4084C33.1955 34.4584 32.6171 35.4038 32.2501 36.5051H21.8545C21.4875 35.4017 20.9625 34.4584 20.2795 33.4084C20.0704 33.0413 19.8079 32.6743 19.5966 32.2538C19.3874 31.8867 19.1762 31.5197 19.0183 31.2572C18.2841 29.998 17.8637 29.2618 17.6012 28.0538C17.392 27.2663 17.2854 26.4788 17.2854 25.6913C17.2854 20.2833 21.6945 15.8744 27.1024 15.8744C32.5104 15.8744 36.9193 20.2835 36.9193 25.6913C36.8168 26.4788 36.7122 27.2663 36.503 28.1072H36.5034Z"
                            fill="#111111" />
                        <path
                            d="M48.6296 24.6406H44.2717C43.6933 24.6406 43.2217 25.1123 43.2217 25.6906C43.2217 26.269 43.6934 26.7406 44.2717 26.7406H48.6296C49.2079 26.7406 49.6796 26.2689 49.6796 25.6906C49.6796 25.1143 49.2079 24.6406 48.6296 24.6406Z"
                            fill="#111111" />
                        <path
                            d="M39.1795 14.5615C39.442 14.5615 39.7045 14.4569 39.9137 14.2457L43.0103 11.149C43.4307 10.7286 43.4307 10.099 43.0103 9.67859C42.5899 9.25818 41.9603 9.25818 41.5399 9.67859L38.4432 12.7752C38.0228 13.1957 38.0228 13.8252 38.4432 14.2457C38.6545 14.4569 38.917 14.5615 39.1794 14.5615H39.1795Z"
                            fill="#111111" />
                        <path
                            d="M27.0002 9.46964C27.5785 9.46964 28.0502 8.99796 28.0502 8.41964V4.06172C28.0502 3.48338 27.5785 3.01172 27.0002 3.01172C26.4219 3.01172 25.9502 3.4834 25.9502 4.06172V8.41964C25.9502 8.99798 26.4219 9.46964 27.0002 9.46964Z"
                            fill="#111111" />
                        <path
                            d="M14.084 14.2486C14.2932 14.4578 14.5557 14.5644 14.8182 14.5644C15.0806 14.5644 15.3432 14.4598 15.5523 14.2486C15.9727 13.8282 15.9727 13.1986 15.5523 12.7782L12.4556 9.68152C12.0352 9.26111 11.4056 9.26111 10.9852 9.68152C10.5648 10.1019 10.5648 10.7315 10.9852 11.1519L14.084 14.2486Z"
                            fill="#111111" />
                        <path
                            d="M9.7795 24.6406H5.42158C4.84324 24.6406 4.37158 25.1123 4.37158 25.6906C4.37158 26.269 4.84326 26.7406 5.42158 26.7406H9.7795C10.3578 26.7406 10.8295 26.2689 10.8295 25.6906C10.8295 25.1143 10.3578 24.6406 9.7795 24.6406Z"
                            fill="#111111" />
                        <path
                            d="M14.0838 37.1366L10.9872 40.2333C10.5668 40.6537 10.5668 41.2833 10.9872 41.7037C11.1964 41.9129 11.4589 42.0195 11.7213 42.0195C11.9838 42.0195 12.2463 41.9149 12.4555 41.7037L15.5522 38.607C15.9726 38.1866 15.9726 37.557 15.5522 37.1366C15.1338 36.7162 14.4529 36.7162 14.0838 37.1366H14.0838Z"
                            fill="#111111" />
                        <path
                            d="M39.9161 37.1366C39.4957 36.7162 38.8661 36.7162 38.4457 37.1366C38.0253 37.557 38.0253 38.1866 38.4457 38.607L41.5423 41.7037C41.7515 41.9129 42.014 42.0195 42.2765 42.0195C42.539 42.0195 42.8015 41.9149 43.0107 41.7037C43.4311 41.2833 43.4311 40.6537 43.0107 40.2333L39.9161 37.1366Z"
                            fill="#111111" />
                    </svg>
                </div>
                <div class="item-title">Set Up Your Services</div>
                <div class="item-text">
                    "List the tax services you offer, from personal tax filing to
                    business consulting. Set your pricing, determine your availability,
                    and let clients know how they can book appointments with you.
                </div>
            </div>
            <div data-aos="fade-left" class="item">
                <div class="process-count">3</div>
                <div class="light-container">
                    <svg class="light-off" xmlns="http://www.w3.org/2000/svg" width="54" height="54"
                        viewBox="0 0 54 54" fill="none">
                        <path
                            d="M38.917 25.6914C38.917 19.1289 33.5625 13.7744 27 13.7744C20.4375 13.7744 15.083 19.1289 15.083 25.6914C15.083 26.6368 15.1876 27.5822 15.4501 28.5255C15.7659 30.0472 16.3422 30.9926 17.1297 32.3051C17.2876 32.6209 17.4968 32.9347 17.708 33.3018C17.9705 33.7222 18.1797 34.1426 18.4422 34.5097C19.4922 36.2426 20.1218 37.2393 20.1218 39.2881V44.2222C20.1218 45.4814 21.0138 46.4801 22.2218 46.6893C22.7468 49.3676 24.3218 51.0472 27.0001 51.0472C29.6784 51.0472 31.3047 49.3676 31.7784 46.6893C32.9864 46.4801 33.8784 45.4301 33.8784 44.2222V39.2881C33.8784 37.2414 34.508 36.1914 35.558 34.5097C35.7672 34.1426 36.0297 33.7222 36.2922 33.3018C36.5014 32.9347 36.7126 32.6189 36.8705 32.3051C37.658 30.9926 38.2364 30.0472 38.5501 28.5255C38.8126 27.5822 38.9172 26.6368 38.9172 25.6914H38.917ZM31.8295 40.5494H22.275V39.3415C22.275 39.079 22.275 38.8698 22.2217 38.6586H31.8297C31.8297 38.8678 31.7764 39.079 31.7764 39.3415L31.7784 40.5494H31.8295ZM31.3578 44.6981H22.6417C22.3792 44.6981 22.2213 44.4889 22.2213 44.2777V42.6494H31.7758V44.2777C31.8291 44.4869 31.6199 44.6981 31.3574 44.6981H31.3578ZM26.9999 49.0027C26.4215 49.0027 24.9532 49.0027 24.3749 46.7981H29.6784C29.1001 49.0027 27.5784 49.0027 27.0001 49.0027H26.9999ZM36.5034 28.1072C36.2409 29.2618 35.8205 30.0493 35.0863 31.2572C34.8771 31.573 34.7192 31.8868 34.508 32.2538C34.2455 32.6742 34.0363 33.0947 33.8251 33.4084C33.1955 34.4584 32.6171 35.4038 32.2501 36.5051H21.8545C21.4875 35.4017 20.9625 34.4584 20.2795 33.4084C20.0704 33.0413 19.8079 32.6743 19.5966 32.2538C19.3874 31.8867 19.1762 31.5197 19.0183 31.2572C18.2841 29.998 17.8637 29.2618 17.6012 28.0538C17.392 27.2663 17.2854 26.4788 17.2854 25.6913C17.2854 20.2833 21.6945 15.8744 27.1024 15.8744C32.5104 15.8744 36.9193 20.2835 36.9193 25.6913C36.8168 26.4788 36.7122 27.2663 36.503 28.1072H36.5034Z"
                            fill="#111111" />
                        <path
                            d="M48.6296 24.6406H44.2717C43.6933 24.6406 43.2217 25.1123 43.2217 25.6906C43.2217 26.269 43.6934 26.7406 44.2717 26.7406H48.6296C49.2079 26.7406 49.6796 26.2689 49.6796 25.6906C49.6796 25.1143 49.2079 24.6406 48.6296 24.6406Z"
                            fill="#111111" />
                        <path
                            d="M39.1795 14.5615C39.442 14.5615 39.7045 14.4569 39.9137 14.2457L43.0103 11.149C43.4307 10.7286 43.4307 10.099 43.0103 9.67859C42.5899 9.25818 41.9603 9.25818 41.5399 9.67859L38.4432 12.7752C38.0228 13.1957 38.0228 13.8252 38.4432 14.2457C38.6545 14.4569 38.917 14.5615 39.1794 14.5615H39.1795Z"
                            fill="#111111" />
                        <path
                            d="M27.0002 9.46964C27.5785 9.46964 28.0502 8.99796 28.0502 8.41964V4.06172C28.0502 3.48338 27.5785 3.01172 27.0002 3.01172C26.4219 3.01172 25.9502 3.4834 25.9502 4.06172V8.41964C25.9502 8.99798 26.4219 9.46964 27.0002 9.46964Z"
                            fill="#111111" />
                        <path
                            d="M14.084 14.2486C14.2932 14.4578 14.5557 14.5644 14.8182 14.5644C15.0806 14.5644 15.3432 14.4598 15.5523 14.2486C15.9727 13.8282 15.9727 13.1986 15.5523 12.7782L12.4556 9.68152C12.0352 9.26111 11.4056 9.26111 10.9852 9.68152C10.5648 10.1019 10.5648 10.7315 10.9852 11.1519L14.084 14.2486Z"
                            fill="#111111" />
                        <path
                            d="M9.7795 24.6406H5.42158C4.84324 24.6406 4.37158 25.1123 4.37158 25.6906C4.37158 26.269 4.84326 26.7406 5.42158 26.7406H9.7795C10.3578 26.7406 10.8295 26.2689 10.8295 25.6906C10.8295 25.1143 10.3578 24.6406 9.7795 24.6406Z"
                            fill="#111111" />
                        <path
                            d="M14.0838 37.1366L10.9872 40.2333C10.5668 40.6537 10.5668 41.2833 10.9872 41.7037C11.1964 41.9129 11.4589 42.0195 11.7213 42.0195C11.9838 42.0195 12.2463 41.9149 12.4555 41.7037L15.5522 38.607C15.9726 38.1866 15.9726 37.557 15.5522 37.1366C15.1338 36.7162 14.4529 36.7162 14.0838 37.1366H14.0838Z"
                            fill="#111111" />
                        <path
                            d="M39.9161 37.1366C39.4957 36.7162 38.8661 36.7162 38.4457 37.1366C38.0253 37.557 38.0253 38.1866 38.4457 38.607L41.5423 41.7037C41.7515 41.9129 42.014 42.0195 42.2765 42.0195C42.539 42.0195 42.8015 41.9149 43.0107 41.7037C43.4311 41.2833 43.4311 40.6537 43.0107 40.2333L39.9161 37.1366Z"
                            fill="#111111" />
                    </svg>
                    <svg class="light-on" xmlns="http://www.w3.org/2000/svg" width="54" height="54"
                        viewBox="0 0 54 54" fill="none">
                        <path
                            d="M38.917 25.6914C38.917 19.1289 33.5625 13.7744 27 13.7744C20.4375 13.7744 15.083 19.1289 15.083 25.6914C15.083 26.6368 15.1876 27.5822 15.4501 28.5255C15.7659 30.0472 16.3422 30.9926 17.1297 32.3051C17.2876 32.6209 17.4968 32.9347 17.708 33.3018C17.9705 33.7222 18.1797 34.1426 18.4422 34.5097C19.4922 36.2426 20.1218 37.2393 20.1218 39.2881V44.2222C20.1218 45.4814 21.0138 46.4801 22.2218 46.6893C22.7468 49.3676 24.3218 51.0472 27.0001 51.0472C29.6784 51.0472 31.3047 49.3676 31.7784 46.6893C32.9864 46.4801 33.8784 45.4301 33.8784 44.2222V39.2881C33.8784 37.2414 34.508 36.1914 35.558 34.5097C35.7672 34.1426 36.0297 33.7222 36.2922 33.3018C36.5014 32.9347 36.7126 32.6189 36.8705 32.3051C37.658 30.9926 38.2364 30.0472 38.5501 28.5255C38.8126 27.5822 38.9172 26.6368 38.9172 25.6914H38.917ZM31.8295 40.5494H22.275V39.3415C22.275 39.079 22.275 38.8698 22.2217 38.6586H31.8297C31.8297 38.8678 31.7764 39.079 31.7764 39.3415L31.7784 40.5494H31.8295ZM31.3578 44.6981H22.6417C22.3792 44.6981 22.2213 44.4889 22.2213 44.2777V42.6494H31.7758V44.2777C31.8291 44.4869 31.6199 44.6981 31.3574 44.6981H31.3578ZM26.9999 49.0027C26.4215 49.0027 24.9532 49.0027 24.3749 46.7981H29.6784C29.1001 49.0027 27.5784 49.0027 27.0001 49.0027H26.9999ZM36.5034 28.1072C36.2409 29.2618 35.8205 30.0493 35.0863 31.2572C34.8771 31.573 34.7192 31.8868 34.508 32.2538C34.2455 32.6742 34.0363 33.0947 33.8251 33.4084C33.1955 34.4584 32.6171 35.4038 32.2501 36.5051H21.8545C21.4875 35.4017 20.9625 34.4584 20.2795 33.4084C20.0704 33.0413 19.8079 32.6743 19.5966 32.2538C19.3874 31.8867 19.1762 31.5197 19.0183 31.2572C18.2841 29.998 17.8637 29.2618 17.6012 28.0538C17.392 27.2663 17.2854 26.4788 17.2854 25.6913C17.2854 20.2833 21.6945 15.8744 27.1024 15.8744C32.5104 15.8744 36.9193 20.2835 36.9193 25.6913C36.8168 26.4788 36.7122 27.2663 36.503 28.1072H36.5034Z"
                            fill="url(#paint0_linear_8547_652)" />
                        <path
                            d="M48.6296 24.6406H44.2717C43.6933 24.6406 43.2217 25.1123 43.2217 25.6906C43.2217 26.269 43.6934 26.7406 44.2717 26.7406H48.6296C49.2079 26.7406 49.6796 26.2689 49.6796 25.6906C49.6796 25.1143 49.2079 24.6406 48.6296 24.6406Z"
                            fill="url(#paint1_linear_8547_652)" />
                        <path
                            d="M39.1795 14.5615C39.442 14.5615 39.7045 14.4569 39.9137 14.2457L43.0103 11.149C43.4307 10.7286 43.4307 10.099 43.0103 9.67859C42.5899 9.25818 41.9603 9.25818 41.5399 9.67859L38.4432 12.7752C38.0228 13.1957 38.0228 13.8252 38.4432 14.2457C38.6545 14.4569 38.917 14.5615 39.1794 14.5615H39.1795Z"
                            fill="url(#paint2_linear_8547_652)" />
                        <path
                            d="M27.0002 9.46964C27.5785 9.46964 28.0502 8.99796 28.0502 8.41964V4.06172C28.0502 3.48338 27.5785 3.01172 27.0002 3.01172C26.4219 3.01172 25.9502 3.4834 25.9502 4.06172V8.41964C25.9502 8.99798 26.4219 9.46964 27.0002 9.46964Z"
                            fill="url(#paint3_linear_8547_652)" />
                        <path
                            d="M14.084 14.2486C14.2932 14.4578 14.5557 14.5644 14.8182 14.5644C15.0806 14.5644 15.3432 14.4598 15.5523 14.2486C15.9727 13.8282 15.9727 13.1986 15.5523 12.7782L12.4556 9.68152C12.0352 9.26111 11.4056 9.26111 10.9852 9.68152C10.5648 10.1019 10.5648 10.7315 10.9852 11.1519L14.084 14.2486Z"
                            fill="url(#paint4_linear_8547_652)" />
                        <path
                            d="M9.7795 24.6406H5.42158C4.84324 24.6406 4.37158 25.1123 4.37158 25.6906C4.37158 26.269 4.84326 26.7406 5.42158 26.7406H9.7795C10.3578 26.7406 10.8295 26.2689 10.8295 25.6906C10.8295 25.1143 10.3578 24.6406 9.7795 24.6406Z"
                            fill="url(#paint5_linear_8547_652)" />
                        <path
                            d="M14.0838 37.1366L10.9872 40.2333C10.5668 40.6537 10.5668 41.2833 10.9872 41.7037C11.1964 41.9129 11.4589 42.0195 11.7213 42.0195C11.9838 42.0195 12.2463 41.9149 12.4555 41.7037L15.5522 38.607C15.9726 38.1866 15.9726 37.557 15.5522 37.1366C15.1338 36.7162 14.4529 36.7162 14.0838 37.1366H14.0838Z"
                            fill="url(#paint6_linear_8547_652)" />
                        <path
                            d="M39.9161 37.1366C39.4957 36.7162 38.8661 36.7162 38.4457 37.1366C38.0253 37.557 38.0253 38.1866 38.4457 38.607L41.5423 41.7037C41.7515 41.9129 42.014 42.0195 42.2765 42.0195C42.539 42.0195 42.8015 41.9149 43.0107 41.7037C43.4311 41.2833 43.4311 40.6537 43.0107 40.2333L39.9161 37.1366Z"
                            fill="url(#paint7_linear_8547_652)" />
                        <defs>
                            <linearGradient id="paint0_linear_8547_652" x1="15.083" y1="13.7744" x2="48.9168"
                                y2="35.4095" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#09BD3F" />
                                <stop offset="1" stop-color="#09812D" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_8547_652" x1="43.2217" y1="24.6406" x2="44.4568"
                                y2="28.439" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#09BD3F" />
                                <stop offset="1" stop-color="#09812D" />
                            </linearGradient>
                            <linearGradient id="paint2_linear_8547_652" x1="38.1279" y1="9.36328" x2="43.3261"
                                y2="14.561" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#09BD3F" />
                                <stop offset="1" stop-color="#09812D" />
                            </linearGradient>
                            <linearGradient id="paint3_linear_8547_652" x1="25.9502" y1="3.01172" x2="29.7485"
                                y2="4.24687" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#09BD3F" />
                                <stop offset="1" stop-color="#09812D" />
                            </linearGradient>
                            <linearGradient id="paint4_linear_8547_652" x1="10.6699" y1="9.36621" x2="15.8681"
                                y2="14.5639" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#09BD3F" />
                                <stop offset="1" stop-color="#09812D" />
                            </linearGradient>
                            <linearGradient id="paint5_linear_8547_652" x1="4.37158" y1="24.6406" x2="5.60674"
                                y2="28.439" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#09BD3F" />
                                <stop offset="1" stop-color="#09812D" />
                            </linearGradient>
                            <linearGradient id="paint6_linear_8547_652" x1="10.6719" y1="36.8213" x2="15.8701"
                                y2="42.0169" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#09BD3F" />
                                <stop offset="1" stop-color="#09812D" />
                            </linearGradient>
                            <linearGradient id="paint7_linear_8547_652" x1="38.1304" y1="36.8213" x2="43.3286"
                                y2="42.0169" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#09BD3F" />
                                <stop offset="1" stop-color="#09812D" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="item-title">Start Getting Bookings</div>
                <div class="item-text">
                    Once your profile is live, start receiving inquiries from clients.
                    Respond to messages, accept appointments, and watch your client base
                    grow as more people discover and trust your expertise.
                </div>
            </div>
        </div>
        <!-- process end -->
    </div>
    <!-- how it works end -->

    <!-- powerful tools section start -->
    <div class="powerful-tools-container">
        <div data-aos="fade-right" class="section-title">
            <span>Powerful Tools</span> to Grow Your Practice
        </div>
        <div data-aos="fade-left" class="section-text mt-4">
            Discover the benefits of working with verified professionals who make
            tax preparation stress-free and reliable.
        </div>
        <div class="tools">
            <div data-aos="fade-right" class="item">
                <div class="left">
                    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="39" viewBox="0 0 38 39"
                        fill="none">
                        <path
                            d="M14.9998 16.6667C19.6022 16.6667 23.3332 12.9357 23.3332 8.33333C23.3332 3.73096 19.6022 0 14.9998 0C10.3975 0 6.6665 3.73096 6.6665 8.33333C6.6665 12.9357 10.3975 16.6667 14.9998 16.6667Z"
                            fill="" />
                        <path
                            d="M19.2233 34.6667C18.8077 33.9438 18.6177 33.1132 18.678 32.2815C18.7383 31.4499 19.0461 30.6553 19.5617 30C19.0459 29.3448 18.738 28.5502 18.6777 27.7185C18.6174 26.8868 18.8074 26.0561 19.2233 25.3333L20.5717 23C20.9899 22.2785 21.6145 21.6986 22.3651 21.3351C23.1157 20.9715 23.9579 20.8409 24.7833 20.96C24.8383 20.8233 24.9083 20.695 24.9767 20.565C24.0565 20.1959 23.0748 20.0042 22.0833 20H7.91667C5.81785 20.0026 3.80575 20.8376 2.32166 22.3217C0.837571 23.8058 0.00264613 25.8178 0 27.9167L0 33.75C0 34.44 0.56 35 1.25 35H19.415L19.2233 34.6667Z"
                            fill="" />
                        <path
                            d="M36.1717 30.782C36.205 30.5237 36.25 30.267 36.25 30.0003C36.25 29.732 36.2034 29.477 36.1717 29.2187L37.6734 28.082C37.8354 27.9593 37.947 27.7817 37.9872 27.5825C38.0274 27.3833 37.9935 27.1762 37.8917 27.0003L36.5434 24.667C36.4419 24.4911 36.2798 24.3584 36.0873 24.2936C35.8949 24.2289 35.6855 24.2366 35.4984 24.3153L33.77 25.0437C33.3518 24.7156 32.893 24.4428 32.405 24.232L32.175 22.397C32.1499 22.1955 32.052 22.0101 31.8997 21.8757C31.7475 21.7413 31.5515 21.667 31.3484 21.667H28.6534C28.4503 21.667 28.2542 21.7413 28.102 21.8757C27.9498 22.0101 27.8519 22.1955 27.8267 22.397L27.5967 24.232C27.1089 24.4431 26.6501 24.7159 26.2317 25.0437L24.5034 24.3153C24.3162 24.2366 24.1068 24.2289 23.9144 24.2936C23.722 24.3584 23.5598 24.4911 23.4584 24.667L22.11 27.0003C22.0083 27.1762 21.9743 27.3833 22.0145 27.5825C22.0547 27.7817 22.1663 27.9593 22.3284 28.082L23.83 29.2187C23.7967 29.477 23.7517 29.7337 23.7517 30.0003C23.7517 30.2687 23.7984 30.5237 23.83 30.782L22.3284 31.9187C22.1663 32.0413 22.0547 32.219 22.0145 32.4182C21.9743 32.6174 22.0083 32.8244 22.11 33.0003L23.4584 35.3353C23.5598 35.5112 23.722 35.6439 23.9144 35.7087C24.1068 35.7734 24.3162 35.7657 24.5034 35.687L26.2317 34.957C26.6534 35.2787 27.1017 35.562 27.5967 35.7687L27.8267 37.6037C27.8784 38.0203 28.2317 38.3337 28.6517 38.3337H31.3467C31.5498 38.3336 31.7459 38.2594 31.8981 38.125C32.0503 37.9905 32.1482 37.8052 32.1734 37.6037L32.4034 35.7687C32.8984 35.562 33.3484 35.277 33.7684 34.957L35.4967 35.6853C35.6838 35.7641 35.8933 35.7718 36.0857 35.707C36.2781 35.6423 36.4403 35.5095 36.5417 35.3337L37.89 32.9987C37.9918 32.8227 38.0258 32.6157 37.9856 32.4165C37.9453 32.2173 37.8337 32.0397 37.6717 31.917L36.1717 30.782ZM30 33.3337C29.5561 33.3437 29.1147 33.2649 28.7017 33.102C28.2886 32.9391 27.9123 32.6953 27.5948 32.385C27.2772 32.0746 27.0249 31.704 26.8526 31.2948C26.6803 30.8855 26.5915 30.446 26.5913 30.002C26.5912 29.558 26.6798 29.1184 26.8519 28.7091C27.024 28.2998 27.2762 27.929 27.5936 27.6185C27.9109 27.308 28.2872 27.064 28.7001 26.9009C29.1131 26.7378 29.5545 26.6588 29.9984 26.6687C30.8693 26.6879 31.6981 27.0474 32.3073 27.6701C32.9166 28.2927 33.2578 29.1292 33.258 30.0003C33.2582 30.8715 32.9174 31.7081 32.3085 32.3311C31.6996 32.9541 30.871 33.314 30 33.3337Z"
                            fill="" />
                        <defs>
                            <linearGradient id="" x1="6.6665" y1="0" x2="23.3332" y2="16.6667"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#09BD3F" />
                                <stop offset="1" stop-color="#09812D" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_10518_1473" x1="0" y1="20" x2="13.2411"
                                y2="42.0479" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#09BD3F" />
                                <stop offset="1" stop-color="#09812D" />
                            </linearGradient>
                            <linearGradient id="paint2_linear_10518_1473" x1="21.998" y1="21.667" x2="38.6511"
                                y2="37.6595" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#09BD3F" />
                                <stop offset="1" stop-color="#09812D" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="right">
                    <div class="title">Profile Management</div>
                    <div class="text">
                        Customize your profile to highlight your expertise and attract
                        more clients.
                    </div>
                </div>
            </div>
            <div data-aos="fade-left" class="item">
                <div class="left">
                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40"
                        fill="none">
                        <path
                            d="M27.1667 11.6667C27.1667 5.23375 21.1854 0 13.8333 0C6.48125 0 0.5 5.23375 0.5 11.6667C0.5 14.4229 1.58729 17.0388 3.58333 19.1306L2.21646 24.5958C2.14121 24.897 2.15154 25.2131 2.2463 25.5087C2.34106 25.8043 2.51647 26.0675 2.75279 26.2688C2.9891 26.47 3.27691 26.6013 3.58381 26.6478C3.8907 26.6943 4.20448 26.6541 4.48979 26.5319L12.1677 23.2413C12.2117 23.246 12.2556 23.2477 12.2996 23.2521C13.2662 16.7238 19.5625 11.6667 27.1667 11.6667ZM18.8333 10C19.163 10 19.4852 10.0977 19.7593 10.2809C20.0334 10.464 20.247 10.7243 20.3731 11.0289C20.4993 11.3334 20.5323 11.6685 20.468 11.9918C20.4037 12.3151 20.2449 12.6121 20.0118 12.8452C19.7788 13.0783 19.4818 13.237 19.1585 13.3013C18.8352 13.3656 18.5001 13.3326 18.1955 13.2065C17.891 13.0803 17.6307 12.8667 17.4476 12.5926C17.2644 12.3185 17.1667 11.9963 17.1667 11.6667C17.1667 11.2246 17.3423 10.8007 17.6548 10.4882C17.9674 10.1756 18.3913 10 18.8333 10ZM8.83333 13.3333C8.5037 13.3333 8.18146 13.2356 7.90738 13.0524C7.6333 12.8693 7.41968 12.609 7.29353 12.3045C7.16739 11.9999 7.13438 11.6648 7.19869 11.3415C7.263 11.0182 7.42173 10.7212 7.65482 10.4882C7.88791 10.2551 8.18488 10.0963 8.50818 10.032C8.83148 9.96772 9.1666 10.0007 9.47114 10.1269C9.77568 10.253 10.036 10.4666 10.2191 10.7407C10.4023 11.0148 10.5 11.337 10.5 11.6667C10.5 12.1087 10.3244 12.5326 10.0118 12.8452C9.69928 13.1577 9.27536 13.3333 8.83333 13.3333ZM13.8333 13.3333C13.5037 13.3333 13.1815 13.2356 12.9074 13.0524C12.6333 12.8693 12.4197 12.609 12.2935 12.3045C12.1674 11.9999 12.1344 11.6648 12.1987 11.3415C12.263 11.0182 12.4217 10.7212 12.6548 10.4882C12.8879 10.2551 13.1849 10.0963 13.5082 10.032C13.8315 9.96772 14.1666 10.0007 14.4711 10.1269C14.7757 10.253 15.036 10.4666 15.2191 10.7407C15.4023 11.0148 15.5 11.337 15.5 11.6667C15.5 12.1087 15.3244 12.5326 15.0118 12.8452C14.6993 13.1577 14.2754 13.3333 13.8333 13.3333Z"
                            fill="" />
                        <path
                            d="M37.4168 32.4638C39.4129 30.3718 40.5002 27.7559 40.5002 24.9997C40.5002 18.5668 34.5189 13.333 27.1668 13.333C19.8147 13.333 13.8335 18.5668 13.8335 24.9997C13.8335 31.4326 19.8147 36.6663 27.1668 36.6663C27.7232 36.666 28.2792 36.6353 28.8322 36.5745L36.5104 39.8649C36.7957 39.9871 37.1095 40.0273 37.4164 39.9808C37.7232 39.9343 38.0111 39.803 38.2474 39.6018C38.4837 39.4005 38.6591 39.1373 38.7539 38.8417C38.8486 38.5461 38.859 38.23 38.7837 37.9288L37.4168 32.4638ZM22.1668 26.6663C21.8372 26.6663 21.515 26.5686 21.2409 26.3855C20.9668 26.2023 20.7532 25.942 20.627 25.6375C20.5009 25.3329 20.4679 24.9978 20.5322 24.6745C20.5965 24.3512 20.7552 24.0543 20.9883 23.8212C21.2214 23.5881 21.5184 23.4293 21.8417 23.365C22.165 23.3007 22.5001 23.3337 22.8046 23.4599C23.1092 23.586 23.3695 23.7996 23.5526 24.0737C23.7357 24.3478 23.8335 24.67 23.8335 24.9997C23.8335 25.4417 23.6579 25.8656 23.3453 26.1782C23.0328 26.4907 22.6089 26.6663 22.1668 26.6663ZM27.1668 26.6663C26.8372 26.6663 26.515 26.5686 26.2409 26.3855C25.9668 26.2023 25.7532 25.942 25.627 25.6375C25.5009 25.3329 25.4679 24.9978 25.5322 24.6745C25.5965 24.3512 25.7552 24.0543 25.9883 23.8212C26.2214 23.5881 26.5184 23.4293 26.8417 23.365C27.165 23.3007 27.5001 23.3337 27.8046 23.4599C28.1092 23.586 28.3695 23.7996 28.5526 24.0737C28.7357 24.3478 28.8335 24.67 28.8335 24.9997C28.8335 25.4417 28.6579 25.8656 28.3453 26.1782C28.0328 26.4907 27.6089 26.6663 27.1668 26.6663ZM32.1668 26.6663C31.8372 26.6663 31.515 26.5686 31.2409 26.3855C30.9668 26.2023 30.7532 25.942 30.627 25.6375C30.5009 25.3329 30.4679 24.9978 30.5322 24.6745C30.5965 24.3512 30.7552 24.0543 30.9883 23.8212C31.2214 23.5881 31.5184 23.4293 31.8417 23.365C32.165 23.3007 32.5001 23.3337 32.8046 23.4599C33.1092 23.586 33.3695 23.7996 33.5526 24.0737C33.7358 24.3478 33.8335 24.67 33.8335 24.9997C33.8335 25.4417 33.6579 25.8656 33.3453 26.1782C33.0328 26.4907 32.6089 26.6663 32.1668 26.6663Z"
                            fill="" />
                    </svg>
                </div>
                <div class="right">
                    <div class="title">Client Communication</div>
                    <div class="text">
                        Stay in touch with clients using our built-in messaging system.
                    </div>
                </div>
            </div>
            <div data-aos="fade-right" class="item">
                <div class="left">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"
                        fill="none">
                        <path
                            d="M10.625 18.9062C4.80945 18.9062 0.078125 23.6376 0.078125 29.4531C0.078125 35.2687 4.80945 40 10.625 40C16.4405 40 21.1719 35.2687 21.1719 29.4531C21.1719 23.6376 16.4405 18.9062 10.625 18.9062ZM15.2817 28.1723L9.81297 33.6411C9.58422 33.8699 9.2843 33.9844 8.98438 33.9844C8.68445 33.9844 8.38453 33.8699 8.15578 33.6411L5.81203 31.2973C5.35437 30.8398 5.35437 30.0977 5.81203 29.6401C6.26961 29.1825 7.01164 29.1825 7.4693 29.6401L8.98438 31.1552L13.6245 26.5151C14.0821 26.0575 14.8241 26.0575 15.2818 26.5151C15.7394 26.9727 15.7394 27.7148 15.2817 28.1723Z"
                            fill="" />
                        <path
                            d="M30.9375 10.1562C30.2903 10.1562 29.7656 9.63156 29.7656 8.98438V0H12.9688C11.0302 0 9.45312 1.57711 9.45312 3.51562V16.6163C9.83922 16.5813 10.2299 16.5625 10.625 16.5625C14.6194 16.5625 18.1951 18.3887 20.5614 21.25H33.2812C33.9284 21.25 34.4531 21.7747 34.4531 22.4219C34.4531 23.0691 33.9284 23.5938 33.2812 23.5938H22.1053C22.8541 25.0547 23.3146 26.6462 23.4618 28.2812H33.2812C33.9284 28.2812 34.4531 28.8059 34.4531 29.4531C34.4531 30.1003 33.9284 30.625 33.2812 30.625H23.4618C23.1113 34.4952 21.0435 37.877 18.028 40H36.4062C38.3448 40 39.9219 38.4229 39.9219 36.4844V10.1562H30.9375ZM33.2812 16.5625H16.0938C15.4466 16.5625 14.9219 16.0378 14.9219 15.3906C14.9219 14.7434 15.4466 14.2188 16.0938 14.2188H33.2812C33.9284 14.2188 34.4531 14.7434 34.4531 15.3906C34.4531 16.0378 33.9284 16.5625 33.2812 16.5625Z"
                            fill="" />
                        <path d="M32.1094 0.686523V7.81285H39.2352L32.1094 0.686523Z" fill="" />
                    </svg>
                </div>
                <div class="right">
                    <div class="title">Document Management</div>
                    <div class="text">
                        Safely receive and share documents directly within the platform.
                    </div>
                </div>
            </div>
            <div data-aos="fade-left" class="item">
                <div class="left">
                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40"
                        fill="none">
                        <path
                            d="M29.169 20C29.3626 20 29.5498 19.9324 29.6996 19.8095L36.5923 14.1178C37.1001 13.6962 37.2938 13.0224 37.0871 12.4039C36.8837 11.7805 36.327 11.3516 35.6712 11.3126L24.4752 10.6192L20.2979 0.961094C20.0465 0.376797 19.4719 0 18.834 0C18.196 0 17.6215 0.376797 17.37 0.960312L13.1929 10.6193L1.99771 11.3127C1.34099 11.3517 0.784353 11.7806 0.582556 12.3991C0.374197 13.0224 0.567869 13.6963 1.07732 14.1195L9.47474 21.0538L7.37998 31.4339C7.25467 32.0565 7.51263 32.692 8.03185 33.0485C8.29881 33.2348 8.61451 33.3334 8.94326 33.3334C9.23951 33.3334 9.52834 33.252 9.77576 33.099L18.8307 27.5773L20.8944 28.8574C21.1508 29.0177 21.4754 29.0242 21.7391 28.8777C21.8689 28.8055 21.9771 28.6999 22.0523 28.5718C22.1276 28.4438 22.1672 28.2979 22.1672 28.1494V25C22.1672 22.2428 24.4099 20 27.167 20H29.169Z"
                            fill="" />
                        <path
                            d="M37.1669 21.667H27.1669C25.3285 21.667 23.8335 23.1619 23.8335 25.0004V36.667C23.8335 38.5054 25.3284 40.0004 27.1669 40.0004H37.1669C39.0053 40.0004 40.5002 38.5054 40.5002 36.667V25.0004C40.5002 23.162 39.0053 21.667 37.1669 21.667ZM36.3336 35.0004H28.0002C27.8908 35.0004 27.7824 34.9789 27.6812 34.9371C27.5801 34.8952 27.4882 34.8338 27.4108 34.7564C27.3334 34.679 27.272 34.5871 27.2301 34.486C27.1883 34.3848 27.1668 34.2765 27.1669 34.167C27.1668 34.0575 27.1883 33.9491 27.2301 33.848C27.272 33.7469 27.3334 33.655 27.4108 33.5776C27.4882 33.5002 27.5801 33.4388 27.6812 33.3969C27.7824 33.3551 27.8908 33.3336 28.0002 33.3336H36.3336C36.443 33.3336 36.5514 33.3551 36.6526 33.3969C36.7537 33.4388 36.8456 33.5002 36.923 33.5776C37.0004 33.655 37.0618 33.7469 37.1036 33.848C37.1455 33.9491 37.167 34.0575 37.1669 34.167C37.167 34.2764 37.1455 34.3848 37.1036 34.486C37.0617 34.5871 37.0004 34.679 36.923 34.7564C36.8456 34.8338 36.7537 34.8952 36.6525 34.937C36.5514 34.9789 36.443 35.0004 36.3336 35.0004ZM36.3336 31.667H28.0002C27.5396 31.667 27.1669 31.2943 27.1669 30.8336C27.1669 30.373 27.5396 30.0004 28.0002 30.0004H36.3336C36.7942 30.0004 37.1669 30.3731 37.1669 30.8337C37.1669 31.2943 36.7942 31.667 36.3336 31.667ZM36.3336 28.3337H28.0002C27.8908 28.3338 27.7824 28.3123 27.6812 28.2704C27.5801 28.2286 27.4882 28.1672 27.4108 28.0898C27.3334 28.0124 27.272 27.9205 27.2301 27.8193C27.1883 27.7182 27.1668 27.6098 27.1669 27.5004C27.1668 27.3909 27.1883 27.2825 27.2301 27.1814C27.272 27.0802 27.3334 26.9883 27.4108 26.9109C27.4882 26.8335 27.5801 26.7721 27.6812 26.7303C27.7824 26.6884 27.8908 26.6669 28.0002 26.667H36.3336C36.443 26.6669 36.5514 26.6884 36.6526 26.7303C36.7537 26.7721 36.8456 26.8335 36.923 26.9109C37.0004 26.9883 37.0618 27.0802 37.1036 27.1814C37.1455 27.2825 37.167 27.3909 37.1669 27.5004C37.167 27.6098 37.1455 27.7182 37.1036 27.8193C37.0617 27.9205 37.0004 28.0123 36.923 28.0897C36.8456 28.1671 36.7537 28.2285 36.6525 28.2704C36.5514 28.3122 36.443 28.3338 36.3336 28.3337Z"
                            fill="" />
                    </svg>
                </div>
                <div class="right">
                    <div class="title">Ratings and Reviews</div>
                    <div class="text">
                        Collect and display verified client reviews to
                        build trust.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- powerful tools section end -->

    <!-- top rated prepares section start -->
    <div class="top-rated-prepares-container">
        <div data-aos="fade-right" class="section-title">Top Rated <span>Tax Preparers</span></div>
        <div data-aos="fade-right" class="section-text mt-3">
            Discover the benefits of working with verified professionals who make
            tax preparation stress-free and reliable.
        </div>
        <div class="join-slider-items">
            <div class="item">
                <div class="join-slider-item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare" />
                    </div>
                    <div class="text-content">
                        <div class="text">
                            I am extremely impressed with the software. They have truly
                            exceeded my expectations in every way.
                        </div>
                        <div class="title">Sally Robson</div>

                        <div class="ratings">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="join-slider-item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare" />
                    </div>
                    <div class="text-content">
                        <div class="text">
                            I am extremely impressed with the software. They have truly
                            exceeded my expectations in every way.
                        </div>
                        <div class="title">Sally Robson</div>

                        <div class="ratings">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="join-slider-item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare" />
                    </div>
                    <div class="text-content">
                        <div class="text">
                            I am extremely impressed with the software. They have truly
                            exceeded my expectations in every way.
                        </div>
                        <div class="title">Sally Robson</div>

                        <div class="ratings">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="join-slider-item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare" />
                    </div>
                    <div class="text-content">
                        <div class="text">
                            I am extremely impressed with the software. They have truly
                            exceeded my expectations in every way.
                        </div>
                        <div class="title">Sally Robson</div>

                        <div class="ratings">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="join-slider-item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare" />
                    </div>
                    <div class="text-content">
                        <div class="text">
                            I am extremely impressed with the software. They have truly
                            exceeded my expectations in every way.
                        </div>
                        <div class="title">Sally Robson</div>

                        <div class="ratings">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="join-slider-item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare" />
                    </div>
                    <div class="text-content">
                        <div class="text">
                            I am extremely impressed with the software. They have truly
                            exceeded my expectations in every way.
                        </div>
                        <div class="title">Sally Robson</div>

                        <div class="ratings">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="join-slider-item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare" />
                    </div>
                    <div class="text-content">
                        <div class="text">
                            I am extremely impressed with the software. They have truly
                            exceeded my expectations in every way.
                        </div>
                        <div class="title">Sally Robson</div>

                        <div class="ratings">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="join-slider-item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare" />
                    </div>
                    <div class="text-content">
                        <div class="text">
                            I am extremely impressed with the software. They have truly
                            exceeded my expectations in every way.
                        </div>
                        <div class="title">Sally Robson</div>

                        <div class="ratings">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="join-slider-item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare" />
                    </div>
                    <div class="text-content">
                        <div class="text">
                            I am extremely impressed with the software. They have truly
                            exceeded my expectations in every way.
                        </div>
                        <div class="title">Sally Robson</div>

                        <div class="ratings">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="join-slider-item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare" />
                    </div>
                    <div class="text-content">
                        <div class="text">
                            I am extremely impressed with the software. They have truly
                            exceeded my expectations in every way.
                        </div>
                        <div class="title">Sally Robson</div>

                        <div class="ratings">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#FFA928"
                                    d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top rated prepares section end -->

    <!-- subscription plans start -->
    <div class="subscription-plans-container ">
        <div class="section-title">Subscription <span>Plans</span></div>
        <div class="section-text mt-3">
            Grow your practice, reach new clients, and manage your business
            efficiently with our flexible subscription plans.
        </div>
        <div class="subscription-plans">
            <div class="item">
                <div class="item-header">
                    <div class="plan-badge">Free Plan</div>
                    <div class="header-title"><span>Free</span> 1 year</div>
                </div>
                <div class="item-line"></div>
                <div class="benefits">
                    <div class="benefits-title">Why should you take this</div>
                    <ul>
                        <li>Enhanced profile visibility</li>
                        <li>Unlimited client inquiries</li>
                        <li>Advanced appointment scheduling</li>
                        <li>Analytics dashboard for client insights</li>
                        <li>Priority support</li>
                    </ul>
                </div>
                <div class="action">
                    <a href="">Purchase Now</a>
                </div>
            </div>
            <div class="item active-item">
                <div class="item-header">
                    <div class="plan-badge">Basic Plan</div>
                    <div class="header-title"><span>$100</span> /year</div>
                </div>
                <div class="item-line"></div>
                <div class="benefits">
                    <div class="benefits-title">Why should you take this</div>
                    <ul>
                        <li>Basic profile listing</li>
                        <li>Access to client communication tools</li>
                        <li>Secure document uploads and management</li>
                        <li>Up to 20 client inquiries per month</li>
                    </ul>
                </div>
                <div class="action">
                    <a href="">Purchase Now</a>
                </div>
            </div>
            <div class="item">
                <div class="item-header">
                    <div class="plan-badge">Professional Plan</div>
                    <div class="header-title"><span>$700</span> /year</div>
                </div>
                <div class="item-line"></div>
                <div class="benefits">
                    <div class="benefits-title">Why should you take this</div>
                    <ul>
                        <li>Enhanced profile visibility</li>
                        <li>Unlimited client inquiries</li>
                        <li>Advanced appointment scheduling</li>
                        <li>Analytics dashboard for client insights</li>
                        <li>Priority support</li>
                    </ul>
                </div>
                <div class="action">
                    <a href="">Purchase Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- subscription plans end -->

    <!-- become a test prepare start -->
    <div class="become-test-prepare ">
        <div class="section-title">Ready to Expand Your <span>Reach?</span></div>
        <div class="section-text mt-4">
            Join hundreds of tax professionals who trust TAXDAX to connect with new
            clients.
        </div>
        <a href="" class="common-btn">Sign Up Today for Free</a>
    </div>
    <!-- become a test prepare end -->

    <!-- faq section start -->
    <div class="faq-section section-padding-x section-padding-y ">
        <div class="section-title">Frequently Asked <span>Questions</span></div>
        <div class="section-text mt-3">
            Grow your practice, reach new clients, and manage your business efficiently with our flexible subscription
            plans.
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <li>How does TAXDAX help me find new clients?</li>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                        this with custom CSS or overriding our default variables. It's also worth noting that just about any
                        HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <li>How do I manage my appointments?</li>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                        just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                        overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <li>Is there a fee to join?</li>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                        just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                        overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <li>Is there a fee to join?</li>
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                        just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                        overflow.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq section end -->
@endsection
