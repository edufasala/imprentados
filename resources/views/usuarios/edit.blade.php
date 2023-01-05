@extends('layouts.app')
@section('head')
    <title>Usuarios - Imprenta</title>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
@endsection

@section('content')
<div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Editar Usuario</h2>
    </div>
    <div class="grid grid-cols-1 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form class="intro-y box p-5" method="POST" action="{{ route('usuarios.update', $data->id) }}">
                @method('PUT')
                @csrf
                <div>
                    <label for="crud-form-1" class="form-label">Nombre de Usuario</label>
                    <input id="crud-form-1" type="text" name="name" class="form-control w-full" value="{{ $data->name }}">
                    @if ($errors->has('name'))
                        <div id="error-email" class="login__input-error text-danger mt-2">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
                <div class="mt-3">
                    <label for="crud-form-2" class="form-label">Email</label>
                    <input id="crud-form-2" type="text" name="email" class="form-control w-full" value="{{ $data->email }}">
                    @if ($errors->has('email'))
                        <div id="error-email" class="login__input-error text-danger mt-2">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>
                <div class="mt-3">
                <label for="vertical-form-2" class="form-label">Rol</label>
                    <select class="form-select mt-2 sm:mr-2" name="rol" aria-label="Default select example">
                        <option>Seleccione...</option>
                        @foreach ($roles as $item)
                            @foreach($data->getRoleNames() as $rol)
                            <option value="{{ $item->name }}" @if ($rol == $item->name) selected @endif>{{ $item->name }}</option>
                            @endforeach
                        @endforeach
                    </select>
                </div>
                <div class="mt-3">
                    <label for="crud-form-3" class="form-label">Password</label>
                    <input id="crud-form-3" type="password" name="password" class="form-control w-full">
                    @if ($errors->has('password'))
                        <div id="error-email" class="login__input-error text-danger mt-2">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>

                <div class="text-right mt-5">
                    <a href="{{ route('usuarios.index') }}" class="btn btn-outline-secondary w-24 mr-1">Regresar</a>
                    <button type="submit" class="btn btn-primary w-24">Actualizar</button>
                </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>
@endsection
