<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Src Field -->
<div class="form-group col-sm-6">
    {!! Form::label('media_types_id', 'Media type:') !!}
    {!! Form::select('media_types_id', $mediaTypes, null, ['class' => 'form-control js-type']) !!}
</div>
<!-- Src Field -->
<div class="form-group col-sm-6 js-file">
    {!! Form::label('src', 'Image File:') !!}
    {!! Form::file('file', null, ['class' => 'form-control']) !!}
</div>
<!-- Src Field -->
<div class="form-group col-sm-6 js-src">
    {!! Form::label('src', 'Src:') !!}
    {!! Form::text('src', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('media.index') }}" class="btn btn-secondary">Cancel</a>
</div>

@section("scripts")
    <script>
        function toggleInputs(){
            if ($(".js-type").val() === "1") {
                $(".js-file").show();
                $(".js-src").hide();
            } else {
                $(".js-file").hide();
                $(".js-src").show();
            }
        }
        $(function () {
            $(".js-type").change(toggleInputs);
            toggleInputs();
        })
    </script>
@endsection
