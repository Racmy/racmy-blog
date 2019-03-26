<button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
    <span class="navbar-toggler-icon"></span>
</button>
<a class="navbar-brand" href="{{route('admin.dashboard.index')}}">
    Racmy blog
</a>
<button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
    <span class="navbar-toggler-icon"></span>
</button>
<ul class="nav navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="/img/human.png" alt="admin@bootstrapmaster.com">
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
                <strong>{{Auth::user()->name}}</strong>
            </div>
            <a class="dropdown-item" href="{{route('admin.logout')}}">
                ログアウト
            </a>
        </div>
    </li>

</ul>
