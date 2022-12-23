<nav class="header__actions">
    <a class="header__action__item search" aria-label="Open search" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
    <div class="header__action__item language__switcher">
        <div class="language__switcher__innder"></div>
    </div>
    <div class="header__action__item button-block">
        <a class="btn btn-primary" href="{{ route('backend.home.index') }}"><span>Admin</span></a>
    </div>
    <div class="header__action__item">
        <div class="login">
            <a aria-label="Login" href="https://moodle.com/login/">
                <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect y="0.5" width="22" height="22" rx="11" fill="#194866"></rect>
                    <path d="M17.4392 17.7059C17.0593 16.6427 16.2224 15.7033 15.0581 15.0332C13.8938 14.3632 12.4672 14 10.9997 14C9.53211 14 8.10556 14.3632 6.94127 15.0332C5.77697 15.7033 4.94 16.6427 4.56017 17.7059" stroke="white" stroke-width="2" stroke-linecap="round"></path>
                    <ellipse cx="11.0003" cy="8.16683" rx="3.33333" ry="3.33333" stroke="white" stroke-width="2" stroke-linecap="round"></ellipse>
                </svg>
            </a>
        </div>
    </div>
</nav>
