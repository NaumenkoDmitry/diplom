@extends('frontend.layout.app')

@section("content")
    <div class="col-lg-12 col-md-12 col-sm-12">
        <article>
            <h1>{{$article->title}}</h1>
            <div class="post_commentbox">

                <a href="{{route("articles.search", ["user"=>$article->user->id])}}"><i
                        class="fa fa-user"></i>{{$article->user->name}}</a>
                <span><i class="fa fa-calendar"></i>{{$article->created_at->format("d.m.Y h:i")}}</span>
                @if($article->categories->first())
                    <a href="#"><i
                            class="fa fa-tags"></i>{{$article->categories->first()->name}}
                    </a>
                @endif
                @auth()
                    <a href="{{route("articles.edit",['article'=>$article->id])}}">Редактировать </a>
                @endauth
            </div>
            <br/>
            <div class="single_page_content">
                {!! $article->text !!}
            </div>
            <div class="gallery">
                @foreach($article->media as $media)
                    @if ($media->media_types_id == 1)
                        <a class="fancybox gallery__item" rel="gallery1"
                           href="{{ config("app.url").\Illuminate\Support\Facades\Storage::url("images/big/".$media->src) }}"
                           title="Vertical - Special Edition! (cedarsphoto)">
                            <img
                                src="{{config("app.url").\Illuminate\Support\Facades\Storage::url("images/middle/".$media->src) }}"
                                alt=""
                            />
                        </a>
                    @else
                        <a href="/images/featured_img1.jpg" class="fancybox featured_img" rel="gallery"
                           title="dsfsdfsd">
                            <img alt="" src="/images/featured_img1.jpg">
                        </a>
                    @endif
                @endforeach
            </div>
        </article>
        <div class="col-lg-12">
            <div class="addthis_inline_share_toolbox"></div>
        </div>
        <div class="col-lg-12">
            <div id="disqus_thread"></div>
        </div>
        <script>

            /**
             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            (function () { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://diplom-loc.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
                Disqus.</a></noscript>
    </div>
@endsection


