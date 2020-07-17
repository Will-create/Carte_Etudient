<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $guarded=[];
    public function filieres(){
    return $this->belongsTo('App\Filiere');
}

public function nationalite(){
return $this->belongsTo('App\Nationalite');
}

public function niveaux(){
    return $this->belongsTo('App\Niveau');
}

public function tuteurs(){
    return $this->belongsTo('App\Tuteur');
}

public function promotions(){
    return $this->belongsTo('App\Promotion');
}
}
