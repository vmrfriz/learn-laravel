@extends('layout')

@section('title')
    Редактирование {{ $worker->sname }} {{ $worker->fname }} {{ $worker->mname }}
@endsection

@section('content')
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a href="/workers/{{ $worker->id }}" class="nav-link bg-white border border-bottom-0" role="tab" aria-selected="true">&laquo; Назад</a>
        </li>
    </ul>

    <div class="bg-white border border-top-0 p-3">
        <h5 class="text-center border-bottom pb-3">Редактирование: {{ $worker->sname }} {{ $worker->fname }} {{ $worker->mname }}</h5>
        <form method="POST" action="/workers/{{ $worker->id }}" id="saveform" class="mb-4">
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
                <label for="formGroupExampleInput2">Дата рождения</label>
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
@endsection