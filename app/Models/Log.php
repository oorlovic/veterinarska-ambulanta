<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Log extends Model {
    protected $table = 'logovi';
    protected $fillable = ['korisnik_id','akcija','datum'];
    public $timestamps = false; 
}
