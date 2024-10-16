@extends('front_end.app')

@section('content')
<main>

    <!-- sign in-up section start -->
    <section class="sign-in-up-common-section question-area">
        <div class="container">
            <div class="sign-in-up-content-wrapper">
                <div class="sign-in-up-image-area">
                    <img src="{{asset('front_end/assets/images/question.png')}} " alt="" srcset="">
                </div>
                <div class="sign-in-up-form-area">
                    <div class="form-header-para">
                        <h2>Answer a few quick questions to start building your profile and enjoy your first year
                            free!</h2>
                    </div>
                    <div class="question-list-wrapper">
                        <p class="question-item">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M15.75 6C15.75 6.99456 15.3549 7.94839 14.6517 8.65165C13.9484 9.35491 12.9946 9.75 12 9.75C11.0054 9.75 10.0516 9.35491 9.34836 8.65165C8.6451 7.94839 8.25001 6.99456 8.25001 6C8.25001 5.00544 8.6451 4.05161 9.34836 3.34835C10.0516 2.64509 11.0054 2.25 12 2.25C12.9946 2.25 13.9484 2.64509 14.6517 3.34835C15.3549 4.05161 15.75 5.00544 15.75 6ZM4.50101 20.118C4.53314 18.1504 5.33735 16.2742 6.74018 14.894C8.14302 13.5139 10.0321 12.7405 12 12.7405C13.9679 12.7405 15.857 13.5139 17.2598 14.894C18.6627 16.2742 19.4669 18.1504 19.499 20.118C17.1464 21.1968 14.5882 21.7535 12 21.75C9.32401 21.75 6.78401 21.166 4.50101 20.118Z"
                                        stroke="#757575" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg></span>
                            Answer a few questions and start building your profile
                        </p>
                        <p class="question-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path d="M12 2V8L14 6" stroke="#757575" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 8L10 6" stroke="#757575" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M7 12C3 12 3 13.79 3 16V17C3 19.76 3 22 8 22H16C20 22 21 19.76 21 17V16C21 13.79 21 12 17 12C16 12 15.72 12.21 15.2 12.6L14.18 13.68C13 14.94 11 14.94 9.81 13.68L8.8 12.6C8.28 12.21 8 12 7 12Z"
                                        stroke="#757575" stroke-width="1.5" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5 12V8.00004C5 5.99004 5 4.33004 8 4.04004" stroke="#757575"
                                        stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M19 12V8.00004C19 5.99004 19 4.33004 16 4.04004" stroke="#757575"
                                        stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                            Upload your certifications and professional details to ensure trust
                        </p>
                        <p class="question-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M9.67898 20.3608L9.67905 20.3609C9.74331 20.3896 9.81291 20.4045 9.8833 20.4045C9.95346 20.4045 10.0228 20.3897 10.0869 20.3612C10.1216 20.3459 10.8072 20.0371 11.753 19.4979C12.7891 20.7159 14.333 21.4904 16.0543 21.4904C19.1675 21.4904 21.6999 18.9576 21.6999 15.8448C21.6999 13.2199 19.8969 11.0143 17.4671 10.3848V5.4084C17.4671 5.27579 17.4144 5.14861 17.3207 5.05485C17.2269 4.96108 17.0997 4.9084 16.9671 4.9084C15.9195 4.9084 15.0671 4.05597 15.0671 3.0084C15.0671 2.87579 15.0144 2.74861 14.9207 2.65484C14.8269 2.56108 14.6997 2.5084 14.5671 2.5084H5.1995C5.06689 2.5084 4.93972 2.56108 4.84595 2.65485C4.7522 2.74859 4.69953 2.87573 4.6995 3.0083C4.699 3.51202 4.4987 3.99496 4.14256 4.35118C3.78641 4.7074 3.3035 4.9078 2.79978 4.9084C2.66722 4.90843 2.54009 4.9611 2.44635 5.05485C2.35258 5.14861 2.2999 5.27579 2.2999 5.4084V12.8164C2.2999 13.8771 2.75103 14.8712 3.4217 15.7632C4.09248 16.6554 4.98764 17.4521 5.88825 18.1206C7.6895 19.4577 9.52715 20.2928 9.67898 20.3608ZM16.4671 10.2159C16.3312 10.2054 16.1936 10.1988 16.0543 10.1988C12.9411 10.1988 10.4087 12.7316 10.4087 15.8444C10.4087 16.8766 10.6921 17.8417 11.1778 18.6747C10.7541 18.9147 10.3225 19.1407 9.88385 19.3523C9.32236 19.0816 7.7058 18.261 6.21323 17.111C5.44677 16.5205 4.7165 15.8458 4.17859 15.1171C3.64046 14.388 3.2999 13.6119 3.2999 12.8164V5.86475C3.88623 5.76122 4.42739 5.47988 4.84939 5.05789C5.27139 4.63589 5.55272 4.09473 5.65626 3.5084H14.1104C14.214 4.09476 14.4954 4.63593 14.9174 5.05793C15.3395 5.47992 15.8807 5.76124 16.4671 5.86476V10.2159ZM16.0543 20.4904C13.4927 20.4904 11.4087 18.4064 11.4087 15.8448C11.4087 13.2832 13.4927 11.1992 16.0543 11.1992C18.6159 11.1992 20.6999 13.2832 20.6999 15.8448C20.6999 18.4064 18.6159 20.4904 16.0543 20.4904Z"
                                        fill="#757575" stroke="#757575" stroke-width="0.2" />
                                    <path
                                        d="M16.0544 13.8324C16.4988 13.8324 16.8604 14.194 16.8604 14.6388C16.8604 14.7448 16.9025 14.8466 16.9776 14.9216C17.0526 14.9966 17.1543 15.0388 17.2604 15.0388C17.3665 15.0388 17.4682 14.9966 17.5432 14.9216C17.6183 14.8466 17.6604 14.7448 17.6604 14.6388C17.6604 13.892 17.146 13.268 16.4544 13.0888V12.8112C16.4544 12.7051 16.4123 12.6033 16.3372 12.5283C16.2622 12.4533 16.1605 12.4112 16.0544 12.4112C15.9483 12.4112 15.8466 12.4533 15.7716 12.5283C15.6965 12.6033 15.6544 12.7051 15.6544 12.8112V13.0888C14.9624 13.268 14.448 13.892 14.448 14.6388C14.4484 15.0647 14.6178 15.473 14.919 15.7742C15.2201 16.0753 15.6285 16.2447 16.0544 16.2452C16.4988 16.2452 16.8604 16.6068 16.8604 17.0516C16.8604 17.4964 16.4988 17.858 16.0544 17.858C15.8406 17.8577 15.6356 17.7727 15.4844 17.6215C15.3332 17.4703 15.2482 17.2654 15.248 17.0516C15.248 16.9455 15.2059 16.8437 15.1308 16.7687C15.0558 16.6937 14.9541 16.6516 14.848 16.6516C14.7419 16.6516 14.6402 16.6937 14.5652 16.7687C14.4901 16.8437 14.448 16.9455 14.448 17.0516C14.448 17.7984 14.9624 18.4224 15.6544 18.6016V18.8792C15.6544 18.9852 15.6965 19.087 15.7716 19.162C15.8466 19.237 15.9483 19.2792 16.0544 19.2792C16.1605 19.2792 16.2622 19.237 16.3372 19.162C16.4123 19.087 16.4544 18.9852 16.4544 18.8792V18.6016C17.146 18.4224 17.6604 17.7984 17.6604 17.0516C17.66 16.6257 17.4906 16.2174 17.1896 15.9163C16.8885 15.6151 16.4802 15.4457 16.0544 15.4452C15.8406 15.4449 15.6356 15.3599 15.4844 15.2087C15.3332 15.0575 15.2482 14.8526 15.248 14.6388C15.248 14.194 15.6096 13.8324 16.0544 13.8324ZM11.8652 9.12395C11.7902 9.04896 11.6885 9.00684 11.5824 9.00684C11.4763 9.00684 11.3746 9.04896 11.2996 9.12395L8.64439 11.7792L7.46359 10.5984C7.4267 10.5601 7.38256 10.5297 7.33376 10.5087C7.28495 10.4877 7.23247 10.4767 7.17935 10.4763C7.12624 10.4758 7.07357 10.4859 7.02441 10.506C6.97525 10.5261 6.93059 10.5558 6.89304 10.5934C6.85548 10.6309 6.82578 10.6756 6.80567 10.7248C6.78555 10.7739 6.77543 10.8266 6.77589 10.8797C6.77636 10.9328 6.78739 10.9853 6.80835 11.0341C6.82932 11.0829 6.85979 11.1271 6.89799 11.164L8.36159 12.6276C8.43661 12.7025 8.53833 12.7447 8.64439 12.7447C8.75046 12.7447 8.85218 12.7025 8.9272 12.6276L11.8652 9.68955C11.9402 9.61454 11.9823 9.51282 11.9823 9.40675C11.9823 9.30068 11.9402 9.19896 11.8652 9.12395Z"
                                        fill="#757575" />
                                </svg>
                            </span>
                            Get paid safely and know we're there to help
                        </p>
                    </div>
                    <input type="hidden" name="user_id" id="user_id" value="{{request('user_id')}}">
                    <a href="{{route('tax_prepare.tax_prepare_stepform', ['tax-prepare' => request('user_id')])}}" class="question-get-start-btn">
                        Get Start
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- sign in-up section End -->
</main>
@endsection

