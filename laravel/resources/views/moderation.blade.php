@extends("layouts.layout")

@section("title", "Page modération")

@section("content")

<div class="Texts">
    <h1>Espace Modération</h1>

            @if (session('success'))
             <div class="alert-success">
                {{ session('success') }}
            @endif
    <table class="styled-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Titre</th>
                <th>Activité</th>
                <th>Site</th>
                <th>Actions</th>
                <th></th>
                <!-- Add more columns as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach ($formSubmissions as $submission)
            <tr>
                <td>{{ $submission->id }}</td>
                <td>{{ $submission->submission_date }}</td>
                <td>{{ $submission->titre }}</td>
                <td>{{ $submission->activity }}</td>
                <td>{{ $submission->site_name }}</td>
                <td scope="btn_edit">
                    <a href="{{ route('form.edit', $submission->id) }}">Modifier</a>
                </td>
                <td scope="btn_edit">
                    <form action="{{ route('form.publish', $submission->id) }}" method="POST">
                        @csrf
                        <button class="button" type="submit">Publier</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
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


    
    td {
        border: 1px solid rgb(160 160 160);
        padding: 8px 20px;
    }

    td[scope="btn"] {
        background-color: #d91919;
        text-align:center;
    }

    td[scope="btn"] button {
        background-color: transparent;
        border: 0px solid;
        padding: 8px 10px;
        border-radius: 10px;
        color: white;
        font-weight: bold;
        font-size: 15px;
        text-align:center;
    }

    td[scope="btn_edit"]{
        background-color: transparent;
        border: 0px solid;
        padding: 8px 10px;
        border-radius: 10px;
        color: white;
        font-weight: bold;
        font-size: 15px;
        text-align:center;
    }

    td a{
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-shadow: inset 0 0 15px rgba(0, 0, 0, 0.2);
        cursor: pointer;
        max-width:50%;
        color:black;
        text-decoration: none;
        transition: background-color 0.3s;
    }
    td a:visited {
        color: black;
    }
    td a:hover {
        background-color: #2a8231;
        color: white
    }



    th {
        background-color:#262626;
        color: #fff;
    }

    td[scope='ID'] {
        background-color: rgba(255, 194, 255, 0.5);
    }
    .button {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-shadow: inset 0 0 15px rgba(0, 0, 0, 0.2);
        cursor: pointer;
        transition: background-color 0.2s;
        font-weight: bold;
    }

    .button:hover {
        background-color: #2a8231;
        color: white
    }


    .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

    .styled-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
    }

    .styled-table th, .styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.alert-success {
        color:green;
        margin-top:0px;
    }

    td {
        color:black;
    }
    </style>
@endsection