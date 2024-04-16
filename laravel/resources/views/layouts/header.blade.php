<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
</head>
<style>
    a, a:visited {
    text-decoration: none;
    color:black;
    transition: color 0.3s;

    }
    a:hover {
        color: #007818;

    }

    #connection {
        padding: 15px;
        background-color:#007818;
        color:white;
        border-radius:10px;
        transition: background-color 0.2s;
    }

    #connection:hover {
        background-color: #006314;
    }

</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var accountLink = document.querySelector('.account-link');
        var logoutDropdown = document.querySelector('.logout-dropdown');

        accountLink.addEventListener('mouseenter', function() {
            logoutDropdown.style.display = 'block';
        });

        accountLink.addEventListener('mouseleave', function() {
            logoutDropdown.style.display = 'none';
        });

        logoutDropdown.addEventListener('mouseenter', function() {
            logoutDropdown.style.display = 'block';
        });

        logoutDropdown.addEventListener('mouseleave', function() {
            logoutDropdown.style.display = 'none';
        });
    });
</script>

<header style=" display:flex; width:100%; justify-content:space-between;  height:125px; background-color:white;  margin-bottom:3em;align-items:center; box-shadow: 0 10px 10px rgba(0, 0, 0, 0.3);" >
        <img style="width:75px; margin-left:2em;" src="https://ffspeleo.fr/csx/scripts/resizer.php?filename=CHARTEX%2Flogobighome%2F68%2F99%2Ffiz5cgpdphyq&mime=image%252Fsvg%252Bxml&originalname=ffs-bottom-logo.svg&geometry=640x480%3E" alt="Logo Fédération">
       <div class="navigation">
            <nav style="margin-right: 2em;">
                <ul style="  list-style-type: none; margin: 0; padding: 0; display:flex;">
                    <li style="margin-left: 30px;"><a href="{{ route('formulaire') }}">Retour d'expérience</a></li>
                    <li style="margin-left: 30px;"><a href="#">Consultation</a></li>
                    <li style="margin-left: 30px;"><a href="login" id="connection">Se Connecter</a></li>
                    <li style="margin-left: 20px; position: relative;">
                        @if (auth()->user())
                            <a href="#" class="account-link" style="margin-left: 20px;">{{ auth()->user()->name }}</a>
                            <div class="logout-dropdown" style="position: absolute; display: none; padding-top:10px;">
                                <form action="{{ route('logout') }}" method="POST" class="logout-form">
                                    @csrf
                                    <button type="submit" class="logout-button">Déconnexion</button>
                                </form>
                            </div>
                        @else
                            <div style="margin-left: 20px;">Bienvenue, Invité</div>
                        @endif
                    </li>
                </ul>
            </nav>
       </div>
    </header>

<body>

    <main>