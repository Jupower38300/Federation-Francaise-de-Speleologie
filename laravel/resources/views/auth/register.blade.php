@extends("layouts.layout")

@section("title", "Inscription")

@section("content")
<div class="content_form">
<form method="POST" action="{{ route('register') }}">
    @csrf
    <h1>Inscription</h1>
    <div>
        <label for="name">Nom d'utilisateur</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
    </div>
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
    </div>
    <div>
        <label for="password">Mot de passe:</label>
        <input id="password" type="password" name="password" required>
    </div>
    <div>
        <label for="password_confirmation">Confirmer le mot de passe:</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>
    <div>
        <button type="submit">S'inscrire</button>
    </div>
    <div class="text">
        <p>Vous avez déjà un compte? <a href="/login" class="a_login">Se connecter</a></p>
    </div>
</form>
</div>
@endsection

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


    .a_login {
        color:black;
    }

    .a_login:visited {
        color:black;
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

    .moderation {
        background-color:white;
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

    .text {
        text-align:center;
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
</style>