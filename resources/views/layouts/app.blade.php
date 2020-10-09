<!DOCTYPE html>
<html lang="en">

<head>
    <title> @yield('title') | {{ env('APP_NAME')}}</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('files/img/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('files/img/favicon/primelaw.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('files/img/favicon/primelaw.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('files/img/favicon/primelaw.png') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('files/bootstrap/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('files/bootstrap/css/bootstrap.min.css') }}">

    <!-- Normalize -->
    <link rel="stylesheet" href="{{ asset('files/css/normalize.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('files/css/font-awesome.min.css') }}">

    <!-- Main style -->
    <link rel="stylesheet" href="{{ asset('files/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('files/css/custom.css') }}" >

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('files/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/revolution/css/navigation.css') }}">

    <!-- JQuery -->
    <script src="{{ asset('files/js/jquery/jquery-2.2.4.min.js') }}"></script>

    <!-- REVOLUTION JS FILES -->
    <script src="{{ asset('files/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('files/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
        (Load Extensions only on Local File Systems !
        The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('files/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('files/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('files/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('files/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('files/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('files/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('files/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('files/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('files/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

</head>

<body>

    <div class="wrapp-content">
        <!-- Header -->
        <header class="wrapp-header">
            <div class="info-block-01">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-lg-8 col-xl-5 text-md-left">
                            <div class="info-block-01__address-wrapp">
                                <a class="info-block-01__email ml-0" href="mailto:info@company.com"><i class="fa fa-envelope"
                                        aria-hidden="true"></i> info@primelawng.com</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xl-7">
                            <ul class="social-list-02">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @include('partials.header')
        </header>

        @yield('content')
        @yield('footer')

    </div>

    <!-- Bootstrap -->
    <script src="{{ asset('files/bootstrap/js/bootstrap.min.js') }}"></script>
    
    <!-- SuperFish -->
    <script src="{{ asset('files/js/plugins/jquery.superfish.min.js') }}"></script>
    
    <!-- Main navigation sticky -->
    <script src="{{ asset('files/js/plugins/jquery.sticky.min.js') }}"></script>
    
    <!-- Isotope -->
    <script src="{{ asset('files/js/plugins/jquery.isotope.min.js') }}"></script>
    
    <!-- Images loaded -->
    <script src="{{ asset('files/js/plugins/jquery.imagesloaded.min.js') }}"></script>
    
    <!-- Waypoint -->
    <script src="{{ asset('files/js/plugins/jquery.waypoint.min.js') }}"></script>
    
    <!-- Main script -->
    <script src="{{ asset('files/js/main.js') }}"></script>
    
    <script src="{{ asset('files/revolution/js/rvstart.js') }}"></script>
</body>

</html>
