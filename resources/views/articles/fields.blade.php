
<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Short Text Field -->
<div class="form-group col-sm-6">
    {!! Form::label('short_text', 'Short Texts:') !!}
    {!! Form::text('short_text', null, ['class' => 'form-control']) !!}
</div>

<!-- Text Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('text', 'Text:') !!}
    {!! Form::textarea('text', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_id', 'Status:') !!}
    {!! Form::select('status_id', \App\Models\Status::all()->pluck('name', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User:') !!}
    {!! Form::select('user_id', \App\User::all()->pluck('name', 'id'), Auth::user()->id, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User:') !!}
    {!! Form::select('user_id', \App\User::all()->pluck('name', 'id'), Auth::user()->id, ['class' => 'form-control']) !!}
</div>

<div class="nav-tabs-boxed nav-tabs-boxed-top-right">
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

<div class="card-body">
    <button class="btn btn-info mb-1" type="button" data-toggle="modal" data-target="#infoModal">Info modal</button>
</div>


    <!-- Submit Field -->
<div class="form-group col-sm-12">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('articles.index') }}" class="btn btn-secondary">Cancel</a>
</div>





@section("scripts")
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>

        CKEDITOR.replace( 'text' );
    </script>
@endsection
