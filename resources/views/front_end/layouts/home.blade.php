@extends('front_end.app')


@section('content')
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
            <div data-aos="fade-right" class="search-bar">
                <div class="left">
                    <input class="search-input" placeholder="Search..." value="" type="text">
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
                                <rect width="24" height="23.6066" fill="white" transform="translate(0 0.705078)" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
            </div>
            <!-- search bar end -->
        </div>
        <div data-aos="fade-left" class="img-content">
            <img src="{{ asset('front_end/assets/images/home-banner-right.png') }} " alt="">
        </div>
    </div>
    <!-- banner end -->

    <!-- why choose service start -->
    <div class="why-choose-service-container">
        <h2 data-aos="fade-right" class="section-title">Why Choose <span>TAXDAX?</span></h2>
        <p data-aos="fade-right" class="section-text mt-3 ">
            Discover the benefits of working with verified professionals who make tax preparation stress-free and reliable.
        </p>
        <div class="choose-service-cards">
            <div data-aos="fade-right" class="item">
                <div class="item-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="126" height="127" viewBox="0 0 126 127"
                        fill="none">
                        <g filter="url(#filter0_dd_8542_23)">
                            <rect x="25" y="5.01758" width="76" height="76" rx="38"
                                fill="url(#paint0_linear_8542_23)" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M58.8734 23.9878C60.1547 23.3497 61.5675 23.0176 63 23.0176C64.4325 23.0176 65.8453 23.3497 67.1266 23.9878L77.0469 28.9264C77.9344 29.3685 78.6808 30.048 79.2024 30.8889C79.7239 31.7297 80.0001 32.6986 80 33.687V48.292C80.0001 49.851 79.6022 51.3843 78.8436 52.7479C78.085 54.1115 76.9907 55.2606 75.6635 56.087L65.8327 62.208C64.9833 62.7371 64.0017 63.0176 63 63.0176C61.9983 63.0176 61.0167 62.7371 60.1673 62.208L50.3365 56.087C49.0093 55.2606 47.915 54.1115 47.1564 52.7479C46.3978 51.3843 45.9999 49.851 46 48.292V33.687C45.9999 32.6986 46.2761 31.7297 46.7977 30.8889C47.3192 30.048 48.0656 29.3685 48.9531 28.9264L58.8734 23.9878ZM69.8583 40.0616C70.0014 39.9287 70.1163 39.7685 70.1959 39.5904C70.2756 39.4124 70.3184 39.2202 70.3218 39.0253C70.3253 38.8304 70.2893 38.6369 70.216 38.4561C70.1427 38.2754 70.0336 38.1112 69.8953 37.9734C69.7569 37.8356 69.5921 37.7269 69.4106 37.6539C69.2292 37.5809 69.0349 37.5451 68.8392 37.5485C68.6436 37.552 68.4506 37.5946 68.2719 37.674C68.0931 37.7533 67.9323 37.8677 67.7989 38.0103L61.0571 44.7254L58.2011 41.8807C57.9249 41.6243 57.5596 41.4847 57.1821 41.4914C56.8046 41.498 56.4444 41.6503 56.1774 41.9162C55.9104 42.1822 55.7575 42.5409 55.7509 42.9169C55.7442 43.2929 55.8843 43.6568 56.1417 43.932L60.0274 47.8024C60.3006 48.0742 60.671 48.2269 61.0571 48.2269C61.4433 48.2269 61.8136 48.0742 62.0869 47.8024L69.8583 40.0616Z"
                                fill="white" />
                        </g>
                        <defs>
                            <filter id="filter0_dd_8542_23" x="0" y="0.0175781" width="126" height="126"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="10" />
                                <feGaussianBlur stdDeviation="5" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.04 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_8542_23" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="20" />
                                <feGaussianBlur stdDeviation="12.5" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                <feBlend mode="normal" in2="effect1_dropShadow_8542_23"
                                    result="effect2_dropShadow_8542_23" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_8542_23"
                                    result="shape" />
                            </filter>
                            <linearGradient id="paint0_linear_8542_23" x1="25" y1="5.01758" x2="101"
                                y2="81.0176" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#09BD3F" />
                                <stop offset="1" stop-color="#09812D" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="item-title">
                    Trusted Professionals
                </div>
                <div class="item-text">
                    We verify every tax preparer to ensure you’re working with qualified experts.
                </div>
                <div class="item-btn">
                    <a class="" href="">
                        <span>Discover</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="12" viewBox="0 0 11 12"
                            fill="none">
                            <path
                                d="M10.5303 6.04791C10.8232 5.75501 10.8232 5.28014 10.5303 4.98725L5.75736 0.214277C5.46447 -0.0786166 4.98959 -0.0786166 4.6967 0.214277C4.40381 0.50717 4.40381 0.982044 4.6967 1.27494L8.93934 5.51758L4.6967 9.76022C4.40381 10.0531 4.40381 10.528 4.6967 10.8209C4.98959 11.1138 5.46447 11.1138 5.75736 10.8209L10.5303 6.04791ZM6.55671e-08 6.26758L10 6.26758L10 4.76758L-6.55671e-08 4.76758L6.55671e-08 6.26758Z"
                                fill="" />

                        </svg>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="item-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="176" height="177" viewBox="0 0 176 177"
                        fill="none">
                        <g filter="url(#filter0_d_8542_20)">
                            <rect x="50" y="25.0176" width="76" height="76" rx="38" fill="#111111" />
                            <path
                                d="M104.862 58.7326C104.722 58.3038 104.465 57.9219 104.121 57.6292C103.776 57.3365 103.357 57.1443 102.909 57.0738L94.1369 55.7345L90.2055 47.4359C90.014 47.0135 89.704 46.655 89.3128 46.4035C88.9216 46.1519 88.4658 46.0179 88 46.0176C87.0504 46.0176 86.2046 46.5616 85.7945 47.4335L81.8619 55.7357L73.0898 57.0751C72.6423 57.1459 72.2232 57.3382 71.8786 57.6309C71.534 57.9236 71.2774 58.3052 71.1369 58.7338C70.985 59.1764 70.9589 59.6522 71.0617 60.1087C71.1644 60.5651 71.3919 60.9844 71.7191 61.3203L78.1026 67.8557L76.594 77.099C76.4353 78.0728 76.8308 79.0224 77.6278 79.5798C77.9961 79.8385 78.4304 79.9883 78.8807 80.0122C79.3309 80.036 79.7787 79.9329 80.1726 79.7146L87.9792 75.3819L95.8286 79.7146C96.2219 79.9342 96.6697 80.0381 97.1201 80.0142C97.5704 79.9904 98.0046 79.8397 98.3722 79.5798C98.7629 79.3064 99.0675 78.9281 99.2505 78.4891C99.4335 78.0502 99.4875 77.5685 99.406 77.1002L97.8974 67.8569L104.281 61.3215C104.608 60.9856 104.836 60.5663 104.938 60.1099C105.041 59.6534 105.015 59.1776 104.863 58.735L104.862 58.7326Z"
                                fill="white" />
                        </g>
                        <defs>
                            <filter id="filter0_d_8542_20" x="0" y="0.0175781" width="176" height="176"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="25" />
                                <feGaussianBlur stdDeviation="25" />
                                <feColorMatrix type="matrix"
                                    values="0 0 0 0 0.133333 0 0 0 0 0.133333 0 0 0 0 0.133333 0 0 0 0.25 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_8542_20" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_8542_20"
                                    result="shape" />
                            </filter>
                        </defs>
                    </svg>
                </div>
                <div class="item-title">
                    Honest Reviews
                </div>
                <div class="item-text">
                    Read reviews from real clients before booking your appointment.
                </div>
                <div class="item-btn">
                    <a href="">
                        <span>Discover</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="12" viewBox="0 0 11 12"
                            fill="none">
                            <path
                                d="M10.5303 6.04791C10.8232 5.75501 10.8232 5.28014 10.5303 4.98725L5.75736 0.214277C5.46447 -0.0786166 4.98959 -0.0786166 4.6967 0.214277C4.40381 0.50717 4.40381 0.982044 4.6967 1.27494L8.93934 5.51758L4.6967 9.76022C4.40381 10.0531 4.40381 10.528 4.6967 10.8209C4.98959 11.1138 5.46447 11.1138 5.75736 10.8209L10.5303 6.04791ZM6.55671e-08 6.26758L10 6.26758L10 4.76758L-6.55671e-08 4.76758L6.55671e-08 6.26758Z"
                                fill="" />

                        </svg>
                    </a>
                </div>
            </div>
            <div data-aos="fade-left" class="item">
                <div class="item-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="126" height="127" viewBox="0 0 126 127"
                        fill="none">
                        <g filter="url(#filter0_dd_8542_26)">
                            <rect x="25" y="5.01758" width="76" height="76" rx="38" fill="#05C580" />
                            <path
                                d="M58.1154 20.0176H60.8077V25.4293H58.1154V20.0176ZM63.4942 25.5734L67.3011 21.7473L69.2046 23.6603L65.3976 27.4864L63.4942 25.5734ZM49.7133 23.6588L51.6168 21.7457L55.4237 25.5719L53.5202 27.4849L49.7133 23.6588ZM80.2114 45.9556C79.1603 44.8991 77.4562 44.8989 76.4047 45.9548L77.3559 44.9988C78.4073 43.9422 78.4073 42.2289 77.3559 41.1722C76.3047 40.1156 74.6005 40.1154 73.549 41.1714L74.5003 40.2154C75.5517 39.1587 75.5517 37.4454 74.5003 36.3887C73.4492 35.3322 71.745 35.332 70.6936 36.3879L78.3077 28.7354C79.3591 27.6787 79.3591 25.9655 78.3077 24.9087C77.2563 23.8519 75.5516 23.8519 74.5002 24.9087L57.4225 42.1007C57.4225 42.1007 51.8381 32.4065 46.9518 37.3175L46 38.2741L49.1729 41.463C52.1518 44.4569 52.1518 49.3113 49.1729 52.3052L47.9036 53.5808L60.2781 66.0176L63.1338 63.1475L68.0303 61.0385C69.1973 60.5359 70.2581 59.814 71.1558 58.9118L80.2114 49.7823C81.2629 48.7255 81.2629 47.0124 80.2114 45.9556Z"
                                fill="white" />
                        </g>
                        <defs>
                            <filter id="filter0_dd_8542_26" x="0" y="0.0175781" width="126" height="126"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="10" />
                                <feGaussianBlur stdDeviation="5" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.04 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_8542_26" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="20" />
                                <feGaussianBlur stdDeviation="12.5" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                <feBlend mode="normal" in2="effect1_dropShadow_8542_26"
                                    result="effect2_dropShadow_8542_26" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_8542_26"
                                    result="shape" />
                            </filter>
                        </defs>
                    </svg>
                </div>
                <div class="item-title">
                    Easy Booking
                </div>
                <div class="item-text">
                    Book a consultation or get your taxes prepared in just a few clicks.
                </div>
                <div class="item-btn">
                    <a href="">
                        <span>Discover</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="12" viewBox="0 0 11 12"
                            fill="none">
                            <path
                                d="M10.5303 6.04791C10.8232 5.75501 10.8232 5.28014 10.5303 4.98725L5.75736 0.214277C5.46447 -0.0786166 4.98959 -0.0786166 4.6967 0.214277C4.40381 0.50717 4.40381 0.982044 4.6967 1.27494L8.93934 5.51758L4.6967 9.76022C4.40381 10.0531 4.40381 10.528 4.6967 10.8209C4.98959 11.1138 5.46447 11.1138 5.75736 10.8209L10.5303 6.04791ZM6.55671e-08 6.26758L10 6.26758L10 4.76758L-6.55671e-08 4.76758L6.55671e-08 6.26758Z"
                                fill="" />

                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- why choose service end -->

    <!-- home duel cards start -->
    <div class="home-duel-cards">
        <div data-aos="fade-right" class="item">
            <img src="{{asset('front_end/assets/images/home-duel-cards-1.png')}} " alt="">
            <div class="item-text-content">
                <h3 class="title">I’m Hiring For Service</h3>
                <p class="text">
                    In a laoreet purus. Integer turpis quam, laoreet id orci nec, ultrices lacinia nunc. Aliquam erat vo
                </p>
                <a href="" class="item-btn common-btn">Get Start</a>
            </div>
            <div class="overlay"></div>
        </div>
        <div data-aos="fade-left" class="item">
            <img src="{{asset('front_end/assets/images/home-duel-cards-2.png')}}" alt="">
            <div class="item-text-content">
                <h3 class="title">I’m Looking For a Work</h3>
                <p class="text">
                    In a laoreet purus. Integer turpis quam, laoreet id orci nec, ultrices lacinia nunc. Aliquam erat vo
                </p>
                <a href="" class="item-btn common-btn">Get Start</a>
            </div>
            <div class="overlay"></div>
        </div>

    </div>
    <!-- home duel cards end -->

    <!-- how it works start -->
    <div class="home-works-section">
        <div data-aos="fade-right" class="section-title text-center">
            How It Works
        </div>
        <div data-aos="fade-right" class="section-text text-center">
            Discover the benefits of working with verified professionals who make tax preparation stress-free and reliable.
        </div>
        <div class="work-cards">
            <div class="item">
                <div data-aos="fade-right" class="img-content">
                    <img src="{{asset('front_end/assets/images/home-works-1.png')}}" alt="">
                </div>
                <div data-aos="fade-left" class="text-content">
                    <div class="item-title">
                        Search for a Tax Preparer
                    </div>
                    <div class="item-text">
                        Use our search tools to find the perfect tax professional based on your location, service type, and
                        budget.
                    </div>
                </div>
            </div>
            <div class="item">

                <div data-aos="fade-right" class="text-content">
                    <div class="item-title">
                        Search for a Tax Preparer
                    </div>
                    <div class="item-text">
                        Use our search tools to find the perfect tax professional based on your location, service type, and
                        budget.
                    </div>
                </div>
                <div data-aos="fade-left" class="img-content">
                    <img src="{{asset('front_end/assets/images/home-works-2.png')}}" alt="">
                </div>
            </div>
            <div class="item">
                <div data-aos="fade-right" class="img-content">
                    <img src="{{asset('front_end/assets/images/home-works-3.png')}}" alt="">
                </div>
                <div data-aos="fade-left" class="text-content">
                    <div class="item-title">
                        Compare & Book
                    </div>
                    <div class="item-text">
                        View detailed profiles, compare services, and book your tax preparer directly through our secure
                        platform.
                    </div>
                </div>
            </div>
            <div class="item">

                <div data-aos="fade-right" class="text-content">
                    <div class="item-title">
                        Get Expert Help
                    </div>
                    <div class="item-text">
                        Meet with your tax preparer and receive expert assistance with your taxes, whether in-person or
                        online.
                    </div>
                </div>
                <div data-aos="fade-left" class="img-content">
                    <img src="{{asset('front_end/assets/images/home-works-4.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- how it works end -->

    <!-- top rated prepares section start -->
    <div class="top-rated-prepares-container">
        <div class="section-title">
            Top Rated <span>Tax Preparers</span>
        </div>
        <div class="section-text mt-3">
            Discover the benefits of working with verified professionals who make tax preparation stress-free and reliable.
        </div>
        <div class="rk--hero--marquee">
            <div class="slide">
                <div class="slider--item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare">
                    </div>
                    <div class="text-content">
                        <div class="user-title">
                            Jane Doe, CPA
                        </div>
                        <div class="user-text">
                            Personal Tax Filing, Business Tax Consulting
                        </div>
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
                <div class="slider--item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare">
                    </div>
                    <div class="text-content">
                        <div class="user-title">
                            Jane Doe, CPA
                        </div>
                        <div class="user-text">
                            Personal Tax Filing, Business Tax Consulting
                        </div>
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
                <div class="slider--item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare">
                    </div>
                    <div class="text-content">
                        <div class="user-title">
                            Jane Doe, CPA
                        </div>
                        <div class="user-text">
                            Personal Tax Filing, Business Tax Consulting
                        </div>
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
                <div class="slider--item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare">
                    </div>
                    <div class="text-content">
                        <div class="user-title">
                            Jane Doe, CPA
                        </div>
                        <div class="user-text">
                            Personal Tax Filing, Business Tax Consulting
                        </div>
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
                <div class="slider--item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare">
                    </div>
                    <div class="text-content">
                        <div class="user-title">
                            Jane Doe, CPA
                        </div>
                        <div class="user-text">
                            Personal Tax Filing, Business Tax Consulting
                        </div>
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
                <div class="slider--item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare">
                    </div>
                    <div class="text-content">
                        <div class="user-title">
                            Jane Doe, CPA
                        </div>
                        <div class="user-text">
                            Personal Tax Filing, Business Tax Consulting
                        </div>
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
                <div class="slider--item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare">
                    </div>
                    <div class="text-content">
                        <div class="user-title">
                            Jane Doe, CPA
                        </div>
                        <div class="user-text">
                            Personal Tax Filing, Business Tax Consulting
                        </div>
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
                <div class="slider--item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare">
                    </div>
                    <div class="text-content">
                        <div class="user-title">
                            Jane Doe, CPA
                        </div>
                        <div class="user-text">
                            Personal Tax Filing, Business Tax Consulting
                        </div>
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
                <div class="slider--item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare">
                    </div>
                    <div class="text-content">
                        <div class="user-title">
                            Jane Doe, CPA
                        </div>
                        <div class="user-text">
                            Personal Tax Filing, Business Tax Consulting
                        </div>
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
                <div class="slider--item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare">
                    </div>
                    <div class="text-content">
                        <div class="user-title">
                            Jane Doe, CPA
                        </div>
                        <div class="user-text">
                            Personal Tax Filing, Business Tax Consulting
                        </div>
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
                <div class="slider--item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare">
                    </div>
                    <div class="text-content">
                        <div class="user-title">
                            Jane Doe, CPA
                        </div>
                        <div class="user-text">
                            Personal Tax Filing, Business Tax Consulting
                        </div>
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
                <div class="slider--item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare">
                    </div>
                    <div class="text-content">
                        <div class="user-title">
                            Jane Doe, CPA
                        </div>
                        <div class="user-text">
                            Personal Tax Filing, Business Tax Consulting
                        </div>
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
                <div class="slider--item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare">
                    </div>
                    <div class="text-content">
                        <div class="user-title">
                            Jane Doe, CPA
                        </div>
                        <div class="user-text">
                            Personal Tax Filing, Business Tax Consulting
                        </div>
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
                <div class="slider--item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare">
                    </div>
                    <div class="text-content">
                        <div class="user-title">
                            Jane Doe, CPA
                        </div>
                        <div class="user-text">
                            Personal Tax Filing, Business Tax Consulting
                        </div>
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
                <div class="slider--item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare">
                    </div>
                    <div class="text-content">
                        <div class="user-title">
                            Jane Doe, CPA
                        </div>
                        <div class="user-text">
                            Personal Tax Filing, Business Tax Consulting
                        </div>
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
                <div class="slider--item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare">
                    </div>
                    <div class="text-content">
                        <div class="user-title">
                            Jane Doe, CPA
                        </div>
                        <div class="user-text">
                            Personal Tax Filing, Business Tax Consulting
                        </div>
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
                <div class="slider--item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare">
                    </div>
                    <div class="text-content">
                        <div class="user-title">
                            Jane Doe, CPA
                        </div>
                        <div class="user-text">
                            Personal Tax Filing, Business Tax Consulting
                        </div>
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
                <div class="slider--item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare">
                    </div>
                    <div class="text-content">
                        <div class="user-title">
                            Jane Doe, CPA
                        </div>
                        <div class="user-text">
                            Personal Tax Filing, Business Tax Consulting
                        </div>
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
                <div class="slider--item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare">
                    </div>
                    <div class="text-content">
                        <div class="user-title">
                            Jane Doe, CPA
                        </div>
                        <div class="user-text">
                            Personal Tax Filing, Business Tax Consulting
                        </div>
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
                <div class="slider--item">
                    <div class="img-content">
                        <img src="{{asset('front_end/assets/images/client.png')}}" alt="prepare">
                    </div>
                    <div class="text-content">
                        <div class="user-title">
                            Jane Doe, CPA
                        </div>
                        <div class="user-text">
                            Personal Tax Filing, Business Tax Consulting
                        </div>
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

    <!-- what client say section start -->
    <div class="what-clients-say">
        <div class="left">
            <div data-aos="fade-right" class="section-title">
                What Our <br> <span>Clients Say</span>
            </div>
            <div data-aos="fade-right" class="section-text mt-4">
                See how TAXDAX has helped people like you connect with trusted tax professionals for stress-free tax
                preparation.
            </div>
            <a data-aos="fade-right" href="" class="get-start-btn common-btn">Get Start</a>
        </div>
        <div class="client-cards">
            <div data-aos="fade-right" class="item">
                <svg class="card-quotes" xmlns="http://www.w3.org/2000/svg" width="64" height="65"
                    viewBox="0 0 64 65" fill="none">
                    <circle cx="32" cy="32.2305" r="30.5" fill="white" stroke="url(#gradient1)"
                        stroke-width="3" />
                    <path
                        d="M44.9184 19.4818L44.3078 24.2141C42.8152 24.1123 41.6618 24.3837 40.8476 25.0283C40.0334 25.6728 39.4906 26.5718 39.2193 27.7252C38.9479 28.8786 38.897 30.1847 39.0666 31.6434H44.9184V43.9068H33.6727V30.6257C33.6727 26.6227 34.6226 23.6035 36.5223 21.5681C38.456 19.4987 41.2547 18.8033 44.9184 19.4818ZM29.2457 19.4818L28.6351 24.2141C27.1424 24.1123 25.989 24.3837 25.1749 25.0283C24.3607 25.6728 23.8179 26.5718 23.5465 27.7252C23.2751 28.8786 23.2242 30.1847 23.3939 31.6434H29.2457V43.9068H18V30.6257C18 26.6227 18.9499 23.6035 20.8496 21.5681C22.7832 19.4987 25.5819 18.8033 29.2457 19.4818Z"
                        fill="url(#gradient11)" />
                    <defs>
                        <linearGradient id="gradient1" x1="0" y1="0.230469" x2="64" y2="64.2305"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#09BD3F" />
                            <stop offset="1" stop-color="#09812D" />
                        </linearGradient>
                        <linearGradient id="gradient11" x1="18" y1="19.2305" x2="42.5833"
                            y2="46.0474" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#09BD3F" />
                            <stop offset="1" stop-color="#09812D" />
                        </linearGradient>
                    </defs>
                </svg>
                <div class="ratings">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"
                        fill="none">
                        <path
                            d="M6.92412 1.48177C7.15436 0.773155 8.15686 0.773155 8.3871 1.48177L9.46877 4.8108C9.57173 5.1277 9.86705 5.34226 10.2003 5.34226H13.7006C14.4457 5.34226 14.7555 6.29569 14.1527 6.73364L11.3209 8.79109C11.0513 8.98694 10.9385 9.33411 11.0414 9.65101L12.1231 12.98C12.3534 13.6887 11.5423 14.2779 10.9395 13.84L8.1077 11.7825C7.83812 11.5866 7.47309 11.5866 7.20352 11.7825L4.37168 13.84C3.7689 14.2779 2.95786 13.6887 3.1881 12.98L4.26977 9.65101C4.37274 9.33411 4.25994 8.98694 3.99037 8.79109L1.15852 6.73364C0.555742 6.29569 0.865531 5.34226 1.61061 5.34226H5.11096C5.44417 5.34226 5.73948 5.1277 5.84245 4.8108L6.92412 1.48177Z"
                            fill="#FBB040" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"
                        fill="none">
                        <path
                            d="M6.92412 1.48177C7.15436 0.773155 8.15686 0.773155 8.3871 1.48177L9.46877 4.8108C9.57173 5.1277 9.86705 5.34226 10.2003 5.34226H13.7006C14.4457 5.34226 14.7555 6.29569 14.1527 6.73364L11.3209 8.79109C11.0513 8.98694 10.9385 9.33411 11.0414 9.65101L12.1231 12.98C12.3534 13.6887 11.5423 14.2779 10.9395 13.84L8.1077 11.7825C7.83812 11.5866 7.47309 11.5866 7.20352 11.7825L4.37168 13.84C3.7689 14.2779 2.95786 13.6887 3.1881 12.98L4.26977 9.65101C4.37274 9.33411 4.25994 8.98694 3.99037 8.79109L1.15852 6.73364C0.555742 6.29569 0.865531 5.34226 1.61061 5.34226H5.11096C5.44417 5.34226 5.73948 5.1277 5.84245 4.8108L6.92412 1.48177Z"
                            fill="#FBB040" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"
                        fill="none">
                        <path
                            d="M6.92412 1.48177C7.15436 0.773155 8.15686 0.773155 8.3871 1.48177L9.46877 4.8108C9.57173 5.1277 9.86705 5.34226 10.2003 5.34226H13.7006C14.4457 5.34226 14.7555 6.29569 14.1527 6.73364L11.3209 8.79109C11.0513 8.98694 10.9385 9.33411 11.0414 9.65101L12.1231 12.98C12.3534 13.6887 11.5423 14.2779 10.9395 13.84L8.1077 11.7825C7.83812 11.5866 7.47309 11.5866 7.20352 11.7825L4.37168 13.84C3.7689 14.2779 2.95786 13.6887 3.1881 12.98L4.26977 9.65101C4.37274 9.33411 4.25994 8.98694 3.99037 8.79109L1.15852 6.73364C0.555742 6.29569 0.865531 5.34226 1.61061 5.34226H5.11096C5.44417 5.34226 5.73948 5.1277 5.84245 4.8108L6.92412 1.48177Z"
                            fill="#FBB040" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"
                        fill="none">
                        <path
                            d="M6.92412 1.48177C7.15436 0.773155 8.15686 0.773155 8.3871 1.48177L9.46877 4.8108C9.57173 5.1277 9.86705 5.34226 10.2003 5.34226H13.7006C14.4457 5.34226 14.7555 6.29569 14.1527 6.73364L11.3209 8.79109C11.0513 8.98694 10.9385 9.33411 11.0414 9.65101L12.1231 12.98C12.3534 13.6887 11.5423 14.2779 10.9395 13.84L8.1077 11.7825C7.83812 11.5866 7.47309 11.5866 7.20352 11.7825L4.37168 13.84C3.7689 14.2779 2.95786 13.6887 3.1881 12.98L4.26977 9.65101C4.37274 9.33411 4.25994 8.98694 3.99037 8.79109L1.15852 6.73364C0.555742 6.29569 0.865531 5.34226 1.61061 5.34226H5.11096C5.44417 5.34226 5.73948 5.1277 5.84245 4.8108L6.92412 1.48177Z"
                            fill="#FBB040" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"
                        fill="none">
                        <path
                            d="M6.92412 1.48177C7.15436 0.773155 8.15686 0.773155 8.3871 1.48177L9.46877 4.8108C9.57173 5.1277 9.86705 5.34226 10.2003 5.34226H13.7006C14.4457 5.34226 14.7555 6.29569 14.1527 6.73364L11.3209 8.79109C11.0513 8.98694 10.9385 9.33411 11.0414 9.65101L12.1231 12.98C12.3534 13.6887 11.5423 14.2779 10.9395 13.84L8.1077 11.7825C7.83812 11.5866 7.47309 11.5866 7.20352 11.7825L4.37168 13.84C3.7689 14.2779 2.95786 13.6887 3.1881 12.98L4.26977 9.65101C4.37274 9.33411 4.25994 8.98694 3.99037 8.79109L1.15852 6.73364C0.555742 6.29569 0.865531 5.34226 1.61061 5.34226H5.11096C5.44417 5.34226 5.73948 5.1277 5.84245 4.8108L6.92412 1.48177Z"
                            fill="#FBB040" />
                    </svg>
                </div>
                <div class="item-title">
                    Loved the experience!
                </div>
                <div class="item-text">
                    << Dico is finally addressing a long time problem we had when building UIs. It’s ease of use and
                        workflow seems really intuitive. Promising!>>

                </div>
                <div class="user">
                    <img src="{{asset('front_end/assets/images/user.png')}}" alt="user">
                </div>
                <div class="user-title">Tahmid Chowdhury</div>
                <div class="user-location">Sylhet, Bangladesh</div>
            </div>
            <div data-aos="fade-left" class="item">
                <svg class="card-quotes" xmlns="http://www.w3.org/2000/svg" width="64" height="65"
                    viewBox="0 0 64 65" fill="none">
                    <circle cx="32" cy="32.2305" r="30.5" fill="white" stroke="url(#gradient2)"
                        stroke-width="3" />
                    <path
                        d="M44.9184 19.4818L44.3078 24.2141C42.8152 24.1123 41.6618 24.3837 40.8476 25.0283C40.0334 25.6728 39.4906 26.5718 39.2193 27.7252C38.9479 28.8786 38.897 30.1847 39.0666 31.6434H44.9184V43.9068H33.6727V30.6257C33.6727 26.6227 34.6226 23.6035 36.5223 21.5681C38.456 19.4987 41.2547 18.8033 44.9184 19.4818ZM29.2457 19.4818L28.6351 24.2141C27.1424 24.1123 25.989 24.3837 25.1749 25.0283C24.3607 25.6728 23.8179 26.5718 23.5465 27.7252C23.2751 28.8786 23.2242 30.1847 23.3939 31.6434H29.2457V43.9068H18V30.6257C18 26.6227 18.9499 23.6035 20.8496 21.5681C22.7832 19.4987 25.5819 18.8033 29.2457 19.4818Z"
                        fill="url(#gradient22)" />
                    <defs>
                        <linearGradient id="gradient2" x1="0" y1="0.230469" x2="64" y2="64.2305"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#09BD3F" />
                            <stop offset="1" stop-color="#09812D" />
                        </linearGradient>
                        <linearGradient id="gradient22" x1="18" y1="19.2305" x2="42.5833"
                            y2="46.0474" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#09BD3F" />
                            <stop offset="1" stop-color="#09812D" />
                        </linearGradient>
                    </defs>
                </svg>
                <div class="ratings">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"
                        fill="none">
                        <path
                            d="M6.92412 1.48177C7.15436 0.773155 8.15686 0.773155 8.3871 1.48177L9.46877 4.8108C9.57173 5.1277 9.86705 5.34226 10.2003 5.34226H13.7006C14.4457 5.34226 14.7555 6.29569 14.1527 6.73364L11.3209 8.79109C11.0513 8.98694 10.9385 9.33411 11.0414 9.65101L12.1231 12.98C12.3534 13.6887 11.5423 14.2779 10.9395 13.84L8.1077 11.7825C7.83812 11.5866 7.47309 11.5866 7.20352 11.7825L4.37168 13.84C3.7689 14.2779 2.95786 13.6887 3.1881 12.98L4.26977 9.65101C4.37274 9.33411 4.25994 8.98694 3.99037 8.79109L1.15852 6.73364C0.555742 6.29569 0.865531 5.34226 1.61061 5.34226H5.11096C5.44417 5.34226 5.73948 5.1277 5.84245 4.8108L6.92412 1.48177Z"
                            fill="#FBB040" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"
                        fill="none">
                        <path
                            d="M6.92412 1.48177C7.15436 0.773155 8.15686 0.773155 8.3871 1.48177L9.46877 4.8108C9.57173 5.1277 9.86705 5.34226 10.2003 5.34226H13.7006C14.4457 5.34226 14.7555 6.29569 14.1527 6.73364L11.3209 8.79109C11.0513 8.98694 10.9385 9.33411 11.0414 9.65101L12.1231 12.98C12.3534 13.6887 11.5423 14.2779 10.9395 13.84L8.1077 11.7825C7.83812 11.5866 7.47309 11.5866 7.20352 11.7825L4.37168 13.84C3.7689 14.2779 2.95786 13.6887 3.1881 12.98L4.26977 9.65101C4.37274 9.33411 4.25994 8.98694 3.99037 8.79109L1.15852 6.73364C0.555742 6.29569 0.865531 5.34226 1.61061 5.34226H5.11096C5.44417 5.34226 5.73948 5.1277 5.84245 4.8108L6.92412 1.48177Z"
                            fill="#FBB040" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"
                        fill="none">
                        <path
                            d="M6.92412 1.48177C7.15436 0.773155 8.15686 0.773155 8.3871 1.48177L9.46877 4.8108C9.57173 5.1277 9.86705 5.34226 10.2003 5.34226H13.7006C14.4457 5.34226 14.7555 6.29569 14.1527 6.73364L11.3209 8.79109C11.0513 8.98694 10.9385 9.33411 11.0414 9.65101L12.1231 12.98C12.3534 13.6887 11.5423 14.2779 10.9395 13.84L8.1077 11.7825C7.83812 11.5866 7.47309 11.5866 7.20352 11.7825L4.37168 13.84C3.7689 14.2779 2.95786 13.6887 3.1881 12.98L4.26977 9.65101C4.37274 9.33411 4.25994 8.98694 3.99037 8.79109L1.15852 6.73364C0.555742 6.29569 0.865531 5.34226 1.61061 5.34226H5.11096C5.44417 5.34226 5.73948 5.1277 5.84245 4.8108L6.92412 1.48177Z"
                            fill="#FBB040" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"
                        fill="none">
                        <path
                            d="M6.92412 1.48177C7.15436 0.773155 8.15686 0.773155 8.3871 1.48177L9.46877 4.8108C9.57173 5.1277 9.86705 5.34226 10.2003 5.34226H13.7006C14.4457 5.34226 14.7555 6.29569 14.1527 6.73364L11.3209 8.79109C11.0513 8.98694 10.9385 9.33411 11.0414 9.65101L12.1231 12.98C12.3534 13.6887 11.5423 14.2779 10.9395 13.84L8.1077 11.7825C7.83812 11.5866 7.47309 11.5866 7.20352 11.7825L4.37168 13.84C3.7689 14.2779 2.95786 13.6887 3.1881 12.98L4.26977 9.65101C4.37274 9.33411 4.25994 8.98694 3.99037 8.79109L1.15852 6.73364C0.555742 6.29569 0.865531 5.34226 1.61061 5.34226H5.11096C5.44417 5.34226 5.73948 5.1277 5.84245 4.8108L6.92412 1.48177Z"
                            fill="#FBB040" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"
                        fill="none">
                        <path
                            d="M6.92412 1.48177C7.15436 0.773155 8.15686 0.773155 8.3871 1.48177L9.46877 4.8108C9.57173 5.1277 9.86705 5.34226 10.2003 5.34226H13.7006C14.4457 5.34226 14.7555 6.29569 14.1527 6.73364L11.3209 8.79109C11.0513 8.98694 10.9385 9.33411 11.0414 9.65101L12.1231 12.98C12.3534 13.6887 11.5423 14.2779 10.9395 13.84L8.1077 11.7825C7.83812 11.5866 7.47309 11.5866 7.20352 11.7825L4.37168 13.84C3.7689 14.2779 2.95786 13.6887 3.1881 12.98L4.26977 9.65101C4.37274 9.33411 4.25994 8.98694 3.99037 8.79109L1.15852 6.73364C0.555742 6.29569 0.865531 5.34226 1.61061 5.34226H5.11096C5.44417 5.34226 5.73948 5.1277 5.84245 4.8108L6.92412 1.48177Z"
                            fill="#FBB040" />
                    </svg>
                </div>
                <div class="item-title">
                    Loved the experience!
                </div>
                <div class="item-text">
                    << Dico is finally addressing a long time problem we had when building UIs. It’s ease of use and
                        workflow seems really intuitive. Promising!>>

                </div>
                <div class="user">
                    <img src="{{asset('front_end/assets/images/user.png')}}" alt="user">
                </div>
                <div class="user-title">Tahmid Chowdhury</div>
                <div class="user-location">Sylhet, Bangladesh</div>
            </div>
            <div data-aos="fade-right" class="item">
                <svg class="card-quotes" xmlns="http://www.w3.org/2000/svg" width="64" height="65"
                    viewBox="0 0 64 65" fill="none">
                    <circle cx="32" cy="32.2305" r="30.5" fill="white" stroke="url(#gradient3)"
                        stroke-width="3" />
                    <path
                        d="M44.9184 19.4818L44.3078 24.2141C42.8152 24.1123 41.6618 24.3837 40.8476 25.0283C40.0334 25.6728 39.4906 26.5718 39.2193 27.7252C38.9479 28.8786 38.897 30.1847 39.0666 31.6434H44.9184V43.9068H33.6727V30.6257C33.6727 26.6227 34.6226 23.6035 36.5223 21.5681C38.456 19.4987 41.2547 18.8033 44.9184 19.4818ZM29.2457 19.4818L28.6351 24.2141C27.1424 24.1123 25.989 24.3837 25.1749 25.0283C24.3607 25.6728 23.8179 26.5718 23.5465 27.7252C23.2751 28.8786 23.2242 30.1847 23.3939 31.6434H29.2457V43.9068H18V30.6257C18 26.6227 18.9499 23.6035 20.8496 21.5681C22.7832 19.4987 25.5819 18.8033 29.2457 19.4818Z"
                        fill="url(#gradient33)" />
                    <defs>
                        <linearGradient id="gradient3" x1="0" y1="0.230469" x2="64" y2="64.2305"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#09BD3F" />
                            <stop offset="1" stop-color="#09812D" />
                        </linearGradient>
                        <linearGradient id="gradient33" x1="18" y1="19.2305" x2="42.5833"
                            y2="46.0474" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#09BD3F" />
                            <stop offset="1" stop-color="#09812D" />
                        </linearGradient>
                    </defs>
                </svg>
                <div class="ratings">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"
                        fill="none">
                        <path
                            d="M6.92412 1.48177C7.15436 0.773155 8.15686 0.773155 8.3871 1.48177L9.46877 4.8108C9.57173 5.1277 9.86705 5.34226 10.2003 5.34226H13.7006C14.4457 5.34226 14.7555 6.29569 14.1527 6.73364L11.3209 8.79109C11.0513 8.98694 10.9385 9.33411 11.0414 9.65101L12.1231 12.98C12.3534 13.6887 11.5423 14.2779 10.9395 13.84L8.1077 11.7825C7.83812 11.5866 7.47309 11.5866 7.20352 11.7825L4.37168 13.84C3.7689 14.2779 2.95786 13.6887 3.1881 12.98L4.26977 9.65101C4.37274 9.33411 4.25994 8.98694 3.99037 8.79109L1.15852 6.73364C0.555742 6.29569 0.865531 5.34226 1.61061 5.34226H5.11096C5.44417 5.34226 5.73948 5.1277 5.84245 4.8108L6.92412 1.48177Z"
                            fill="#FBB040" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"
                        fill="none">
                        <path
                            d="M6.92412 1.48177C7.15436 0.773155 8.15686 0.773155 8.3871 1.48177L9.46877 4.8108C9.57173 5.1277 9.86705 5.34226 10.2003 5.34226H13.7006C14.4457 5.34226 14.7555 6.29569 14.1527 6.73364L11.3209 8.79109C11.0513 8.98694 10.9385 9.33411 11.0414 9.65101L12.1231 12.98C12.3534 13.6887 11.5423 14.2779 10.9395 13.84L8.1077 11.7825C7.83812 11.5866 7.47309 11.5866 7.20352 11.7825L4.37168 13.84C3.7689 14.2779 2.95786 13.6887 3.1881 12.98L4.26977 9.65101C4.37274 9.33411 4.25994 8.98694 3.99037 8.79109L1.15852 6.73364C0.555742 6.29569 0.865531 5.34226 1.61061 5.34226H5.11096C5.44417 5.34226 5.73948 5.1277 5.84245 4.8108L6.92412 1.48177Z"
                            fill="#FBB040" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"
                        fill="none">
                        <path
                            d="M6.92412 1.48177C7.15436 0.773155 8.15686 0.773155 8.3871 1.48177L9.46877 4.8108C9.57173 5.1277 9.86705 5.34226 10.2003 5.34226H13.7006C14.4457 5.34226 14.7555 6.29569 14.1527 6.73364L11.3209 8.79109C11.0513 8.98694 10.9385 9.33411 11.0414 9.65101L12.1231 12.98C12.3534 13.6887 11.5423 14.2779 10.9395 13.84L8.1077 11.7825C7.83812 11.5866 7.47309 11.5866 7.20352 11.7825L4.37168 13.84C3.7689 14.2779 2.95786 13.6887 3.1881 12.98L4.26977 9.65101C4.37274 9.33411 4.25994 8.98694 3.99037 8.79109L1.15852 6.73364C0.555742 6.29569 0.865531 5.34226 1.61061 5.34226H5.11096C5.44417 5.34226 5.73948 5.1277 5.84245 4.8108L6.92412 1.48177Z"
                            fill="#FBB040" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"
                        fill="none">
                        <path
                            d="M6.92412 1.48177C7.15436 0.773155 8.15686 0.773155 8.3871 1.48177L9.46877 4.8108C9.57173 5.1277 9.86705 5.34226 10.2003 5.34226H13.7006C14.4457 5.34226 14.7555 6.29569 14.1527 6.73364L11.3209 8.79109C11.0513 8.98694 10.9385 9.33411 11.0414 9.65101L12.1231 12.98C12.3534 13.6887 11.5423 14.2779 10.9395 13.84L8.1077 11.7825C7.83812 11.5866 7.47309 11.5866 7.20352 11.7825L4.37168 13.84C3.7689 14.2779 2.95786 13.6887 3.1881 12.98L4.26977 9.65101C4.37274 9.33411 4.25994 8.98694 3.99037 8.79109L1.15852 6.73364C0.555742 6.29569 0.865531 5.34226 1.61061 5.34226H5.11096C5.44417 5.34226 5.73948 5.1277 5.84245 4.8108L6.92412 1.48177Z"
                            fill="#FBB040" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"
                        fill="none">
                        <path
                            d="M6.92412 1.48177C7.15436 0.773155 8.15686 0.773155 8.3871 1.48177L9.46877 4.8108C9.57173 5.1277 9.86705 5.34226 10.2003 5.34226H13.7006C14.4457 5.34226 14.7555 6.29569 14.1527 6.73364L11.3209 8.79109C11.0513 8.98694 10.9385 9.33411 11.0414 9.65101L12.1231 12.98C12.3534 13.6887 11.5423 14.2779 10.9395 13.84L8.1077 11.7825C7.83812 11.5866 7.47309 11.5866 7.20352 11.7825L4.37168 13.84C3.7689 14.2779 2.95786 13.6887 3.1881 12.98L4.26977 9.65101C4.37274 9.33411 4.25994 8.98694 3.99037 8.79109L1.15852 6.73364C0.555742 6.29569 0.865531 5.34226 1.61061 5.34226H5.11096C5.44417 5.34226 5.73948 5.1277 5.84245 4.8108L6.92412 1.48177Z"
                            fill="#FBB040" />
                    </svg>
                </div>
                <div class="item-title">
                    Loved the experience!
                </div>
                <div class="item-text">
                    << Dico is finally addressing a long time problem we had when building UIs. It’s ease of use and
                        workflow seems really intuitive. Promising!>>

                </div>
                <div class="user">
                    <img src="{{asset('front_end/assets/images/user.png')}}" alt="user">
                </div>
                <div class="user-title">Tahmid Chowdhury</div>
                <div class="user-location">Sylhet, Bangladesh</div>
            </div>
            <div data-aos="fade-left" class="item">
                <svg class="card-quotes" xmlns="http://www.w3.org/2000/svg" width="64" height="65"
                    viewBox="0 0 64 65" fill="none">
                    <circle cx="32" cy="32.2305" r="30.5" fill="white" stroke="url(#gradient4)"
                        stroke-width="3" />
                    <path
                        d="M44.9184 19.4818L44.3078 24.2141C42.8152 24.1123 41.6618 24.3837 40.8476 25.0283C40.0334 25.6728 39.4906 26.5718 39.2193 27.7252C38.9479 28.8786 38.897 30.1847 39.0666 31.6434H44.9184V43.9068H33.6727V30.6257C33.6727 26.6227 34.6226 23.6035 36.5223 21.5681C38.456 19.4987 41.2547 18.8033 44.9184 19.4818ZM29.2457 19.4818L28.6351 24.2141C27.1424 24.1123 25.989 24.3837 25.1749 25.0283C24.3607 25.6728 23.8179 26.5718 23.5465 27.7252C23.2751 28.8786 23.2242 30.1847 23.3939 31.6434H29.2457V43.9068H18V30.6257C18 26.6227 18.9499 23.6035 20.8496 21.5681C22.7832 19.4987 25.5819 18.8033 29.2457 19.4818Z"
                        fill="url(#gradient44)" />
                    <defs>
                        <linearGradient id="gradient4" x1="0" y1="0.230469" x2="64" y2="64.2305"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#09BD3F" />
                            <stop offset="1" stop-color="#09812D" />
                        </linearGradient>
                        <linearGradient id="gradient44" x1="18" y1="19.2305" x2="42.5833"
                            y2="46.0474" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#09BD3F" />
                            <stop offset="1" stop-color="#09812D" />
                        </linearGradient>
                    </defs>
                </svg>
                <div class="ratings">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"
                        fill="none">
                        <path
                            d="M6.92412 1.48177C7.15436 0.773155 8.15686 0.773155 8.3871 1.48177L9.46877 4.8108C9.57173 5.1277 9.86705 5.34226 10.2003 5.34226H13.7006C14.4457 5.34226 14.7555 6.29569 14.1527 6.73364L11.3209 8.79109C11.0513 8.98694 10.9385 9.33411 11.0414 9.65101L12.1231 12.98C12.3534 13.6887 11.5423 14.2779 10.9395 13.84L8.1077 11.7825C7.83812 11.5866 7.47309 11.5866 7.20352 11.7825L4.37168 13.84C3.7689 14.2779 2.95786 13.6887 3.1881 12.98L4.26977 9.65101C4.37274 9.33411 4.25994 8.98694 3.99037 8.79109L1.15852 6.73364C0.555742 6.29569 0.865531 5.34226 1.61061 5.34226H5.11096C5.44417 5.34226 5.73948 5.1277 5.84245 4.8108L6.92412 1.48177Z"
                            fill="#FBB040" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"
                        fill="none">
                        <path
                            d="M6.92412 1.48177C7.15436 0.773155 8.15686 0.773155 8.3871 1.48177L9.46877 4.8108C9.57173 5.1277 9.86705 5.34226 10.2003 5.34226H13.7006C14.4457 5.34226 14.7555 6.29569 14.1527 6.73364L11.3209 8.79109C11.0513 8.98694 10.9385 9.33411 11.0414 9.65101L12.1231 12.98C12.3534 13.6887 11.5423 14.2779 10.9395 13.84L8.1077 11.7825C7.83812 11.5866 7.47309 11.5866 7.20352 11.7825L4.37168 13.84C3.7689 14.2779 2.95786 13.6887 3.1881 12.98L4.26977 9.65101C4.37274 9.33411 4.25994 8.98694 3.99037 8.79109L1.15852 6.73364C0.555742 6.29569 0.865531 5.34226 1.61061 5.34226H5.11096C5.44417 5.34226 5.73948 5.1277 5.84245 4.8108L6.92412 1.48177Z"
                            fill="#FBB040" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"
                        fill="none">
                        <path
                            d="M6.92412 1.48177C7.15436 0.773155 8.15686 0.773155 8.3871 1.48177L9.46877 4.8108C9.57173 5.1277 9.86705 5.34226 10.2003 5.34226H13.7006C14.4457 5.34226 14.7555 6.29569 14.1527 6.73364L11.3209 8.79109C11.0513 8.98694 10.9385 9.33411 11.0414 9.65101L12.1231 12.98C12.3534 13.6887 11.5423 14.2779 10.9395 13.84L8.1077 11.7825C7.83812 11.5866 7.47309 11.5866 7.20352 11.7825L4.37168 13.84C3.7689 14.2779 2.95786 13.6887 3.1881 12.98L4.26977 9.65101C4.37274 9.33411 4.25994 8.98694 3.99037 8.79109L1.15852 6.73364C0.555742 6.29569 0.865531 5.34226 1.61061 5.34226H5.11096C5.44417 5.34226 5.73948 5.1277 5.84245 4.8108L6.92412 1.48177Z"
                            fill="#FBB040" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"
                        fill="none">
                        <path
                            d="M6.92412 1.48177C7.15436 0.773155 8.15686 0.773155 8.3871 1.48177L9.46877 4.8108C9.57173 5.1277 9.86705 5.34226 10.2003 5.34226H13.7006C14.4457 5.34226 14.7555 6.29569 14.1527 6.73364L11.3209 8.79109C11.0513 8.98694 10.9385 9.33411 11.0414 9.65101L12.1231 12.98C12.3534 13.6887 11.5423 14.2779 10.9395 13.84L8.1077 11.7825C7.83812 11.5866 7.47309 11.5866 7.20352 11.7825L4.37168 13.84C3.7689 14.2779 2.95786 13.6887 3.1881 12.98L4.26977 9.65101C4.37274 9.33411 4.25994 8.98694 3.99037 8.79109L1.15852 6.73364C0.555742 6.29569 0.865531 5.34226 1.61061 5.34226H5.11096C5.44417 5.34226 5.73948 5.1277 5.84245 4.8108L6.92412 1.48177Z"
                            fill="#FBB040" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14"
                        fill="none">
                        <path
                            d="M6.92412 1.48177C7.15436 0.773155 8.15686 0.773155 8.3871 1.48177L9.46877 4.8108C9.57173 5.1277 9.86705 5.34226 10.2003 5.34226H13.7006C14.4457 5.34226 14.7555 6.29569 14.1527 6.73364L11.3209 8.79109C11.0513 8.98694 10.9385 9.33411 11.0414 9.65101L12.1231 12.98C12.3534 13.6887 11.5423 14.2779 10.9395 13.84L8.1077 11.7825C7.83812 11.5866 7.47309 11.5866 7.20352 11.7825L4.37168 13.84C3.7689 14.2779 2.95786 13.6887 3.1881 12.98L4.26977 9.65101C4.37274 9.33411 4.25994 8.98694 3.99037 8.79109L1.15852 6.73364C0.555742 6.29569 0.865531 5.34226 1.61061 5.34226H5.11096C5.44417 5.34226 5.73948 5.1277 5.84245 4.8108L6.92412 1.48177Z"
                            fill="#FBB040" />
                    </svg>
                </div>
                <div class="item-title">
                    Loved the experience!
                </div>
                <div class="item-text">
                    << Dico is finally addressing a long time problem we had when building UIs. It’s ease of use and
                        workflow seems really intuitive. Promising!>>

                </div>
                <div class="user">
                    <img src="{{asset('front_end/assets/images/user.png')}}" alt="user">
                </div>
                <div class="user-title">Tahmid Chowdhury</div>
                <div class="user-location">Sylhet, Bangladesh</div>
            </div>

        </div>
    </div>
    <!-- what client say section end -->

    <!-- become a test prepare start -->
    <div class="become-test-prepare">
        <div data-aos="fade-right" class="section-title">Become a <span>Tax Preparer</span></div>
        <div data-aos="fade-right" class="section-text mt-4">
            Grow your tax business and connect with clients looking for trusted tax professionals.
        </div>
        <a data-aos="fade-right" href="" class="common-btn">Join Now</a>
    </div>
    <!-- become a test prepare end -->

    <!-- process start -->
    <div class="home-process">
        <div data-aos="fade-right" class="item">
            <div class="process-count">
                1
            </div>
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
            <div class="item-title">
                Sign Up for Free
            </div>
            <div class="item-text">
                Join TAXDAX by creating a professional profile. Add your qualifications, certifications, and a brief bio to
                let potential clients know who you are and what makes your services stand out.
            </div>
        </div>
        <div class="item">
            <div class="process-count">
                2
            </div>
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
            <div class="item-title">
                Set Up Your Services
            </div>
            <div class="item-text">
                "List the tax services you offer, from personal tax filing to business consulting. Set your pricing,
                determine your availability, and let clients know how they can book appointments with you.
            </div>
        </div>
        <div data-aos="fade-left" class="item">
            <div class="process-count">
                3
            </div>
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
            <div class="item-title">
                Start Getting Bookings
            </div>
            <div class="item-text">
                Once your profile is live, start receiving inquiries from clients. Respond to messages, accept appointments,
                and watch your client base grow as more people discover and trust your expertise.
            </div>
        </div>
    </div>
    <!-- process end -->
@endsection
