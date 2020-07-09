
<!-- Title Field -->
<div class="form-group col-sm-6" data-toggle="tooltip" data-placement="bottom" title="Название вашей статьи">
    {!! Form::label('title', 'Назва статьи:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6" data-toggle="tooltip" data-placement="bottom" title="slug">
    {!! Form::label('title', 'slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>
<!-- Short Text Field -->
<div class="form-group col-sm-6" data-toggle="tooltip" data-placement="bottom" title="Краткое описание статьи">
    {!! Form::label('short_text', 'Описание:') !!}
    {!! Form::text('short_text', null, ['class' => 'form-control']) !!}
</div>

<!-- Text Field -->
<div class="form-group col-sm-12 col-lg-12" data-toggle="tooltip" data-placement="bottom" title="Текст статьи">
    {!! Form::label('text', 'Текст:') !!}
    {!! Form::textarea('text', null, ['class' => 'form-control']) !!}
</div>

<!-- Categories Id Field -->
<div class="form-group col-sm-6" data-toggle="tooltip" data-placement="bottom" title="Выбор категории">
    {!! Form::label('article_category', 'Категории:') !!}
    {!! Form::select('article_category', \App\Models\Categories::all()->pluck('name', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Status Id Field -->
<div class="form-group col-sm-6" data-toggle="tooltip" data-placement="bottom" title="Выбо статуса">
    @if(Auth::user()->isAdmin())
    {!! Form::label('status_id', 'Статус:') !!}
    {!! Form::select('status_id', \App\Models\Status::all()->pluck('name', 'id'), null, ['class' => 'form-control']) !!}
    @else
        {!! Form::hidden('status_id', 2, null, ['class' => 'form-control']) !!}
    @endif

</div>


<!-- User Id Field -->
<div class="form-group col-sm-6" data-toggle="tooltip" data-placement="bottom" title="Пользователь">
    {!! Form::label('user_id', 'Пользователь:') !!}
    {!! Form::select('user_id', \App\User::all()->pluck('name', 'id'), Auth::user()->id, ['class' => 'form-control']) !!}
</div>



<div class="nav-tabs-boxed nav-tabs-boxed-top-right" data-toggle="tooltip" data-placement="bottom" title="Выбор мадиа">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#img" role="tab" aria-controls="home" aria-selected="true">Img</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#video" role="tab" aria-controls="profile" aria-selected="false">Video</a></li>
    </ul>
    <div class="tab-content">

        <div class="tab-pane active" id="img" role="tabpanel">
            <div>
                @foreach(\App\Models\Media::where("media_types_id",'=',1)->whereUserId(Auth::user()->getAuthIdentifier())->get() as $item)
                    <span class="image-input">
            {!! Form::checkbox("media[]",$item->id, null, ["id"=>"media-{$item->id}", 'class'=>'image-input__input']) !!}
            <label class="image-input__label" for="media-{{$item->id}}"><img src="{{Storage::url("images/small/".$item->src)}}"/></label>
            </span>
                @endforeach
            </div>

        </div>


        <div class="tab-pane" id="video" role="tabpanel">

            <div class="form-group col-sm-6 js-src">
                {!! Form::label('src', 'Src:') !!}
                {!! Form::text('src', null, ['class' => 'form-control']) !!}
            </div>

        </div>

    </div>
</div>




    <!-- Submit Field -->
<div class="form-group col-sm-12">
        {!! Form::submit('Сохранить', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('articles.index') }}" class="btn btn-secondary">Отмена</a>
</div>





@section("scripts")
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'text' ,{
            filebrowserBrowseUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserUploadUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserImageBrowseUrl : '/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
        });
    </script>
@endsection
