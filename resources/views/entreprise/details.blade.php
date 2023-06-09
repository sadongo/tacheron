<h1>{{ $entreprise->nom }}</h1>


<div>{{ $entreprise->description }}</div>
<div>{{ $entreprise->responsable }}</div>

<p><a href="{{ route('entreprises.index') }}" title="Retourner aux entreprises" >Retourner aux entreprises</a></p>
