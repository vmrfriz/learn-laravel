@extends('layout')

@section('title')
    {{ $worker->sname }} {{ $worker->fname }} {{ $worker->mname }}
@endsection

@section('back-link')
    /workers
@endsection

@section('content')

    <div class="bg-white border border-top-0 p-3">
        <h5 class="text-center border-bottom pb-3">{{ $worker->sname }} {{ $worker->fname }} {{ $worker->mname }}</h5>
        <table class="table table-borderless mb-0">
            <tbody>
                <tr>
                    <td>День рождения</td>
                    <td>{{ $worker->birthday }}</td>
                </tr>
            </tbody>
        </table>
        
        <div class="text-center pb-3 border-bottom">
            <a href="/workers/{{ $worker->id }}/edit" class="btn btn-outline-secondary btn-sm">Редактировать</a>
        </div>

        <table class="table table-borderless mb-0">
            <thead>
                <tr>
                    <th colspan="2" class="text-center">Аккаунты</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td title="АвтоТрансИнфо">АТИ</td>
                    <td class="text-right">
                        <a href="#" class="text-decoration-none">+</a>
                    </td>
                </tr>
                <tr>
                    <td title="Сетевое хранилище">NAS</td>
                    <td class="text-right"><a href="#">tldr@promtrans.pro</a></td>
                </tr>
                <tr>
                    <td title="Почта @promtrans.pro">Почта</td>
                    <td class="text-right">
                        <a href="#" class="text-decoration-none">+</a>
                    </td>
                </tr>
                <tr>
                    <td title="1С: Умная логистика">УЛ</td>
                    <td class="text-right">
                        <a href="#" class="text-decoration-none">+</a>
                    </td>
                </tr>
                <tr>
                    <td title="Wialon">Wialon</td>
                    <td class="text-right">
                        <a href="#" class="text-decoration-none">+</a>
                    </td>
                </tr>
                <tr>
                    <td title="Битрикс24">Б24</td>
                    <td class="text-right">
                        <a href="#" class="text-decoration-none">+</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection