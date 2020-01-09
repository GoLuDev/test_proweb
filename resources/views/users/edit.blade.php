@extends('layouts.app')

@section('content')
    @include('common.errors')

    <!-- Форма  пользователя -->
    <form action="{{ url('profile/'.$user->id.'/update') }}" method="POST" class="form-horizontal">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <!-- Проверка авторизации -->
        @if(!Auth::check())
            вы не вошли
        @else
        <!-- Имя сотрудника -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Имя сотрудника : <b>{{ $user->name }}</b></label>
                <div class="col-sm-6">
                    <!-- Поле с именем -->
                    <input type="text" name="name" id="name"
                           value="{{ $user->name }}"
                           class="form-control"><br>
                </div>
                <div class="col-sm-6">
                    <!-- Поле с полом -->
                    <input type="text" name="sex" id="sex"
                           value="{{ $user->sex }}"
                           class="form-control"><br>
                </div>
                <div class="col-sm-6">
                    <!-- Поле  обо мне -->
                    <input type="text" name="about" id="about"
                           value="{{ $user->about }}"
                           class="form-control"><br>
                </div>
                <!-- Кнопка изменения данных -->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-plus"></i> Изменить данные пользователя
                        </button>
                    </div>
                </div>

            </div>
        @endif
    </form>
@endsection
