<!DOCTYPE html>
<html>
<head>
    <title>Блог Новости</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/li-scroller.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!--[if lt IE 9]>
    <script src="/assets/js/html5shiv.min.js"></script>
    <script src="/assets/js/respond.min.js"></script>
    <![endif]-->
    @yield('styles')
</head>
<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
    @include("frontend.layout.header")
    @include("frontend.layout.nav")
    <section id="contentSection">
        @yield("content")
    </section>
    <footer id="footer">
        <div class="footer_top">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="footer_widget wow fadeInDown">
                        <h2>Теги</h2>
                        <ul class="tag_nav">
                            @foreach(\App\Models\Categories::all() as $category)
                                @if($category->visible)
                                    <li><a href="{{ route("category", ["id"=>$category->id]) }}">{{$category->name}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="footer_widget wow fadeInRightBig">
                        <h2>Контакты</h2>


                    </div>
                </div>

            </div>
        </div>

    </footer>
</div>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/wow.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/slick.min.js"></script>
<script src="/assets/js/jquery.li-scroller.1.0.js"></script>
<script src="/assets/js/jquery.newsTicker.min.js"></script>
<script src="/assets/js/jquery.fancybox.pack.js"></script>
<script src="/assets/js/custom.js?{{time()}}"></script>
@yield('scripts')
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f05e7c975e107ee"></script>
</body>
</html>
