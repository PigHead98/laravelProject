<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body>
@include('partials.menu')
<div class="g-recaptcha" data-sitekey="6Ldpd78UAAAAAOU_LmuYeNyhivmZwm1kjYE930PA"></div>
@yield('content')
@include('partials.footer')
@include('layouts.scripts')
</body>
</html>