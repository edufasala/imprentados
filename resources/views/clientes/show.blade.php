@extends('layouts.app')
@section('head')
<title>Clientes - Imprenta</title>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item active" aria-current="page">Clientes</li>
@endsection

@section('content')
<!-- BEGIN: Profile Info -->
<div class="intro-y box px-5 py-5 mt-5">
    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
        <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
            <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                <img alt="Midone - HTML Admin Template" class="rounded-full"
                    src="{{ asset('build/assets/images/' . $fakers[0]['photos'][0]) }}">
                <div
                    class="absolute mb-1 mr-1 flex items-center justify-center bottom-0 right-0 bg-primary rounded-full p-2">
                    <i class="w-4 h-4 text-white" data-lucide="camera"></i>
                </div>
            </div>
            <div class="ml-5">
                <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">Jon Doe</div>
                <div class="text-slate-500">ING. Sistemas</div>
            </div>
        </div>
        <div
            class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
            <div class="font-medium text-center lg:text-left lg:mt-3">Detalles de Contacto</div>
            <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                <div class="truncate sm:whitespace-normal flex items-center">
                    <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> 27-28033514-8
                </div>
                <div class="truncate sm:whitespace-normal flex items-center">
                    <i data-lucide="mail" class="w-4 h-4 mr-2"></i> jondoe@example.com
                </div>
                <div class="truncate sm:whitespace-normal flex items-center">
                    <i data-lucide="phone" class="w-4 h-4 mr-2"></i> 1234567890
                </div>
            </div>
        </div>
        <div
            class="mt-6 lg:mt-0 flex-1 px-5 border-t lg:border-0 border-slate-200/60 dark:border-darkmode-400 pt-5 lg:pt-0">
            <div class="font-medium text-center lg:text-left lg:mt-5">Pedidos</div>
            <div class="flex items-center justify-center lg:justify-start mt-2">
                <div class="mr-2 w-20 flex">
                    Abiertos: <span class="ml-3 font-medium text-success">+23%</span>
                </div>
                <div class="w-3/4">
                    <div class="h-[55px]">
                        <canvas class="simple-line-chart-1 -mr-5"></canvas>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center lg:justify-start">
                <div class="mr-2 w-20 flex">
                    Cancelados: <span class="ml-3 font-medium text-danger">-2%</span>
                </div>
                <div class="w-3/4">
                    <div class="h-[55px]">
                        <canvas class="simple-line-chart-2 -mr-5"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist">
        <li id="datosPersonales-tab" class="nav-item" role="presentation">
            <a href="javascript:;" class="nav-link py-4 active" data-tw-target="#datosPersonales" aria-controls="datosPersonales"
                aria-selected="true" role="tab">
                Empresa
            </a>
        </li>
        <li id="sucursales-tab" class="nav-item" role="presentation">
            <a href="javascript:;" class="nav-link py-4" data-tw-target="#sucursales" aria-selected="false"
                role="tab">
                Sucursales
            </a>
        </li>
        <li id="facturacion-tab" class="nav-item" role="presentation">
            <a href="javascript:;" class="nav-link py-4" data-tw-target="#facturacion" aria-selected="false" role="tab">
                Facturación
            </a>
        </li>
        <li id="pedidos-tab" class="nav-item" role="presentation">
            <a href="javascript:;" class="nav-link py-4" data-tw-target="#pedidos" aria-selected="false" role="tab">
                Pedidos
            </a>
        </li>
    </ul>

    <div class="tab-content border-l border-r border-b ">
        <div id="datosPersonales-1" class="tab-pane leading-relaxed p-5 active mb-4" role="tabpanel"
            aria-labelledby="example-1-tab">
            <div class="grid grid-cols-3 gap-3">
                <div>
                    <label for="vertical-form-1" class="form-label">Razón Social</label>
                    <input id="vertical-form-1" type="text" name="name" class="form-control" value="El Dorado Sol">
                </div>
                <div>
                    <label for="vertical-form-1" class="form-label">CUIT</label>
                    <input id="vertical-form-1" type="text" name="name" class="form-control" value="1234899" >
                </div>
                <div>
                    <label for="vertical-form-1" class="form-label">Posee Sucursal</label>
                    <select class="form-select sm:mr-2" aria-label="Default select example">
                        <option>Si</option>
                        <option>No</option>
                    </select>
                </div>
            </div>
            
        </div>
        <div id="sucursales" class="tab-pane leading-relaxed p-5 mb-4" role="tabpanel"
            aria-labelledby="sucursales-1-tab">
            <div class="grid grid-cols-3 gap-3">
                <div>
                    <label for="vertical-form-1" class="form-label">Razón Social</label>
                    <input id="vertical-form-1" type="text" name="name" class="form-control" value="El Dorado Sol">
                </div>
                <div>
                    <label for="vertical-form-1" class="form-label">CUIT</label>
                    <input id="vertical-form-1" type="text" name="name" class="form-control" value="1234899" >
                </div>
                <div>
                    <label for="vertical-form-1" class="form-label">Comentario</label>
                    <input id="vertical-form-1" type="text" name="name" class="form-control" value="loremp ipsum ..." >
                </div>
            </div>
            
        </div>
        <div id="facturacion" class="tab-pane leading-relaxed p-5 mb-4" role="tabpanel"
            aria-labelledby="sucursales-1-tab">
            <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 mt-2">
                <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">Datos de Tarjeta</div>
            </div>
            {{-- <div class="grid grid-cols-3 gap-3">
                <div>
                    <label for="vertical-form-1" class="form-label">Razón Social</label>
                    <input id="vertical-form-1" type="text" name="name" class="form-control" value="El Dorado Sol">
                </div>
                <div>
                    <label for="vertical-form-1" class="form-label">CUIT</label>
                    <input id="vertical-form-1" type="text" name="name" class="form-control" value="1234899" >
                </div>
                <div>
                    <label for="vertical-form-1" class="form-label">Comentario</label>
                    <input id="vertical-form-1" type="text" name="name" class="form-control" value="loremp ipsum ..." >
                </div>
            </div> --}}
            
        </div>
        <div id="pedidos" class="tab-pane leading-relaxed p-5 mb-4" role="tabpanel"
            aria-labelledby="example-1-tab">
            <!-- BEGIN: Data List -->
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible mt-4">
                <table class="table table-report -mt-2">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">FECHA</th>
                            <th class="text-center whitespace-nowrap">USUARIO</th>
                            <th class="text-center whitespace-nowrap">Nº CLIENTE</th>
                            <th class="text-center whitespace-nowrap">PRODUCTO</th>
                            <th class="text-center whitespace-nowrap">Gr.</th>
                            <th class="text-center whitespace-nowrap">CANT.</th>
                            <th class="text-center whitespace-nowrap">MEDIDA</th>
                            <th class="text-center whitespace-nowrap">PRECIO</th>
                            <th class="text-center whitespace-nowrap">OPCIÓN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="intro-x">
                            <td class="text-center">10/01/2022</td>
                            <td class="text-center">José Pérez</td>
                            <td class="text-center">4258</td>
                            <td class="text-center">Volantes</td>
                            <td class="text-center">150</td>
                            <td class="text-center">2.000</td>
                            <td class="text-center">10x40</td>
                            <td class="text-center">$ 1.250</td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a href="javascript:void();" class="flex items-center mr-3 text-success" >
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i>
                                    </a>
                                    <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                        <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i>
                                    </a>
                                    <!-- BEGIN: Delete Confirmation Modal -->
                                    <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form method="POST" action="" class="modal-body p-0">
                                                    @csrf
                                                    <div class="p-5 text-center">
                                                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                                        <div class="text-3xl mt-5">Está Seguro de Cancelar el Pedido?</div>
                                                        <div class="text-slate-500 mt-2">Loremp ipsum ....</div>
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


@endsection
