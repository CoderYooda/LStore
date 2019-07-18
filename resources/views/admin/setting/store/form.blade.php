@extends('admin.layout.main')

@section('content')
    <form method="POST" action="{{ route('Product_Store') }}">
        @csrf
        <div class="box mb-0">
            <div class="navbar navbar-expand-lg">
                <div class="navbar-text nav-title flex" id="pageTitle">Форма редактирования Магазина</div>
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
                                <a class="nav-link active" href="#" data-toggle="tab" data-target="#tab_store">Магазин</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#tab_general">Общие</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#tab_local">Локализация</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#tab_option">Настройки</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#tab_image">Изображения</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="padding">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="tab_base">
                    @include('admin.setting.store.form_adds.store')
                </div>
                <div class="tab-pane fade" id="tab_data">
                    @include('admin.setting.store.form_adds.general')
                </div>
                <div class="tab-pane fade" id="tab_links">
                    @include('admin.setting.store.form_adds.local')
                </div>
                <div class="tab-pane fade" id="tab_specifications">
                    @include('admin.setting.store.form_adds.option')
                </div>
                <div class="tab-pane fade" id="tab_options">
                    @include('admin.setting.store.form_adds.image')
                </div>
            </div>
        </div>
    </form>
@endsection
