<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-extends.css') }}">
	<!-- theme style -->
	<link rel="stylesheet" href="{{ asset('css/master-style.css') }}">
	<!-- MinimalLite Admin skins -->
	<link rel="stylesheet" href="{{ asset('css/_all-skins.css') }}">
</head>

    @yield('content')

<!-- jQuery 3 -->
<script src="{{ asset('js/jquery.js') }}"></script>
<!-- popper -->
<script src="{{ asset('js/popper.js') }}"></script>
<!-- Bootstrap 4.0-->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- Functions.js -->
<script src="{{ asset('js/functions.js') }}"></script>

</html>
