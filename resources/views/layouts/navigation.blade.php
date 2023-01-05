<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Admin Imprenta" class="w-25" src="{{ asset('build/assets/images/logo.png') }}">
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        @role('Admin')
        <li>
            <a href="{{ route('dashboard') }}"
                class="@if (Route::currentRouteName() == 'dashboard') side-menu side-menu--active @else side-menu @endif">
                <div class="side-menu__icon">
                    <i data-lucide="home"></i>
                </div>
                <div class="side-menu__title">
                    Dashboard
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('usuarios.index') }}"
                class="@if (Route::currentRouteName() == 'usuarios.index') side-menu side-menu--active @else side-menu @endif">
                <div class="side-menu__icon">
                    <i data-lucide="users"></i>
                </div>
                <div class="side-menu__title">
                    Usuarios
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('estadisticas.index') }}"
                class="@if (Route::currentRouteName() == 'estadisticas.index') side-menu side-menu--active @else side-menu @endif">
                <div class="side-menu__icon">
                    <i data-lucide="bar-chart"></i>
                </div>
                <div class="side-menu__title">
                    Estadística
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('centralfile.index') }}"
                class="@if (Route::currentRouteName() == 'centralfile.index') side-menu side-menu--active @else side-menu @endif">
                <div class="side-menu__icon">
                    <i data-lucide="file-text"></i>
                </div>
                <div class="side-menu__title">
                    Central File
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('precios.index') }}"
                class="@if (Route::currentRouteName() == 'precios.index') side-menu side-menu--active @else side-menu @endif">
                <div class="side-menu__icon">
                    <i data-lucide="archive"></i>
                </div>
                <div class="side-menu__title">
                    Precios
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('tesoreria.index') }}"
                class="@if (Route::currentRouteName() == 'tesoreria.index') side-menu side-menu--active @else side-menu @endif">
                <div class="side-menu__icon">
                    <i data-lucide="dollar-sign"></i>
                </div>
                <div class="side-menu__title">
                    Tesoreria
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('facturas.index') }}"
                class="@if (Route::currentRouteName() == 'facturas.index') side-menu side-menu--active @else side-menu @endif">
                <div class="side-menu__icon">
                    <i data-lucide="layers"></i>
                </div>
                <div class="side-menu__title">
                    Facturas
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('disenos.index') }}"
                class="@if (Route::currentRouteName() == 'disenos.index') side-menu side-menu--active @else side-menu @endif">
                <div class="side-menu__icon">
                    <i data-lucide="pen-tool"></i>
                </div>
                <div class="side-menu__title">
                    Diseño
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('entregas.index') }}"
                class="@if (Route::currentRouteName() == 'entregas.index') side-menu side-menu--active @else side-menu @endif">
                <div class="side-menu__icon">
                    <i data-lucide="truck"></i>
                </div>
                <div class="side-menu__title">
                    Entregas
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('clientes.index') }}"
                class="@if (Route::currentRouteName() == 'clientes.index') side-menu side-menu--active @else side-menu @endif">
                <div class="side-menu__icon">
                    <i data-lucide="user-plus"></i>
                </div>
                <div class="side-menu__title">
                    Clientes
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('impresion.index') }}"
                class="@if (Route::currentRouteName() == 'impresion.index') side-menu side-menu--active @else side-menu @endif">
                <div class="side-menu__icon">
                    <i data-lucide="printer"></i>
                </div>
                <div class="side-menu__title">
                    Impresion
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('configuraciones.index') }}"
                class="@if (Route::currentRouteName() == 'configuraciones.index') side-menu side-menu--active @else side-menu @endif">
                <div class="side-menu__icon">
                    <i data-lucide="settings"></i>
                </div>
                <div class="side-menu__title">
                    Configuraciones
                </div>
            </a>
        </li>
        @else
        <li>
            <a href="{{ route('dashboard') }}"
                class="@if (Route::currentRouteName() == 'dashboard') side-menu side-menu--active @else side-menu @endif">
                <div class="side-menu__icon">
                    <i data-lucide="home"></i>
                </div>
                <div class="side-menu__title">
                    Dashboard
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('clientes.index') }}"
                class="@if (Route::currentRouteName() == 'clientes.index') side-menu side-menu--active @else side-menu @endif">
                <div class="side-menu__icon">
                    <i data-lucide="user-plus"></i>
                </div>
                <div class="side-menu__title">
                    Clientes
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('facturas.index') }}"
                class="@if (Route::currentRouteName() == 'facturas.index') side-menu side-menu--active @else side-menu @endif">
                <div class="side-menu__icon">
                    <i data-lucide="layers"></i>
                </div>
                <div class="side-menu__title">
                    Facturas
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('impresion.index') }}"
                class="@if (Route::currentRouteName() == 'impresion.index') side-menu side-menu--active @else side-menu @endif">
                <div class="side-menu__icon">
                    <i data-lucide="printer"></i>
                </div>
                <div class="side-menu__title">
                    Impresion
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('entregas.index') }}"
                class="@if (Route::currentRouteName() == 'entregas.index') side-menu side-menu--active @else side-menu @endif">
                <div class="side-menu__icon">
                    <i data-lucide="truck"></i>
                </div>
                <div class="side-menu__title">
                    Entregas
                </div>
            </a>
        </li>
        @endrole

        {{-- @role('Empleado')


        @endrole --}}
    </ul>
</nav>
