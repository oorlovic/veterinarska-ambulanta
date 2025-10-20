<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Veterinar extends Model {
    protected $table = 'veterinari';
    protected $fillable = ['ime','specijalizacija','email'];
    public function pregledi(){ return $this->hasMany(Pregled::class); }
}
