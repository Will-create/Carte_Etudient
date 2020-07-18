<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annee extends Model
{
    protected $guarded=[];
    public function etudiants(){
    return $this->hasMany('App\Etudiant');
}
}
