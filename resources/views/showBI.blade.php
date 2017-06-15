@extends('template')

@section('contenu')
    <div class="col-sm-offset-3 col-sm-5">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Fiche du bon d'intervention</div>
			<div class="panel-body">
        <p><strong>N° de bon d'intervention :</strong> {{ $bonIntervention->Id_TTa }}</p>
        <p><strong>Société :</strong> {{ $bonIntervention->Ste_TCl }}</p>
        <p><strong>Date de début :</strong> {{ $bonIntervention->Date_Debut_TTa }}</p>
        <p><strong>Date de fin :</strong> {{ $bonIntervention->Date_Fin_TTa }}</p>
        <p><strong>Responsable :</strong> {{ $bonIntervention->Responsable_TCa }}</p>
        <p><strong>Collaborateur :</strong> {{ $bonIntervention->Collaborateur_TCa }} </p>
        <p><strong>Type de travaux :</strong> {{ $bonIntervention->Travaux_TTa }}</p>

  </div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@endsection
