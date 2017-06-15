@extends('template')

@section('contenu')
    <div class="col-sm-offset-3 col-sm-5">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Fiche de la Facture</div>
			<div class="panel-body">
        <p>N° de Client: {{ $client->Id_TCl }} Nom du client : {{ $client->Ste_TCl }}</p>
        <p>Année de création : {{ $client->An_TCl }}</p>
        <p>Contact Achat : {{ $client->Contact_TCl }}</p>
        <p>Adresse de Facturation : {{ $client->Adr_Fact_TCl }}</p>
        <p>Téléphone : {{ $client->Tel_TCl }} Fax : {{ $client->Fax_TCl }}</p>
        <p>Site Web : {{ $client->Web_TCl }} Email : {{ $client->EMail_TCl }} </p>
        <p>Mode de reglement : {{ $client->Mdr_TCl }}</p>
        <p>Information : {{ $client->Information_TCl }}</p>
        <p>Siret : {{ $client->Siret_TCl }}</p>
        <p>Siren : {{ $client->Siren_TCl }}</p>
        <p>TPE : {{ $client->TPE_TCl }}</p>
        <p>PME-PMI : {{ $client->PME_PMI_TCl }}</p>
        <p>ETI : {{ $client->ETI_TCl }}</p>
        <p>Grands Comptes : {{ $client->Grands_Comptes_TCl }}</p>
        <p>Particulier : {{ $client->Particulier_TCl }}</p>
        <p>Collectivité : {{ $client->Collec_TCl }}</p>
        <p>Tarif M.O. Electricté : {{ $client->Tarif_Elec }} €</p>
        <p>Tarif M.O. Diagnostic : {{ $client->Tarif_Tech }} €</p>
        <p>Tarif M.O. Automatisme: {{ $client->Tarif_Autom }} €</p>
        <p>Tarif M.O. Etude : {{ $client->Tarif_Etude }} €</p>

  </div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@endsection
