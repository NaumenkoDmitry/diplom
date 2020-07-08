<div class="table-responsive-sm">
    <table class="table table-striped" id="mediaTypes-table">
        <thead>
            <tr>
                <th>Название</th>
        <th>Подробности</th>

            </tr>
        </thead>
        <tbody>
        @foreach($mediaTypes as $mediaTypes)
            <tr>
                <td>{{ $mediaTypes->name }}</td>
            <td>{{ $mediaTypes->description }}</td>
                <td>
                    {!! Form::open(['route' => ['mediaTypes.destroy', $mediaTypes->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mediaTypes.show', [$mediaTypes->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('mediaTypes.edit', [$mediaTypes->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
