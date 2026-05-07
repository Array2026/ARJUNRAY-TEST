<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="form-container">
        <h1>Silahkan Register</h1>
        <p class="subtitle">Isi data Anda untuk mendaftar</p>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <form action="/register" method="POST">
            @csrf
            <div class="input-group">
                <input name="name" type="text" placeholder="Silahkan isi nama" value="{{old('name')}}">
                @error('name')<p class="error">{{$message}}</p>@enderror
            </div>

            <div class="input-group">
                <input name="email" type="text" placeholder="Silahkan isi email" value="{{old('email')}}">
                @error('email')<p class="error">{{$message}}</p>@enderror
            </div>

            <div class="input-group">
                <input name="password" type="password" placeholder="Silahkan isi password" value="{{old('password')}}">
                @error('password')<p class="error">{{$message}}</p>@enderror
            </div>

            <div class="input-group">
                <input name="password_confirmation" type="password" placeholder="Konfirmasi password">
            </div>

            <button type="submit" class="full-btn">REGISTER</button>
        </form>

        <div class="back-area">
            <a href="/" class="back-btn">← BACK</a>
        </div>
    </div>

</body>
</html>