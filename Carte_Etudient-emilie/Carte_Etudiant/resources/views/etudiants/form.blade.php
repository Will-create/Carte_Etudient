@include('include.head')

<section id="main-content">

<div class="container">
<div class="row">


    <div class="col-lg-12 col-md-9"  >
        <h1 class="title">Eregistrer</h1>
    </div>
</div>
<div class="row"> 
<div class="col-md-3 "></div>
<form class="form-horizontal" role="form">
        <div class='row'>
            <div class="col-lg-12">
              
            </div>
        </div>
                <div class="form-group">
                    <label for="nom" class="col-sm-2 control-label">Nom :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="prenom" class="col-sm-2 control-label">Prenom :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="prenom" id="prenom" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="filiere" class="col-sm-2 control-label">Filière :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="filiere" id="filiere" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="niveau d'etude" class="col-sm-2 control-label">Niveau d'etude :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="niveau" id="niveau" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="matricule" class="col-sm-2 control-label">Matricule :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="matricule" id="matricule" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="annee" class="col-sm-2 control-label">Année academique :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="annee" id="" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mail" class="col-sm-2 control-label">Email :</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tel" class="col-sm-2 control-label">T&eacute;l&eacute;phone :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="tel" id="tel" required>
                    </div>
                </div>      
                <div class="form-group">
                    <label for="ville" class="col-sm-2 control-label">Ville</label>
                    <div class="col-sm-8">
                        <input type="text" name="ville" class="form-control" id="ville">
                    </div>
                </div>
                <div class="col">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>

                </div>            
        </div>
    </div>
</form>
</div>
</div>
@include('include.foot')