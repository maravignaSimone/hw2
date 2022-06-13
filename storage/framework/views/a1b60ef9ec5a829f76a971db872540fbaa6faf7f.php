

<?php $__env->startSection('style'); ?>
<link rel='stylesheet' href='<?php echo e(asset('css/home.css')); ?>'>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src='<?php echo e(asset('js/home.js')); ?>' defer></script>
<script type="text/javascript">
    const HOME_ROUTE = "/home";
    const FAV_ROUTE = "/star";
    const CSFR_TOKEN = '<?php echo e(csrf_token()); ?>';
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('links'); ?>
<a href="/home" class='selected'>Home</a>
<a href="/my_recipes">Le Mie Ricette</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('text'); ?>
<h1>Benvenuto in Verde Salvia!</h1>
<p>Sapevi che uno dei migliori modi per migliorare la tua salute è preparare più ricette a casa?</p>
<a href="#ricette"><button>Esplora le nostre ricette</button></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section id='ricette'>
    <div class='title'>
        <h1>Lasciati ispirare da noi...</h1>
        <div>
            <h2 class='type selected' data-type="Primi">Primi</h2>
            <h2 class='type' data-type="Secondi">Secondi</h2>
            <h2 class='type' data-type="Dolci">Dolci</h2>
        </div>
    </div>
    <div class='recipes'>

    </div>
</section>
<section class='search_recipe'>
    <h1>Oppure cerca una ricetta...</h1>
    <input type="text" onkeyup="searchRecipe()" placeholder="Cerca">
    <div class='search'>

    </div>
</section>
<section class='spotify'>
    
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/home.blade.php ENDPATH**/ ?>