@if (Auth::user()->isAdmin())
    <li class="nav-item {{ Request::is('admin*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="nav-icon icon-cursor"></i>
            <span>Панель инстуменов</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('statuses*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('statuses.index') }}">
            <i class="nav-icon icon-cursor"></i>
            <span>Статусы</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('categories*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('categories.index') }}">
            <i class="nav-icon icon-cursor"></i>
            <span>Категории</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('mediaTypes*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('mediaTypes.index') }}">
            <i class="nav-icon icon-cursor"></i>
            <span>Типы ресурсов</span>
        </a>
    </li>
@endif
<li class="nav-item {{ Request::is('articles*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('articles.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Статьи</span>
    </a>
</li>
<li class="nav-item {{ Request::is('media*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('media.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Медиаресурсы</span>
    </a>
</li>


