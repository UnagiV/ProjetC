@extends('template')

@section('contenu')
	<div class="col-sm-offset-4 col-sm-4">
		<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Création d'une facture</div>
			<div class="panel-body">
				<div class="col-sm-12">
					{!! Form::open(['route' => 'collaborateur.store', 'class' => 'form-horizontal panel']) !!}
					<div class="form-group {!! $errors->has('Collaborateur_TCa') ? 'has-error' : '' !!}">
						{!! Form::text('Collaborateur_TCa', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
						{!! $errors->first('Collaborateur_TCa', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('Date_In_TCa') ? 'has-error' : '' !!}">
					  	{!! Form::date('Date_In_TCa', null, ['class' => 'form-control', 'placeholder' => 'Date entrée']) !!}
							{!! $errors->first('Collaborateur_TCa', '<small class="help-block">:message</small>') !!}

					</div>
          <div class="form-group">
					  	{!! Form::date('Date_Out_TCa', null, ['class' => 'form-control', 'placeholder' => 'Date Sortie']) !!}

					</div>
          <div class="form-group">
					  	{!! Form::text('Acces_TCa', null, ['class' => 'form-control', 'placeholder' => 'Accès']) !!}

					</div>
          <!-- <div class="form-group"> -->
					  	<!-- {!! Form::text('Responsable_TCa', null, ['class' => 'form-control', 'placeholder' => 'Responsable']) !!} -->
					<!-- </div> -->
					<div class="form-group  {!! $errors->has('Responsable_TCa') ? 'has-error' : '' !!}">
					  	<!-- {!! Form::select('Responsable_TCa',['Cédric Dupuis', 'Bastien Jambon'], null, ['class' => 'form-control', 'placeholder' => 'Responsable']) !!} -->

							<select class="form-control" name="Responsable_TCa">
								<option selected="selected" disabled="disabled" hidden="hidden" value>Responsable</option>
								<option value="Cédric Dupuis">Cédric Dupuis</option>
								<option value="Bastien Jambon">Bastien Jambon</option>
							</select>
							{!! $errors->first('Responsable_TCa', '<small class="help-block">:message</small>') !!}


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
