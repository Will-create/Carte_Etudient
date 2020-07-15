@include('includes.head')


<br><br><br><br><br>

<br><br>
<section id="about-us" class="about-us">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><strong>{{$apprenant[0]['nom']}} {{$apprenant[0]['prenom']}}</strong></strong></h2>
        </div>
        
        <div id="partg" class="row border">
          <div class="col-lg-6 align-items-center" data-aos="fade-left">
                    
                      
                        <img src="{{asset('storage').'/'.$apprenant[0]['photo']}}" style="width:400px;height:400px;" class="bf5 border rounded-circle"> 
                        
          </div>
          <div class="col-lg-6 pt-4 pt-lg-4" data-aos="fade-right">
              <h4><p class="card-text"><strong>Né(e) le        : </strong>{{$apprenant[0]['date_naiss']}}</p></h4><br><br>
              <h4><p class="card-text"><strong>ville d'origine : </strong>{{$apprenant[0]['ville_origine']}}</p></h4><br><br>
              <h4><p class="card-text"><strong>formation       :</strong>{{$apprenant[0]['formation']}}</p></h4><br><br>
              <h4><p class="card-text"><strong>contact         : </strong>{{$apprenant[0]['contact']}}</p></h4><br><br>
              <a class="btn btn-danger " href="#">Voir les Projets de  {{$apprenant[0]['prenom']}}  </a>

            </div>    

                        
        </div>
    </div>
</section>

    @include('includes.foot')