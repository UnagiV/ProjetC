@extends('template')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Modification du bon d'intervention</div>
			<div class="panel-body">
				<div class="col-sm-12">
					{!! Form::model($bonIntervention, ['route' => ['bonintervention.update', $bonIntervention->Id_TTa], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
					<div class="form-group {!! $errors->has('Id_TTa') ? 'has-error' : '' !!}">
					  	{!! Form::text('Id_TTa', null, ['class' => 'form-control', 'placeholder' => 'N° Bon d intervention']) !!}
					  	{!! $errors->first('Id_TTa', '<small class="help-block">:message</small>') !!}
					</div>
          <div class="form-group {!! $errors->has('Ste_TCl') ? 'has-error' : '' !!}">
					  	{!! Form::text('Ste_TCl', null, ['class' => 'form-control', 'placeholder' => 'Nom du client']) !!}

					</div>
          <div class="form-group {!! $errors->has('Ste_Utl') ? 'has-error' : '' !!}">
					  	{!! Form::text('Ste_Utl', null, ['class' => 'form-control', 'placeholder' => 'Nom du l entreprise utilisatrice']) !!}

					</div>
          <div class="form-group {!! $errors->has('Adr_Liv_TCl') ? 'has-error' : '' !!}">
					  	{!! Form::text('Adr_Liv_TCl', null, ['class' => 'form-control', 'placeholder' => 'Adresse de livraison']) !!}

					</div>
          <div class="form-group {!! $errors->has('Responsable_TCa') ? 'has-error' : '' !!}">
              <select class="form-control" name="Responsable_TCa">
								<option selected="selected"  hidden="hidden" value ="{{$bonIntervention->Responsable_TCa}}" >{{$bonIntervention->Responsable_TCa}}</option>
                @for ($i = 0; $i < $responsables->count(); $i++)
								<option value="{{$responsables[$i]->Collaborateur_TCa}}">{{$responsables[$i]->Collaborateur_TCa}}</option>
                @endfor
							</select>
          </div>
          <div class="form-group {!! $errors->has('Collaborateur_TCa') ? 'has-error' : '' !!}">
              <select class="form-control" name="Collaborateur_TCa">
								<option selected="selected"  hidden="hidden" value="{{$bonIntervention->Collaborateur_TCa}}">{{$bonIntervention->Collaborateur_TCa}}</option>
                @for ($i = 0; $i < $collaborateurs->count(); $i++)
								<option value="{{$collaborateurs[$i]}}">{{$collaborateurs[$i]}}</option>
                @endfor
							</select>
          </div>
          <div class="form-group {!! $errors->has('Contact_TCo') ? 'has-error' : '' !!}">
					  	{!! Form::text('Contact_TCo', null, ['class' => 'form-control', 'placeholder' => 'Contact entreprise']) !!}

					</div>


          <div class="form-group {!! $errors->has('Date_Debut_TTa') ? 'has-error' : '' !!}" style="font-weight : bold">Date du début d intervention
					  	{!! Form::date('Date_Debut_TTa', null, ['class' => 'form-control', 'placeholder' => 'Date du début d intervention']) !!}
					  	<!-- {!! $errors->first('Date_TFCl', '<small class="help-block">:message</small>') !!} -->
					</div>
          <div class="form-group {!! $errors->has('Date_Fin_TTa') ? 'has-error' : '' !!}" style="font-weight : bold">Date de fin d intervention
					  	{!! Form::date('Date_Fin_TTa', null, ['class' => 'form-control', 'placeholder' => 'Date de fin d intervention']) !!}
					  	<!-- {!! $errors->first('Date_TFCl', '<small class="help-block">:message</small>') !!} -->
					</div>
          <div class="form-group {!! $errors->has('Date_TTa') ? 'has-error' : '' !!}" style="font-weight : bold">Edité le (Mettre une function pour editer à la date du jour)
					  	{!! Form::date('Date_TTa', null, ['class' => 'form-control', 'placeholder' => 'Edite le']) !!}
					  	<!-- {!! $errors->first('Date_TFCl', '<small class="help-block">:message</small>') !!} -->
					</div>
          <div class="form-group {!! $errors->has('NDevis_TDv') ? 'has-error' : '' !!}">
					  	{!! Form::text('NDevis_TDv', null, ['class' => 'form-control', 'placeholder' => 'N° de devis']) !!}

					</div>
          <div class="form-group {!! $errors->has('NDevis_TDv') ? 'has-error' : '' !!}">
					  	{!! Form::text('Devis_Type_TTa', null, ['class' => 'form-control', 'placeholder' => 'Information paiement intervention']) !!}

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
