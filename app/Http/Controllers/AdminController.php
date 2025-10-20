<?php
namespace App\Http\Controllers;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller {
    public function index(){
        $korisnici = User::paginate(20);
        return view('admin.izvestaj', compact('korisnici'));
    }

    public function pdf(){
        $korisnici = User::all();
        $pdf = Pdf::loadView('admin.izvestaj_pdf', compact('korisnici'));
        return $pdf->download('izvestaj.pdf');
    }
}
