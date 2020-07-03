
{{Form::open(['route' => 'articles.index', 'method'=>"GET", "id"=>"search-form"])}}

{{ Form::input('text','filter', request('filter','')) }}

{{Form::submit('Search')}}
{{Form::reset('Reset', ['class'=>"js-reset"])}}

{{Form::close()}}

@section("scripts")
    <script>
        $(function(){
            $(".js-reset").click(function(){
                console.log($('#search-form input[type="text"]').val());
               $('#search-form input[type="text"]').attr("value", "")
            })
        })
    </script>
@endsection
