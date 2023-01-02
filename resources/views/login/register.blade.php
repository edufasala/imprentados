@extends('../layout/' . $layout)

@section('head')
    <title>Registrarme</title>
@endsection

@section('content')
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Register Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <div class="my-auto">
                    <img alt="Admin Imprenta" class="-intro-x w-1 -mt-26" width="450"
                        src="{{ asset('build/assets/images/register.png') }}">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">Ya tienes una cuenta <br> eres de los nuestros?</div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Click en el Boton Iniciar Sesión</div>
                </div>
            </div>
            <!-- END: Register Info -->
            <!-- BEGIN: Register Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-0 xl:my-0">
                <form method="POST" action="{{ route('register.check') }}"
                    class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    @csrf
                    <a href="" class="-intro-x flex items-center pt-5">
                        <img alt="Admin Imprenta" width="350" src="{{ asset('build/assets/images/logo.png') }}">
                    
                    </a>
                    <h2 class="intro-x font-bold text-4xl xl:text-4xl text-center xl:text-left">Registrarse</h2>    
                    <div class="intro-x mt-2 text-slate-400 dark:text-slate-400 xl:hidden text-center">Si ya tienes una cuenta click en iniciar sesión para Ingresar!</div>
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
                                <div class="col-span-3 h-full rounded bg-slate-100 dark:bg-darkmode-800"></div>
                            </div>
                            <a href="" class="intro-x text-slate-500 block mt-2 text-xs sm:text-sm">What is a secure password?</a>
                            <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password Confirmation"> -->
                    </div>
                    <div class="intro-x flex items-center text-slate-600 dark:text-slate-500 mt-4 text-xs sm:text-sm">
                        <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                        <label class="cursor-pointer select-none" for="remember-me">Estoy de acuerdo con Imprenta y las</label>
                        <a class="text-primary dark:text-slate-200 ml-1" href="">Politicas de Privacidad</a>.
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Registrarme</button>
                        <a href="{{ route('login') }}" class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Iniciar Sesion</a>
                    </div>
                </form>
            </div>
            <!-- END: Register Form -->
        </div>
    </div>
@endsection
