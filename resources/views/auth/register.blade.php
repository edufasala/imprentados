<!DOCTYPE html>
<!--
Template Name: Rubick - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="{{ $dark_mode ? 'dark' : '' }}{{ $color_scheme != 'default' ? ' ' . $color_scheme : '' }}">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="{{ asset('build/assets/images/logo.png') }}" rel="shortcut icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Rubick admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Registrarme - Imprenta</title>
    <!-- BEGIN: CSS Assets-->
    @vite('resources/css/app.css')
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="login">
    <!-- BEGIN: Dark Mode Switcher-->
    <div data-url="{{ route('dark-mode-switcher') }}"
        class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
        <div class="mr-4 text-slate-600">Dark Mode</div>
        <div class="dark-mode-switcher__toggle {{ $dark_mode ? 'dark-mode-switcher__toggle--active' : '' }} border">
        </div>
    </div>
    <!-- END: Dark Mode Switcher-->

    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Register Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <div class="my-auto">
                    <img alt="Admin Imprenta" class="-intro-x w-1 -mt-26" width="450"
                        src="{{ asset('build/assets/images/register.png') }}">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">Ya tienes una cuenta <br> eres de los nuestros?</div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70">Click en el Boton Iniciar Sesión</div>
                </div>
            </div>
            <!-- END: Register Info -->
            <!-- BEGIN: Register Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-0 xl:my-0">
                <form method="POST" action="{{ url('register') }}"
                    class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    @csrf
                    <a href="" class="-intro-x flex items-center pt-5">
                        <img alt="Admin Imprenta" width="350" src="{{ asset('build/assets/images/logo.png') }}">
                    </a>
                    <h2 class="intro-x font-bold text-4xl xl:text-4xl text-center xl:text-left">Registrarse</h2>
                    <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">Si ya tienes una cuenta click en iniciar sesión para Ingresar!</div>
                    <div class="intro-x mt-8">
                        <input type="text" name="name" class="intro-x login__input form-control py-3 px-4 block"
                            placeholder="Name">
                        <input type="text" name="email" class="intro-x login__input form-control py-3 px-4 block mt-4"
                            placeholder="Email">
                        <input type="password" name="password" class="intro-x login__input form-control py-3 px-4 block mt-4"
                            placeholder="Password">
                        <!-- <div class="intro-x w-full grid grid-cols-12 gap-4 h-1 mt-3">
                                <div class="col-span-3 h-full rounded bg-success"></div>
                                <div class="col-span-3 h-full rounded bg-success"></div>
                                <div class="col-span-3 h-full rounded bg-success"></div>
                                <div class="col-span-3 h-full rounded bg-slate-100"></div>
                            </div>
                            <a href="" class="intro-x text-slate-500 block mt-2 text-xs sm:text-sm">What is a secure password?</a>
                            <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password Confirmation"> -->
                    </div>
                    <div class="intro-x flex items-center text-slate-600 mt-4 text-xs sm:text-sm">
                        <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                        <label class="cursor-pointer select-none" for="remember-me">Estoy de acuerdo con Imprenta y las</label>
                        <a class="text-primary ml-1" href="">Politicas de Privacidad</a>.
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Registrarme</button>
                        <a href="{{ url('/') }}" class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Iniciar Sesion</a>
                    </div>
                </form>
            </div>
            <!-- END: Register Form -->
        </div>
    </div>

    <!-- BEGIN: JS Assets-->
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>

    @vite('resources/js/app.js')
    <!-- END: JS Assets-->
</body>

</html>
