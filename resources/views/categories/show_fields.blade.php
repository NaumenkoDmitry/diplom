<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Название:') !!}
    <p>{{ $categories->name }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Описание:') !!}
    <p>{{ $categories->description }}</p>
</div>

<!-- Visible Field -->
<div class="form-group">
    {!! Form::label('visible', 'Видимость:') !!}
    <p>{{ $categories->visible }}</p>
</div>

