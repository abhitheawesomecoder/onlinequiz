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
       
        <title>Charitify || NGO/Charity/Fundraising Template</title>
        
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

        <!-- Font Awesome Icons CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
        
        <!-- Themify Icons CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css')}}">
        <!-- Elegant Font Icons CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/css/elegant-font-icons.css')}}">
        <!-- Elegant Line Icons CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/css/elegant-line-icons.css')}}">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
		<!-- Venobox CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/css/venobox/venobox.css')}}">
		<!-- OWL-Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css')}}">
        <!-- Slick Nav CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css')}}">
        <!-- Css Animation CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/css/css-animation.min.css')}}">
        <!-- Nivo Slider CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/css/nivo-slider.css')}}">
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/css/main.css')}}">
		<!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css')}}">

        <script src="{{ asset('frontend/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>

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
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
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
                                <a href="#">
                                    <img src="{{ asset('frontend/icon/logo_new.png')}}" class="mobile_logo" width="100px" height="100px" alt="Brand"></a>
                            </div>
                        </div>
                       <div class="col-sm-8 text-right">
                           <ul id="mainmenu" class="nav navbar-nav nav-menu">
                               
                                <li><a  href="#about-us">About Us</a></li>
                                <!-- <li><a href="causes.html">Our Impact</a></li> -->
                                <li><a href="#our-vission">Our Vission</a></li>
                                <li><a href="#our-volunteer">Our Volunteer</a></li>
                                <li><a href="#what-people-say">What people say</a></li>
                                <li> <a href="contact.html">Contact Us</a></li>
                            </ul>
                            <a href="#" class="default-btn">JOIN US</a>
                       </div>
                    </div>
                </div>
            </div>
        </header><!-- /Header Section -->
        
        <div class="header-height"></div>
        
        <section class="slider-section">
            <div class="slider-wrapper">
                <div id="main-slider" class="nivoSlider">
                    <img src="{{ asset('frontend/icon/third_banner.jpg')}}" alt="" title="#slider-caption-1"/>
                    <img src="{{ asset('frontend/icon/second_banner.jpg')}}" alt="" title="#slider-caption-2"/>
                    <img src="{{ asset('frontend/icon/first_banner.jpg')}}" alt="" title="#slider-caption-3"/>
                    
                </div><!-- /#main-slider -->

                <div id="slider-caption-1" class="nivo-html-caption slider-caption">
                    <div class="display-table">
                        <div class="table-cell">
                            <div class="container">
                               <div class="slider-text">
                                   <h5 class="wow cssanimation fadeInBottom">Dr APJ. Abdul Kalam Talent Search Examination 2023.</h5>
                                   <h1 class="wow cssanimation leFadeInRight sequence">Better Life for People</h1>
                                    <p class="wow cssanimation fadeInTop" data-wow-delay="1s">Maharashtra’s biggest online scholarship fest for 3rd to 10th std students.<br> Register now to win scholarship and exciting awards!</p>
                                    <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join With Us</a>
                                    <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donet Now</a>
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
                                    <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join With Us</a>
                                    <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donet Now</a>
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
                                    <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donet Now</a>
                                </div>
                           </div>
                        </div>
                    </div>
                </div> <!-- /#slider-caption-3 -->
            </div>
        </section><!-- /#slider-Section -->
        
       
        
        <section id="about-us" class="causes-section bg-grey bd-bottom padding">
            <div class="container">
                <div class="section-heading mb-40">
                    <h2>DR. APJ ABDUL KALAM TALENT SEARCH EXAMINATION-2.0 </h2>
                    <span class="heading-border"></span>
                    <p>Dr. APJ Abdul Kalam scholarship examination-2.0 is a state
                         level talent search exam for all schools across Maharashtra. 
                         It is a trustworthy educational measurement and evaluation service. 
                         The social-educational system is the most important stage in your life to 
                         choose a prestigious career. It is not only important to know what to study 
                         before preparing for elementary education or entrance exams, but also to prepare 
                         a strategy for study. Prepare a student with strategy.
                    </p>
                    <p>
                        Our focus is on providing quality education to those who want to prepare themselves 
                        for the exams. As we know, 'practice makes a man perfect.' The quality of this institution 
                        is demonstrated by the constant hard work of qualified and experienced students. Sometimes 
                        students find that certain subject topics are very difficult to understand but, it is a myth. 
                        Each subject or topic becomes easier if the teaching technique is good. With the existing syllabus 
                        we want to provide our students with actual exam practical skills to meet the required methods of your 
                        exam and provide them with a basic knowledge base for board exam preparation.

                    </p>
                    <p  class="font-weight-bold">Exam Objectives:</p>
                    <p>
                        Dear parents and students, the root of success in
                        competitive exams lies in the practice. Success is 
                        achieved only through determination and rigorous hard 
                        work. However, only if there is innovation, sincerity 
                        and curiosity in the practice, we can solve any problem 
                        in the shortest possible time. Extremely useful for thorough 
                        preparation of the syllabus of primary, higher secondary and 
                        competitive examinations. At the same time, we are conducting 
                        this JISAR talent search exam which is useful for measuring and 
                        enhancing intellectual capacity. In this we will provide financial 
                        assistance to the excellent and needful students for their further 
                        education through scholarships.
                    </p>
                    <p  class="font-weight-bold">Eligibility:</p>
                    <p>
                        The age group for examination is between  3rd 
                        std to 10th std, any student from all around 
                        Maharashtra  from any school can participate & are 
                        eligible for dr . APJ Abdul Kalam scholarship   exam. 
                        There is no obligation for the preliminary exam.
                    </p>
                    <p  class="font-weight-bold">Method Of Application:</p>
                       <p>
                        <ui>
                            <li>To participate in the exam, it is compulsory to fill the registration form of 
                                JISAR Dr.  APJ Abdul Kalam  talent search exam from the authorized license holder.</li>

                            <li>Fill the registration form on the website www.Jisar.In fill all the student-details correctly. 
                                While filling information, fill your correct authorized-centre code.</li>

                            <li>After filling all the information of the student, you can pay the exam fee via various options 
                                available on the website .After successful payment, the respective student will receive a message 
                                of confirmation on his/her registered mobile number.</li>

                            <li>The exam forms of regarding exam will be available on the website www.jisar.in</li>
                            <li>The exam fee Dr.  APJ Abdul kalam  talent search exam series-2 (state level) is RS 200/-</li>
                        </ui>
                        </p>
                    <p  class="font-weight-bold">More info about Exam:</p>

                    <li>Dr. APJ Abdul Kalam  talent search exam will be conducted among 200000 students.</li>
                    
                    <li>Students can appear for the online exam by using a smartphone/laptop/ computer.</li>
                    
                    <li>The exam will be held on 15th august 2023. In case of any change in the duration of the 
                        examination, it will be notified to the registered mobile number via SMS 8 days before the examination</li>

                    <li>This exam will be of 50 questions (MCQ type questions), each question contains 2 marks and it will take 60 minutes.</li>

                    <li>Evaluation will have a negative marking system.(0.25 marks will be deducted for each wrong answer.)It will be mandatory to 
                        submit after completing the entire paper and will get auto submitted after completion of the given time of examination</li>

                    <li>The result and merit list will be published on the website www.Jisar.in </li>

                    <li>The e- certificate will be published on the website after the result. Students can  download it from the website. </li>

                </div><!-- /Section Heading -->
                
            </div>
        </section>
       
    
        <section class="widget-section padding">
            <div class="container">
                <div class="widget-wrap row">
                    <div class="col-md-4 xs-padding">
                        <div class="widget-content">
                            <img src="{{ asset('frontend/icon/logo_new.png')}}" width="100px" height="100px" style="border-radius: 10px;" alt="logo">
                            
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor</p>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
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
                                <li><i class="ti-world"></i> Www.YourWebsite.com</li>
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
                        <div class="copyright">&copy; 2021 Charitify Powered by DynamicLayers</div>
                    </div>
                    <div class="col-md-6 sm-padding">
                        <ul class="footer-social">
                            <li><a href="#">Orders</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Report Problem</a></li>
                        </ul>
                    </div>
                </div>
			</div>
		</footer><!-- /Footer Section -->
        
		<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>
	
		<!-- jQuery Lib -->
		<script src="{{asset('frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
		<!-- Bootstrap JS -->
		<script src="{{asset('frontend/js/vendor/bootstrap.min.js')}}"></script>
		<!-- Tether JS -->
		<script src="{{asset('frontend/js/vendor/tether.min.js')}}"></script>
        <!-- Imagesloaded JS -->
        <script src="{{asset('frontend/js/vendor/imagesloaded.pkgd.min.js')}}"></script>
		<!-- OWL-Carousel JS -->
		<script src="{{asset('frontend/js/vendor/owl.carousel.min.js')}}"></script>
		<!-- isotope JS -->
		<script src="{{asset('frontend/js/vendor/jquery.isotope.v3.0.2.js')}}"></script>
		<!-- Smooth Scroll JS -->
		<script src="{{asset('frontend/js/vendor/smooth-scroll.min.js')}}"></script>
		<!-- venobox JS -->
		<script src="{{asset('frontend/js/vendor/venobox.min.js')}}"></script>
        <!-- ajaxchimp JS -->
        <script src="{{asset('frontend/js/vendor/jquery.ajaxchimp.min.js')}}"></script>
        <!-- Counterup JS -->
		<script src="{{asset('frontend/js/vendor/jquery.counterup.min.js')}}"></script>
        <!-- waypoints js -->
		<script src="{{asset('frontend/js/vendor/jquery.waypoints.v2.0.3.min.js')}}"></script>
        <!-- Slick Nav JS -->
        <script src="{{asset('frontend/js/vendor/jquery.slicknav.min.js')}}"></script>
        <!-- Nivo Slider JS -->
        <script src="{{asset('frontend/js/vendor/jquery.nivo.slider.pack.js')}}"></script>
        <!-- Letter Animation JS -->
		<script src="{{asset('frontend/js/vendor/letteranimation.min.js')}}"></script>
        <!-- Wow JS -->
		<script src="{{asset('frontend/js/vendor/wow.min.js')}}"></script>
		<!-- Contact JS -->
		<script src="{{asset('frontend/js/contact.js')}}"></script>
		<!-- Main JS -->
		<script src="{{asset('frontend/js/main.js')}}"></script>

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