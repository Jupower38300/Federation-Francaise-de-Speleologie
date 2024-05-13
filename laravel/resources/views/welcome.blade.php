@extends("layouts.layout")

@section("title", "Accueil")

@section("content")


<section class="main">
    <div class="cards">
        <div class="card">
            <h2>Retour d'expérience</h2>
            <p>Voulez-vous soumettre votre expérience dans le domaine de la Spéléologie? Cet espace est fait pour vous!</p>
            <a href="{{ route('formulaire') }}" class="a_card">Retour d'expérience</a>
        </div>

        <div class="card">
            <h2>Consultation</h2>
            <p>Pour voir les expériences des autres utilisateurs et les consulter, cet espace y est dédié!</p>
            <a href="{{route('consultation')}}" class="a_card">Consultation</a>
        </div>

        <div class="card">
            <h2>Espace Modérateur</h2>
            <p>Pour accéder à cette page, vous devez avoir un compte administrateur de ce site.</p>
            <a href="{{route('form-submissions')}}" class="a_card">Espace modérateur</a>
        </div>
    </div>

</section>
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

    main {
        display:flex;
        justify-content:center;
        align-items:center;
        height:100%;
    }

.cards {
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}

.card h2 {
  width: 100%;
  text-align: center;
  margin-bottom: 30px;
  font-size: 30px;
}

.card{
  background-color: #fff;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
  width: 250px;
  margin: 0 15px 40px;
  height: 25em;
  text-align:center;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:center;
}

.a_card {
    padding: 15px;
        background-color:#007818;
        color:white;
        border-radius:10px;
        transition: background-color 0.2s;
}

.a_card:hover {
    background-color: #006314;
    color:white;
}
p {
    margin-left:10px;
    margin-right:10px;
    margin-bottom:20px;
}
</style>