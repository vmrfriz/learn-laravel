@extends('layout')

@section('title')
    Список сотрудиков
@endsection

@section('content')
    <h1 class="mb-4 text-center">Список сотрудников <a href="/workers/create" class="ml-3 btn btn-outline-primary">Добавить</a></h1>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <ul>
            @if ($workers)
            @foreach ($workers as $worker)
                <li><a href="/workers/{{ $worker->id }}">{{ $worker->sname ?: '' }} {{ $worker->fname ?: '' }} {{ $worker->mname ?: '' }}</a></li>
            @endforeach
            @endif
            </ul>
        </div>
    </div>
@endsection