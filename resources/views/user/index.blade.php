<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman User</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="table-container">
        <h1>Halaman User</h1>
        <hr>

        <div class="top-action">
            <form action="/user_create" method="GET">
                <button type="submit" class="add-btn">TAMBAH</button>
            </form>
        </div>

        @if(session('success'))
        <div class="success-alert">
            {{ session('success') }}
        </div>
        @endif

        <table class="modern-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <div class="action-group">
                            <form action="/user_edit/{{$user->id}}" method="GET">
                                <button type="submit" class="edit-btn">EDIT</button>
                            </form>
                            <form action="/user_destroy/{{$user->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-btn">HAPUS</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="back-area">
            <form action="/welcome" method="GET">
                <button type="submit" class="back-btn">BACK</button>
            </form>
        </div>
    </div>

</body>
</html>