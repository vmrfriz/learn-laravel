@extends('layout')

@section('title')
    Создание сотрудника
@endsection

@section('content')
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a href="/workers" class="nav-link bg-white border border-bottom-0" role="tab" aria-selected="true">&laquo; Назад</a>
        </li>
    </ul>

    <div class="bg-white border border-top-0 p-3">
        <h5 class="text-center border-bottom pb-3">Новый сотрудник</h5>
        <form method="POST" action="/workers">
            @csrf
            <div class="form-group">
                <label for="formGroupExampleInput2">Фамилия</label>
                <input class="form-control" type="text" name="sname">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Имя</label>
                <input class="form-control" type="text" name="fname">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Отчетство</label>
                <input class="form-control" type="text" name="mname">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Дата рождения</label>
                <input class="form-control" type="date" name="birthday">
            </div>
            <button class="btn btn-primary" type="submit">Создать</button>
        </form>
    </div>
@endsection