@include('include.head')
<br>
<br>
<br>
<section id="main-content">
 <h2><strong> LISTE DES ETUDIANTS </strong> </strong></h2>
 <br>
    <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead class="entete">
        <th>NOM</th>
        <th>PRENOM</th>
        <th>FILIERE</th>
        <th>NIVEAU D'ETUDE</th>
        <th>N° MATRICULE</th>
        <th>ANNEE ACCADEMIQUE</th>
        <th>DETAIL</th>
        <th>MODIFIER</th>
        <th>SUPRIMER</th>
        </thead>
        <tbody>
        <?php $i=0; ?>
        @foreach($etudiants as $etudiant)
        <?php $i++; ?>
        <tr>
        <td>{{$i}}</td>
        <td>{{$etudiant->nom}}</td>
        <td>{{$etudiant->prenom}}</td>
        <td>{{$etudiant->filiere}}</td>
        <td>{{$etudiant->niveau}}</td>
        <td>{{$etudiant->matricule}}</td>
        <td>{{$etudiant->promotion}}</td>
        <td><img src="{{asset('storage').'/'.$etudiant->photo}}" style="width:50px;height:50px;" class="bf5 border rounded-circle"></td>
        <td><a href="{{route('etudiant.details',['produit'=>$produit->titre,'id'=>$produit->id])}}">Détail</a></td>
        <td><a href="{{route('etudiant.modifier',['id'=>$produit->id])}}">Modifier</a></td>
        <td><a href="{{route('etudiant.supprimer', ['id'=>$produit->id])}}">Supprimer</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    
    <a class="btn btn-primary" href="{{ route('etudiant.form') }}">Ajouter un etudiant</a>

@include('include.foot')
