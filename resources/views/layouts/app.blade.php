<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <style>
        [x-cloak]{
            display: none!important;
        }
    </style>
    <!-- Scripts -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">

<div class="drawer lg:drawer-open">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />

    <main class="drawer-content  w-full bg-white  items-center justify-center">
        <!-- Page Content -->
        <div>
            {{ $slot }}
        </div>
    </main>

    <aside class="drawer-side ">
        <label for="my-drawer-2" class="drawer-overlay"></label>

        @include('layouts.sidebar')

    </aside>
</div>

</body>

</html>
