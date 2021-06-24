<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16">

    <!--title-->
    <title>RAV - ORDERS</title>

    <!--build:css-->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- endbuild -->
</head>

<body>

    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="assets/img/logo-color.png" alt="logo" class="img-fluid" />
            <div class="thecube">
                <div class="cube c1"></div>
                <div class="cube c2"></div>
                <div class="cube c4"></div>
                <div class="cube c3"></div>
            </div>
        </div>
    </div>
    <!--preloader end-->
    <!--header section start-->
    <header class="header">
        <!--start navbar-->
        <nav class="navbar navbar-expand-lg fixed-top custom-nav">
            <div class="container">
                <a class="navbar-brand" href="javascript:void(0);" style="font-weight: 800">
                    {{-- <img src="assets/img/logo-color.png" alt="logo" class="img-fluid" /> --}}
                    PEDIDOS RESTAURANT RAV
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-menu"></span>
                </button>

                <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto menu">
                        <li><a href="#about" class="page-scroll">Inicio</a></li>
                        <li><a href="#features" class="page-scroll">Pedidos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--header section end-->

    <div class="main" id="about">

        <!--hero section start-->
        <section class="position-relative overflow-hidden hero-section-3 ptb-100">
            <!--animated circle shape start-->
            <div class="animated-shape-wrap">
                <div class="animated-shape-item"></div>
                <div class="animated-shape-item"></div>
                <div class="animated-shape-item"></div>
                <div class="animated-shape-item"></div>
                <div class="animated-shape-item"></div>
            </div>
            <!--animated circle shape end-->
            <img src="assets/img/combined-shape.svg" alt="s" class="shape-img-2">
            <img src="assets/img/shape-1.svg" alt="group shape" width="100" class="img-fluid group-shape-1">
            <img src="assets/img/shape-2.svg" alt="group shape" width="60" class="img-fluid group-shape-2">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6 col-lg-6">
                        <div class="hero-content-left pt-5">
                            <h1 class="font-weight-bold">PEDIDOS RESTAURANT RAV</h1>
                            <p class="lead">Gestion de pedidos.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="img-wrap">
                            {{-- <img src="assets/img/hero-image.svg" alt="hero" class="img-fluid"> --}}
                            <img src="{{ asset('assets/images/Restaurant _Isometric.svg') }}" alt="hero" class="img-fluid" width="500">
                        </div>
                    </div>
                </div>
            </div>

            <!--shape image start-->
            <img src="assets/img/hero-bg-shape-4.svg" class="shape-image" alt="shape image">
            <!--shape image end-->
        </section>
        <!--hero section end-->
        <!--counter section start-->
        <section class="counter-section gradient-bg ptb-40" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <div class="text-white p-2 count-data text-center my-3">
                            <span class="fas fa-users icon-size-lg mb-2"></span>
                            <h3 class="count-number mb-1 text-white font-weight-bolder">{{ count($reservations) }}</h3>
                            <span>Total de pedidos</span>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="text-white p-2 count-data text-center my-3">
                            <span class="fas fa-smile icon-size-lg mb-2"></span>
                            <h3 class="count-number mb-1 text-white font-weight-bolder">{{ count($reservations->where('state_order', 0)) }}</h3>
                            <span>Pedidos pendientes</span>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="text-white p-2 count-data text-center my-3">
                            <span class="fas fa-mug-hot icon-size-lg mb-2"></span>
                            <h3 class="count-number mb-1 text-white font-weight-bolder">{{ count($reservations->where('state_order', 1)) }}</h3>
                            <span>Pedidos atendídos</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--counter section end-->

        <!--about us section start-->
        {{-- <section id="about" class="ptb-100 gray-light-bg ">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-12 col-lg-6">
                        <div class="feature-contents section-heading">
                            <h2>The Most Useful Resource Created For Designers</h2>
                            <p>Objectively deliver professional value with diverse web-readiness.
                                Collaboratively transition wireless customer service without goal-oriented catalysts for
                                change. Collaboratively.</p>

                            <ul class="check-list-wrap py-3">
                                <li>The only way your business can to the information.</li>
                                <li>Your app will be used by a host and for different.</li>
                                <li>Intrinsicly innovate top-line collaborative benefits.</li>
                                <li>Efficiently redefine value-added sources without.</li>
                                <li>The only way your business can evolve is in information.</li>
                                <li>The only way your business can evolve is in information.</li>
                            </ul>

                            <div class="action-btns mt-3">
                                <a href="#" class="btn btn-brand-02 mr-3">Get Start Now</a>
                                <a href="#" class="btn btn-outline-brand-02">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="mask-image">
                            <img src=assets/img/about1.jpg class="img-fluid" alt="about">
                            <div class="item-icon video-promo-content">
                                <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="popup-youtube video-play-icon text-center m-auto"><span class="ti-control-play"></span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--about us section end-->

        <section class="our-blog-section ptb-100">
            <div class="container">
                <h2>Lista de pedidos</h2>
                <div class="row">
                    @foreach ($reservations as $reservation)
                    <div class="col-md-6 col-lg-4">
                        <div class="single-blog-card card gray-light-bg border-0 shadow-sm my-3">
                            <div class="blog-img position-relative">
                                <img src="assets/img/blog/4.jpg" class="card-img-top" alt="blog">
                                <div class="meta-date {{ $reservation->state_order == 1?'bg-success':'bg-danger' }}">
                                    {{-- <strong>24</strong>
                                    <small>Apr</small> --}}
                                    @if ($reservation->state_order == 1)
                                        <i class="fas fa-check" style="margin-top: 12px; font-size: 26px;"></i>
                                    @else
                                        <i class="fas fa-pause-circle" style="margin-top: 12px; font-size: 26px;"></i>
                                    @endif
                                </div>
                            </div>
                            <div class="card-body">
                                <h3 class="h5 mb-2 card-title"><a href="#">{{ $reservation->product_name }}</a></h3>
                                <p class="card-text">
                                    <li class="list-inline-item"><i class="fas fa-heart mr-2 text-danger"></i><span>Número de mesa: </span>
                                        {{ $reservation->table_number }}
                                    </li>
                                    <li class="list-inline-item"><i class="fas fa-money-check-alt mr-2 text-success"></i><span>Precio: </span>
                                        {{ $reservation->product_price }}
                                    </li>
                                </p>
                                {{-- <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!--pagination start-->
                <div class="row">
                    <div class="col-md-12">
                        <nav class="custom-pagination-nav mt-4">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-left"></span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                {{-- <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li> --}}
                                <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--pagination end-->

            </div>
        </section>

        <!--screenshots section start-->
        {{-- <section id="screenshots" class="screenshots-section pb-100  ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Apps Screenshots</h2>
                            <p>Proactively impact value-added channels via backend leadership skills. Efficiently revolutionize worldwide networks whereas strategic catalysts for change. </p>
                        </div>
                    </div>
                </div>
                <div class="screenshot-wrap">
                    <div class="screenshot-frame"></div>
                    <div class="screen-carousel owl-carousel owl-theme dot-indicator">
                        <img src="assets/img/01.jpg" class="img-fluid" alt="screenshots" />
                        <img src="assets/img/02.jpg" class="img-fluid" alt="screenshots" />
                        <img src="assets/img/03.jpg" class="img-fluid" alt="screenshots" />
                        <img src="assets/img/04.jpg" class="img-fluid" alt="screenshots" />
                        <img src="assets/img/05.jpg" class="img-fluid" alt="screenshots" />
                        <img src="assets/img/06.jpg" class="img-fluid" alt="screenshots" />
                    </div>
                </div>
            </div>
        </section> --}}


        <!--screenshots section end-->
    </div>

    <!--footer section start-->
    <!--when you want to remove subscribe newsletter container then you should remove .footer-with-newsletter class-->
    <footer class="footer-1 gradient-bg ptb-60 footer-with-newsletter">

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 mb-4 mb-md-4 mb-sm-4 mb-lg-0">
                    <a href="#" class="navbar-brand mb-2">
                        <img src="assets/img/logo-white.png" alt="logo" class="img-fluid">
                    </a>
                    <br>
                    <p>RAV, proyecto.</p>
                </div>
            </div>
        </div>
        <!--end of container-->
    </footer>
    <!--footer section end-->
    <!--scroll bottom to top button start-->
    <div class="scroll-top scroll-to-target primary-bg text-white" data-target="html">
        <span class="fas fa-hand-point-up"></span>
    </div>
    <!--scroll bottom to top button end-->
    <!--build:js-->
    <script src="{{ asset('assets/js/vendors/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.rcounterup.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!--endbuild-->
</body>


<!-- Mirrored from apdash.themetags.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Feb 2021 20:57:29 GMT -->
</html>