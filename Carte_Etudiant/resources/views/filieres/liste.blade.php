@include('include.head')
<br>
<br>
<br>
<section id="main-content">
 <h2><strong> LISTE DES FILIERES </strong> </strong></h2>
 <br>
    <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead class="entete">
        <th>N°</th>
        <th>NOM</th>
        </thead>
        <tbody>
        <?php $i=0; ?>
        @foreach($filieres as $filiere)
        <?php $i++; ?>
        <tr>
        <td>{{$i}}</td>
        <td>{{$filiere->nom}}</td>

        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    
    <a class="btn btn-primary" href="{{ route('filieres.create') }}">Ajouter une filiere</a>

@include('include.foot')
