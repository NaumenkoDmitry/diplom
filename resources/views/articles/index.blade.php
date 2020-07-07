@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Статьи</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Статьи
                             <a class="pull-right" href="{{ route('articles.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                              @include('articles.search-form')
                         </div>
                         <div class="card-body">
                             @include('articles.table')
                              <div class="pull-right mr-3">

        @include('coreui-templates::common.paginate', ['records' => $articles])

                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

