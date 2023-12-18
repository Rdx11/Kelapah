        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('img/profile.jpg') }}" alt="..." class="avatar-img rounded-circle" />
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            Admin
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li><a href="#profile"><span class="link-collapse">My Profile</span></a></li>
                            <li><a href="#edit"><span class="link-collapse">Edit Profile</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a data-toggle="collapse" href="/admin" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Menu</h4>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#base">
                        <i class="fa fa-user"></i>
                        <p>User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-file-alt"></i>
                        <p>Laporan</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li><a href="/reports"><span class="sub-item">Laporan Masuk</span></a></li>
                            <li><a href="overlay-sidebar.html"><span class="sub-item">Laporan Selesai</span></a></li>
                            <li><a href="compact-sidebar.html"><span class="sub-item">Laporan Di Tolak</span></a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#forms">
                        <i class="fas fa-newspaper"></i>
                        <p>Management Artikel</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav nav-collapse">
                            <li><a href="forms/forms.html"><span class="sub-item">POST</span></a></li>
                            <li><a href="forms/forms.html"><span class="sub-item">Kategori</span></a></li>
                            <li><a href="forms/forms.html"><span class="sub-item">Tag</span></a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/user') }}">
                        <i class="fas fa-laptop-code"></i>
                        <p>Tampilan Web</p>
                    </a>
                </li>
            </ul>
        </div>

