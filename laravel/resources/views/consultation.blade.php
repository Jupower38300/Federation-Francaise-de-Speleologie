
@extends("layouts.layout")

@section("title", "Consultation")

@section("content")

<h1>Consultation</h1>
<div class="card-container">
  @foreach ($publishedFormSubmissions as $submission)
    <a href="{{ route('consultation.show', $submission->id) }}" class="card">
      <div class="card-content">
        <p class="date">{{ $submission->submission_date }}</p>
        <h2>{{ $submission->titre }}</h2>
        <p class="activity">{{ $submission->activity }}</p>
        <p class="site-name">{{ $submission->site_name }}</p>
        <p>{{ $submission->message }}</p>
        <p>{{ $submission->description }}</p>
      </div>
    </a>
  @endforeach
</div>


    <style>
            body {
        font-family: Arial, sans-serif;
        background-image:url("https://ffspeleo.fr/csx/scripts/resizer.php?filename=SLIDES%2Fmedia%2F3a%2Fc7%2Fddt5sl06yhfv&mime=image%252Fjpeg&originalname=bandeau-slider-01.jpg&geometry=2100x920%5E&gravity=Center&crop=2100x920%2B0%2B0");
        backdrop-filter: blur(2px);
        background-size: cover;
        margin: 0;
        padding: 0;
        display: flex;
        align-items:center;
        flex-direction:column;
        height: 100vh;
    }

    main {
        display:flex;
        justify-content:center;
        align-items:center;
        height:100%;
        flex-direction:column;
    }

    h1 {
        font-size:30px;
        text-decoration:underline;
        margin-bottom:20px;
        color:white;
    }
    .card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
  }

  .card {
    width: 250px;
    display:flex;
    height:300px;
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease-in-out;
    align-items:center;
  }

  .card:hover {
    transform: translateY(-10px);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  }

  .card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
  }

  .card-content {
    padding: 20px;
  }

  .card-content h2 {
    margin-top: 0;
    font-size: 18px;
    font-weight: bold;
    color:black;
  }

  .card-content p {
    margin: 5px 0;
    font-size: 14px;
    color: #666;
  }

  .card-content p.date {
    color: #999;
    font-size: 12px;
  }

  .card-content p.activity,
  .card-content p.site-name {
    display: inline-block;
    margin-right: 10px;
  }
    </style>
@endsection