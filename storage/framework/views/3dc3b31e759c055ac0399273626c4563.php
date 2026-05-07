<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>

    <div class="login-container">
        <h1>Silahkan Login</h1>
        <p class="subtitle">Masukkan email dan password anda</p>

        <?php if($errors->has('login')): ?>
        <div class="alert alert-danger">
            <?php echo e($errors->first('login')); ?>

        </div>
        <?php endif; ?>

        <form action="/login" method="POST">
            <?php echo csrf_field(); ?>
            <div class="input-group">
                <input name="email" type="text" placeholder="Email">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="error"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="input-group">
                <input name="password" type="password" placeholder="Password">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="error"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <button type="submit">LOGIN</button>
        </form>

        <div class="register-link">
            <a href="/register">Register?</a>
        </div>
    </div>

</body>
</html><?php /**PATH C:\ARJUN RAY\test_arjun\resources\views/login.blade.php ENDPATH**/ ?>