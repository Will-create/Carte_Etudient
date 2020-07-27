@include('include.head')


<br><br><br><br><br>

<br><br>
<section id="main-content">

        <div class="section-title"  style="max-width: 540px;">
        @foreach($cartes as $carte)
          <h3><strong>{{$carte->annee}} </strong></strong></h3>
          <h3><strong>{{$carte->etudiant->nom}} {{$carte->etudiant->prenom}} {{$carte->id}} </strong></strong></h3>
        </div>
        
        <div class="card mb-3" style="max-width: 860px;">
        <div class="col-lg-3 align-items-center" data-aos="fade-left">
            
        <img src="{{asset('storage').'/'.$carte->etudiant->photo}}" style="width:200px;height:200px;" class="bf5 border rounded-circle"> 
                        
          </div>
          <div class="col-lg-3 pt-4 pt-lg-4" data-aos="fade-right">
              <h4><p class="card-text"><strong>Né(e) le        : </strong>{{$carte->etudiant->date_naiss}}</p></h4>
              <h4><p class="card-text"><strong>matricule: </strong>{{$carte->etudiant->matricule}}</p></h4>
              <h4><p class="card-text"><strong>adresse     :</strong>{{$carte->etudiant->adresse}}</p></h4>
              <h4><p class="card-text"><strong>filiere         : </strong>{{$carte->etudiant->filiere->nom}}</p></h4>
              <h4><p class="card-text"><strong>niveau         : </strong>{{$carte->etudiant->niveau->niveau}}</p></h4>
              <h4><p class="card-text"><strong>nationalite         : </strong>{{$carte->etudiant->nationalite->nationalité}}</p></h4>
              <h4><p class="card-text"><strong>tuteur        : </strong>{{$carte->etudiant->tuteur->nom}}</p></h4>
              <h4><p class="card-text"><strong>promotion        : </strong>{{$carte->etudiant->promotion->annee}}</p></h4>
     
            </div>                    
        </div>
    <a href="{{URL('pdf',$cartes)}}">imprimer</a>
        @endforeach
    </div>




    @include('include.foot')