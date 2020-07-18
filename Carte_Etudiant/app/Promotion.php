<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
class Promotion extends Model
=======
class Annee extends Model
>>>>>>> 3cd9ed74e098d9e8336adc20c56cfd5375e38020
{
    protected $guarded=[];
    public function etudiants(){
    return $this->hasMany('App\Etudiant');
}
}
