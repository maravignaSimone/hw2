

<?php $__env->startSection('title', 'Registrati'); ?>

<?php $__env->startSection('script'); ?>
<script src='<?php echo e(asset('js/signup.js')); ?>' defer></script>
<script type="text/javascript">
    const SIGNUP_ROUTE = "/signup";
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main class="signup">
<section>
    <h1>Crea il tuo profilo</h1>
    <p>Entra nella community e salva le tue ricette preferite!</p>
    <h3>Inserisci i tuoi dati</h3>
    <form name='signup' method='post' enctype="multipart/form-data" action="/signup">
        <?php echo csrf_field(); ?>
        <div class="name">
            <div><label for="name">Nome</label></div>
            <div><input type="text" name='name' placeholder='es. Mario'></div>
            <span>Riempi questo campo</span>
        </div>
        <div class="surname">
            <div><label for="surname">Cognome</label></div>
            <div><input type="text" name='surname' placeholder='es. Rossi'></div>
            <span>Riempi questo campo</span>
        </div>
        <div class="username">
            <div><label for="username">Username</label></div>
            <div><input type="text" name='username' placeholder='es. Mario_Rossi'></div>
            <span>&nbsp;</span>
        </div>
        <div class="email">
            <div><label for="email">Email</label></div>
            <div><input type="text" name='email' placeholder='es. mariorossi@mail.com'></div>
            <span>&nbsp;</span>
        </div>
        <div class="password">
            <div><label for="password">Password</label></div>
            <div><input type="password" name='password'></div>
            <span>La password deve contenere almeno un numero e un simbolo.</span>
        </div>
        <div class="confirm_password">
            <div><label for="confirm_password">Conferma Password</label></div>
            <div><input type="password" name='confirm_password'></div>
            <span>Le password non coincidono</span>
        </div>
        <div class="telefono">
            <div><label for="phone">Numero di telefono</label></div>
            <div><input type="text" name='phone' placeholder='(opzionale)'></div>
            <span>Campo non obbligatorio</span>
        </div>
        <div class="check">
            <div><input type='checkbox' name='check' value="1"></div>
            <div><label for='check'>Acconsento ai Termini e Condizioni</label></div>
        </div>
        <div class="submit">
            <input type='submit' value="REGISTRATI" id="submit">
        </div>
    </form>
    <div class="signin">Hai gi?? un account? <a href="/login">Accedi</a>
</section>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/signup.blade.php ENDPATH**/ ?>