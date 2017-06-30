@extends('template')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Modification du bon d'intervention</div>
			<div class="panel-body">
				<div class="col-sm-12">
					{!! Form::model($bonIntervention, ['route' => ['bonintervention.update', $bonIntervention->Id_TTa], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
					
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
          <div class="form-group {!! $errors->has('Total_Km_TTa') ? 'has-error' : '' !!}">Prix par trajet
					  	{!! Form::number('Total_Km_TTa', null, ['class' => 'form-control', 'placeholder' => 'Prix par trajet']) !!}
          </div>
          <div class="form-group {!! $errors->has('PeageTTC_TTa') ? 'has-error' : '' !!}">Prix du péage par trajet
					  	{!! Form::number('PeageTTC_TTa', null, ['class' => 'form-control', 'placeholder' => 'Prix du péage par trajet']) !!}
          </div>
          <div class="form-group {!! $errors->has('Prix_Km_TTa') ? 'has-error' : '' !!}">Prix du kilomètre
					  	{!! Form::number('Prix_Km_TTa', null, ['class' => 'form-control', 'placeholder' => 'Prix du kilomètre']) !!}
          </div>
          <div class="form-group {!! $errors->has('Total_Trajet_U_TTa') ? 'has-error' : '' !!}">Nombre de trajets
					  	{!! Form::number('Total_Trajet_U_TTa', null, ['class' => 'form-control', 'placeholder' => 'Nombre de trajets']) !!}
          </div>
          <div class="form-group {!! $errors->has('NFacture_TFCl') ? 'has-error' : '' !!}">Numéro de facture assosié
					  	{!! Form::text('NFacture_TFCl', null, ['class' => 'form-control', 'placeholder' => 'Numéro de facture assosié']) !!}
          </div>
          <div class="form-group {!! $errors->has('Date_TFCl') ? 'has-error' : '' !!}" style="font-weight : bold">Date de facturation
					  	{!! Form::date('Date_TFCl', null, ['class' => 'form-control', 'placeholder' => 'Date de facturation']) !!}
          </div>
          <div class="form-group {!! $errors->has('Total_MO_HT_TTa') ? 'has-error' : '' !!}">Total main d'oeuvre HT
					  	{!! Form::number('Total_MO_HT_TTa', null, ['class' => 'form-control', 'placeholder' => 'Total main d\'oeuvre HT']) !!}
          </div>
          <div class="form-group {!! $errors->has('Total_Achat_HT_TTa') ? 'has-error' : '' !!}">Total achat fournitures HT
					  	{!! Form::number('Total_Achat_HT_TTa', null, ['class' => 'form-control', 'placeholder' => 'Total achat fournitures HT']) !!}
          </div>
          <div class="form-group {!! $errors->has('Total_Vente_HT_TTa') ? 'has-error' : '' !!}">Total fournitures HT
              {!! Form::number('Total_Vente_HT_TTa', null, ['class' => 'form-control', 'placeholder' => 'Total fournitures HT']) !!}
          </div>
          <div class="form-group {!! $errors->has('Total_Trajet_HT_TTa') ? 'has-error' : '' !!}">Total trajet HT
              {!! Form::number('Total_Trajet_HT_TTa', null, ['class' => 'form-control', 'placeholder' => 'Total trajet HT']) !!}
          </div>
          <div class="form-group {!! $errors->has('Total_Depl_HT_TTa') ? 'has-error' : '' !!}">Total deplacement (on sait pas ce que c'est)
              {!! Form::number('Total_Depl_HT_TTa', null, ['class' => 'form-control', 'placeholder' => 'Total deplacement (on sait pas ce que c\'est)']) !!}
          </div>
          <div class="form-group {!! $errors->has('Total_HT_TTa') ? 'has-error' : '' !!}">Total HT
              {!! Form::number('Total_HT_TTa', null, ['class' => 'form-control', 'placeholder' => 'Total HT']) !!}
          </div>
          <div class="form-group {!! $errors->has('TVA_TTa') ? 'has-error' : '' !!}">Taux TVA
              {!! Form::number('TVA_TTa', null, ['class' => 'form-control', 'placeholder' => 'Taux TVA']) !!}
          </div>
          <div class="form-group {!! $errors->has('Total_TVA_TTa') ? 'has-error' : '' !!}">Total TVA
              {!! Form::number('Total_TVA_TTa', null, ['class' => 'form-control', 'placeholder' => 'Total TVA']) !!}
          </div>
          <div class="form-group {!! $errors->has('Total_TTC_TTa') ? 'has-error' : '' !!}">Total TTC
              {!! Form::number('Total_TTC_TTa', null, ['class' => 'form-control', 'placeholder' => 'Total TTC']) !!}
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
