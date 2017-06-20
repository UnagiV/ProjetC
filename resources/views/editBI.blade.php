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


          <div class="form-group {!! $errors->has('Date_Debut_TTa') ? 'has-error' : '' !!}" style="font-weight : bold">Date du début d'intervention
					  	{!! Form::date('Date_Debut_TTa', null, ['class' => 'form-control', 'placeholder' => 'Date du début d\'intervention']) !!}

					</div>
          <div class="form-group {!! $errors->has('Date_Fin_TTa') ? 'has-error' : '' !!}" style="font-weight : bold">Date de fin d'intervention
					  	{!! Form::date('Date_Fin_TTa', null, ['class' => 'form-control', 'placeholder' => 'Date de fin d\'intervention']) !!}

					</div>
          <div class="form-group {!! $errors->has('Date_TTa') ? 'has-error' : '' !!}" style="font-weight : bold">Edité le
					  	{!! Form::date('Date_TTa', null, ['class' => 'form-control', 'placeholder' => 'Edité le']) !!}

					</div>
          <div class="form-group {!! $errors->has('NDevis_TDv') ? 'has-error' : '' !!}">
					  	{!! Form::text('NDevis_TDv', null, ['class' => 'form-control', 'placeholder' => 'N° de devis']) !!}

					</div>
          <div class="form-group {!! $errors->has('Devis_Type_TTa') ? 'has-error' : '' !!}">
					  	{!! Form::text('Devis_Type_TTa', null, ['class' => 'form-control', 'placeholder' => 'Information paiement intervention']) !!}
          </div>
          <div class="form-group {!! $errors->has('NCommande_TDv') ? 'has-error' : '' !!}">
					  	{!! Form::text('NCommande_TDv', null, ['class' => 'form-control', 'placeholder' => 'N° de commande']) !!}
          </div>
          <div class="form-group {!! $errors->has('Date_Demande_TTa') ? 'has-error' : '' !!}" style="font-weight : bold">Demandé le
					  	{!! Form::date('Date_Demande_TTa', null, ['class' => 'form-control', 'placeholder' => 'Demandé le']) !!}
          </div>
          <div class="form-group {!! $errors->has('Responsable_TCl') ? 'has-error' : '' !!}">Personne à contacter
					  	{!! Form::text('Responsable_TCl', null, ['class' => 'form-control', 'placeholder' => 'Personne à contacter']) !!}
          </div>
          <div class="form-group {!! $errors->has('Machine_TTa') ? 'has-error' : '' !!}">Machine
					  	{!! Form::text('Machine_TTa', null, ['class' => 'form-control', 'placeholder' => 'Machine']) !!}
          </div>
          <div class="form-group {!! $errors->has('Travaux_TTa') ? 'has-error' : '' !!}">Intervention à effectuer
					  	{!! Form::text('Travaux_TTa', null, ['class' => 'form-control', 'placeholder' => 'Intervention à effectuer']) !!}
          </div>
          <div class="form-group {!! $errors->has('Observations_Camei_TTa') ? 'has-error' : '' !!}">Observation du technicien
					  	{!! Form::text('Observations_Camei_TTa', null, ['class' => 'form-control', 'placeholder' => 'Observation du technicien']) !!}
          </div>
          <div class="form-group {!! $errors->has('Observations_Client_TTa') ? 'has-error' : '' !!}">Observation du client
					  	{!! Form::text('Observations_Client_TTa', null, ['class' => 'form-control', 'placeholder' => 'Observation du client']) !!}
          </div>
          <div class="form-group {!! $errors->has('Responsable_TCl') ? 'has-error' : '' !!}">Responsable client
					  	{!! Form::text('Responsable_TCl', null, ['class' => 'form-control', 'placeholder' => 'Responsable client']) !!}
          </div>
          <div class="form-group {!! $errors->has('Qte_Forfait_Nuit_TTa') ? 'has-error' : '' !!}">Quantité de forfait nuit/Quantité forfait deplacement
					  	{!! Form::number('Qte_Forfait_Nuit_TTa', null, ['class' => 'form-control', 'placeholder' => 'Quantité de forfait nuit/Quantité forfait deplacement']) !!}
          </div>
          <div class="form-group {!! $errors->has('Prix_Forfait_Nuit_TTa') ? 'has-error' : '' !!}">Prix de forfait nuit/Prix forfait deplacement
					  	{!! Form::number('Prix_Forfait_Nuit_TTa', null, ['class' => 'form-control', 'placeholder' => 'Prix de forfait nuit/Prix forfait deplacement']) !!}
          </div>
          <div class="form-group {!! $errors->has('Total_TVA_TTa') ? 'has-error' : '' !!}">Total
					  	{!! Form::text('Total_TVA_TTa', null, ['class' => 'form-control', 'placeholder' => 'Total']) !!}
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
