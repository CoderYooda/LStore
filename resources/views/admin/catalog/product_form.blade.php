@extends('admin.layout.main')

@section('content')
    <form method="POST" action="{{ route('Product_Store') }}">
        @csrf
        <div class="box mb-0">
            <div class="navbar navbar-expand-lg">
                <div class="navbar-text nav-title flex" id="pageTitle">Название какого очень длинного товара то товара</div>
                <ul class="nav flex-row order-lg-2">
                    <li class="nav-item">
                        <button type="submit" href="#" class="btn btn-icon btn-social white" title="Сохранить">
                            <i class="fa fa-save"></i>
                            <i class="fa fa-save indigo"></i>
                        </button>
                        <a href="{{ route('Products') }}" class="btn btn-icon btn-social white" title="Назад">
                            <i class="fa fa-chevron-left"></i>
                            <i class="fa fa-chevron-left green"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="white bg b-b px-3">
            <div class="row">
                <div class="col-sm-12">
                    <div class="py-4 clearfix nav-active-theme">
                        <ul class="nav nav-pills nav-sm">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" data-toggle="tab" data-target="#tab_base">Общие</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#tab_data">Данные</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#tab_links">Связи</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#tab_specifications">Характеристики</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#tab_options">Опции</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#tab_periodicity">Периодичность</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#tab_discount">Скидка</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#tab_stock">Акции</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#tab_images">Изображения</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#tab_bonuses">Бонусы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#tab_seo">SEO</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="padding">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="tab_base">
                    @include('admin.catalog.product_form_adds.base')
                </div>
                <div class="tab-pane fade" id="tab_data">
                    @include('admin.catalog.product_form_adds.data')
                </div>
                <div class="tab-pane fade" id="tab_links">
                    @include('admin.catalog.product_form_adds.links')
                </div>
                <div class="tab-pane fade" id="tab_specifications">
                    @include('admin.catalog.product_form_adds.specifications')
                </div>
                <div class="tab-pane fade" id="tab_options">
                    @include('admin.catalog.product_form_adds.options')
                </div>
                <div class="tab-pane fade" id="tab_periodicity">
                    @include('admin.catalog.product_form_adds.periodicity')
                </div>
                <div class="tab-pane fade" id="tab_discount">
                    @include('admin.catalog.product_form_adds.discount')
                </div>
                <div class="tab-pane fade" id="tab_stock">
                    @include('admin.catalog.product_form_adds.stock')
                </div>
                <div class="tab-pane fade" id="tab_images">
                    @include('admin.catalog.product_form_adds.images')
                </div>
                <div class="tab-pane fade" id="tab_bonuses">
                    @include('admin.catalog.product_form_adds.bonuses')
                </div>
                <div class="tab-pane fade" id="tab_seo">
                    @include('admin.catalog.product_form_adds.seo')
                </div>
            </div>
        </div>
    </form>
@endsection
