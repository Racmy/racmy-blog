<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.12
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="ja">
<head>
    @include('layouts.admin.parts.head')
    @yield('css')
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header">
        @include('layouts.admin.parts.header')
    </header>
    <div class="app-body">
        <div class="sidebar">
            @include('layouts.admin.components.sider')
        </div>
        <main class="main">
            @yield('breadcrumb')
            <div class="container-fluid">
                @yield('contents')
            </div>
        </main>
    </div>
    <footer class="app-footer">
        @include('layouts.admin.parts.footer')
    </footer>
    @include('layouts.admin.parts.scripts')
</body>
