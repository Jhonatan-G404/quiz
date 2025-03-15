<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app-59edf58b.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('bootstrap/jquery.min.js') }}"></script>
    <script src="{{ asset('build/assets/app-085f150d.js') }}"></script>
    <script src="{{ asset('bootstrap/bootstrap.min.js') }}"></script>
</body>

</html>