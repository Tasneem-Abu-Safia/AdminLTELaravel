<!DOCTYPE html>
@php
    App::setLocale(Session::get('locale') != null ? Session::get('locale') : 'en');
@endphp
<html
    @if(Session::get('locale')== 'ar')
    lang="ar" dir="rtl"
    @else
    lang="en"
    @endif>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <title>
        @yield('titlePage')
    </title>
    @include('layouts.DashBoard.head')
</head>

<body class="g-sidenav-show @if(Session::get('locale')== 'ar')rtl @endif bg-gray-100">
<div class="min-height-300 bg-primary position-absolute w-100"></div>
@include('layouts.DashBoard.main-sidebar')
{{--<main class="main-content position-relative border-radius-lg">--}}
<main class="main-content position-relative border-radius-lg @if(Session::get('locale')== 'ar')overflow-hidden @endif ">
    @include('layouts.DashBoard.main-headerbar')
    @yield('content')
</main>
@include('layouts.DashBoard.footer')
@include('layouts.DashBoard.scripts')
</body>

</html>
