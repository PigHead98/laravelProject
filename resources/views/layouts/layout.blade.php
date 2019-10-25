<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body>
@include('partials.menu')
@yield('content')
@include('partials.footer')
@include('layouts.scripts')
</body>
</html>