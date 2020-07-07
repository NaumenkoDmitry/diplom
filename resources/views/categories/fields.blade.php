<!-- Name Field -->
<div class="form-group col-sm-6" data-toggle="tooltip" data-placement="bottom" title="Название категории">
    {!! Form::label('name', 'Название::') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}

</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12" data-toggle="tooltip" data-placement="bottom" title="Описание категории">
    {!! Form::label('description', 'Описание:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Visible Field -->
<div class="form-group col-sm-6" data-toggle="tooltip" data-placement="bottom" title="Выбор мадиа">
    {!! Form::label('visible', 'Видимый:') !!}
    {!! Form::number('visible', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12" data-toggle="tooltip" data-placement="bottom" title="Выбор мадиа">
    {!! Form::submit('Сохранить', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Отмена</a>
</div>
