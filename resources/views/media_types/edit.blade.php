@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('mediaTypes.index') !!}"> Типы медиа</a>
          </li>
          <li class="breadcrumb-item active">Редактировать</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Изменить типы медиа</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($mediaTypes, ['route' => ['mediaTypes.update', $mediaTypes->id], 'method' => 'patch']) !!}

                              @include('media_types.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection
