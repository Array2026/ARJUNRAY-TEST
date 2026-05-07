<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="form-container">
        <h1>Tambah User</h1>
        <hr>

        @if(session('success'))
        <div class="success-alert">
            {{ session('success') }}
        </div>
        @endif

        <form action="/user_store" method="POST">
            @csrf
            <p><input name="name" type="text" placeholder="Silahkan isi nama" value="{{ old('name') }}"></p>
            @error('name')<p class="error">{{ $message }}</p>@enderror

            <p><input name="email" type="text" placeholder="Silahkan isi email" value="{{ old('email') }}"></p>
            @error('email')<p class="error">{{ $message }}</p>@enderror

            <p><input name="password" type="password" placeholder="Silahkan isi password"></p>
            @error('password')<p class="error">{{ $message }}</p>@enderror

            <p><input name="password_confirmation" type="password" placeholder="Konfirmasi password"></p>

            <p><button type="submit" class="full-btn add-btn">TAMBAH</button></p>
        </form>

        <div class="back-area">
            <form action="/user" method="GET">
                <button type="submit" class="back-btn">BACK</button>
            </form>
        </div>
    </div>

</body>
</html>