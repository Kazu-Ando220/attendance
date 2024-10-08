<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <div class="app-header">
        <header class="header">
            <h1 class="header__heading">Atte</h1>
        </header>
        <ul class="header-nav">
            <!-- if～endifまでをapp.bladeに転記 -->
            @if (Auth::check())
            <li class="header-nav__item">
                <a class="header-nav__link" href="/">ホーム</a>
            </li>
            <li class="header-nav__item">
                <a class="header-nav__link" href="/attendance">日付一覧</a>
            </li>
            <li class="header-nav__item">
                <form class="form" action="/logout" method="post">
                @csrf
                <button class="header-nav__link" href="/login">ログアウト</button>
                </form>
            </li>
            @endif
        </ul>
    </div>

    <main>
        <div class="input-form">
            @foreach($attendances as $attendance)
            <h2 class="input-form__heading content__heading">{{$attendance->name}}さんお疲れ様です！</h2>
            @endforeach
            <div class="input-form__inner">
                <div class="input-form__group">
                    <input class="input-form__btn" type="button" name="attendance-start" value="勤務開始">
                </div>
                <div class="input-form__group">
                    <input class="input-form__btn" type="button" name="attendance-end" value="勤務終了">
                </div>
                <div class="input-form__group">
                    <input class="input-form__btn" type="button"  name="break-start" value="休憩開始">
                </div>
                <div class="input-form__group">
                    <input class="input-form__btn" type="button"  name="break-end" value="休憩終了">
                </div>
            </div>
        </div>
    </main>

    <div class="app-footer">
        <footer class="footer">
            <small class="copyright">Atte,inc.</small>
        </footer>
    </div>
</body>

</html>