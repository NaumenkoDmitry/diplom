<div class="table-responsive-sm">
    <table class="table table-striped" id="media-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Title</th>
            <th>Src</th>
            <th>Description</th>
            <th>User</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($media as $media)
            <tr>
                <td>{{ $media->name }}</td>
                <td>{{ $media->title }}</td>
                <td>
                    @if ($media->media_types_id == 1)
                        <img src="{{ \Illuminate\Support\Facades\Storage::url("images/small/".$media->src) }}"/>
                    @else
                        <iframe type="text/html" width="150" height="84.375"
                                src="https://www.youtube.com/embed/{{$media->src}}"
                                frameborder="0" allowfullscreen></iframe>
                    @endif
                </td>
                <td>{{ $media->description }}</td>
                <td>{{ $media->user_id }}</td>
                <td>
                    {!! Form::open(['route' => ['media.destroy', $media->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('media.show', [$media->id]) }}" class='btn btn-ghost-success'><i
                                class="fa fa-eye"></i></a>
                        <a href="{{ route('media.edit', [$media->id]) }}" class='btn btn-ghost-info'><i
                                class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>
</div>
