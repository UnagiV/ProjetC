@extends('template')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Création d'un Mode de Règlement</div>
			<div class="panel-body">
				<div class="col-sm-12">
					{!! Form::open(['route' => 'modereglement.store', 'class' => 'form-horizontal panel']) !!}
					<div class="form-group {!! $errors->has('Des_Mdr') ? 'has-error' : '' !!}">Mode de Règlement
					  	{!! Form::text('Des_Mdr', null, ['class' => 'form-control', 'placeholder' => 'Mode de Règlement']) !!}
					  	{!! $errors->first('Des_Mdr', '<small class="help-block">:message</small>') !!}
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
