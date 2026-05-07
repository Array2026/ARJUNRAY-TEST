<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="form-container">
    <h1>Edit Produk</h1>

    @if(session('success'))
    <div class="success-alert">
        {{ session('success') }}
    </div>
    @endif

    <form action="/product_update/{{$product->id}}" method="POST">
        @csrf
        @method('PUT')

        <div class="input-group">
            <input name="name" type="text" placeholder="Nama Produk" value="{{ old('name', $product->name) }}">
            @error('name')<p class="error">{{ $message }}</p>@enderror
        </div>

        <div class="input-group">
            <input name="description" type="text" placeholder="Deskripsi Produk" value="{{ old('description', $product->description) }}">
            @error('description')<p class="error">{{ $message }}</p>@enderror
        </div>

        <div class="input-group">
            <input name="price" type="text" placeholder="Harga Produk" value="{{ old('price', $product->price) }}">
            @error('price')<p class="error">{{ $message }}</p>@enderror
        </div>

        <div class="input-group">
            <input name="stock" type="text" placeholder="Stok Produk" value="{{ old('stock', $product->stock) }}">
            @error('stock')<p class="error">{{ $message }}</p>@enderror
        </div>

        <button type="submit" class="full-btn edit-btn">UBAH</button>
    </form>

    <div class="back-area">
        <form action="/product" method="GET">
            <button type="submit" class="back-btn">BACK</button>
        </form>
    </div>
</div>

</body>
</html>