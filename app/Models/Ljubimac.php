<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Ljubimac extends Model {
    protected $table = 'ljubimci';
    protected $fillable = ['ime','vrsta','datum_rodjenja','vlasnik_id'];
    public function vlasnik(){ return $this->belongsTo(User::class,'vlasnik_id'); }
    public function pregledi(){ return $this->hasMany(Pregled::class); }
}
