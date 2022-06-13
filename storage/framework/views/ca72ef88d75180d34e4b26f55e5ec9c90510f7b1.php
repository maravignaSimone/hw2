

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
<main class="login">
<section>
    <h1>Bentornato su Verde Salvia!</h1>
    <h3>Accedi al tuo profilo</h3>
    <?php if(isset($error)): ?>
    <span class='error'><?php echo e($error); ?></span>
    <?php endif; ?>
    <form name='login' method='post' action="/login">
        <?php echo csrf_field(); ?>
        <div class="username">
            <div><label for='username'>Username</label></div>
            <div><input type='text' name='username'></div>
        </div>
        <div class="password">
            <div><label for='password'>Password</label></div>
            <div><input type='password' name='password'></div>
        </div>
        <div>
            <input type='submit' value="ACCEDI">
        </div>
    </form>
    <div class="signin">Non hai un account? <a href="/signup">Iscriviti</a>
</section>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/login.blade.php ENDPATH**/ ?>