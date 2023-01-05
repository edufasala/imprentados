<!DOCTYPE html>
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
    <title>Verificación de Email - Imprenta</title>
    <!-- BEGIN: CSS Assets-->
    @vite('resources/css/app.css')
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="login">

<div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5"></a>
                <div class="my-auto">
                    <img alt="Admin Imprenta" class="-intro-x w-1 -mt-16" width="450"
                        src="{{ asset('build/assets/images/illustration.png') }}">
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-0 xl:my-0">
                <!-- @include('layouts.alerts') -->
                <div method="POST" action="{{ route('login') }}"
                    class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    @csrf
                    <a href="" class="-intro-x flex items-center pt-5 pb-10">
                        <img alt="Admin Imprenta" width="350" src="{{ asset('build/assets/images/logo.png') }}">
                    </a>
                    <p class="intro-x font-normal text-1xl xl:text-1xl text-center  xl:text-left">
                        Gracias por registrarte! Antes de comenzar,<br>
                        ¿podría verificar su dirección de correo electrónico haciendo
                        click en el enlace que le acabamos de enviar?<br>
                        Si no recibiste el correo electrónico, con gusto te enviaremos otro.
                    </p>

                    @if (session('status') == 'verification-link-sent')
                    <div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert">
                        <i data-lucide="check" class="w-6 h-6 mr-2"></i> Se ha enviado un nuevo enlace de verificación a la dirección de
                        correo electrónico que proporcionó durante el registro.
                        <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                            <i data-lucide="x" class="w-4 h-4"></i>
                        </button>
                    </div>
                    @endif

                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary py-3 px-4 w-full xl:w-36 xl:mr-3 align-top">
                                Reenviar correo electrónico de verificación
                            </button>
                        </form>
                    </div>

                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" class="btn btn-outline-secondary py-3 px-4 w-full xl:w-36 mt-3 xl:mt-0 align-top">
                                Cerrar sesión
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END: Login Form -->
        </div>
    </div>

<!-- BEGIN: JS Assets-->
    @vite('resources/js/app.js')
    <!-- END: JS Assets-->

</body>

</html>
