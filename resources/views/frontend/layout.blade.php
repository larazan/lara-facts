<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta name="author" content="John Doe">
  <title>
    {{ isset($title) ? $title.' | ' : '' }}
    {{ config('app.name') }}
    {{ General::is_active('home') ? '- Inspirational Quotes Library' : '' }}
  </title>
  @if(General::is_active('home'))
  <meta name="description" content="The Laravel portal for problem solving, knowledge sharing and community building." />
  @endif
  <link rel="icon" href="/frontend/img/favicons/favicon.ico">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />

  <style>
    [x-cloak] {
      display: none;
    }
  </style>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.0/dist/cdn.min.js"></script>

  @stack('meta')

  @include('frontend.layouts._favicons')
  @include('frontend.layouts._social')

  <!-- CSS -->
  @stack('style')
  @livewireStyles

  <style>
    [x-cloak] {
        display: none;
    }

    @font-face {
      font-family: 'Pally-Bold';
      src: local('Pally-Bold'), url(../../fonts/Pally-Bold.ttf) format('truetype');
    }
    @font-face {
      font-family: 'Pally-Medium';
      src: local('Pally-Medium'), url(../../fonts/Pally-Medium.ttf) format('truetype');
    }
    @font-face {
      font-family: 'Pally-Regular';
      src: local('Pally-Regular'), url(../../fonts/Pally-Regular.ttf) format('truetype');
    }
    @font-face {
      font-family: 'Pally-Variable';
      src: local('Pally-Variable'), url(../../fonts/Pally-Variable.ttf) format('truetype');
    }

    html {
      line-height: 1.5;
      -webkit-text-size-adjust: 100%;
      -moz-tab-size: 4;
      -o-tab-size: 4;
      tab-size: 4;
      font-family: "Pally-Regular",ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
      font-feature-settings: normal;
      font-variation-settings: normal;
      scroll-behavior: smooth;
  }

    .pally-bold {
      font-family: "Pally-Bold";
    }
    .pally-medium {
      font-family: "Pally-Medium";
    }
    .pally-regular {
      font-family: "Pally-Regular";
    }
    .pally-variable {
      font-family: "Pally-Variable";
    }

    #background-bar:after {
      content: "";
      background-color: #fff;
      opacity: 1;
      height: 250px;
      width: 150%;
      margin-left: -100px;
      transform: rotate(2deg);
      top: -25px;
      z-index: 0;
    }

    #background-bar,
    #background-bar:after {
      position: absolute;
      left: 0;
      pointer-events: none;
    }

    #background-bar {
      top: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    #menubar::-webkit-scrollbar-thumb {
      background: rgba(0, 0, 0, .2);
      /* border: 4px solid #fff; */
      border-radius: 0px
    }

    #menubar::-webkit-scrollbar-thumb:hover {
      background: rgb(38, 164, 163);
      opacity: 40%;
    }

    .custom-scrollbar::-webkit-scrollbar {
      height: 10px;
      width: 10px
    }

    .custom-scrollbar::-webkit-scrollbar-track {
      background: transparent
    }

    .custom-scrollbar::-webkit-scrollbar-thumb {
      background: transparent
    }

    .custom-scrollbar:hover::-webkit-scrollbar-thumb {
      background: #b2b7b8;
      border-radius: 0px;
      border: 4px solid #b2b7b8;
    }
  </style>
</head>

<body x-data="{ filterOpen: false, openSearch: false, customizeOpen: false }">

<!-- <div id="background-bar"></div> -->

  @include('frontend.layouts._header')
  @include('frontend.components._gotop')

  @yield('content')

  @include('frontend.layouts._footer')

  @stack('modals')

  @livewireScripts
  @stack('js')

  <script>
    window.addEventListener('banner-message', event => {
      toastr[event.detail.style](event.detail.message,
        event.detail.title ?? ''), toastr.options = {
        "closeButton": true,
        "progressBar": true,
      }
    });

    @if(Session::has('pesan'))
    toastr. {
      {
        Session::get('alert')
      }
    }("{{Session::get('pesan')}}");
    @endif
  </script>

</body>

</html>