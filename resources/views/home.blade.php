<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <title>PGC-GYM Landing Page</title>
        <!-- CSS -->
        <link rel="stylesheet" href= "{{ asset('css\accueil.css') }}" />
    </head>
    <body>
        <!-- Menu -->
<div class="menu">
        <div class="container flex">
            <!-- Mobile Button -->
            <div class="mobile-btn">
                <ion-icon name="grid"></ion-icon>
            </div>
            <div class="logo">
                <a href="/"><img  src="{{ asset('images\logo.png') }}" alt="" /></a>
            </div>

            <ul class="nav">
                <li class="nav-item"><a href="/" class="nav-link">Accueil</a></li>
                <li class="nav-item"><a href="/produits" class="nav-link">Boutique</a></li>
                <li class="nav-item"><a href="/forfaits" class="nav-link">Forfaits</a></li>
            </ul>

            <a href="/panier" class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg></a>

            @if (Route::has('login'))
            
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    @else
                        <a href="{{ route('login') }}" class="btn">Se connecter</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn">S'inscrire</a>
                        @endif
                    @endauth
                </div>
            @endif
            @auth
            <form method="POST" action="{{ route('logout') }}">

                    @csrf
                    <button class="btn" type="submit"  >
                        {{ __('Se déconnecter') }}
                    </button>
            </form>
                    @endauth
                    
                    
        </div>
    </div>
    
    
    <!-- End Menu -->
        
    @yield('contenuforfait')
    @yield('contenuPanier')
    @yield('contenuAcceuil')
    @yield('contenuBoutique')
</body>
</html>
