@include('include.head')


<br><br><br><br><br>

<br><br>
<section id="main-content">

        <div class="section-title">
        @foreach($cartes as $carte)
          <h2><strong>{{$carte->annee}} </strong></strong></h2>
          <h2><strong>{{$carte->etudiant->nom}} {{$carte->etudiant->prenom}} {{$carte->id}} </strong></strong></h2>
        </div>
        
        <div id="partg" class="row border">
          <div class="col-lg-6 align-items-center" data-aos="fade-left">
            
        <img src="{{asset('storage').'/'.$carte->etudiant->photo}}" style="width:400px;height:400px;" class="bf5 border rounded-circle"> 
                        
          </div>
          <div class="col-lg-6 pt-4 pt-lg-4" data-aos="fade-right">
              <h4><p class="card-text"><strong>Né(e) le        : </strong>{{$carte->etudiant->date_naiss}}</p></h4><br><br>
              <h4><p class="card-text"><strong>matricule: </strong>{{$carte->etudiant->matricule}}</p></h4><br><br>
              <h4><p class="card-text"><strong>adresse     :</strong>{{$carte->etudiant->adresse}}</p></h4><br><br>
              <h4><p class="card-text"><strong>filiere         : </strong>{{$carte->etudiant->filiere->nom}}</p></h4><br><br>
              <h4><p class="card-text"><strong>niveau         : </strong>{{$carte->etudiant->niveau->niveau}}</p></h4><br><br>
              <h4><p class="card-text"><strong>nationalite         : </strong>{{$carte->etudiant->nationalite->nationalité}}</p></h4><br><br>
              <h4><p class="card-text"><strong>tuteur        : </strong>{{$carte->etudiant->tuteur->nom}}</p></h4><br><br>
              <h4><p class="card-text"><strong>promotion        : </strong>{{$carte->etudiant->promotion->annee}}</p></h4><br><br>
              @endforeach

            </div>    
          
                        
        </div>
    </div>
    


    @include('include.foot')