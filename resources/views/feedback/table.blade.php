<div class="table-responsive-sm">
    <table class="table table-striped" id="feedback-table">
        <thead>
            <tr>
                <th>Сообщение</th>
                <th>Имя</th>
                <th>Почта</th>
                <th>Текст</th>
                <th>Статус</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($feedback as $feedback)
            <tr>
                <td>{{ $feedback->message }}</td>
                <td>{{ $feedback->name }}</td>
                <td>{{ $feedback->email }}</td>
                <td>{{ $feedback->text }}</td>
                <td>{{ $feedback->status }}</td>
                <td>
                    {!! Form::open(['route' => ['feedback.destroy', $feedback->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('feedback.show', [$feedback->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('feedback.edit', [$feedback->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
