@extends('template')

@section('contenu')
    <br>
    <div class="col-sm-offset-1 col-sm-10">
    	@if(session()->has('ok'))
			<div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
		@endif
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Liste des Factures</h3>
			</div>
			<table class="table">
				<thead>
					<tr>
						<!-- <th>Id Facture</th> -->
            <th>N°Facture</th>
            <th>Nom du client</th>
						<!-- <th>N°Client</th> -->
            <th>Contact Client</th>
						<!-- <th>Etablie par</th> -->

						<!-- <th>Mode de reglement</th> -->
            <!-- <th>Adresse de Facturation</th> -->
            <th>Date de la Facturation</th>
						<th>Date d'Echéance</th>
            <th>Date de Reglement</th>
						<!-- <th>Avoir</th> -->
            <!-- <th>Note</th> -->
						<!-- <th>Total Main d'Oeuvre HT</th> -->
            <!-- <th>Total Vente HT</th> -->
            <!-- <th>Total Trajet HT</th> -->
						<!-- <th>Total Deplacement HT</th> -->
            <th>Total HT</th>
						<th>Total TVA</th>
            <th>Total TTC</th>
					  <th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($T_Factures as $facture)
						<tr>
							<!-- <td>{!! $facture->Id_TFCl !!}</td> -->
              <td class="text-primary"><strong>{!! $facture->NFacture_TFCl !!}</strong></td>
							<td class="text-primary"><strong>{!! $facture->Ste_TCl !!}</strong></td>
              <!-- <td class="text-primary"><strong>{!! $facture->NClient !!}</strong></td> -->
              <td class="text-primary"><strong>{!! $facture->Contact_TCo !!}</strong></td>
              <!-- <td class="text-primary"><strong>{!! $facture->Responsable_TCa !!}</strong></td> -->

              <!-- <td class="text-primary"><strong>{!! $facture->Mdr_TCl !!}</strong></td> -->
              <!-- <td class="text-primary"><strong>{!! $facture->Adr_Fact_TCl !!}</strong></td> -->
              <td class="text-primary"><strong>{!! date('d-m-Y', strtotime($facture->Date_TFCl)) !!}</strong></td>
              <td class="text-primary"><strong>{!! date('d-m-Y', strtotime($facture->Ech_TFCl)) !!}</strong></td>
              <td class="text-primary"><strong>{!! date('d-m-Y', strtotime($facture->Paid_TFCl)) !!}</strong></td>
              <!-- <td class="text-primary"><strong>{!! $facture->Avoir_TFCl !!}</strong></td> -->
              <!-- <td class="text-primary"><strong>{!! $facture->BlNote_TFCl !!}</strong></td> -->
              <!-- <td class="text-primary"><strong>{!! $facture->Total_MO_HT_TFCl !!}</strong></td> -->
              <!-- <td class="text-primary"><strong>{!! $facture->Total_Vente_HT_TFCl !!}</strong></td> -->
              <!-- <td class="text-primary"><strong>{!! $facture->Total_Trajet_HT_TFCl !!}</strong></td> -->
              <!-- <td class="text-primary"><strong>{!! $facture->Total_Depl_HT_TFCl !!}</strong></td> -->
              <td class="text-primary"><strong>{!! round($facture->Total_HT_TFCl,2 ) !!}</strong></td>
              <td class="text-primary"><strong>{!! round($facture->Total_TVA_TFCl,2) !!}</strong></td>
              <td class="text-primary"><strong>{!! round($facture->Total_TTC_TFCl,2) !!}</strong></td>

							<td>{!! link_to_route('facture.show', 'Voir', [$facture->Id_TFCl], ['class' => 'btn btn-success btn-block']) !!}</td>
							<td>{!! link_to_route('facture.edit', 'Modifier', [$facture->Id_TFCl], ['class' => 'btn btn-warning btn-block']) !!}</td>
							<td>
								{!! Form::open(['method' => 'DELETE', 'route' => ['facture.destroy', $facture->Id_TFCl]]) !!}
									{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cette facture ?\')']) !!}
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
	  			</tbody>
			</table>
		</div>
		{!! link_to_route('facture.create', 'Ajouter une facture', [], ['class' => 'btn btn-info pull-right']) !!}
		{!! $links !!}
	</div>
@endsection
