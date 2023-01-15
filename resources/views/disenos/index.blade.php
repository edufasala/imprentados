@extends('layouts.app')
@section('head')
    <title>Diseños - Imprenta</title>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Diseños</li>
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
                        Diseños
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
                        Jorge
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
                        Juan
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
                        María
                    </button>
                </li>
            </ul>
            <div class="tab-content mt-5">
                <div id="example-tab-1" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="example-5-tab">

                    <!-- BEGIN: Data List -->
                    <div class="intro-y col-span-12 overflow-auto 1xl:overflow-visible mt-4">
                        <table class="table table-report mt-2">
                            <thead style=" background:#c4d5f5; color:#000;" >
                                <tr>
                                    <th class="text-center whitespace-nowrap">CLIENTE</th>
                                    <th class="text-center whitespace-nowrap">Nº PEDIDO</th>
                                    <th class="text-center whitespace-nowrap">SUCURSAL</th>
                                    <th class="text-center whitespace-nowrap">PRODUCTO</th>
                                    <th class="text-center whitespace-nowrap">Gr.</th>
                                    <th class="text-center whitespace-nowrap">ENTREGA</th>
                                    <th class="text-center whitespace-nowrap">TAMAÑO</th>
                                    <th class="text-center whitespace-nowrap">ESP.</th>
                                    <th class="text-center whitespace-nowrap">DISEÑO</th>
                                    <th class="text-center whitespace-nowrap">OPCIONES</th>
                                    <th class="text-center whitespace-nowrap">
                                        <div class="dropdown" style="position: relative;">
                                            <a href="javascript:void();" class="dropdown-toggle " aria-expanded="false" data-tw-toggle="dropdown">
                                                <span class="w-5 h-5 flex items-center justify-center">
                                                    <i data-lucide="more-vertical" class="w-4 h-4 mr-1"></i>
                                                </span>
                                            </a>
                                            <div class="dropdown-menu w-40" id="_08w37hajd" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 38px);">
                                                <ul class="dropdown-content">
                                                    <li>
                                                        <a href="javascript:void();" class="dropdown-item">
                                                            Fecha Entrega
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void();" class="dropdown-item">
                                                            Clientes
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void();" class="dropdown-item">
                                                            Productos
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void();" class="dropdown-item">
                                                            Gramaje
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void();" class="dropdown-item">
                                                            Espacios
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void();" class="dropdown-item">
                                                            Diseños
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void();" class="dropdown-item">
                                                            Comenzados
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="intro-x">
                                    <td class="text-center">
                                        <a href="" class="font-medium whitespace-nowrap">1342 - Jon Doe</a>
                                    </td>
                                    <td class="text-center">42587</td>
                                    <td class="text-center">Sucursal</td>
                                    <td class="text-center">Volantes</td>
                                    <td class="text-center">98</td>
                                    <td class="text-center">12/03/2023</td>
                                    <td class="text-center">10x20</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">Nuevo</td>
                                    <td class="text-center" colspan="2">
                                        <div class="flex justify-center items-center">
                                            <a href="javascript:void();" class="flex items-center mr-3 text-primary" data-tw-toggle="modal" data-tw-target="#ver-diseno">
                                                <i data-lucide="eye" class="w-4 h-4 mr-1"></i>
                                            </a>
                                            <a href="javascript:void();" class="flex items-center mr-3 text-success" >
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
                                                                Diseños
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void();" class="dropdown-item">
                                                                Jorge
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void();" class="dropdown-item">
                                                                Juan
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void();" class="dropdown-item">
                                                                María
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


                    <div id="ver-diseno" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-t"></div>
                            <form class="modal-content" action="" method="POST">
                                @csrf
                                <!-- BEGIN: Modal Header -->
                                <div class="modal-header">
                                    <h2 class="font-medium text-base mr-auto">Pedido #424323</h2>
                                    <a data-tw-dismiss="modal" href="javascript:;">
                                        <i data-lucide="x" class="w-8 h-8 text-slate-400"></i>
                                    </a>
                                </div>
                                <!-- END: Modal Header -->
                                <div class="modal-body p-5 ">
                                    <div class="grid grid-cols-2 gap-2">
                                        <div>
                                            <span class="font-bold">Fecha Pedido:</span> 12/01/2023
                                        </div>
                                        <div>
                                            <span class="font-bold">Fecha Entrega:</span>  12/03/2023
                                        </div>
                                        <div>
                                            <span class="font-bold">Cliente:</span> #1054 - Pizzeria Palermo
                                        </div>
                                        <div>
                                            <span class="font-bold">Vendedor:</span> Ezequiel Mendez
                                        </div>
                                        <div>
                                            <span class="font-bold">Sucursal:</span> Palermo
                                        </div>
                                    </div>


                                    <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 mt-2">
                                        <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">Datos Representante</div>
                                    </div>


                                    <div class="grid grid-cols-3 gap-3 mt-2">
                                        <div>
                                            <label for="vertical-form-1" class="form-label">Nombre</label>
                                            <input id="vertical-form-1" type="text" name="name" class="form-control" value="Maria Fernandez" readonly>
                                        </div>
                                        <div>
                                            <label for="vertical-form-1" class="form-label">Cargo</label>
                                            <input id="vertical-form-1" type="text" name="name" class="form-control" value="Dueña" readonly>
                                        </div>
                                        <div>
                                            <label for="vertical-form-1" class="form-label">DNI</label>
                                            <input id="vertical-form-1" type="text" name="name" class="form-control" value="1234789" readonly>
                                        </div>
                                        <div>
                                            <label for="vertical-form-1" class="form-label">Teléfono</label>
                                            <input id="vertical-form-1" type="text" name="name" class="form-control" value="123-34433-1332" readonly>
                                        </div>
                                        <div>
                                            <label for="vertical-form-1" class="form-label">Correo</label>
                                            <input id="vertical-form-1" type="text" name="name" class="form-control" value="example@example.com" readonly>
                                        </div>
                                    </div>

                                    <ul class="nav nav-tabs mt-4" role="tablist">
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
                                                Pedido
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
                                                Taller y Entrega
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
                                                $
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
                                                Estatus
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
                                                Notas
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-content border-l border-r border-b">
                                        <div id="example-tab-1" class="tab-pane leading-relaxed p-5 active" role="tabpanel" aria-labelledby="example-1-tab">
                                            <div class="grid grid-cols-3 gap-3">
                                                <div>
                                                    <label for="vertical-form-1" class="form-label">Producto</label>
                                                    <input id="vertical-form-1" type="text" name="name" class="form-control" value="Maria Fernandez" readonly>
                                                </div>
                                                <div>
                                                    <label for="vertical-form-1" class="form-label">Medida</label>
                                                    <input id="vertical-form-1" type="text" name="name" class="form-control" value="Dueña" readonly>
                                                </div>
                                                <div>
                                                    <label for="vertical-form-1" class="form-label">Cantidad</label>
                                                    <input id="vertical-form-1" type="text" name="name" class="form-control" value="1234789" readonly>
                                                </div>
                                                <div>
                                                    <label for="vertical-form-1" class="form-label">Espacio</label>
                                                    <input id="vertical-form-1" type="text" name="name" class="form-control" value="123-34433-1332" readonly>
                                                </div>
                                                <div>
                                                    <label for="vertical-form-1" class="form-label">Gramaje</label>
                                                    <input id="vertical-form-1" type="text" name="name" class="form-control" value="example@example.com" readonly>
                                                </div>
                                                <div>
                                                    <label for="vertical-form-1" class="form-label">Lados</label>
                                                    <input id="vertical-form-1" type="text" name="name" class="form-control" value="example@example.com" readonly>
                                                </div>
                                                <div>
                                                    <label for="vertical-form-1" class="form-label">Diseño</label>
                                                    <input id="vertical-form-1" type="text" name="name" class="form-control" value="example@example.com" readonly>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-1 mt-3">
                                                <div>
                                                    <label for="vertical-form-1" class="form-label">Descripcion</label>
                                                    <textarea id="vertical-form-1" type="text" name="name" class="form-control" ></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div id="example-tab-2" class="tab-pane leading-relaxed p-5" role="tabpanel" aria-labelledby="example-2-tab">
                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                        </div> --}}
                                    </div>

                                    <div class="grid grid-cols-3 gap-3 mt-2">
                                        <div>
                                            <label for="vertical-form-1" class="form-label">Aprobado</label>
                                            <select class="form-select mt-2 sm:mr-2" aria-label="Default select example">
                                                <option>Si</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="vertical-form-1" class="form-label">Responsabilidad</label>
                                            <select class="form-select mt-2 sm:mr-2" aria-label="Default select example">
                                                <option>Si</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="vertical-form-1" class="form-label">Finalizado</label>
                                            <select class="form-select mt-2 sm:mr-2" aria-label="Default select example">
                                                <option>Si</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <!-- BEGIN: Modal Footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-dark w-25 mr-1">Stand By</button>
                                    <button type="button" class="btn btn-warning w-20 mr-1">Ventas</button>
                                    <button type="submit" class="btn btn-success w-20">Imprimir</button>
                                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cerrar</button>
                                </div>
                                <!-- END: Modal Footer -->
                            </form>
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
