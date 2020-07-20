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
        <th>N°</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>FILIERE</th>
        <th>NIVEAU D'ETUDE</th>
        <th>N° MATRICULE</th>
        <th>PROMOTION</th>
        <th>PHOTO</th>
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
        <td>{{$etudiant->filiere->nom}}</td>
        <td>{{$etudiant->niveau->niveau}}</td>
        <td>{{$etudiant->matricule}}</td>
        <td>{{$etudiant->promotion->annee}}</td>
        <td><img src="{{asset('storage').'/'.$etudiant->photo}}" style="width:50px;height:50px;" class="bf5 border rounded-circle"></td>
        <td><a href="{{route('etudiants.show',['etudiant'=>$etudiant->id])}}">Détail</a></td>
        <td><a href="{{route('etudiants.edit',['etudiant'=>$etudiant->id])}}">Modifier</a></td>
        <td><a href="{{route('etudiants.destroy',['etudiant'=>$etudiant->id])}}">Supprimer</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    
    <a class="btn btn-primary" href="{{ route('etudiants.create') }}">Ajouter un etudiant</a>

@include('include.foot')
