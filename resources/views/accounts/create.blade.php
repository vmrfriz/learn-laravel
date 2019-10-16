@extends('layout')

@section('title')
    Создание аккаунта
@endsection

@section('back-link')
    /accounts
@endsection

@section('content')
    <div class="bg-white border border-top-0 p-3">
        <h5 class="text-center border-bottom pb-3">Новый аккаунт</h5>
        <form method="POST" action="/workers">
            @csrf
            <div class="form-group">
                <div class="form-row">
                    <div class="col">
                        <label for="">Сервис</label>
                    </div>
                    <div class="col text-right">
                        <a href="/accounts/create?service=all">все сервисы сразу</a>
                    </div>
                </div>
                <select name="service" id="service" class="form-control">
                    <option hidden disabled selected value="">&mdash;</option>
                    @foreach($services as $value => $name)
                    <option {{ $value == $service ? 'selected="selected"' : '' }} value="{{ $value }}">{{ $name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Логин</label>
                <input class="form-control" type="text" name="login">
            </div>
            <div class="form-group">
                <label for="">Пароль</label>
                <input class="form-control" type="password" name="password">
            </div>
            <div class="form-group">
                <label for="">Комментарий</label>
                <input class="form-control" type="text" name="mname">
            </div>
            <button class="btn btn-primary" type="submit">Создать</button>
        </form>
    </div>
@endsection