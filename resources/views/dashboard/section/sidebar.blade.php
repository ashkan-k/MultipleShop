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
                <a class="menu-link @if(str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'dashboard')) active @endif"
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

            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link @if(str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'profile')) active @endif"
                   href="{{ route('profile') }}">
            											<span class="menu-icon">
            												<i class="ki-duotone ki-element-plus fs-2">
            													<span class="path1"></span>
            													<span class="path2"></span>
            													<span class="path3"></span>
            													<span class="path4"></span>
            												</i>
            											</span>
                    <span class="menu-title">پروفایل</span>
                </a>
                <!--end:Menu link-->
            </div>

            @if(auth()->user()->is_admin)
                <div data-kt-menu-trigger="click"
                     class="menu-item @if(str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'users.')) show @endif menu-accordion">
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
                     class="menu-item @if(str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'blogs.') || str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'blog.categories.')) show @endif menu-accordion">
                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-bank fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">اخبار و مقالات</span>
											<span class="menu-arrow"></span>
										</span>
                    <div class="menu-sub menu-sub-accordion">

                        <div class="menu-item">
                            <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'blog.categories.index' || \Illuminate\Support\Facades\Route::current()->getName() == 'blog.categories.create') active @endif"
                               href="{{ route('blog.categories.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                <span class="menu-title">دسته بندی ها</span>
                            </a>

                            <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'blogs.index' || \Illuminate\Support\Facades\Route::current()->getName() == 'blogs.create') active @endif"
                               href="{{ route('blogs.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                <span class="menu-title">مقالات</span>
                            </a>
                        </div>

                    </div>
                </div>

                <div data-kt-menu-trigger="click"
                     class="menu-item @if(str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'ticket-categories.') || str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'tickets.') || str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'ticket-answers.')) show @endif menu-accordion">
                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-sms fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">تیکت ها</span>
											<span class="menu-arrow"></span>
										</span>
                    <div class="menu-sub menu-sub-accordion">

                        <div class="menu-item">
                            <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'ticket-categories.index') active @endif"
                               href="{{ route('ticket-categories.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                <span class="menu-title">لیست دسته بندی تیکت ها</span>
                            </a>

                            <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'tickets.index' || \Illuminate\Support\Facades\Route::current()->getName() == 'ticket-answers.show') active @endif"
                               href="{{ route('tickets.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                <span class="menu-title">لیست تیکت ها</span>
                            </a>
                        </div>

                    </div>
                </div>

                <div data-kt-menu-trigger="click"
                     class="menu-item @if(str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'comments.')) show @endif menu-accordion">
                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-message-text-2 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">نظرات</span>
											<span class="menu-arrow"></span>
										</span>
                    <div class="menu-sub menu-sub-accordion">

                        <div class="menu-item">
                            <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'comments.index') active @endif"
                               href="{{ route('comments.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                <span class="menu-title">لیست نظرات</span>
                            </a>
                        </div>

                    </div>
                </div>
            @endif


            <div class="menu-item pt-5">
                <div class="menu-content">
                    <span class="menu-heading fw-bold text-uppercase fs-7">فروشگاه</span>
                </div>
            </div>

            <div data-kt-menu-trigger="click"
                 class="menu-item @if(str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'categories.')) show @endif menu-accordion">
                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-abstract-28 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">دسته بندی ها</span>
											<span class="menu-arrow"></span>
										</span>
                <div class="menu-sub menu-sub-accordion">

                    <div class="menu-item">
                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'categories.index') active @endif"
                           href="{{ route('categories.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">لیست دسته بندی ها</span>
                        </a>

                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'categories.create') active @endif"
                           href="{{ route('categories.create') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">افزودن دسته بندی</span>
                        </a>
                    </div>

                </div>
            </div>

            <div data-kt-menu-trigger="click"
                 class="menu-item @if(str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'products.')) show @endif menu-accordion">
                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-basket fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">محصولات</span>
											<span class="menu-arrow"></span>
										</span>
                <div class="menu-sub menu-sub-accordion">

                    <div class="menu-item">
                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'products.index') active @endif"
                           href="{{ route('products.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">لیست محصولات</span>
                        </a>

                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'products.create') active @endif"
                           href="{{ route('products.create') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">افزودن محصول</span>
                        </a>
                    </div>

                </div>
            </div>

            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start"
                 class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention">
                <!--begin:Menu link-->
                <span
                    class="menu-link @if(str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'colors.') || str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'sizes.') || str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'brands.')) active @endif">
											<span class="menu-icon">
												<i class="ki-duotone ki-file fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">ویژگی ها</span>
											<span class="menu-arrow"></span>
										</span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div
                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-2 py-4 w-200px mh-75 overflow-auto">
                    <div class="menu-item">
                        <a class="menu-link @if(str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'colors.')) active @endif"
                           href="{{ route('colors.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">رنگ ها</span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link @if(str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'sizes.')) active @endif"
                           href="{{ route('sizes.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">سایز ها</span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link @if(str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'brands.')) active @endif"
                           href="{{ route('brands.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">برند ها</span>
                        </a>
                    </div>
                </div>
                <!--end:Menu sub-->
            </div>

            <div data-kt-menu-trigger="click"
                 class="menu-item @if(str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'orders.')) show @endif menu-accordion">
                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-shop fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">سفارشات</span>
											<span class="menu-arrow"></span>
										</span>
                <div class="menu-sub menu-sub-accordion">

                    <div class="menu-item">
                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'orders.index') active @endif"
                           href="{{ route('orders.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">لیست سفارشات</span>
                        </a>
                    </div>

                </div>
            </div>

            <div data-kt-menu-trigger="click"
                 class="menu-item @if(str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'coupons.')) show @endif menu-accordion">
                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-bucket fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">کد تخفیف</span>
											<span class="menu-arrow"></span>
										</span>
                <div class="menu-sub menu-sub-accordion">

                    <div class="menu-item">
                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'coupons.index') active @endif"
                           href="{{ route('coupons.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">لیست کد های تخفیف</span>
                        </a>

                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'coupons.create') active @endif"
                           href="{{ route('coupons.create') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">افزودن کد تخفیف</span>
                        </a>
                    </div>

                </div>
            </div>

            <div data-kt-menu-trigger="click"
                 class="menu-item @if(str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'sliders.')) show @endif menu-accordion">
                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-slider fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">اسلایدر ها</span>
											<span class="menu-arrow"></span>
										</span>
                <div class="menu-sub menu-sub-accordion">

                    <div class="menu-item">
                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'sliders.index') active @endif"
                           href="{{ route('sliders.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">لیست اسلایدر ها</span>
                        </a>

                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'sliders.create') active @endif"
                           href="{{ route('sliders.create') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">افزودن اسلایدر</span>
                        </a>
                    </div>

                </div>
            </div>

            <div data-kt-menu-trigger="click"
                 class="menu-item @if(str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'posters.')) show @endif menu-accordion">
                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-abstract-26 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">پوستر ها</span>
											<span class="menu-arrow"></span>
										</span>
                <div class="menu-sub menu-sub-accordion">

                    <div class="menu-item">
                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'posters.index') active @endif"
                           href="{{ route('posters.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">لیست پوستر ها</span>
                        </a>

                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'posters.create') active @endif"
                           href="{{ route('posters.create') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">افزودن پوستر</span>
                        </a>
                    </div>

                </div>
            </div>

            <div data-kt-menu-trigger="click"
                 class="menu-item @if(str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'carts.')) show @endif menu-accordion">
                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-basket fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">سبد خرید ها</span>
											<span class="menu-arrow"></span>
										</span>
                <div class="menu-sub menu-sub-accordion">

                    <div class="menu-item">
                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'carts.index') active @endif"
                           href="{{ route('carts.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">لیست سبد خرید ها</span>
                        </a>
                    </div>

                </div>
            </div>

            <div data-kt-menu-trigger="click"
                 class="menu-item @if(str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'wishlists.')) show @endif menu-accordion">
                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-save-2 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">علافه مندی ها</span>
											<span class="menu-arrow"></span>
										</span>
                <div class="menu-sub menu-sub-accordion">

                    <div class="menu-item">
                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'wishlists.index') active @endif"
                           href="{{ route('wishlists.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">لیست علافه مندی ها</span>
                        </a>
                    </div>

                </div>
            </div>


            <div class="menu-item pt-5">
                <div class="menu-content">
                    <span class="menu-heading fw-bold text-uppercase fs-7">کانفیگ</span>
                </div>
            </div>

            <div data-kt-menu-trigger="click"
                 class="menu-item @if(str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'pages.')) show @endif menu-accordion">
                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-paper-clip fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">صفحات</span>
											<span class="menu-arrow"></span>
										</span>
                <div class="menu-sub menu-sub-accordion">

                    <div class="menu-item">
                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'pages.index') active @endif"
                           href="{{ route('pages.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">لیست صفحات</span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'pages.create') active @endif"
                           href="{{ route('pages.create') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">افزودن صفحه جدید</span>
                        </a>
                    </div>

                </div>
            </div>

            <div data-kt-menu-trigger="click"
                 class="menu-item @if(str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'guides.')) show @endif menu-accordion">
                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-handcart fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">تصاویر راهنما</span>
											<span class="menu-arrow"></span>
										</span>
                <div class="menu-sub menu-sub-accordion">

                    <div class="menu-item">
                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'guides.index') active @endif"
                           href="{{ route('guides.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">لیست تصاویر راهنما</span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'guides.create') active @endif"
                           href="{{ route('guides.create') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">افزودن تصویر راهنما</span>
                        </a>
                    </div>

                </div>
            </div>

            <div data-kt-menu-trigger="click"
                 class="menu-item @if(\Illuminate\Support\Facades\Route::current()->getName() == 'send_sms') show @endif menu-accordion">
                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-sms fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">پیامک</span>
											<span class="menu-arrow"></span>
										</span>
                <div class="menu-sub menu-sub-accordion">

                    <div class="menu-item">
                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'send_sms') active @endif"
                           href="{{ route('send_sms') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">ارسال گروهی پیامک</span>
                        </a>
                    </div>

                </div>
            </div>

            <div data-kt-menu-trigger="click"
                 class="menu-item @if(str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'payments.')) show @endif menu-accordion">
                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-paypal fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">تراکنش ها</span>
											<span class="menu-arrow"></span>
										</span>
                <div class="menu-sub menu-sub-accordion">

                    <div class="menu-item">
                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'payments.index') active @endif"
                           href="{{ route('payments.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">لیست تراکنش ها</span>
                        </a>
                    </div>

                </div>
            </div>

            <div data-kt-menu-trigger="click"
                 class="menu-item @if(str_starts_with(\Illuminate\Support\Facades\Route::current()->getName(), 'settings.')) show @endif menu-accordion">
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
                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'dynamic_form') active @endif"
                           href="{{ route('dynamic_form', ['key' => 'lang']) }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">تنظیمات زبان</span>
                        </a>

                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'dynamic_form') active @endif"
                           href="{{ route('dynamic_form', ['key' => 'comment_terms_page']) }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">صفحه مقررات نظرات</span>
                        </a>

                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'multiple_dynamic_form') active @endif"
                           href="{{ route('multiple_dynamic_form', ['key' => 'footer_copyright']) }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">تنظیمات متن کپی رایت</span>
                        </a>

                        <a class="menu-link @if(\Illuminate\Support\Facades\Route::current()->getName() == 'settings.index') active @endif"
                           href="{{ route('settings.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                            <span class="menu-title">سایر تنظیمات</span>
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
