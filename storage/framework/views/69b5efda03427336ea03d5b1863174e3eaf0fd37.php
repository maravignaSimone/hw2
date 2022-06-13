

<?php $__env->startSection('style'); ?>
<link rel='stylesheet' href='<?php echo e(asset('css/my_recipes.css')); ?>'>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src='<?php echo e(asset('js/my_recipes.js')); ?>' defer></script>
<script type="text/javascript">
    const MYRECIPES_ROUTE = "/my_recipes";
    const FAV_ROUTE = "/star";
    const CSFR_TOKEN = '<?php echo e(csrf_token()); ?>';
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('links'); ?>
<a href="/home">Home</a>
<a href="/my_recipes" class='selected'>Le Mie Ricette</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('text'); ?>
<h1>Le tue ricette preferite</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section id='favorite'>
    <div class='title'>
        <div class='recipes'>
            <h3>Nessuna ricetta preferita</h3>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/my_recipes.blade.php ENDPATH**/ ?>