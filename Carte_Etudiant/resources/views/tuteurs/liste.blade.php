@include('include.head')
<br>
<br>
<br>
<section id="main-content">
 <h2><strong> LISTE DES Tuteurs </strong> </strong></h2>
 <br>
    <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead class="entete">
        <th>N°</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Contact</th>
        </thead>
        <tbody>
        <?php $i=0; ?>
        @foreach($tuteurs as $tuteur)
        <?php $i++; ?>
        <tr>
        <td>{{$i}}</td>
        <td>{{$tuteur->nom}</td>
        <td>{{$tuteur->prenom}</td>
        <td>{{$tuteur->contact}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    
    <a class="btn btn-primary" href="{{ route('tuteur.create') }}">Ajouter une filiere</a>

@include('include.foot')
