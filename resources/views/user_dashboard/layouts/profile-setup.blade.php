@extends('user_dashboard.app')

@section('user_dashboard_content')
    <div class="main-content">
        <!-- mobile searchbar start -->
        <!-- search bar start -->
        <div class="mobile-search-bar mb-3">
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

        <!-- profile setup content start -->
        <div class="profile-setup-steps">
            <div id="step-item-1" class="step-item">
                <div class="title">Complete Your Profile</div>
                <div class="text mt-3">
                    Enhance your visibility and attract more clients by completing your profile.
                </div>
                <div class="profile-progress-bar my-4">
                    <div class="progress-points">
                        <svg class="progress-point-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 16 16" fill="none">
                            <circle cx="8" cy="8" r="7.2" fill="white"
                                stroke="url(#paint0_linear_8823_3349)" stroke-width="1.6" />
                            <circle cx="8.0002" cy="8.0002" r="4.8" fill="url(#paint1_linear_8823_3349)" />
                            <defs>
                                <linearGradient id="paint0_linear_8823_3349" x1="0" y1="0" x2="16"
                                    y2="16" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#09BD3F" />
                                    <stop offset="1" stop-color="#09812D" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_8823_3349" x1="3.2002" y1="3.2002" x2="12.8002"
                                    y2="12.8002" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#09BD3F" />
                                    <stop offset="1" stop-color="#09812D" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <svg class="progress-point-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 16 16" fill="none">
                            <circle cx="8" cy="8" r="7.2" fill="white"
                                stroke="url(#paint0_linear_8823_3349)" stroke-width="1.6" />
                            <circle cx="8.0002" cy="8.0002" r="4.8" fill="url(#paint1_linear_8823_3349)" />
                            <defs>
                                <linearGradient id="paint0_linear_8823_3349" x1="0" y1="0" x2="16"
                                    y2="16" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#09BD3F" />
                                    <stop offset="1" stop-color="#09812D" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_8823_3349" x1="3.2002" y1="3.2002" x2="12.8002"
                                    y2="12.8002" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#09BD3F" />
                                    <stop offset="1" stop-color="#09812D" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <svg class="progress-point-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 16 16" fill="none">
                            <circle cx="8" cy="8" r="7.2" fill="white"
                                stroke="url(#paint0_linear_8823_3349)" stroke-width="1.6" />
                            <circle cx="8.0002" cy="8.0002" r="4.8" fill="url(#paint1_linear_8823_3349)" />
                            <defs>
                                <linearGradient id="paint0_linear_8823_3349" x1="0" y1="0"
                                    x2="16" y2="16" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#09BD3F" />
                                    <stop offset="1" stop-color="#09812D" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_8823_3349" x1="3.2002" y1="3.2002"
                                    x2="12.8002" y2="12.8002" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#09BD3F" />
                                    <stop offset="1" stop-color="#09812D" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"
                            fill="none">
                            <path
                                d="M13.9997 20.1485L21.2097 24.5002L19.2963 16.2985L25.6663 10.7802L17.278 10.0685L13.9997 2.3335L10.7213 10.0685L2.33301 10.7802L8.70301 16.2985L6.78967 24.5002L13.9997 20.1485Z"
                                fill="#FBB040" />
                        </svg>
                    </div>
                    <div style="width: 33.3%;" class="progress-complete"></div>
                </div>
                <!-- add photo container -->
                <div class="add-profile-photo-container">
                    <div class="left">
                        <div class="title-bar">
                            <h4 class="title-bar-title">Add Professional Photo</h4>
                            <h5 class="d-flex align-items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M18.98 9.253C18.602 8.29502 18.0312 7.42489 17.303 6.69658C16.5749 5.96826 15.7049 5.39727 14.747 5.019C14.5208 5.27576 14.3402 5.56933 14.213 5.887C15.1086 6.21257 15.9219 6.7305 16.5957 7.40431C17.2695 8.07811 17.7874 8.89143 18.113 9.787C18.4307 9.6598 18.7242 9.4792 18.981 9.253M12.229 5.503L12 5.5C10.7047 5.5 9.43896 5.88699 8.36513 6.61133C7.2913 7.33568 6.45837 8.36433 5.9732 9.56532C5.48803 10.7663 5.37275 12.0849 5.64214 13.3518C5.91153 14.6188 6.55331 15.7764 7.48514 16.6761C8.41698 17.5758 9.59637 18.1766 10.872 18.4014C12.1476 18.6262 13.4613 18.4647 14.6446 17.9377C15.8278 17.4107 16.8266 16.5422 17.5129 15.4436C18.1991 14.345 18.5414 13.0665 18.496 11.772C18.84 11.664 19.1653 11.5223 19.472 11.347C19.49 11.5623 19.4993 11.78 19.5 12C19.4999 13.5112 19.0433 14.9871 18.19 16.2343C17.3367 17.4816 16.1266 18.442 14.7181 18.9896C13.3097 19.5373 11.7686 19.6467 10.2969 19.3036C8.82517 18.9604 7.49145 18.1807 6.47049 17.0665C5.44953 15.9524 4.78895 14.5558 4.57532 13.0598C4.36169 11.5637 4.60498 10.0381 5.27329 8.68269C5.94161 7.32731 7.00378 6.20543 8.32062 5.46407C9.63746 4.7227 11.1476 4.39642 12.653 4.528C12.477 4.83728 12.3345 5.16447 12.228 5.504"
                                        fill="url(#paint0_linear_8823_3405)" />
                                    <path
                                        d="M17 10C18.6569 10 20 8.65685 20 7C20 5.34315 18.6569 4 17 4C15.3431 4 14 5.34315 14 7C14 8.65685 15.3431 10 17 10Z"
                                        fill="url(#paint1_linear_8823_3405)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_8823_3405" x1="4.5" y1="4.49951"
                                            x2="19.5" y2="19.4995" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#09BD3F" />
                                            <stop offset="1" stop-color="#09812D" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_8823_3405" x1="14" y1="4"
                                            x2="20" y2="10" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#09BD3F" />
                                            <stop offset="1" stop-color="#09812D" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <span>Status: Pending</span>
                            </h5>
                        </div>
                        <div class="title-text mt-4">
                            Upload a professional photo to build trust and attract more clients to your profile.
                        </div>
                    </div>
                    <div class="right">
                        <a href="{{ route('tax_prepare.profile.profile') }}" class="upload-photo-btn">
                            Upload Photo
                        </a>
                    </div>
                </div>

                <!-- add photo step actions -->
                <div class="add-photo-step-actions mt-5">
                    <a class="skip-btn step-1-next-btn">Skip</a>
                    <a  class="next-btn step-1-next-btn">Next</a>
                </div>
            </div>
            <div id="step-item-2" class="step-item">
                <div class="title">Complete Your Profile</div>
                <div class="text mt-3">
                    Enhance your visibility and attract more clients by completing your profile.
                </div>
                <div class="profile-progress-bar my-4">
                    <div class="progress-points">
                        <svg class="progress-point-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 16 16" fill="none">
                            <circle cx="8" cy="8" r="7.2" fill="white"
                                stroke="url(#paint0_linear_8823_33492)" stroke-width="1.6" />
                            <circle cx="8.0002" cy="8.0002" r="4.8" fill="url(#paint1_linear_8823_33492)" />
                            <defs>
                                <linearGradient id="paint0_linear_8823_33492" x1="0" y1="0"
                                    x2="16" y2="16" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#09BD3F" />
                                    <stop offset="1" stop-color="#09812D" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_8823_3349" x1="3.2002" y1="3.2002"
                                    x2="12.8002" y2="12.8002" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#09BD3F" />
                                    <stop offset="1" stop-color="#09812D" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <svg class="progress-point-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 16 16" fill="none">
                            <circle cx="8" cy="8" r="7.2" fill="white"
                                stroke="url(#paint0_linear_8823_33492)" stroke-width="1.6" />
                            <circle cx="8.0002" cy="8.0002" r="4.8" fill="url(#paint1_linear_8823_33492)" />
                            <defs>
                                <linearGradient id="paint0_linear_8823_33492" x1="0" y1="0"
                                    x2="16" y2="16" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#09BD3F" />
                                    <stop offset="1" stop-color="#09812D" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_8823_33492" x1="3.2002" y1="3.2002"
                                    x2="12.8002" y2="12.8002" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#09BD3F" />
                                    <stop offset="1" stop-color="#09812D" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <svg class="progress-point-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 16 16" fill="none">
                            <circle cx="8" cy="8" r="7.2" fill="white"
                                stroke="url(#paint0_linear_8823_33492)" stroke-width="1.6" />
                            <circle cx="8.0002" cy="8.0002" r="4.8" fill="url(#paint1_linear_8823_33492)" />
                            <defs>
                                <linearGradient id="paint0_linear_8823_33492" x1="0" y1="0"
                                    x2="16" y2="16" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#09BD3F" />
                                    <stop offset="1" stop-color="#09812D" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_8823_33492" x1="3.2002" y1="3.2002"
                                    x2="12.8002" y2="12.8002" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#09BD3F" />
                                    <stop offset="1" stop-color="#09812D" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"
                            fill="none">
                            <path
                                d="M13.9997 20.1485L21.2097 24.5002L19.2963 16.2985L25.6663 10.7802L17.278 10.0685L13.9997 2.3335L10.7213 10.0685L2.33301 10.7802L8.70301 16.2985L6.78967 24.5002L13.9997 20.1485Z"
                                fill="#FBB040" />
                        </svg>
                    </div>
                    <div style="width: 66.6%;" class="progress-complete"></div>
                </div>
                <!-- add photo container -->
                <div class="add-profile-photo-container">
                    <div class="left">
                        <div class="title-bar">
                            <h4 class="title-bar-title">Certification and Credentials</h4>
                            <h5 class="d-flex align-items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M18.98 9.253C18.602 8.29502 18.0312 7.42489 17.303 6.69658C16.5749 5.96826 15.7049 5.39727 14.747 5.019C14.5208 5.27576 14.3402 5.56933 14.213 5.887C15.1086 6.21257 15.9219 6.7305 16.5957 7.40431C17.2695 8.07811 17.7874 8.89143 18.113 9.787C18.4307 9.6598 18.7242 9.4792 18.981 9.253M12.229 5.503L12 5.5C10.7047 5.5 9.43896 5.88699 8.36513 6.61133C7.2913 7.33568 6.45837 8.36433 5.9732 9.56532C5.48803 10.7663 5.37275 12.0849 5.64214 13.3518C5.91153 14.6188 6.55331 15.7764 7.48514 16.6761C8.41698 17.5758 9.59637 18.1766 10.872 18.4014C12.1476 18.6262 13.4613 18.4647 14.6446 17.9377C15.8278 17.4107 16.8266 16.5422 17.5129 15.4436C18.1991 14.345 18.5414 13.0665 18.496 11.772C18.84 11.664 19.1653 11.5223 19.472 11.347C19.49 11.5623 19.4993 11.78 19.5 12C19.4999 13.5112 19.0433 14.9871 18.19 16.2343C17.3367 17.4816 16.1266 18.442 14.7181 18.9896C13.3097 19.5373 11.7686 19.6467 10.2969 19.3036C8.82517 18.9604 7.49145 18.1807 6.47049 17.0665C5.44953 15.9524 4.78895 14.5558 4.57532 13.0598C4.36169 11.5637 4.60498 10.0381 5.27329 8.68269C5.94161 7.32731 7.00378 6.20543 8.32062 5.46407C9.63746 4.7227 11.1476 4.39642 12.653 4.528C12.477 4.83728 12.3345 5.16447 12.228 5.504"
                                        fill="url(#paint0_linear_8823_3405)" />
                                    <path
                                        d="M17 10C18.6569 10 20 8.65685 20 7C20 5.34315 18.6569 4 17 4C15.3431 4 14 5.34315 14 7C14 8.65685 15.3431 10 17 10Z"
                                        fill="url(#paint1_linear_8823_3405)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_8823_3405" x1="4.5" y1="4.49951"
                                            x2="19.5" y2="19.4995" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#09BD3F" />
                                            <stop offset="1" stop-color="#09812D" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_8823_3405" x1="14" y1="4"
                                            x2="20" y2="10" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#09BD3F" />
                                            <stop offset="1" stop-color="#09812D" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <span>Status: Pending</span>
                            </h5>
                        </div>
                        <div class="title-text mt-4">
                            Upload a professional photo to build trust and attract more clients to your profile.
                        </div>
                    </div>
                    <div class="right">
                        <a href="{{ route('tax_prepare.profile.profile') }}" class="upload-photo-btn">
                            Upload Photo
                        </a>
                    </div>
                </div>

                <!-- add photo step actions -->
                <div class="add-photo-step-actions mt-5">
                    <a class="skip-btn step-2-next-btn">Skip</a>
                    <a class="next-btn step-2-next-btn">Next</a>
                </div>
            </div>
            <div id="step-item-3" class="step-item">
                <div class="title">Complete Your Profile</div>
                <div class="text mt-3">
                    Enhance your visibility and attract more clients by completing your profile.
                </div>
                <div class="profile-progress-bar my-4">
                    <div class="progress-points">
                        <svg class="progress-point-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 16 16" fill="none">
                            <circle cx="8" cy="8" r="7.2" fill="white"
                                stroke="url(#paint0_linear_8823_33493)" stroke-width="1.6" />
                            <circle cx="8.0002" cy="8.0002" r="4.8" fill="url(#paint1_linear_8823_33493)" />
                            <defs>
                                <linearGradient id="paint0_linear_8823_33493" x1="0" y1="0"
                                    x2="16" y2="16" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#09BD3F" />
                                    <stop offset="1" stop-color="#09812D" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_8823_33493" x1="3.2002" y1="3.2002"
                                    x2="12.8002" y2="12.8002" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#09BD3F" />
                                    <stop offset="1" stop-color="#09812D" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <svg class="progress-point-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 16 16" fill="none">
                            <circle cx="8" cy="8" r="7.2" fill="white"
                                stroke="url(#paint0_linear_8823_33493)" stroke-width="1.6" />
                            <circle cx="8.0002" cy="8.0002" r="4.8" fill="url(#paint1_linear_8823_33493)" />
                            <defs>
                                <linearGradient id="paint0_linear_8823_3349" x1="0" y1="0"
                                    x2="16" y2="16" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#09BD3F" />
                                    <stop offset="1" stop-color="#09812D" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_8823_33493" x1="3.2002" y1="3.2002"
                                    x2="12.8002" y2="12.8002" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#09BD3F" />
                                    <stop offset="1" stop-color="#09812D" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <svg class="progress-point-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 16 16" fill="none">
                            <circle cx="8" cy="8" r="7.2" fill="white"
                                stroke="url(#paint0_linear_8823_33493)" stroke-width="1.6" />
                            <circle cx="8.0002" cy="8.0002" r="4.8" fill="url(#paint1_linear_8823_33493)" />
                            <defs>
                                <linearGradient id="paint0_linear_8823_33493" x1="0" y1="0"
                                    x2="16" y2="16" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#09BD3F" />
                                    <stop offset="1" stop-color="#09812D" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_8823_33493" x1="3.2002" y1="3.2002"
                                    x2="12.8002" y2="12.8002" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#09BD3F" />
                                    <stop offset="1" stop-color="#09812D" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"
                            fill="none">
                            <path
                                d="M13.9997 20.1485L21.2097 24.5002L19.2963 16.2985L25.6663 10.7802L17.278 10.0685L13.9997 2.3335L10.7213 10.0685L2.33301 10.7802L8.70301 16.2985L6.78967 24.5002L13.9997 20.1485Z"
                                fill="#FBB040" />
                        </svg>
                    </div>
                    <div style="width: 100.5%;" class="progress-complete"></div>
                </div>
                <!-- add photo container -->
                <div class="add-profile-photo-container">
                    <div class="left">
                        <div class="title-bar">
                            <h4 class="title-bar-title">Services availability and Pricing</h4>
                            <h5 class="d-flex align-items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M18.98 9.253C18.602 8.29502 18.0312 7.42489 17.303 6.69658C16.5749 5.96826 15.7049 5.39727 14.747 5.019C14.5208 5.27576 14.3402 5.56933 14.213 5.887C15.1086 6.21257 15.9219 6.7305 16.5957 7.40431C17.2695 8.07811 17.7874 8.89143 18.113 9.787C18.4307 9.6598 18.7242 9.4792 18.981 9.253M12.229 5.503L12 5.5C10.7047 5.5 9.43896 5.88699 8.36513 6.61133C7.2913 7.33568 6.45837 8.36433 5.9732 9.56532C5.48803 10.7663 5.37275 12.0849 5.64214 13.3518C5.91153 14.6188 6.55331 15.7764 7.48514 16.6761C8.41698 17.5758 9.59637 18.1766 10.872 18.4014C12.1476 18.6262 13.4613 18.4647 14.6446 17.9377C15.8278 17.4107 16.8266 16.5422 17.5129 15.4436C18.1991 14.345 18.5414 13.0665 18.496 11.772C18.84 11.664 19.1653 11.5223 19.472 11.347C19.49 11.5623 19.4993 11.78 19.5 12C19.4999 13.5112 19.0433 14.9871 18.19 16.2343C17.3367 17.4816 16.1266 18.442 14.7181 18.9896C13.3097 19.5373 11.7686 19.6467 10.2969 19.3036C8.82517 18.9604 7.49145 18.1807 6.47049 17.0665C5.44953 15.9524 4.78895 14.5558 4.57532 13.0598C4.36169 11.5637 4.60498 10.0381 5.27329 8.68269C5.94161 7.32731 7.00378 6.20543 8.32062 5.46407C9.63746 4.7227 11.1476 4.39642 12.653 4.528C12.477 4.83728 12.3345 5.16447 12.228 5.504"
                                        fill="url(#paint0_linear_8823_3405)" />
                                    <path
                                        d="M17 10C18.6569 10 20 8.65685 20 7C20 5.34315 18.6569 4 17 4C15.3431 4 14 5.34315 14 7C14 8.65685 15.3431 10 17 10Z"
                                        fill="url(#paint1_linear_8823_3405)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_8823_3405" x1="4.5" y1="4.49951"
                                            x2="19.5" y2="19.4995" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#09BD3F" />
                                            <stop offset="1" stop-color="#09812D" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_8823_3405" x1="14" y1="4"
                                            x2="20" y2="10" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#09BD3F" />
                                            <stop offset="1" stop-color="#09812D" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <span>Status: Pending</span>
                            </h5>
                        </div>
                        <div class="title-text mt-4">
                            Upload a professional photo to build trust and attract more clients to your profile.
                        </div>
                    </div>
                    <div class="right">
                        <a href="{{ route('tax_prepare.profile.profile') }}" class="upload-photo-btn">
                            Upload Photo
                        </a>
                    </div>
                </div>

                <!-- add photo step actions -->
                <div class="add-photo-step-actions mt-5">
                    <a href="{{ route('tax_prepare.profile.profile') }}" class="next-btn step-3-next-btn">Next</a>
                </div>
            </div>
        </div>
        <!-- profile setup content end -->

    </div>
    <!-- main-container end -->
@endsection


<script>
    const nextButtons1 = document.querySelectorAll('.step-1-next-btn');
const nextButtons2 = document.querySelectorAll('.step-2-next-btn');
const step3btn = document.querySelector('.step-3-next-btn');

const step1 = document.getElementById('step-item-1');
const step2 = document.getElementById('step-item-2');
const step3 = document.getElementById('step-item-3');

nextButtons1.forEach(button => {
  button.addEventListener('click', function(event) {
    step1.style.display="none";
    step2.style.display="block";
  });
});

nextButtons2.forEach(button => {
  button.addEventListener('click', function(event) {
    step2.style.display="none";
    step3.style.display="block";
  });
});

</script>
