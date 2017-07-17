<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CAMEI</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Se Déconnecter
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                    @else
                        <a href="{{ url('/login') }}">Se Connecter</a>
                        <a href="{{ url('/register') }}">S'Enregistrer</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    CAMEI
                </div>

                <div class="links">
                    <!-- <a href="https://laravel.com/docs">Documentation</a> -->
                    <!-- <a href="https://laracasts.com">Laracasts</a> -->
                    <!-- <a href="https://laravel-news.com">News</a> -->
                    <!-- <a href="https://forge.laravel.com">Forge</a> -->
                    <!-- <a href="https://github.com/laravel/laravel">GitHub</a> -->
                    <button class="btn btn-primary" type="button"> DashBoard </button>
                    	<a href="{{ URL::route('bonintervention.index') }}" class="btn btn-primary"> Bon d'Intervention </a>
                    	<button class="btn btn-primary" type="button">Devis</button>
                    	<button class="btn btn-primary" type="button">Suivi de Chantier</button>
                    	<a href="{{ URL::route('facture.index') }}" class="btn btn-primary"> Factures </a>
                    	<a href="{{ URL::route('client.index') }}" class="btn btn-primary"> Annuaire Clients </a>
                    	<a href="{{ URL::route('collaborateur.index') }}" class="btn btn-primary"> Fiche Collaborateurs </a>
                    	<button class="btn btn-primary" type="button">Stock</button>
                    	<button class="btn btn-primary" type="button">Recherche</button>
                </div>
            </div>
        </div>
    </body>
</html>
