@extends('layout')

@section('title')
    {{ $worker->sname }} {{ $worker->fname }} {{ $worker->mname }}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">

            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a href="/workers" class="nav-link bg-white border border-bottom-0" role="tab" aria-selected="true">&laquo; Назад</a>
                </li>
            </ul>

            <div class="bg-white border border-top-0 p-3">
                <h5 class="text-center border-bottom pb-3">{{ $worker->sname }} {{ $worker->fname }} {{ $worker->mname }}</h5>
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td>День рождения</td>
                            <td>{{ $worker->birthday }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-center">
                    <a href="/workers/{{ $worker->id }}/edit" class="btn btn-outline-secondary btn-sm">Редактировать</a>
                </div>
            </div>

        </div>
    </div>
@endsection