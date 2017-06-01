@extends('template')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Modification d'un collaborateur</div>
			<div class="panel-body">
				<div class="col-sm-12">
					{!! Form::model($collaborateur, ['route' => ['collaborateur.update', $collaborateur->Id_TCa], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
					<div class="form-group {!! $errors->has('Collaborateur_TCa') ? 'has-error' : '' !!}">
					  	{!! Form::text('Collaborateur_TCa', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
					  	{!! $errors->first('Collaborateur_TCa', '<small class="help-block">:message</small>') !!}
					</div>
          <div class="form-group {!! $errors->has('Date_In_TCa') ? 'has-error' : '' !!}">
					  	{!! Form::date('Date_In_TCa', null, ['class' => 'form-control', 'placeholder' => 'Date entrée']) !!}
					  	<!-- {!! $errors->first('Date_In_TCa', '<small class="help-block">:message</small>') !!} -->
					</div>
          <div class="form-group {!! $errors->has('Date_Out_TCa') ? 'has-error' : '' !!}">
					  	{!! Form::date('Date_Out_TCa', null, ['class' => 'form-control', 'placeholder' => 'Date Sortie']) !!}
					  	{!! $errors->first('Date_Out_TCa', '<small class="help-block">:message</small>') !!}
					</div>
          <div class="form-group {!! $errors->has('Acces_TCa') ? 'has-error' : '' !!}">
					  	{!! Form::text('Acces_TCa', null, ['class' => 'form-control', 'placeholder' => 'Accès']) !!}
					  	<!-- {!! $errors->first('Acces_TCa', '<small class="help-block">:message</small>') !!} -->
					</div>
          <div class="form-group {!! $errors->has('Responsable_TCa') ? 'has-error' : '' !!}">
					  	<!-- {!! Form::text('Responsable_TCa', null, ['class' => 'form-control', 'placeholder' => 'Responsable']) !!} -->
					  	<!-- {!! $errors->first('Responsable_TCa', '<small class="help-block">:message</small>') !!} -->
              <select class="form-control" name="Responsable_TCa">
								<option selected="selected"  hidden="hidden" value>Responsable</option>
								<option value="Cédric Dupuis">Cédric Dupuis</option>
								<option value="Bastien Jambon">Bastien Jambon</option>
							</select>

					</div>

					<div class="form-group">
						<div class="checkbox">
							<label>
								{!! Form::checkbox('TR_TCa', 1, null) !!}Ticket Restaurant
							</label>
						</div>
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
