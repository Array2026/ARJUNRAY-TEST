<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>

    <div class="form-container">
        <h1>Edit User</h1>
        <hr>

        <?php if(session('success')): ?>
        <div class="success-alert">
            <?php echo e(session('success')); ?>

        </div>
        <?php endif; ?>

        <form action="/user_update/<?php echo e($user->id); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            
            <p><input name="name" type="text" value="<?php echo e(old('name', $user->name)); ?>"></p>
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="error"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <p><input name="email" type="text" value="<?php echo e(old('email', $user->email)); ?>" class="disabled-input" disabled></p>

            <p><input name="password" type="password" placeholder="Silahkan ganti password"></p>
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="error"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

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
</html><?php /**PATH C:\ARJUN RAY\test_arjun\resources\views/user/edit.blade.php ENDPATH**/ ?>