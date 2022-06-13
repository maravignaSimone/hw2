<html>
    <head>
        <link rel='stylesheet' href='{{asset('css/common_style.css')}}'>
        @yield ('style')
        @yield ('scripts')
        <script src='{{asset('js/mobile.js')}}' defer></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

        <title>Verde Salvia</title>
    </head>

    <body>
        <header>
            <nav>
                <div class='logo'>
                    <a href="/home">
                        <h1>Verde Salvia</h1>
                    </a>
                </div>
                <div class='menu'>
                    <p>Ciao {{$user['username']}} </p>
                    @yield('links')
                    <a href="/logout">Logout</a>
                </div>
                <div id="menu_mobile">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>  
                <div class="link_mobile" class="hidden">
                    <a href="/home">Home</a>
                    <a href="/my_recipes">Le Mie Ricette</a>
                    <a href="/logout">Logout</a>
                </div>
            </nav>
            @yield('text')
        </header>
        <main>
            @yield('content')
            <footer>
                <address>DIEEI - UNICT</address>
                <p>Designed by Simone Maravigna 1000001109</p> 
            </footer>
        </main>
    </body>
</html>