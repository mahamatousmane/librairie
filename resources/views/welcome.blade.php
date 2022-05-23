<!DOCTYPE html>
<html lang="fr" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/img/fav.png')}}">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Librairie en lign</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="{{ asset('assets/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
</head>

<body>

    <!-- <div class="justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->


    <header id="header" id="home">
        <div class="container" style="color:red ;">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <img src="{{ asset('assets/img/logoElib4.png')}}" alt="" title="" width="100%" />
                </div>
                <nav id="nav-menu-container"><br>
                    <ul class="nav-menu">

                        <!-- The search bar -->
                        <li><input type="search" name="search-book" id="search" class="form-control">
                        </li>
                        <li class="menu-active"><a href="">Accueil</a></li>
                        <li><a href="">Nos Services</a></li>
                        <li><a href="#service">Nos Produit</a></li>
                        <li class="menu-has-children"><a href=" ">Connexion</a>
                            <ul>
                                <li><a href="{{ url('/login') }} ">Se cconnecter</a></li>
                                <li><a href="{{ url('/register') }}">S'inscrire</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->


    <!-- start banner Area -->
    <section class="banner-area" id="home">
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-center">
                <div class="banner-content col-lg-6 mt-5">
                    <div class="container">
                       <div class="row">
                           <div class="col-md-10" id="section-title">
                                <h5 class="text-white text-uppercase mb-0">B i e n V e n u S u r E l i b</h5> <br><br>
                                <h3 id="h3"> VENTE - ACHAT - ECHANGE </h3>
                                <p>elib est un site de vente, achat et éechange des livres en ligne</p>
                           </div>
                           <div class="col-md-2"></div>
                       </div>
                    </div>
                </div>
                <div class="banner-content col-lg-6 mt-5">
                   <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{ asset('assets/img/banner_2.png') }}" alt="" width="100%">
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start video-sec Area -->

    <!-- End video-sec Area -->

    <!-- End home-about Area -->

    <!-- Start service Area -->
    <section class="service-area section-gap" id="service">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 header-text">
                    <h1>Récommandés</h1>
                    <p>
                        Livres et documents actuellements disponible a vendre sur la platforme
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-unique-product">
                        <div class="desc">
                            <img class="img-fluid" src="{{ asset('assets/img/book.png')}}" alt="">
                            <h4>
                                Apple Watch White
                            </h4>
                            <h6>£399.00</h6>
                            <a class="text-uppercase primary-btn" href="#">Pre Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-unique-product">
                        <div class="desc">
                            <img class="img-fluid" src="{{ asset('assets/img/book.png')}}" alt="">
                            <h4>
                                Apple Watch White
                            </h4>
                            <h6>£399.00</h6>
                            <a class="text-uppercase primary-btn" href="#">Pre Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-unique-product">
                        <div class="desc">
                            <img class="img-fluid" src="{{ asset('assets/img/book.png')}}" alt="">
                            <h4>
                                Apple Watch White
                            </h4>
                            <h6>{{ __('') }}</h6>
                            <a class="text-uppercase primary-btn" href="#">Pre Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-unique-product">
                        <div class="desc">
                            <img class="img-fluid" src="{{ asset('assets/img/book.png')}}" alt="">
                            <h4>
                                Apple Watch White
                            </h4>
                            <h6>£399.00</h6>
                            <a class="text-uppercase primary-btn" href="#">Pre Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-unique-product">
                        <div class="desc">
                            <img class="img-fluid" src="{{ asset('assets/img/book.png')}}" alt="">
                            <h4>
                                Apple Watch White
                            </h4>
                            <h6>£399.00</h6>
                            <a class="text-uppercase primary-btn" href="#">Pre Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-unique-product">
                        <div class="desc">
                            <img class="img-fluid" src="{{ asset('assets/img/book.png')}}" alt="">
                            <h4>
                                Apple Watch White
                            </h4>
                            <h6>£399.00</h6>
                            <a class="text-uppercase primary-btn" href="#">Pre Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End service Area -->

    <!-- Start unique-feature Area -->
    <section class="unique-feature-area section-gap" id="unique">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10 text-white">Some Features that Made us Unique</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-unique-product">
                        <img class="img-fluid" src="img/u1.jpg" alt="">
                        <div class="desc">
                            <h4>
                                Apple Watch White
                            </h4>
                            <h6>£399.00</h6>
                            <a class="text-uppercase primary-btn" href="#">Pre Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-unique-product">
                        <img class="img-fluid" src="img/u2.jpg" alt="">
                        <div class="desc">
                            <h4>
                                Apple Watch White
                            </h4>
                            <h6>£399.00</h6>
                            <a class="text-uppercase primary-btn" href="#">Pre Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-unique-product">
                        <img class="img-fluid" src="img/u3.jpg" alt="">
                        <div class="desc">
                            <h4>
                                Apple Watch White
                            </h4>
                            <h6>£399.00</h6>
                            <a class="text-uppercase primary-btn" href="#">Pre Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-unique-product">
                        <img class="img-fluid" src="img/u4.jpg" alt="">
                        <div class="desc">
                            <h4>
                                Apple Watch White
                            </h4>
                            <h6>£399.00</h6>
                            <a class="text-uppercase primary-btn" href="#">Pre Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End unique-feature Area -->

    <!-- Start review Area -->
    <section class="review-area section-gap" id="review">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">Some Features that Made us Unique</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <h4>Cody Hines</h4>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <h4>Chad Herrera</h4>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <h4>Andre Gonzalez</h4>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <h4>Jon Banks</h4>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <h4>Landon Houston</h4>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <h4>Nelle Wade</h4>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End review Area -->

    <!-- Start faq Area -->
    <section class="faq-area section-gap" id="faq">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">Frequently Asked Questions</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-start">
                <div class="col-lg-6 faq-left">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Are your Templates responsive?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Does it have all the plugin as mentioned?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Can i use the these theme for my client?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                        Are your Templates responsive?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End faq Area -->
    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
                        </p>
                        <p class="footer-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
                <div class="col-lg-5  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div class="" id="mc_embed_signup">
                            <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <script src="{{ asset('assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{ asset('assets/js/easing.min.js')}}"></script>
    <script src="{{ asset('assets/js/hoverIntent.js')}}"></script>
    <script src="{{ asset('assets/js/superfish.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('assets/js/parallax.min.js')}}"></script>
    <script src="{{ asset('assets/js/mail-script.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
</body>

</html>
