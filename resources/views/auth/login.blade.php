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
    <title>Login - Imprenta</title>
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
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5"></a>
                <div class="my-auto">
                    <img alt="Admin Imprenta" class="-intro-x w-1 -mt-16" width="450"
                        src="{{ asset('build/assets/images/illustration.png') }}">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">Eres nuevo? <br>
                        Bienvenido, </div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70">Click en el botón Registrarme y crea
                        una cuenta!</div>
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-0 xl:my-0">
                <!-- @include('layouts.alerts') -->
                <form method="POST" action="{{ route('login') }}"
                    class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    @csrf
                    <a href="" class="-intro-x flex items-center pt-5">
                        <img alt="Admin Imprenta" width="350" src="{{ asset('build/assets/images/logo.png') }}">
                    </a>
                    <h2 class="intro-x font-bold text-4xl xl:text-4xl text-center xl:text-left">Iniciar Sesión</h2>
                    <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">Si eres Nuevo, click en el boton
                        Registrarme para crear una cuenta. </div>
                    <div class="intro-x mt-8">
                        <div id="login-form">
                            <input id="email" type="text" name="email"
                                class="intro-x login__input form-control py-3 px-4 block" placeholder="Email"
                                value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <div id="error-email" class="login__input-error text-danger mt-2">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif

                            <input id="password" type="password" name="password"
                                class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password"
                                value="password">
                            @if ($errors->has('password'))
                                <div id="error-password" class="login__input-error text-danger mt-2">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif

                        </div>
                    </div>
                    <div class="intro-x flex text-slate-600 text-xs sm:text-sm mt-4">
                        <div class="flex items-center mr-auto">
                            <input id="remember-me" type="checkbox" name="remember_token"
                                class="form-check-input border mr-2">
                            <label class="cursor-pointer select-none" for="remember-me">Recuerdame</label>
                        </div>
                        <a href="">Has olvidado tu Password?</a>
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button id="btn-login" type="submit"
                            class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Entrar</button>
                        <a href="{{ route('register') }}"
                            class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Registrarme</a>
                    </div>
                    <div class="intro-x mt-10 xl:mt-24 text-slate-600 text-center xl:text-left">
                        Al registrarse, usted acepta nuestros <a class="text-primary" href="">Terminos,
                            Condiciones</a> & <a class="text-primary" href="">Políticas de Privacidad</a>
                    </div>
                </form>
            </div>
            <!-- END: Login Form -->
        </div>
    </div>

    <!-- BEGIN: JS Assets-->
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places"></script>
    @vite('resources/js/app.js')
    <!-- END: JS Assets-->

</body>

</html>
