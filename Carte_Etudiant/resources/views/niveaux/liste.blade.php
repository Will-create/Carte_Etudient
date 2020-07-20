@include('include.head')
<br>
<br>
<br>
<section id="main-content">
 <h2><strong> LISTE DES NIVEAU </strong> </strong></h2>
 <br>
    <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead class="entete">
        <th>N°</th>
        <th>NIVEAU</th>
        </thead>
        <tbody>
        <?php $i=0; ?>
        @foreach($niveaux as $niveau)
        <?php $i++; ?>
        <tr>
        <td>{{$i}}</td>
        <td>{{$niveau->niveau}</td>

        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    
    <a class="btn btn-primary" href="{{ route('niveau.create') }}">Ajouter une filiere</a>

@include('include.foot')
