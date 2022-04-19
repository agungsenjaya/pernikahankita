<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html prefix="og: https://ogp.me/ns#">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('meta')
        <meta property="og:type" content="undangan.wedding.invitation.marry.nikah.menikah.married.sukabumi" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('img/logo-pot.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/swiper.css') }}"/>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        @yield('css')
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        @include('layouts.alert')
        @include('layouts.modal')
        <!-- <div class="page-loading active">
            <div class="page-loading-inner">
                <div class="page-spinner"></div><span>Loading...</span>
            </div>
        </div> -->
        @include('layouts.header')
        <div class="min-vh-100">
            @yield('content')
        </div>
        @include('layouts.footer')
        <!-- <script src="{{ asset('js/app.js') }}"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.4.1/swiper-bundle.min.js" integrity="sha512-pY1t/ADgTwbfGbw0+mRGd33EroA5YgRUWhQNFpPIAdBzyoSb38FsFrf4wBTcS3GFPdTfgtpRrbGCkdl2C2OXYA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        @yield('js')
    </body>
</html>