<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Index | Apply - Bootstrap 4 Web Application</title>
    <meta name="description" content="Responsive, Bootstrap, BS4" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="../assets/images/logo.svg">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.svg">
    <!-- style -->
    <link rel="stylesheet" href="{{mix('css/admin/core.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{mix('css/admin/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{mix('css/admin/custom.css')}}" type="text/css" />
    <!-- endbuild -->
</head>
<body class="container fixed-aside pace-done">
<div class="p-5 dark-white" id="features">
    <div class="p-lg-5">
        <h4 class="display-4 _700 l-s-n-1x">
            <span class="text-primary">LStore</span>
            <span class="text-muted">Админ</span>
            <span class="text-muted">
          <span class="text-muted">панель</span>
                    </span>
        </h4>
        <h5 class="text-muted mb-5 text-serif">Система управления вашим новым сайтом</h5>
        <div class="row">
            <div class="col-6 col-md-4 my-4">
                <h6 class="_600 my-2">Bootstrap 4 поддержка</h6>
                <p class="text-muted">Полная поддержка Bootstrap 4, включая js. ничего не вырезано</p>
            </div>
            <div class="col-6 col-md-4 my-4">
                        <span class="text-primary">
            <i class="ion-ios-repeat-outline text-3x"></i>
          </span>
                <h6 class="_600 my-2">Ajax Подгрузка</h6>
                <p class="text-muted">Использование Html5 pushState технологии позволит подгружать страницы без перезагрузок и ожиданий</p>
            </div>
            <div class="col-6 col-md-4 my-4">
                        <span class="text-primary">
            <i class="ion-ios-albums-outline text-3x"></i>
          </span>
                <h6 class="_600 my-2">Lazy load Модули</h6>
                <p class="text-muted">Все js компоненты используют технологию "ленивой подгрузки"</p>
            </div>
            <div class="col-6 col-md-4 my-4">
                        <span class="text-primary">
            <i class="ion-ios-paper-outline text-3x"></i>
          </span>
                <h6 class="_600 my-2">Модульная система</h6>
                <p class="text-muted">Вы можете использовать только необходимые модули и не нагружать лишним функционалом систему</p>
            </div>
            <div class="col-6 col-md-4 my-4">
                        <span class="text-primary">
            <i class="ion-logo-sass text-3x"></i>
          </span>
                <h6 class="_600 my-2">SASS Поддержка</h6>
                <p class="text-muted">Все стили компилируются и сжимаются для облегчения веса страниц</p>
            </div>
            <div class="col-6 col-md-4 my-4">
                        <span class="text-primary">
            <i class="ion-logo-nodejs text-3x"></i>
          </span>
                <h6 class="_600 my-2">NPM Сборка</h6>
                <p class="text-muted">Все используемые модули включены в репозиторий Npm, очень просты в установке.</p>
            </div>
        </div>
    </div>
</div>
<footer class="dark pos-rlt">
    <div class="footer dk">
        <div class="text-center p-5">
            <div class="clearfix text-lg">
                <strong>LStore</strong> система управления сайтом
            </div>
            <div class="nav justify-content-center my-2 text-primary">

                @auth
                    <a class="nav-link" href="{{ route('Dashboard') }}">
                        <span class="nav-text">Панель управления</span>
                    </a>
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <span class="nav-text">Выход</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a class="nav-link" href="{{ route('login') }}" data-scroll-to="demos">
                        <span class="nav-text">Вход</span>
                    </a>
                    <a class="nav-link" href="{{ route('register') }}" data-scroll-to="demos">
                        <span class="nav-text">Регистрация</span>
                    </a>
                @endauth

                <a class="nav-link" href="#features" data-scroll-to="features">
                    <span class="nav-text">Features</span>
                </a>
                <a class="nav-link" href="http://themeforest.net/user/flatfull/portfolio?ref=flatfull">
                    <span class="nav-text">Support</span>
                </a>
                <a class="nav-link" href="http://themeforest.net/user/flatfull/portfolio?ref=flatfull">
                            <span class="nav-text">
              Purchase
            </span>
                </a>
            </div>
        </div>
        <div class="b b-b"></div>
        <div class="p-5">
            <div class="row footer-bottom">
                <div class="col-sm-8">
                    <small class="text-muted">&copy; Copyright 2019. Все права защищены.</small>
                </div>
                <div class="col-sm-4">
                    <div class="text-sm-right text-xs-left">
                        <strong>CoderYooda</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>


