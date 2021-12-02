<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="themefisher.com">

    <title>BBCS.WORLD</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico"/>

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body id="top">

<header>
    <div class="header-top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <ul class="top-bar-info list-inline-item pl-0 mb-0">
                        <li class="list-inline-item"><a href="mailto:ahmedali0786@googlemail.com"><i
                                    class="icofont-support-faq mr-2"></i>ahmedali0786@googlemail.com</a></li>
                        <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>British Bangladeshi Civil
                            Society, UK
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                        <a href="tel:+44 7780 262130">
                            <span>Call Now : </span>
                            <span class="h4">+44 7780 262130</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navigation" id="navbar">
        <div class="container">
            <a class="navbar-brand d-inline-block" href="{{ route('app.index') }}">
                <img src="images/bcsuk_logo.PNG" alt="" class="img-fluid" height="50px" width="80px">

            </a>
            <a href="{{ route('app.index') }}">
                <h1>BBCS.WORLD</h1>
            </a>


            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
                    aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icofont-navigation-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('app.index') }}">Home</a>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{ route('app.contact') }}">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('app.gallery') }}">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('app.project') }}">Our Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('app.membership') }}">Membership</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@yield('content')
<!-- footer Start -->
<footer class="footer section gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mr-auto col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <div class="logo mb-4">
                        <img src="images/bcsuk_logo.PNG" alt="" class="img-fluid">
                        <h1>BBCS.WORLD</h1>
                    </div>


                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="widget mb-5 mb-lg-0">

                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="widget mb-5 mb-lg-0">

                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="widget widget-contact mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">Get in Touch</h4>
                    <div class="divider mb-4"></div>

                    <div class="footer-contact-block mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-email mr-3"></i>
                            <span class="h6 mb-0">Support Available for 24/7</span>
                        </div>
                        <h4 class="mt-2"><a href="mailto:ahmedali0786@googlemail.com">ahmedali0786@googlemail.com</a>
                        </h4>
                    </div>

                    <div class="footer-contact-block">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-support mr-3"></i>
                            <span class="h6 mb-0">Always Open</span>
                        </div>
                        <h4 class="mt-2"><a href="tel:+44 7780 262130">+44 7780 262130
                            </a></h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-btm py-4 mt-5">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="copyright text-white">
                        &copy; Copyright Reserved to <span class="text-white"></span> by <a
                            href="https://invoicepedia.com/" target="_blank" class="text-white">Create Invoice
                            Online</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="subscribe-form text-lg-right mt-5 mt-lg-0">
                        <form action="#" class="subscribe">
                            <input type="text" class="form-control" placeholder="Your Email address">
                            <a href="#" class="btn btn-main-2 btn-round-full">Subscribe</a>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <a class="backtop js-scroll-trigger" href="#top">
                        <i class="icofont-long-arrow-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>


<!--
Essential Scripts
=====================================-->


<!-- Main jQuery -->
<script src="plugins/jquery/jquery.js"></script>
<!-- Bootstrap 4.3.2 -->
<script src="plugins/bootstrap/js/popper.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/counterup/jquery.easing.js"></script>
<!-- Slick Slider -->
<script src="plugins/slick-carousel/slick/slick.min.js"></script>
<!-- Counterup -->
<script src="plugins/counterup/jquery.waypoints.min.js"></script>

<script src="plugins/shuffle/shuffle.min.js"></script>
<script src="plugins/counterup/jquery.counterup.min.js"></script>
<!-- Google Map -->
<script src="plugins/google-map/map.js"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

<script src="js/script.js"></script>
<script src="js/contact.js"></script>
<script>
    $(document).ready(function () {

        let url = "https://www.googleapis.com/youtube/v3/videos?part=status&id=xZjosn2u1gA&key=AIzaSyCJCyUD8gz-FEvEcrEcS9RdwC8tZUdlmhw";
        /* $.ajax({
             url: "https://www.googleapis.com/youtube/v3/videos?part=status&id=xZjosn2u1gA&key=AIzaSyCJCyUD8gz-FEvEcrEcS9RdwC8tZUdlmhw", success: function (result) {
                 console.log('Test', result)
             }
         });*/
        fetch(url).then(response => response.json())
            .then(function (data) {
                console.log('test', data.items[0].status.embeddable)
            });


        $('.grid').masonry({
            // options
            itemSelector: '.grid-item',
            columnWidth: 200
        });
    })
    var elem = document.querySelector('.grid');
    var msnry = new Masonry(elem, {
        // options
        itemSelector: '.grid-item',
        columnWidth: 200
    });

    // element argument can be a selector string
    //   for an individual element
    var msnry = new Masonry('.grid', {
        // options
    });
</script>
</body>
</html>
