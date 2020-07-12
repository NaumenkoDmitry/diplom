<div class="table-responsive-sm">
    <table class="table table-striped" id="articles-table">
        <thead>
            <tr>
                <th>Название</th>
                <th>Краткое описание</th>
                <th>Дата</th>
                <th>Категория </th>
                <th>Статус </th>
                <th>Идентификатор </th>
                <th>Число посещений </th>
                <th>Пользователь </th>
                <th>Действия</th>

            </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <td>{{ $article->title }}</td>

            <td>{!! strip_tags($article->short_text) !!}</td>
                <td>{{$article->created_at->format("d.m.Y h:i")}}</td>
                <td>{{$article->categories->first() ? $article->categories->first()->name : ""}}</td>
            <td>{{ $article->status->name }}</td>
                <td>{{ $article->slug }}</td>
                <td>{{ $article->view_count }}</td>
            <td>{{ $article->user->name }}</td>
                <td>

                    {!! Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route("article",["id"=>$article->slug]) }}" class='btn btn-ghost-success' data-toggle="tooltip" data-placement="bottom" title="Просмотр"><i class="fa fa-eye"></i></a>
                        <a href="{{ route('articles.edit', [$article->id]) }}" class='btn btn-ghost-info' data-toggle="tooltip" data-placement="bottom" title="Редактировать"><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
