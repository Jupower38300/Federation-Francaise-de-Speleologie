@extends("layouts.layout")

@section("title", "Détails de l'expérience")

@section("content")

<div class="consultation-details">
    <h1>Consultation Details</h1>

    <div class="details-container">
        <div class="detail-item">
            <strong>Prénom:</strong>
            <span>{{ $formSubmission->prenom }}</span>
        </div>
        <div class="detail-item">
            <strong>Titre:</strong>
            <span>{{ $formSubmission->titre }}</span>
        </div>
        <div class="detail-item">
            <strong>Nom du site:</strong>
            <span>{{ $formSubmission->site_name }}</span>
        </div>
        <div class="detail-item">
            <strong>Activité:</strong>
            <span>{{ $formSubmission->activity }}</span>
        </div>
        <div class="detail-item">
            <strong>Message:</strong>
            <span>{{ $formSubmission->message }}</span>
        </div>
        <div class="detail-item">
            <strong>Date:</strong>
            <span>{{ $formSubmission->date }}</span>
        </div>
        <div class="detail-item">
            <strong>Commune:</strong>
            <span>{{ $formSubmission->commune }}</span>
        </div>
        <div class="detail-item">
            <strong>Département:</strong>
            <span>{{ $formSubmission->departement }}</span>
        </div>
        <div class="detail-item">
            <strong>Description:</strong>
            <span>{{ $formSubmission->description }}</span>
        </div>
        <div class="detail-item">
            <strong>Analyse:</strong>
            <span>{{ $formSubmission->analyse }}</span>
        </div>
        <div class="detail-item">
            <strong>Matériel:</strong>
            <span>{{ $formSubmission->materiel }}</span>
        </div>
        <div class="detail-item">
            <strong>Humain:</strong>
            <span>{{ $formSubmission->humain }}</span>
        </div>
    </div>
    <a href="{{ route('consultation') }}" class="btn btn-secondary">Retour</a>
</div>


@endsection

<style>

body {
        font-family: Arial, sans-serif;
        background-image:url("https://www.canyon-besorgues.com/activite-nature-ardeche/uploads/2021/01/speleo_famille-e1610108224921.jpg");
        backdrop-filter: blur(2px);
        margin: 0;
        padding: 0;
        display: flex;
        align-items:center;
        flex-direction:column;
        height: 100vh;
    }

    .name {
        font-size: 150%;
    }

    h1 {
        text-decoration: underline;
    }
    main {
        display:flex;
        justify-content:center;
        align-items:center;
        height:100%;
    }
    .Texts {
        display: flex;
        flex-direction: column;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 80%;
        justify-content: center;
        align-items:center;
        text-align: center;
    }


    .consultation-details {
    padding: 2rem;
    background-color: #f5f5f5;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align:center;
}

.details-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 1.5rem;
}

.detail-item {
    display: flex;
    flex-direction: column;
}

.detail-item strong {
    font-weight: bold;
    margin-bottom: 0.5rem;
}

.btn-secondary {
        background-color: #6c757d;
        color: #000;
        border: none;
        text-align:center;
        align-items:center;
        padding: 10px 20px;
        margin-top:30px;

    }

    .btn-secondary:hover {
        background-color: #5a6268;
        color: #000;

    }
</style>