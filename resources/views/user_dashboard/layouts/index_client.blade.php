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
    <!-- search bar end -->
    <!-- mobile searchbar end -->

    <!-- dashboard banner section start -->
    <div class="tm-dashboard-banner">
        <div class="container">
            <div class="tm-dashboard-banner-content-wrapper">
                <h1>
                    Welcome back, Tanzila Diva! Let's get started on your taxes
                </h1>
                <p>
                    Start now to connect with trusted tax professionals, book
                    appointments, and manage your documents—all in one place for a
                    smooth tax preparation experience.
                </p>
                <a class="start-searching-btn start-search-btn" href="#searchBar">Start Searching</a>
                <a class="start-searching-btn start-search-btn-mobile" href="#searchBarMobile">Start Searching</a>
            </div>
        </div>
    </div>
    <!-- dashboard banner section End -->

    <!-- upcoming appointment section start -->
    <div class="upcoming-apointment-section">
        <h1 class="tm-dashboard-heading">Upcoming Appointments</h1>
        <div class="categories-tax-card-wrapper">
            <div class="explore-tax-single-card">
                <div class="upcoming-apointments-user">
                    <div class="upcoming-apointments-user-img-name">
                        <div class="upcoming-apointments-user-img">
                            <img src="{{ asset('user_dashboard/assets/images/user.png') }}" alt="user"
                                srcset="" />
                        </div>
                        <div class="upcoming-apointments-user-name-city">
                            <h5>John Doe, CPA</h5>
                            <p>New York, NY</p>
                        </div>
                    </div>
                    <a href="#" class="upcoming-apointments-user-link">View Profile</a>
                </div>
                <div class="upcoming-apointment-devider"></div>
                <div class="explore-card-heading-para">
                    <h4>Mon, Aug 17</h4>
                    <p class="explore-card-location">
                        <img src="{{ asset('front_end/assets/images/location-icon.svg') }}" alt=""
                            srcset="" />
                        New York, NY
                    </p>
                    <p class="explore-card-main-para">
                        Personal Tax Filing and Consulting
                    </p>
                    <div class="check-availability-bookmarks">
                        <a href="tax-profile.html">Reschedule</a>
                    </div>
                </div>
            </div>
            <div class="explore-tax-single-card">
                <div class="upcoming-apointments-user">
                    <div class="upcoming-apointments-user-img-name">
                        <div class="upcoming-apointments-user-img">
                            <img src="{{ asset('user_dashboard/assets/images/user.png') }}" alt="user"
                                srcset="" />
                        </div>
                        <div class="upcoming-apointments-user-name-city">
                            <h5>John Doe, CPA</h5>
                            <p>New York, NY</p>
                        </div>
                    </div>
                    <a href="#" class="upcoming-apointments-user-link">View Profile</a>
                </div>
                <div class="upcoming-apointment-devider"></div>
                <div class="explore-card-heading-para">
                    <h4>Mon, Aug 17</h4>
                    <p class="explore-card-location">
                        <img src="{{ asset('front_end/assets/images/location-icon.svg') }}../automated-busi/assets/images/location-icon.svg"
                            alt="" srcset="" />
                        New York, NY
                    </p>
                    <p class="explore-card-main-para">
                        Personal Tax Filing and Consulting
                    </p>
                    <div class="check-availability-bookmarks">
                        <a href="tax-profile.html">Reschedule</a>
                    </div>
                </div>
            </div>
            <div class="explore-tax-single-card">
                <div class="upcoming-apointments-user">
                    <div class="upcoming-apointments-user-img-name">
                        <div class="upcoming-apointments-user-img">
                            <img src="{{ asset('user_dashboard/assets/images/user.png') }}" alt="user"
                                srcset="" />
                        </div>
                        <div class="upcoming-apointments-user-name-city">
                            <h5>John Doe, CPA</h5>
                            <p>New York, NY</p>
                        </div>
                    </div>
                    <a href="#" class="upcoming-apointments-user-link">View Profile</a>
                </div>
                <div class="upcoming-apointment-devider"></div>
                <div class="explore-card-heading-para">
                    <h4>Mon, Aug 17</h4>
                    <p class="explore-card-location">
                        <img src="{{ asset('front_end/assets/images/location-icon.svg') }}../automated-busi/assets/images/location-icon.svg"
                            alt="" srcset="" />
                        New York, NY
                    </p>
                    <p class="explore-card-main-para">
                        Personal Tax Filing and Consulting
                    </p>
                    <div class="check-availability-bookmarks">
                        <a href="tax-profile.html">Reschedule</a>
                    </div>
                </div>
            </div>
            <div class="explore-tax-single-card">
                <div class="upcoming-apointments-user">
                    <div class="upcoming-apointments-user-img-name">
                        <div class="upcoming-apointments-user-img">
                            <img src="{{ asset('user_dashboard/assets/images/user.png') }}" alt="user"
                                srcset="" />
                        </div>
                        <div class="upcoming-apointments-user-name-city">
                            <h5>John Doe, CPA</h5>
                            <p>New York, NY</p>
                        </div>
                    </div>
                    <a href="#" class="upcoming-apointments-user-link">View Profile</a>
                </div>
                <div class="upcoming-apointment-devider"></div>
                <div class="explore-card-heading-para">
                    <h4>Mon, Aug 17</h4>
                    <p class="explore-card-location">
                        <img src="{{ asset('front_end/assets/images/location-icon.svg') }}../automated-busi/assets/images/location-icon.svg"
                            alt="" srcset="" />
                        New York, NY
                    </p>
                    <p class="explore-card-main-para">
                        Personal Tax Filing and Consulting
                    </p>
                    <div class="check-availability-bookmarks">
                        <a href="tax-profile.html">Reschedule</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- upcoming appointment section End -->
    <!-- upcoming appointment section start -->
    <div class="tax-professionals-section">
        <h1 class="tm-dashboard-heading">
            "Explore Top Tax Professionals Ready to Assist You
        </h1>
        <div class="categories-tax-card-wrapper">
            <div class="explore-tax-single-card">
                <div style="background-image: url('{{ asset('front_end/assets/images/explore-img.jpg') }}')"
                    class="explore-card-img-are"></div>
                <div class="explore-rating-area">
                    <p class="explore-ratings-star-count">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="68" height="12"
                                viewBox="0 0 68 12" fill="none">
                                <path
                                    d="M6 3.11392e-08L7.34708 4.1459L11.7063 4.1459L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459L4.65292 4.1459L6 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M20 3.11392e-08L21.3471 4.1459L25.7063 4.1459L22.1796 6.7082L23.5267 10.8541L20 8.2918L16.4733 10.8541L17.8204 6.7082L14.2937 4.1459L18.6529 4.1459L20 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M34 3.11392e-08L35.3471 4.1459L39.7063 4.1459L36.1796 6.7082L37.5267 10.8541L34 8.2918L30.4733 10.8541L31.8204 6.7082L28.2937 4.1459L32.6529 4.1459L34 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M48 3.11392e-08L49.3471 4.1459L53.7063 4.1459L50.1796 6.7082L51.5267 10.8541L48 8.2918L44.4733 10.8541L45.8204 6.7082L42.2937 4.1459L46.6529 4.1459L48 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M62 3.11392e-08L63.3471 4.1459L67.7063 4.1459L64.1796 6.7082L65.5267 10.8541L62 8.2918L58.4733 10.8541L59.8204 6.7082L56.2937 4.1459L60.6529 4.1459L62 3.11392e-08Z"
                                    fill="#BABABA" />
                            </svg>
                        </span>
                        <span class="explore-rating-count">
                            4.5 <span>(210)</span>
                        </span>
                    </p>
                    <p>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 16 16" fill="none">
                                <g clip-path="url(#clip0_8932_2280)">
                                    <path
                                        d="M5.34001 8.33148C4.91693 7.87579 5.54784 7.24551 6.00305 7.66844L7.21864 8.88403L9.98132 6.12134C10.1644 5.93825 10.4613 5.93825 10.6444 6.12134C10.8275 6.30444 10.8275 6.60129 10.6444 6.78438L7.55015 9.87857C7.36705 10.0617 7.07021 10.0617 6.88711 9.87857L5.34001 8.33148ZM5.82724 3.24211C6.08616 3.24211 6.29608 3.03219 6.29608 2.77326C6.27311 2.15201 5.38127 2.1522 5.35839 2.77326C5.35839 3.03219 5.56831 3.24211 5.82724 3.24211ZM3.99184 4.46842C4.25076 4.46842 4.46068 4.2585 4.46068 3.99957C4.43771 3.37832 3.54587 3.37851 3.52299 3.99957C3.52299 4.2585 3.73291 4.46842 3.99184 4.46842ZM15.9938 7.99994C16.006 15.0878 7.33692 18.6785 2.33416 13.6579C-0.769589 10.6795 -0.77012 5.32034 2.33429 2.34196C7.33745 -2.67852 16.0065 0.912389 15.9938 7.99994ZM15.0561 7.99994C15.0561 4.10488 11.8873 0.936019 7.9922 0.936019C-1.36618 1.29115 -1.36362 14.7102 7.9923 15.0639C11.8873 15.0639 15.0561 11.895 15.0561 7.99994ZM7.9922 1.87371C7.37017 1.89668 7.37258 2.7897 7.9922 2.8114C10.8532 2.8114 13.1807 5.13896 13.1807 7.99994C12.9199 14.8737 3.06356 14.8721 2.80366 7.99988C2.80366 7.74101 2.59374 7.5311 2.33482 7.5311C2.07589 7.5311 1.86597 7.74101 1.86597 7.99994C1.86597 11.378 4.61418 14.1262 7.9922 14.1262C16.1082 13.8182 16.1063 2.18055 7.9922 1.87371ZM2.76547 6.30379C3.02439 6.30379 3.23431 6.09387 3.23431 5.83494C3.21134 5.21369 2.3195 5.21388 2.29662 5.83494C2.29662 6.09387 2.50654 6.30379 2.76547 6.30379Z"
                                        fill="url(#paint0_linear_8932_2280)" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_8932_2280" x1="0.00616455" y1="0"
                                        x2="16.0061" y2="15.9877" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#09BD3F" />
                                        <stop offset="1" stop-color="#09812D" />
                                    </linearGradient>
                                    <clipPath id="clip0_8932_2280">
                                        <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        10 WIP
                    </p>
                </div>
                <div class="explore-card-heading-para">
                    <h4>John Doe, CPA</h4>
                    <p class="explore-card-location">
                        <img src="{{ asset('front_end/assets/images/location-icon.svg') }}../automated-busi/assets/images/location-icon.svg"
                            alt="" srcset="" />
                        New York, NY
                    </p>
                    <p class="explore-card-main-para">
                        Personal Tax Filing and Consulting
                    </p>
                    <div class="check-availability-bookmarks">
                        <a href="tax-profile.html">Check Availability</a>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <rect width="30" height="30" rx="4" fill="#E6F2EA" />
                                <path
                                    d="M8 24V7.87665C8 7.34168 8.19292 6.89535 8.57875 6.53768C8.96458 6.18 9.445 6.00077 10.02 6H20.9812C21.5562 6 22.0367 6.17923 22.4225 6.53768C22.8083 6.89613 23.0008 7.34245 23 7.87665V24L15.5 20.0074L8 24ZM9.25 22.2L15.5 18.7032L21.75 22.2V7.87665C21.75 7.69781 21.67 7.53368 21.51 7.38426C21.35 7.23484 21.1733 7.16052 20.98 7.16129H10.02C9.8275 7.16129 9.65083 7.23561 9.49 7.38426C9.32917 7.5329 9.24917 7.69703 9.25 7.87665V22.2Z"
                                    fill="#5AAB72" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="explore-tax-single-card">
                <div style="background-image: url('{{ asset('front_end/assets/images/explore-img.jpg') }}')"
                    class="explore-card-img-are"></div>
                <div class="explore-rating-area">
                    <p class="explore-ratings-star-count">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="68" height="12"
                                viewBox="0 0 68 12" fill="none">
                                <path
                                    d="M6 3.11392e-08L7.34708 4.1459L11.7063 4.1459L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459L4.65292 4.1459L6 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M20 3.11392e-08L21.3471 4.1459L25.7063 4.1459L22.1796 6.7082L23.5267 10.8541L20 8.2918L16.4733 10.8541L17.8204 6.7082L14.2937 4.1459L18.6529 4.1459L20 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M34 3.11392e-08L35.3471 4.1459L39.7063 4.1459L36.1796 6.7082L37.5267 10.8541L34 8.2918L30.4733 10.8541L31.8204 6.7082L28.2937 4.1459L32.6529 4.1459L34 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M48 3.11392e-08L49.3471 4.1459L53.7063 4.1459L50.1796 6.7082L51.5267 10.8541L48 8.2918L44.4733 10.8541L45.8204 6.7082L42.2937 4.1459L46.6529 4.1459L48 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M62 3.11392e-08L63.3471 4.1459L67.7063 4.1459L64.1796 6.7082L65.5267 10.8541L62 8.2918L58.4733 10.8541L59.8204 6.7082L56.2937 4.1459L60.6529 4.1459L62 3.11392e-08Z"
                                    fill="#BABABA" />
                            </svg>
                        </span>
                        <span class="explore-rating-count">
                            4.5 <span>(210)</span>
                        </span>
                    </p>
                    <p>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 16 16" fill="none">
                                <g clip-path="url(#clip0_8932_2280)">
                                    <path
                                        d="M5.34001 8.33148C4.91693 7.87579 5.54784 7.24551 6.00305 7.66844L7.21864 8.88403L9.98132 6.12134C10.1644 5.93825 10.4613 5.93825 10.6444 6.12134C10.8275 6.30444 10.8275 6.60129 10.6444 6.78438L7.55015 9.87857C7.36705 10.0617 7.07021 10.0617 6.88711 9.87857L5.34001 8.33148ZM5.82724 3.24211C6.08616 3.24211 6.29608 3.03219 6.29608 2.77326C6.27311 2.15201 5.38127 2.1522 5.35839 2.77326C5.35839 3.03219 5.56831 3.24211 5.82724 3.24211ZM3.99184 4.46842C4.25076 4.46842 4.46068 4.2585 4.46068 3.99957C4.43771 3.37832 3.54587 3.37851 3.52299 3.99957C3.52299 4.2585 3.73291 4.46842 3.99184 4.46842ZM15.9938 7.99994C16.006 15.0878 7.33692 18.6785 2.33416 13.6579C-0.769589 10.6795 -0.77012 5.32034 2.33429 2.34196C7.33745 -2.67852 16.0065 0.912389 15.9938 7.99994ZM15.0561 7.99994C15.0561 4.10488 11.8873 0.936019 7.9922 0.936019C-1.36618 1.29115 -1.36362 14.7102 7.9923 15.0639C11.8873 15.0639 15.0561 11.895 15.0561 7.99994ZM7.9922 1.87371C7.37017 1.89668 7.37258 2.7897 7.9922 2.8114C10.8532 2.8114 13.1807 5.13896 13.1807 7.99994C12.9199 14.8737 3.06356 14.8721 2.80366 7.99988C2.80366 7.74101 2.59374 7.5311 2.33482 7.5311C2.07589 7.5311 1.86597 7.74101 1.86597 7.99994C1.86597 11.378 4.61418 14.1262 7.9922 14.1262C16.1082 13.8182 16.1063 2.18055 7.9922 1.87371ZM2.76547 6.30379C3.02439 6.30379 3.23431 6.09387 3.23431 5.83494C3.21134 5.21369 2.3195 5.21388 2.29662 5.83494C2.29662 6.09387 2.50654 6.30379 2.76547 6.30379Z"
                                        fill="url(#paint0_linear_8932_2280)" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_8932_2280" x1="0.00616455" y1="0"
                                        x2="16.0061" y2="15.9877" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#09BD3F" />
                                        <stop offset="1" stop-color="#09812D" />
                                    </linearGradient>
                                    <clipPath id="clip0_8932_2280">
                                        <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        10 WIP
                    </p>
                </div>
                <div class="explore-card-heading-para">
                    <h4>John Doe, CPA</h4>
                    <p class="explore-card-location">
                        <img src="{{ asset('front_end/assets/images/location-icon.svg') }}../automated-busi/assets/images/location-icon.svg"
                            alt="" srcset="" />
                        New York, NY
                    </p>
                    <p class="explore-card-main-para">
                        Personal Tax Filing and Consulting
                    </p>
                    <div class="check-availability-bookmarks">
                        <a href="tax-profile.html">Check Availability</a>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <rect width="30" height="30" rx="4" fill="#E6F2EA" />
                                <path
                                    d="M8 24V7.87665C8 7.34168 8.19292 6.89535 8.57875 6.53768C8.96458 6.18 9.445 6.00077 10.02 6H20.9812C21.5562 6 22.0367 6.17923 22.4225 6.53768C22.8083 6.89613 23.0008 7.34245 23 7.87665V24L15.5 20.0074L8 24ZM9.25 22.2L15.5 18.7032L21.75 22.2V7.87665C21.75 7.69781 21.67 7.53368 21.51 7.38426C21.35 7.23484 21.1733 7.16052 20.98 7.16129H10.02C9.8275 7.16129 9.65083 7.23561 9.49 7.38426C9.32917 7.5329 9.24917 7.69703 9.25 7.87665V22.2Z"
                                    fill="#5AAB72" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="explore-tax-single-card">
                <div style="background-image: url('{{ asset('front_end/assets/images/explore-img.jpg') }}')"
                    class="explore-card-img-are"></div>
                <div class="explore-rating-area">
                    <p class="explore-ratings-star-count">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="68" height="12"
                                viewBox="0 0 68 12" fill="none">
                                <path
                                    d="M6 3.11392e-08L7.34708 4.1459L11.7063 4.1459L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459L4.65292 4.1459L6 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M20 3.11392e-08L21.3471 4.1459L25.7063 4.1459L22.1796 6.7082L23.5267 10.8541L20 8.2918L16.4733 10.8541L17.8204 6.7082L14.2937 4.1459L18.6529 4.1459L20 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M34 3.11392e-08L35.3471 4.1459L39.7063 4.1459L36.1796 6.7082L37.5267 10.8541L34 8.2918L30.4733 10.8541L31.8204 6.7082L28.2937 4.1459L32.6529 4.1459L34 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M48 3.11392e-08L49.3471 4.1459L53.7063 4.1459L50.1796 6.7082L51.5267 10.8541L48 8.2918L44.4733 10.8541L45.8204 6.7082L42.2937 4.1459L46.6529 4.1459L48 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M62 3.11392e-08L63.3471 4.1459L67.7063 4.1459L64.1796 6.7082L65.5267 10.8541L62 8.2918L58.4733 10.8541L59.8204 6.7082L56.2937 4.1459L60.6529 4.1459L62 3.11392e-08Z"
                                    fill="#BABABA" />
                            </svg>
                        </span>
                        <span class="explore-rating-count">
                            4.5 <span>(210)</span>
                        </span>
                    </p>
                    <p>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 16 16" fill="none">
                                <g clip-path="url(#clip0_8932_2280)">
                                    <path
                                        d="M5.34001 8.33148C4.91693 7.87579 5.54784 7.24551 6.00305 7.66844L7.21864 8.88403L9.98132 6.12134C10.1644 5.93825 10.4613 5.93825 10.6444 6.12134C10.8275 6.30444 10.8275 6.60129 10.6444 6.78438L7.55015 9.87857C7.36705 10.0617 7.07021 10.0617 6.88711 9.87857L5.34001 8.33148ZM5.82724 3.24211C6.08616 3.24211 6.29608 3.03219 6.29608 2.77326C6.27311 2.15201 5.38127 2.1522 5.35839 2.77326C5.35839 3.03219 5.56831 3.24211 5.82724 3.24211ZM3.99184 4.46842C4.25076 4.46842 4.46068 4.2585 4.46068 3.99957C4.43771 3.37832 3.54587 3.37851 3.52299 3.99957C3.52299 4.2585 3.73291 4.46842 3.99184 4.46842ZM15.9938 7.99994C16.006 15.0878 7.33692 18.6785 2.33416 13.6579C-0.769589 10.6795 -0.77012 5.32034 2.33429 2.34196C7.33745 -2.67852 16.0065 0.912389 15.9938 7.99994ZM15.0561 7.99994C15.0561 4.10488 11.8873 0.936019 7.9922 0.936019C-1.36618 1.29115 -1.36362 14.7102 7.9923 15.0639C11.8873 15.0639 15.0561 11.895 15.0561 7.99994ZM7.9922 1.87371C7.37017 1.89668 7.37258 2.7897 7.9922 2.8114C10.8532 2.8114 13.1807 5.13896 13.1807 7.99994C12.9199 14.8737 3.06356 14.8721 2.80366 7.99988C2.80366 7.74101 2.59374 7.5311 2.33482 7.5311C2.07589 7.5311 1.86597 7.74101 1.86597 7.99994C1.86597 11.378 4.61418 14.1262 7.9922 14.1262C16.1082 13.8182 16.1063 2.18055 7.9922 1.87371ZM2.76547 6.30379C3.02439 6.30379 3.23431 6.09387 3.23431 5.83494C3.21134 5.21369 2.3195 5.21388 2.29662 5.83494C2.29662 6.09387 2.50654 6.30379 2.76547 6.30379Z"
                                        fill="url(#paint0_linear_8932_2280)" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_8932_2280" x1="0.00616455" y1="0"
                                        x2="16.0061" y2="15.9877" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#09BD3F" />
                                        <stop offset="1" stop-color="#09812D" />
                                    </linearGradient>
                                    <clipPath id="clip0_8932_2280">
                                        <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        10 WIP
                    </p>
                </div>
                <div class="explore-card-heading-para">
                    <h4>John Doe, CPA</h4>
                    <p class="explore-card-location">
                        <img src="{{ asset('front_end/assets/images/location-icon.svg') }}../automated-busi/assets/images/location-icon.svg"
                            alt="" srcset="" />
                        New York, NY
                    </p>
                    <p class="explore-card-main-para">
                        Personal Tax Filing and Consulting
                    </p>
                    <div class="check-availability-bookmarks">
                        <a href="tax-profile.html">Check Availability</a>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <rect width="30" height="30" rx="4" fill="#E6F2EA" />
                                <path
                                    d="M8 24V7.87665C8 7.34168 8.19292 6.89535 8.57875 6.53768C8.96458 6.18 9.445 6.00077 10.02 6H20.9812C21.5562 6 22.0367 6.17923 22.4225 6.53768C22.8083 6.89613 23.0008 7.34245 23 7.87665V24L15.5 20.0074L8 24ZM9.25 22.2L15.5 18.7032L21.75 22.2V7.87665C21.75 7.69781 21.67 7.53368 21.51 7.38426C21.35 7.23484 21.1733 7.16052 20.98 7.16129H10.02C9.8275 7.16129 9.65083 7.23561 9.49 7.38426C9.32917 7.5329 9.24917 7.69703 9.25 7.87665V22.2Z"
                                    fill="#5AAB72" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="explore-tax-single-card">
                <div style="background-image: url('{{ asset('front_end/assets/images/explore-img.jpg') }}')"
                    class="explore-card-img-are"></div>
                <div class="explore-rating-area">
                    <p class="explore-ratings-star-count">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="68" height="12"
                                viewBox="0 0 68 12" fill="none">
                                <path
                                    d="M6 3.11392e-08L7.34708 4.1459L11.7063 4.1459L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459L4.65292 4.1459L6 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M20 3.11392e-08L21.3471 4.1459L25.7063 4.1459L22.1796 6.7082L23.5267 10.8541L20 8.2918L16.4733 10.8541L17.8204 6.7082L14.2937 4.1459L18.6529 4.1459L20 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M34 3.11392e-08L35.3471 4.1459L39.7063 4.1459L36.1796 6.7082L37.5267 10.8541L34 8.2918L30.4733 10.8541L31.8204 6.7082L28.2937 4.1459L32.6529 4.1459L34 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M48 3.11392e-08L49.3471 4.1459L53.7063 4.1459L50.1796 6.7082L51.5267 10.8541L48 8.2918L44.4733 10.8541L45.8204 6.7082L42.2937 4.1459L46.6529 4.1459L48 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M62 3.11392e-08L63.3471 4.1459L67.7063 4.1459L64.1796 6.7082L65.5267 10.8541L62 8.2918L58.4733 10.8541L59.8204 6.7082L56.2937 4.1459L60.6529 4.1459L62 3.11392e-08Z"
                                    fill="#BABABA" />
                            </svg>
                        </span>
                        <span class="explore-rating-count">
                            4.5 <span>(210)</span>
                        </span>
                    </p>
                    <p>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 16 16" fill="none">
                                <g clip-path="url(#clip0_8932_2280)">
                                    <path
                                        d="M5.34001 8.33148C4.91693 7.87579 5.54784 7.24551 6.00305 7.66844L7.21864 8.88403L9.98132 6.12134C10.1644 5.93825 10.4613 5.93825 10.6444 6.12134C10.8275 6.30444 10.8275 6.60129 10.6444 6.78438L7.55015 9.87857C7.36705 10.0617 7.07021 10.0617 6.88711 9.87857L5.34001 8.33148ZM5.82724 3.24211C6.08616 3.24211 6.29608 3.03219 6.29608 2.77326C6.27311 2.15201 5.38127 2.1522 5.35839 2.77326C5.35839 3.03219 5.56831 3.24211 5.82724 3.24211ZM3.99184 4.46842C4.25076 4.46842 4.46068 4.2585 4.46068 3.99957C4.43771 3.37832 3.54587 3.37851 3.52299 3.99957C3.52299 4.2585 3.73291 4.46842 3.99184 4.46842ZM15.9938 7.99994C16.006 15.0878 7.33692 18.6785 2.33416 13.6579C-0.769589 10.6795 -0.77012 5.32034 2.33429 2.34196C7.33745 -2.67852 16.0065 0.912389 15.9938 7.99994ZM15.0561 7.99994C15.0561 4.10488 11.8873 0.936019 7.9922 0.936019C-1.36618 1.29115 -1.36362 14.7102 7.9923 15.0639C11.8873 15.0639 15.0561 11.895 15.0561 7.99994ZM7.9922 1.87371C7.37017 1.89668 7.37258 2.7897 7.9922 2.8114C10.8532 2.8114 13.1807 5.13896 13.1807 7.99994C12.9199 14.8737 3.06356 14.8721 2.80366 7.99988C2.80366 7.74101 2.59374 7.5311 2.33482 7.5311C2.07589 7.5311 1.86597 7.74101 1.86597 7.99994C1.86597 11.378 4.61418 14.1262 7.9922 14.1262C16.1082 13.8182 16.1063 2.18055 7.9922 1.87371ZM2.76547 6.30379C3.02439 6.30379 3.23431 6.09387 3.23431 5.83494C3.21134 5.21369 2.3195 5.21388 2.29662 5.83494C2.29662 6.09387 2.50654 6.30379 2.76547 6.30379Z"
                                        fill="url(#paint0_linear_8932_2280)" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_8932_2280" x1="0.00616455" y1="0"
                                        x2="16.0061" y2="15.9877" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#09BD3F" />
                                        <stop offset="1" stop-color="#09812D" />
                                    </linearGradient>
                                    <clipPath id="clip0_8932_2280">
                                        <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        10 WIP
                    </p>
                </div>
                <div class="explore-card-heading-para">
                    <h4>John Doe, CPA</h4>
                    <p class="explore-card-location">
                        <img src="{{ asset('front_end/assets/images/location-icon.svg') }}../automated-busi/assets/images/location-icon.svg"
                            alt="" srcset="" />
                        New York, NY
                    </p>
                    <p class="explore-card-main-para">
                        Personal Tax Filing and Consulting
                    </p>
                    <div class="check-availability-bookmarks">
                        <a href="tax-profile.html">Check Availability</a>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <rect width="30" height="30" rx="4" fill="#E6F2EA" />
                                <path
                                    d="M8 24V7.87665C8 7.34168 8.19292 6.89535 8.57875 6.53768C8.96458 6.18 9.445 6.00077 10.02 6H20.9812C21.5562 6 22.0367 6.17923 22.4225 6.53768C22.8083 6.89613 23.0008 7.34245 23 7.87665V24L15.5 20.0074L8 24ZM9.25 22.2L15.5 18.7032L21.75 22.2V7.87665C21.75 7.69781 21.67 7.53368 21.51 7.38426C21.35 7.23484 21.1733 7.16052 20.98 7.16129H10.02C9.8275 7.16129 9.65083 7.23561 9.49 7.38426C9.32917 7.5329 9.24917 7.69703 9.25 7.87665V22.2Z"
                                    fill="#5AAB72" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="explore-tax-single-card">
                <div style="background-image: url('{{ asset('front_end/assets/images/explore-img.jpg') }}')"
                    class="explore-card-img-are"></div>
                <div class="explore-rating-area">
                    <p class="explore-ratings-star-count">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="68" height="12"
                                viewBox="0 0 68 12" fill="none">
                                <path
                                    d="M6 3.11392e-08L7.34708 4.1459L11.7063 4.1459L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459L4.65292 4.1459L6 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M20 3.11392e-08L21.3471 4.1459L25.7063 4.1459L22.1796 6.7082L23.5267 10.8541L20 8.2918L16.4733 10.8541L17.8204 6.7082L14.2937 4.1459L18.6529 4.1459L20 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M34 3.11392e-08L35.3471 4.1459L39.7063 4.1459L36.1796 6.7082L37.5267 10.8541L34 8.2918L30.4733 10.8541L31.8204 6.7082L28.2937 4.1459L32.6529 4.1459L34 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M48 3.11392e-08L49.3471 4.1459L53.7063 4.1459L50.1796 6.7082L51.5267 10.8541L48 8.2918L44.4733 10.8541L45.8204 6.7082L42.2937 4.1459L46.6529 4.1459L48 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M62 3.11392e-08L63.3471 4.1459L67.7063 4.1459L64.1796 6.7082L65.5267 10.8541L62 8.2918L58.4733 10.8541L59.8204 6.7082L56.2937 4.1459L60.6529 4.1459L62 3.11392e-08Z"
                                    fill="#BABABA" />
                            </svg>
                        </span>
                        <span class="explore-rating-count">
                            4.5 <span>(210)</span>
                        </span>
                    </p>
                    <p>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 16 16" fill="none">
                                <g clip-path="url(#clip0_8932_2280)">
                                    <path
                                        d="M5.34001 8.33148C4.91693 7.87579 5.54784 7.24551 6.00305 7.66844L7.21864 8.88403L9.98132 6.12134C10.1644 5.93825 10.4613 5.93825 10.6444 6.12134C10.8275 6.30444 10.8275 6.60129 10.6444 6.78438L7.55015 9.87857C7.36705 10.0617 7.07021 10.0617 6.88711 9.87857L5.34001 8.33148ZM5.82724 3.24211C6.08616 3.24211 6.29608 3.03219 6.29608 2.77326C6.27311 2.15201 5.38127 2.1522 5.35839 2.77326C5.35839 3.03219 5.56831 3.24211 5.82724 3.24211ZM3.99184 4.46842C4.25076 4.46842 4.46068 4.2585 4.46068 3.99957C4.43771 3.37832 3.54587 3.37851 3.52299 3.99957C3.52299 4.2585 3.73291 4.46842 3.99184 4.46842ZM15.9938 7.99994C16.006 15.0878 7.33692 18.6785 2.33416 13.6579C-0.769589 10.6795 -0.77012 5.32034 2.33429 2.34196C7.33745 -2.67852 16.0065 0.912389 15.9938 7.99994ZM15.0561 7.99994C15.0561 4.10488 11.8873 0.936019 7.9922 0.936019C-1.36618 1.29115 -1.36362 14.7102 7.9923 15.0639C11.8873 15.0639 15.0561 11.895 15.0561 7.99994ZM7.9922 1.87371C7.37017 1.89668 7.37258 2.7897 7.9922 2.8114C10.8532 2.8114 13.1807 5.13896 13.1807 7.99994C12.9199 14.8737 3.06356 14.8721 2.80366 7.99988C2.80366 7.74101 2.59374 7.5311 2.33482 7.5311C2.07589 7.5311 1.86597 7.74101 1.86597 7.99994C1.86597 11.378 4.61418 14.1262 7.9922 14.1262C16.1082 13.8182 16.1063 2.18055 7.9922 1.87371ZM2.76547 6.30379C3.02439 6.30379 3.23431 6.09387 3.23431 5.83494C3.21134 5.21369 2.3195 5.21388 2.29662 5.83494C2.29662 6.09387 2.50654 6.30379 2.76547 6.30379Z"
                                        fill="url(#paint0_linear_8932_2280)" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_8932_2280" x1="0.00616455" y1="0"
                                        x2="16.0061" y2="15.9877" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#09BD3F" />
                                        <stop offset="1" stop-color="#09812D" />
                                    </linearGradient>
                                    <clipPath id="clip0_8932_2280">
                                        <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        10 WIP
                    </p>
                </div>
                <div class="explore-card-heading-para">
                    <h4>John Doe, CPA</h4>
                    <p class="explore-card-location">
                        <img src="{{ asset('front_end/assets/images/location-icon.svg') }}../automated-busi/assets/images/location-icon.svg"
                            alt="" srcset="" />
                        New York, NY
                    </p>
                    <p class="explore-card-main-para">
                        Personal Tax Filing and Consulting
                    </p>
                    <div class="check-availability-bookmarks">
                        <a href="tax-profile.html">Check Availability</a>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <rect width="30" height="30" rx="4" fill="#E6F2EA" />
                                <path
                                    d="M8 24V7.87665C8 7.34168 8.19292 6.89535 8.57875 6.53768C8.96458 6.18 9.445 6.00077 10.02 6H20.9812C21.5562 6 22.0367 6.17923 22.4225 6.53768C22.8083 6.89613 23.0008 7.34245 23 7.87665V24L15.5 20.0074L8 24ZM9.25 22.2L15.5 18.7032L21.75 22.2V7.87665C21.75 7.69781 21.67 7.53368 21.51 7.38426C21.35 7.23484 21.1733 7.16052 20.98 7.16129H10.02C9.8275 7.16129 9.65083 7.23561 9.49 7.38426C9.32917 7.5329 9.24917 7.69703 9.25 7.87665V22.2Z"
                                    fill="#5AAB72" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="explore-tax-single-card">
                <div style="background-image: url('{{ asset('front_end/assets/images/explore-img.jpg') }}')"
                    class="explore-card-img-are"></div>
                <div class="explore-rating-area">
                    <p class="explore-ratings-star-count">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="68" height="12"
                                viewBox="0 0 68 12" fill="none">
                                <path
                                    d="M6 3.11392e-08L7.34708 4.1459L11.7063 4.1459L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459L4.65292 4.1459L6 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M20 3.11392e-08L21.3471 4.1459L25.7063 4.1459L22.1796 6.7082L23.5267 10.8541L20 8.2918L16.4733 10.8541L17.8204 6.7082L14.2937 4.1459L18.6529 4.1459L20 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M34 3.11392e-08L35.3471 4.1459L39.7063 4.1459L36.1796 6.7082L37.5267 10.8541L34 8.2918L30.4733 10.8541L31.8204 6.7082L28.2937 4.1459L32.6529 4.1459L34 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M48 3.11392e-08L49.3471 4.1459L53.7063 4.1459L50.1796 6.7082L51.5267 10.8541L48 8.2918L44.4733 10.8541L45.8204 6.7082L42.2937 4.1459L46.6529 4.1459L48 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M62 3.11392e-08L63.3471 4.1459L67.7063 4.1459L64.1796 6.7082L65.5267 10.8541L62 8.2918L58.4733 10.8541L59.8204 6.7082L56.2937 4.1459L60.6529 4.1459L62 3.11392e-08Z"
                                    fill="#BABABA" />
                            </svg>
                        </span>
                        <span class="explore-rating-count">
                            4.5 <span>(210)</span>
                        </span>
                    </p>
                    <p>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 16 16" fill="none">
                                <g clip-path="url(#clip0_8932_2280)">
                                    <path
                                        d="M5.34001 8.33148C4.91693 7.87579 5.54784 7.24551 6.00305 7.66844L7.21864 8.88403L9.98132 6.12134C10.1644 5.93825 10.4613 5.93825 10.6444 6.12134C10.8275 6.30444 10.8275 6.60129 10.6444 6.78438L7.55015 9.87857C7.36705 10.0617 7.07021 10.0617 6.88711 9.87857L5.34001 8.33148ZM5.82724 3.24211C6.08616 3.24211 6.29608 3.03219 6.29608 2.77326C6.27311 2.15201 5.38127 2.1522 5.35839 2.77326C5.35839 3.03219 5.56831 3.24211 5.82724 3.24211ZM3.99184 4.46842C4.25076 4.46842 4.46068 4.2585 4.46068 3.99957C4.43771 3.37832 3.54587 3.37851 3.52299 3.99957C3.52299 4.2585 3.73291 4.46842 3.99184 4.46842ZM15.9938 7.99994C16.006 15.0878 7.33692 18.6785 2.33416 13.6579C-0.769589 10.6795 -0.77012 5.32034 2.33429 2.34196C7.33745 -2.67852 16.0065 0.912389 15.9938 7.99994ZM15.0561 7.99994C15.0561 4.10488 11.8873 0.936019 7.9922 0.936019C-1.36618 1.29115 -1.36362 14.7102 7.9923 15.0639C11.8873 15.0639 15.0561 11.895 15.0561 7.99994ZM7.9922 1.87371C7.37017 1.89668 7.37258 2.7897 7.9922 2.8114C10.8532 2.8114 13.1807 5.13896 13.1807 7.99994C12.9199 14.8737 3.06356 14.8721 2.80366 7.99988C2.80366 7.74101 2.59374 7.5311 2.33482 7.5311C2.07589 7.5311 1.86597 7.74101 1.86597 7.99994C1.86597 11.378 4.61418 14.1262 7.9922 14.1262C16.1082 13.8182 16.1063 2.18055 7.9922 1.87371ZM2.76547 6.30379C3.02439 6.30379 3.23431 6.09387 3.23431 5.83494C3.21134 5.21369 2.3195 5.21388 2.29662 5.83494C2.29662 6.09387 2.50654 6.30379 2.76547 6.30379Z"
                                        fill="url(#paint0_linear_8932_2280)" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_8932_2280" x1="0.00616455" y1="0"
                                        x2="16.0061" y2="15.9877" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#09BD3F" />
                                        <stop offset="1" stop-color="#09812D" />
                                    </linearGradient>
                                    <clipPath id="clip0_8932_2280">
                                        <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        10 WIP
                    </p>
                </div>
                <div class="explore-card-heading-para">
                    <h4>John Doe, CPA</h4>
                    <p class="explore-card-location">
                        <img src="{{ asset('front_end/assets/images/location-icon.svg') }}../automated-busi/assets/images/location-icon.svg"
                            alt="" srcset="" />
                        New York, NY
                    </p>
                    <p class="explore-card-main-para">
                        Personal Tax Filing and Consulting
                    </p>
                    <div class="check-availability-bookmarks">
                        <a href="tax-profile.html">Check Availability</a>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <rect width="30" height="30" rx="4" fill="#E6F2EA" />
                                <path
                                    d="M8 24V7.87665C8 7.34168 8.19292 6.89535 8.57875 6.53768C8.96458 6.18 9.445 6.00077 10.02 6H20.9812C21.5562 6 22.0367 6.17923 22.4225 6.53768C22.8083 6.89613 23.0008 7.34245 23 7.87665V24L15.5 20.0074L8 24ZM9.25 22.2L15.5 18.7032L21.75 22.2V7.87665C21.75 7.69781 21.67 7.53368 21.51 7.38426C21.35 7.23484 21.1733 7.16052 20.98 7.16129H10.02C9.8275 7.16129 9.65083 7.23561 9.49 7.38426C9.32917 7.5329 9.24917 7.69703 9.25 7.87665V22.2Z"
                                    fill="#5AAB72" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="explore-tax-single-card">
                <div style="background-image: url('{{ asset('front_end/assets/images/explore-img.jpg') }}')"
                    class="explore-card-img-are"></div>
                <div class="explore-rating-area">
                    <p class="explore-ratings-star-count">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="68" height="12"
                                viewBox="0 0 68 12" fill="none">
                                <path
                                    d="M6 3.11392e-08L7.34708 4.1459L11.7063 4.1459L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459L4.65292 4.1459L6 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M20 3.11392e-08L21.3471 4.1459L25.7063 4.1459L22.1796 6.7082L23.5267 10.8541L20 8.2918L16.4733 10.8541L17.8204 6.7082L14.2937 4.1459L18.6529 4.1459L20 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M34 3.11392e-08L35.3471 4.1459L39.7063 4.1459L36.1796 6.7082L37.5267 10.8541L34 8.2918L30.4733 10.8541L31.8204 6.7082L28.2937 4.1459L32.6529 4.1459L34 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M48 3.11392e-08L49.3471 4.1459L53.7063 4.1459L50.1796 6.7082L51.5267 10.8541L48 8.2918L44.4733 10.8541L45.8204 6.7082L42.2937 4.1459L46.6529 4.1459L48 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M62 3.11392e-08L63.3471 4.1459L67.7063 4.1459L64.1796 6.7082L65.5267 10.8541L62 8.2918L58.4733 10.8541L59.8204 6.7082L56.2937 4.1459L60.6529 4.1459L62 3.11392e-08Z"
                                    fill="#BABABA" />
                            </svg>
                        </span>
                        <span class="explore-rating-count">
                            4.5 <span>(210)</span>
                        </span>
                    </p>
                    <p>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 16 16" fill="none">
                                <g clip-path="url(#clip0_8932_2280)">
                                    <path
                                        d="M5.34001 8.33148C4.91693 7.87579 5.54784 7.24551 6.00305 7.66844L7.21864 8.88403L9.98132 6.12134C10.1644 5.93825 10.4613 5.93825 10.6444 6.12134C10.8275 6.30444 10.8275 6.60129 10.6444 6.78438L7.55015 9.87857C7.36705 10.0617 7.07021 10.0617 6.88711 9.87857L5.34001 8.33148ZM5.82724 3.24211C6.08616 3.24211 6.29608 3.03219 6.29608 2.77326C6.27311 2.15201 5.38127 2.1522 5.35839 2.77326C5.35839 3.03219 5.56831 3.24211 5.82724 3.24211ZM3.99184 4.46842C4.25076 4.46842 4.46068 4.2585 4.46068 3.99957C4.43771 3.37832 3.54587 3.37851 3.52299 3.99957C3.52299 4.2585 3.73291 4.46842 3.99184 4.46842ZM15.9938 7.99994C16.006 15.0878 7.33692 18.6785 2.33416 13.6579C-0.769589 10.6795 -0.77012 5.32034 2.33429 2.34196C7.33745 -2.67852 16.0065 0.912389 15.9938 7.99994ZM15.0561 7.99994C15.0561 4.10488 11.8873 0.936019 7.9922 0.936019C-1.36618 1.29115 -1.36362 14.7102 7.9923 15.0639C11.8873 15.0639 15.0561 11.895 15.0561 7.99994ZM7.9922 1.87371C7.37017 1.89668 7.37258 2.7897 7.9922 2.8114C10.8532 2.8114 13.1807 5.13896 13.1807 7.99994C12.9199 14.8737 3.06356 14.8721 2.80366 7.99988C2.80366 7.74101 2.59374 7.5311 2.33482 7.5311C2.07589 7.5311 1.86597 7.74101 1.86597 7.99994C1.86597 11.378 4.61418 14.1262 7.9922 14.1262C16.1082 13.8182 16.1063 2.18055 7.9922 1.87371ZM2.76547 6.30379C3.02439 6.30379 3.23431 6.09387 3.23431 5.83494C3.21134 5.21369 2.3195 5.21388 2.29662 5.83494C2.29662 6.09387 2.50654 6.30379 2.76547 6.30379Z"
                                        fill="url(#paint0_linear_8932_2280)" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_8932_2280" x1="0.00616455" y1="0"
                                        x2="16.0061" y2="15.9877" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#09BD3F" />
                                        <stop offset="1" stop-color="#09812D" />
                                    </linearGradient>
                                    <clipPath id="clip0_8932_2280">
                                        <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        10 WIP
                    </p>
                </div>
                <div class="explore-card-heading-para">
                    <h4>John Doe, CPA</h4>
                    <p class="explore-card-location">
                        <img src="{{ asset('front_end/assets/images/location-icon.svg') }}../automated-busi/assets/images/location-icon.svg"
                            alt="" srcset="" />
                        New York, NY
                    </p>
                    <p class="explore-card-main-para">
                        Personal Tax Filing and Consulting
                    </p>
                    <div class="check-availability-bookmarks">
                        <a href="tax-profile.html">Check Availability</a>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <rect width="30" height="30" rx="4" fill="#E6F2EA" />
                                <path
                                    d="M8 24V7.87665C8 7.34168 8.19292 6.89535 8.57875 6.53768C8.96458 6.18 9.445 6.00077 10.02 6H20.9812C21.5562 6 22.0367 6.17923 22.4225 6.53768C22.8083 6.89613 23.0008 7.34245 23 7.87665V24L15.5 20.0074L8 24ZM9.25 22.2L15.5 18.7032L21.75 22.2V7.87665C21.75 7.69781 21.67 7.53368 21.51 7.38426C21.35 7.23484 21.1733 7.16052 20.98 7.16129H10.02C9.8275 7.16129 9.65083 7.23561 9.49 7.38426C9.32917 7.5329 9.24917 7.69703 9.25 7.87665V22.2Z"
                                    fill="#5AAB72" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="explore-tax-single-card">
                <div style="background-image: url('{{ asset('front_end/assets/images/explore-img.jpg') }}')"
                    class="explore-card-img-are"></div>
                <div class="explore-rating-area">
                    <p class="explore-ratings-star-count">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="68" height="12"
                                viewBox="0 0 68 12" fill="none">
                                <path
                                    d="M6 3.11392e-08L7.34708 4.1459L11.7063 4.1459L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459L4.65292 4.1459L6 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M20 3.11392e-08L21.3471 4.1459L25.7063 4.1459L22.1796 6.7082L23.5267 10.8541L20 8.2918L16.4733 10.8541L17.8204 6.7082L14.2937 4.1459L18.6529 4.1459L20 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M34 3.11392e-08L35.3471 4.1459L39.7063 4.1459L36.1796 6.7082L37.5267 10.8541L34 8.2918L30.4733 10.8541L31.8204 6.7082L28.2937 4.1459L32.6529 4.1459L34 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M48 3.11392e-08L49.3471 4.1459L53.7063 4.1459L50.1796 6.7082L51.5267 10.8541L48 8.2918L44.4733 10.8541L45.8204 6.7082L42.2937 4.1459L46.6529 4.1459L48 3.11392e-08Z"
                                    fill="#FBB040" />
                                <path
                                    d="M62 3.11392e-08L63.3471 4.1459L67.7063 4.1459L64.1796 6.7082L65.5267 10.8541L62 8.2918L58.4733 10.8541L59.8204 6.7082L56.2937 4.1459L60.6529 4.1459L62 3.11392e-08Z"
                                    fill="#BABABA" />
                            </svg>
                        </span>
                        <span class="explore-rating-count">
                            4.5 <span>(210)</span>
                        </span>
                    </p>
                    <p>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 16 16" fill="none">
                                <g clip-path="url(#clip0_8932_2280)">
                                    <path
                                        d="M5.34001 8.33148C4.91693 7.87579 5.54784 7.24551 6.00305 7.66844L7.21864 8.88403L9.98132 6.12134C10.1644 5.93825 10.4613 5.93825 10.6444 6.12134C10.8275 6.30444 10.8275 6.60129 10.6444 6.78438L7.55015 9.87857C7.36705 10.0617 7.07021 10.0617 6.88711 9.87857L5.34001 8.33148ZM5.82724 3.24211C6.08616 3.24211 6.29608 3.03219 6.29608 2.77326C6.27311 2.15201 5.38127 2.1522 5.35839 2.77326C5.35839 3.03219 5.56831 3.24211 5.82724 3.24211ZM3.99184 4.46842C4.25076 4.46842 4.46068 4.2585 4.46068 3.99957C4.43771 3.37832 3.54587 3.37851 3.52299 3.99957C3.52299 4.2585 3.73291 4.46842 3.99184 4.46842ZM15.9938 7.99994C16.006 15.0878 7.33692 18.6785 2.33416 13.6579C-0.769589 10.6795 -0.77012 5.32034 2.33429 2.34196C7.33745 -2.67852 16.0065 0.912389 15.9938 7.99994ZM15.0561 7.99994C15.0561 4.10488 11.8873 0.936019 7.9922 0.936019C-1.36618 1.29115 -1.36362 14.7102 7.9923 15.0639C11.8873 15.0639 15.0561 11.895 15.0561 7.99994ZM7.9922 1.87371C7.37017 1.89668 7.37258 2.7897 7.9922 2.8114C10.8532 2.8114 13.1807 5.13896 13.1807 7.99994C12.9199 14.8737 3.06356 14.8721 2.80366 7.99988C2.80366 7.74101 2.59374 7.5311 2.33482 7.5311C2.07589 7.5311 1.86597 7.74101 1.86597 7.99994C1.86597 11.378 4.61418 14.1262 7.9922 14.1262C16.1082 13.8182 16.1063 2.18055 7.9922 1.87371ZM2.76547 6.30379C3.02439 6.30379 3.23431 6.09387 3.23431 5.83494C3.21134 5.21369 2.3195 5.21388 2.29662 5.83494C2.29662 6.09387 2.50654 6.30379 2.76547 6.30379Z"
                                        fill="url(#paint0_linear_8932_2280)" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_8932_2280" x1="0.00616455" y1="0"
                                        x2="16.0061" y2="15.9877" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#09BD3F" />
                                        <stop offset="1" stop-color="#09812D" />
                                    </linearGradient>
                                    <clipPath id="clip0_8932_2280">
                                        <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        10 WIP
                    </p>
                </div>
                <div class="explore-card-heading-para">
                    <h4>John Doe, CPA</h4>
                    <p class="explore-card-location">
                        <img src="{{ asset('front_end/assets/images/location-icon.svg') }}../automated-busi/assets/images/location-icon.svg"
                            alt="" srcset="" />
                        New York, NY
                    </p>
                    <p class="explore-card-main-para">
                        Personal Tax Filing and Consulting
                    </p>
                    <div class="check-availability-bookmarks">
                        <a href="tax-profile.html">Check Availability</a>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <rect width="30" height="30" rx="4" fill="#E6F2EA" />
                                <path
                                    d="M8 24V7.87665C8 7.34168 8.19292 6.89535 8.57875 6.53768C8.96458 6.18 9.445 6.00077 10.02 6H20.9812C21.5562 6 22.0367 6.17923 22.4225 6.53768C22.8083 6.89613 23.0008 7.34245 23 7.87665V24L15.5 20.0074L8 24ZM9.25 22.2L15.5 18.7032L21.75 22.2V7.87665C21.75 7.69781 21.67 7.53368 21.51 7.38426C21.35 7.23484 21.1733 7.16052 20.98 7.16129H10.02C9.8275 7.16129 9.65083 7.23561 9.49 7.38426C9.32917 7.5329 9.24917 7.69703 9.25 7.87665V22.2Z"
                                    fill="#5AAB72" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- upcoming appointment section End -->
</div>
@endsection
