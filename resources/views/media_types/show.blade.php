@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('mediaTypes.index') }}">Типы медиа</a>
            </li>
            <li class="breadcrumb-item active">Подробности</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>Подробности</strong>
                                  <a href="{{ route('mediaTypes.index') }}" class="btn btn-light">Back</a>
                             </div>
                             <div class="card-body">
                                 @include('media_types.show_fields')
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
