<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Pregled extends Model {
    protected $table = 'pregledi';
    protected $fillable = ['datum','opis','ljubimac_id','veterinar_id','korisnik_id'];
    public function ljubimac(){ return $this->belongsTo(Ljubimac::class); }
    public function veterinar(){ return $this->belongsTo(Veterinar::class); }
    public function korisnik(){ return $this->belongsTo(User::class); }
}
