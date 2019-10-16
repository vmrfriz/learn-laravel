@extends('layout')

@section('title')
    Создание аккаунта
@endsection

@section('back-link')
    /accounts
@endsection

@section('content')
<div class="bg-white border border-top-0 p-3">
    <h5 class="text-center border-bottom pb-3">Новые аккаунты</h5>
    <form method="POST" action="/workers">
        @csrf
        <div class="form-group">
            <label for="">Аккаунты для</label>
            <select name="user_id" id="user_id" class="form-control">
                <option hidden disabled {{ $worker_id ? '' : 'selected="selected"' }} value="">&mdash;</option>
                @if(!empty($workers))
                @foreach($workers as $worker)
                <option value="{{ $worker->id }}" {{ $worker_id == $worker->id ? 'selected="selected"' : '' }}>{{ $worker->sname }} {{ $worker->fname }} {{ $worker->mname }}</option>
                @endforeach
                @endif
            </select>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="">E-mail</label>
            </div>
            <div class="col text-right">
                <a href="/accounts/create">один аккаунт</a>
            </div>
        </div>    
        <div class="input-group mb-3">
            <input type="text" class="form-control text-right" name="email-login" maxlength="6" id="email-login" placeholder="Как правило, 2 латинские буквы">
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">@promtrans.pro</span>
            </div>
        </div>
        <div class="form-group">
            <label for="">Логин NAS</label>
            <input class="form-control" type="text" name="nas-login" id="nas-login">
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input class="form-control" type="text" name="password" id="password">
        </div>
        <button class="btn btn-primary" type="submit">Создать</button>
    </form>
</div>

<script>
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        function cyr2lat(text){
            var rus = "щ ш ч ц ю я ё ж ы э а б в г д е з и й к л м н о п р с т у ф х".split(/ +/g)
            var eng = "sh sh ch cz yu ya yo zh y e a b v g d e z i j k l m n o p r s t u f kh".split(/ +/g)

            text = text.toLowerCase()
            for (var i=0; i < rus.length; i++) {
                var reg = new RegExp(rus[i], "g")
                text = text.replace(reg, eng[i])
            }
            return text;
        }
        
        function rand(min, max) {
            return Math.round(min + Math.random() * (max - min))
        }

        function proposeLogins() {
            var fullname = document.getElementById('user_id').selectedOptions[0].innerText
            var name = fullname.split(' ')
            document.getElementById('email-login').value = cyr2lat(name[1][0])[0] + cyr2lat(name[0][0])[0]
            document.getElementById('nas-login').value = name[2] ? cyr2lat(name[1][0])[0] + cyr2lat(name[2][0])[0] + '.' + cyr2lat(name[0]) : ''
            var pass = cyr2lat(name[0][0])[0].toUpperCase() + cyr2lat(name[1][0])[0] + cyr2lat(name[2][0])[0] + '-'
            for (let i = 0; i < 4; i++) {
                pass += rand(0, 9);
            }
            document.getElementById('password').value = pass
        }

        document.getElementById('user_id').addEventListener('change', function () {
            proposeLogins()
        })

        proposeLogins()
        
    });
</script>
@endsection