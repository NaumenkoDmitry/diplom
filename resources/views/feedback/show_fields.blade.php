<!-- Message Field -->
<div class="form-group">
    {!! Form::label('message', 'Сообщение:') !!}
    <p>{{ $feedback->message }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Имя:') !!}
    <p>{{ $feedback->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Почта:') !!}
    <p>{{ $feedback->email }}</p>
</div>

<!-- Text Field -->
<div class="form-group">
    {!! Form::label('text', 'Текст:') !!}
    <p>{{ $feedback->text }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Статус:') !!}
    <p>{{ $feedback->status }}</p>
</div>

