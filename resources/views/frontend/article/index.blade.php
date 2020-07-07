@extends('frontend.layout.app')

@section("content")
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="left_content">
            <div class="single_page">

                <h1>{{$article->title}}</h1>
                <div class="post_commentbox">

                    <a href="#"><i class="fa fa-user"></i>{{$article->user->name}}</a>
                    <span><i class="fa fa-calendar"></i>{{$article->created_at->format("d.m.Y h:i")}}</span>
                    @if($article->categories)
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
                    @foreach($article->media as $media)
                        @if ($media->media_types_id == 1)
                            <a class="fancybox" rel="gallery1"
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


            </div>
        </div>
    </div>
@endsection


