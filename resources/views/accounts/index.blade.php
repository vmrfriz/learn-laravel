@extends('layout')

@section('title')
    Аккаунты
@endsection

@section('content')
<div class="bg-white border border-top-0">
    <div class="list-group list-group-flush">
        <div class="form-row p-3">
            <div class="col-2">
                <a href="/accounts/create" title="Добавить" class="btn btn-outline-secondary">+</a>
            </div>
            <div class="col">
                <form onsubmit="filterAccounts(); return false">
                    <div class="input-group">
                        <input type="text" id="search-input" class="form-control" placeholder="Поиск" aria-label="Поиск" aria-describedby="search-account" onkeyup="filterAccounts()">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" id="search-account">Найти</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div id="accounts-list">
        @if (!empty($accounts))
        @foreach ($accounts as $account)
            <a href="/accounts/{{ $account->id }}" class="list-group-item list-group-item-action">
                {{ $account->service ?: '' }}: {{ $account->login }}
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
        table = document.getElementById("accounts-list");
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