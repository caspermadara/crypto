@if($mode == 'hero')
<section class="hero is-dark is-bold is-fullheight">
    <div class="particles-filter mobile--hidden"></div>
    <div id="particles" class="mobile--hidden">
        <vue-particles
            :particles-number="10"
        ></vue-particles>
    </div>
    <div class="hero-head">
@endif
        <div class="navbar">
            <div class="container">
                <div class="navbar-brand">
                    <a href="{{ route('home') }}" class="navbar-logo">
                        <img src="{{ asset('img/logo.png') }}" alt="">
                    </a>

                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                      <span aria-hidden="true"></span>
                      <span aria-hidden="true"></span>
                      <span aria-hidden="true"></span>
                    </a>
                </div>

                <div class="navbar-menu" id="navMenu">
                    <div class="navbar-end">
                        <div class="tabs">
                            <ul>
                                <li class="@isRoute('home')">
                                    <a href="{{ route('home') }}">Главная</a>
                                </li>
                                <li class="@isRoute('sell')">
                                    <a href="{{ route('sell') }}">Продажа</a>
                                </li>
                                <li class="@isRoute('rules')">
                                    <a href="{{ route('rules') }}">Правила</a>
                                </li>
                                <li class="@isRoute('contact')">
                                    <a href="{{ route('contact') }}">Контакты</a>
                                </li>
                                <li class="@isRoute('auth.login') bulma-mobile--visible">
                                    <a href="{{ route('auth.login') }}">Вход</a>
                                </li>
                                <li class="@isRoute('auth.register') bulma-mobile--visible">
                                    <a href="{{ route('auth.register') }}">Регистрация</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="navbar-end navbar-auth">
                        <a class="navbar-item" href="{{ route('auth.login') }}">Вход</a>
                        <a class="navbar-item" href="{{ route('auth.signup') }}">Регистрация</a>
                    </div>
                </div>
            </div>
        </div>

@if($mode == 'hero')
</div>
@endif
