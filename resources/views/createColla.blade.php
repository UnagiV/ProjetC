@extends('template')

@section('contenu')
	<div class="col-sm-offset-4 col-sm-4">
		<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Création d'un Collaborateur</div>
			<div class="panel-body">
				<div class="col-sm-12">
					{!! Form::open(['route' => 'collaborateur.store', 'class' => 'form-horizontal panel']) !!}
					<div class="form-group {!! $errors->has('Collaborateur_TCa') ? 'has-error' : '' !!}">
						{!! Form::text('Collaborateur_TCa', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
						{!! $errors->first('Collaborateur_TCa', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('Date_In_TCa') ? 'has-error' : '' !!}">
					  	{!! Form::date('Date_In_TCa', null, ['class' => 'form-control', 'placeholder' => 'Date entrée']) !!}
							{!! $errors->first('Date_In_TCa', '<small class="help-block">:message</small>') !!}

					</div>
          <div class="form-group">
					  	{!! Form::date('Date_Out_TCa', null, ['class' => 'form-control', 'placeholder' => 'Date Sortie']) !!}

					</div>
          <div class="form-group  {!! $errors->has('Acces_TCa') ? 'has-error' : '' !!}">
							<select class="form-control" name="Acces_TCa">
								<option selected="selected"  hidden="hidden" value>Acces</option>
								<option value="9999">9999</option>
								<option value="9000">9000</option>
								<option value="4000">4000</option>
								<option value="1000">1000</option>
							</select>
							{!! $errors->first('Acces_TCa', '<small class="help-block">:message</small>') !!}
					</div>

					<div class="form-group  {!! $errors->has('Responsable_TCa') ? 'has-error' : '' !!}">
							<select class="form-control" name="Responsable_TCa">
								<option selected="selected"  hidden="hidden" >Responsable</option>
								@for ($i = 0; $i < $responsables->count(); $i++)
								<option value="{{$responsables[$i]->Collaborateur_TCa}}">{{$responsables[$i]->Collaborateur_TCa}}</option>
                @endfor
							</select>
							{!! $errors->first('Responsable_TCa', '<small class="help-block">:message</small>') !!}
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
