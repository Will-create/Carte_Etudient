<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carte extends Model
{
    protected $guarded=[];
    public function etudiant(){
    return $this->belongsTo('App\Etudiant');
}
}
