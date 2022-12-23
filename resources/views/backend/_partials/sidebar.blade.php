<aside class="app__sidebar">
    {{-- <button class="toggle_sidebar__btn open--left">
        <i class="bi bi-chevron-compact-right"></i>
    </button> --}}

    <a href="#" class="app__logo text-center">
        <span class="logo-lg">Admin Site <i class="bi bi-box-arrow-up-right"></i></span>
    </a>

    <div class="side__nav main__nav">
        <div class="main__nav__wrapper">
            {!! $mainMenu->render() !!}
        </div>
    </div>

    <div class="side__nav main__nav">
        <div class="main__nav__wrapper">
            <ul class="nav">
                <li class="nav__item">
                    <a href="{{ route('backend.home.index') }}" class="nav__link">
                        <i class="bi bi-house"></i>
                        <span class="nav__text">{{ __('messages.backend.home.title') }}</span>
                    </a>
                </li>

                <li class="nav__item active">
                    <a href="{{ route('backend.menus.index') }}" class="nav__link">
                        <i class="bi bi-list"></i>
                        <span class="nav__text">{{ __('messages.backend.menus.title') }}</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a data-bs-toggle="collapse" href="{{ route('backend.users.index') }}" aria-expanded="true" aria-controls="sidebarUsers" class="nav__link">
                        <i class="bi bi-person-lines-fill"></i>
                        <span class="nav__text">{{ __('messages.backend.users.title') }}</span>
                        <span class="nav__arrow"></span>
                    </a>
                    <div class="collapse show" id="sidebarUsers">
                        <ul class="nav__sub">
                            <li class="nav__item">
                                <a href="{{ route('backend.users.index') }}" class="nav__link">
                                    <span class="nav__text">{{ __('messages.backend.users.index.title') }}</span>
                                </a>
                            </li>
                            <li class="nav__item">
                                <a href="{{ route('backend.users.create') }}" class="nav__link">
                                    <span class="nav__text">{{ __('messages.backend.users.create.title') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav__item">
                    <a data-bs-toggle="collapse" href="{{ route('backend.posts.index') }}" aria-expanded="true" aria-controls="sidebarPosts" class="nav__link">
                        <i class="bi bi-tag-fill"></i>
                        <span class="nav__text">{{ __('messages.backend.posts.title') }}</span>
                        <span class="nav__arrow"></span>
                    </a>
                    <div class="collapse show" id="sidebarPosts">
                        <ul class="nav__sub">
                            <li class="nav__item">
                                <a href="{{ route('backend.posts.index') }}" class="nav__link">
                                    <span class="nav__text">{{ __('messages.backend.posts.index.title') }}</span>
                                </a>
                            </li>
                            <li class="nav__item">
                                <a href="{{ route('backend.posts.create') }}" class="nav__link">
                                    <span class="nav__text">{{ __('messages.backend.posts.create.title') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav__item">
                    <a href="apps-chat.html" class="nav__link">
                        <i class="bi bi-gear-fill"></i>
                        <span class="nav__text">{{ __('messages.backend.config.title') }}</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="#" class="nav__link">
                        <i class="bi bi-tag-fill"></i>
                        <span class="nav__text">{{ __('messages.backend.document.title') }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
