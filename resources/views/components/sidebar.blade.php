<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Dashboard</h4>
                </li>
                <li class="nav-item {{ $routeName == 'dashboard' ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Management</h4>
                </li>
                @foreach ($menus as $menu)
                <li class="nav-item {{ request()->segment(1) == $menu['url'] ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#{{ $menu['label'] }}">
                        <i class="fas {{ $menu['icon'] }}"></i>
                        <p>{{ $menu['label'] }}</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ request()->segment(1) == $menu['url'] ? 'show' : '' }}" id="{{ $menu['label'] }}">
                        <ul class="nav nav-collapse">
                            <li class="{{ $routeName == $menu['url_list'] ? 'active' : '' }}">
                                <a href="{{ route($menu['url_list']) }}">
                                    <span class="sub-item">List</span>
                                </a>
                            </li>
                            <li class="{{ $routeName == $menu['url_create'] ? 'active' : '' }}">
                                <a href="{{ route($menu['url_create']) }}">
                                    <span class="sub-item">Create</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endforeach
                <li class="nav-item {{ $routeName == 'report.index' ? 'active' : '' }}">
                    <a href="{{ route('report.index') }}">
                        <i class="fas fa-file"></i>
                        <p>Report Management</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Others</h4>
                </li>
                <li class="nav-item">
                    <a href="kelapah-filemanager" target="_blank">
                        <i class="fas fa-folder"></i>
                        <p>File Manager</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
