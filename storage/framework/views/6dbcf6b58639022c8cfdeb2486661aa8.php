<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Dashboard</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>

    <div class="dashboard-container">
        <h1>Selamat datang, <?php echo e(Auth::user()->name); ?></h1>
        <hr>

        <form action="/user" method="GET">
            <button type="submit" class="menu-btn">USER</button>
        </form>

        <form action="/product" method="GET">
            <button type="submit" class="menu-btn">PRODUK</button>
        </form>

        <hr>

        <form action="/logout" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit" class="logout-btn">LOGOUT</button>
        </form>
    </div>

</body>
</html><?php /**PATH C:\ARJUN RAY\test_arjun\resources\views/welcome.blade.php ENDPATH**/ ?>