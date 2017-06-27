@extends('template')

@section('contenu')
    <br>
    <div class="col-sm-offset-1 col-sm-10">
    	@if(session()->has('ok'))
			<div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
		@endif
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Liste des clients</h3>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>Id Client</th>
            <th>Année de Création</th>
						<th>Client</th>
            <th>Contact Achat</th>
            <th>Adresse de facturation</th>
						<th>Téléphone</th>
						<!-- <th>Fax</th> -->
            <!-- <th>Email</th> -->
            <!-- <th>Site Web</th> -->
            <!-- <th>Mode de Réglement</th> -->
            <!-- <th>Information</th> -->
            <!-- <th>Siret</th> -->
            <!-- <th>Siren</th> -->
            <!-- <th>TPE </th> -->
            <!-- <th>PME-PMI</th> -->
            <!-- <th>ETI</th> -->
            <!-- <th>Grands Comptes</th> -->
						<!-- <th>Particulier</th> -->
            <!-- <th>Collectivité</th> -->
						<!-- <th>Tarif M.O. Electricté</th> -->
            <!-- <th>Tarif M.O. Diagnostic</th> -->
						<!-- <th>Tarif M.O. Automatisme</th> -->
            <!-- <th>Tarif M.O. Etude</th> -->

						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($T_Clients as $client)
						<tr>
							<td>{!! $client->Id_TCl !!}</td>
						  <td class="text-primary"><strong>{!! $client->An_TCl !!}</strong></td>
              <td class="text-primary"><strong>{!! $client->Ste_TCl !!}</strong></td>
              <td class="text-primary"><strong>{!! $client->Contact_TCl !!}</strong></td>
              <td class="text-primary"><strong>{!! $client->Adr_Fact_TCl !!}</strong></td>
              <td class="text-primary"><strong>{!! $client->Tel_TCl !!}</strong></td>

              

              <!-- <td class="text-primary"><strong>{!! $client->Fax_TCl !!}</strong></td> -->
              <!-- <td class="text-primary"><strong>{!! $client->EMail_TCl !!}</strong></td> -->
              <!-- <td class="text-primary"><strong>{!! $client->Web_TCl !!}</strong></td> -->
              <!-- <td class="text-primary"><strong>{!! $client->Mdr_TCl !!}</strong></td> -->
              <!-- <td class="text-primary"><strong>{!! $client->Information_TCl !!}</strong></td> -->
              <!-- <td class="text-primary"><strong>{!! $client->Siret_TCl !!}</strong></td> -->
              <!-- <td class="text-primary"><strong>{!! $client->Siren_TCl !!}</strong></td> -->
              <!-- <td class="text-primary"><strong>{!! $client->TPE_TCl !!}</strong></td> -->
              <!-- <td class="text-primary"><strong>{!! $client->PME_PMI_TCl !!}</strong></td> -->
              <!-- <td class="text-primary"><strong>{!! $client->ETI_TCl !!}</strong></td> -->
              <!-- <td class="text-primary"><strong>{!! $client->Grands_Comptes_TCl !!}</strong></td> -->
              <!-- <td class="text-primary"><strong>{!! $client->Particulier_TCl !!}</strong></td> -->
              <!-- <td class="text-primary"><strong>{!! $client->Collec_TCl !!}</strong></td> -->
              <!-- <td class="text-primary"><strong>{!! $client->Tarif_Elec !!}</strong></td> -->
              <!-- <td class="text-primary"><strong>{!! $client->Tarif_Tech !!}</strong></td> -->
              <!-- <td class="text-primary"><strong>{!! $client->Tarif_Autom !!}</strong></td> -->
              <!-- <td class="text-primary"><strong>{!! $client->Tarif_Etude !!}</strong></td> -->

							<td>{!! link_to_route('client.show', 'Voir', [$client->Id_TCl], ['class' => 'btn btn-success btn-block']) !!}</td>
							<td>{!! link_to_route('client.edit', 'Modifier', [$client->Id_TCl], ['class' => 'btn btn-warning btn-block']) !!}</td>
							<td>
								{!! Form::open(['method' => 'DELETE', 'route' => ['client.destroy', $client->Id_TCl]]) !!}
									{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer ce client ?\')']) !!}
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
	  			</tbody>
			</table>

		</div>
		{!! link_to_route('client.create', 'Ajouter un client', [], ['class' => 'btn btn-info pull-right']) !!}
		{!! $links !!}
	</div>
@endsection
