<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Homie</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description"
        content="Urdan Minimal eCommerce Bootstrap 5 Template is a stunning eCommerce website template that is the best choice for any online store.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="https://htmldemo.hasthemes.com/urdan/index.html" />

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Urdan - Minimal eCommerce HTML Template" />
    <meta property="og:url" content="https://htmldemo.hasthemes.com/urdan/index.html" />
    <meta property="og:site_name" content="Urdan - Minimal eCommerce HTML Template" />
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#" />
    <meta property="og:description"
        content="Urdan Minimal eCommerce Bootstrap 5 Template is a stunning eCommerce website template that is the best choice for any online store." />
    <!-- Add site Favicon -->
    <link rel="icon" href="{{ asset('assets/images/favicon/cropped-favicon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('assets/images/favicon/cropped-favicon-192x192.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon/cropped-favicon-180x180.png') }}" />
    <meta name="msapplication-TileImage" content="{{ asset('assets/images/favicon/cropped-favicon-270x270.png') }}" />

    <!-- All CSS is here
 ============================================ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">


    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/pe-icon-7-stroke.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/easyzoom.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slinky.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css?ver=1.0.6') }}" />


    <link rel="stylesheet" href="{{ asset('assets/css/colors.css?ver=1.0.6') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/base.css?ver=1.0.6') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/utilidades.css?ver=1.0.6') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css?ver=1.0.6') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/loading.css?ver=1.0.6') }}" />

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireStyles

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>



</head>


<body>
    <div class="main-wrapper main-wrapper-2">

        {{-- <x-preload /> --}}

        <x-menu-pc />
        <!-- mini cart start -->
        <div class="sidebar-cart-active">
            <div class="sidebar-cart-all">
                <a class="cart-close" href="#"><i class="pe-7s-close"></i></a>
                <div class="cart-content">

                </div>
            </div>
        </div>

        <main>
            {{ $slot }}
        </main>

        <footer class="footer-area">
            <div class="bg-primary">
                <div class="container">
                    <div class="footer-top pt-80 pb-35">
                        <div class="row">
                            <div
                                class="col-lg-3 col-md-6 col-sm-6 col-12 d-flex align-items-center justify-content-center">
                                <div class="footer-widget footer-about mb-40">
                                    <div class="footer-logo">
                                        <a href="index.html"><img
                                                src="{{ asset('assets/images/logo/logo-blanco.svg') }}"
                                                alt="logo homie"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 d-flex justify-content-center">
                                <div class="w-auto footer-widget footer-widget-margin-1 footer-list mb-40">
                                    <a class="text-white">Broker</a>
                                    <div class="footer__espacio-text"></div>
                                    <a class="text-white">Propietario</a>
                                    <div class="footer__espacio-text"></div>
                                    <a class="text-white">Inquilino</a>
                                    <div class="footer__espacio-text"></div>
                                    <a class="text-white">FAQs</a>
                                    <div class="footer__espacio-text"></div>
                                    <a class="text-white">Términos y Condiciones</a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-6 col-12 d-flex justify-content-center">
                                <div class="w-auto footer-widget footer-widget-margin-1 footer-list mb-40">
                                    <a class="text-white" href="tel:55000000">55 000 000</a>
                                    <div class="footer__espacio-text"></div>
                                    <a href="https://wa.me/5500000000?text=Me%20interesa%20un%20departamento%20a:%20"
                                        target="_blank" class="text-white">55 000 000</a>
                                    <div class="footer__espacio-text"></div>
                                    <a href="mailto:info@homie.com" class="text-white">info@homie.com</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 d-flex justify-content-center">
                                <div class="w-auto footer-widget footer-widget-margin-1 footer-list mb-40">
                                    <a class="text-white">Ingresos</a>
                                    <div class="footer__espacio-text"></div>
                                    <a class="text-white">Egresos</a>
                                    <div class="footer__espacio-text"></div>
                                    <a class="text-white">Patrimonio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Lines -->
        <div class="lines">
            <div class="content">
                <div class="line-col"></div>
                <div class="line-col"></div>
                <div class="line-col"></div>
                <div class="line-col"></div>
                <div class="line-col"></div>
            </div>
        </div>

        <!-- Mobile Menu start -->
        <x-menu-movil />
    </div>
    <!-- All JS is here -->
    @livewireScripts

    {{-- Alertas --}}
    {{-- <x-cookies-content /> --}}


    <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/aos.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-ui-touch-punch.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/easyzoom.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/slinky.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ajax-mail.js') }}"></script>
    <script src="{{ asset('assets/js/loading.js') }}"></script>
    <script src="{{ asset('assets/js/validarInput.js') }}"></script>



    <script src="{{ asset('assets/js/main.js?ver=1.0.6') }}"></script>


    @stack('script')


</body>

</html>
