@extends('layout')

@section('title')
    Список сотрудиков
@endsection

@section('content')
<div class="bg-white border border-top-0">
    <div class="list-group list-group-flush">
        <div class="form-row p-3">
            <div class="col-2">
                <a href="/workers/create" title="Добавить" class="btn btn-outline-secondary">+</a>
            </div>
            <div class="col">
                <form onsubmit="filterWorkers(); return false">
                    <div class="input-group">
                        <input type="text" id="search-input" class="form-control" placeholder="Поиск" aria-label="Поиск" aria-describedby="search-button" onkeyup="filterWorkers()">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" id="search-button">Найти</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div id="workers-list">
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

<script>
    function filterWorkers() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("search-input");
        filter = input.value.toUpperCase();
        table = document.getElementById("workers-list");
        rows = table.getElementsByTagName("a");
    
        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < rows.length; i++) {
            row = rows[i];
            if (row) {
                txtValue = row.textContent || row.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            }
        }
    }
</script>
@endsection