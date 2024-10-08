<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}" />
</head>

<body>
    <div class="app-header">
        <header class="header">
            <h1 class="header__heading">Atte</h1>
        </header>
    </div>

    <main>
        <div class="register-form">
            <h2 class="register-form__heading content__heading">会員登録</h2>
            <div class="register-form__inner">
                <form class="register-form__form" action="/register" method="post">
                    @csrf
                    <div class="register-form__group">
                        <input class="register-form__input" type="name" name="name" placeholder="名前" value="{{ old('name') }}" />
                        <p class="register-form__error-message">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <div class="register-form__group">
                        <input class="register-form__input" type="mail" name="email" placeholder="メールアドレス" value="{{ old('email') }}" />
                        <p class="register-form__error-message">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <div class="register-form__group">
                        <input class="register-form__input" type="password" name="password" placeholder="パスワード" />
                        <p>
                            @error('password')
                            {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <div class="register-form__group">
                        <input class="register-form__input" type="password" name="password_confirmation" placeholder="確認用パスワード" />
                        <p>
                            @error('password_confirmation')
                            {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <input class="register-form__btn btn" type="submit" value="会員登録">
                    <div class="register-form__text">
                        <h3 class="register-form__message">アカウントをお持ちの方はこちらから</h3>
                        <a class="register-form__login-link" href="/login">ログイン</a>
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