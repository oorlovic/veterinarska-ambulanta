<h2>Izveštaj korisnika</h2>
<table border="1" cellpadding="4">
<tr><th>ID</th><th>Ime</th><th>Email</th><th>Uloga</th></tr>
@foreach($korisnici as $k)
<tr><td>{{ $k->id }}</td><td>{{ $k->name }}</td><td>{{ $k->email }}</td><td>{{ $k->uloga }}</td></tr>
@endforeach
</table>
