@extends('layouts.app')
@section('content')
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Проверка авторизации -->
                    @if(!Auth::check())
                        вы не вошли
                @else
                    <!-- Поле с Именем -->
                    <b>Имя:</b>
                    <p>{{ $user->name }}</p>
                    <!-- Поле с Полом -->
                    <b>Пол:</b>
                    <p>{{ $user->sex }}</p>
                    <!-- Поле  О себе -->
                    <b>О себе:</b>
                    <p>{{ $user->about}}</p>
                </div>
                <p class="lead">
                    <a class="btn btn-primary btn-sm" href="{{ url('profile/'.$user->id.'/edit') }}" role="button">
                        Изменить данные
                    </a>
                </p>
                @endif
            </div>
    </div>
@endsection
