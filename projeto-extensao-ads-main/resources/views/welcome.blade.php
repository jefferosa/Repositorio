<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">


        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                @if (Route::has('login'))
                @auth
                <div class="p-6">
                    <div class="flex items-center">
                        <div class=" text-lg  font-semibold"><a href="{{route('dashboard')}}" class=" text-gray-900 dark:text-white">Dashboard</a></div>
                    </div>
                </div>

                @else
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class=" text-lg  font-semibold"><a href="/login" class=" text-gray-900 dark:text-white">Login</a></div>
                        </div>
                    </div>
                    @if (Route::has('register'))
                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <div class=" text-lg  font-semibold"><a href="/register" class=" text-gray-900 dark:text-white">Registrar</a></div>
                        </div>
                    </div>
                    @endif
                    @endauth
                    @endif
                </div>
            </div>

        </div>
    </div>
</body>

</html>
