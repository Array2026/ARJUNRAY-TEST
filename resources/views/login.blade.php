<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="login-container">
        <h1>Silahkan Login</h1>
        <p class="subtitle">Masukkan email dan password anda</p>

        @if($errors->has('login'))
        <div class="alert alert-danger">
            {{ $errors->first('login') }}
        </div>
        @endif

        <form action="/login" method="POST">
            @csrf
            <div class="input-group">
                <input name="email" type="text" placeholder="Email">
                @error('email')<p class="error">{{$message}}</p>@enderror
            </div>

            <div class="input-group">
                <input name="password" type="password" placeholder="Password">
                @error('password')<p class="error">{{$message}}</p>@enderror
            </div>

            <button type="submit">LOGIN</button>
        </form>

        <div class="register-link">
            <a href="/register">Register?</a>
        </div>
    </div>

</body>
</html>