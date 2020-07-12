@extends('frontend.layout.app')

@section("content")
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="left_content">
                <div class="error_page">
                    <h3>Мы сожалеем</h3>
                    <h1>404</h1>
                    <p>К сожалению, страницу, которую вы искали, не удалось найти. Может быть временно недоступен, перемещен или больше не существует</p>
                    <span></span> <a href="{{ route("home") }}" class="wow fadeInLeftBig">Вернуться на домашнюю страницу</a> </div>
            </div>
        </div>

    </div>
@endsection
