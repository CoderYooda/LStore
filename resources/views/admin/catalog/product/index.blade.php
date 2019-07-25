@extends('admin.layout.main')

@section('content')
<div class="content-main d-flex flex" id="content-main">
    <!-- ############ Main START-->
    <div class="d-flex flex fixed-height">
        <div class="fade aside aside-sm b-r" id="content-aside">
            <div class="modal-dialog d-flex flex-column w-md h-100 light lt">
                <div class="scrollable hover">
                    <div class="p-3">
                        <div class="nav-active-border b-success left right box">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link block active" href="#" data-toggle="tab" data-target="#tab1">
                                        Товары
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link block" href="#" data-toggle="tab" data-target="#tab2">
                                        У поставщиков
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link block" href="#" data-toggle="tab" data-target="#tab3">
                                        Поступления
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link block" href="#" data-toggle="tab" data-target="#tab4">
                                        Продажи
                                        <span class="float-right"><span class="badge success">8</span></span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link block" href="#" data-toggle="tab" data-target="#tab5">
                                        Заказы клиентов
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link block" href="#" data-toggle="tab" data-target="#tab6">
                                        Заказы у поставщика
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link block" href="#" data-toggle="tab" data-target="#tab7">
                                        Корренктировка склада
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- footer -->
                <div class="p-2 mt-auto p-3">
                    Footer
                </div>
                <!-- / -->
            </div>
        </div>
        <div class="d-flex flex" id="content-body">
            <div class="d-flex flex-column flex white">
                <div class="tab-content">
                    <div class="tab-pane animate fadeIn text-muted active" id="tab1">
                        <div class="navbar flex-nowrap box-shadow">
                            <a data-toggle="modal" data-target="#content-aside" data-modal class="mr-1 d-md-none">
                        <span class="btn btn-sm btn-icon primary">
                            <i class="fa fa-th"></i>
                        </span>
                            </a>
                            <div class="input-group" style="width: 400px;">
                                <input type="text" class="form-control" placeholder="Поиск по артикулу">
                            </div>
                            <div class="nav nav-xs flex-row no-border">
                                    <button class="btn white active modal_open mr-1"
                                            data-plugin="modal_load"
                                            data-name="add_category"
                                            data-url="{{ route('AddCategoryModal') }}"
                                    ><i class="fa fa-plus"></i> Новая категория</button>
                                    <button class="btn white active modal_open"
                                            data-plugin="modal_load"
                                            data-name="add_product"
                                            data-url="{{ route('AddProductModal') }}"
                                    ><i class="fa fa-plus"></i> Новый товар</button>
                            </div>
                        </div>
                        <div class="scroll-y">
                            {{--                    <div class="p-3">--}}
                            <div class="table-responsive">
                                <table id="datatable" class="table v-middle p-0 m-0 box" data-plugin="dataTable">
                                    <thead>
                                    <tr>
                                        <th>Наименование</th>
                                        <th>Артикул</th>
                                        <th>Бренд</th>
                                        <th>Наличие</th>
                                        <th>Цена</th>
                                        <th>Заявки</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            {{--                    </div>--}}
                        </div>
                    </div>
                    <div class="tab-pane animate fadeIn text-muted" id="tab2">
                        Components
                    </div>
                    <div class="tab-pane animate fadeIn text-muted" id="tab3">
                        UI kits
                    </div>
                    <div class="tab-pane animate fadeIn text-muted" id="tab4">
                        Продажи
                    </div>
                    <div class="tab-pane animate fadeIn text-muted" id="tab5">
                        Заказы клиентов
                    </div>
                    <div class="tab-pane animate fadeIn text-muted" id="tab6">
                        Заказы у поставщика
                    </div>
                    <div class="tab-pane animate fadeIn text-muted" id="tab7">
                        Корренктировка склада
                    </div>
                </div>
                <div class="p-3 b-t mt-auto">
                    Content footer
                </div>
            </div>
        </div>
    </div>
    <!-- ############ Main END-->
</div>


{{--        <a href="{{ route('AddProduct') }}">Создать Товар</a>--}}
{{--        <div class="box">--}}
{{--            <table data-plugin="bootstrapTable" id="table"--}}
{{--                   data-toolbar="#toolbar"--}}
{{--                   data-search="true"--}}
{{--                   data-show-refresh="true"--}}
{{--                   data-show-columns="true"--}}
{{--                   data-show-export="true"--}}
{{--                   data-detail-view="false"--}}
{{--                   data-mobile-responsive="true"--}}
{{--                   data-pagination="true"--}}
{{--                   data-page-list="[10, 25, 50, 100, ALL]"--}}
{{--                   data-side-pagination="server"--}}
{{--                   data-url="{{ asset('/assets/api/bootstrap-table.json') }}" class="table">--}}
{{--            </table>--}}
{{--        </div>--}}
@endsection
