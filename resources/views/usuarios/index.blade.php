@extends('layouts.app')
@section('head')
    <title>Usuarios - Imprenta</title>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
@endsection

@section('content')
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal" data-tw-target="#nuevo-usuario">Nuevo Usuario</button>
            <div class="dropdown">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-lucide="plus"></i>
                    </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Imprimir
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Exportar a Excel
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Exportar a PDF
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <div class="hidden md:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div> -->
            <!-- <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
            </div> -->
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead style=" background:#c4d5f5; color:#000;">
                    <tr>
                        <th class="whitespace-nowrap">#</th>
                        <th class="whitespace-nowrap">USUARIOS</th>
                        <th class="text-center whitespace-nowrap">ROL</th>
                        <th class="text-center whitespace-nowrap">ESTATUS</th>
                        <th class="text-center whitespace-nowrap">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        <tr class="intro-x">
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                <span class="font-medium whitespace-nowrap">{{ $item->name }}</span>
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $item->email  }}</div>
                            </td>
                            <td class="text-center">
                                @if(!empty($item->getRoleNames()))
                                    @foreach($item->getRoleNames() as $rol)
                                        {{ $rol }}
                                    @endforeach
                                @endif
                            </td>
                            <td class="w-40">
                                <div class="flex items-center justify-center {{ $item->active ? 'text-success' : 'text-danger' }}">
                                    <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> {{ $item->active ? 'Activo' : 'Inactivo' }}
                                </div>
                            </td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a href="{{ route('usuarios.edit', $item->id) }}" class="flex items-center mr-3" >
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Editar
                                    </a>
                                    <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal-{{ $item->id }}">
                                        <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Eliminar
                                    </a>
                                    <!-- BEGIN: Delete Confirmation Modal -->
                                    <div id="delete-confirmation-modal-{{ $item->id }}" class="modal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form method="POST" action="{{ route('usuarios.destroy', $item->id ) }}" class="modal-body p-0">
                                                    @csrf
                                                    <div class="p-5 text-center">
                                                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                                        <div class="text-3xl mt-5">Está Seguro de Inactivar al Usuario?</div>
                                                        <div class="text-slate-500 mt-2">Al inactivar al usuario este no podrá acceder al sistema luego.</div>
                                                    </div>
                                                    <div class="px-5 pb-8 text-center">
                                                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancelar</button>
                                                        <button type="submit" class="btn btn-danger w-24">Inactivar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Delete Confirmation Modal -->
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
        <!-- BEGIN: Pagination -->
        {{-- <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-lucide="chevrons-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-lucide="chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-lucide="chevron-right"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-lucide="chevrons-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <select class="w-20 form-select box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div> --}}
        <!-- END: Pagination -->
    </div>
    <!-- BEGIN: Crear Usuario -->
    <!-- END: Delete Confirmation Modal -->
    <div id="nuevo-usuario" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-t"></div>
            <form class="modal-content" action="{{ url('/usuarios/guardar-usuario') }}" method="POST">
                @csrf
                <!-- BEGIN: Modal Header -->
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Nuevo Usuario</h2>
                    <a data-tw-dismiss="modal" href="javascript:;">
                        <i data-lucide="x" class="w-8 h-8 text-slate-400"></i>
                    </a>
                </div>
                <!-- END: Modal Header -->
                <div class="modal-body p-5">
                    <div>
                        <label for="vertical-form-1" class="form-label">Nombre de Usuario</label>
                        <input id="vertical-form-1" type="text" name="name" class="form-control" placeholder="Jon Doe">
                    </div>
                    <div class="mt-3">
                        <label for="vertical-form-2" class="form-label">Email</label>
                        <input id="vertical-form-2" type="text" name="email" class="form-control" placeholder="example@gmail.com">
                    </div>
                    <div class="mt-3">
                        <label for="vertical-form-3" class="form-label">Password</label>
                        <input id="vertical-form-3" type="password" name="password" class="form-control" placeholder="secret">
                    </div>
                    <div class="mt-3">
                        <label for="vertical-form-2" class="form-label">Rol</label>
                        <select class="form-select mt-2 sm:mr-2" name="rol" aria-label="Default select example">
                            <option>Seleccione...</option>
                            @foreach ($roles as $item)
                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- BEGIN: Modal Footer -->
                <div class="modal-footer">
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancelar</button>
                    <button type="submit" class="btn btn-primary w-20">Guardar</button>
                </div>
                <!-- END: Modal Footer -->
            </form>
        </div>
    </div>

@endsection
