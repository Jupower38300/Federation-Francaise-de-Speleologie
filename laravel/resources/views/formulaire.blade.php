<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>


<header>
        <img src="https://ffspeleo.fr/csx/scripts/resizer.php?filename=CHARTEX%2Flogobighome%2F68%2F99%2Ffiz5cgpdphyq&mime=image%252Fsvg%252Bxml&originalname=ffs-bottom-logo.svg&geometry=640x480%3E" alt="Logo Fédération">
       <div class="navigation">
            <nav>
                <ul>
                    <li><a href="{{ route('formulaire') }}">Retour d'expérience</a></li>
                    <li><a href="#">Consultation</a></li>
                    <li><a href="#" id="connection">Se Connecter</a></li>
                </ul>
            </nav>
       </div> 
    </header>
<body>

    <main>
        <div class="content_form">
        <form action="{{ route('form.store') }}" method="POST">
    @csrf
    <h1>Retour d'expérience</h1>
    <label for="fname"><strong>Prénom:</strong></label>
    <input name="nom" id="fname" type="text" />
    <br><br>
    <label for="lname"><strong>Nom:</strong></label>
    <input name="prenom" id="lname" type="text" />
    <br><br>
    <label for="tel"><strong>Message:</strong></label>
    <input name="message" id="tel" type="text" />
    <br><br>
    <div id="bouton">
        <button id="resetBtn" type="reset">Réinitialiser</button>
        <button id="submitBtn" type="submit">Valider</button>
    </div>
</form>
        </div>

    </main>
    <footer>

    </footer>
</body>
</html>

<style>
        body {
        font-family: Arial, sans-serif;
        background-image:url("https://www.tourisme-canigou.com/sites/tourisme-canigou/files/styles/ratio_16_9_xl/public/content/images/1629122959-601625284.jpg?itok=qb1IO15-");
        backdrop-filter: blur(2px);
        background-size:cover;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction:column;
        align-items:center;
        height: 100vh;
    }

    header {
        display:flex;
        width:100%;
        justify-content:space-between;
        height:125px;
        background-color:white;
        margin-bottom:7em;   
        align-items:center;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.3);
      }

    .content_form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 100em;
        width: 100%;
        justify-content:center;
    }

    #bouton {
        display:flex;
    }

    label {
        color: black;
        font-size: 14px;
        margin-top: 0px;
    }

    .error {
        color: #D64045;
        font-size: 10px;
        margin-top: -7px;
        margin-bottom: -20px;

    }

    p {
        margin: 0 10px;
    }

    input {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;

    }

    input[type=" submit"] {
        background-color: #8b6edb;
        color: white;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #9e87dc;
    }

    button {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-shadow: inset 0 0 15px rgba(0, 0, 0, 0.2);
        cursor: pointer;
    }

    #submitBtn {
        margin-left:20px;
    }

    #resetBtn {
        margin-right:20px;
    }

    #submitBtn:hover {
        background-color: #9e87dc;
        color: white
    }

    #resetBtn:hover {
        background-color: #d91919;
        color: white
    }
    button #Valeur {
        margin-top: 15px;
    }

    h1 {
        text-decoration: underline;
    }

    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display:flex;
}

nav {
    margin-right: 2em;
}
img {
    width:75px;
    margin-left:2em;
}
li {
    margin-left: 30px;
}

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