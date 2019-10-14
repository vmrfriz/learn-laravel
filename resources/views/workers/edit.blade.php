@extends('layout')

@section('title')
    Редактирование {{ $worker->sname }} {{ $worker->fname }} {{ $worker->mname }}
@endsection

@section('content')
    <div class="mb-3">
        <a href="javascript:history.go(-1)" class="btn btn-outline-primary">&lt; Назад</a>
    </div>

    <h1 class="mb-4 text-center">Создание сотрудника</h1>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form method="POST" id="saveform">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="formGroupExampleInput2">Фамилия</label>
                    <input class="form-control" type="text" name="sname" value="{{ $worker->sname }}">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Имя</label>
                    <input class="form-control" type="text" name="fname" value="{{ $worker->fname }}">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Отчетство</label>
                    <input class="form-control" type="text" name="mname" value="{{ $worker->mname }}">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Возраст</label>
                    <input class="form-control" type="date" name="birthday" value="{{ $worker->birthday }}">
                </div>
            </form>
            <div class="row">
                <div class="col-md-6">
                    <button class="btn btn-primary" type="submit" form="saveform">Сохранить</button>
                </div>
                <div class="col-md-6 text-right">
                    <form method="POST" action="/workers/{{ $worker->id }}">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="id" value="">
                        <button class="btn btn-outline-danger" type="submit">Удалить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection