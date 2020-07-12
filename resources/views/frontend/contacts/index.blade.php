@extends("frontend.layout.app")

@section("content")
    <div>
        <p>Если у вас есть вопросы или пожелания заполните форму для обратной связи.</p>

    </div>
    <div class="row">
        @include('flash::message')
        @include('coreui-templates::common.errors')
        {!! Form::open(['route' => 'contacts.public.store']) !!}

        @include('frontend.contacts.fields')

        {!! Form::close() !!}
    </div>

@endsection
