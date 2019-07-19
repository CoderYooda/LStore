@extends('admin.layout.main')

@section('content')
    <div class="box mb-0">
        <div class="navbar navbar-expand-lg">
            <div class="navbar-text nav-title flex" id="pageTitle">Мои магазины</div>
            <ul class="nav flex-row order-lg-2">
                <li class="nav-item">
                    <a href="{{ route('AddStore') }}" class="btn btn-icon btn-social white" title="Новый магазин">
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-plus green"></i>
                    </a>
                    <a href="{{ route('Products') }}" class="btn btn-icon btn-social white" title="Назад">
                        <i class="fa fa-chevron-left"></i>
                        <i class="fa fa-chevron-left green"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="padding">
        <div class="row">
            @foreach($stores as $store)
                @include('admin.setting.store.parts.single_store')
            @endforeach
        </div>
    </div>
@endsection
