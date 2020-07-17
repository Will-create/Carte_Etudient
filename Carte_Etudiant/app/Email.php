<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $guarded=[];
    public function etudiants(){
    return $this->hasMany('App\Etudiant');
}


public function admin(){
return $this->hasOne('App\Admin');
}
}
