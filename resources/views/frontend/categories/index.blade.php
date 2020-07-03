@extends('frontend.layout.app')

@section('content')
    <div class="row">
        @foreach($articles as $article)
            <article class="col-lg-4 article-thumb">
                <figure class="bsbig_fig ">
                    @if ($article->media->first() && $article->media->first()->media_types_id == 1)
                        <a href="{{route("article",["id"=>$article->id])}}" class="featured_img">
                            <img class="featured_img"
                                 src="{{ \Illuminate\Support\Facades\Storage::url("images/middle/".$article->media->first()->src) }}"/>
                            <span class="overlay"></span>
                        </a>
                    @else
                        {{--                        <iframe type="text/html" width="100%" height="227"--}}
                        {{--                                src="https://www.youtube.com/embed/{{$media->src}}"--}}
                        {{--                                frameborder="0" allowfullscreen></iframe>--}}

                        <a href="{{route("article",["id"=>$article->id])}}" class="featured_img">
                            <img alt="" src="/images/featured_img1.jpg">
                            <span class="overlay"></span>
                        </a>
                    @endif
                    <figcaption>
                        <a href="{{route("article",["id"=>$article->id])}}">{{$article->title}}</a>
                    </figcaption>
                    <p>{{$article->short_text}}...</p>
                </figure>
            </article>
        @endforeach
    </div>
@endsection
@section("styles")
    <style>
        .article-thumb {
            height: 370px;
            padding-bottom: 10px;
            overflow: hidden;
            margin-bottom: 20px;
        }
        .article-thumb a.featured_img {
            height: 227px;
            overflow: hidden;
        }

    </style
@endsection

