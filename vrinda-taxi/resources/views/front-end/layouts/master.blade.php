<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Vrinda Taxi Service | Best Taxi Service in Vrindavan & Mathura')</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('vrinda-taxi/assets/img/logo/favicon.png') }}" />
    <link rel="canonical" href="{{ url()->current() }}">

    <link rel="stylesheet" href="{{ asset('vrinda-taxi/assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>

@include('front-end.layouts.header')

@yield('content')

@include('front-end.layouts.footer')

</body>
</html>