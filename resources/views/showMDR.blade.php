@extends('template')

@section('contenu')
    <div class="col-sm-offset-3 col-sm-5">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Fiche du Client</div>
			<div class="panel-body">
        <p>N°: {{ $modeReglement->Id_Mdr }}</p>
        <p>Description du mode de règlement : {{ $modeReglement->Des_Mdr }}</p>


  </div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@endsection
