@extends('template')

@section('contenu')
    <br>
    <div class="col-sm-offset-1 col-sm-10">
    	@if(session()->has('ok'))
			<div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
		@endif
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Liste des collaborateurs</h3>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>Id</th>
            <th>Nom</th>
						<th>Date d'Entrée</th>
            <th>Date de Départ</th>
						<th>Accès</th>
            <th>Responsable</th>
						<th>Ticket Restaurant</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($T_Collaborateurs as $collaborateur)
						<tr>
							<td>{!! $collaborateur->Id_TCa !!}</td>
							<td class="text-primary"><strong>{!! $collaborateur->Collaborateur_TCa !!}</strong></td>
              <td class="text-primary"><strong>{!! date('d-m-Y', strtotime($collaborateur->Date_In_TCa)) !!}</strong></td>
              <td class="text-primary">
                <strong>
                   <?php if ($collaborateur->Date_Out_TCa == !null): ?>
                  {{  date('d-m-Y', strtotime($collaborateur->Date_Out_TCa)) }}
                  <?php endif; ?>
                </strong>
              </td>
              <td class="text-primary"><strong>{!! $collaborateur->Acces_TCa !!}</strong></td>
              <td class="text-primary"><strong>{!! $collaborateur->Responsable_TCa !!}</strong></td>
              <td class="text-primary"><strong>{!! $collaborateur->TR_TCa !!}</strong></td>
							<td>{!! link_to_route('collaborateur.show', 'Voir', [$collaborateur->Id_TCa], ['class' => 'btn btn-success btn-block']) !!}</td>
							<td>{!! link_to_route('collaborateur.edit', 'Modifier', [$collaborateur->Id_TCa], ['class' => 'btn btn-warning btn-block']) !!}</td>
							<td>
								{!! Form::open(['method' => 'DELETE', 'route' => ['collaborateur.destroy', $collaborateur->Id_TCa]]) !!}
									{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach

	  			</tbody>
			</table>

		</div>
		{!! link_to_route('collaborateur.create', 'Ajouter un collaborateur', [], ['class' => 'btn btn-info pull-right']) !!}
		{!! $links !!}
	</div>
@endsection
