@include('include.head')
<br>
<br>
<br>
<section id="main-content">
 <h2><strong> LISTE DES PROMOTIONS </strong> </strong></h2>
 <br>
    <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead class="entete">
        <th>N°</th>
        <th>ANNEE</th>
        </thead>
        <tbody>
        <?php $i=0; ?>
        @foreach($promotions as $promotion)
        <?php $i++; ?>
        <tr>
        <td>{{$i}}</td>
        <td>{{$promotion->annee}</td>

        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    
    <a class="btn btn-primary" href="{{ route('promotion.create') }}">Ajouter une filiere</a>

@include('include.foot')
