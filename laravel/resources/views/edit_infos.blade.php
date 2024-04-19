@extends("layouts.layout")

@section("title", "Modifier les informations")

@section("content")
    <div class="content_form">
        <form action="{{ route('form.update', $formSubmission->id) }}" method="POST">
            @csrf
            @method('PUT')
            <h1>Edit Form Submission</h1>
            <div class="sections-container">
                <div class="section">
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
                    <select name="activity" id="activity" class="custom-select">
                        <option value="Spéléologie" @if(old('activity') == 'Spéléologie') selected @endif>Spéléologie</option>
                        <option value="Canyonisme" @if(old('activity') == 'Canyonisme') selected @endif>Canyonisme</option>
                        <option value="Plongée sous marine" @if(old('activity') == 'Plongée sous marine') selected @endif>Plongée sous marine</option>
                    </select>
                    @error('activity')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                    <br><br>
                    <label for="message"><strong>Message:</strong></label>
                    <input name="message" id="message" type="text" value="{{ $formSubmission->message }}" />
                    <br><br>
                    <label for="date"><strong>Date de l'événement:</strong></label>
                    <input name="date" id="date" type="date" value="{{ $formSubmission->date }}" />
                </div>
                <div class="section">
                    <label for="commune"><strong>Commune:</strong></label>
                    <input name="commune" id="commune" type="text" value="{{ $formSubmission->commune }}" />
                    <br><br>
                    <label for="departement"><strong>Département:</strong></label>
                    <input name="departement" id="departement" type="text" value="{{ $formSubmission->departement }}" />
                    <br><br>
                    <label for="description"><strong>Description de l'événement:</strong></label>
                    <input name="description" id="description" type="text" value="{{ $formSubmission->description }}" />
                    <br><br>
                    <label for="analyse"><strong>Analyse de l'événement:</strong></label>
                    <input name="analyse" id="analyse" type="text" value="{{ $formSubmission->analyse }}" />
                    <br><br>
                    <label for="materiel"><strong>Implique-t-elle le matériel? Pourquoi?</strong></label>
                    <input name="materiel" id="materiel" type="text" value="{{ $formSubmission->materiel }}" />
                    <br><br>
                    <label for="humain"><strong>Implique-t-elle des facteurs humains? Pourquoi?</strong></label>
                    <input name="humain" id="humain" type="text" value="{{ $formSubmission->humain }}" />
                </div>
            </div>
            <div class="buttons-container">
                <button id="updateBtn" type="submit" class="btn btn-primary">Mettre à jour</button>
                <a href="{{ route('form-submissions') }}" class="btn btn-secondary">Retour</a>
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
    .sections-container {

        display: flex;
        justify-content: space-between;
    }


    .section {
            flex: 1;
            margin-right: 20px;
        }

        .section:last-child {
            margin-right: 0;
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

    .buttons-container {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .btn {
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        margin-right: 10px;
    }

    .btn:last-child {
        margin-right: 0;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        border: none;
        width:50%;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: #000;
        border: none;
        text-align:center;
        align-items:center;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
        color: #000;
    }
</style>
