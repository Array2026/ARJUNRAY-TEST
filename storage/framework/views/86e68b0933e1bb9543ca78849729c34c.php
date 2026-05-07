<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>

<div class="detail-container">
    <h1>Detail Produk</h1>

    <div class="detail-card">
        <div class="detail-item">
            <span>Nama Produk</span>
            <strong><?php echo e($product->name); ?></strong>
        </div>
        <div class="detail-item">
            <span>Deskripsi Produk</span>
            <strong><?php echo e($product->description); ?></strong>
        </div>
        <div class="detail-item">
            <span>Harga Produk</span>
            <strong><?php echo e($product->price); ?></strong>
        </div>
        <div class="detail-item">
            <span>Stok Produk</span>
            <strong><?php echo e($product->stock); ?></strong>
        </div>
    </div>

    <div class="back-area">
        <form action="/product" method="GET">
            <button type="submit" class="back-btn">BACK</button>
        </form>
    </div>
</div>

</body>
</html><?php /**PATH C:\ARJUN RAY\test_arjun\resources\views/product/show.blade.php ENDPATH**/ ?>