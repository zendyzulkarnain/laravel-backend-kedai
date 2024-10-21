<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">E - Kedai Teknologi </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ Request::is('credits') ? 'active' : '' }}">
                <a class="nav-link"
                    href=""><i class="fa-sharp-duotone fa-solid fa-house"></i>
                    </i> <b><span>Dashboard</span></b>
                </a>
            </li>

            <li class="{{ Request::is('credits') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ route('user.index')}}"><i class="fa-sharp-duotone fa-solid fa-user"></i>
                    </i> <b><span>Users</span></b>
                </a>
            </li>
    </aside>
</div>
