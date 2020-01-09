@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="jumbotron">
                    <h1 class="display-4">Привет!</h1>
                    <p class="lead"></p>
                    <hr class="my-4">
                    <p>Это веб страница тестового задания для компании ProWeb.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="{{ route('list') }}" role="button">Посмотреть
                            страницу</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
