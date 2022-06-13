@extends('layouts.main')

@section('style')
<link rel='stylesheet' href='{{asset('css/home.css')}}'>
@endsection

@section('scripts')
<script src='{{asset('js/home.js')}}' defer></script>
<script type="text/javascript">
    const HOME_ROUTE = "/home";
    const FAV_ROUTE = "/star";
    const CSFR_TOKEN = '{{ csrf_token() }}';
</script>
@endsection

@section('links')
<a href="/home" class='selected'>Home</a>
<a href="/my_recipes">Le Mie Ricette</a>
@endsection

@section('text')
<h1>Benvenuto in Verde Salvia!</h1>
<p>Sapevi che uno dei migliori modi per migliorare la tua salute è preparare più ricette a casa?</p>
<a href="#ricette"><button>Esplora le nostre ricette</button></a>
@endsection

@section('content')
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
@endsection