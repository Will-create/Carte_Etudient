@include('include.head')
<br>
<br>
<br>
<section id="main-content">
<h1> ENVOYER UN MAIL</h1>

<div class="col-md-8">
       <div class="card">
                
          <div class="card-body">
            <form method= "post" action="/emails" enctype="multipart/form-data">
                @csrf
                        <div class="form-group ">
                            <label for="0" >Nom</label>
                   
                                <input id="titre" type="text" class="form-control  {{ $errors->has('nom') ? ' is-invalid': '' }}" name="nom"  autofocus>

                                @if ($errors->has('nom'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group ">
                            <label for="0" >email</label>
                                <input id="email" type="email" class="form-control  {{ $errors->has('email') ? ' is-invalid': ' ' }}" name="email"  autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group ">
                            <label for="0" >Message</label>
                             
                            <textarea name="message"  cols="30" rows="10" class="form-control  {{ $errors->has('messages') ? ' is-invalid': ' ' }}" autofocus>{{old('message')}}</textarea>
                                @if ($errors->has('message'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                        </div>
                        </div>
                        </div>
                 

@include('include.foot')