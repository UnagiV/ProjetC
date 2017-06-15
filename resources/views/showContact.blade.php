@extends('template')

@section('contenu')
    <div class="col-sm-offset-3 col-sm-5">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Fiche du Contact/div>
			<div class="panel-body">
        <p>N° de Client: {{ $client->Id_TCl }} Nom du client : {{ $client->Ste_TCl }}</p>
        <p>Année de création : {{ $client->An_TCl }}</p>
        <p>@if($client->Contact_TCl == !NULL)Contact Achat : {{ $client->Contact_TCl }}@endif </p>
        <p>Adresse de Facturation : {{ $client->Adr_Fact_TCl }}</p>
        <p>@if($client->Tel_TCl == !NULL)Téléphone : {{ $client->Tel_TCl }}@endif
          @if($client->Fax_TCl == !NULL)Fax : {{ $client->Fax_TCl }}@endif</p>
        <p>@if($client->Web_TCl == !NULL)Site Web : {{ $client->Web_TCl }}@endif
          @if($client->EMail_TCl == !NULL)Email : {{ $client->EMail_TCl }}@endif </p>
        <p>@if($client->Mdr_TCl == !NULL)Mode de reglement : {{ $client->Mdr_TCl }}@endif</p>
        <p>@if($client->Information_TCl == !NULL)Information : {{ $client->Information_TCl }}@endif</p>
        <p>@if($client->Siret_TCl == !NULL)Siret : {{ $client->Siret_TCl }}@endif</p>
        <p>@if($client->Siren_TCl == !NULL)Siren : {{ $client->Siren_TCl }}@endif</p>
        <p>Type d'Entreprise
          @if($client->TPE_TCl == 1)
					TPE
				@endif
        @if($client->PME_PMI_TCl == 1)
					PME-PMI
				@endif
        @if($client->ETI_TCl == 1)
					ETI
				@endif
        @if($client->Grands_Comptes_TCl == 1)
					Grands Comptes
				@endif
        @if($client->Particulier_TCl == 1)
					Particulier
				@endif
        @if($client->Collec_TCl == 1)
					Collectivité
				@endif</p>
        <!-- <p>TPE : {{ $client->TPE_TCl }}</p> -->
        <!-- <p>PME-PMI : {{ $client->PME_PMI_TCl }}</p> -->
        <!-- <p>ETI : {{ $client->ETI_TCl }}</p> -->
        <!-- <p>Grands Comptes : {{ $client->Grands_Comptes_TCl }}</p> -->
        <!-- <p>Particulier : {{ $client->Particulier_TCl }}</p> -->
        <!-- <p>Collectivité : {{ $client->Collec_TCl }}</p> -->
        <p>Tarif M.O. Electricté : {{ $client->Tarif_Elec }} €</p>
        <p>Tarif M.O. Diagnostic : {{ $client->Tarif_Tech }} €</p>
        <p>Tarif M.O. Automatisme : {{ $client->Tarif_Autom }} €</p>
        <p>Tarif M.O. Etude : {{ $client->Tarif_Etude }} €</p>

        <?php $contactClient = DB::table('t_contact')->where('Ste_TCl', $client->Ste_TCl)->get() ?>
        @if($contactClient->count() > 0)
        <td class="text-primary"><strong>
          @for ($i = 0; $i < $contactClient->count(); $i++)
          <div class="" style="border:2px solid #CCC">
            <p>Contact : {!! $contactClient[$i]->Contact_TCo !!}</p>
            <p>@if($contactClient[$i]->Entite_TCo  == !NULL)Entité : {!! $contactClient[$i]->Entite_TCo !!}@endif</p>
            <p>@if($contactClient[$i]->Tel_TCo == !NULL)Téléphone Contact : {!! $contactClient[$i]->Tel_TCo !!}@endif</p>
            <p>@if($contactClient[$i]->N_Poste == !NULL)N° de poste : {!! $contactClient[$i]->N_Poste !!}@endif</p>
            <p>@if($contactClient[$i]->Indicatif_TCo == !NULL)N° Indicatif : {!! $contactClient[$i]->Indicatif_TCo !!}@endif</p>
            <p>@if($contactClient[$i]->Port_TCo == !NULL)Portable Contact : {!! $contactClient[$i]->Port_TCo !!}@endif</p>
            <p>@if($contactClient[$i]->Adr_Liv_TCl == !NULL)Adresse de Livraison : {!! $contactClient[$i]->Adr_Liv_TCl !!}@endif</p>


          </div>


          @endfor
        </strong></td>
        @else
        <td class="text-primary"><strong>"Pas de contact"</strong></td>
        @endif

  </div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@endsection
