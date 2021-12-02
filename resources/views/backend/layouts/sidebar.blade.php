<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
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
                <a href="{{route('admin')}}" class="d-block">{{Auth::user()->first_name .' '.Auth::user()->last_name}}</a>
            </div>

        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item has-treeview">
                    <a href="{{route('admin')}}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Домашняя страница
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('file-manager')}}" class="nav-link">
                        <i class="nav-icon fas fa-images"></i>
                        <p>
                            Медиа менеджер
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-desktop"></i>
                        <p>
                            Баннер
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('banner.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Список баннеров</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('banner.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Добавить баннер</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header"><h5>Магазин</h5></li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th-large"></i>
                        <p>
                            Категория
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('category.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Все категории</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('category.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Добавить категории</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <p >
                            Бренд
                            <i class="right fas fa-angle-left"></i>
                        </p >
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('brand.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Все бренды</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('brand.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Добавить бренды</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-inbox"></i>
                        <p>
                            Продукты
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('product.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Все продукты</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('product.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Добавить продукты</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('order.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-shopping-basket"></i>
                        <p>
                            Заказы
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-inbox"></i>
                        <p>
                            Доставка
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('shipping.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Все заказы</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('shipping.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Добавить заказы</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header"><h5>Новости</h5></li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Post
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('post.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Все новости</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('post.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Добавить новости</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th-large"></i>
                        <p>
                            Category
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('post-category.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Все category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('post-category.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Добавить category</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-sticky-note"></i>
                        <p>
                            Tag
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('post-tag.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Все tags</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('post-tag.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Добавить tag</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header"><h5>Основные настройки</h5></li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-circle"></i>
                        <p>
                            Профили
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('users.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Все профили</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('users.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Добавить профили </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-ticket-alt"></i>
                        <p>
                            Купон
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('coupon.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Все купоны</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('coupon.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Добавить купоны</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('settings')}}" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Настройка сайта
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a class="nav-link"href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="nav-icon fa fa-sign-in-alt">
                        </i>
                        Выйти
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
