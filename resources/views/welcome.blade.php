<!doctype html>
<html>
    <head>
        <title>Veterinarska ambulanta</title>
    </head>
    <body>
        <h1>Dobrodošli</h1>
        @auth
        <p><a href="{{ route('pregledi.index') }}">Pregledi</a>
        @if(auth()->user()->uloga==='admin') | <a href="{{ route('admin.index') }}">Admin</a> @endif</p>
        <form method="POST" action="{{ route('logout') }}">@csrf<button>Odjavi se</button></form>
        @else
        <a href="{{ route('login') }}">Prijava</a> | <a href="{{ route('register') }}">Registracija</a>
        @endauth
    </body>
</html>
