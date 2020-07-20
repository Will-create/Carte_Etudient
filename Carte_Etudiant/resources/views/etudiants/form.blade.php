@include('include.head')
<br>
<br>
<br>
<section id="main-content">
 <h2><strong> Enregistrer un Etudiant </strong> </strong></h2>
 <br>
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-body">
                <form method= "post" action="/etudiants">
                @csrf
                  

                        <div class="form-group ">
                            <label for="0" >Nom</label>

                            
                                <input id="titre" type="text" class="form-control  {{ $errors->has('nom') ? ' is-invalid': '' }}" name="nom"   autofocus>

                                @if ($errors->has('nom'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group ">
                            <label for="0" >Prénom</label>
                                <input id="prenom" type="text" class="form-control  {{ $errors->has('prenom') ? ' is-invalid': ' ' }}" name="prenom"  autofocus>

                                @if ($errors->has('prenom'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                        </div>
                 


                        <div class="form-group ">
                            <label for="0" >Date_naiss</label>
                                <input id="date_naiss" type="text" class="form-control  {{ $errors->has('date_naiss') ? ' is-invalid': ' ' }}" name="date_naiss"  autofocus>

                                @if ($errors->has('date_naiss'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('date_naiss') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group ">
                            <label for="0" >Matricule</label>
                                <input id="matricule" type="text" class="form-control  {{ $errors->has('matricule') ? ' is-invalid': ' ' }}" name="matricule"  autofocus>
                                @if ($errors->has('matricule'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('matricule') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group ">
                            <label for="0" >Adresse</label>

                            
                                <input id="adresse" type="email" class="form-control  {{ $errors->has('adresse') ? ' is-invalid': '' }}" name="adresse"   autofocus>

                                @if ($errors->has('adresse'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('adresse') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="custom-file row">
                        <label class="col-sm-2 custom-file-label" for="validatedCustomFile">Choisir une photo...</label>
                        <div class="col-sm-10">
                        <input type="file" name="photo"  class="custom-file-input {{ $errors->has('photo') ? ' is-invalid': ' ' }}" id="validatedCustomFile">
                        @if ($errors->has('photo'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('photo') }}</strong>
                            </span>
                        @endif
                      </div>
                      </div>
                      <br>
                      <div class="form-group ">
                      <label for="contact" >Filiere</label>
                      <select name="filiere_id" class="form-control">
                      <option value="0" >chosir une filiere pour l'etudiant</option>
                      <?php $i=0; ?>
                     @foreach($filieres as $filiere)
                     <?php $i++; ?>
                      <option  value="{{$filiere->id}}">{{$i}}. {{$filiere->nom}}</option>
                      @endforeach
                      </select>
                          @if ($errors->has('filiere_id'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('filiere_id') }}</strong>
                              </span>
                          @endif
                      
                  </div>
                        <div class="form-group ">
                            <label for="contact" >Niveau</label>
                            <select name="niveau_id" class="form-control">
                            <option value="0" >chosir un niveau pour l'etudiant</option>
                            <?php $i=0; ?>
                           @foreach($niveaux as $niveau)
                           <?php $i++; ?>
                            <option  value="{{$niveau->id}}">{{$i}}. {{$niveau->niveau}}</option>
                            @endforeach
                            </select>
                                @if ($errors->has('niveau_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('niveau_id') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        <div class="form-group ">
                            <label for="contact" >Nationalité</label>
                            <select name="nationalite_id" class="form-control">
                            <option value="0" >chosir une nationalite pour l'etudiant'</option>
                            <?php $i=0; ?>
                           @foreach($nationalites as $nationalite)
                           <?php $i++; ?>
                            <option  value="{{$nationalite->id}}">{{$i}}. {{$nationalite->nationalite}}</option>
                            @endforeach
                            </select>
                                @if ($errors->has('nationalite_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nationalite_id') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        <div class="form-group ">
                            <label for="contact" >Tuteur</label>
                            <select name="tuteur_id" class="form-control">
                            <option value="0" >chosir un tuteur pour l'etudiant'</option>
                            <?php $i=0; ?>
                           @foreach($tuteurs as $tuteur)
                           <?php $i++; ?>
                            <option  value="{{$tuteur->id}}">{{$i}}. {{$tuteur->nom}}</option>
                            @endforeach
                            </select>
                                @if ($errors->has('tuteur_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tuteur_id') }}</strong>
                                    </span>
                                @endif
                            
                        </div> 
                        <div class="form-group ">
                            <label for="contact" >Promotion</label>
                            <select name="promotion_id" class="form-control">
                            <option value="0" >chosir une promotion pour l'etudiant</option>
                            <?php $i=0; ?>
                           @foreach($promotions as $promotion)
                           <?php $i++; ?>
                            <option  value="{{$promotion->id}}">{{$i}}. {{$promotion->annee}}</option>
                            @endforeach
                            </select>
                                @if ($errors->has('promotion_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('promotion_id') }}</strong>
                                    </span>
                                @endif
                            
                        </div>                  
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Enregistrer
                                </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@include('include.foot')