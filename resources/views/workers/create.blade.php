@extends('layout')

@section('title')
    Создание сотрудника
@endsection

@section('content')
    <div class="mb-3">
        <a href="javascript:history.go(-1)" class="btn btn-outline-primary">&lt; Назад</a>
    </div>

    <h1 class="mb-4 text-center">Создание сотрудника</h1>
    <div class="row justify-content-center">
        <div class="col-md-4">
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
    </div>
@endsection