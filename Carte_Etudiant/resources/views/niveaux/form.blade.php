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
                            <label for="0" >Niveau</label>
                                <input id="niveau" type="text" class="form-control  {{ $errors->has('niveau') ? ' is-invalid': ' ' }}" name="niveau"  autofocus>

                                @if ($errors->has('niveau'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('niveau') }}</strong>
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
                                                