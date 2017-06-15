@extends('template')

@section('contenu')
    <br>
    <div class="col-sm-offset-0 col-sm-13">
    	@if(session()->has('ok'))
			<div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
		@endif
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Liste des contcts</h3>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>Id Client</th>
						<th>Client</th>
            <th>Entité</th>
            <th>Adresse de livraison</th>
						<th>Contact Client</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Indicatif</th>
            <th>Tel. Portable</th>
            <th>N° de Poste</th>
            <th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($T_Contact as $contact)
						<tr>
							<td>{!! $contact->Id_TCo !!}</td>
						  <td class="text-primary"><strong>{!! $contact->Ste_TCl !!}</strong></td>
              <td class="text-primary"><strong>{!! $contact->Entite_TCo !!}</strong></td>
              <td class="text-primary"><strong>{!! $contact->Adr_Liv_TCl !!}</strong></td>
              <td class="text-primary"><strong>{!! $contact->Contact_TCo !!}</strong></td>
              <td class="text-primary"><strong>{!! $contact->EMail_TCo !!}</strong></td>
              <td class="text-primary"><strong>{!! $contact->Tel_TCo !!}</strong></td>
              <td class="text-primary"><strong>{!! $contact->Indicatif_TCo !!}</strong></td>
              <td class="text-primary"><strong>{!! $contact->Port_TCo !!}</strong></td>
              <td class="text-primary"><strong>{!! $contact->N_Poste !!}</strong></td>


							<td>{!! link_to_route('contact.show', 'Voir', [$contact->Id_TCo], ['class' => 'btn btn-success btn-block']) !!}</td>
							<td>{!! link_to_route('contact.edit', 'Modifier', [$contact->Id_TCo], ['class' => 'btn btn-warning btn-block']) !!}</td>
							<td>
								{!! Form::open(['method' => 'DELETE', 'route' => ['contact.destroy', $contact->Id_TCo]]) !!}
									{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer ce contact ?\')']) !!}
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
	  			</tbody>
			</table>

		</div>
		{!! link_to_route('contact.create', 'Ajouter un contact', [], ['class' => 'btn btn-info pull-right']) !!}
		{!! $links !!}
	</div>
@endsection
