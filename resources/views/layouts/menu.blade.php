<li class="nav-item {{ Request::is('statuses*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('statuses.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Statuses</span>
    </a>
</li>
<li class="nav-item {{ Request::is('articles*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('articles.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Articles</span>
    </a>
</li>
<li class="nav-item {{ Request::is('media*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('media.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Media</span>
    </a>
</li>
<li class="nav-item {{ Request::is('categories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('categories.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Categories</span>
    </a>
</li>
<li class="nav-item {{ Request::is('mediaTypes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('mediaTypes.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Media Types</span>
    </a>
</li>
