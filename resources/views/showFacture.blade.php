@extends('template')

@section('contenu')
    <div class="col-sm-offset-2 col-sm-8">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Fiche de la Facture</div>
			<div class="panel-body">
        <p><strong>N°Facture :</strong> {{ $facture->NFacture_TFCl }} <strong>Nom du client :</strong>  {{ $facture->Ste_TCl }}</p>

        <p><strong>Contact Client : </strong> {{ $facture->Contact_TCo }} <strong>Etablie par :</strong>  {{ $facture->Responsable_TCa }}</p>

        <p><strong>Mode de reglement : </strong> {{ $facture->Mdr_TCl }}
          <strong>Avoir : </strong> {{ $facture->Avoir_TFCl }}</p>
        <p><strong>Adresse de Facturation :</strong>  {{ $facture->Adr_Fact_TCl }}</p>
        <p><strong>Date de la Facturation :</strong>  {{ date('d-m-Y', strtotime($facture->Date_TFCl)) }}
          <strong>Date d'Echéance  :</strong>  {{ date('d-m-Y', strtotime($facture->Ech_TFCl)) }}
          <strong>Date de Reglement : </strong> {{ date('d-m-Y', strtotime($facture->Paid_TFCl)) }}</p>
        <p><strong>Note :</strong>  {{ $facture->BlNote_TFCl }}</p>
        <p><strong>Total Main d'Oeuvre HT :</strong>  {{round($facture->Total_MO_HT_TFCl,2) }} €
          <strong>Total Vente HT : </strong> {{round($facture->Total_Vente_HT_TFCl,2) }} €
          <strong>Total Trajet HT :</strong>  {{round($facture->Total_Trajet_HT_TFCl,2) }} €</p>
        <p><strong>Total Deplacement HT :</strong>  {{round($facture->Total_Depl_HT_TFCl,2) }} €</p>
        <p><strong>Total HT : </strong> {{round($facture->Total_HT_TFCl,2) }} €
            <strong>Total TVA :</strong>  {{round($facture->Total_TVA_TFCl,2) }} €
            <strong>Total TTC :</strong>  {{round($facture->Total_TTC_TFCl,2) }} €</p>
  </div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a><hr>
	</div>

@endsection
