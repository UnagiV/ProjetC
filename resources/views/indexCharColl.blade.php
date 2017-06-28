@extends('template')

@section('contenu')
    <br>
    <div class="col-sm-offset-1 col-sm-10">
    	@if(session()->has('ok'))
			<div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
		@endif
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Liste des differents des charges par Collaborateur</h3>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>Id </th>
            <th>Collaborateur</th>
            <th>Date du versement</th>
            <th>Montant de prime</th>
            <th>Montant de la prime exceptionel</th>
            <th>Total Cotisation</th>
            <!-- A voir sur Accès pour savoir à quoi ça correspond -->
            <th>Total_Ret_TCc</th>
            <th>Total Salaire</th>

						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($T_Collaborateurs_Charges as $chargeColla)
						<tr>
							<td>{!! $chargeColla->Id_TCc!!}</td>
						  <td class="text-primary"><strong>{!! $chargeColla->Collaborateur_TCa!!}</strong></td>
              <td class="text-primary"><strong>{!! $chargeColla->Date_TCc!!}</strong></td>
              <td class="text-primary"><strong>{!! $chargeColla->Prime_TCc!!}</strong></td>
              <td class="text-primary"><strong>{!! $chargeColla->PE_TCc!!}</strong></td>
              <td class="text-primary"><strong>{!! $chargeColla->Total_Cot_TCc!!}</strong></td>
              <td class="text-primary"><strong>{!! $chargeColla->Total_Ret_TCc!!}</strong></td>
              <td class="text-primary"><strong>{!! $chargeColla->Total_Salaire_TCc!!}</strong></td>




              <td>{!! link_to_route('chargecolla.show', 'Voir', [$chargeColla->Id_Mdr], ['class' => 'btn btn-success btn-block']) !!}</td>
							<td>{!! link_to_route('chargecolla.edit', 'Modifier', [$chargeColla->Id_Mdr], ['class' => 'btn btn-warning btn-block']) !!}</td>
							<td>
								{!! Form::open(['method' => 'DELETE', 'route' => ['chargecolla.destroy', $chargeColla->Id_Mdr]]) !!}
									{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cette charge ?\')']) !!}
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
	  			</tbody>
			</table>

		</div>
		{!! link_to_route('chargecolla.create', 'Créer un nouveau Mode de Règlement', [], ['class' => 'btn btn-info pull-right']) !!}
		{!! $links !!}
	</div>
@endsection
