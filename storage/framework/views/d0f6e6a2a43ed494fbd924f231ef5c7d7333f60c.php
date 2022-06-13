<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <title>Verde Salvia - <?php echo $__env->yieldContent('title'); ?></title>

    <link rel='stylesheet' href='<?php echo e(asset('css/signup.css')); ?>'>
    <?php echo $__env->yieldContent('script'); ?>
    
</head>
<body>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\hw2\resources\views/layouts/register.blade.php ENDPATH**/ ?>