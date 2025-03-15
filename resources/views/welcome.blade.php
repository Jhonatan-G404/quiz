<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('build/assets/app-59edf58b.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">

</head>

<body class="antialiased">
    <div
        class="relative flex justify-center items-center text-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div
            class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Welcome to
                Digipreneurmatik</h5>

            <div class="mt-5 justify-center">
                @if (Route::has('login'))
                @auth
                <a href="{{ url('/dashboard') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                <a href="{{ route('login') }}"
                    class="py-2.5 px-5 me-2 mb-2 text-sm w-full font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Login</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="text-white bg-gray-800 mt-5 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Register</a>
                @endif
                @endauth
                @endif
            </div>
        </div>
    </div>
    <script src="{{ asset('bootstrap/jquery.min.js') }}"></script>
    <script src="{{ asset('build/assets/app-085f150d.js') }}"></script>
    <script src="{{ asset('bootstrap/bootstrap.min.js') }}"></script>
</body>

</html>