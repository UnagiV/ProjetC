@extends('template')

@section('contenu')
    <div class="col-sm-offset-3 col-sm-5">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Fiche de la Facture</div>
			<div class="panel-body">
        <p>N°Facture : {{ $facture->NFacture_TFCl }} Nom du client : {{ $facture->Ste_TCl }}</p>
        <!-- <p>Nom du client : {{ $facture->Ste_TCl }}</p> -->
        <p>Contact Client : {{ $facture->Contact_TCo }}</p>
        <p>Etablie par : {{ $facture->Responsable_TCa }}</p>
        <p>Mode de reglement : {{ $facture->Mdr_TCl }}</p>
        <p>Adresse de Facturation : {{ $facture->Adr_Fact_TCl }}</p>
        <p>Date de la Facturation : {{ date('d-m-Y', strtotime($facture->Date_TFCl)) }}</p>
        <p>Date d'Echéance  : {{ date('d-m-Y', strtotime($facture->Ech_TFCl)) }}</p>
        <p>Date de Reglement : {{ date('d-m-Y', strtotime($facture->Paid_TFCl)) }}</p>
        <p>Avoir : {{ $facture->Avoir_TFCl }}</p>
        <p>Note : {{ $facture->BlNote_TFCl }}</p>
        <p>Total Main d'Oeuvre HT : {{round($facture->Total_MO_HT_TFCl,2) }} €</p>
        <p>Total Vente HT : {{round($facture->Total_Vente_HT_TFCl,2) }} €</p>
        <p>Total Trajet HT : {{round($facture->Total_Trajet_HT_TFCl,2) }} €</p>
        <p>Total Deplacement HT : {{round($facture->Total_Depl_HT_TFCl,2) }} €</p>
        <p>Total HT : {{round($facture->Total_HT_TFCl,2) }} €</p>
        <p>Total TVA : {{round($facture->Total_TVA_TFCl,2) }} €</p>
        <p>Total TTC : {{round($facture->Total_TTC_TFCl,2) }} €</p>
  </div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a><hr>
	</div>

@endsection
