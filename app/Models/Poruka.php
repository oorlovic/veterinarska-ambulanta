<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Poruka extends Model {
    protected $fillable = ['posiljalac_id','primalac_id','tekst'];
}
