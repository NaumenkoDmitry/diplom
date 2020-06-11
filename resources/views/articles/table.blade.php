<div class="table-responsive-sm">
    <table class="table table-striped" id="articles-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Short Text</th>
        <th>Text</th>
        <th>Status Id</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <td>{{ $article->title }}</td>
            <td>{{ $article->short_text }}</td>
            <td>{{ $article->text }}</td>
            <td>{{ $article->status_id }}</td>
            <td>{{ $article->user_id }}</td>
                <td>
                    {!! Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('articles.show', [$article->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('articles.edit', [$article->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>