<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="form-container">
        <h1>Edit User</h1>
        <hr>

        @if(session('success'))
        <div class="success-alert">
            {{ session('success') }}
        </div>
        @endif

        <form action="/user_update/{{$user->id}}" method="POST">
            @csrf
            @method('PUT')
            
            <p><input name="name" type="text" value="{{ old('name', $user->name) }}"></p>
            @error('name')<p class="error">{{ $message }}</p>@enderror

            <p><input name="email" type="text" value="{{ old('email', $user->email) }}" class="disabled-input" disabled></p>

            <p><input name="password" type="password" placeholder="Silahkan ganti password"></p>
            @error('password')<p class="error">{{ $message }}</p>@enderror

            <p><input name="password_confirmation" type="password" placeholder="Konfirmasi ganti password"></p>

            <p><button type="submit" class="full-btn edit-btn">EDIT</button></p>
        </form>

        <div class="back-area">
            <form action="/user" method="GET">
                <button type="submit" class="back-btn">BACK</button>
            </form>
        </div>
    </div>

</body>
</html>