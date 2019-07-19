<div id="aside" class="app-aside fade box-shadow-x white nav-expand white" aria-hidden="true">
    <div class="sidenav modal-dialog dk white">
        <!-- sidenav top -->
        <div class="navbar d-lg-none">
            <!-- brand -->
            <a href="index.html" class="navbar-brand">
                <svg viewBox="0 0 24 24" height="28" width="28" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <path d="M19.51 3.08L3.08 19.51c.09.34.27.65.51.9.25.24.56.42.9.51L20.93 4.49c-.19-.69-.73-1.23-1.42-1.41zM11.88 3L3 11.88v2.83L14.71 3h-2.83zM5 3c-1.1 0-2 .9-2 2v2l4-4H5zm14 18c.55 0 1.05-.22 1.41-.59.37-.36.59-.86.59-1.41v-2l-4 4h2zm-9.71 0h2.83L21 12.12V9.29L9.29 21z"
                          fill="#fff" class="fill-theme" />
                </svg>
                <img src="../assets/images/logo.png" alt="." class="hide">
                <span class="hidden-folded d-inline">Apply</span>
            </a>
            <!-- / brand -->
        </div>
        <!-- Flex nav content -->
        <div class="flex hide-scroll">
            <div class="scroll">
                {!! \App\Http\Controllers\Auth\UserController::asideUserHead() !!}
                <div class="nav-active-theme" data-nav>
                    <ul class="nav ">
                        <li class="nav-header">
                            <span class="text-xs hidden-folded">Main</span>
                        </li>
                        <li>
                            <a href="{{ route('Dashboard') }}">
                                <span class="nav-icon"><i class="fa fa-dashboard"></i></span>
                                <span class="nav-text">Панель состояния</span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="nav-caret"><i class="fa fa-caret-down"></i></span>
                                <span class="nav-icon"><i class="fa fa-align-left"></i></span>
                                <span class="nav-text">Каталог</span>
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="{{ route('Products') }}">
                                        <span class="nav-text">Товары</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="layout.sidenav.html">
                                        <span class="nav-text">Sidenav</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="layout.aside.html">
                                        <span class="nav-text">Aside</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="layout.flex.html">
                                        <span class="nav-text">Flex</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="app.inbox.html">
                                <span class="nav-badge"><b class="badge badge-sm badge-pill success">6</b></span>
                                <span class="nav-icon"><i class="fa fa-envelope"></i></span>
                                <span class="nav-text">Inbox</span>
                            </a>
                        </li>
                        <li>
                            <a href="app.message.html">
                                <span class="nav-icon"><i class="fa fa-comment"></i></span>
                                <span class="nav-text">Messages</span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="nav-caret"><i class="fa fa-caret-down"></i></span>
                                <span class="nav-icon"><i class="fa fa-align-left"></i></span>
                                <span class="nav-text">Настройки</span>
                            </a>
                            <ul class="nav-sub">
                                <li>
                                    <a href="{{ route('Settings') }}">
                                        <span class="nav-text">Общие</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('Store') }}">
                                        <span class="nav-text">Магазины</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="layout.sidenav.html">
                                        <span class="nav-text">Sidenav</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="layout.aside.html">
                                        <span class="nav-text">Aside</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="layout.flex.html">
                                        <span class="nav-text">Flex</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="pb-2 hidden-folded"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
