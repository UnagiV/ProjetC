@extends('template')

@section('contenu')
    <br>
    <div class="col-sm-offset-1 col-sm-10">
    	@if(session()->has('ok'))
			<div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
		@endif
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Liste des bons d'interventions</h3>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>Id</th>
            <th>Société</th>
						<th>Date de debut</th>
            <th>Date de fin</th>
						<th>Responsable</th>
            <th>Collaborateur</th>
						<th>Type de travaux</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>

					@foreach ($T_Taches as $tache)
						<tr>
							<td>{!! $tache->Id_TTa !!}</td>
							<td class="text-primary"><strong>{!! $tache->Ste_TCl !!}</strong></td>
              <td class="text-primary"><strong>{!! date('d-m-Y', strtotime($tache->Date_Debut_TTa)) !!}</strong></td>
              <td class="text-primary">
                <strong>
                  {{  date('d-m-Y', strtotime($tache->Date_Fin_TTa)) }}
                </strong>
              </td>
              <td class="text-primary"><strong>{!! $tache->Responsable_TCa !!}</strong></td>
              <td class="text-primary"><strong>{!! $tache->Collaborateur_TCa !!}</strong></td>
              <td class="text-primary"><strong>{!! $tache->Travaux_TTa !!}</strong></td>
							<td>{!! link_to_route('bonintervention.show', 'Voir', [$tache->Id_TTa], ['class' => 'btn btn-success btn-block']) !!}</td>
							<td>{!! link_to_route('bonintervention.edit', 'Modifier', [$tache->Id_TTa], ['class' => 'btn btn-warning btn-block']) !!}</td>
							<td>
								{!! Form::open(['method' => 'DELETE', 'route' => ['bonintervention.destroy', $tache->Id_TTa]]) !!}
									{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer ce bon ?\')']) !!}
								{!! Form::close() !!}
							</td>

              @if($tache->boninterventionFournitures->count() > 0)
              <td>
                @for ($i = 0; $i < $tache->boninterventionFournitures->count(); $i++)
                {{ $tache->boninterventionFournitures[$i]->Class_TTaDFo}}
                @endfor
              </td>
              @endif



						</tr>
					@endforeach

	  			</tbody>
			</table>
		</div>
		{!! link_to_route('bonintervention.create', 'Créer un bon d intervention', [], ['class' => 'btn btn-info pull-right']) !!}
		{!! $links !!}
	</div>
@endsection
