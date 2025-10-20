<h2>Lista korisnika</h2>
<table border="1">
<tr><th>ID</th><th>Ime</th><th>Email</th><th>Uloga</th></tr>
@foreach($korisnici as $k)
<tr><td>{{ $k->id }}</td><td>{{ $k->name }}</td><td>{{ $k->email }}</td><td>{{ $k->uloga }}</td></tr>
@endforeach
</table>
<a href="{{ route('admin.pdf') }}">Preuzmi PDF</a>
{{ $korisnici->links() }}
