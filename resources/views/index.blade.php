<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
        <meta name="author" content="DynamicLayers">
       
        <title>Jisar Foundation</title>
        
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

        <!-- Font Awesome Icons CSS -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}">
        
        <!-- Themify Icons CSS -->
        <link rel="stylesheet" href="{{ asset('public/frontend/css/themify-icons.css')}}">
        <!-- Elegant Font Icons CSS -->
        <link rel="stylesheet" href="{{ asset('public/frontend/css/elegant-font-icons.css')}}">
        <!-- Elegant Line Icons CSS -->
        <link rel="stylesheet" href="{{ asset('public/frontend/css/elegant-line-icons.css')}}">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap.min.css')}}">
		<!-- Venobox CSS -->
        <link rel="stylesheet" href="{{ asset('public/frontend/css/venobox/venobox.css')}}">
		<!-- OWL-Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('public/frontend/css/owl.carousel.css')}}">
        <!-- Slick Nav CSS -->
        <link rel="stylesheet" href="{{ asset('public/frontend/css/slicknav.min.css')}}">
        <!-- Css Animation CSS -->
        <link rel="stylesheet" href="{{ asset('public/frontend/css/css-animation.min.css')}}">
        <!-- Nivo Slider CSS -->
        <link rel="stylesheet" href="{{ asset('public/frontend/css/nivo-slider.css')}}">
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('public/frontend/css/main.css')}}">
		<!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('public/frontend/css/responsive.css')}}">

        <script src="{{ asset('public/frontend/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>

        <style>
            .img {
                float: right;
            }
            .headings h2.education {
                float: left;
                text-decoration: underline;
                font-size: 34px;
                color: #f0c774;
            }

            .headings h2.livehhod {
                float: left;
                text-decoration: underline;
                font-size: 34px;
                color: #debfae;
            }
            .headings h2.healthcare {
                float: left;
                text-decoration: underline;
                font-size: 34px;
                color: #c0adcc;
            }
            .headings h2.woomen {
                float: left;
                text-decoration: underline;
                font-size: 34px;
                color: #b3d2d1;
            }
            .text p{
                float: left;
                text-align: left;
            }
            .manage_rows {
                margin-bottom: 100px;
            }
            .login {
                display: none !important; /* Show the login on mobile screens */
            }
            
           
         @media (min-width: 601px) and (max-width: 900px) {
                .text_size {
                    font-size: 25px;
            }
            .sub_heading {
                font-size: 13px;
            }
            .text {
                font-size: 11px;
            }
            .mobile {
                flex-flow: column;
            }
            .headings h2.education {
                float: left;
                text-decoration: underline;
                font-size: 34px;
                color: #f0c774;
            }
            .col-mob {
                max-width: 100%;
            }
            .mob-view {
                margin-left: 15px;
            }
            .headings h2.education_mob {
                float: left;
                text-decoration: underline;
                font-size: 24px;
                color: #f0c774;
            }

            .headings h2.livehhod_mob {
                float: left;
                text-decoration: underline;
                font-size: 24px;
                color: #debfae;
            }
            .headings h2.healthcare_mob {
                float: left;
                text-decoration: underline;
                font-size: 24px;
                color: #c0adcc;
            }
            .headings h2.woomen_mob {
                float: left;
                text-decoration: underline;
                font-size: 24px;
                text-align: left;
                color: #b3d2d1;
            }
            .margin {
                margin-bottom: 30px;
            }
            .mob_vision {
                flex-flow: column-reverse;
            }
            .mob_vision_img {
                width: 336px;
                    height: 230px;
            }
            .width_set_mob {
                max-width: 100%;
            }
            .mobile_logo {
                width: 70px;
                height: 70px;
            }
            .login {
                display: block !important; /* Show the login on mobile screens */
            }
                        }
           
            @media (max-width: 600px) {
                .text_size {
                    font-size: 25px;
            }
            .sub_heading {
                font-size: 13px;
            }
            .text {
                font-size: 11px;
            }
            .mobile {
                flex-flow: column;
            }
            .headings h2.education {
                float: left;
                text-decoration: underline;
                font-size: 34px;
                color: #f0c774;
            }
            .col-mob {
                max-width: 100%;
            }
            .mob-view {
                margin-left: 15px;
            }
            .headings h2.education_mob {
                float: left;
                text-decoration: underline;
                font-size: 24px;
                color: #f0c774;
            }

            .headings h2.livehhod_mob {
                float: left;
                text-decoration: underline;
                font-size: 24px;
                color: #debfae;
            }
            .headings h2.healthcare_mob {
                float: left;
                text-decoration: underline;
                font-size: 24px;
                color: #c0adcc;
            }
            .headings h2.woomen_mob {
                float: left;
                text-decoration: underline;
                font-size: 24px;
                text-align: left;
                color: #b3d2d1;
            }
            .margin {
                margin-bottom: 30px;
            }
            .mob_vision {
                flex-flow: column-reverse;
            }
            .mob_vision_img {
                width: 336px;
                    height: 230px;
            }
            .width_set_mob {
                max-width: 100%;
            }
            .mobile_logo {
                width: 70px;
                height: 70px;
            }
            .login {
                display: block !important; /* Show the login on mobile screens */
            }
            }
        </style>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div class="site-preloader-wrap">
            <div class="spinner"></div>
        </div><!-- Preloader -->
        
        <header id="header" class="header-section">
            <div class="top-header">
                <div class="container">
                    <div class="top-content-wrap row">
                        <div class="col-sm-8">
                            <ul class="left-info">
                                <li><a href="#"><i class="ti-email"></i>jisarfoundation@gmail.com</a></li>
                                <li><a href="#"><i class="ti-mobile"></i>+917972811009</a></li>
                               
                            </ul>
                        </div>
                        <div class="col-sm-4 d-none d-md-block">
                            <ul class="right-info">
                                <li><a href="https://www.facebook.com/profile.php?id=100095433754056&mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://instagram.com/jisar_foundation?igshid=MzRlODBiNWFlZA=="><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-header">
                <div class="container">
                    <div class="bottom-content-wrap row">
                        <div class="col-sm-4">
                            <div class="site-branding">
                                <a href="{{url ('/')}}">
                                    <img src="{{ asset('public/frontend/icon/logo_new.png')}}" class="mobile_logo" width="100px" height="100px" alt="Brand"></a>
                            </div>
                        </div>
                       <div class="col-sm-8 text-right">
                           <ul id="mainmenu" class="nav navbar-nav nav-menu">
                               
                                <li><a  href="#about-us">About Us</a></li>
                                <!-- <li><a href="causes.html">Our Impact</a></li> -->
                                <li><a href="#our-vission">Our Vission</a></li>
                                <li><a href="#our-volunteer">Our Volunteer</a></li>
                                <li><a href="#what-people-say">What people say</a></li>
                                <li> <a href="#contact-us">Contact Us</a></li>
                                <li class="login"> <a href="{{url('/login')}}">Login</a></li>
                            </ul>
                            
                            <a href="{{url('/login')}}" class="default-btn">LOG IN</a>
                       </div>
                    </div>
                </div>
            </div>
        </header><!-- /Header Section -->
        
        <div class="header-height"></div>
        
        <section class="slider-section">
            <div class="slider-wrapper">
                <div id="main-slider" class="nivoSlider">
                    <img src="{{ asset('public/frontend/icon/third_banner.jpg')}}" alt="" title="#slider-caption-1"/>
                    <img src="{{ asset('public/frontend/icon/second_banner.jpg')}}" alt="" title="#slider-caption-2"/>
                    <img src="{{ asset('public/frontend/icon/first_banner.jpg')}}" alt="" title="#slider-caption-3"/>
                    
                </div><!-- /#main-slider -->

                <div id="slider-caption-1" class="nivo-html-caption slider-caption">
                    <div class="display-table">
                        <div class="table-cell">
                            <div class="container">
                               <div class="slider-text">
                                   <h5 class="wow cssanimation fadeInBottom"></h5>
                                   <h1 class="wow cssanimation leFadeInRight sequence">Dr APJ. Abdul Kalam Talent Search Examination 2023.</h1>
                                    <p class="wow cssanimation fadeInTop" data-wow-delay="1s">Maharashtra’s biggest online scholarship fest for 3rd to 10th std students.<br> For Registered users password will be first letter of your name in small and last 4 digits of your phone number.</p>
                                    <a href="{{url('/register')}}" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Register Now</a>
                                    <a href="{{url('.logins')}}" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Login</a>
                                </div>
                           </div>
                        </div>
                    </div>
                </div> <!-- /#slider-caption-1 -->
                <div id="slider-caption-2" class="nivo-html-caption slider-caption">
                    <div class="display-table">
                        <div class="table-cell">
                            <div class="container">
                               <div class="slider-text">
                                    <h1 class="wow cssanimation fadeInTop" data-wow-delay="1s" data-wow-duration="800ms">Together we  <br>can make a Difference</h1>
                                    <p class="wow cssanimation fadeInBottom" data-wow-delay="1s">Help today because tomorrow you may be the one who needs helping! <br>Forget what you can get and see what you can give.</p>
                                    <a href="#our-volunteer" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join With Us</a>
                                    <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donate Now</a>
                                </div>
                           </div>
                        </div>
                    </div>
                </div> <!-- /#slider-caption-2 -->
                <div id="slider-caption-3" class="nivo-html-caption slider-caption">
                    <div class="display-table">
                        <div class="table-cell">
                            <div class="container">
                               <div class="slider-text">
                                    <h5 class="wow cssanimation fadeInBottom">Join Us Today</h5>
                                    <h1 class="wow cssanimation lePushReleaseFrom sequence" data-wow-delay="1s">Give a little. Change a lot.</h1>
                                    <p class="wow cssanimation fadeInTop" data-wow-delay="1s">Help today because tomorrow you may be the one who needs helping! <br>Forget what you can get and see what you can give.</p>
                                    <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join With Us</a>
                                    <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donate Now</a>
                                </div>
                           </div>
                        </div>
                    </div>
                </div> <!-- /#slider-caption-3 -->
            </div>
        </section><!-- /#slider-Section -->
        
        <!-- <section class="promo-section bd-bottom">
            <div class="promo-wrap">
               <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 xs-padding">
                            <div class="promo-content">
                                <img src="{{asset('frontend/img/icon-1.png')}}" alt="prmo icon">
                                <h3>Make Donetion</h3>
                                <p>Help today because tomorrow you may be the one who needs helping!</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 xs-padding">
                            <div class="promo-content">
                                <img src="{{asset('frontend/img/icon-2.png')}}" alt="prmo icon">
                                <h3>Fundrising</h3>
                                <p>Help today because tomorrow you may be the one who needs helping! </p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 xs-padding">
                            <div class="promo-content">
                                <img src="{{asset('frontend/img/icon-3.png')}}" alt="prmo icon">
                                <h3>Become A Volunteer</h3>
                                <p>Help today because tomorrow you may be the one who needs helping! </p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- /Promo Section -->
        
        <section id="about-us" class="causes-section bg-grey bd-bottom padding">
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>About Us</h2>
                    <span class="heading-border"></span>
                    <p>JISAR foundation is a non government organization located in Nashik, JISAR is an independent, voluntary, non-profit,
                         non-government charitable organization working to better the lives of people living in India. 
                     Through a range of empowerment, welfare programs encompassing education, health, 
                        skill-development awareness building and self-help projects JISAR helps thousands of beneficiaries within Maharashtra.</p>
                    <p>
                        Jisar Foundation was laid 5 years ago with the motto to unleash the dream of such students who due to financial stringent
                         and poverty are unable to achieve success in competitive examinations.
                    </p>
                   
                </div><!-- /Section Heading -->
                
            </div>
        </section>
        <!-- Our Impact -->
        <section class="causes-section bg-grey bd-bottom padding" style="background-color: #f3f2f3;">
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>OUR IMPACT</h2>
                    <span class="heading-border"></span>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-3">
                                <h1 style="color: #8EB951;" class="text_size">15+</h1>
                                <br>
                                <span><h4 style="color: #AA2672;" class="sub_heading">LAC</h4></span>
                                <p class="text">children and
                                    their families are
                                    impacted every year
                                </p>
                        </div>
                        <div class="col-3">
                                <h1 style="color: #8EB951;" class="text_size">2000+</h1>
                                <br>
                                <span><h4 style="color: #AA2672;" class="sub_heading">VILLAGES</h4></span>
                                <p class="text">and slums
                                    are reached out
                                    to across the country
                                </p>
                        </div>
                        <div class="col-3">
                        <h1 style="color: #8EB951;" class="text_size">400+</h1>
                                <br>
                                <span><h4 style="color: #AA2672;" class="sub_heading" >PROJECTS</h4></span>
                                <p class="text">focused on
                                    education, healthcare,
                                    and women empowerment
                                </p>
                        </div>
                        <div class="col-3">
                        <h1 style="color: #8EB951;" class="text_size">25+</h1>
                                <br>
                                <span><h4 style="color: #AA2672;" class="sub_heading">STATES</h4></span>
                                <p class="text">are reached
                                    including the
                                    remotest areas
                                </p>
                        </div>
                    </div>
                </div><!-- /Section Heading -->
                
            </div>
        </section>
        <!-- our programers -->
        <section class="causes-section bg-grey bd-bottom padding" style="background-color: white;">
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>OUR PROGRAMS</h2>
                    <span class="heading-border"></span>
                    <br>
                    <br>
                    <div class="row mobile">
                        
                        <div class="col-6 col-mob">
                            <div class="row mob-view">
                                <div class="col-3">
                                    <img class="img" src="{{ asset('public/frontend/icon/education.webp')}}" width="100px" height="100px">
                                </div>
                                <div class="col-9">
                                    <div class="row">
                                        <div class="col-12 headings">
                                            <h2 class="education education_mob">EDUCATION</h2 > 
                                        </div>
                                        <br>
                                        <br>
                                        <div class="col-8 text">
                                        <p>Education, nutrition and holistic development of children</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="col-6 col-mob">
                            <div class="row mob-view" >
                                <div class="col-3">
                                    <img class="img" src="{{ asset('public/frontend/icon/healthcare.webp')}}" width="100px" height="100px">
                                </div>
                                <div class="col-9">
                                    <div class="row  manage_rows" >
                                        <div class="col-12 headings">
                                            <h2 class="healthcare healthcare_mob">HEALTHCARE</h2 > 
                                        </div>
                                        <br>
                                        <br>
                                        <div class="col-8 text">
                                        <p>Taking healthcare services to doorsteps of hard to reach communities  </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-mob">
                            <div class="row mob-view margin">
                                <div class="col-3">
                                    <img class="img" src="{{ asset('public/frontend/icon/woomen.webp')}}" width="100px" height="100px">
                                </div>
                                <div class="col-9">
                                    <div class="row">
                                        <div class="col-12 headings">
                                            <h2 class="woomen woomen_mob">WOMEN EMPOWERMENT</h2 > 
                                        </div>
                                        <br>
                                        <br>
                                        <div class="col-8 text">
                                        <p>Empowering adolescent girls & women through community engagement </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-mob">
                            <div class="row mob-view">
                                <div class="col-3">
                                    <img class="img" src="{{ asset('public/frontend/icon/livehood.webp')}}" width="100px" height="100px">
                                </div>
                                <div class="col-9">
                                    <div class="row">
                                        <div class="col-12 headings">
                                            <h2 class="livehhod livehhod_mob">LIVEHOOD</h2 > 
                                        </div>
                                        <br>
                                        <br>
                                        <div class="col-8 text">
                                        <p>Skill training and placement support for underprivileged youth</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div><!-- /Section Heading -->
                
            </div>
        </section>
        <!-- our vission -->
        <section id="our-vission" class="causes-section bg-grey bd-bottom padding" style="background-color: white;">
            <div class="container">
                <div class="row mob_vision">
                    <div class="col-6 section-heading width_set_mob">
                    <h2 style="text-align: center;">OUR VISION</h2>
                    <br>
                    <br>
                    <p> Keeping in mind the great word said by legend dr. 
                        APJ Abdul Kalam “Failure will never overtake me if my 
                        determination to succeed is strong enough”. Lack of confidence
                         is the reason for failure. Young people are most likely to have 
                         self doubt which leads them to unsuccessful results. 
                         <br>
                         <br>
                         Our vision is to develop confidence in the emerging future generation 
                         of this country to think unique and help achieve great aims by providing
                          them experience of brainstorming examinations in order to develop their 
                          intelligence.
                          <br>
                          <br>
                          Including such an aid in students' curriculum they can be benefited to face 
                          the world's challenges. Educating students along with women of rural areas is 
                          the concern of this noble institution. We look forward to helping every need with 
                          educational help we have.
                        </p>
                    </div>
                    <div class="col-6">
                        <img class="mob_vision_img" width="500px" height="500px" src="{{ asset('public/frontend/icon/logo_new.png')}} ">
                    </div>
                </div>
            </div>
        </section>
       
        <!-- /Causes Section -->
        <section class="campaigns-section bd-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 xs-padding">
                       
                    </div>
                    <div class="col-md-6 xs-padding">
                        <div class="campaigns-wrap">
                            <!-- <h4>Featured Campaigns</h4> -->
                            <h2>Dr APJ. Abdul Kalam Talent Search Examination 2023.</h2>
                            <p>Maharashtra’s biggest online scholarship fest for 3rd to 10th std students. Register now to win scholarship and exciting awards!</p>
                            <!-- <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">35%</span></div>
                            </div> -->
                            <!-- <div class="donation-box">
                                <h3><i class="ti-bar-chart"></i>Goal: $450000</h3>
                                <h3><i class="ti-thumb-up"></i>Raised: $55000</h3>
                            </div> -->
                            <a href="{{ url('register') }}" class="default-btn">Register Now</a>x
                        </div>
                    </div>
                    <!-- <div class="col-md-6 xs-padding">
                        <div class="video-wrap">
                            <img src="img/video.jpg" alt="video">
                            <div class="play">
                                <a class="img-popup" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=_IlLwfC2dNc"><i class="ti-control-play"></i></a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section><!-- /Featured Campaigns Section -->
        
        <section id="our-volunteer" class="team-section bg-grey bd-bottom circle shape padding">
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>Meet Out Volunteers</h2>
                    <span class="heading-border"></span>
                    <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
                </div><!-- /Section Heading -->
                <div class="team-wrapper row">
                    <div class="col-lg-6 sm-padding">
                        <div class="team-wrap row">
                            <div class="col-md-6">
                                <div class="team-details">
                                   <img src="{{ asset('public/frontend/icon/pradnya.png')}} " alt="team">
                                   
                                    <div class="hover">
                                        <h3>Ms.Pradnya Mandale <span>Communicator</span></h3>
                                    </div>
                                </div>
                            </div><!-- /Team-1 -->
                            <div class="col-md-6">
                                <div class="team-details">
                                   <img src="{{ asset('public/frontend/icon/yogesh.png')}}" alt="team">
                                    <div class="hover">
                                        <h3>Mr.Yogesh Chavan <span>Certified Reader</span></h3>
                                    </div>
                                </div>
                            </div><!-- /Team-2 -->
                            <div class="col-md-6">
                                <div class="team-details">
                                    <img src="{{ asset('public/frontend/icon/deepak.png')}}" alt="team">
                                    <div class="hover">
                                        <h3>Mr.Deepak Nand <span>Event Creator</span></h3>
                                    </div>
                                </div>
                            </div><!-- /Team-3 -->
                            <div class="col-md-6">
                                <div class="team-details">
                                   <img src="{{ asset('public/frontend/icon/krishna.jpg')}}" alt="team">
                                    <div class="hover">
                                        <h3>Mr.Krishna Kushare<span>Internet Specialist</span></h3>
                                    </div>
                                </div>
                            </div><!-- /Team-4 -->
                        </div>
                    </div>
                    <div class="col-lg-6 sm-padding">
                        <div class="team-content">
                            <h2>Become a Volunteer?</h2>
                            <h3>Join your hand with us for a better life and beautiful future.</h3>
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                            <ul class="check-list">
                                <li><i class="fa fa-check"></i>We are friendly to each other.</li>
                                <li><i class="fa fa-check"></i>If you join with us,We will give you free training.</li>
                                <li><i class="fa fa-check"></i>Its an opportunity to help poor children.</li>
                                <li><i class="fa fa-check"></i>No goal requirements.</li>
                                <li><i class="fa fa-check"></i>Joining is tottaly free. We dont need any money from you.</li>
                            </ul>
                            <a href="#our-volunteer" class="default-btn">Join With Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Team Section -->
        
        <!-- <section id="counter" class="counter-section">
		    <div class="container">
                <ul class="row counters">
                    <li class="col-md-3 col-sm-6 sm-padding">
                        <div class="counter-content">
                            <i class="ti-money"></i>
                            <h3 class="counter">85389</h3>
                            <h4 class="text-white">Money Donated</h4>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 sm-padding">
                        <div class="counter-content">
                            <i class="ti-face-smile"></i>
                            <h3 class="counter">10693</h3>
                            <h4 class="text-white">Volunteer Around The World</h4>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 sm-padding">
                        <div class="counter-content">
                            <i class="ti-user"></i>
                            <h3 class="counter">50177</h3>
                            <h4 class="text-white">People Impacted</h4>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 sm-padding">
                        <div class="counter-content">
                            <i class="ti-comments"></i>
                            <h3 class="counter">669</h3>
                            <h4 class="text-white">Positive Feedbacks</h4>
                        </div>
                    </li>
                </ul>
		    </div>
		</section> -->
        <!-- Counter Section -->
       
        <!-- <section class="events-section bg-grey bd-bottom padding">
           <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>Upcoming Events</h2>
                    <span class="heading-border"></span>
                    <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
                </div>
                /Section Heading
                <div id="event-carousel" class="events-wrap owl-Carousel">
                    <div class="events-item">
                        <div class="event-thumb">
                           <img src="img/events-1.jpg" alt="events">
                        </div>
                        <div class="event-details">
                            <h3>Let's talk about the poor children.</h3>
                            <div class="event-info">
                                <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                                <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                            </div>
                            <p>Help today because tomorrow you may be the one who needs more helping!</p>
                            <a href="#" class="default-btn">Read More</a>
                        </div>
                    </div>
                    Event-1
                    <div class="events-item">
                        <div class="event-thumb">
                           <img src="img/events-2.jpg" alt="events">
                        </div>
                        <div class="event-details">
                            <h3>Insure clean water to everyone in Africa.</h3>
                            <div class="event-info">
                                <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                                <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                            </div>
                            <p>Help today because tomorrow you may be the one who needs more helping!</p>
                            <a href="#" class="default-btn">Read More</a>
                        </div>
                    </div>
                    Event-2
                    <div class="events-item">
                        <div class="event-thumb">
                           <img src="img/events-3.jpg" alt="events">
                        </div>
                        <div class="event-details">
                            <h3>Nepal Earthquake Clean Water Initiative.</h3>
                            <div class="event-info">
                                <p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>
                                <p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>
                            </div>
                            <p>Help today because tomorrow you may be the one who needs more helping!</p>
                            <a href="#" class="default-btn">Read More</a>
                        </div>
                    </div>
                    Event-3
                </div>
           </div>
        </section> -->
        <!-- Events Section -->
        
        <section id="what-people-say" class="testimonial-section bd-bottom padding">
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>What People Say</h2>
                    <span class="heading-border"></span>
                    <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
                </div><!-- /Section Heading -->
                <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
                    <div class="testimonial-item">
                        <p>I can't thank Jisar Foundation enough for the life-changing opportunities they've 
                            brought to our rural community. Through their awareness campaigns, we've gained valuable
                             knowledge about health, hygiene, and entrepreneurship, transforming our lives for the better.
                             </p>
                        <div class="testi-footer">
                           <img src="{{ asset('public/frontend/icon/ramesh2.png')}}" alt="profile">
                            <h4>Ramesh Patil <span>Village Resident</span></h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p>As a teacher in a remote village, I've seen the positive impact of Jisar Foundation's efforts
                             firsthand. Their commitment to improving education and providing employment opportunities has 
                             uplifted the entire region, giving our children a brighter future.</p>
                        <div class="testi-footer">
                           <img src="{{ asset('public/frontend/icon/meera.jfif')}}" alt="profile">
                            <h4>Pooja Jadhav  <span>Village Teacher</span></h4>
                        </div>
                    </div>
                   
                    <div class="testimonial-item">
                        <p>Jisar Foundation's initiatives have made a significant impact on the lives of women in our community. Their programs have encouraged and empowered us to be 
                            financially independent, breaking the barriers of traditional norms..</p>
                        <div class="testi-footer">
                           <img src="{{ asset('public/frontend/icon/pooja.jpg')}}" alt="profile">
                           <!-- {{ asset('frontend/icon/volunteer1.jpg')}} -->
                            <h4>Meera Rajput <span>Women's Self-Help Group Member</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Testimonial Section -->
        
        <!-- <section class="blog-section bg-grey bd-bottom padding">
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>Recent Stories</h2>
                    <span class="heading-border"></span>
                    <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
                </div>
                <div class="row">
                    <div class="col-lg-12 xs-padding">
                        <div class="blog-items grid-list row">
                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <img src="img/home-blog-1.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2021</span>
                                        <h3><a href="#">The History of Donation Told</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <img src="img/home-blog-2.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2021</span>
                                        <h3><a href="#">Help the Comunity</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <img src="img/home-blog-3.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2021</span>
                                        <h3><a href="#">Charity Ever Rule the World?</a></h3>
                                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                                        <a href="#" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Blog Section -->
        
        <!-- <div class="sponsor-section bd-bottom">
            <div class="container">
                <ul id="sponsor-carousel" class="sponsor-items owl-carousel">
                    <li class="sponsor-item">
                        <img src="img/sponsor-1.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="img/sponsor-2.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="img/sponsor-3.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="img/sponsor-4.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="img/sponsor-5.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="img/sponsor-6.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="img/sponsor-7.png" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="img/sponsor-8.png" alt="sponsor-image">
                    </li>
                </ul>
            </div>
        </div> -->
        <!-- ./Sponsor Section -->
        
        <section id="contact-us" class="widget-section padding">
            <div class="container">
                <div class="widget-wrap row">
                    <div class="col-md-4 xs-padding">
                        <div class="widget-content">
                            <img src="{{ asset('public/frontend/icon/logo_new.png')}}" width="100px" height="100px" style="border-radius: 10px;" alt="logo">
                            
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor</p>
                            <ul class="social-icon">
                                <li><a href="https://www.facebook.com/profile.php?id=100095433754056&mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://instagram.com/jisar_foundation?igshid=MzRlODBiNWFlZA=="><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 xs-padding">
                        <!-- <div class="widget-content">
                            <h3>Recent Campaigns</h3>
                            <ul class="widget-link">
                                <li><a href="#">First charity activity of this summer. <span>-1 Year Ago</span></a></li>
                                <li><a href="#">Big charity: build school for poor children. <span>-2 Year Ago</span></a></li>
                                <li><a href="#">Clean-water system for rural poor. <span>-2 Year Ago</span></a></li>
                                <li><a href="#">Nepal earthqueak donation campaigns. <span>-3 Year Ago</span></a></li>
                            </ul>
                        </div> -->
                    </div>
                    <div class="col-md-4 xs-padding">
                        <div class="widget-content">
                            <h3>Jisar Location</h3>
                            <ul class="address">
                                <li><i class="ti-email"></i> jisarfoundation@gmail.com</li>
                                <li><i class="ti-mobile"></i> +917972811009</li>
                                <li><i class="ti-world"></i><a href="https://jisar.in">www.Jisar.in</a></li>
                                <li><i class="ti-location-pin"></i> Indiranagar, Nashik, Mh India 422009</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- ./Widget Section -->
        
        <footer class="footer-section">
			<div class="container">
                <div class="row">
                    <div class="col-md-6 sm-padding">
                        <div class="copyright">&copy; 2023 Jisar Foundation</div>
                    </div>
                   
                </div>
			</div>
		</footer><!-- /Footer Section -->
        
		<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>
	
		<!-- jQuery Lib -->
		<script src="{{asset('public/frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
		<!-- Bootstrap JS -->
		<script src="{{asset('public/frontend/js/vendor/bootstrap.min.js')}}"></script>
		<!-- Tether JS -->
		<script src="{{asset('public/frontend/js/vendor/tether.min.js')}}"></script>
        <!-- Imagesloaded JS -->
        <script src="{{asset('public/frontend/js/vendor/imagesloaded.pkgd.min.js')}}"></script>
		<!-- OWL-Carousel JS -->
		<script src="{{asset('public/frontend/js/vendor/owl.carousel.min.js')}}"></script>
		<!-- isotope JS -->
		<script src="{{asset('public/frontend/js/vendor/jquery.isotope.v3.0.2.js')}}"></script>
		<!-- Smooth Scroll JS -->
		<script src="{{asset('public/frontend/js/vendor/smooth-scroll.min.js')}}"></script>
		<!-- venobox JS -->
		<script src="{{asset('public/frontend/js/vendor/venobox.min.js')}}"></script>
        <!-- ajaxchimp JS -->
        <script src="{{asset('public/frontend/js/vendor/jquery.ajaxchimp.min.js')}}"></script>
        <!-- Counterup JS -->
		<script src="{{asset('public/frontend/js/vendor/jquery.counterup.min.js')}}"></script>
        <!-- waypoints js -->
		<script src="{{asset('public/frontend/js/vendor/jquery.waypoints.v2.0.3.min.js')}}"></script>
        <!-- Slick Nav JS -->
        <script src="{{asset('public/frontend/js/vendor/jquery.slicknav.min.js')}}"></script>
        <!-- Nivo Slider JS -->
        <script src="{{asset('public/frontend/js/vendor/jquery.nivo.slider.pack.js')}}"></script>
        <!-- Letter Animation JS -->
		<script src="{{asset('public/frontend/js/vendor/letteranimation.min.js')}}"></script>
        <!-- Wow JS -->
		<script src="{{asset('public/frontend/js/vendor/wow.min.js')}}"></script>
		<!-- Contact JS -->
		<script src="{{asset('public/frontend/js/contact.js')}}"></script>
		<!-- Main JS -->
		<script src="{{asset('public/frontend/js/main.js')}}"></script>

    </body>
</html>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const menuLinks = document.querySelectorAll("#mainmenu li a");

        menuLinks.forEach(function (link) {
            link.addEventListener("click", smoothScroll);
        });

        function smoothScroll(event) {
            event.preventDefault();
            const targetId = event.target.getAttribute("href");
            const targetElement = document.querySelector(targetId);

            const offsetTop = targetElement.getBoundingClientRect().top;
            const headerOffset = 50;

            window.scrollBy({
                top: offsetTop - headerOffset,
                behavior: "smooth"
            });
        }
    });
</script>

