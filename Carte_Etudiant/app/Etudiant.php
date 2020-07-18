<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $guarded=[];
<<<<<<< HEAD
    public function filiere(){
=======
    public function filieres(){
>>>>>>> 3cd9ed74e098d9e8336adc20c56cfd5375e38020
    return $this->belongsTo('App\Filiere');
}

public function nationalite(){
return $this->belongsTo('App\Nationalite');
}

<<<<<<< HEAD
public function niveau(){
    return $this->belongsTo('App\Niveau');
}

public function tuteur(){
    return $this->belongsTo('App\Tuteur');
}

public function promotion(){
=======
public function niveaux(){
    return $this->belongsTo('App\Niveau');
}

public function tuteurs(){
    return $this->belongsTo('App\Tuteur');
}

public function promotions(){
>>>>>>> 3cd9ed74e098d9e8336adc20c56cfd5375e38020
    return $this->belongsTo('App\Promotion');
}
}
