<div class="card">
    <div class="card-header">Обратная связь  ({{count($feedbacks)}})</div>
    <div class="card-body">
        <table class="table table-responsive-sm table-hover table-outline mb-0">
            <thead class="thead-light">
            <tr>

                <th>Сообщение</th>
                <th>Имя</th>
                <th>Почта</th>
                <th>Текст</th>
                <th>Статус</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($feedbacks as $feedback)
                <tr>
                    <td class="text-center">
                        {{ $feedback->message }}
                    </td>
                    <td>{{ $feedback->name }}</td>
                    <td>{{ $feedback->email }}</td>
                    <td>{{ $feedback->text }}</td>
                    <td> <span class="badge badge-warning js-feedback-status">{{ $feedback->status ? "Обработано":"Новое" }}</span></td>

                    <td class="text-center">
                        <a class="btn btn-success" target="_blank" href="{{route("feedback.show", ['feedback'=>$feedback->id])}}" data-toggle="tooltip" data-placement="bottom" title="Просмотр ">
                            <i class="c-icon c-icon-2xl mt-5 mb-2 cil-magnifying-glass"></i>
                        </a>
                        <a class="btn btn-success js-approve" href="#" data-id="{{$feedback->id}}" data-toggle="tooltip" data-placement="bottom" title="Подтвердить">
                            <i class="c-icon c-icon-2xl mt-5 mb-2 cil-check"></i>

                        </a>
                        <a class="btn btn-danger js-decline" href="#" data-id="{{$feedback->id}}" data-toggle="tooltip" data-placement="bottom" title="Удалить ">
                            <i class="c-icon c-icon-2xl mt-5 mb-2 cil-trash"></i>

                        </a>
                    </td>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

