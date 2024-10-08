<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link rel="stylesheet" href="{{ asset('css/attendance.css') }}" />
</head>

<body>
    <div class="app-header">
        <header class="header">
            <h1 class="header__heading">Atte</h1>
        </header>
        <!-- <nav class="header-nav"> -->
        <ul class="header-nav__list">
            <li class="header-nav__item"><a class="header-nav__item-link" href="/">ホーム</a></li>
            <li class="header-nav__item"><a class="header-nav__item-link" href="/attendance">日付一覧</a></li>
            <li class="header-nav__item"><a class="header-nav__item-link" href="/login">ログアウト</a></li>
        </ul>
        <!-- </nav> -->
    </div>

    <main>
        <div class="date-form">
            <div class="date-form__heading">
                <span class="date-form__left-arrow">左矢印: &larr;</span>
                @foreach($attendances as $attendance)
                <h2 class="date-form__date">{{$attendance->date}}</h2>
                @endforeach
                <span class="date-form__right-arrow">右矢印: &rarr;</span>
            </div>
            <table class="date__table">
                <tr class="date__row">
                    <th class="date__label">名前</th>
                    <th class="date__label">勤務開始</th>
                    <th class="date__label">勤務終了</th>
                    <th class="date__label">休憩時間</th>
                    <th class="date__label">勤務時間</th>
                </tr>
                @foreach($attendances as $attendance)
                <tr class="date__row">
                    <td class="date__data">{{$attendance->name}}</td>
                    <td class="date__data">{{$attendance->attendance__start}}</td>
                    <td class="date__data">{{$attendance->attendance__end}}</td>
                    <td class="date__data">{{$attendance->break__time}}</td>
                    <td class="date__data">{{$attendance->attendance__time}}</td>
                </tr>
                @endforeach
            </table>
            <div class="pagination-form">
                {{ $attendances->links() }}
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