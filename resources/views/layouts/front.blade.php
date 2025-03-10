<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @include('includes.Landing.meta')

        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
        <title>@yield('title') | SERV</title>

        @stack('before-style')

        @include('includes.Landing.style')

        @stack('after-style')

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <div class="antaialiased">
            <div class="relative">

                @include('includes.Landing.header')
                {{-- @include('sweetalert::alert') --}}

                     @yield('content')

                @include('includes.Landing.footer')

                @stack('before-script')

                @include('includes.Landing.script')

                @stack('after-script')

                @include('components.modals.login')
                @include('components.modals.register')
                @include('components.modals.register-success')
            </div>
        </div>


    </body>
</html>
