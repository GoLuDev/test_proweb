@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-16">
                <div class="card">
                    <div class="card-body">
                        <!-- Проверка авторизации -->
                        @if(!Auth::check())
                            вы не вошли
                        @else
                        <!-- Проверка на поля SEX и ABOUT -->
                            @if ($full->sex != null and $full->about != null )
                            <!-- Таблица пользователей -->
                                <h3 class="text-center">Таблица пользователей</h3>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Имя:
                                        </th>
                                        <th>Пол:
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->name}}</td>
                                            <td>{{ $user->sex }}</td>
                                            <!-- Кнопка Показать -->
                                            <td>
                                                <form action="{{ url('profile/'.$user->id.'/show') }}" method="GET">
                                                    <button type="submit" id="show-profile-{{ $user->id }}"
                                                            class="btn btn-success">
                                                        <i class="fa fa-btn fa-trash"></i>показать
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tbody>
                                </table>

                                <!-- Пагинация (Постраничный вывод) -->
                                {{ $users->links() }}

                            @else
                                <div col-md-16>
                                    <p>Вы не можете просматривать эту страницу! Вам нужно заполнить поля Sex и About</p>
                                    <a class="btn btn-primary btn-sm" href="{{ url('profile/'.$full->id.'/edit') }}"
                                       role="button">
                                        Изменить данные
                                    </a>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
