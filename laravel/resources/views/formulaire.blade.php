@extends("layouts.layout")

@section("title", "Retour d'expérience")

@section("content")
    <div class="content_form">
        <form action="{{ route('form.store') }}" method="POST">
            @csrf
            <h1>Retour d'expérience</h1>
            <div class="sections-container">
                <div class="section">
                    <label for="prenom"><strong>Prénom:</strong></label>
                    <input name="prenom" id="prenom" type="text" value="{{ old('prenom') }}" />
                    @error('prenom')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                    <br><br>
                    <label for="titre"><strong>Titre:</strong></label>
                    <input name="titre" id="titre" type="text" value="{{ old('titre') }}" />
                    @error('titre')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                    <br><br>
                    <label for="site_name"><strong>Nom du site:</strong></label>
                    <input name="site_name" id="site_name" type="text" value="{{ old('site_name') }}" />
                    @error('site_name')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
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
                    <textarea name="message" id="message" rows="3">{{ old('message') }}</textarea>
                    @error('message')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                    <br><br>
                    <label for="date"><strong>Date de l'événement:</strong></label>
                    <input name="date" id="date" type="date" value="{{ old('date') }}" />
                    @error('date')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
                <div class="section">
                    <label for="commune"><strong>Commune:</strong></label>
                    <input name="commune" id="commune" type="text" value="{{ old('commune') }}" />
                    @error('commune')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                    <br><br>
                    <label for="departement"><strong>Département:</strong></label>
                    <input name="departement" id="departement" type="text" value="{{ old('departement') }}" />
                    @error('departement')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                    <br><br>
                    <label for="description"><strong>Description de l'événement:</strong></label>
                    <input name="description" id="description" type="text" value="{{ old('description') }}" />
                    @error('description')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                    <br><br>
                    <label for="analyse"><strong>Analyse de l'événement:</strong></label>
                    <input name="analyse" id="analyse" type="text" value="{{ old('analyse') }}" />
                    @error('analyse')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                    <br><br>
                    <label for="materiel"><strong>Implique-t-elle le matériel? Pourquoi?</strong></label>
                    <input name="materiel" id="materiel" type="text" value="{{ old('materiel') }}" />
                    @error('materiel')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                    <br><br>
                    <label for="humain"><strong>Implique-t-elle des facteurs humains? Pourquoi?</strong></label>
                    <input name="humain" id="humain" type="text" value="{{ old('humain') }}" />
                    @error('humain')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br><br>
            <div id="bouton">
                <button id="resetBtn" type="reset">Réinitialiser</button>
                <button id="submitBtn" type="submit">Valider</button>
</div>
        </form>
    </div>
@endsection

<style>
    body {
        font-family: Arial, sans-serif;
        background-image: url("https://www.tourisme-canigou.com/sites/tourisme-canigou/files/styles/ratio_16_9_xl/public/content/images/1629122959-601625284.jpg?itok=qb1IO15-");
        backdrop-filter: blur(2px);
        background-size: cover;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 100vh;
    }

    .content_form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 40em;
        width: 100%;
        height: auto;
    }


    .error-message {
        color: #D64045;
        font-size: 10px;
        margin-top: -7px;
        margin-bottom: -20px;
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

    textarea#message {
        width: 100%;
        height:50px;
        box-sizing: border-box;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .moderation {
        text-align:center;
        margin-top:10px;
    }
    #bouton {
        display:flex;
    }

    label {
        color: black;
        font-size: 14px;
        margin-top: 0px;
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
        background-color: #2a8231;
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
        transition: background-color 0.2s;
    }

    #submitBtn {
        margin-left:20px;
    }

    #resetBtn {
        margin-right:20px;
    }

    #submitBtn:hover {
        background-color: #2a8231;
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

    .modBtn {
        width: 100%;
        padding: 5px 30px 5px 30px;
        box-sizing: border-box;
        margin-top: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-shadow: inset 0 0 15px rgba(0, 0, 0, 0.2);
        cursor: pointer;
        color:black;
        font-size: 15px;
        transition: background-color 0.2s;
    }

    .modBtn:visited {
        color: black;
    }

    .modBtn:hover {
        background-color: #2a8231;
        color: white
    }
</style>