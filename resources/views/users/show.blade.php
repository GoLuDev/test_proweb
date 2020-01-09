@extends('layouts.app')
@section('content')
    <div class="container">
        <!-- Проверка авторизации -->
        @if(!Auth::check())
            вы не вошли
        @else
            <div class="row">
                <div class="col-md-12">
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
            </div>
        @endif
    </div>
@endsection
