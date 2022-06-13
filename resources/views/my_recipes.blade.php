@extends('layouts.main')

@section('style')
<link rel='stylesheet' href='{{asset('css/my_recipes.css')}}'>
@endsection

@section('scripts')
<script src='{{asset('js/my_recipes.js')}}' defer></script>
<script type="text/javascript">
    const MYRECIPES_ROUTE = "/my_recipes";
    const FAV_ROUTE = "/star";
    const CSFR_TOKEN = '{{ csrf_token() }}';
</script>
@endsection

@section('links')
<a href="/home">Home</a>
<a href="/my_recipes" class='selected'>Le Mie Ricette</a>
@endsection

@section('text')
<h1>Le tue ricette preferite</h1>
@endsection

@section('content')
<section id='favorite'>
    <div class='title'>
        <div class='recipes'>
            <h3>Nessuna ricetta preferita</h3>
        </div>
    </div>
</section>
@endsection