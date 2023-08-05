<div class="profile-page-aside col-xl-3 col-lg-4 col-md-6 center-section order-1" wire:ignore>
    <div class="profile-box mt-3">
        <div class="profile-box-header">
            <div class="profile-box-avatar">
                <img src="{{ auth()->user()->get_avatar() }}" alt="{{ auth()->user()->full_name() }}">
            </div>
            {{--            <button data-toggle="modal" data-target="#myModal" class="profile-box-btn-edit">--}}
            {{--                <i class="fa fa-pencil"></i>--}}
            {{--            </button>--}}
        </div>
        <div class="profile-box-username">{{ auth()->user()->full_name() }}</div>
        <div class="profile-box-tabs">
            <a href="{{ route('user_profile_edit', ['locale' => $lang]) }}"
               class="profile-box-tab profile-box-tab-access">
                <i class="now-ui-icons ui-1_lock-circle-open"></i>
                {{ __('Change Password') }}
            </a>

            <form action="{{ route('logout', ['locale' => $lang]) }}" id="id_frm_logout" style="display: none"
                  method="post">
                @csrf
            </form>

            <a onclick="$('#id_frm_logout').submit()" style="cursor:pointer;"
               class="profile-box-tab profile-box-tab--sign-out">
                <i class="now-ui-icons media-1_button-power"></i>
                {{ __('Logout Account') }}
            </a>
        </div>
    </div>
    <div class="responsive-profile-menu show-md">
        <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                <i class="fa fa-navicon"></i>
                {{ __('Your account') }}
            </button>
            <div class="dropdown-menu dropdown-menu-right text-right">
                <a href="{{ route('user_profile', ['locale' => $lang]) }}"
                   class="dropdown-item @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'user_profile') active-menu @endif">
                    <i class="now-ui-icons users_single-02"></i>
                    {{ __('Profile') }}
                </a>
                <a href="{{ route('orders', ['locale' => $lang]) }}"
                   class="dropdown-item @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'orders') active-menu @endif">
                    <i class="now-ui-icons shopping_basket"></i>
                    {{ __('All orders') }}
                </a>
                {{--                <a href="profile-orders-return.html" class="dropdown-item">--}}
                {{--                    <i class="now-ui-icons files_single-copy-04"></i>--}}
                {{--                    درخواست مرجوعی--}}
                {{--                </a>--}}
                <a href="{{ route('wishlists', ['locale' => $lang]) }}"
                   class="dropdown-item @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'wishlists') active-menu @endif">
                    <i class="now-ui-icons ui-2_favourite-28"></i>
                    {{ __('List of favorites') }}
                </a>
                <a href="{{ route('user_profile_edit', ['locale' => $lang]) }}"
                   class="dropdown-item @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'user_profile_edit') active-menu @endif">
                    <i class="now-ui-icons business_badge"></i>
                    {{ __('Personal Information') }}
                </a>

                <a href="{{ route('front.tickets.index', ['locale' => $lang]) }}"
                   class="dropdown-item @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'front.tickets.index') active-menu @endif">
                    <i class="now-ui-icons business_badge"></i>
                    {{ __('Tickets List') }}
                </a>

                <a href="{{ route('front.tickets.create', ['locale' => $lang]) }}"
                   class="dropdown-item @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'front.tickets.create') active-menu @endif">
                    <i class="now-ui-icons business_badge"></i>
                    {{ __('Send Ticket') }}
                </a>
            </div>
        </div>
    </div>
    <div class="profile-menu hidden-md">
        <div class="profile-menu-header">{{ __('Your account') }}</div>
        <ul class="profile-menu-items">
            <li>
                <a href="{{ route('user_profile', ['locale' => $lang]) }}"
                   class="@if(\Illuminate\Support\Facades\Route::currentRouteName() == 'user_profile') active @endif">
                    <i class="now-ui-icons users_single-02"></i>
                    {{ __('Profile') }}
                </a>
            </li>
            <li>
                <a href="{{ route('orders', ['locale' => $lang]) }}"
                   class="@if(\Illuminate\Support\Facades\Route::currentRouteName() == 'orders') active @endif">
                    <i class="now-ui-icons shopping_basket"></i>
                    {{ __('All orders') }}
                </a>
            </li>
            {{--            <li>--}}
            {{--                <a href="profile-orders-return.html">--}}
            {{--                    <i class="now-ui-icons files_single-copy-04"></i>--}}
            {{--                    درخواست مرجوعی--}}
            {{--                </a>--}}
            {{--            </li>--}}
            <li>
                <a href="{{ route('wishlists', ['locale' => $lang]) }}"
                   class="@if(\Illuminate\Support\Facades\Route::currentRouteName() == 'wishlists') active @endif">
                    <i class="now-ui-icons ui-2_favourite-28"></i>
                    {{ __('List of favorites') }}
                </a>
            </li>
            <li>
                <a href="{{ route('user_profile_edit', ['locale' => $lang]) }}"
                   class="@if(\Illuminate\Support\Facades\Route::currentRouteName() == 'user_profile_edit') active @endif">
                    <i class="now-ui-icons business_badge"></i>
                    {{ __('Personal Information') }}
                </a>
            </li>

            <li>
                <a
                    class="@if(str_starts_with(\Illuminate\Support\Facades\Route::currentRouteName(), 'front.tickets.')) active @endif"
                    id="ticket-menu"
                    data-toggle="collapse"
                    href="#ticketCollapse"
                    role="button"
                    aria-expanded="false"
                    aria-controls="collapseExample"
                >
                      <span>
                        <i
                            id="ticket-arrow-icon"
                            class="now-ui-icons arrows-1_minimal-left"
                        ></i>
                      </span>
                    {{ __('Tickets') }}&zwnj;
                </a>
            </li>
            <li>
                <!-- Ticket Pages Links-->
                <div class="collapse p-0 m-0 @if(str_starts_with(\Illuminate\Support\Facades\Route::currentRouteName(), 'front.tickets.')) show @endif" id="ticketCollapse">
                    <div class="p-0 m-0 d-flex flex-column gap-0 pr-3">
                        <a href="{{ route('front.tickets.index', ['locale' => $lang]) }}"
                           class="@if(\Illuminate\Support\Facades\Route::currentRouteName() == 'front.tickets.index') active @endif">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <span class="now-ui-icons">{{ __('Tickets List') }}</span>
                        </a>
                        <a href="{{ route('front.tickets.create', ['locale' => $lang]) }}"
                           class="@if(\Illuminate\Support\Facades\Route::currentRouteName() == 'front.tickets.create') active @endif">
                            <i class="now-ui-icons ui-1_send"></i>
                            <span class="now-ui-icons">{{ __('Send Ticket') }}</span>
                        </a>
                    </div>
                </div>
                <!-- End Ticket Pages Links-->
            </li>
        </ul>
    </div>
</div>
