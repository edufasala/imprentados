@extends('layouts.app')
@section('head')
    <title>Facturación - Imprenta</title>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Facturación</li>
@endsection

@section('content')
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <ul class="nav nav-boxed-tabs" role="tablist">
                <li id="example-1-tab" class="nav-item flex-1" role="presentation">
                    <button
                        class="nav-link w-full py-2 active"
                        data-tw-toggle="pill"
                        data-tw-target="#example-tab-1"
                        type="button"
                        role="tab"
                        aria-controls="example-tab-1"
                        aria-selected="true"
                    >
                        Búsqueda
                    </button>
                </li>
                <li id="example-2-tab" class="nav-item flex-1" role="presentation">
                    <button
                        class="nav-link w-full py-2"
                        data-tw-toggle="pill"
                        data-tw-target="#example-tab-2"
                        type="button"
                        role="tab"
                        aria-controls="example-tab-2"
                        aria-selected="false"
                    >
                        Facturar
                    </button>
                </li>
                <li id="example-3-tab" class="nav-item flex-1" role="presentation">
                    <button
                        class="nav-link w-full py-2"
                        data-tw-toggle="pill"
                        data-tw-target="#example-tab-3"
                        type="button"
                        role="tab"
                        aria-controls="example-tab-3"
                        aria-selected="false"
                    >
                        Otros
                    </button>
                </li>
            </ul>
            <div class="tab-content mt-5">
                <div id="example-tab-1" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="example-5-tab">
                    <div class="flex justify-end">
                        <div class="box p-5 w-30">
                            <h2 class="text-lg font-bold">Total: $25.560</h2>
                        </div>
                    </div>
                    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2 ">
                        <div class="flex w-full sm:w-auto">
                            <div class="mr-3">
                                <label for="regular-form-1" class="form-label">Desde</label>
                                <input type="text" class="datepicker form-control w-36 block mx-auto" data-single-mode="true">
                            </div>
                            <div class="mr-3">
                                <label for="regular-form-1" class="form-label">Hasta</label>
                                <input type="text" class="datepicker form-control w-36 block mx-auto" data-single-mode="true">
                            </div>

                            <div class="mr-3">
                                <label for="regular-form-1" class="form-label">Usuario</label>
                                <select class="form-select sm:mr-2" aria-label="Default select example">
                                    <option>Chris Evans</option>
                                    <option>Liam Neeson</option>
                                    <option>Daniel Craig</option>
                                </select>
                            </div>
                            <div class="mr-3">
                                <label for="regular-form-1" class="form-label">M. Pago</label>
                                <select class="form-select sm:mr-2" aria-label="Default select example">
                                    <option>Efectivo</option>
                                    <option>Tarjeta</option>
                                    <option>Crédito</option>
                                </select>
                            </div>
                            <div class="mr-3">
                                <button class="btn btn-primary w-24 mt-8"><i data-lucide="filter" class="w-4 h-4 mr-2"></i> Filtrar</button>
                            </div>
                            <div>
                                <button class="btn btn-dark w-24 mt-8"><i data-lucide="printer" class="w-4 h-4 mr-2 text-base"></i> Imprimir</button>
                            </div>
                        </div>

                    </div>

                    <!-- BEGIN: Data List -->
                    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible mt-8">
                        <table class="table table-report -mt-2">
                            <thead style=" background:#c4d5f5; color:#000;">
                                <tr>
                                    <th class="whitespace-nowrap">FECHA</th>
                                    <th class="text-center whitespace-nowrap">CLIENTE</th>
                                    <th class="text-center whitespace-nowrap">Nº PEDIDO</th>
                                    <th class="text-center whitespace-nowrap">PRODUCTO</th>
                                    <th class="text-center whitespace-nowrap">TIPO</th>
                                    <th class="text-center whitespace-nowrap">MEDIO</th>
                                    <th class="text-center whitespace-nowrap">MONTO</th>
                                    <th class="text-center whitespace-nowrap">USUARIO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="intro-x">
                                    <td class="text-center">10/01/2022</td>
                                    <td class="text-center">
                                        <a href="" class="font-medium whitespace-nowrap">1342 - Jon Doe</a>
                                    </td>
                                    <td class="text-center">42587</td>
                                    <td class="text-center">Volantes</td>
                                    <td class="text-center">Abono</td>
                                    <td class="text-center">Efectivo</td>
                                    <td class="text-center">$ 1.250</td>
                                    <td class="text-center">Administrador</td>
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
                <div id="example-tab-2" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="example-6-tab">
                    <!-- BEGIN: Data List -->
                    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible mt-4">
                        <table class="table table-report -mt-2">
                            <thead style=" background:#c4d5f5; color:#000;">
                                <tr>
                                    <th class="whitespace-nowrap">FECHA</th>
                                    <th class="text-center whitespace-nowrap">CLIENTE</th>
                                    <th class="text-center whitespace-nowrap">% FACT.</th>
                                    <th class="text-center whitespace-nowrap">$ sin IVA</th>
                                    <th class="text-center whitespace-nowrap">IVA solo</th>
                                    <th class="text-center whitespace-nowrap">FACTURADO</th>
                                    <th class="text-center whitespace-nowrap">USUARIO</th>
                                    <th class="text-center whitespace-nowrap">OPCIÓN</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="intro-x">
                                    <td class="text-center">10/01/2022</td>
                                    <td class="text-center">
                                        <a href="" class="font-medium whitespace-nowrap">1342 - Jon Doe</a>
                                    </td>
                                    <td class="text-center">100 %</td>
                                    <td class="text-center">$ 1.250</td>
                                    <td class="text-center">$ 1.250</td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">José Pérez</td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center text-success">
                                            <a href="javascript:void();" class="flex items-center mr-3" >
                                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Facturar
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
                <div id="example-tab-3" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="example-6-tab">
                    <div class="flex w-full sm:w-auto">
                        <div class="mr-3">
                            <label for="regular-form-1" class="form-label">Clientes</label>
                            <select class="form-select sm:mr-2" aria-label="Default select example">
                                <option>#5642 - Katrina Sálazar</option>
                                <option>#243 - Orlando Mendoza</option>
                                <option>#1540 - Armando Nuñez</option>
                            </select>
                        </div>
                        <div class="mr-3">
                            <button class="btn btn-primary w-24 mt-8"><i data-lucide="filter" class="w-4 h-4 mr-2"></i> Filtrar</button>
                        </div>
                    </div>
                    <!-- BEGIN: Data List -->
                    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible mt-8">
                        <table class="table table-report -mt-2">
                            <thead style=" background:#c4d5f5; color:#000;">
                                <tr>
                                    <th class="whitespace-nowrap">FECHA</th>
                                    <th class="text-center whitespace-nowrap">CLIENTE</th>
                                    <th class="text-center whitespace-nowrap">% FACT.</th>
                                    <th class="text-center whitespace-nowrap">$ sin IVA</th>
                                    <th class="text-center whitespace-nowrap">IVA solo</th>
                                    <th class="text-center whitespace-nowrap">FACTURADO</th>
                                    <th class="text-center whitespace-nowrap">USUARIO</th>
                                    <th class="text-center whitespace-nowrap">OPCIÓN</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="intro-x">
                                    <td class="text-center">10/01/2022</td>
                                    <td class="text-center">
                                        <a href="" class="font-medium whitespace-nowrap">1342 - Jon Doe</a>
                                    </td>
                                    <td class="text-center">100 %</td>
                                    <td class="text-center">$ 1.250</td>
                                    <td class="text-center">$ 1.250</td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">José Pérez</td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center text-success">
                                            <a href="javascript:void();" class="flex items-center mr-3" >
                                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Facturar
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
            </div>
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
