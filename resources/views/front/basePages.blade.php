<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../src/styles/dist/output.css">
	<link rel="stylesheet" href="css/output.css">					

    <link rel="stylesheet" href="../src/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <title>elib | Home</title>
</head>
<body>
    <!-- Tackling the project based on accessabilty -->
    <!-- Header section starts hers -->
    <header class="header">
        <!-- Navbar section in here -->
        <div class="nav-wrapper tw-max-w-7xl tw-my-6 tw-mx-auto tw-flex tw-items-center">
            <nav class="nav tw-w-full">
                <div class="row tw-flex tw-justify-between">
                    <div class="col-2"><div class="logo"><img class="tw-ml-32" src="img/logoElib4.png" alt="first student on the banner"></div></div>
                    <div class="col-2 tw-flex">
                        <div class="serch tw-relative">
                            <!-- The search bar -->
                            <input type="search" name="search-book" id="search" class="tw-bg-d-gray-4 tw-rounded-3xl !tw-py-1">
                            <i class="fa fa-search tw-absolute tw-top-[7px] tw-left-[170px] tw-text-native-blue"></i>
                        </div>
                        <div class="mobile-container">
                            <ul class="navlink-container tw-flex">
                                <li class="margin-40"><a href="{{ route('accueil.index') }}">Accueil</a></li>
                                <li class="margin-40"><a href="{{ route('service.index') }}">Nos Service <i class="fa fa-angle-down tw-ml-1"></a></i>
                                    <ul class="dropdown-card tw-p-2 tw-pl-6 tw-mt-5">
                                        <li class="tw-mt-5"><a href="#">Vente</a></li>
                                        <li class="tw-mt-5"><a href="#">AChats</a></li>
                                        <li class="tw-mt-5 tw-mb-4"><a href="#">Echange</a></li>
                                    </ul>
                                </li>
                                <li class="margin-40"><a href="{{ route('produit.index') }}">Nos produits </a>
                                </li>
                                <li class="margin-40"><a href="#" class="tw-text-wild-red">Se connecter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Hero section starts here -->
        <div class="hero">
            <div class="hero-wrapper tw-flex tw-items-center tw-w-full tw-h-full tw-max-w-5xl tw-mx-auto tw-my-0">
                <div class="hero-text flex-text">
                    <h5 class="small-text tracking tw-text-white tw-opacity-50 tw-font-light">Bienvenue sur elib</h5>
                    <h1 class="tw-text-3xl tw-font-bold tw-text-white">ECHANGE - VENTE - ACHAT</h1>
                    <h4 class="hero-paragraph tw-my-8">elib est un site de vente, achat et echange du livre en <span class="tw-text-w-red-3">en ligne</span></h4>

                    <a href="#" class="hero-cta tw-text-white">S'incsrire</a>
                </div>
                <div class="hero-img"></div>
            </div>
        </div>
        <!-- hero section ends here
         -->
    </header>
@yield('content')

    

        <!-- slider section -->
        <section class="slider-section tw-my-36">
            <div class="elib-banner tw-max-w-5xl tw-my-0 tw-mx-auto">
                <div class="banner-slider tw-w-full">
                    <div class="slider-item tw-flex tw-justify-between tw-w-full tw-items-center">
                        <div class="text">
                            <h3 class="tw-text-2xl tw-font-semibold tw-text-native-blue">Achetez,</h3>
                            <h3 class="tw-text-2xl tw-font-semibold tw-text-native-blue">Echangez</h3>
                            <h3 class="tw-text-2xl tw-font-semibold tw-text-native-blue">Vendez</h3>
                            <h3 class="tw-text-2xl tw-font-semibold tw-text-native-blue">Vos livres en toute securite</h3>
                            <h3 class="tw-text-2xl tw-font-semibold tw-text-native-blue">sur elib</h3>

                            <a href="#" class="hero-cta tw-text-white">S'incsrire</a>
                        </div>
                        <div class="slider-img">
                            <img class="tw-ml-32" src="img/banner_1.png" alt="first student on the banner">
                        </div>
                    </div>
                </div>
            </div>
        </section>

     


    <!-- Footer section -->
    <footer class="footer tw-w-full tw-bg-native-blue tw-py-12 tw-mt-32">
        <div class="footer-wrapper tw-max-w-5xl tw-mx-auto tw-my-0">
            <div class="row tw-flex tw-justify-between tw-items-center">
                <div class="col-2">
                    <div class="logo tw-text-2xl tw-font-semibold tw-text-white"><img class="tw-ml-32" src="img/logoElib4.png" alt="first student on the banner"></div>
                    <!-- site map -->
                    <ul class="footer-link tw-flex tw-space-x-16 tw-text-white">
                        <li><a herf="#">Home</a></li>
                        <li><a herf="#">Nos Services</a></li>
                        <li><a herf="#">Nos Livres</a></li>
                    </ul>
                </div>
                <div class="col-2 ">
                    <div class="social-icon">
                        <span class="icons tw-flex tw-justify-end tw-w-full">
                            <i class="fa fa-phone tw-p-2 tw-ml-2 tw-text-center tw-bg-white tw-text-native-blue tw-rounded-2xl"></i>
                            <i class="fa fa-instagram tw-p-2 tw-ml-2  tw-text-center tw-bg-white tw-text-native-blue tw-rounded-2xl"></i>
                            <i class="fa fa-facebook tw-text-center tw-p-2 tw-ml-2 tw-bg-white tw-text-native-blue tw-rounded-3xl"></i>
                        </span>
                    </div>
                    <div class="play-store tw-w-full tw-flex tw-justify-end tw-my-2">
                        <img src="img/find_us.png" alt="Get play store on playstore" srcset="" width="100">
                    </div>
                    <small class="copy-right tw-text-white">&copy; 2022 elib. Tout droits reserves</small>
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>