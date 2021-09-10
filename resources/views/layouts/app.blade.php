<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="{{ csrf_token() }}">

 <!-- CSS -->

 <link rel="stylesheet" href="{{asset('css/app.css')}}">
 <link rel="stylesheet" href="{{asset('css/menu.css')}}">
 <link rel="stylesheet" href="{{asset('css/style.css')}}">
 <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">

 @yield('css')






 <title>{{  'Portfolio Dashbaord' }}</title>

 </head>
 <body class="sticky-header">
    <section>
        <!--Side bar-->
            <x-dashboard.sidebar></x-dashboard.sidebar>
        <!--end Side bar-->

        <!-- body content start-->
        <div class="body-content">
            <x-dashboard.page-header></x-dashboard.page-header>

            <div class="container-fluid">
                @yield('content')
            </div>



        </div>
        <!--end body content-->
    </section>



    <!-- jQuery -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate.js')}}"></script>
    <script src="{{asset('js/modernizr.min.js')}}"></script>
    <script src="{{asset('js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('js/slidebars.min.js')}}"></script>


    <!--app js-->
    <script src="{{asset('js/jquery.app.js')}}"></script>


    @yield('scripts')



</body>
</html>



