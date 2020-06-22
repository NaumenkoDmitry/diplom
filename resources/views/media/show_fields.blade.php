
<!-- Name Field -->
<div class="form-group">

    <p >{{ $media->name }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <h1>{{ $media->title }}</h1>
</div>

<!-- Src Field -->
<div class="form-group">

    @if ($media->media_types_id == 1)
    <img src = "{{ \Illuminate\Support\Facades\Storage::url("images/big/".$media->src) }}"/>
    @else
        <iframe type="text/html" width="700" height="500"
                src="https://www.youtube.com/embed/{{$media->src}}"
                frameborder="0" allowfullscreen ></iframe>
    @endif
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $media->description }}</p>
</div>

