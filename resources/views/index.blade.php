<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body id="page-top" style="overflow-x: hidden;">
    <!-- Navigation-->
    @include('nav')
    <!-- Masthead-->
    @include('header')
    <!-- Services-->
    @include('services')
    <!-- Portfolio Grid-->
    @include("portfolio")
    <!-- Contact-->
    @livewire('contact-form')
    <!-- Footer-->
    @include('footer')
    <!-- Portfolio Modals-->
    @include('footer-scripts')
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
    <x-livewire-alert::scripts />

</body>

</html>
