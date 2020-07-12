<header id="header">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="header_top">
                <div class="header_top_left">
                    <ul class="top_nav">
                        <li><a class="{{ (request()->route()->getName() == "home") ? 'active' : ''}}"  href="{{ route("home") }}">{{__("frontend.home")}}</a></li>
                        <li><a class = "{{ Request::is('contacts*') ? 'active' : '' }}" href="{{ route("contacts") }}">Обратная связь</a></li>

                        @auth
                            <li>
                                <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{__("frontend.logout")}}
                                </a>
                            </li>
                        @else
                            <li><a href="{{ route("login") }}">{{__("frontend.login")}}</a></li>
                            @if (Route::has('register'))
                                <li><a href="{{ route("register") }}">{{__("frontend.register")}}</a></li>
                            @endif
                        @endauth

                    </ul>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </li>
                </div>
                <div class="header_top_right">
                    @include("frontend.layout.search-form")
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="header_bottom">
                <div class="logo_area"><a href="{{ route("home") }}" class="logo"><img src="/images/logo2.jpg" alt=""></a></div>
                <div class="logo_area"><a href="{{ route("home") }}" class="logo"><img src="/images/logo2.jpg" alt=""></a></div>
                <div class="logo_area"><a href="{{ route("home") }}" class="logo"><img src="/images/logo2.jpg" alt=""></a></div>
            </div>
        </div>
    </div>
</header>
