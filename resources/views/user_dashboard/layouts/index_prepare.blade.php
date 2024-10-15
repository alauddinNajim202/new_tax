@extends('user_dashboard.app')

@section('user_dashboard_content')
    






    <div class="main-content">

        <!-- search bar start -->
        <div class="mobile-search-bar mb-3">
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
        <div class="dashboard-title">Overview</div>
        <div class="dashboard-summary">
            <div class="item">
                <div class="item-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22"
                        fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 20.75C0 20.3358 0.335786 20 0.75 20H18.75C19.1642 20 19.5 20.3358 19.5 20.75C19.5 21.1642 19.1642 21.5 18.75 21.5H0.75C0.335786 21.5 0 21.1642 0 20.75Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 8.13086C0 7.16665 0.785786 6.38086 1.75 6.38086H3.34998C4.31419 6.38086 5.09998 7.16665 5.09998 8.13086V16.7509C5.09998 17.7151 4.31419 18.5009 3.34998 18.5009H1.75C0.785786 18.5009 0 17.7151 0 16.7509V8.13086ZM1.75 7.88086C1.61421 7.88086 1.5 7.99507 1.5 8.13086V16.7509C1.5 16.8866 1.61421 17.0009 1.75 17.0009H3.34998C3.48576 17.0009 3.59998 16.8866 3.59998 16.7509V8.13086C3.59998 7.99507 3.48576 7.88086 3.34998 7.88086H1.75Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7.19922 4.93945C7.19922 3.97524 7.98501 3.18945 8.94922 3.18945H10.5492C11.5134 3.18945 12.2992 3.97524 12.2992 4.93945V16.7495C12.2992 17.7137 11.5134 18.4995 10.5492 18.4995H8.94922C7.98501 18.4995 7.19922 17.7137 7.19922 16.7495V4.93945ZM8.94922 4.68945C8.81343 4.68945 8.69922 4.80367 8.69922 4.93945V16.7495C8.69922 16.8852 8.81343 16.9995 8.94922 16.9995H10.5492C10.685 16.9995 10.7992 16.8852 10.7992 16.7495V4.93945C10.7992 4.80367 10.685 4.68945 10.5492 4.68945H8.94922Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M14.3984 1.75C14.3984 0.785786 15.1842 0 16.1484 0H17.7484C18.7126 0 19.4984 0.785786 19.4984 1.75V16.75C19.4984 17.7142 18.7126 18.5 17.7484 18.5H16.1484C15.1842 18.5 14.3984 17.7142 14.3984 16.75V1.75ZM16.1484 1.5C16.0127 1.5 15.8984 1.61421 15.8984 1.75V16.75C15.8984 16.8858 16.0127 17 16.1484 17H17.7484C17.8842 17 17.9984 16.8858 17.9984 16.75V1.75C17.9984 1.61421 17.8842 1.5 17.7484 1.5H16.1484Z"
                            fill="white" />
                    </svg>
                </div>
                <div class="title">Profile Visibility</div>
                <div class="count">150 times</div>
                <div class="text">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                            viewBox="0 0 14 14" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.0611 3.49414C5.0611 3.25252 5.25698 3.05664 5.4986 3.05664L10.5061 3.05664C10.6221 3.05664 10.7334 3.10273 10.8155 3.18478C10.8975 3.26683 10.9436 3.37811 10.9436 3.49414L10.9436 8.50164C10.9436 8.74326 10.7477 8.93914 10.5061 8.93914C10.2645 8.93914 10.0686 8.74326 10.0686 8.50164L10.0686 3.93164L5.4986 3.93164C5.25698 3.93164 5.0611 3.73577 5.0611 3.49414Z"
                                fill="#1A932E" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M3.18436 10.8157C3.0135 10.6449 3.0135 10.3678 3.18436 10.197L10.1264 3.25497C10.2972 3.08411 10.5742 3.08411 10.7451 3.25497C10.916 3.42582 10.916 3.70283 10.7451 3.87369L3.80308 10.8157C3.63222 10.9866 3.35521 10.9866 3.18436 10.8157Z"
                                fill="#1A932E" />
                        </svg>
                    </div>
                    <span>
                        Your profile has been viewed 150 times this month.
                    </span>
                </div>
            </div>
            <div class="item">
                <div class="item-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22"
                        fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 20.75C0 20.3358 0.335786 20 0.75 20H18.75C19.1642 20 19.5 20.3358 19.5 20.75C19.5 21.1642 19.1642 21.5 18.75 21.5H0.75C0.335786 21.5 0 21.1642 0 20.75Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 8.13086C0 7.16665 0.785786 6.38086 1.75 6.38086H3.34998C4.31419 6.38086 5.09998 7.16665 5.09998 8.13086V16.7509C5.09998 17.7151 4.31419 18.5009 3.34998 18.5009H1.75C0.785786 18.5009 0 17.7151 0 16.7509V8.13086ZM1.75 7.88086C1.61421 7.88086 1.5 7.99507 1.5 8.13086V16.7509C1.5 16.8866 1.61421 17.0009 1.75 17.0009H3.34998C3.48576 17.0009 3.59998 16.8866 3.59998 16.7509V8.13086C3.59998 7.99507 3.48576 7.88086 3.34998 7.88086H1.75Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7.19922 4.93945C7.19922 3.97524 7.98501 3.18945 8.94922 3.18945H10.5492C11.5134 3.18945 12.2992 3.97524 12.2992 4.93945V16.7495C12.2992 17.7137 11.5134 18.4995 10.5492 18.4995H8.94922C7.98501 18.4995 7.19922 17.7137 7.19922 16.7495V4.93945ZM8.94922 4.68945C8.81343 4.68945 8.69922 4.80367 8.69922 4.93945V16.7495C8.69922 16.8852 8.81343 16.9995 8.94922 16.9995H10.5492C10.685 16.9995 10.7992 16.8852 10.7992 16.7495V4.93945C10.7992 4.80367 10.685 4.68945 10.5492 4.68945H8.94922Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M14.3984 1.75C14.3984 0.785786 15.1842 0 16.1484 0H17.7484C18.7126 0 19.4984 0.785786 19.4984 1.75V16.75C19.4984 17.7142 18.7126 18.5 17.7484 18.5H16.1484C15.1842 18.5 14.3984 17.7142 14.3984 16.75V1.75ZM16.1484 1.5C16.0127 1.5 15.8984 1.61421 15.8984 1.75V16.75C15.8984 16.8858 16.0127 17 16.1484 17H17.7484C17.8842 17 17.9984 16.8858 17.9984 16.75V1.75C17.9984 1.61421 17.8842 1.5 17.7484 1.5H16.1484Z"
                            fill="white" />
                    </svg>
                </div>
                <div class="title">Client Engagement</div>
                <div class="count">12 clients</div>
                <div class="text">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                            viewBox="0 0 14 14" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.0611 3.49414C5.0611 3.25252 5.25698 3.05664 5.4986 3.05664L10.5061 3.05664C10.6221 3.05664 10.7334 3.10273 10.8155 3.18478C10.8975 3.26683 10.9436 3.37811 10.9436 3.49414L10.9436 8.50164C10.9436 8.74326 10.7477 8.93914 10.5061 8.93914C10.2645 8.93914 10.0686 8.74326 10.0686 8.50164L10.0686 3.93164L5.4986 3.93164C5.25698 3.93164 5.0611 3.73577 5.0611 3.49414Z"
                                fill="#1A932E" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M3.18436 10.8157C3.0135 10.6449 3.0135 10.3678 3.18436 10.197L10.1264 3.25497C10.2972 3.08411 10.5742 3.08411 10.7451 3.25497C10.916 3.42582 10.916 3.70283 10.7451 3.87369L3.80308 10.8157C3.63222 10.9866 3.35521 10.9866 3.18436 10.8157Z"
                                fill="#1A932E" />
                        </svg>
                    </div>
                    <span>
                        You’ve received 12 new client inquiries in the past 30 days.
                    </span>
                </div>
            </div>
            <div class="item">
                <div class="item-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22"
                        fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 20.75C0 20.3358 0.335786 20 0.75 20H18.75C19.1642 20 19.5 20.3358 19.5 20.75C19.5 21.1642 19.1642 21.5 18.75 21.5H0.75C0.335786 21.5 0 21.1642 0 20.75Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 8.13086C0 7.16665 0.785786 6.38086 1.75 6.38086H3.34998C4.31419 6.38086 5.09998 7.16665 5.09998 8.13086V16.7509C5.09998 17.7151 4.31419 18.5009 3.34998 18.5009H1.75C0.785786 18.5009 0 17.7151 0 16.7509V8.13086ZM1.75 7.88086C1.61421 7.88086 1.5 7.99507 1.5 8.13086V16.7509C1.5 16.8866 1.61421 17.0009 1.75 17.0009H3.34998C3.48576 17.0009 3.59998 16.8866 3.59998 16.7509V8.13086C3.59998 7.99507 3.48576 7.88086 3.34998 7.88086H1.75Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7.19922 4.93945C7.19922 3.97524 7.98501 3.18945 8.94922 3.18945H10.5492C11.5134 3.18945 12.2992 3.97524 12.2992 4.93945V16.7495C12.2992 17.7137 11.5134 18.4995 10.5492 18.4995H8.94922C7.98501 18.4995 7.19922 17.7137 7.19922 16.7495V4.93945ZM8.94922 4.68945C8.81343 4.68945 8.69922 4.80367 8.69922 4.93945V16.7495C8.69922 16.8852 8.81343 16.9995 8.94922 16.9995H10.5492C10.685 16.9995 10.7992 16.8852 10.7992 16.7495V4.93945C10.7992 4.80367 10.685 4.68945 10.5492 4.68945H8.94922Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M14.3984 1.75C14.3984 0.785786 15.1842 0 16.1484 0H17.7484C18.7126 0 19.4984 0.785786 19.4984 1.75V16.75C19.4984 17.7142 18.7126 18.5 17.7484 18.5H16.1484C15.1842 18.5 14.3984 17.7142 14.3984 16.75V1.75ZM16.1484 1.5C16.0127 1.5 15.8984 1.61421 15.8984 1.75V16.75C15.8984 16.8858 16.0127 17 16.1484 17H17.7484C17.8842 17 17.9984 16.8858 17.9984 16.75V1.75C17.9984 1.61421 17.8842 1.5 17.7484 1.5H16.1484Z"
                            fill="white" />
                    </svg>
                </div>
                <div class="title">Profile Visibility</div>
                <div class="count">4.8 ★</div>
                <div class="text">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                            viewBox="0 0 14 14" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.0611 3.49414C5.0611 3.25252 5.25698 3.05664 5.4986 3.05664L10.5061 3.05664C10.6221 3.05664 10.7334 3.10273 10.8155 3.18478C10.8975 3.26683 10.9436 3.37811 10.9436 3.49414L10.9436 8.50164C10.9436 8.74326 10.7477 8.93914 10.5061 8.93914C10.2645 8.93914 10.0686 8.74326 10.0686 8.50164L10.0686 3.93164L5.4986 3.93164C5.25698 3.93164 5.0611 3.73577 5.0611 3.49414Z"
                                fill="#1A932E" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M3.18436 10.8157C3.0135 10.6449 3.0135 10.3678 3.18436 10.197L10.1264 3.25497C10.2972 3.08411 10.5742 3.08411 10.7451 3.25497C10.916 3.42582 10.916 3.70283 10.7451 3.87369L3.80308 10.8157C3.63222 10.9866 3.35521 10.9866 3.18436 10.8157Z"
                                fill="#1A932E" />
                        </svg>
                    </div>
                    <span>
                        Current Rating: 4.8 ★★★★☆ based on 30 reviews.
                    </span>
                </div>
            </div>
            <div class="item">
                <div class="item-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22"
                        fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 20.75C0 20.3358 0.335786 20 0.75 20H18.75C19.1642 20 19.5 20.3358 19.5 20.75C19.5 21.1642 19.1642 21.5 18.75 21.5H0.75C0.335786 21.5 0 21.1642 0 20.75Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 8.13086C0 7.16665 0.785786 6.38086 1.75 6.38086H3.34998C4.31419 6.38086 5.09998 7.16665 5.09998 8.13086V16.7509C5.09998 17.7151 4.31419 18.5009 3.34998 18.5009H1.75C0.785786 18.5009 0 17.7151 0 16.7509V8.13086ZM1.75 7.88086C1.61421 7.88086 1.5 7.99507 1.5 8.13086V16.7509C1.5 16.8866 1.61421 17.0009 1.75 17.0009H3.34998C3.48576 17.0009 3.59998 16.8866 3.59998 16.7509V8.13086C3.59998 7.99507 3.48576 7.88086 3.34998 7.88086H1.75Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7.19922 4.93945C7.19922 3.97524 7.98501 3.18945 8.94922 3.18945H10.5492C11.5134 3.18945 12.2992 3.97524 12.2992 4.93945V16.7495C12.2992 17.7137 11.5134 18.4995 10.5492 18.4995H8.94922C7.98501 18.4995 7.19922 17.7137 7.19922 16.7495V4.93945ZM8.94922 4.68945C8.81343 4.68945 8.69922 4.80367 8.69922 4.93945V16.7495C8.69922 16.8852 8.81343 16.9995 8.94922 16.9995H10.5492C10.685 16.9995 10.7992 16.8852 10.7992 16.7495V4.93945C10.7992 4.80367 10.685 4.68945 10.5492 4.68945H8.94922Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M14.3984 1.75C14.3984 0.785786 15.1842 0 16.1484 0H17.7484C18.7126 0 19.4984 0.785786 19.4984 1.75V16.75C19.4984 17.7142 18.7126 18.5 17.7484 18.5H16.1484C15.1842 18.5 14.3984 17.7142 14.3984 16.75V1.75ZM16.1484 1.5C16.0127 1.5 15.8984 1.61421 15.8984 1.75V16.75C15.8984 16.8858 16.0127 17 16.1484 17H17.7484C17.8842 17 17.9984 16.8858 17.9984 16.75V1.75C17.9984 1.61421 17.8842 1.5 17.7484 1.5H16.1484Z"
                            fill="white" />
                    </svg>
                </div>
                <div class="title">Ongoing Schedules</div>
                <div class="count">3 upcoming</div>
                <div class="text">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                            viewBox="0 0 14 14" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.0611 3.49414C5.0611 3.25252 5.25698 3.05664 5.4986 3.05664L10.5061 3.05664C10.6221 3.05664 10.7334 3.10273 10.8155 3.18478C10.8975 3.26683 10.9436 3.37811 10.9436 3.49414L10.9436 8.50164C10.9436 8.74326 10.7477 8.93914 10.5061 8.93914C10.2645 8.93914 10.0686 8.74326 10.0686 8.50164L10.0686 3.93164L5.4986 3.93164C5.25698 3.93164 5.0611 3.73577 5.0611 3.49414Z"
                                fill="#1A932E" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M3.18436 10.8157C3.0135 10.6449 3.0135 10.3678 3.18436 10.197L10.1264 3.25497C10.2972 3.08411 10.5742 3.08411 10.7451 3.25497C10.916 3.42582 10.916 3.70283 10.7451 3.87369L3.80308 10.8157C3.63222 10.9866 3.35521 10.9866 3.18436 10.8157Z"
                                fill="#1A932E" />
                        </svg>
                    </div>
                    <span>
                        You have 3 upcoming appointments this week.
                    </span>
                </div>
            </div>

        </div>

        <!-- appointments start -->
        <div class="dashboard-title mt-5">Upcoming Appointments</div>
        <div class="appointments-container mt-4">
            <div class="left">
                <div id="calendar-title"></div>
                {{-- <p id="calendar-container"></p> --}}
            </div>
            <div class="right">
                <div class="data-table table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Schedule summary</th>
                                <th scope="col">Client name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tax Filing Consultation</td>
                                <td>Jane Smith</td>
                                <td>April 5, 2024, 10:00 AM - 11:00 AM</td>
                                <td>
                                    <div class="status due">Due</div>
                                </td>

                            </tr>
                            <tr>
                                <td>Tax Filing Consultation</td>
                                <td>Jane Smith</td>
                                <td>April 5, 2024, 10:00 AM - 11:00 AM</td>
                                <td>
                                    <div class="status completed">Completed</div>
                                </td>

                            </tr>
                            <tr>
                                <td>Tax Filing Consultation</td>
                                <td>Jane Smith</td>
                                <td>April 5, 2024, 10:00 AM - 11:00 AM</td>
                                <td>
                                    <div class="status completed">Completed</div>
                                </td>

                            </tr>
                            <tr>
                                <td>Tax Filing Consultation</td>
                                <td>Jane Smith</td>
                                <td>April 5, 2024, 10:00 AM - 11:00 AM</td>
                                <td>
                                    <div class="status completed">Completed</div>
                                </td>

                            </tr>
                            <tr>
                                <td>Tax Filing Consultation</td>
                                <td>Jane Smith</td>
                                <td>April 5, 2024, 10:00 AM - 11:00 AM</td>
                                <td>
                                    <div class="status completed">Completed</div>
                                </td>

                            </tr>
                            <tr>
                                <td>Tax Filing Consultation</td>
                                <td>Jane Smith</td>
                                <td>April 5, 2024, 10:00 AM - 11:00 AM</td>
                                <td>
                                    <div class="status completed">Completed</div>
                                </td>

                            </tr>
                            <tr>
                                <td>Tax Filing Consultation</td>
                                <td>Jane Smith</td>
                                <td>April 5, 2024, 10:00 AM - 11:00 AM</td>
                                <td>
                                    <div class="status completed">Completed</div>
                                </td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- table -->
        <div class="data-table table-responsive mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Document Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Upload Date</th>
                        <th scope="col">Sent By / Sent To</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>W-2_2023.pdf</td>
                        <td>Uploaded by You</td>
                        <td>Jan 15, 2024</td>
                        <td>Sent to: <span class="active-text">John Doe, CPA</span></td>
                        <td>
                            <div class="action-container">
                                <a href="" class="action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                        viewBox="0 0 25 24" fill="none">
                                        <rect x="0.5" width="24" height="24" rx="2"
                                            fill="white" />
                                        <path
                                            d="M12.4987 14.9168C14.1095 14.9168 15.4154 13.611 15.4154 12.0002C15.4154 10.3893 14.1095 9.0835 12.4987 9.0835C10.8879 9.0835 9.58203 10.3893 9.58203 12.0002C9.58203 13.611 10.8879 14.9168 12.4987 14.9168Z"
                                            stroke="#6B6B6B" />
                                        <path
                                            d="M19.3231 11.1117C19.6464 11.505 19.8081 11.7008 19.8081 12C19.8081 12.2992 19.6464 12.495 19.3231 12.8883C18.1397 14.325 15.5297 17 12.4997 17C9.46974 17 6.85974 14.325 5.67641 12.8883C5.35307 12.495 5.19141 12.2992 5.19141 12C5.19141 11.7008 5.35307 11.505 5.67641 11.1117C6.85974 9.675 9.46974 7 12.4997 7C15.5297 7 18.1397 9.675 19.3231 11.1117Z"
                                            stroke="#6B6B6B" />
                                    </svg>
                                </a>
                                <a href="" class="action download-action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14"
                                        viewBox="0 0 13 14" fill="none">
                                        <path
                                            d="M6.5 10.25L2.4375 6.1875L3.575 5.00937L5.6875 7.12187V0.5H7.3125V7.12187L9.425 5.00937L10.5625 6.1875L6.5 10.25ZM1.625 13.5C1.17813 13.5 0.795708 13.341 0.47775 13.0231C0.159792 12.7051 0.000541667 12.3224 0 11.875V9.4375H1.625V11.875H11.375V9.4375H13V11.875C13 12.3219 12.841 12.7046 12.5231 13.0231C12.2051 13.3416 11.8224 13.5005 11.375 13.5H1.625Z"
                                            fill="#6B6B6B" />
                                    </svg>
                                </a>
                                <a href="" class="action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                        viewBox="0 0 25 24" fill="none">
                                        <rect x="0.5" width="24" height="24" rx="2"
                                            fill="white" />
                                        <path
                                            d="M9.0625 18C8.68438 18 8.36079 17.8696 8.09175 17.6087C7.82271 17.3478 7.68796 17.0338 7.6875 16.6667V8H7V6.66667H10.4375V6H14.5625V6.66667H18V8H17.3125V16.6667C17.3125 17.0333 17.178 17.3473 16.9089 17.6087C16.6399 17.87 16.3161 18.0004 15.9375 18H9.0625ZM15.9375 8H9.0625V16.6667H15.9375V8ZM10.4375 15.3333H11.8125V9.33333H10.4375V15.3333ZM13.1875 15.3333H14.5625V9.33333H13.1875V15.3333Z"
                                            fill="#6B6B6B" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>W-2_2023.pdf</td>
                        <td>Uploaded by You</td>
                        <td>Jan 15, 2024</td>
                        <td>Sent to: <span class="active-text">John Doe, CPA</span></td>
                        <td>
                            <div class="action-container">
                                <a href="" class="action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                        viewBox="0 0 25 24" fill="none">
                                        <rect x="0.5" width="24" height="24" rx="2"
                                            fill="white" />
                                        <path
                                            d="M12.4987 14.9168C14.1095 14.9168 15.4154 13.611 15.4154 12.0002C15.4154 10.3893 14.1095 9.0835 12.4987 9.0835C10.8879 9.0835 9.58203 10.3893 9.58203 12.0002C9.58203 13.611 10.8879 14.9168 12.4987 14.9168Z"
                                            stroke="#6B6B6B" />
                                        <path
                                            d="M19.3231 11.1117C19.6464 11.505 19.8081 11.7008 19.8081 12C19.8081 12.2992 19.6464 12.495 19.3231 12.8883C18.1397 14.325 15.5297 17 12.4997 17C9.46974 17 6.85974 14.325 5.67641 12.8883C5.35307 12.495 5.19141 12.2992 5.19141 12C5.19141 11.7008 5.35307 11.505 5.67641 11.1117C6.85974 9.675 9.46974 7 12.4997 7C15.5297 7 18.1397 9.675 19.3231 11.1117Z"
                                            stroke="#6B6B6B" />
                                    </svg>
                                </a>
                                <a href="" class="action download-action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14"
                                        viewBox="0 0 13 14" fill="none">
                                        <path
                                            d="M6.5 10.25L2.4375 6.1875L3.575 5.00937L5.6875 7.12187V0.5H7.3125V7.12187L9.425 5.00937L10.5625 6.1875L6.5 10.25ZM1.625 13.5C1.17813 13.5 0.795708 13.341 0.47775 13.0231C0.159792 12.7051 0.000541667 12.3224 0 11.875V9.4375H1.625V11.875H11.375V9.4375H13V11.875C13 12.3219 12.841 12.7046 12.5231 13.0231C12.2051 13.3416 11.8224 13.5005 11.375 13.5H1.625Z"
                                            fill="#6B6B6B" />
                                    </svg>
                                </a>
                                <a href="" class="action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                        viewBox="0 0 25 24" fill="none">
                                        <rect x="0.5" width="24" height="24" rx="2"
                                            fill="white" />
                                        <path
                                            d="M9.0625 18C8.68438 18 8.36079 17.8696 8.09175 17.6087C7.82271 17.3478 7.68796 17.0338 7.6875 16.6667V8H7V6.66667H10.4375V6H14.5625V6.66667H18V8H17.3125V16.6667C17.3125 17.0333 17.178 17.3473 16.9089 17.6087C16.6399 17.87 16.3161 18.0004 15.9375 18H9.0625ZM15.9375 8H9.0625V16.6667H15.9375V8ZM10.4375 15.3333H11.8125V9.33333H10.4375V15.3333ZM13.1875 15.3333H14.5625V9.33333H13.1875V15.3333Z"
                                            fill="#6B6B6B" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>W-2_2023.pdf</td>
                        <td>Uploaded by You</td>
                        <td>Jan 15, 2024</td>
                        <td>Sent to: <span class="active-text">John Doe, CPA</span></td>
                        <td>
                            <div class="action-container">
                                <a href="" class="action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                        viewBox="0 0 25 24" fill="none">
                                        <rect x="0.5" width="24" height="24" rx="2"
                                            fill="white" />
                                        <path
                                            d="M12.4987 14.9168C14.1095 14.9168 15.4154 13.611 15.4154 12.0002C15.4154 10.3893 14.1095 9.0835 12.4987 9.0835C10.8879 9.0835 9.58203 10.3893 9.58203 12.0002C9.58203 13.611 10.8879 14.9168 12.4987 14.9168Z"
                                            stroke="#6B6B6B" />
                                        <path
                                            d="M19.3231 11.1117C19.6464 11.505 19.8081 11.7008 19.8081 12C19.8081 12.2992 19.6464 12.495 19.3231 12.8883C18.1397 14.325 15.5297 17 12.4997 17C9.46974 17 6.85974 14.325 5.67641 12.8883C5.35307 12.495 5.19141 12.2992 5.19141 12C5.19141 11.7008 5.35307 11.505 5.67641 11.1117C6.85974 9.675 9.46974 7 12.4997 7C15.5297 7 18.1397 9.675 19.3231 11.1117Z"
                                            stroke="#6B6B6B" />
                                    </svg>
                                </a>
                                <a href="" class="action download-action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14"
                                        viewBox="0 0 13 14" fill="none">
                                        <path
                                            d="M6.5 10.25L2.4375 6.1875L3.575 5.00937L5.6875 7.12187V0.5H7.3125V7.12187L9.425 5.00937L10.5625 6.1875L6.5 10.25ZM1.625 13.5C1.17813 13.5 0.795708 13.341 0.47775 13.0231C0.159792 12.7051 0.000541667 12.3224 0 11.875V9.4375H1.625V11.875H11.375V9.4375H13V11.875C13 12.3219 12.841 12.7046 12.5231 13.0231C12.2051 13.3416 11.8224 13.5005 11.375 13.5H1.625Z"
                                            fill="#6B6B6B" />
                                    </svg>
                                </a>
                                <a href="" class="action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                        viewBox="0 0 25 24" fill="none">
                                        <rect x="0.5" width="24" height="24" rx="2"
                                            fill="white" />
                                        <path
                                            d="M9.0625 18C8.68438 18 8.36079 17.8696 8.09175 17.6087C7.82271 17.3478 7.68796 17.0338 7.6875 16.6667V8H7V6.66667H10.4375V6H14.5625V6.66667H18V8H17.3125V16.6667C17.3125 17.0333 17.178 17.3473 16.9089 17.6087C16.6399 17.87 16.3161 18.0004 15.9375 18H9.0625ZM15.9375 8H9.0625V16.6667H15.9375V8ZM10.4375 15.3333H11.8125V9.33333H10.4375V15.3333ZM13.1875 15.3333H14.5625V9.33333H13.1875V15.3333Z"
                                            fill="#6B6B6B" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>W-2_2023.pdf</td>
                        <td>Uploaded by You</td>
                        <td>Jan 15, 2024</td>
                        <td>Sent to: <span class="active-text">John Doe, CPA</span></td>
                        <td>
                            <div class="action-container">
                                <a href="" class="action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                        viewBox="0 0 25 24" fill="none">
                                        <rect x="0.5" width="24" height="24" rx="2"
                                            fill="white" />
                                        <path
                                            d="M12.4987 14.9168C14.1095 14.9168 15.4154 13.611 15.4154 12.0002C15.4154 10.3893 14.1095 9.0835 12.4987 9.0835C10.8879 9.0835 9.58203 10.3893 9.58203 12.0002C9.58203 13.611 10.8879 14.9168 12.4987 14.9168Z"
                                            stroke="#6B6B6B" />
                                        <path
                                            d="M19.3231 11.1117C19.6464 11.505 19.8081 11.7008 19.8081 12C19.8081 12.2992 19.6464 12.495 19.3231 12.8883C18.1397 14.325 15.5297 17 12.4997 17C9.46974 17 6.85974 14.325 5.67641 12.8883C5.35307 12.495 5.19141 12.2992 5.19141 12C5.19141 11.7008 5.35307 11.505 5.67641 11.1117C6.85974 9.675 9.46974 7 12.4997 7C15.5297 7 18.1397 9.675 19.3231 11.1117Z"
                                            stroke="#6B6B6B" />
                                    </svg>
                                </a>
                                <a href="" class="action download-action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14"
                                        viewBox="0 0 13 14" fill="none">
                                        <path
                                            d="M6.5 10.25L2.4375 6.1875L3.575 5.00937L5.6875 7.12187V0.5H7.3125V7.12187L9.425 5.00937L10.5625 6.1875L6.5 10.25ZM1.625 13.5C1.17813 13.5 0.795708 13.341 0.47775 13.0231C0.159792 12.7051 0.000541667 12.3224 0 11.875V9.4375H1.625V11.875H11.375V9.4375H13V11.875C13 12.3219 12.841 12.7046 12.5231 13.0231C12.2051 13.3416 11.8224 13.5005 11.375 13.5H1.625Z"
                                            fill="#6B6B6B" />
                                    </svg>
                                </a>
                                <a href="" class="action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                        viewBox="0 0 25 24" fill="none">
                                        <rect x="0.5" width="24" height="24" rx="2"
                                            fill="white" />
                                        <path
                                            d="M9.0625 18C8.68438 18 8.36079 17.8696 8.09175 17.6087C7.82271 17.3478 7.68796 17.0338 7.6875 16.6667V8H7V6.66667H10.4375V6H14.5625V6.66667H18V8H17.3125V16.6667C17.3125 17.0333 17.178 17.3473 16.9089 17.6087C16.6399 17.87 16.3161 18.0004 15.9375 18H9.0625ZM15.9375 8H9.0625V16.6667H15.9375V8ZM10.4375 15.3333H11.8125V9.33333H10.4375V15.3333ZM13.1875 15.3333H14.5625V9.33333H13.1875V15.3333Z"
                                            fill="#6B6B6B" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>W-2_2023.pdf</td>
                        <td>Uploaded by You</td>
                        <td>Jan 15, 2024</td>
                        <td>Sent to: <span class="active-text">John Doe, CPA</span></td>
                        <td>
                            <div class="action-container">
                                <a href="" class="action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                        viewBox="0 0 25 24" fill="none">
                                        <rect x="0.5" width="24" height="24" rx="2"
                                            fill="white" />
                                        <path
                                            d="M12.4987 14.9168C14.1095 14.9168 15.4154 13.611 15.4154 12.0002C15.4154 10.3893 14.1095 9.0835 12.4987 9.0835C10.8879 9.0835 9.58203 10.3893 9.58203 12.0002C9.58203 13.611 10.8879 14.9168 12.4987 14.9168Z"
                                            stroke="#6B6B6B" />
                                        <path
                                            d="M19.3231 11.1117C19.6464 11.505 19.8081 11.7008 19.8081 12C19.8081 12.2992 19.6464 12.495 19.3231 12.8883C18.1397 14.325 15.5297 17 12.4997 17C9.46974 17 6.85974 14.325 5.67641 12.8883C5.35307 12.495 5.19141 12.2992 5.19141 12C5.19141 11.7008 5.35307 11.505 5.67641 11.1117C6.85974 9.675 9.46974 7 12.4997 7C15.5297 7 18.1397 9.675 19.3231 11.1117Z"
                                            stroke="#6B6B6B" />
                                    </svg>
                                </a>
                                <a href="" class="action download-action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14"
                                        viewBox="0 0 13 14" fill="none">
                                        <path
                                            d="M6.5 10.25L2.4375 6.1875L3.575 5.00937L5.6875 7.12187V0.5H7.3125V7.12187L9.425 5.00937L10.5625 6.1875L6.5 10.25ZM1.625 13.5C1.17813 13.5 0.795708 13.341 0.47775 13.0231C0.159792 12.7051 0.000541667 12.3224 0 11.875V9.4375H1.625V11.875H11.375V9.4375H13V11.875C13 12.3219 12.841 12.7046 12.5231 13.0231C12.2051 13.3416 11.8224 13.5005 11.375 13.5H1.625Z"
                                            fill="#6B6B6B" />
                                    </svg>
                                </a>
                                <a href="" class="action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                        viewBox="0 0 25 24" fill="none">
                                        <rect x="0.5" width="24" height="24" rx="2"
                                            fill="white" />
                                        <path
                                            d="M9.0625 18C8.68438 18 8.36079 17.8696 8.09175 17.6087C7.82271 17.3478 7.68796 17.0338 7.6875 16.6667V8H7V6.66667H10.4375V6H14.5625V6.66667H18V8H17.3125V16.6667C17.3125 17.0333 17.178 17.3473 16.9089 17.6087C16.6399 17.87 16.3161 18.0004 15.9375 18H9.0625ZM15.9375 8H9.0625V16.6667H15.9375V8ZM10.4375 15.3333H11.8125V9.33333H10.4375V15.3333ZM13.1875 15.3333H14.5625V9.33333H13.1875V15.3333Z"
                                            fill="#6B6B6B" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>W-2_2023.pdf</td>
                        <td>Uploaded by You</td>
                        <td>Jan 15, 2024</td>
                        <td>Sent to: <span class="active-text">John Doe, CPA</span></td>
                        <td>
                            <div class="action-container">
                                <a href="" class="action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                        viewBox="0 0 25 24" fill="none">
                                        <rect x="0.5" width="24" height="24" rx="2"
                                            fill="white" />
                                        <path
                                            d="M12.4987 14.9168C14.1095 14.9168 15.4154 13.611 15.4154 12.0002C15.4154 10.3893 14.1095 9.0835 12.4987 9.0835C10.8879 9.0835 9.58203 10.3893 9.58203 12.0002C9.58203 13.611 10.8879 14.9168 12.4987 14.9168Z"
                                            stroke="#6B6B6B" />
                                        <path
                                            d="M19.3231 11.1117C19.6464 11.505 19.8081 11.7008 19.8081 12C19.8081 12.2992 19.6464 12.495 19.3231 12.8883C18.1397 14.325 15.5297 17 12.4997 17C9.46974 17 6.85974 14.325 5.67641 12.8883C5.35307 12.495 5.19141 12.2992 5.19141 12C5.19141 11.7008 5.35307 11.505 5.67641 11.1117C6.85974 9.675 9.46974 7 12.4997 7C15.5297 7 18.1397 9.675 19.3231 11.1117Z"
                                            stroke="#6B6B6B" />
                                    </svg>
                                </a>
                                <a href="" class="action download-action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14"
                                        viewBox="0 0 13 14" fill="none">
                                        <path
                                            d="M6.5 10.25L2.4375 6.1875L3.575 5.00937L5.6875 7.12187V0.5H7.3125V7.12187L9.425 5.00937L10.5625 6.1875L6.5 10.25ZM1.625 13.5C1.17813 13.5 0.795708 13.341 0.47775 13.0231C0.159792 12.7051 0.000541667 12.3224 0 11.875V9.4375H1.625V11.875H11.375V9.4375H13V11.875C13 12.3219 12.841 12.7046 12.5231 13.0231C12.2051 13.3416 11.8224 13.5005 11.375 13.5H1.625Z"
                                            fill="#6B6B6B" />
                                    </svg>
                                </a>
                                <a href="" class="action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                        viewBox="0 0 25 24" fill="none">
                                        <rect x="0.5" width="24" height="24" rx="2"
                                            fill="white" />
                                        <path
                                            d="M9.0625 18C8.68438 18 8.36079 17.8696 8.09175 17.6087C7.82271 17.3478 7.68796 17.0338 7.6875 16.6667V8H7V6.66667H10.4375V6H14.5625V6.66667H18V8H17.3125V16.6667C17.3125 17.0333 17.178 17.3473 16.9089 17.6087C16.6399 17.87 16.3161 18.0004 15.9375 18H9.0625ZM15.9375 8H9.0625V16.6667H15.9375V8ZM10.4375 15.3333H11.8125V9.33333H10.4375V15.3333ZM13.1875 15.3333H14.5625V9.33333H13.1875V15.3333Z"
                                            fill="#6B6B6B" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>W-2_2023.pdf</td>
                        <td>Uploaded by You</td>
                        <td>Jan 15, 2024</td>
                        <td>Sent to: <span class="active-text">John Doe, CPA</span></td>
                        <td>
                            <div class="action-container">
                                <a href="" class="action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                        viewBox="0 0 25 24" fill="none">
                                        <rect x="0.5" width="24" height="24" rx="2"
                                            fill="white" />
                                        <path
                                            d="M12.4987 14.9168C14.1095 14.9168 15.4154 13.611 15.4154 12.0002C15.4154 10.3893 14.1095 9.0835 12.4987 9.0835C10.8879 9.0835 9.58203 10.3893 9.58203 12.0002C9.58203 13.611 10.8879 14.9168 12.4987 14.9168Z"
                                            stroke="#6B6B6B" />
                                        <path
                                            d="M19.3231 11.1117C19.6464 11.505 19.8081 11.7008 19.8081 12C19.8081 12.2992 19.6464 12.495 19.3231 12.8883C18.1397 14.325 15.5297 17 12.4997 17C9.46974 17 6.85974 14.325 5.67641 12.8883C5.35307 12.495 5.19141 12.2992 5.19141 12C5.19141 11.7008 5.35307 11.505 5.67641 11.1117C6.85974 9.675 9.46974 7 12.4997 7C15.5297 7 18.1397 9.675 19.3231 11.1117Z"
                                            stroke="#6B6B6B" />
                                    </svg>
                                </a>
                                <a href="" class="action download-action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14"
                                        viewBox="0 0 13 14" fill="none">
                                        <path
                                            d="M6.5 10.25L2.4375 6.1875L3.575 5.00937L5.6875 7.12187V0.5H7.3125V7.12187L9.425 5.00937L10.5625 6.1875L6.5 10.25ZM1.625 13.5C1.17813 13.5 0.795708 13.341 0.47775 13.0231C0.159792 12.7051 0.000541667 12.3224 0 11.875V9.4375H1.625V11.875H11.375V9.4375H13V11.875C13 12.3219 12.841 12.7046 12.5231 13.0231C12.2051 13.3416 11.8224 13.5005 11.375 13.5H1.625Z"
                                            fill="#6B6B6B" />
                                    </svg>
                                </a>
                                <a href="" class="action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                        viewBox="0 0 25 24" fill="none">
                                        <rect x="0.5" width="24" height="24" rx="2"
                                            fill="white" />
                                        <path
                                            d="M9.0625 18C8.68438 18 8.36079 17.8696 8.09175 17.6087C7.82271 17.3478 7.68796 17.0338 7.6875 16.6667V8H7V6.66667H10.4375V6H14.5625V6.66667H18V8H17.3125V16.6667C17.3125 17.0333 17.178 17.3473 16.9089 17.6087C16.6399 17.87 16.3161 18.0004 15.9375 18H9.0625ZM15.9375 8H9.0625V16.6667H15.9375V8ZM10.4375 15.3333H11.8125V9.33333H10.4375V15.3333ZM13.1875 15.3333H14.5625V9.33333H13.1875V15.3333Z"
                                            fill="#6B6B6B" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>W-2_2023.pdf</td>
                        <td>Uploaded by You</td>
                        <td>Jan 15, 2024</td>
                        <td>Sent to: <span class="active-text">John Doe, CPA</span></td>
                        <td>
                            <div class="action-container">
                                <a href="" class="action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                        viewBox="0 0 25 24" fill="none">
                                        <rect x="0.5" width="24" height="24" rx="2"
                                            fill="white" />
                                        <path
                                            d="M12.4987 14.9168C14.1095 14.9168 15.4154 13.611 15.4154 12.0002C15.4154 10.3893 14.1095 9.0835 12.4987 9.0835C10.8879 9.0835 9.58203 10.3893 9.58203 12.0002C9.58203 13.611 10.8879 14.9168 12.4987 14.9168Z"
                                            stroke="#6B6B6B" />
                                        <path
                                            d="M19.3231 11.1117C19.6464 11.505 19.8081 11.7008 19.8081 12C19.8081 12.2992 19.6464 12.495 19.3231 12.8883C18.1397 14.325 15.5297 17 12.4997 17C9.46974 17 6.85974 14.325 5.67641 12.8883C5.35307 12.495 5.19141 12.2992 5.19141 12C5.19141 11.7008 5.35307 11.505 5.67641 11.1117C6.85974 9.675 9.46974 7 12.4997 7C15.5297 7 18.1397 9.675 19.3231 11.1117Z"
                                            stroke="#6B6B6B" />
                                    </svg>
                                </a>
                                <a href="" class="action download-action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14"
                                        viewBox="0 0 13 14" fill="none">
                                        <path
                                            d="M6.5 10.25L2.4375 6.1875L3.575 5.00937L5.6875 7.12187V0.5H7.3125V7.12187L9.425 5.00937L10.5625 6.1875L6.5 10.25ZM1.625 13.5C1.17813 13.5 0.795708 13.341 0.47775 13.0231C0.159792 12.7051 0.000541667 12.3224 0 11.875V9.4375H1.625V11.875H11.375V9.4375H13V11.875C13 12.3219 12.841 12.7046 12.5231 13.0231C12.2051 13.3416 11.8224 13.5005 11.375 13.5H1.625Z"
                                            fill="#6B6B6B" />
                                    </svg>
                                </a>
                                <a href="" class="action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                        viewBox="0 0 25 24" fill="none">
                                        <rect x="0.5" width="24" height="24" rx="2"
                                            fill="white" />
                                        <path
                                            d="M9.0625 18C8.68438 18 8.36079 17.8696 8.09175 17.6087C7.82271 17.3478 7.68796 17.0338 7.6875 16.6667V8H7V6.66667H10.4375V6H14.5625V6.66667H18V8H17.3125V16.6667C17.3125 17.0333 17.178 17.3473 16.9089 17.6087C16.6399 17.87 16.3161 18.0004 15.9375 18H9.0625ZM15.9375 8H9.0625V16.6667H15.9375V8ZM10.4375 15.3333H11.8125V9.33333H10.4375V15.3333ZM13.1875 15.3333H14.5625V9.33333H13.1875V15.3333Z"
                                            fill="#6B6B6B" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- appointments end -->
    </div>
@endsection
