<h2>Pregledi</h2>
<table>
<tr><th>ID</th><th>Datum</th><th>Opis</th></tr>
@foreach($pregledi as $p)
<tr><td>{{ $p->id }}</td><td>{{ $p->datum }}</td><td>{{ $p->opis }}</td></tr>
@endforeach
</table>
{{ $pregledi->links() }}
<form method="POST" action="{{ route('pregledi.store') }}">
  @csrf
  <!-- polja: datum, opis, ljubimac_id, veterinar_id -->
  <input name="datum" placeholder="YYYY-MM-DD HH:MM:SS">
  <input name="opis" placeholder="Opis">
  <input name="ljubimac_id" placeholder="ID ljubimca">
  <input name="veterinar_id" placeholder="ID veterinara">
  <input type="hidden" name="korisnik_id" value="{{ auth()->id() }}">
  <button type="submit">Zakazi</button>
</form>
