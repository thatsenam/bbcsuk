
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://html.softtechitltd.com/sympatho/sympatho/assets/css/all.css">
    <!-- <script src="https://html.softtechitltd.com/sympatho/sympatho/assets/js/vendor/fontawesome.min.js"></script> -->
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://html.softtechitltd.com/sympatho/sympatho/assets/css/animate.css">
    <link rel="stylesheet" href="https://html.softtechitltd.com/sympatho/sympatho/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://html.softtechitltd.com/sympatho/sympatho/assets/css/meanmenu.css">
    <link rel="stylesheet" href="https://html.softtechitltd.com/sympatho/sympatho/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="https://html.softtechitltd.com/sympatho/sympatho/assets/css/slick.css">
    <link rel="stylesheet" href="https://html.softtechitltd.com/sympatho/sympatho/assets/css/nice-select.css">
    <link rel="stylesheet" href="https://html.softtechitltd.com/sympatho/sympatho/assets/css/countrySelect.css">
    <link rel="stylesheet" href="https://html.softtechitltd.com/sympatho/sympatho/assets/css/progress-bar.css">
    <link rel="stylesheet" href="https://html.softtechitltd.com/sympatho/sympatho/assets/css/style.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body>
<!-- Preloader Starts -->
<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
</div>

<!-- ScrollTop Button -->
<div class="go-top-btn"><span><i class="fas fa-long-arrow-alt-up"></i></span></div>

<!-- Header Section -->
<header class="header-section home2-header">
    <div class="container vector-container">
        <div class="row align-items-center" id="mobile-menu-container">
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="logo">
                    <a href=""><img src="{{ asset('images/bbcsuklogo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-7 md-none">
                <div class="navigation">

                    <nav id="mobile-menu">
                        <ul class="main-menu">

                            <li><a href="#">Home</a></li>
                            <li><a href="#">Blog</a></li>

                            <li><a href="#">contact us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                <ul class="nav-right-btn">
                    <li><a href="{{ route('app.donate_now') }}">Donation</a></li>
                </ul>
            </div>
        </div>
        <div class="mobile-menu"></div>
    </div>
    @yield('hero')
</header>
@yield('content')
<footer class="footer-section padding-top-90">
    <div class="container vector-container">
        <img src="https://html.softtechitltd.com/sympatho/sympatho/assets/images/yellow-vector.png" class="yellow-vector" alt="">
        <img src="https://html.softtechitltd.com/sympatho/sympatho/assets/images/dot-vector.png" class="dot-vector" alt="">
        <img src="https://html.softtechitltd.com/sympatho/sympatho/assets/images/red-vector.png" class="red-vector" alt="">
        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="footer-first">
                    <a href="home2.html"><img src="https://html.softtechitltd.com/sympatho/sympatho/assets/images/logo.png" class="logo" alt=""></a>
                    <p class="home2-p-color">Lorem ipsum dolor sit ammet lorem ipsum dolor sit ammet lorem ipsum
                        dolor sit ammet lorem ipsum dolor ssit ammet lorem ipsum dolor sit ammet</p>
                    <div class="footer-social">
                        <a href="#">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="other-links">
                    <h3 class="home2-heading-color">Other Link</h3>
                    <nav class="footer-nav">
                        <ul>
                            <li><a href="#">Nonprofit Resources</a></li>
                            <li><a href="#">Corporate Giving Resources</a></li>
                            <li><a href="#">Corporate Gift Cards</a></li>
                            <li><a href="#">CSR made Simple</a></li>
                            <li><a href="#">Start an Application</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="donors-link">
                    <h3 class="home2-heading-color">Donors</h3>
                    <nav class="footer-nav">
                        <ul>
                            <li><a href="#">Give or Redeem Gift Cards</a></li>
                            <li><a href="#">Donate in Honor</a></li>
                            <li><a href="#">Project of the Month Club</a></li>
                            <li><a href="#">Start a Fundraiser</a></li>
                            <li><a href="#">Donor Resources</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-last">
                    <h3 class="home2-heading-color">Get in Touch!</h3>
                    <div class="widget-bottom">
                        <img src="https://html.softtechitltd.com/sympatho/sympatho/assets/images/vector-09.png" alt="">
                        <div class="widget-content">
                            <p class="home2-p-color">287 N Willow St. Trenton, NJ, 08618 (Unlisted).</p>
                        </div>
                    </div>
                    <div class="widget-bottom">
                        <img src="https://html.softtechitltd.com/sympatho/sympatho/assets/images/home2-footer-mail-icon.png" alt="">
                        <div class="widget-content">
                            <p class="home2-p-color">supportsympatho@.com infosympaho@.com</p>
                        </div>
                    </div>
                    <div class="widget-bottom">
                        <img src="https://html.softtechitltd.com/sympatho/sympatho/assets/images/vector78.png" alt="">
                        <div class="widget-content">
                            <p class="home2-p-color">Phone : 088 023546 879 Telephone : 65879046</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>
@yield('js')
<!-- Javascript Files -->
<script src="https://html.softtechitltd.com/sympatho/sympatho/assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="https://html.softtechitltd.com/sympatho/sympatho/assets/js/vendor/bootstrap.min.js"></script>
<script src="https://html.softtechitltd.com/sympatho/sympatho/assets/js/vendor/slick.min.js"></script>
<script src="https://html.softtechitltd.com/sympatho/sympatho/assets/js/vendor/counterup.min.js"></script>
<script src="https://html.softtechitltd.com/sympatho/sympatho/assets/js/vendor/waypoints.min.js"></script>
<script src="https://html.softtechitltd.com/sympatho/sympatho/assets/js/vendor/easing.min.js"></script>
<script src="https://html.softtechitltd.com/sympatho/sympatho/assets/js/vendor/wow.min.js"></script>
<script src="https://html.softtechitltd.com/sympatho/sympatho/assets/js/vendor/jquery.magnific-popup.min.js"></script>
<script src="https://html.softtechitltd.com/sympatho/sympatho/assets/js/vendor/jquery.nice-select.min.js"></script>
<script src="https://html.softtechitltd.com/sympatho/sympatho/assets/js/vendor/jquery-ui.js"></script>
<script src="https://html.softtechitltd.com/sympatho/sympatho/assets/js/vendor/isotope.min.js"></script>
<script src="https://html.softtechitltd.com/sympatho/sympatho/assets/js/vendor/countrySelect.js"></script>
<script src="https://html.softtechitltd.com/sympatho/sympatho/assets/js/vendor/countdown.js"></script>
<script src="https://html.softtechitltd.com/sympatho/sympatho/assets/js/vendor/progress-bar.js"></script>
<script src="https://html.softtechitltd.com/sympatho/sympatho/assets/js/vendor/jquery.meanmenu.js"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
