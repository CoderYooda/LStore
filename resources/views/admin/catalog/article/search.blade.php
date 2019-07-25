@extends('admin.layout.main')

@section('content')
<div class="padding">


    <div class="box">
        <div class="box-header">
            <h3>Table with elements</h3>
        </div>
        <div class="p-2">
            <div class="row">
                <div class="col-sm-5">
                    <select class="custom-select w-sm d-inline v-middle">
                        <option value="0">Bulk action</option>
                        <option value="1">Delete selected</option>
                        <option value="2">Bulk edit</option>
                        <option value="3">Export</option>
                    </select>
                    <button class="btn white">Apply</button>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
              <button class="btn white" type="button">Go!</button>
            </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t">
                <thead>
                <tr>
                    <th style="width:20px;">
                        <label class="ui-check m-0">
                            <input type="checkbox">
                            <i></i>
                        </label>
                    </th>
                    <th>Project</th>
                    <th>Task</th>
                    <th>Date</th>
                    <th style="width:50px;"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <label class="ui-check m-0">
                            <input type="checkbox" name="post[]">
                            <i class="dark-white"></i>
                        </label>
                    </td>
                    <td>Idrawfast</td>
                    <td>4c</td>
                    <td>Jul 25, 2013</td>
                    <td>
                        <a href="#" class="active" data-toggle-class="">
                            <i class="fa fa-check text-success d-none"></i>
                            <i class="fa fa-times text-danger d-inline"></i>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <footer class="light lt p-2">
            <div class="row">
                <div class="col-sm-4 d-block-sm">
                    <select class="custom-select w-sm d-inline v-middle">
                        <option value="0">Bulk action</option>
                        <option value="1">Delete selected</option>
                        <option value="2">Bulk edit</option>
                        <option value="3">Export</option>
                    </select>
                    <button class="btn white">Apply</button>
                </div>
                <div class="col-sm-4">
                    <small class="text-muted py-2 d-block text-center">showing 20-30 of 50 items</small>
                </div>
                <div class="col-sm-4">
                    <ul class="pagination justify-content-sm-end m-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">»</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>







    <div class="b-b b-primary nav-active-primary">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#" data-toggle="tab" data-target="#tab4">Склад</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="tab" data-target="#tab5">Trinity Parts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="tab" data-target="#tab6">Автоимпорт</a>
            </li>
        </ul>
    </div>
    <div class="tab-content p-3 mb-3">
        <div class="tab-pane animate fadeIn text-muted active" id="tab4">
            Pages
        </div>
        <div class="tab-pane animate fadeIn text-muted" id="tab5">
            <div class="list-group box">
{{--                @foreach($brands['data'] as $brand)--}}
{{--                    <a href="#" class="list-group-item">--}}
{{--                        <span class="float-right"><i class="fa fa-chevron-right"></i></span>{{ $brand['producer'] }}--}}
{{--                    </a>--}}
{{--                @endforeach--}}
            </div>
        </div>
        <div class="tab-pane animate fadeIn text-muted" id="tab6">
            UI kits
        </div>
    </div>



</div>
@endsection
