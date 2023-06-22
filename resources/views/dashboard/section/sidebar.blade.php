<div class="sidebar" style="direction: ltr">
    <div style="direction: rtl">
        <!-- Sidebar user dashboard (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ auth()->user()->get_avatar() }}"
                     class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('profile') }}" class="d-block">{{ auth()->user()->fullname() }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            داشبورد
                        </p>
                    </a>
                </li>
                @if(auth()->user()->is_admin)
                    <li class="nav-item has-treeview @if(str_starts_with(request()->route()->getName(), 'users.')) menu-open @endif">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                کاربران
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('users.index') }}"
                                   class="nav-link @if(request()->route()->getName() == 'users.index') active @endif">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست کاربران</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('users.create') }}"
                                   class="nav-link @if(request()->route()->getName() == 'users.create') active @endif">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>کاربر جدید</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview @if(str_starts_with(request()->route()->getName(), 'passengers.')) menu-open @endif">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-taxi"></i>
                            <p>
                                مسافران
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('passengers.index') }}"
                                   class="nav-link @if(request()->route()->getName() == 'passengers.index') active @endif">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست مسافران</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('passengers.create') }}"
                                   class="nav-link @if(request()->route()->getName() == 'passengers.create') active @endif">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>مسافر جدید</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview @if(str_starts_with(request()->route()->getName(), 'owners.')) menu-open @endif">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-user-plus"></i>
                            <p>
                                مالکان بار
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('owners.index') }}"
                                   class="nav-link @if(request()->route()->getName() == 'owners.index') active @endif">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست مالکان بار</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('owners.create') }}"
                                   class="nav-link @if(request()->route()->getName() == 'owners.create') active @endif">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>مالک جدید</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview @if(str_starts_with(request()->route()->getName(), 'categories.')) menu-open @endif">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-list"></i>
                            <p>
                                دسته بندی ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('categories.index') }}"
                                   class="nav-link @if(request()->route()->getName() == 'categories.index') active @endif">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست دسته بندی ها</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('categories.create') }}"
                                   class="nav-link @if(request()->route()->getName() == 'categories.create') active @endif">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>دسته بندی جدید</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview @if(str_starts_with(request()->route()->getName(), 'countries.') || str_starts_with(request()->route()->getName(), 'states.')) menu-open @endif">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-flag"></i>
                            <p>
                                کشور و استان
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('countries.index') }}"
                                   class="nav-link @if(request()->route()->getName() == 'countries.index') active @endif">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>کشور ها</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('states.index') }}"
                                   class="nav-link @if(request()->route()->getName() == 'states.index') active @endif">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>استان ها</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview @if(str_starts_with(request()->route()->getName(), 'advertises.')) menu-open @endif">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-adn"></i>
                            <p>
                                آگهی ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('advertises.index') }}"
                                   class="nav-link @if(request()->fullUrl() == route('advertises.index')) active @endif">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>همه آگهی ها</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('advertises.create') }}"
                                   class="nav-link @if(request()->route()->getName() == 'advertises.create') active @endif">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>افزودن آگهی</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('advertises.index') }}?status=pending"
                                   class="nav-link @if(request()->fullUrl() == route('advertises.index') . '?status=pending') active @endif">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>آگهی های درانتظار</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('advertises.index') }}?type=owner"
                                   class="nav-link @if(request()->fullUrl() == route('advertises.index') . '?type=owner') active @endif">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>آگهی مالکان بار</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('advertises.index') }}?type=passenger"
                                   class="nav-link @if(request()->fullUrl() == route('advertises.index') . '?type=passenger') active @endif">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>آگهی مسافران</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview @if(str_starts_with(request()->route()->getName(), 'requests.')) menu-open @endif">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-paper-plane"></i>
                            <p>
                                درخواست ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('requests.index') }}"
                                   class="nav-link @if(request()->fullUrl() == route('requests.index')) active @endif">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست درخواست ها</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview @if(str_starts_with(request()->route()->getName(), 'blogs.')) menu-open @endif">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-paper-plane-o"></i>
                            <p>
                                مقاله ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('blogs.index') }}"
                                   class="nav-link @if(request()->route()->getName() == 'blogs.index') active @endif">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست مقاله ها</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('blogs.create') }}"
                                   class="nav-link @if(request()->route()->getName() == 'blogs.create') active @endif">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>مقاله جدید</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview @if(str_starts_with(request()->route()->getName(), 'payments.')) menu-open @endif">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-paypal"></i>
                            <p>
                                تراکنش ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('payments.index') }}"
                                   class="nav-link @if(request()->fullUrl() == route('payments.index')) active @endif">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست تراکنش ها</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview @if(str_starts_with(request()->route()->getName(), 'sms.')) menu-open @endif">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-phone"></i>
                            <p>
                                پیامک
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('sms.send') }}"
                                   class="nav-link @if(request()->route()->getName() == 'sms.send') active @endif">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>ارسال پیامک</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview @if(str_starts_with(request()->route()->getName(), 'settings.')) menu-open @endif">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-cog"></i>
                            <p>
                                تنظیمات
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('settings.index') }}"
                                   class="nav-link @if(request()->route()->getName() == 'settings.index') active @endif">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست تنظیمات</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('settings.create') }}"
                                   class="nav-link @if(request()->route()->getName() == 'settings.create') active @endif">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>تنظیمات جدید</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                <li class="nav-item has-treeview @if(str_starts_with(request()->route()->getName(), 'ticket')) menu-open @endif">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-ticket"></i>
                        <p>
                            تیکت ها
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        @if(auth()->user()->is_admin)
                            <li class="nav-item">
                                <a href="{{ route('ticket-categories.index') }}"
                                   class="nav-link @if(request()->route()->getName() == 'ticket-categories.index') active @endif">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>دسته بندی تیکت ها</p>
                                </a>
                            </li>
                        @endif

                        <li class="nav-item">
                            <a href="{{ route('tickets.index') }}"
                               class="nav-link @if(request()->route()->getName() == 'tickets.index') active @endif">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>تیکت ها</p>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</div>
