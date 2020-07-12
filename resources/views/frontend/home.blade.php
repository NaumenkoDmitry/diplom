@extends("frontend.layout.app")
@section('content')
    <section id="sliderSection">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="slick_slider">
                    <div class="single_iteam"><a href="pages/single_page.html"> <img src="images/slider_img4.jpg"
                                                                                     alt=""></a>
                        <div class="slider_article">
                            <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor
                                    felis sit amet</a></h2>
                            <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet
                                nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                        </div>
                    </div>
                    <div class="single_iteam"><a href="pages/single_page.html"> <img src="images/slider_img2.jpg"
                                                                                     alt=""></a>
                        <div class="slider_article">
                            <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor
                                    felis sit amet</a></h2>
                            <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet
                                nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                        </div>
                    </div>
                    <div class="single_iteam"><a href="pages/single_page.html"> <img src="images/slider_img3.jpg"
                                                                                     alt=""></a>
                        <div class="slider_article">
                            <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor
                                    felis sit amet</a></h2>
                            <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet
                                nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                        </div>
                    </div>
                    <div class="single_iteam"><a href="pages/single_page.html"> <img src="images/slider_img1.jpg"
                                                                                     alt=""></a>
                        <div class="slider_article">
                            <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor
                                    felis sit amet</a></h2>
                            <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet
                                nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="latest_post">
                    <h2><span>Последние посты</span></h2>
                    <div class="latest_post_container">
                        <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
                        <ul class="latest_postnav">
                            @foreach($latestPosts as $post)
                                <li>
                                    <div class="media"><a href="{{route("article", ["id"=>$post->slug])}}"
                                                          class="media-left">
                                            <img alt=""
                                                 src="{{\Illuminate\Support\Facades\Storage::url("images/middle/".$post->media->first()->src) }}"/></a>
                                        <div class="media-body"><a href="{{route("article", ["id"=>$post->slug])}}"
                                                                   class="catg_title">
                                                {{$post->title}}</a></div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                        <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
    <div class="row">
        <div class="col-lg-12">
        <div class="single_post_content">
            <h2><span>Популярные посты</span></h2>
            @foreach($popularArticles as $article)
                <article class="col-lg-4 article-thumb">

                    <figure class="bsbig_fig ">

                        @if ($article->media->first() && $article->media->first()->media_types_id == 1)
                            <span><i class="fa fa-calendar"></i>{{$article->created_at->format("d.m.Y ")}}</span>
                            <a href="{{route("article",["id"=>$article->slug])}}" class="featured_img">
                                <img class="featured_img"
                                     src="{{ \Illuminate\Support\Facades\Storage::url("images/middle/".$article->media->first()->src) }}"/>
                                <span class="overlay"></span>
                            </a>
                        @else
                            {{--                        <iframe type="text/html" width="100%" height="227"--}}
                            {{--                                src="https://www.youtube.com/embed/{{$media->src}}"--}}
                            {{--                                frameborder="0" allowfullscreen></iframe>--}}

                            <a href="{{route("article",["id"=>$article->slug])}}" class="featured_img">
                                <img alt="" src="/images/featured_img1.jpg">
                                <span class="overlay"></span>
                            </a>
                        @endif
                        <figcaption>
                            <a href="{{route("article",["id"=>$article->slug])}}">{{$article->title}}</a>
                        </figcaption>
                        <p>{{$article->short_text}}...</p>

                    </figure>
                </article>
            @endforeach
        </div>
        <div class="single_post_content">
            <h2><span>Последние фото</span></h2>
            <ul class="photograph_nav  wow fadeInDown">
                @foreach( \App\Models\Media::where(["media_types_id"=>1])->inRandomOrder()->limit(6)->get() as $item)
                <li>
                    <div class="photo_grid">
                        <figure class="effect-layla"><a class="fancybox-buttons" data-fancybox-group="button"
                                                        href="{{Storage::url("images/big/".$item->src) }}" title="Photography Ttile 1">
                                <img src="{{Storage::url("images/middle/".$item->src) }}" alt=""/></a></figure>
                    </div>
                </li>
               @endforeach
            </ul>
        </div>
        </div>
    </div>
    </section>
@endsection
