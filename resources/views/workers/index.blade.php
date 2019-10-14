@extends('layout')

@section('title')
    Список сотрудиков
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">

            <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                <li class="nav-item">
                    <a href="/accounts" class="nav-link" role="tab" aria-selected="true">Аккаунты</a>
                </li>
                <li class="nav-item">
                    <a href="/workers" class="nav-link active" role="tab" aria-selected="true">Сотрудники</a>
                </li>
                <li class="nav-item">
                    <a href="/items" class="nav-link" role="tab" aria-selected="true">Имущество</a>
                </li>
            </ul>

            <div class="bg-white border border-top-0">
                <div class="list-group list-group-flush">
                    <div class="form-row p-3">
                        <div class="col-2">
                            <a href="/workers/create" title="Добавить" class="btn btn-outline-secondary">+</a>
                        </div>
                        <div class="col">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Поиск" aria-label="Поиск" aria-describedby="search-worker">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="search-worker">Найти</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="list-group-item">
                        <div class="row">
                            <div class="col-6">Всего: 4</div>
                            <div class="col-6"><a href="#">Добавить</a></div>
                        </div>
                    </div> --}}
                @if ($workers)
                @foreach ($workers as $worker)
                    <a href="/workers/{{ $worker->id }}" class="list-group-item list-group-item-action">
                        {{ $worker->sname ?: '' }} {{ $worker->fname ?: '' }} {{ $worker->mname ?: '' }}
                    </a>
                @endforeach
                @endif
                </div>
            </div>

        </div>
    </div>
@endsection