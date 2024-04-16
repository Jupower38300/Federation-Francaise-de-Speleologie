@extends("layouts.layout")

@section("title", "Inscription")

@section("content")

<form method="POST" action="{{ route('login') }}">
    @csrf
    <div>
        <label for="username">Nom d'utilisateur:</label>
        <input id="username" type="text" name="username" value="{{ old('username') }}" required autofocus>
    </div>
    <div>
        <label for="password">Mot de passe:</label>
        <input id="password" type="password" name="password" required>
    </div>
    <div>
        <button type="submit">Connexion</button>
    </div>
</form>

@endsection