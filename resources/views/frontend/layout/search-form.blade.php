<div class="search-form">
    {{Form::open(['route' => 'articles.search', 'method'=>"GET", "id"=>"globalsearch-form"])}}
    <div class="search-form__input">
        {{ Form::input('text','filter', request('filter','')) }}
    </div>
    <div class="search-form__submit">
        <button type="submit">
            <i class="fa fa-search" aria-hidden="true"></i>
        </button>

    </div>
    {{Form::close()}}
</div>
