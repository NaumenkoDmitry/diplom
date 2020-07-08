<!-- Title Field -->
<div class="form-group">
    <h1 class="mb-3">{{ $article->title }}</h1>
    <p>{{ $article->created_at->format("d.m.Y")}} |<b> {{ $article->user->name }} </b>| <i>{{ $article->status->name }}</i></p>
    <div class="bg-light theme-color rounded pb-2 pt-2 pl-2 pr-2 mt-3 mb-3" >{!! $article->short_text !!}</div>
    <p>{!! $article->text !!}</p>
</div>



