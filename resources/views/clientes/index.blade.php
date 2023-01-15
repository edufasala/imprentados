@extends('layouts.app')
@section('head')
    <title>Clientes - Imprenta</title>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Clientes</li>
@endsection

@section('content')
    <div class="grid grid-cols-12 gap-6 mt-5">
            <!-- BEGIN: Data List -->
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible mt-4">
                <table class="table table-report -mt-2">
                    <thead>
                        <tr>
                            <th class="text-center whitespace-nowrap">CLIENTE</th>
                            <th class="text-center whitespace-nowrap">CUIT</th>
                            <th class="text-center whitespace-nowrap">SUCURSAL</th>
                            <th class="text-center whitespace-nowrap">USUARIO</th>
                            <th class="text-center whitespace-nowrap">CORREO</th>
                            <th class="text-center whitespace-nowrap">TELEFONO</th>
                            <th class="text-center whitespace-nowrap">OPCION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="intro-x">
                            <td class="text-center">#1342 - Jon Doe</td>
                            <td class="text-center">27-28033514-8</td>
                            <td class="text-center">No</td>
                            <td class="text-center">No</td>
                            <td class="text-center">jondoe@gmail.com</td>
                            <td class="text-center">1234567890</td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center text-primary">
                                    <a href="{{ route('clientes.show') }}" class="flex items-center mr-3" >
                                        <i data-lucide="eye" class="w-4 h-4 mr-1"></i> Ver
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- END: Data List -->
            <!-- BEGIN: Pagination -->
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
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
            </div>
            <!-- END: Pagination -->
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


@endsection
