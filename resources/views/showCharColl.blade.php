@extends('template')

@section('contenu')
    <div class="col-sm-offset-3 col-sm-5">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Feuille de Charge Collaborateur</div>
			<div class="panel-body">
        <p>N°: {{ $chargeColla->Id_TCc }}</p>
        <p>Nom du Collaborateur : {{ $chargeColla->Collaborateur_TCa }}</p>
        <p>Date du versement : {{ $chargeColla->Date_TCc }}</p>
        <p>Montant de la Prime : {{ $chargeColla->Prime_TCc }}</p>
        <p>Montant de la Prime Exceptionnelle : {{ $chargeColla->PE_TCc }}</p>
        <p>Montant Total de la Cotisation : {{ $chargeColla->Total_Cot_TCc }}</p>
        <p>Total_Ret_TCc : {{ $chargeColla->Total_Ret_TCc }}</p>
        <p>Montant Total du Salaire : {{ $chargeColla->Total_Salaire_TCc }}</p>




  </div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@endsection
