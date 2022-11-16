<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

         <!-- Scripts -->
         <link rel="preload" as="style" href="http://localhost:8000/build/assets/app.badde8dd.css" />
         <link rel="modulepreload" href="http://localhost:8000/build/assets/app.d426e523.js" />
         <link rel="stylesheet" href="http://localhost:8000/build/assets/app.badde8dd.css" />
         <script type="module" src="http://localhost:8000/build/assets/app.d426e523.js"></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
