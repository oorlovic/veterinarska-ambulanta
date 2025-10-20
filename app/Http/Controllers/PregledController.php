<?php
namespace App\Http\Controllers;
use App\Models\Pregled;
use App\Models\Log;
use Illuminate\Http\Request;

class PregledController extends Controller {
    public function index() {
        $pregledi = Pregled::with(['ljubimac','veterinar','korisnik'])->paginate(5);
        return view('pregledi.index', compact('pregledi'));
    }

    public function store(Request $r) {
        $p = Pregled::create($r->only(['datum','opis','ljubimac_id','veterinar_id','korisnik_id']));
        Log::create(['korisnik_id'=>auth()->id(),'akcija'=>"Zakazan pregled ID ".$p->id,'datum'=>now()]);
        return back();
    }
}
