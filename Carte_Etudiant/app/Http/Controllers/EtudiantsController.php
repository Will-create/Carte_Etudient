<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;
use App\Filiere;
use App\Nationalite;
use App\Promotion;
use App\Niveau;
use App\Tuteur;
use App\Carte;

class EtudiantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants=Etudiant::all();
        return view('etudiants.liste',compact('etudiants'));
    }

    public function newFiliere()
    {
        $filieres=Filiere::all();
       
        return view('etudiants.form',compact('filieres'));
    }
    public function newNationalité()
    {
        $nationalites=Nationalite::all();
        return view('etudiants.form',compact('nationalites'));
    }
    public function newNiveau()
    {
        $niveaux=Niveau::all();
        return view('etudiants.form',compact('niveaux'));
    }

    public function newPromotion()
    {
        $promotion=Promotion::all();
        return view('etudiants.form',compact('promotions'));
    }
    public function newTuteur()
    {
        $tuteurs=Tuteur::all();
        return view('etudiants.form',compact('tuteurs'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $etudiants=Etudiant::all();
        $filieres=Filiere::all();
        $nationalites=Nationalite::all();
        $niveaux=Niveau::all();
        $promotions=Promotion::all();
        $tuteurs=Tuteur::all();
        return view('etudiants.form',compact('etudiants','filieres','nationalites','niveaux','promotions','tuteurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Etudiant $etudiant)
    {
        $data=request()->validate([
        'nom'=> ['required','string'],
        'prenom'=> ['required','string'],
        'date_naiss'=> ['required','string'],
        'matricule'=> ['required','string'],
        'adresse'=> ['required','string'],
        'photo'=> ['required','image']
      ]);
dd($data);
      $imagePath=request('photo')->store('uploads','public');
      $etudiant=Etudiant::create([
          'nom'=>$data[ 'nom'],
          'prenom'=>$data[ 'prenom'],
          'date_naiss'=>$data[ 'date_naiss'],
          'matricule'=>$data[ 'matricule'],
          'adresse'=>$data[ 'adresse'],
          'photo'=>$imagePath,
          'filiere_id'=>$data[ 'filiere_id'],
          'niveau_id'=>$data[ 'niveau_id'],
          'nationalité_id'=>$data[ 'nationalité_id'],
          'tuteur_id'=>$data[ 'tuteur_id'],
          'promotion_id'=>$data[ 'promotion_id'],
          ]);      
          return view('etudiants.liste',compact('etudiants'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        return 'detail';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
