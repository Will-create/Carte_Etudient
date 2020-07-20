<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $guarded=[];
    public function filiere(){
    return $this->belongsTo('App\Filiere');
}

public function nationalite(){
return $this->belongsTo('App\Nationalite');
}

public function niveau(){
    return $this->belongsTo('App\Niveau');
}

public function tuteur(){
    return $this->belongsTo('App\Tuteur');
}

public function promotion(){
    return $this->belongsTo('App\Promotion');
}

public function cartes(){
    return $this->hasMany('App\Carte');
}
}
