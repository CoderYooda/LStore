<!DOCTYPE html>
<html lang="ru">
@include('admin.template.head')
<body>
{!! \App\Http\Controllers\admin\common\TemplateController::getHeader() !!}
<div class="app" id="app">
    {!! \App\Http\Controllers\admin\common\TemplateController::getAside() !!}
    <div id="content" class="app-content box-shadow-3" role="main">
        <div class="hide">
            <div class="content-header" id="content-header"></div>
        </div>
        <div class="content-main " id="content-main">
            <div data-plugin="waves">
                @yield('content')
            </div>
            <div class="content-footer white " id="content-footer">
                <div class="d-flex p-3">
                    <span class="text-sm text-muted flex">&copy; Copyright. Flatfull</span>
                    <div class="text-sm text-muted">Version 1.2.0</div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.support.switcher')
<script src="{{mix('js/admin/core.js')}}"></script>
<!-- core -->
<script src="{{mix('js/admin/app.js')}}"></script>
<!-- endbuild -->
</body>
</html>
