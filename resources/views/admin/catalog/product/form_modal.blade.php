<div id="add_product" class="" data-backdrop="static">
    <form action="{{ route('ProductStore') }}" method="POST">
        @csrf
        <div class="modal-dialog animate" id="animate" style="z-index: 1041;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Новая номенклатура</h5>
                    <div class="box-tool">
                        <ul class="nav nav-xs">
                            <li class="nav-item">
                                <a class="nav-link" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-close"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="">
                    <div class="row">
                        <div class="col-sm-4 pr-0">
                            <div class="nav-active-primary" style="border-right: 0.1px solid #eee;">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link block active" href="#" data-toggle="tab" data-target="#tab_m1">
                                            Основные
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link block"href="#" data-toggle="tab" data-target="#tab_m2">
                                            Настройка цен
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link block" href="#" data-toggle="tab" data-target="#tab_m3">
                                            Описание
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link block" href="#" data-toggle="tab" data-target="#tab_m4">
                                            Заявки клиентов
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link block" href="#" data-toggle="tab" data-target="#tab_m5">
                                            В пути
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link block" href="#" data-toggle="tab" data-target="#tab_m6">
                                            Наличие на складах
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link block disabled" href="#" data-toggle="tab" data-target="#tab_m7">
                                            Журнал поступлений
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-8 pl-0">
                            <div class="tab-content">
                                <div class="tab-pane animate fadeIn text-muted active" id="tab_m1">
                                    <div class="p-3">
                                        @include('admin.catalog.product.form_adds.modal_base')
                                    </div>
                                </div>
                                <div class="tab-pane animate fadeIn text-muted" id="tab_m2">
                                    Components2
                                </div>
                                <div class="tab-pane animate fadeIn text-muted" id="tab_m3">
                                    UI kits3
                                </div>
                                <div class="tab-pane animate fadeIn text-muted" id="tab_m4">
                                    Продажи4
                                </div>
                                <div class="tab-pane animate fadeIn text-muted" id="tab_m5">
                                    Заказы клиентов5
                                </div>
                                <div class="tab-pane animate fadeIn text-muted" id="tab_m6">
                                    Заказы у поставщика6
                                </div>
                                <div class="tab-pane animate fadeIn text-muted" id="tab_m7">
                                    Корренктировка склада7
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn danger p-x-md">Создать</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function formatRepo (repo) {
            return 'Категория: '+repo.text;
        }
        var main_category = $('#main_category').select2({
            minimumResultsForSearch: 2,
            templateSelection: formatRepo
        });
        main_category.data('select2').$container.addClass("flex-wrap");

        function formatRepo2 (repo) {
            return 'Производитель: '+repo.text;
        }
        var main_supplier = $('#main_supplier').select2({
            minimumResultsForSearch: 2,
            templateSelection: formatRepo2
        });
        main_supplier.data('select2').$container.addClass("flex-wrap");

        var width = 600;
        var id = 'add_product';

        initDragModal(width, id)
    </script>
</div>