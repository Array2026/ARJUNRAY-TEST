<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Product</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="table-container">
    <h1>Halaman Product</h1>
    <div class="top-action">
        <form action="/product_create" method="GET">
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
                <th>Nama Produk</th>
                <th>Harga Produk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <div class="action-group">
                        <form action="/product_show/{{$product->id}}" method="GET">
                            <button type="submit" class="view-btn">VIEW</button>
                        </form>
                        <form action="/product_edit/{{$product->id}}" method="GET">
                            <button type="submit" class="edit-btn">EDIT</button>
                        </form>
                        <form action="/product_destroy/{{$product->id}}" method="POST">
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