<section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar"><span class="sr-only">Toggle navigation</span> <span
                    class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav main_nav">
                <li class="active">
                    <a href="{{ route("home") }}">
                        <span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span>
                    </a>
                </li>

                @foreach(\App\Models\Categories::all() as $category)
                    @if($category->visible)
                        <li><a href="{{ route("category", ["id"=>$category->id]) }}">{{$category->name}}</a></li>
                    @endif
                @endforeach
                {{--                <li class="active"><a href="index.html"><span class="fa fa-home desktop-home"></span><span--}}
                {{--                            class="mobile-show">Home</span></a></li>--}}
                {{--                <li><a href="#">Новости</a></li>--}}
                {{--                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"--}}
                {{--                                        aria-expanded="false">Творчество</a>--}}
                {{--                    <ul class="dropdown-menu" role="menu">--}}
                {{--                        <li><a href="#">Художники</a></li>--}}
                {{--                        <li><a href="#">Писатели</a></li>--}}
                {{--                        <li><a href="#">Дизайн</a></li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
                {{--                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Наука</a>--}}
                {{--                    <ul class="dropdown-menu" role="menu">--}}
                {{--                        <li><a href="#">Астрономия</a></li>--}}
                {{--                        <li><a href="#">Химия</a></li>--}}
                {{--                        <li><a href="#">Физика</a></li>--}}

                {{--                    </ul>--}}
                {{--                </li>--}}

                {{--                <li><a href="pages/404.html">404 Page</a></li>--}}
            </ul>
        </div>
    </nav>
</section>
