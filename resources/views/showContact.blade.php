@extends('template')

@section('contenu')
    <div class="col-sm-offset-3 col-sm-5">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Fiche du Contact</div>
			<div class="panel-body">
        <p>N° de Cont: {{ $contact->Id_TCo }} Contact Achat : {{ $contact->Contact_TCo }}</p>
        <p>Nom du client : {{ $contact->Ste_TCl }}</p>
        <p>@if($contact->Entite_TCo == !NULL)Entité : {{ $contact->Entite_TCo }}@endif</p>
        <p>@if($contact->Adr_Liv_TCl == !NULL)Adresse de livraison< : {{ $contact->Adr_Liv_TCl }}@endif</p>
        <p>@if($contact->Tel_TCo == !NULL)Téléphone du Contact : {{ $contact->Tel_TCo }}@endif</p>
        <p>@if($contact->EMail_TCo == !NULL)Email du Contact : {{ $contact->EMail_TCo }}@endif</p>
        <p>@if($contact->Indicatif_TCo == !NULL)Indicatif : {{ $contact->Indicatif_TCo }}@endif</p>
        <p>@if($contact->Port_TCo == !NULL)Portable du Contact : {{ $contact->Port_TCo }}@endif</p>
        <p>@if($contact->N_Poste == !NULL)N° de Poste : {{ $contact->N_Poste }}@endif</p>


  </div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@endsection
