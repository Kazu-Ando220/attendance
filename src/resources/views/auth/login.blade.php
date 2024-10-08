<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}" />
</head>

<body>
    <div class="app-header">
        <header class="header">
            <h1 class="header__heading">Atte</h1>
        </header>
    </div>

    <main>
        <div class="login-form">
            <h2 class="login-form__heading content__heading">ログイン</h2>
            <div class="login-form__inner">
                <form class="login-form__form" action="/login" method="post">
                    @csrf
                    <div class="login-form__group">
                        <input class="login-form__input" type="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}" />
                        <p class="login-form__error-message">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <div class="login-form__group">
                        <input class="login-form__input" type="password" name="password" placeholder="パスワード" />
                        <p>
                            @error('password')
                            {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <input class="login-form__btn btn" type="submit" value="ログイン">
                    <div class="login-form__text">
                        <h3 class="login-form__message">アカウントをお持ちでない方はこちらから</h3>
                        <a class="login-form__register-link" href="/register">会員登録</a>
                    </div>
                </form>
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