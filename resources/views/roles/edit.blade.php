@extends('layouts.app')
@section('head')
    <title>Configuraciones - Roles - Imprenta</title>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item " aria-current="page"><a href="{{  url('configuraciones')  }}">Configuraciones</a> </li>
    <li class="breadcrumb-item active" aria-current="page">Roles</li>
@endsection

@section('content')
<div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Editar Rol</h2>
    </div>
    <div class="grid grid-cols-1 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form class="intro-y box p-5" method="POST" action="#">
                {{-- <!-- @method('PUT')
                @csrf --> --}}
                <div>
                    <label for="crud-form-1" class="form-label">Nombre de Rol</label>
                    <input id="crud-form-1" type="text" name="name" class="form-control w-full" >
                    @if ($errors->has('name'))
                        <div id="error-email" class="login__input-error text-danger mt-2">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
                                    
                <div class="overflow-x-auto mt-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">Menú</th>
                                <th class="whitespace-nowrap">Permisos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Usuarios</td>
                                <td>
                                    <div class="grid grid-cols-3 gap-4">
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Crear</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Editar</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Desactivar</label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Estadísticas</td>
                                <td>
                                    <div class="grid grid-cols-3 gap-4">
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Exportar Excel</label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Central File</td>
                                <td>
                                    <div class="grid grid-cols-3 gap-4">
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Crear</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Editar</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Desactivar</label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Precios</td>
                                <td>
                                    <div class="grid grid-cols-3 gap-4">
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Crear</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Editar</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Desactivar</label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Tesoreria</td>
                                <td>
                                    <div class="grid grid-cols-3 gap-4">
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Crear</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Editar</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Desactivar</label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Facturas</td>
                                <td>
                                    <div class="grid grid-cols-3 gap-4">
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Crear</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Editar</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Desactivar</label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Diseño</td>
                                <td>
                                    <div class="grid grid-cols-3 gap-4">
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Crear</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Editar</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Desactivar</label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Entregas</td>
                                <td>
                                    <div class="grid grid-cols-3 gap-4">
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Crear</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Editar</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Desactivar</label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Clientes</td>
                                <td>
                                    <div class="grid grid-cols-3 gap-4">
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Crear</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Editar</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Desactivar</label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Impresión</td>
                                <td>
                                    <div class="grid grid-cols-3 gap-4">
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Crear</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Editar</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Desactivar</label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Configuracion - Metodos de Pago</td>
                                <td>
                                    <div class="grid grid-cols-3 gap-4">
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Crear</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Editar</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check form-switch">
                                                <input id="checkbox-switch-7" class="form-check-input" type="checkbox">
                                                <label class="form-check-label" for="checkbox-switch-7">Desactivar</label>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
        
                
                <div class="text-right mt-5">
                    <a href="" class="btn btn-outline-secondary w-24 mr-1">Regresar</a>
                    <button type="submit" class="btn btn-primary w-24">Actualizar</button>
                </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>
@endsection
