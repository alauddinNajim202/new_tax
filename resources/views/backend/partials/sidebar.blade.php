@php
    $systemSetting = App\Models\SystemSetting::first();
@endphp

<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{ route('admin.dashboard') }}">
                <img src="{{ asset($systemSetting->logo ?? 'backend/images/brand/logo.png') }}"
                    class="header-brand-img desktop-logo" alt="logo">
                <img src="{{ asset($systemSetting->logo ?? 'backend/images/brand/logo-1.png') }}"
                    class="header-brand-img toggle-logo" alt="logo">
                <img src="{{ asset($systemSetting->logo ?? 'backend/images/brand/logo-2.png') }}"
                    class="header-brand-img light-logo" alt="logo">
                <img src="{{ asset($systemSetting->logo ?? 'backend/images/brand/logo-3.png') }}"
                    class="header-brand-img light-logo1" alt="logo">
            </a>
        </div>

        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg>
            </div>

            <ul class="side-menu">
                <li class="slide">
                    <a class="side-menu__item has-link {{ request()->routeIs('dashboard.*') ? 'active' : '' }}"
                        data-bs-toggle="slide" href="{{ route('admin.dashboard') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                            <path
                                d="M19.9794922,7.9521484l-6-5.2666016c-1.1339111-0.9902344-2.8250732-0.9902344-3.9589844,0l-6,5.2666016C3.3717041,8.5219116,2.9998169,9.3435669,3,10.2069702V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h2.5h7c0.0001831,0,0.0003662,0,0.0006104,0H18c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-8.7930298C21.0001831,9.3435669,20.6282959,8.5219116,19.9794922,7.9521484z M15,21H9v-6c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2V21z M20,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-2v-6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3h-2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v6H6c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8.7930298C3.9997559,9.6313477,4.2478027,9.0836182,4.6806641,8.7041016l6-5.2666016C11.0455933,3.1174927,11.5146484,2.9414673,12,2.9423828c0.4853516-0.0009155,0.9544067,0.1751099,1.3193359,0.4951172l6,5.2665405C19.7521973,9.0835571,20.0002441,9.6313477,20,10.2069702V19z" />
                        </svg>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>



                <li class="slide">
                    <a class="side-menu__item has-link {{ request()->routeIs('admin.team.*') ? 'active' : '' }}"
                        data-bs-toggle="slide" href="{{ route('admin.team.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" class="side-menu__icon" x="0" y="0"
                            viewBox="0 0 60 60" style="enable-background:new 0 0 512 512" xml:space="preserve"
                            class="">
                            <g>
                                <path fill="#000000" fill-rule="nonzero"
                                    d="M56.859 4.018a3.519 3.519 0 0 0-2.059.422 3.461 3.461 0 0 0-4.97-2.016A3.5 3.5 0 0 0 46.141.018a3.469 3.469 0 0 0-2.578 1.654A3.433 3.433 0 0 0 38.4 3h-9.848a1.009 1.009 0 0 1-.517-.147L23.992.434A3.011 3.011 0 0 0 22.452 0H7.643a3.607 3.607 0 0 0-3.625 3.14A3.524 3.524 0 0 0 4.44 5.2a3.459 3.459 0 0 0-2.015 4.97 3.495 3.495 0 0 0-2.407 3.691 3.466 3.466 0 0 0 1.654 2.578c-.507.7-.74 1.562-.654 2.422A3.49 3.49 0 0 0 3 21.606v9.844a1 1 0 0 1-.148.514l-2.44 4.064A3.112 3.112 0 0 0 0 37.549v14.809a3.609 3.609 0 0 0 3.141 3.624A3.55 3.55 0 0 0 5.2 55.56a3.46 3.46 0 0 0 4.971 2.015A3.489 3.489 0 0 0 13.5 60a3.417 3.417 0 0 0 2.938-1.671A3.437 3.437 0 0 0 21.605 57h9.843c.182.001.361.052.517.147l4.043 2.421c.465.28.997.429 1.54.431h14.809a3.607 3.607 0 0 0 3.625-3.14 3.524 3.524 0 0 0-.422-2.059 3.459 3.459 0 0 0 2.015-4.97 3.495 3.495 0 0 0 2.407-3.689 3.466 3.466 0 0 0-1.654-2.578c.507-.7.74-1.562.654-2.422A3.489 3.489 0 0 0 57 38.4v-9.85c.002-.182.053-.36.147-.516l2.422-4.042c.28-.465.429-.998.431-1.541V7.642a3.609 3.609 0 0 0-3.141-3.624zM2.008 13.663A1.5 1.5 0 0 1 3.5 12H10a1 1 0 0 0 0-2H5.5a1.5 1.5 0 0 1-1.495-1.66A1.594 1.594 0 0 1 5.643 7H12a1 1 0 0 0 0-2H7.5a1.5 1.5 0 0 1-1.495-1.66A1.593 1.593 0 0 1 7.643 2h14.809a1 1 0 0 1 .516.148l4.044 2.422c.465.279.997.428 1.54.43H38v8.889l-1.732-1.418a3.324 3.324 0 0 0-4.311.237A3.149 3.149 0 0 0 31.174 16h-3.353a3 3 0 0 0-2.1.87l-9.411 9.334-.02.02-.416.412a1.243 1.243 0 0 1-1.75-.012 1.236 1.236 0 0 1-.1-1.631l2.75-3.36A1 1 0 0 0 16 20H4.643a1.593 1.593 0 0 1-1.635-1.339A1.5 1.5 0 0 1 4.5 17H10a1 1 0 0 0 0-2H3.643a1.594 1.594 0 0 1-1.635-1.337zM42 32.657l-9.13 9.054a.984.984 0 0 1-.692.288h-4.836l-9.053-9.126A.985.985 0 0 1 18 32.18v-4.84l9.127-9.051a.984.984 0 0 1 .694-.289h4.84l9.053 9.126a.991.991 0 0 1 .286.694zM18.652 56.992a1.482 1.482 0 0 1-1.155-.376A1.514 1.514 0 0 1 17 55.5V50a1 1 0 0 0-2 0v6.359a1.6 1.6 0 0 1-1.351 1.635c-.42.046-.84-.091-1.152-.376A1.512 1.512 0 0 1 12 56.5V50a1 1 0 0 0-2 0v4.512a1.5 1.5 0 0 1-1.66 1.482A1.593 1.593 0 0 1 7 54.357V48a1 1 0 0 0-2 0v4.509a1.5 1.5 0 0 1-1.659 1.485A1.594 1.594 0 0 1 2 52.358V37.549c.002-.18.049-.357.137-.514l2.433-4.046A3.03 3.03 0 0 0 5 31.45V22h8.888l-1.419 1.733A3.222 3.222 0 0 0 16 28.828v3.352a3 3 0 0 0 .87 2.1l9.326 9.4a.545.545 0 0 0 .034.034l.407.41a1.24 1.24 0 0 1-.887 2.109 1.2 1.2 0 0 1-.75-.259l-3.359-2.749A1 1 0 0 0 20 44v11.357a1.6 1.6 0 0 1-1.348 1.635zm39.34-10.655A1.5 1.5 0 0 1 56.5 48H50a1 1 0 0 0 0 2h4.5a1.5 1.5 0 0 1 1.495 1.66A1.594 1.594 0 0 1 54.357 53H48a1 1 0 0 0 0 2h4.5a1.5 1.5 0 0 1 1.495 1.66A1.593 1.593 0 0 1 52.357 58H37.548a1 1 0 0 1-.516-.148l-4.044-2.422a3.021 3.021 0 0 0-1.54-.43H22v-8.891l1.732 1.418a3.315 3.315 0 0 0 4.311-.237 3.149 3.149 0 0 0 .786-3.29h3.35a3 3 0 0 0 2.1-.87l9.408-9.33.035-.034.407-.4a1.243 1.243 0 0 1 1.75.012c.44.441.482 1.14.1 1.631l-2.75 3.36A1 1 0 0 0 44 40h11.357a1.593 1.593 0 0 1 1.635 1.339A1.5 1.5 0 0 1 55.5 43H50a1 1 0 0 0 0 2h6.36a1.594 1.594 0 0 1 1.632 1.337zM58 22.451c-.002.182-.052.36-.147.516l-2.423 4.044A3.02 3.02 0 0 0 55 28.55V38h-8.891l1.419-1.733a3.235 3.235 0 0 0-.239-4.309A3.292 3.292 0 0 0 44 31.2v-3.38a3 3 0 0 0-.87-2.1l-9.33-9.414-.019-.019-.413-.416a1.221 1.221 0 0 1 .012-1.749 1.268 1.268 0 0 1 1.632-.1l3.359 2.749A1 1 0 0 0 40 16V4.643a1.594 1.594 0 0 1 1.34-1.635A1.5 1.5 0 0 1 43 4.5V10a1 1 0 0 0 2 0V3.643a1.593 1.593 0 0 1 1.34-1.635A1.5 1.5 0 0 1 48 3.5V10a1 1 0 0 0 2 0V5.5a1.5 1.5 0 0 1 1.66-1.494c.797.128 1.372.83 1.34 1.637V12a1 1 0 0 0 2 0V7.5a1.5 1.5 0 0 1 1.66-1.494c.796.128 1.371.83 1.34 1.636z"
                                    opacity="1" data-original="#000000"></path>
                            </g>
                        </svg>
                        <span class="side-menu__label">Team</span>
                    </a>
                </li>



                <li class="slide">
                    <a class="side-menu__item has-link {{ request()->routeIs('admin.faq.*') ? 'active' : '' }}"
                        data-bs-toggle="slide" href="{{ route('admin.faq.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" class="side-menu__icon" x="0" y="0"
                            viewBox="0 0 682.667 682.667" style="enable-background:new 0 0 512 512"
                            xml:space="preserve" class="">
                            <g>
                                <defs>
                                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                        <path d="M0 512h512V0H0Z" fill="#000000" opacity="1"
                                            data-original="#000000"></path>
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                    <path
                                        d="M0 0h-263.05l-104.142-78.681V0h-27.836c-9.468 0-17.206 7.737-17.206 17.204V220.68c0 9.438 7.738 17.176 17.206 17.176h35.546"
                                        style="stroke-width:20.148;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                        transform="translate(422.234 150.18)" fill="none" stroke="#000000"
                                        stroke-width="20.148" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                        data-original="#000000" class=""></path>
                                    <path
                                        d="M0 0h114.007l104.171-78.681V0h27.836c9.439 0 17.206 7.738 17.206 17.205v203.447c0 9.467-7.739 17.204-17.206 17.204h-404.865c-9.439 0-17.177-7.737-17.177-17.204V17.205C-176.028 7.767-168.29 0-158.851 0H-89.8"
                                        style="stroke-width:20.148;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                        transform="translate(238.78 202.644)" fill="none" stroke="#000000"
                                        stroke-width="20.148" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                        data-original="#000000" class=""></path>
                                    <path d="m0 0-48.244 114.421"
                                        style="stroke-width:20.148;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                        transform="translate(305.478 265.85)" fill="none" stroke="#000000"
                                        stroke-width="20.148" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                        data-original="#000000" class=""></path>
                                    <path d="m0 0 48.273 114.421"
                                        style="stroke-width:20.148;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                        transform="translate(208.96 265.85)" fill="none" stroke="#000000"
                                        stroke-width="20.148" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                        data-original="#000000" class=""></path>
                                    <path d="M0 0h-62.134"
                                        style="stroke-width:20.148;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                        transform="translate(288.3 306.635)" fill="none" stroke="#000000"
                                        stroke-width="20.148" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                        data-original="#000000" class=""></path>
                                    <path
                                        d="M0 0c27.892 0 50.499-25.875 50.499-57.797 0-31.923-22.607-57.829-50.499-57.829-27.893 0-50.527 25.906-50.527 57.829C-50.527-25.875-27.893 0 0 0Z"
                                        style="stroke-width:20.148;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                        transform="translate(387.527 388.037)" fill="none" stroke="#000000"
                                        stroke-width="20.148" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                        data-original="#000000" class=""></path>
                                    <path d="m0 0 51.071-50.688"
                                        style="stroke-width:20.148;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                        transform="translate(396.596 313.56)" fill="none" stroke="#000000"
                                        stroke-width="20.148" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                        data-original="#000000" class=""></path>
                                    <path d="M0 0h64.147"
                                        style="stroke-width:20.148;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                        transform="translate(120.69 380.27)" fill="none" stroke="#000000"
                                        stroke-width="20.148" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                        data-original="#000000" class=""></path>
                                    <path d="M0 0v117.397"
                                        style="stroke-width:20.148;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                        transform="translate(120.69 262.873)" fill="none" stroke="#000000"
                                        stroke-width="20.148" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                        data-original="#000000" class=""></path>
                                    <path d="M0 0h64.147"
                                        style="stroke-width:20.148;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                        transform="translate(120.69 327.864)" fill="none" stroke="#000000"
                                        stroke-width="20.148" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                        data-original="#000000" class=""></path>
                                    <path d="M0 0h-.028"
                                        style="stroke-width:20.148;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                        transform="translate(193.908 202.644)" fill="none" stroke="#000000"
                                        stroke-width="20.148" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                        data-original="#000000" class=""></path>
                                </g>
                            </g>
                        </svg>
                        <span class="side-menu__label">FAQs</span>
                    </a>
                </li>


                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 512 512">
                            <path
                                d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z" />
                        </svg>
                        <span class="side-menu__label">Settings</span><i class="angle fa fa-angle-right"></i>
                    </a>

                    <ul class="slide-menu">
                        <li><a href="{{ route('profile.setting') }}" class="slide-item">Profile Settings</a></li>
                        <li><a href="{{ route('system.index') }}" class="slide-item">System Settings</a></li>
                        <li><a href="{{ route('media.index') }}" class="slide-item">Social Media Settings</a></li>
                        <li><a href="{{ route('mail.setting') }}" class="slide-item">Mail Settings</a></li>
                        <li><a href="{{ route('stripe.index') }}" class="slide-item">Stripe Settings</a></li>
                        <li><a href="{{ route('google.index') }}" class="slide-item">Google Settings</a></li>

                        <li>
                            <a href="{{ route('dynamic_page.index') }}"
                                class="slide-item {{ request()->is('admin/dynamic-page*') ? 'active' : '' }}">Dynamic
                                Page Settings
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="slide-right" id="slide-right">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg>
            </div>
        </div>
    </div>
</div>
