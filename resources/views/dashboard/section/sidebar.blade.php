<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <!--begin::Menu wrapper-->
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
         data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
         data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
         data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
         data-kt-scroll-save-state="true">
        <!--begin::Menu-->
        <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu"
             data-kt-menu="true" data-kt-menu-expو="false">

            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link"
                   href="{{ route('dashboard') }}">
            											<span class="menu-icon">
            												<i class="ki-duotone ki-element-11 fs-2">
            													<span class="path1"></span>
            													<span class="path2"></span>
            													<span class="path3"></span>
            													<span class="path4"></span>
            												</i>
            											</span>
                    <span class="menu-title">داشبورد</span>
                </a>
                <!--end:Menu link-->
            </div>

            <div data-kt-menu-trigger="click"
                 class="menu-item here @if(str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'users.')) show @endif menu-accordion">
                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-user fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">کاربران</span>
											<span class="menu-arrow"></span>
										</span>
                <div class="menu-sub menu-sub-accordion">

                    <div class="menu-item">
                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'users.index') active @endif"
                           href="{{ route('users.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">لیست کاربران</span>
                        </a>

                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'users.create') active @endif"
                           href="{{ route('users.create') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">افزودن کاربر</span>
                        </a>
                    </div>

                </div>
            </div>


            <div data-kt-menu-trigger="click"
                 class="menu-item here @if(str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'settings.')) show @endif menu-accordion">
                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-switch fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">تنظیمات</span>
											<span class="menu-arrow"></span>
										</span>
                <div class="menu-sub menu-sub-accordion">

                    <div class="menu-item">
                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'settings.index') active @endif"
                           href="{{ route('settings.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">لیست تنظیمات</span>
                        </a>

                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'settings.create') active @endif"
                           href="{{ route('settings.create') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">افزودن تنظیمات</span>
                        </a>
                    </div>

                </div>
            </div>


            {{--            <div class="menu-item pt-5">--}}
            {{--                <!--begin:Menu content-->--}}
            {{--                <div class="menu-content">--}}
            {{--                    <span class="menu-heading fw-bold text-uppercase fs-7">صفحات</span>--}}
            {{--                </div>--}}
            {{--                <!--end:Menu content-->--}}
            {{--            </div>--}}
            {{--            --}}
            {{--            --}}
            {{--            <div class="menu-item">--}}
            {{--                <!--begin:Menu link-->--}}
            {{--                <a class="menu-link"--}}
            {{--                   href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"--}}
            {{--                   target="_blank">--}}
            {{--											<span class="menu-icon">--}}
            {{--												<i class="ki-duotone ki-code fs-2">--}}
            {{--													<span class="path1"></span>--}}
            {{--													<span class="path2"></span>--}}
            {{--													<span class="path3"></span>--}}
            {{--													<span class="path4"></span>--}}
            {{--												</i>--}}
            {{--											</span>--}}
            {{--                    <span class="menu-title">تغییرات v8.1.8</span>--}}
            {{--                </a>--}}
            {{--                <!--end:Menu link-->--}}
            {{--            </div>--}}
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->
</div>
