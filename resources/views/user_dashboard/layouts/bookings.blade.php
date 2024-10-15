@extends('user_dashboard.app')

@section('user_dashboard_content')
<div class="main-content tm-dashboard-home">
    <!-- mobile searchbar start -->
    <!-- search bar start -->
    <div class="mobile-search-bar">
        <div class="left">
            <input id="searchBarMobile" class="search-input" placeholder="Search..." value=""
                type="text" />
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
    <h1 class="tm-dashboard-heading">Upcoming Appointments</h1>
    <!-- booked calendars start -->
    <div class="booked-calendars">
        <div class="calender-content-wrapper">
            <div class="calendar-output">
                <div style="margin-top: -20px; margin-bottom: 10px" id="calendar-title"></div>
                {{-- <p id="calendar-container"></p> --}}
            </div>
        </div>
    </div>
    <!-- booked calendars end -->
    <!-- upcoming appointment section start -->
    <div class="upcoming-apointment-section">
        <h1 class="tm-dashboard-heading">Upcoming Appointments</h1>
        <div class="categories-tax-card-wrapper">
            <div class="explore-tax-single-card">
                <div class="upcoming-apointments-user">
                    <div class="upcoming-apointments-user-img-name">
                        <div class="upcoming-apointments-user-img">
                            <img src="{{asset('user_dashboard/assets/images/user.png')}} " alt="user" srcset="" />
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
                        <img src="{{asset('user_dashboard/assets/images/location-icon.svg')}} " alt=""
                            srcset="" />
                        New York, NY
                    </p>
                    <p class="explore-card-main-para">
                        Personal Tax Filing and Consulting
                    </p>
                    <div class="check-availability-bookmarks">
                        <a href="{{route('client.profile_booking')}}">View</a>
                    </div>
                </div>
            </div>
            <div class="explore-tax-single-card">
                <div class="upcoming-apointments-user">
                    <div class="upcoming-apointments-user-img-name">
                        <div class="upcoming-apointments-user-img">
                            <img src="{{asset('user_dashboard/assets/images/user.png')}} " alt="user" srcset="" />
                        </div>
                        <div class="upcoming-apointments-user-name-city">
                            <h5>John Doe, CPA</h5>
                            <p>New York, NY</p>
                        </div>
                    </div>
                    <a href="{{route('client.profile_booking')}}" class="upcoming-apointments-user-link">View Profile</a>
                </div>
                <div class="upcoming-apointment-devider"></div>
                <div class="explore-card-heading-para">
                    <h4>Mon, Aug 17</h4>
                    <p class="explore-card-location">
                        <img src="{{asset('user_dashboard/assets/images/location-icon.svg')}} " alt=""
                            srcset="" />
                        New York, NY
                    </p>
                    <p class="explore-card-main-para">
                        Personal Tax Filing and Consulting
                    </p>
                    <div class="check-availability-bookmarks">
                        <a href="{{route('client.profile_booking')}}">View</a>
                    </div>
                </div>
            </div>
            <div class="explore-tax-single-card">
                <div class="upcoming-apointments-user">
                    <div class="upcoming-apointments-user-img-name">
                        <div class="upcoming-apointments-user-img">
                            <img src="{{asset('user_dashboard/assets/images/user.png')}} " alt="user" srcset="" />
                        </div>
                        <div class="upcoming-apointments-user-name-city">
                            <h5>John Doe, CPA</h5>
                            <p>New York, NY</p>
                        </div>
                    </div>
                    <a href="{{route('client.profile_booking')}}" class="upcoming-apointments-user-link">View Profile</a>
                </div>
                <div class="upcoming-apointment-devider"></div>
                <div class="explore-card-heading-para">
                    <h4>Mon, Aug 17</h4>
                    <p class="explore-card-location">
                        <img src="{{asset('user_dashboard/assets/images/location-icon.svg')}} " alt=""
                            srcset="" />
                        New York, NY
                    </p>
                    <p class="explore-card-main-para">
                        Personal Tax Filing and Consulting
                    </p>
                    <div class="check-availability-bookmarks">
                        <a href="{{route('client.profile_booking')}}">View</a>
                    </div>
                </div>
            </div>

            <div class="explore-tax-single-card">
                <div class="upcoming-apointments-user">
                    <div class="upcoming-apointments-user-img-name">
                        <div class="upcoming-apointments-user-img">
                            <img src="{{asset('user_dashboard/assets/images/user.png')}} " alt="user" srcset="" />
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
                        <img src="{{asset('user_dashboard/assets/images/location-icon.svg')}} " alt=""
                            srcset="" />
                        New York, NY
                    </p>
                    <p class="explore-card-main-para">
                        Personal Tax Filing and Consulting
                    </p>
                    <div class="check-availability-bookmarks">
                        <a href="{{route('client.profile_booking')}}">View</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- upcoming appointment section End -->

    <!-- Past Appointment section start -->
    <div class="upcoming-apointment-section">
        <h1 class="tm-dashboard-heading">Past Appointment</h1>
        <div class="categories-tax-card-wrapper">
            <div class="explore-tax-single-card">
                <div class="upcoming-apointments-user">
                    <div class="upcoming-apointments-user-img-name">
                        <div class="upcoming-apointments-user-img">
                            <img src="{{asset('user_dashboard/assets/images/user.png')}} " alt="user" srcset="" />
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
                        <img src="{{asset('user_dashboard/assets/images/location-icon.svg')}} " alt=""
                            srcset="" />
                        New York, NY
                    </p>
                    <p class="explore-card-main-para">
                        Personal Tax Filing and Consulting
                    </p>
                    <div class="check-availability-bookmarks">
                        <a href="{{route('client.profile_booking')}}">View</a>
                    </div>
                </div>
            </div>
            <div class="explore-tax-single-card">
                <div class="upcoming-apointments-user">
                    <div class="upcoming-apointments-user-img-name">
                        <div class="upcoming-apointments-user-img">
                            <img src="{{asset('user_dashboard/assets/images/user.png')}} " alt="user" srcset="" />
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
                        <img src="{{asset('user_dashboard/assets/images/location-icon.svg')}} " alt=""
                            srcset="" />
                        New York, NY
                    </p>
                    <p class="explore-card-main-para">
                        Personal Tax Filing and Consulting
                    </p>
                    <div class="check-availability-bookmarks">
                        <a href="{{route('client.profile_booking')}}">View</a>
                    </div>
                </div>
            </div>
            <div class="explore-tax-single-card">
                <div class="upcoming-apointments-user">
                    <div class="upcoming-apointments-user-img-name">
                        <div class="upcoming-apointments-user-img">
                            <img src="{{asset('user_dashboard/assets/images/user.png')}} " alt="user" srcset="" />
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
                        <img src="{{asset('user_dashboard/assets/images/location-icon.svg')}} " alt=""
                            srcset="" />
                        New York, NY
                    </p>
                    <p class="explore-card-main-para">
                        Personal Tax Filing and Consulting
                    </p>
                    <div class="check-availability-bookmarks">
                        <a href="{{route('client.profile_booking')}}">View</a>
                    </div>
                </div>
            </div>
            <div class="explore-tax-single-card">
                <div class="upcoming-apointments-user">
                    <div class="upcoming-apointments-user-img-name">
                        <div class="upcoming-apointments-user-img">
                            <img src="{{asset('user_dashboard/assets/images/user.png')}} " alt="user" srcset="" />
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
                        <img src="{{asset('user_dashboard/assets/images/location-icon.svg')}} " alt=""
                            srcset="" />
                        New York, NY
                    </p>
                    <p class="explore-card-main-para">
                        Personal Tax Filing and Consulting
                    </p>
                    <div class="check-availability-bookmarks">
                        <a href="{{route('client.profile_booking')}}">View</a>
                    </div>
                </div>
            </div>
            <div class="explore-tax-single-card">
                <div class="upcoming-apointments-user">
                    <div class="upcoming-apointments-user-img-name">
                        <div class="upcoming-apointments-user-img">
                            <img src="{{asset('user_dashboard/assets/images/user.png')}} " alt="user" srcset="" />
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
                        <img src="{{asset('user_dashboard/assets/images/location-icon.svg')}} " alt=""
                            srcset="" />
                        New York, NY
                    </p>
                    <p class="explore-card-main-para">
                        Personal Tax Filing and Consulting
                    </p>
                    <div class="check-availability-bookmarks">
                        <a href="{{route('client.profile_booking')}}">View</a>
                    </div>
                </div>
            </div>
            <div class="explore-tax-single-card">
                <div class="upcoming-apointments-user">
                    <div class="upcoming-apointments-user-img-name">
                        <div class="upcoming-apointments-user-img">
                            <img src="{{asset('user_dashboard/assets/images/user.png')}} " alt="user" srcset="" />
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
                        <img src="{{asset('user_dashboard/assets/images/location-icon.svg')}} " alt=""
                            srcset="" />
                        New York, NY
                    </p>
                    <p class="explore-card-main-para">
                        Personal Tax Filing and Consulting
                    </p>
                    <div class="check-availability-bookmarks">
                        <a href="{{route('client.profile_booking')}}">View</a>
                    </div>
                </div>
            </div>
            <div class="explore-tax-single-card">
                <div class="upcoming-apointments-user">
                    <div class="upcoming-apointments-user-img-name">
                        <div class="upcoming-apointments-user-img">
                            <img src="{{asset('user_dashboard/assets/images/user.png')}} " alt="user" srcset="" />
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
                        <img src="{{asset('user_dashboard/assets/images/location-icon.svg')}} " alt=""
                            srcset="" />
                        New York, NY
                    </p>
                    <p class="explore-card-main-para">
                        Personal Tax Filing and Consulting
                    </p>
                    <div class="check-availability-bookmarks">
                        <a href="{{route('client.profile_booking')}}">View</a>
                    </div>
                </div>
            </div>
            <div class="explore-tax-single-card">
                <div class="upcoming-apointments-user">
                    <div class="upcoming-apointments-user-img-name">
                        <div class="upcoming-apointments-user-img">
                            <img src="{{asset('user_dashboard/assets/images/user.png')}} " alt="user" srcset="" />
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
                        <img src="{{asset('user_dashboard/assets/images/location-icon.svg')}} " alt=""
                            srcset="" />
                        New York, NY
                    </p>
                    <p class="explore-card-main-para">
                        Personal Tax Filing and Consulting
                    </p>
                    <div class="check-availability-bookmarks">
                        <a href="{{route('client.profile_booking')}}">View</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Past Appointment section End -->
</div>
@endsection
