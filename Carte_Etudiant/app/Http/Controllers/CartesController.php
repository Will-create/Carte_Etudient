<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carte;
use App\Etudiant;
use PDF;

class CartesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
        
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cartes=Carte::get();
        return view('cartes.liste',compact('cartes','etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cartes=Carte::all();
        return view('cartes.form',compact('cartes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=request()->validate([
            'annee'=> ['required','string'],
            'etudiant_id'=> ['required','string'],
            'photo'=> ['required','image'],
            'filiere_id'=> ['required','string'],
            'niveau_id'=> ['required','string'],
            'nationalite_id'=> ['required','string'],
            'tuteur_id'=> ['required','string'],
            'promotion_id'=> ['required','string'],
          ]);
    
          $imagePath=request('photo')->store('uploads','public');
          $carte=Carte::create([        
              'annee'=>$data[ 'annee'],             
              'etudiant_id'=>$data[ 'etudiant_id'], 
              'photo'=>$imagePath,
              'filiere_id'=>$data[ 'filiere_id'],
              'niveau_id'=>$data[ 'niveau_id'],
              'nationalite_id'=>$data[ 'nationalite_id'],
              'tuteur_id'=>$data[ 'tuteur_id'],
              'promotion_id'=>$data[ 'promotion_id'],         
              ]);
              return redirect()->route('carte.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function pdf($id){
        $etudiant=Carte::findOrFail($id);
        $pdf=PDF::loadview('carte.index', compact('etudiant'));
        $name='carte-' .$carte->id. ".pdf";
        return $pdf->stream('name');
    }
}
