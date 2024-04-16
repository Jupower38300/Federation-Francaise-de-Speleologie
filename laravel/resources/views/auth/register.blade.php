@extends("layouts.layout")

@section("title", "Inscription")

@section("content")
<form method="POST" action="{{ route('register') }}">
    @csrf
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
</form>

@endsection