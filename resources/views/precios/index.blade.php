@extends('layouts.app')
@section('head')
    <title>Precios - Imprenta</title>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Precios</li>
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
                        90 Gr.
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
                        150 Gr.
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
                        Tarjetas
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
                        Diseños
                    </button>
                </li>
            </ul>
            <div class="tab-content mt-5">
                <div id="example-tab-1" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="example-5-tab">
                    <div class="flex justify-end">
                        <button class="btn btn-dark w-24 mr-1 mb-2"><i data-lucide="printer" class="w-4 h-4 mr-2 text-base"></i> Imprimir</button>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mt-5">
                        <div class="box p-5">
                            <span class="font-bold">Producto:</span> Volantes <br>
                            <span class="font-bold">Gramaje:</span> 150 <br>
                            <span class="font-bold">Descripción:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                        </div>

                        <!-- ... -->
                        <div class="box p-5">
                            <div class="overflow-x-auto">
                                <table class="table table-sm">
                                    <thead class="table-light">
                                        <tr>
                                            <th colspan="7" class="whitespace-nowrap">PRECIO POR ESPACIO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="whitespace-nowrap">Espacio</th>
                                            <td class="whitespace-nowrap">1</td>
                                            <td class="whitespace-nowrap">2 a 3</td>
                                            <td class="whitespace-nowrap">4 a 7</td>
                                            <td class="whitespace-nowrap">8 a 15</td>
                                            <td class="whitespace-nowrap">16 a 31</td>
                                            <td class="whitespace-nowrap">más de 32</td>
                                        </tr>
                                        <tr>
                                            <th class="whitespace-nowrap">Precio</th>
                                            <td class="whitespace-nowrap">$1000</td>
                                            <td class="whitespace-nowrap">$1000</td>
                                            <td class="whitespace-nowrap">$1000</td>
                                            <td class="whitespace-nowrap">$1000</td>
                                            <td class="whitespace-nowrap">$1000</td>
                                            <td class="whitespace-nowrap">$1000</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="box p-5">
                            <div class="overflow-x-auto">
                                <table class="table table-sm">
                                    <thead class="table-light">
                                        <tr>
                                            <th colspan="5" class="whitespace-nowrap">10 x 7,5 - 150 gr.</th>
                                        </tr>
                                        <tr>
                                            <th>Cantidad</th>
                                            <th>Esp.</th>
                                            <th>Descripción</th>
                                            <th>1 Sep.</th>
                                            <th>3 Sem.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="whitespace-nowrap">5.000</td>
                                            <td class="whitespace-nowrap">0.5</td>
                                            <td class="whitespace-nowrap">-</td>
                                            <td class="whitespace-nowrap">$500</td>
                                            <td class="whitespace-nowrap">$1000</td>
                                        </tr>
                                        <tr>
                                            <td class="whitespace-nowrap">10.000</td>
                                            <td class="whitespace-nowrap">1</td>
                                            <td class="whitespace-nowrap">-</td>
                                            <td class="whitespace-nowrap">$1000</td>
                                            <td class="whitespace-nowrap">$1000</td>
                                        </tr>
                                        <tr>
                                            <td class="whitespace-nowrap">15.000</td>
                                            <td class="whitespace-nowrap">3</td>
                                            <td class="whitespace-nowrap">-</td>
                                            <td class="whitespace-nowrap">$1000</td>
                                            <td class="whitespace-nowrap">$1000</td>
                                        </tr>
                                        <tr>
                                            <td class="whitespace-nowrap">20.000</td>
                                            <td class="whitespace-nowrap">4</td>
                                            <td class="whitespace-nowrap">-</td>
                                            <td class="whitespace-nowrap">$1000</td>
                                            <td class="whitespace-nowrap">$1000</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="box p-5">
                            <div class="overflow-x-auto">
                                <table class="table table-sm">
                                    <thead class="table-light">
                                        <tr class="font-bold">
                                            <th colspan="5" class="whitespace-nowrap">10 x 15 - 150 gr.</th>
                                        </tr>
                                        <tr>
                                            <th>Cantidad</th>
                                            <th>Esp.</th>
                                            <th>Descripción</th>
                                            <th>1 Sep.</th>
                                            <th>3 Sem.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="whitespace-nowrap">5.000</td>
                                            <td class="whitespace-nowrap">0.5</td>
                                            <td class="whitespace-nowrap">-</td>
                                            <td class="whitespace-nowrap">$500</td>
                                            <td class="whitespace-nowrap">$1000</td>
                                        </tr>
                                        <tr>
                                            <td class="whitespace-nowrap">10.000</td>
                                            <td class="whitespace-nowrap">1</td>
                                            <td class="whitespace-nowrap">-</td>
                                            <td class="whitespace-nowrap">$1000</td>
                                            <td class="whitespace-nowrap">$1000</td>
                                        </tr>
                                        <tr>
                                            <td class="whitespace-nowrap">15.000</td>
                                            <td class="whitespace-nowrap">3</td>
                                            <td class="whitespace-nowrap">-</td>
                                            <td class="whitespace-nowrap">$1000</td>
                                            <td class="whitespace-nowrap">$1000</td>
                                        </tr>
                                        <tr>
                                            <td class="whitespace-nowrap">20.000</td>
                                            <td class="whitespace-nowrap">4</td>
                                            <td class="whitespace-nowrap">-</td>
                                            <td class="whitespace-nowrap">$1000</td>
                                            <td class="whitespace-nowrap">$1000</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="example-tab-2" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="example-6-tab">

                </div>
                <div id="example-tab-3" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="example-6-tab">

                </div>
                <div id="example-tab-4" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="example-6-tab">

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
