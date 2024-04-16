@extends("layouts.layout")

@section("title", "Page modération")

@section("content")
<div class="Texts">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Titre</th>
                <th>Activité</th>
                <th>Site</th>
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
                <!-- Add more columns as needed -->
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <style>
            body {
        font-family: Arial, sans-serif;
        background: rgb(131, 58, 180);
        background: linear-gradient(0deg, rgba(131, 58, 180, 1) 0%, rgba(253, 29, 29, 0.5454545454545454) 50%, rgba(252, 176, 69, 0.572192513368984) 100%);
        backdrop-filter: blur(10px);
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
        padding: 8px 10px;
        border-radius: 10px;
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

    td[scope='col'] {
        background-color: rgba(120, 106, 219, 1);
        color: #fff;
    }

    td[scope='ID'] {
        background-color: rgba(255, 194, 255, 0.5);
    }

    </style>
@endsection