@include('include.head')
<br>
<br>
<br>
<section id="main-content">
 <h2><strong> Enregistrer un tuteur </strong> </strong></h2>
 <br>
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-body">
                <form method= "post" action="/etudiants">
                @csrf
                        <div class="form-group ">
                            <label for="0" >Nom</label>
                                <input id="nom" type="text" class="form-control  {{ $errors->has('nom') ? ' is-invalid': ' ' }}" name="nom"  autofocus>
                                @if ($errors->has('nom'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                                </div>
                            <div class="form-group ">
                            <label for="0" >Prenom</label>
                                <input id="prenom" type="text" class="form-control  {{ $errors->has('prenom') ? ' is-invalid': ' ' }}" name="prenom"  autofocus>
                                @if ($errors->has('prenom'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                                </div>

                            <div class="form-group ">
                            <label for="0" >Contact</label>
                                <input id="contact" type="number" class="form-control  {{ $errors->has('contact') ? ' is-invalid': ' ' }}" name="contact"  autofocus>
                                @if ($errors->has('contact'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contact') }}</strong>
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
                                