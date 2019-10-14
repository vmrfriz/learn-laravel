@extends('layout')

@section('title')
    {{ $worker->sname }} {{ $worker->fname }} {{ $worker->mname }}
@endsection

@section('content')
    <div class="mb-3">
        <a href="javascript:history.go(-1)" class="btn btn-outline-primary">&lt; Назад</a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-nowrap">{{ $worker->sname }} {{ $worker->fname }} {{ $worker->mname }} <a href="/workers/{{ $worker->id }}/edit" class="btn btn-outline-primary">ред.</a></h1>
            <p>Дата рождения: {{ $worker->birthday }}</p>

            <form method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-outline-danger mt-5" type="submit">Удалить</button>
            </form>
        </div>
    </div>
@endsection