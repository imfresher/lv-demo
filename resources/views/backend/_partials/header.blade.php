<header class="app__header">
    <ul class="topbar__menu list-unstyled float-end mb-0">
        @if(config('locale.status') && count(config('locale.languages')) > 1)
            <li class="dropdown notification-list topbar__dropdown">
                <a class="nav__link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ Vite::image('flags/'.app()->getLocale().'.svg') }}" alt="user-image" class="me-0 me-sm-1 d-flex" height="20">
                    <span class="align-middle d-none d-sm-flex">{{ __('messages.langs.'.app()->getLocale()) }}</span>
                </a>
                @include('_partials.lang')
            </li>
        @endif

        <li class="dropdown notification-list">
            <a class="nav__link dropdown-toggle nav__user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <span class="account__user__avatar">
                    <img src="{{ Vite::image('avatar.jpg') }}" alt="user-image" class="rounded-circle">
                </span>
                <span>
                    <span class="account__user__name">Ngon</span>
                    <span class="account__position">Framer</span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar__dropdown__menu profile-dropdown">
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-circle me-1"></i>
                    <span>{{ __('messages.my_account') }}</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-edit me-1"></i>
                    <span>{{ __('messages.settings') }}</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-logout me-1"></i>
                    <span>{{ __('messages.logout') }}</span>
                </a>
            </div>
        </li>

    </ul>
    <button class="mobile__menu__btn">
        <i class="bi bi-list"></i>
    </button>
</header>
