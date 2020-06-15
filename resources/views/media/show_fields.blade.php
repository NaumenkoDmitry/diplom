<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $media->name }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $media->title }}</p>
</div>

<!-- Src Field -->
<div class="form-group">
    {!! Form::label('src', 'Src:') !!}
    <p>{{ $media->src }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $media->description }}</p>
</div>

