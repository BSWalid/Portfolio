<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Walid Bensidiaissa') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{asset('css/homepage/plugins.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('css/homepage/plugins.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('css/homepage/dark.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('css/homepage/style.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome.css')}}" />


        <!-- Scripts -->
    </head>

    <body>
        <!-- PRELOADER -->
	<div id="preloader">
		<div class="loader_line"></div>
	</div>
	<!-- /PRELOADER -->



    <!-- WRAPPER ALL -->
    <div class="edina_tm_all_wrap" data-magic-cursor=""> <!-- If you want disable magic cursor add value "hide" -->

        <!-- MODALBOX -->
        <div class="edina_tm_modalbox">
            <div class="box_inner">
                <div class="close">
                    <a href="#"><img class="svg" src="{{asset('images/homepage/svg/cancel.svg')}}" alt=""></a>
                </div>
                <div class="description_wrap"></div>
            </div>
        </div>
        <!-- /MODALBOX -->

        <!-- MOBILE MENU -->
        <x-homepage.mobilemenu></x-homepage.mobilemenu>
        <!-- /MOBILE MENU -->

        <!-- SIDEBAR -->
        <x-homepage.sidebar></x-homepage.sidebar>
        <!-- /SIDEBAR -->

        <!-- MAINPART -->
        <div class="edina_tm_mainpart">
            @yield('main')
        </div>
        <!-- /MAINPART -->

    </div>
    <!-- / WRAPPER ALL -->

    <!-- SCRIPTS -->
    <script src="{{asset('js/homepage/jquery.js')}}"></script>
    <script src="{{asset('js/homepage/plugins.js')}}"></script>
    <script src="{{asset('js/homepage/init.js')}}"></script>
    <!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5bpEs3xlB8vhxNFErwoo3MXR64uavf6Y&amp;callback=initMap"></script>
    <!-- /SCRIPTS -->


    </body>

</html>
