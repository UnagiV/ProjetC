@extends('template')

@section('contenu')
    <br>
    <div class="col-sm-offset-1 col-sm-10">
    	@if(session()->has('ok'))
			<div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
		@endif
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Liste des differents mode de règlement</h3>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>Id </th>
            <th>Mode de Règlement</th>


						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($T_Mode_Reglement as $modeReglement)
						<tr>
							<td>{!! $modeReglement->Id_Mdr!!}</td>
						  <td class="text-primary"><strong>{!! $modeReglement->Des_Mdr!!}</strong></td>

							<td>{!! link_to_route('modereglement.show', 'Voir', [$modeReglement->Id_Mdr], ['class' => 'btn btn-success btn-block']) !!}</td>
							<td>{!! link_to_route('modereglement.edit', 'Modifier', [$modeReglement->Id_Mdr], ['class' => 'btn btn-warning btn-block']) !!}</td>
							<td>
								{!! Form::open(['method' => 'DELETE', 'route' => ['modereglement.destroy', $modeReglement->Id_Mdr]]) !!}
									{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer ce Mode de Règlement ?\')']) !!}
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
	  			</tbody>
			</table>

		</div>
		{!! link_to_route('modereglement.create', 'Créer un nouveau Mode de Règlement', [], ['class' => 'btn btn-info pull-right']) !!}
		{!! $links !!}
	</div>
@endsection
