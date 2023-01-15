@extends('layouts.app')
@section('head')
    <title>Entregas y Cobros - Imprenta</title>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Entregas y Cobros</li>
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
                        Entregas
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
                        Moto
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
                        ML
                    </button>
                </li>
                <li id="example-4-tab" class="nav-item flex-1" role="presentation">
                    <button
                        class="nav-link w-full py-2"
                        data-tw-toggle="pill"
                        data-tw-target="#example-tab-4"
                        type="button"
                        role="tab"
                        aria-controls="example-tab-4"
                        aria-selected="false"
                    >
                        Interior
                    </button>
                </li>
                <li id="example-5-tab" class="nav-item flex-1" role="presentation">
                    <button
                        class="nav-link w-full py-2"
                        data-tw-toggle="pill"
                        data-tw-target="#example-tab-5"
                        type="button"
                        role="tab"
                        aria-controls="example-tab-5"
                        aria-selected="false"
                    >
                        Retira
                    </button>
                </li>
                <li id="example-6-tab" class="nav-item flex-1" role="presentation">
                    <button
                        class="nav-link w-full py-2"
                        data-tw-toggle="pill"
                        data-tw-target="#example-tab-6"
                        type="button"
                        role="tab"
                        aria-controls="example-tab-6"
                        aria-selected="false"
                    >
                        Deudores
                    </button>
                </li>
            </ul>
            <div class="tab-content mt-5">
                <div id="example-tab-1" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="example-5-tab">
                    <div class="flex justify-end">
                        <div class="box p-5 w-80">
                            <h2 class="text-lg font-bold">Pedidos por Entregar: 50</h2>
                        </div>
                    </div>

                    <!-- BEGIN: Data List -->
                    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible mt-8">

                        <table class="table table-report -mt-2">
                            <thead style=" background:#c4d5f5; color:#000;" >
                                <tr>
                                    <th class="text-center whitespace-nowrap">CLIENTE</th>
                                    <th class="text-center whitespace-nowrap">BULTOS</th>
                                    <th class="text-center whitespace-nowrap">TRABAJOS</th>
                                    <th class="text-center whitespace-nowrap">ESPECIAL</th>
                                    <th class="text-center whitespace-nowrap">ENVIO</th>
                                    <th class="text-center whitespace-nowrap">FECHA</th>
                                    <th class="text-center whitespace-nowrap">DEUDA</th>
                                    <th class="text-center whitespace-nowrap">OPCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="intro-x">
                                    <td class="text-center">
                                        <a href="" class="font-medium whitespace-nowrap">1342 - Jon Doe</a>
                                    </td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="star" data-lucide="star" class="lucide lucide-star text-pending fill-pending/30 w-4 h-4 mr-1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                    </td>
                                    <td class="text-center">No Coordinado</td>
                                    <td class="text-center">10/01/2022</td>
                                    <td class="text-center">$ 1.250</td>
                                    <td class="text-center">
                                        <div class="flex justify-center items-center ">
                                            <a href="javascript:void();" class="flex items-center mr-3" >
                                                <i data-lucide="user" class="w-4 h-4 mr-1"></i>
                                            </a>
                                            <a href="javascript:void();" class="flex items-center mr-3" >
                                                <i data-lucide="dollar-sign" class="w-4 h-4 mr-1"></i>
                                            </a>
                                            <a href="javascript:void();" class="flex items-center mr-3" >
                                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i>
                                            </a>
                                            <div class="dropdown" style="position: relative;">
                                                <a href="javascript:void();" class="dropdown-toggle" aria-expanded="false" data-tw-toggle="dropdown">
                                                    <span class="w-5 h-5 flex items-center justify-center">
                                                        <i data-lucide="more-vertical" class="w-4 h-4 mr-1"></i>
                                                    </span>
                                                </a>
                                                <div class="dropdown-menu w-40" id="_08w37hajd" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 38px);">
                                                    <ul class="dropdown-content">
                                                        <li>
                                                            <a href="javascript:void();" class="dropdown-item">
                                                                Moto
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void();" class="dropdown-item">
                                                                Mercado Libre
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void();" class="dropdown-item">
                                                                Interior
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void();" class="dropdown-item">
                                                                Retira
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void();" class="dropdown-item text-danger">
                                                                No Entregado
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
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
                <div id="example-tab-2" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="example-6-tab">
                    <!-- BEGIN: Data List -->
                    <h1>En Construccion</h1>
                </div>
                <div id="example-tab-3" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="example-6-tab">
                    <!-- BEGIN: Data List -->
                    <h1>En Construccion</h1>
                </div>
            </div>
        </div>
        <!-- END: Data List -->

    </div>
    <!-- BEGIN: Crear Usuario -->
    <!-- END: Delete Confirmation Modal -->


@endsection
