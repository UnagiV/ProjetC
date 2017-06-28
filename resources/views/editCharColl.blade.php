@extends('template')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Modification de la Charge Collaborateur</div>
			<div class="panel-body">
				<div class="col-sm-12">
					{!! Form::model($chargeColla, ['route' => ['chargecolla.update',
          $chargeColla->Id_TCc], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
					<div class="form-group">Nom du Collaborateur
					  	{!! Form::text('Collaborateur_TCa', null, ['class' => 'form-control', 'placeholder' => 'Nom du Collaborateur']) !!}
          </div>

          <div class="form-group">Date du versement
					  	{!! Form::text('Date_TCc', null, ['class' => 'form-control', 'placeholder' => 'Date du versement']) !!}
          </div>

          <div class="form-group">Montant de la Prime
					  	{!! Form::text('Prime_TCc', null, ['class' => 'form-control', 'placeholder' => 'Montant de la Prime']) !!}
          </div>
          <div class="form-group">Montant de la Prime Exceptionnelle
					  	{!! Form::text('PE_TCc', null, ['class' => 'form-control', 'placeholder' => 'Montant de la Prime Exceptionnelle']) !!}
          </div>
          <div class="form-group">Montant Total de la Cotisation
					  	{!! Form::text('Total_Cot_TCc', null, ['class' => 'form-control', 'placeholder' => 'Montant Total de la Cotisation']) !!}
          </div>
          <div class="form-group">Total_Ret_TCc
					  	{!! Form::text('Total_Ret_TCc', null, ['class' => 'form-control', 'placeholder' => 'Total_Ret_TCc']) !!}
          </div>
          <div class="form-group">Montant Total du Salaire
					  	{!! Form::text('Total_Salaire_TCc', null, ['class' => 'form-control', 'placeholder' => 'Montant Total du Salaire']) !!}
          </div>


						{!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@endsection
