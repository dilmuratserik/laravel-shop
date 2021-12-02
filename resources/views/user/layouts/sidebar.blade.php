<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="{{asset('assets/backend/img/AdminLTELogo.png')}}"
             alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Laravel-shop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('assets/backend/img/boxed-bg.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('user')}}" class="d-block">{{Auth::user()->first_name .' '.Auth::user()->last_name}}</a>
            </div>

        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="{{route('user')}}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Домашняя страница
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('user.order.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-sort-alpha-up-alt"></i>
                        <p>
                            Orders
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('user.productreview.index')}}" class="nav-link">
                        <i class="nav-icon far fa-file-pdf"></i>
                        <p>
                            Review
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('user.post-comment.index')}}" class="nav-link">
                        <i class="nav-icon far fa-comments"></i>
                        <p>
                            Comments
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

