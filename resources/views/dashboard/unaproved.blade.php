<div class="card">
    <div class="card-header">Не подтвержденные статьи ({{count($unapproved)}})</div>
    <div class="card-body">
        <table class="table table-responsive-sm table-hover table-outline mb-0">
            <thead class="thead-light">
            <tr>
                <th class="text-center">
                    <i class="c-icon c-icon-2xl mt-5 mb-2 cil-people"></i>
                </th>
                <th>Название</th>
                <th>Статус</th>
                <th>Действие</th>
            </tr>
            </thead>
            <tbody>
            @foreach($unapproved as $article)
                <tr>
                    <td class="text-center">
                        {{$article->user->name}}
                    </td>
                    <td>
                        {{$article->title}}
                    </td>

                    <td>
                        <span class="badge badge-warning js-status">{{$article->status->name}}</span>
                    </td>
                    <td class="text-center">
                        <a class="btn btn-success" target="_blank" href="{{route("articles.show", ['article'=>$article->id])}}" data-toggle="tooltip" data-placement="bottom" title="Просмотр статьи">
                            <i class="c-icon c-icon-2xl mt-5 mb-2 cil-magnifying-glass"></i>
                        </a>
                        <a class="btn btn-success js-approve" href="#" data-id="{{$article->id}}" data-toggle="tooltip" data-placement="bottom" title="Подтверждить статью">
                            <i class="c-icon c-icon-2xl mt-5 mb-2 cil-check"></i>

                        </a><a class="btn btn-danger js-decline" href="#" data-id="{{$article->id}}" data-toggle="tooltip" data-placement="bottom" title="Удалить статью">
                            <i class="c-icon c-icon-2xl mt-5 mb-2 cil-trash"></i>

                        </a></td>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

