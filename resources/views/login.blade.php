@extends('layouts.register')

@section('title', 'Login')

@section('content')
<main class="login">
<section>
    <h1>Bentornato su Verde Salvia!</h1>
    <h3>Accedi al tuo profilo</h3>
    @isset ($error)
    <span class='error'>{{$error}}</span>
    @endisset
    <form name='login' method='post' action="/login">
        @csrf
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
@endsection