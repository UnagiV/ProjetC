@extends('template')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Création d'un contact</div>
			<div class="panel-body">
				<div class="col-sm-12">
					{!! Form::open(['route' => 'contact.store', 'class' => 'form-horizontal panel']) !!}

          <div class="form-group {!! $errors->has('Ste_TCl') ? 'has-error' : '' !!}">Nom du Client
              <select class="form-control" name="Ste_TCl">
								<option selected="selected"  hidden="hidden" >Nom du Client</option>
                @for($i = 0; $i < $entreprise->count(); $i++)
                <option value="{{$entreprise[$i]}}">{{$entreprise[$i]}}</option>
                @endfor
							</select>
          </div>
          <div class="form-group {!! $errors->has('Entite_TCo') ? 'has-error' : '' !!}">Entité
					  	{!! Form::text('Entite_TCo', null, ['class' => 'form-control', 'placeholder' => 'Entité']) !!}
					  	{!! $errors->first('Entite_TCo', '<small class="help-block">:message</small>') !!}
					</div>
          <div class="form-group {!! $errors->has('Adr_Liv_TCl') ? 'has-error' : '' !!}">Adresse de Livraison
					  	{!! Form::text('Adr_Liv_TCl', null, ['class' => 'form-control', 'placeholder' => 'Adresse de Livraison']) !!}
					  	{!! $errors->first('Adr_Liv_TCl', '<small class="help-block">:message</small>') !!}
					</div>
          <div class="form-group {!! $errors->has('Contact_TCo') ? 'has-error' : '' !!}">Contact Client
					  	{!! Form::text('Contact_TCo', null, ['class' => 'form-control', 'placeholder' => 'Contact Client']) !!}
					  	{!! $errors->first('Contact_TCo', '<small class="help-block">:message</small>') !!}
					</div>
          <div class="form-group {!! $errors->has('EMail_TCo') ? 'has-error' : '' !!}">Email du Contact
					  	{!! Form::text('EMail_TCo', null, ['class' => 'form-control', 'placeholder' => 'Email du Contact']) !!}
					  	{!! $errors->first('EMail_TCo', '<small class="help-block">:message</small>') !!}
					</div>
          <div class="form-group {!! $errors->has('Tel_TCo') ? 'has-error' : '' !!}">Téléphone
					  	{!! Form::text('Tel_TCo', null, ['class' => 'form-control', 'placeholder' => 'Téléphone']) !!}
					  	{!! $errors->first('Tel_TCo', '<small class="help-block">:message</small>') !!}
					</div>
          <div class="form-group {!! $errors->has('Indicatif_TCo') ? 'has-error' : '' !!}">Indicatif
					  	{!! Form::text('Indicatif_TCo', null, ['class' => 'form-control', 'placeholder' => 'Indicatif']) !!}
					  	{!! $errors->first('Indicatif_TCo', '<small class="help-block">:message</small>') !!}
					</div>
          <div class="form-group {!! $errors->has('Port_TCo') ? 'has-error' : '' !!}">Portable
					  	{!! Form::text('Port_TCo', null, ['class' => 'form-control', 'placeholder' => 'Portable']) !!}
					  	{!! $errors->first('Port_TCo', '<small class="help-block">:message</small>') !!}
					</div>
          <div class="form-group {!! $errors->has('N_Poste') ? 'has-error' : '' !!}">Numero de Poste
					  	{!! Form::text('N_Poste', null, ['class' => 'form-control', 'placeholder' => 'Numero de Poste']) !!}
					  	<!-- {!! $errors->first('N_Poste', '<small class="help-block">:message</small>') !!} -->
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
