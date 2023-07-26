<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home | Codetechbd</title>
    <link rel="shortcut icon" href="logo/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--google font-->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Open+Sans:wght@400;600;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <!--font-awesome-->
    <link rel="stylesheet" href="{{asset('frontend')}}/asset/css/font-awesome.min.css">
    <!--slick.css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/asset/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/asset/css/slick.css">
    <!--slick.theme.css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/asset/css/slick-theme.css">
    <!--uikit.min.css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/asset/css/uikit.min.css">
    <!--animate.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/asset/css/bootstrap.min.css">
    <!--style.css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/asset/css/style.css">
    <!--responsive.css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/asset/css/responsive.css">
</head>

<body>
    <!-- preloader start -->
    <div id="pre-loader"> <img src="{{asset('frontend')}}/asset/images/preloader-120.svg" alt=""> </div>
    <!-- preloader end -->

    <!--start header top-->
    <section class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="ht-email">
                        <span class="mr-3"><i class="fa fa-phone mr-1"></i>+917404606419</span>
                        <span><i class="fa fa-envelope mr-1"></i> info@codetechbd.com</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ht-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end header top-->

  <!-- Include header blade -->
  @include('frontend.layouts.header')


    @yield('content')


    <!--start footer section-->
    @include('frontend.layouts.footer')
    <!--end footer section-->

    <!--copyright-->
    <div class="copyright wow animate__animated animate__fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col">
                    <span>2020 © All Rights Reserved. Powered by <a class="td" href="#" target="_blank">Codetechbd</a></span>
                </div>
            </div>
        </div>
    </div>
    <!--copyright-->


    <!--jquery.min.js-->
    <script src="{{asset('frontend')}}/asset/js/jquery-3.4.1.min.js"></script>
    <!--popper.min.js-->
    <script src="{{asset('frontend')}}/asset/js/popper.min.js"></script>
    <!--bootstrap.min.js-->
    <script src="{{asset('frontend')}}/asset/js/bootstrap.min.js"></script>
    <!--main.js-->
    <script src="{{asset('frontend')}}/asset/js/main.js"></script>
    <!--slick.js-->
    <script src="{{asset('frontend')}}/asset/js/slick.js"></script>
    <!--owl.carousel.js-->
    <script src="{{asset('frontend')}}/asset/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset('frontend')}}/asset/js/jquery.scrollUp.min.js"></script>
    <script src="{{asset('frontend')}}/asset/js/wow.min.js"></script>
    <!--waypoints.min.js-->
    <script src="{{asset('frontend')}}/asset/js/jquery.waypoints.min.js"></script>
    <!--counterup.min.js-->
    <script src="{{asset('frontend')}}/asset/js/jquery.counterup.min.js"></script>
    <!--uikit-icons.js-->
    <script src="{{asset('frontend')}}/asset/js/uikit-icons.js"></script>
    <!--uikit.min.js-->
    <script src="{{asset('frontend')}}/asset/js/uikit.min.js"></script>
    <script src="{{asset('frontend')}}/asset/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('frontend')}}/asset/js/mixitup.min.js"></script>

    <script>
        $('.parent-container').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image'
            // other options
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.zoom').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });

            var mixer = mixitup(".mixit-js");
        });
    </script>


    <script>
        $(document).ready(function() {

            /*wow.js*/
            new WOW().init();

            /*mobile menu*/
            $('.menu-icon').on('click', function() {
                $('.mobile-menu').toggleClass('mobile-menu-active');
            });
            $('.mm-ci').on('click', function() {
                $('.mobile-menu').toggleClass('mobile-menu-active');
            });


        });
    </script>

    <script>
        /* nav*/
        $(window).scroll(function() {
            $('header').toggleClass('scrolled', $(this).scrollTop() > 70);
        });

        // Preloader Start
        var AUTOFIREBOX = {};
        var $window = $(window);

        AUTOFIREBOX.preloader = function() {
            $("#load").fadeOut();
            $('#pre-loader').delay(0).fadeOut('slow');
        };

        $window.on("load", function() {
            AUTOFIREBOX.preloader();
        }); // Preloader End

        // scrollToTop
        $.scrollUp({
            scrollName: 'scrollUp', // Element ID
            topDistance: '300', // Distance from top before showing element (px)
            topSpeed: 300, // Speed back to top (ms)
            animation: 'fade', // Fade, slide, none
            animationInSpeed: 200, // Animation in speed (ms)
            animationOutSpeed: 200, // Animation out speed (ms)
            scrollText: '<i class="fa fa-angle-up"></i>', // Text for element
            activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        });
    </script>

    <script>
        $(document).ready(function() {
            // Add minus icon for collapse element which is open by default
            $(".collapse.show").each(function() {
                $(this).prev(".menu-link").find(".fa-minus").addClass("fa-minus").removeClass("fa-plus");
            });

            // Toggle plus minus icon on show hide of collapse element
            $(".collapse").on('show.bs.collapse', function() {
                $(this).prev(".menu-link").find(".fa-plus").removeClass("fa-plus").addClass("fa-minus");
            }).on('hide.bs.collapse', function() {
                $(this).prev(".menu-link").find(".fa-minus").removeClass("fa-minus").addClass("fa-plus");
            });
            /*mobile-menu-click*/
            $('.mmenu-btn').click(function() {
                $(this).toggleClass("menu-link-active");

            });
        });
    </script>



</body>

</html>
