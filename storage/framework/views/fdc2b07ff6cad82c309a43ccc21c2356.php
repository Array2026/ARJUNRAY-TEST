<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman User</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
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

        <?php if(session('success')): ?>
        <div class="success-alert">
            <?php echo e(session('success')); ?>

        </div>
        <?php endif; ?>

        <table class="modern-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td>
                        <div class="action-group">
                            <form action="/user_edit/<?php echo e($user->id); ?>" method="GET">
                                <button type="submit" class="edit-btn">EDIT</button>
                            </form>
                            <form action="/user_destroy/<?php echo e($user->id); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="delete-btn">HAPUS</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <div class="back-area">
            <form action="/welcome" method="GET">
                <button type="submit" class="back-btn">BACK</button>
            </form>
        </div>
    </div>

</body>
</html><?php /**PATH C:\ARJUN RAY\test_arjun\resources\views/user/index.blade.php ENDPATH**/ ?>