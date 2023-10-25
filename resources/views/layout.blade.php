<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hope Pathway</title>

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="site/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="site/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="site/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="site/assets/images/favicon/site.webmanifest">

    <!-- plugins styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+2:400,500,600,700,800%7CLato:100,300,400,700,900%7COpen+Sans:300,400,600,700,800%7CRoboto:300,400,500,700,900%7CRubik:300,400,500,700,900&amp;display=swap">
    <link rel="stylesheet" href="site/assets/css/animate.css">
    <link rel="stylesheet" href="site/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="site/assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="site/assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="site/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="site/assets/css/hover-min.css">
    <link rel="stylesheet" href="site/assets/css/swiper.min.css">
    <link rel="stylesheet" href="site/assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="site/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="site/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="site/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="site/assets/css/oberlin-icons.css">

    <!-- template styles -->
    <link rel="stylesheet" href="site/assets/css/style.css">
    <link rel="stylesheet" href="site/assets/css/responsive.css">

</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div><!-- /.preloader -->

    <div class="page-wrapper">

        <section class="topbar-one">
            <div class="container">
                <div class="topbar-one__left">
                    <a href="#">
                        <i class="fa fa-map-marker-alt"></i>
                        50 Cranbrook Drive
                        Sundon Park
                        Luton
                        LU3 3EW
                    </a>
                    <a href="#">
                        <i class="far fa-clock"></i>
                        Mon - Sat 9.00 - 18.00
                    </a>
                    <a href="tel:+251-235-3256">
                        <i class="far fa-phone"></i>
                        +251-235-3256
                    </a>
                </div><!-- /.topbar-one__left -->

                <div class="topbar-one__right">
                    <div class="topbar-one__social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>


                    </div><!-- /.topbar-one__social -->
                </div><!-- /.topbar-one__right -->
            </div><!-- /.container -->
        </section><!-- /.topbar-one -->

        <nav class="main-nav-one stricky">
            <div class="container">
                <div class="inner-container">
                    <div class="logo-box">
                        <a href="index">
                            <img style="height: 80px; max-width:150px;" src="https://www.hopepathway.uk/wp-content/uploads/2021/04/cropped-Blood-Donation-Logo-4.png" alt="" width="219">
                        </a>
                        <a href="#" class="side-menu__toggler"><i class="fa fa-bars"></i></a>
                    </div><!-- /.logo-box -->
                    <div class="main-nav__main-navigation">
                        <ul class="main-nav__navigation-box">

                            <li><a href="/index">Home</a></li>
                            <li><a href="/about-us">About</a></li>
                            <li class="dropdown">
                                <a href="/services">Our Services</a>
                                <ul>

                                    <li><a href="/index">Planned Placement</a></li>
                                    <li><a href="/index">Emergency Placement</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="/index">Our Process</a>
                                <ul>
                                    <li><a href="/index">Admission Process</a></li>
                                    <li><a href="/index">Settling In</a></li>
                                    <li><a href="/index">Accomodation</a></li>


                                </ul>
                            </li>



                            <li><a href="/index">Contact</a></li>

                        </ul><!-- /.main-nav__navigation-box -->
                    </div><!-- /.main-nav__main-navigation -->
                    <div class="main-nav__right">
                        <a href="/index" class="thm-btn main-nav-one__btn"><i class="far fa-clock"></i>
                            Join Now</a><!-- /.thm-btn main-nav-one__btn -->
                    </div><!-- /.main-nav__right -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </nav><!-- /.main-nav-one -->

            @yield('content')

        <footer class="site-footer">
            <div class="site-footer__upper">
                <div class="container">
                    <img src="site/assets/images/shapes/upper-footer-shape-1-1.png" class="site-footer__upper-moc" alt="">
                    <div class="site-footer__logo">
                        <a href="index"><img src="https://www.hopepathway.uk/wp-content/uploads/2021/04/cropped-Blood-Donation-Logo-4.png" width="219" alt=""></a>
                    </div><!-- /.site-footer__logo -->
                    <div class="site-footer__social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>


                    </div><!-- /.site-footer__social -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__upper -->
            <div class="site-footer__main">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="footer-widget footer-widget__about">
                                <h3 class="footer-widget__title">About</h3><!-- /.footer-widget__title -->
                                <p>We are a compassionate organization dedicated to transforming lives, offering support, and fostering hope for those facing diverse challenges.</p>
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-xl-4 col-lg-6 col-md-6 -->
                        <div class="col-xl-2 col-lg-6 col-md-6">
                            <div class="footer-widget footer-widget__links">
                                <h3 class="footer-widget__title">Services</h3><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__links-list">
                                    <li><a href="about-1">About Us</a></li>
                                    <li><a href="about-1">Admission Process</a></li>



                                    <li><a href="career">Jobs</a></li>
                                </ul><!-- /.list-unstyled footer-widget__links-list -->
                            </div><!-- /.footer-widget footer-widget__links -->
                        </div><!-- /.col-xl-2 col-lg-6 col-md-6 -->
                        <!-- /.col-xl-3 col-lg-6 col-md-6 -->

                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="footer-widget footer-widget__contact">
                                <h3 class="footer-widget__title">Contacts</h3><!-- /.footer-widget__title -->
                                <p>50 Cranbrook Drive
                                    Sundon Park
                                    Luton
                                    LU3 3EW</p>
                                <p><a href="tel:+2(305)-587-3407">+2(305) 587-3407</a></p>
                                <p><a href="mailto:info@oberlin.com">support@hopepathway.co.uk</a></p>
                            </div><!-- /.footer-widget footer-widget__contact -->
                        </div><!-- /.col-xl-3 col-lg-6 col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__main -->
            <div class="site-footer__bottom">
                <div class="container">
                    <p>vicSystems Technologies Ltd. <i class="far fa-copyright"></i> 2023 All Right Reserved</p>
                    <ul class="list-unstyled site-footer__menu">
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul><!-- /.site-footer__menu -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom -->
        </footer><!-- /.site-footer -->


    </div><!-- /.page-wrapper -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <div class="side-menu__block">

        <a href="#" class="side-menu__toggler side-menu__close-btn"><i class="fa fa-times"></i>
            <!-- /.fa fa-close --></a>

        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">

            <a href="index" class="side-menu__logo"><img src="https://www.hopepathway.uk/wp-content/uploads/2021/04/cropped-Blood-Donation-Logo-4.png" alt=""
                    width="190"></a>
            <nav class="mobile-nav__container">
                <!-- content is loading via js -->
            </nav>
            <p class="side-menu__block__copy">(c) 2023 <a href="#">vicSystems Technologies Ltd.</a> - All rights reserved.</p>
            <div class="side-menu__social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>

                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>

            </div>
        </div><!-- /.side-menu__block-inner -->
    </div><!-- /.side-menu__block -->

    <!-- template scripts -->
    <script src="site/assets/js/jquery.min.js"></script>
    <script src="site/assets/js/bootstrap.bundle.min.js"></script>
    <script src="site/assets/js/bootstrap-datepicker.min.js"></script>
    <script src="site/assets/js/bootstrap-select.min.js"></script>
    <script src="site/assets/js/isotope.js"></script>
    <script src="site/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="site/assets/js/jquery.circleType.js"></script>
    <script src="site/assets/js/waypoints.min.js"></script>
    <script src="site/assets/js/jquery.counterup.min.js"></script>
    <script src="site/assets/js/jquery.lettering.min.js"></script>
    <script src="site/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="site/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="site/assets/js/jquery.validate.min.js"></script>
    <script src="site/assets/js/owl.carousel.min.js"></script>
    <script src="site/assets/js/TweenMax.min.js"></script>
    <script src="site/assets/js/wow.min.js"></script>
    <script src="site/assets/js/swiper.min.js"></script>
    <script src="site/assets/js/theme.js"></script>
</body>


<!-- Mirrored from html.tonatheme.com/2021/oberlin/index-5 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Oct 2023 09:41:44 GMT -->
</html>
