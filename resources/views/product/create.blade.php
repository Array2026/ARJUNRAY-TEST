<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="form-container">
    <h1>Tambah Produk</h1>
    
    @if(session('success'))
    <div class="success-alert">
        {{ session('success') }}
    </div>
    @endif

    <form action="/product_store" method="POST">
        @csrf
        <div class="input-group">
            <input name="name" type="text" placeholder="Nama Produk" value="{{ old('name') }}">
            @error('name')<p class="error">{{ $message }}</p>@enderror
        </div>

        <div class="input-group">
            <input name="description" type="text" placeholder="Deskripsi Produk" value="{{ old('description') }}">
            @error('description')<p class="error">{{ $message }}</p>@enderror
        </div>

        <div class="input-group">
            <input name="price" type="text" placeholder="Harga Produk" value="{{ old('price') }}">
            @error('price')<p class="error">{{ $message }}</p>@enderror
        </div>

        <div class="input-group">
            <input name="stock" type="text" placeholder="Stok Produk" value="{{ old('stock') }}">
            @error('stock')<p class="error">{{ $message }}</p>@enderror
        </div>

        <button type="submit" class="full-btn add-btn">KIRIM</button>
    </form>

    <div class="back-area">
        <form action="/product" method="GET">
            <button type="submit" class="back-btn">BACK</button>
        </form>
    </div>
</div>

</body>
</html>