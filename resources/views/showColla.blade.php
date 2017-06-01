@extends('template')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Fiche du collaborateur</div>
			<div class="panel-body">
				<p>Nom : {{ $collaborateur->Collaborateur_TCa }}</p>
        <p>Date d'Entrée : {{ $collaborateur->Date_In_TCa }}</p>
        <p>Date de Départ : {{ $collaborateur->Date_Out_TCa }}</p>
        <p>Accès : {{ $collaborateur->Acces_TCa }}</p>
        <p>Responsable : {{ $collaborateur->Responsable_TCa }}</p>
        <!-- <p>Ticket Restaurant : {{ $collaborateur->TR_TCa }}</p> -->
				@if($collaborateur->TR_TCa == 1)
					Ticket Restaurant
				@endif
			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@endsection
