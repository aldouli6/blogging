<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fa fa-building"></i><span>Dashboard</span>
    </a>
</li>
@auth
    @hasrole('super_admin')
        <li class="side-menus {{ Request::is('users*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-building"></i><span>Users</span></a>
        </li>
        @endhasrole
    @hasanyrole('super_admin|admin')
        <li class="side-menus {{ Request::is('posts*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('posts.index') }}"><i class="fas fa-building"></i><span>Posts</span></a>
        </li>
        @endhasanyrole
@endauth
 

