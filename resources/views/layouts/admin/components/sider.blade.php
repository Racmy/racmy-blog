<nav class="sidebar-nav">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.dashboard.index')}}">
                <i class="fas fa-chart-line"></i>
                Dashboard
            </a>
        </li>
        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle">
                <i class="fas fa-blog"></i> 記事管理
            </a>
            <ul class="nav-dropdown-items">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.article.index')}}">
                        <i class="fas fa-list"></i> 記事一覧
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.article.create')}}">
                        <i class="fas fa-chalkboard"></i> 記事投稿
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.category.index')}}">
                <i class="fas fa-tasks"></i>
                カテゴリ管理
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.users.index')}}">
                <i class="fas fa-users"></i>
                ユーザ管理
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.logout')}}">
                <i class="fas fa-sign-out-alt"></i>
                ログアウト
            </a>
        </li>
    </li>
    </ul>
</nav>

