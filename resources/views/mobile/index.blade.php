<!DOCTYPE html>

<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8" />
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <title>UFree</title>
    <!-- Required meta tags -->
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="keywords" content="" />
    <meta name="copyright" content="" />
    <link rel="icon" href="{{asset('mobile-assets/images/icon.svg')}}" />
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
            integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N"
            crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('mobile-assets/plugins/font-awesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('mobile-assets/plugins/animate/animate.css')}}" />
    <!-- owl slider CSS -->
    <link
            rel="stylesheet"
            href="{{asset('mobile-assets/plugins/owlslider/assets/owl.carousel.min.css')}}"
    />

    <link
            rel="stylesheet"
            href="{{asset('mobile-assets/plugins/fancybox/jquery.fancybox.min.css')}}"
    />
    <link rel="stylesheet" href="{{asset('mobile-assets/css/mobiscroll.jquery.min.css')}}">

    <link rel="stylesheet" href="{{asset('mobile-assets/css/style.css')}}" />
<!-- <link rel="stylesheet" href="{{asset('mobile-assets/css/style-en.css')}}"> -->
</head>
<body>
<!-- pre-loader -->
<section class="pre-loader">
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</section>
<!-- pre-loader -->

<div class="side-overlay"></div>
<!-- Side Menu -->

<div class="main-header">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <figure class="mb-0">
                <img src="{{asset('mobile-assets/images/logo.svg')}}" alt="" srcset="" />
            </figure>
            <a class="lang" href="#"
            >English
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="19" height="19" x="0" y="0" viewBox="0 0 48.749 48.748" style="enable-background:new 0 0 512 512" xml:space="preserve"><g>
                        <g xmlns="http://www.w3.org/2000/svg">
                            <path d="M44.268,10.32c-0.371-0.524-0.758-1.035-1.17-1.527C38.624,3.424,31.891,0,24.374,0c-0.014,0-0.025,0.001-0.037,0.001   C24.329,0.001,24.323,0,24.315,0c-0.027,0-0.055,0.003-0.084,0.003C16.771,0.046,10.097,3.46,5.649,8.793   c-0.41,0.493-0.799,1.003-1.17,1.527C1.663,14.295,0,19.142,0,24.374c0,5.231,1.662,10.08,4.479,14.054   c0.371,0.524,0.76,1.035,1.17,1.527c4.447,5.333,11.121,8.747,18.582,8.79c0.029,0,0.057,0.003,0.084,0.003   c0.008,0,0.014-0.001,0.021-0.001c0.012,0,0.023,0.001,0.037,0.001c7.518,0,14.25-3.423,18.725-8.792   c0.41-0.492,0.799-1.004,1.17-1.528c2.816-3.975,4.479-8.822,4.479-14.055C48.747,19.143,47.084,14.295,44.268,10.32z M17.249,3.17   c-2.24,2.161-4.102,5.32-5.385,9.111c-1.719-0.642-3.266-1.415-4.6-2.289C9.879,6.886,13.318,4.494,17.249,3.17z M6.09,11.521   c1.516,1.012,3.268,1.897,5.205,2.626c-0.836,3.054-1.316,6.444-1.334,10.021H2.004C2.047,19.463,3.562,15.109,6.09,11.521z    M2.079,26.168H10c0.129,2.994,0.584,5.835,1.293,8.434c-1.938,0.729-3.689,1.614-5.203,2.627   C3.849,34.048,2.404,30.266,2.079,26.168z M7.27,38.752c1.334-0.872,2.877-1.643,4.592-2.285c1.283,3.792,3.146,6.949,5.387,9.11   C13.318,44.254,9.886,41.857,7.27,38.752z M23.374,46.676c-4.104-0.562-7.646-4.771-9.654-10.833   c2.895-0.868,6.172-1.394,9.654-1.479V46.676z M23.374,32.366c-3.672,0.088-7.133,0.655-10.215,1.601   c-0.631-2.396-1.035-5.025-1.156-7.798h11.371V32.366z M23.374,24.168H11.961c0.018-3.359,0.455-6.532,1.207-9.384   c3.078,0.943,6.537,1.511,10.205,1.598V24.168z M23.374,14.384c-3.48-0.085-6.756-0.609-9.648-1.477   c2.007-6.059,5.546-10.272,9.648-10.835V14.384z M46.741,24.168h-8.072c-0.018-3.562-0.492-6.938-1.322-9.981   c1.98-0.736,3.769-1.635,5.31-2.665C45.184,15.11,46.698,19.463,46.741,24.168z M41.481,9.994   c-1.361,0.891-2.943,1.676-4.703,2.325c-1.295-3.843-3.184-7.04-5.459-9.209C35.323,4.421,38.825,6.84,41.481,9.994z M25.374,2.087   c4.059,0.627,7.555,4.832,9.541,10.85c-2.865,0.849-6.104,1.363-9.541,1.447V2.087z M25.374,16.383   c3.625-0.086,7.045-0.642,10.096-1.565c0.748,2.844,1.182,6.005,1.199,9.351H25.374V16.383z M25.374,26.168h11.254   c-0.121,2.76-0.523,5.377-1.148,7.766c-3.055-0.926-6.479-1.481-10.104-1.568L25.374,26.168L25.374,26.168z M25.374,46.661V34.365   c3.439,0.084,6.678,0.598,9.547,1.447C32.932,41.832,29.432,46.034,25.374,46.661z M31.319,45.639   c2.275-2.168,4.168-5.363,5.463-9.207c1.756,0.648,3.336,1.432,4.695,2.321C38.821,41.906,35.323,44.327,31.319,45.639z    M42.657,37.229c-1.541-1.03-3.33-1.931-5.311-2.666c0.702-2.588,1.153-5.416,1.28-8.394h8.041   C46.342,30.266,44.901,34.049,42.657,37.229z" fill="currentColor" data-original="currentColor"></path>
                        </g>
            </svg>
            </a>
        </div>
    </div>
</div>

<div class="body-content">
    <div class="container">
        <div class="top-profile">
            <figure class="mb-0 cover">
                <img src="{{asset('mobile-assets/images/cover_image.png')}}" class="img-fluid" alt="" srcset="">
            </figure>
            <div class="d-flex align-items-center justify-content-between px-lg-5 px-3">
                <div class="d-flex align-items-center gap-4 profile-img">
                    <figure class="mb-0">
                        <img src="{{asset($user->s_avatar)}}" alt="">
                    </figure>
                    <div>
                        <h5>{{$user->s_first_name ." ".$user->s_last_name}}</h5>
                        <h6>{{$user->s_job_title}} </h6>
                    </div>
                </div>
                <figure class="mb-0 qr-img">
                    <img src="{{asset('mobile-assets/images/qr.png')}}" alt="" srcset="">
                </figure>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-xl-7 col-lg-6">
                <div class="main-title">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="12" viewBox="0 0 19 12">
                  <g id="Group_53038" data-name="Group 53038" transform="translate(-1238 -1466)">
                    <g id="Ellipse_825" data-name="Ellipse 825" transform="translate(1245 1466)" fill="none" stroke="#1aa9bb" stroke-width="0.8">
                      <circle cx="2.5" cy="2.5" r="2.5" stroke="none"/>
                      <circle cx="2.5" cy="2.5" r="2.1" fill="none"/>
                    </g>
                    <g id="Ellipse_826" data-name="Ellipse 826" transform="translate(1238 1466)" fill="none" stroke="#1aa9bb" stroke-width="0.8">
                      <circle cx="2.5" cy="2.5" r="2.5" stroke="none"/>
                      <circle cx="2.5" cy="2.5" r="2.1" fill="none"/>
                    </g>
                    <g id="Ellipse_827" data-name="Ellipse 827" transform="translate(1238 1473)" fill="none" stroke="#1aa9bb" stroke-width="0.8">
                      <circle cx="2.5" cy="2.5" r="2.5" stroke="none"/>
                      <circle cx="2.5" cy="2.5" r="2.1" fill="none"/>
                    </g>
                    <g id="Ellipse_828" data-name="Ellipse 828" transform="translate(1245 1473)" fill="none" stroke="#1aa9bb" stroke-width="0.8">
                      <circle cx="2.5" cy="2.5" r="2.5" stroke="none"/>
                      <circle cx="2.5" cy="2.5" r="2.1" fill="none"/>
                    </g>
                    <g id="Ellipse_829" data-name="Ellipse 829" transform="translate(1252 1473)" fill="none" stroke="#1aa9bb" stroke-width="0.8">
                      <circle cx="2.5" cy="2.5" r="2.5" stroke="none"/>
                      <circle cx="2.5" cy="2.5" r="2.1" fill="none"/>
                    </g>
                  </g>
                </svg>
              </span>
                    البيانات الشخصية
                </div>
                <div class="bio mt-4">
                    <h6 class="sub-title">نبذة شخصية :</h6>
                    <p class="mb-0">  {{$user->s_bio}}
                    </p>
                </div>
                <div class="interests  mt-4">
                    <h6 class="sub-title">الإهتمامات:</h6>
                    <div class="d-flex gap-2">
                        @foreach($user->interests as $interest)
                            <div class="interest">
                                {{$interest->s_title}}
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="social-media mt-4">
                    <h6 class="sub-title">حسابات السوشيال ميديا :</h6>
                    <div class="d-flex gap-3">
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_53974" data-name="Group 53974" transform="translate(-18633 -6474)">
                                    <circle id="Ellipse" cx="20" cy="20" r="20" transform="translate(18633 6474)" fill="#def9e8"/>
                                    <g id="Whatapp" transform="translate(18643 6484)">
                                        <path id="Path_29874" data-name="Path 29874" d="M17.035,2.869a9.785,9.785,0,0,0-15.4,11.8L.25,19.742l5.186-1.36a9.772,9.772,0,0,0,4.675,1.191h0a9.787,9.787,0,0,0,6.92-16.7ZM10.115,17.92h0a8.121,8.121,0,0,1-4.138-1.133l-.3-.176L2.6,17.418l.821-3-.193-.308a8.131,8.131,0,1,1,6.888,3.81Zm4.46-6.09c-.244-.122-1.446-.714-1.67-.8s-.387-.122-.55.122-.631.8-.774.958-.285.184-.53.061a6.676,6.676,0,0,1-1.966-1.213,7.373,7.373,0,0,1-1.36-1.693c-.142-.245,0-.364.107-.5a6.914,6.914,0,0,0,.611-.836.45.45,0,0,0-.02-.428c-.061-.122-.55-1.325-.753-1.815s-.4-.412-.55-.42-.305-.009-.468-.009A.9.9,0,0,0,6,5.57,2.742,2.742,0,0,0,5.144,7.61a4.755,4.755,0,0,0,1,2.529,10.9,10.9,0,0,0,4.176,3.691,13.992,13.992,0,0,0,1.394.515,3.351,3.351,0,0,0,1.54.1,2.518,2.518,0,0,0,1.65-1.162,2.042,2.042,0,0,0,.142-1.162c-.061-.1-.224-.163-.468-.285Zm0,0" transform="translate(-0.25)" fill="#25d366" fill-rule="evenodd"/>
                                    </g>
                                </g>
                            </svg>
                        </a>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_60891" data-name="Group 60891" transform="translate(-221 -714)">
                                    <g id="Group_60893" data-name="Group 60893">
                                        <path id="Rectangle" d="M20,0A20,20,0,1,1,0,20,20,20,0,0,1,20,0Z" transform="translate(221 714)" fill="#e7f1fe"/>
                                        <g id="Facebook" transform="translate(231 724)">
                                            <path id="Path" d="M20,10A10,10,0,1,0,8.438,19.878V12.891H5.9V10H8.438V7.8a3.529,3.529,0,0,1,3.777-3.891,15.378,15.378,0,0,1,2.239.2V6.562H13.192a1.445,1.445,0,0,0-1.63,1.562V10h2.773l-.443,2.891h-2.33v6.988A10,10,0,0,0,20,10Z" fill="#1877f2"/>
                                            <path id="Path-2" data-name="Path" d="M7.994,8.984l.443-2.891H5.664V4.218a1.445,1.445,0,0,1,1.63-1.562H8.555V.2A15.378,15.378,0,0,0,6.316,0,3.529,3.529,0,0,0,2.539,3.891v2.2H0V8.984H2.539v6.988a10.108,10.108,0,0,0,3.125,0V8.984Z" transform="translate(5.898 3.906)" fill="#fff"/>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 40 40">
                                <defs>
                                    <linearGradient id="linear-gradient" x1="0.084" y1="0.916" x2="0.916" y2="0.084" gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#ffd600"/>
                                        <stop offset="0.5" stop-color="#ff0100"/>
                                        <stop offset="1" stop-color="#d800b9"/>
                                    </linearGradient>
                                    <linearGradient id="linear-gradient-2" x1="0.146" y1="0.854" x2="0.854" y2="0.146" gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#ff6400"/>
                                        <stop offset="0.5" stop-color="#ff0100"/>
                                        <stop offset="1" stop-color="#fd0056"/>
                                    </linearGradient>
                                    <linearGradient id="linear-gradient-3" x1="0.146" y1="0.854" x2="0.854" y2="0.146" gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#f30072"/>
                                        <stop offset="1" stop-color="#e50097"/>
                                    </linearGradient>
                                </defs>
                                <g id="Group_60892" data-name="Group 60892" transform="translate(-170 -713)">
                                    <rect id="Rectangle" width="40" height="40" rx="20" transform="translate(170 713)" fill="#fff5e5"/>
                                    <g id="instagram" transform="translate(180 723)">
                                        <path id="Path_54" data-name="Path 54" d="M19.94,5.877a7.342,7.342,0,0,0-.465-2.427,4.9,4.9,0,0,0-1.153-1.771A4.9,4.9,0,0,0,16.55.525,7.34,7.34,0,0,0,14.123.06C13.056.011,12.716,0,10,0S6.943.011,5.877.06A7.342,7.342,0,0,0,3.45.525,4.9,4.9,0,0,0,1.678,1.678,4.9,4.9,0,0,0,.525,3.449,7.341,7.341,0,0,0,.06,5.877C.011,6.943,0,7.284,0,10s.012,3.057.06,4.123A7.34,7.34,0,0,0,.525,16.55a4.9,4.9,0,0,0,1.153,1.771A4.9,4.9,0,0,0,3.45,19.475a7.338,7.338,0,0,0,2.427.465C6.944,19.988,7.284,20,10,20s3.056-.011,4.123-.06a7.338,7.338,0,0,0,2.427-.465,5.112,5.112,0,0,0,2.924-2.924,7.339,7.339,0,0,0,.465-2.427c.049-1.067.06-1.407.06-4.123s-.012-3.056-.06-4.123Zm-1.8,8.164A5.533,5.533,0,0,1,17.8,15.9a3.312,3.312,0,0,1-1.9,1.9,5.533,5.533,0,0,1-1.857.344c-1.054.048-1.371.058-4.041.058s-2.987-.01-4.041-.058A5.535,5.535,0,0,1,4.1,17.8a3.1,3.1,0,0,1-1.15-.748A3.1,3.1,0,0,1,2.2,15.9a5.533,5.533,0,0,1-.344-1.857C1.812,12.986,1.8,12.67,1.8,10s.01-2.986.058-4.041A5.537,5.537,0,0,1,2.2,4.1a3.1,3.1,0,0,1,.748-1.15A3.1,3.1,0,0,1,4.1,2.2,5.532,5.532,0,0,1,5.959,1.86C7.013,1.812,7.33,1.8,10,1.8h0c2.67,0,2.986.01,4.041.058A5.534,5.534,0,0,1,15.9,2.2a3.1,3.1,0,0,1,1.15.748A3.1,3.1,0,0,1,17.8,4.1a5.528,5.528,0,0,1,.344,1.857C18.188,7.013,18.2,7.33,18.2,10s-.01,2.986-.058,4.041Zm0,0" fill="url(#linear-gradient)"/>
                                        <path id="Path_55" data-name="Path 55" d="M129.72,124.539a5.181,5.181,0,1,0,5.181,5.181A5.181,5.181,0,0,0,129.72,124.539Zm0,8.545a3.363,3.363,0,1,1,3.363-3.363A3.363,3.363,0,0,1,129.72,133.084Zm0,0" transform="translate(-119.721 -119.721)" fill="url(#linear-gradient-2)"/>
                                        <path id="Path_56" data-name="Path 56" d="M364.307,89.814a1.189,1.189,0,1,1-1.189-1.189A1.189,1.189,0,0,1,364.307,89.814Zm0,0" transform="translate(-347.774 -85.159)" fill="url(#linear-gradient-3)"/>
                                    </g>
                                </g>
                            </svg>
                        </a>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_60894" data-name="Group 60894" transform="translate(-277 -714)">
                                    <rect id="Rectangle" width="40" height="40" rx="20" transform="translate(277 714)" fill="#e5f6fe"/>
                                    <path id="twitter" d="M20,49.924a8.548,8.548,0,0,1-2.362.648,4.077,4.077,0,0,0,1.8-2.266,8.194,8.194,0,0,1-2.6.993,4.1,4.1,0,0,0-7.092,2.8,4.222,4.222,0,0,0,.095.935,11.606,11.606,0,0,1-8.451-4.289,4.1,4.1,0,0,0,1.26,5.48A4.049,4.049,0,0,1,.8,53.723v.045A4.119,4.119,0,0,0,4.085,57.8a4.093,4.093,0,0,1-1.075.135,3.626,3.626,0,0,1-.776-.07,4.139,4.139,0,0,0,3.831,2.856A8.239,8.239,0,0,1,.981,62.466,7.679,7.679,0,0,1,0,62.41a11.543,11.543,0,0,0,6.29,1.84A11.59,11.59,0,0,0,17.96,52.583c0-.181-.006-.356-.015-.53A8.179,8.179,0,0,0,20,49.924Z" transform="translate(287 678)" fill="#03a9f4"/>
                                </g>
                            </svg>
                        </a>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_61021" data-name="Group 61021" transform="translate(-277 -714)">
                                    <rect id="Rectangle" width="40" height="40" rx="20" transform="translate(277 714)" fill="#d9edf8"/>
                                    <g id="icons8-linkedin_2_" data-name="icons8-linkedin (2)" transform="translate(281 718)">
                                        <path id="Path_41513" data-name="Path 41513" d="M26,23.222A2.777,2.777,0,0,1,23.222,26H8.778A2.778,2.778,0,0,1,6,23.222V8.778A2.778,2.778,0,0,1,8.778,6H23.222A2.777,2.777,0,0,1,26,8.778Z" transform="translate(0 0)" fill="#0288d1"/>
                                        <path id="Path_41514" data-name="Path 41514" d="M12,15.891h2.779v9.449H12Zm1.381-1.112h-.016a1.406,1.406,0,1,1,.016,0Zm11.958,10.56H22.56V20.282a1.813,1.813,0,0,0-1.774-2.055,1.593,1.593,0,0,0-1.5,1.106,4.009,4.009,0,0,0-.056,1v5H16.446V15.891h2.779v1.454a2.811,2.811,0,0,1,2.633-1.454c1.989,0,3.48,1.251,3.48,4.043v5.406Z" transform="translate(-2.67 -2.67)" fill="#fff"/>
                                    </g>
                                </g>
                            </svg>

                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 mt-3 mt-lg-0">
                <div class="md-mobile-picker-inline">
                    <h6>الأنشطة المتاحة</h6>
                    <div id="demo-mobile-picker-inline"></div>
                </div>
                <div class="events">
                    <h5 class="mb-3">الأنشطة ({{$activities->count()}})</h5>
                    @if($activities->count() > 0)
                        <div class="events-slider owl-slider owl-carousel">
                            @foreach($activities as $activity)

                                <div>
                                    <div class="event-card"  onclick="showActivityModal({{$activity->getKey()}})" >
                                        <h2>{{$activity->s_title}}</h2>
                                        <h3>التصنيف: {{($activity->interest)->s_title}}</h3>
                                        <div class="time">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                          <g id="Group_60979" data-name="Group 60979" transform="translate(-326.567 -368)">
                            <rect id="Rectangle" width="32" height="32" rx="16" transform="translate(326.567 368)" fill="#f1f2f4"/>
                            <g id="Group_59440" data-name="Group 59440" transform="translate(334.568 376)">
                              <path id="Path_41028" data-name="Path 41028" d="M3.314,8.289A6.677,6.677,0,0,1,8.289,3.314a11.87,11.87,0,0,1,5.421,0,6.677,6.677,0,0,1,4.976,4.976,11.87,11.87,0,0,1,0,5.421,6.677,6.677,0,0,1-4.976,4.976,11.87,11.87,0,0,1-5.421,0,6.677,6.677,0,0,1-4.976-4.976A11.87,11.87,0,0,1,3.314,8.289Z" transform="translate(-3 -3)" fill="none" stroke="#05051b" stroke-width="1.2"/>
                              <path id="Path_41029" data-name="Path 41029" d="M14.194,13.906,11.661,12.3V9" transform="translate(-3.968 -3.675)" fill="none" stroke="#05051b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"/>
                            </g>
                          </g>
                        </svg>
                      </span>
                                            @foreach($activity->periods as $period)
                                                @if($period->timetables->count() > 0)
                                                    @php $timetable = $period->timetables[0];  @endphp
                                                    <p>{{date("h:i A",strtotime($timetable->dt_from)) ." - ".date("h A",strtotime($timetable->dt_to))}}</p>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    @else
                        <div class="without-events">
                            <figure>
                                <img src="{{asset('mobile-assets/images/without-events.svg')}}" alt="" srcset="">
                            </figure>
                            <h5>لا نشاطات</h5>
                            <h6>.لا يوجد أي نشاطات لهذه الفترة</h6>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-footer">
    <div class="container">
        <div class="d-flex justify-md-content-between justify-content-center align-items-center flex-wrap gap-4">
            <div class="copyright">
                جميع الحقوق محفوظة © <span>{{date('Y')}}</span>
            </div>
            <div class="d-flex align-items-center gap-3 downloads">
                <h6>حمل التطبيق</h6>
                <div class="d-flex gap-2">
                    <a href="{{$_settings['appstore']}}" target="_blank" rel="noopener noreferrer">
                        <img src="{{asset('mobile-assets/images/appstore.svg')}}" alt="" srcset="">
                    </a>
                    <a href="{{$_settings['googleplay']}}" target="_blank" rel="noopener noreferrer">
                        <img src="{{asset('mobile-assets/images/google-play.svg')}}" alt="" srcset="">
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="modal custom-modal success fade "id="activityModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body"></div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<script src="{{asset('mobile-assets/js/jquery.min.js')}}"></script>
<script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"
></script>
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"
></script>
<script src="{{asset('mobile-assets/plugins/owlslider/owl.carousel.min.js')}}"></script>
<script src="{{asset('mobile-assets/plugins/fancybox/jquery.fancybox.min.js')}}'"></script>
<script src="{{asset('mobile-assets/plugins/animate/wow.min.js')}}"></script>
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.8.1/lottie_svg.min.js"
        integrity="sha512-jk2H6cbspEVLyLHIJkHcwiHqh7sQuyrBJvHKokFyKebzaRZiA7RmcbAo7KvM3GqFaLJJGDFC/gBMYzbeeS7KUw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
></script>
<script type="text/javascript">

    var MS = MS || {};

    MS.apiKey = 'a0373209';//a0373209
</script>
<script src="{{asset('mobile-assets/js/mobiscroll.jquery.min.js')}}"></script>
<script src="{{asset('mobile-assets/js/main.js')}}"></script>
<script>
    mobiscroll.setOptions({
        locale: mobiscroll.localeAr,               // Specify language like: locale: mobiscroll.localePl or omit setting to use default
        theme: 'ios',                          // Specify theme like: theme: 'ios' or omit setting to use default
        themeVariant: 'light'                  // More info about themeVariant: https://docs.mobiscroll.com/5-18-3/range#opt-themeVariant
    });

    var calendar_range = $('#demo-mobile-picker-inline').mobiscroll().datepicker({
        controls: ['calendar'],  // More info about controls: c
        select: 'range',                       // More info about select: https://docs.mobiscroll.com/5-18-3/range#methods-select
        showRangeLabels: false,
        display: 'inline',
        // min: '2022-09-01',
        // max: '2022-09-15',
        dateFormat:"YYYY-MM-DD",
        marked: [
            {
                date:  Date.now(),
                color: '#FF5A5F',
                markCssClass: 'circle-mark'
            },
        ],
        @if(isset($bookedDates) && $bookedDates->count()> 0)
        invalid: [
                @foreach($bookedDates as $date_range)
            {
                start: "{{$date_range[0]}}",
                end: "{{$date_range[1]}}",
            },
                @endforeach
        ],
        @endif

            // {
            //   recurring: {
            //     repeat: 'weekly',
            //     weekDays: 'MO, TU, WE, TH, FR'
            //   }
            // }
        onChange: function (event, inst) {
            console.log(inst);
            console.log(event.valueText);
            if(event.valueText.includes(" - ")){
                window.location = window.location.href.split('?')[0]+"?date_range="+event.valueText;
            }
        }

    }).mobiscroll('getInst');
    var now = new Date();
    start_day =  "{{$fromDate}}";
    end_day = "{{$toDate}}"
    calendar_range.setVal([start_day, end_day]);

    function showActivityModal(id){
        $.get('{{ route('mobile.users.activity') }}/'+id, function (data) {
            let modal = $('#activityModal');
            //modal.find('.modal-title').html(data.title);
            modal.find('.modal-body').html(data.page);
            modal.modal('show');
        });
    }
</script>
</body>
</html>
