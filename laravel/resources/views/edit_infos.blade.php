@extends("layouts.layout")

@section("title", "Modifier les informations")

@section("content")
        <div class="content_form">
            <div class="moderation">
                <a href="/moderation">Modération</a>
            </div>
            <form action="{{ route('form.update', $formSubmission->id) }}" method="POST">
                @csrf
                @method('PUT')
                <h1>Edit Form Submission</h1>
                <label for="prenom"><strong>Prénom:</strong></label>
                <input name="prenom" id="prenom" type="text" value="{{ $formSubmission->prenom }}" />
                <br><br>
                <label for="titre"><strong>Titre:</strong></label>
                <input name="titre" id="titre" type="text" value="{{ $formSubmission->titre }}" />
                <br><br>
                <label for="site_name"><strong>Nom du site:</strong></label>
                <input name="site_name" id="site_name" type="text" value="{{ $formSubmission->site_name }}" />
                <br><br>
                <label for="activity"><strong>Activité:</strong></label>
                <input name="activity" id="activity" type="text" value="{{ $formSubmission->activity }}" />
                <br><br>
                <label for="message"><strong>Message:</strong></label>
                <input name="message" id="message" type="text" value="{{ $formSubmission->message }}" />
                <br><br>
                <div id="bouton">
                    <button id="updateBtn" type="submit">Mettre à jour</button>
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
</style>