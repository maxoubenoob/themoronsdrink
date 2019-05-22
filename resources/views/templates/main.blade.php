<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootsrap css -->
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('fontawesome5.6.3/css/all.css') }}">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery.js') }}"></script>

    <script src="{{ asset('bootstrap/bootstrap.min.js') }}"></script>

    <!-- Our css is here -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @yield('style')

    <title>@yield('title') | TheMoronsDrink</title>

    {{-- @include('templates.includes.favicon') --}}

    @yield('script')

</head>

<body>

    {{-- @include('templates.includes.menu') --}}

    {{-- @yield('header') --}}

    {{-- We display the content here --}}
    @yield('main')

    {{-- @include('templates.includes.footer') --}}

    {{-- Change the question --}}
    <script src="{{ asset('js/play.js') }}"></script>

</body>

</html>