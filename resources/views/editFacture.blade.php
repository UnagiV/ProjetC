@extends('template')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Modification d'une Facture</div>
			<div class="panel-body">
				<div class="col-sm-12">
					{!! Form::model($facture, ['route' => ['facture.update', $facture->Id_TFCl], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
					<div class="form-group {!! $errors->has('NFacture_TFCl') ? 'has-error' : '' !!}">N°Facture
					  	{!! Form::text('NFacture_TFCl', null, ['class' => 'form-control', 'placeholder' => 'N°Facture']) !!}
					  	{!! $errors->first('NFacture_TFCl', '<small class="help-block">:message</small>') !!}
					</div>
          <div class="form-group {!! $errors->has('Ste_TCl') ? 'has-error' : '' !!}">Nom du client
					  	{!! Form::text('Ste_TCl', null, ['class' => 'form-control', 'placeholder' => 'Nom du client']) !!}
					  	<!-- {!! $errors->first('Acces_TCa', '<small class="help-block">:message</small>') !!} -->
					</div>
          <div class="form-group {!! $errors->has('Responsable_TCa') ? 'has-error' : '' !!}">Etablie par
              <select class="form-control" name="Responsable_TCa">
								<option selected="selected"  hidden="hidden" value="{{ $facture->Responsable_TCa }}">{{ $facture->Responsable_TCa }}</option>
								<option value="Cédric Dupuis">Cédric Dupuis</option>
								<option value="Bastien Jambon">Bastien Jambon</option>
							</select>
          </div>
          <div class="form-group {!! $errors->has('Mdr_TCl') ? 'has-error' : '' !!}">Mode de reglement
					  	<select class="form-control" name="Mdr_TCl">
								<option selected="selected"  hidden="hidden" value="{{ $facture->Mdr_TCl }}">{{ $facture->Mdr_TCl }}</option>
								<option value="Chèque - Comptant">Chèque - Comptant</option>
								<option value="Chèque - 30 jours fin du mois le 15">Chèque - 30 jours fin du mois le 15</option>
                <option value="Chèque - 60 jours net">Chèque - 60 jours net</option>
								<option value="Espèces">Espèces</option>
                <option value="Virement - Comptant">Virement - Comptant</option>
								<option value="Virement - 30 jours fin du mois le 15">Virement - 30 jours fin du mois le 15</option>
                <option value="Virement - 60 jours net">Virement - 60 jours net</option>
							</select>
          </div>
          <div class="form-group {!! $errors->has('Adr_Fact_TCl') ? 'has-error' : '' !!}">Adresse de Facturation
					  	{!! Form::text('Adr_Fact_TCl', null, ['class' => 'form-control', 'placeholder' => 'Adresse de Facturation']) !!}
					  	<!-- {!! $errors->first('Acces_TCa', '<small class="help-block">:message</small>') !!} -->
					</div>
          <div class="form-group {!! $errors->has('Date_TFCl') ? 'has-error' : '' !!}">Date de la Facturation
					  	{!! Form::date('Date_TFCl', null, ['class' => 'form-control', 'placeholder' => 'Date de la Facturation']) !!}
					  	<!-- {!! $errors->first('Date_TFCl', '<small class="help-block">:message</small>') !!} -->
					</div>
          <div class="form-group {!! $errors->has('Ech_TFCl') ? 'has-error' : '' !!}">Date d Echéance
					  	{!! Form::date('Ech_TFCl', null, ['class' => 'form-control', 'placeholder' => 'Date d Echéance']) !!}
					  	<!-- {!! $errors->first('Ech_TFCl', '<small class="help-block">:message</small>') !!} -->
					</div>
          <div class="form-group {!! $errors->has('Paid_TFCl') ? 'has-error' : '' !!}">Date de Reglement
              {!! Form::date('Paid_TFCl', null, ['class' => 'form-control', 'placeholder' => 'Date de Reglement']) !!}
					  	<!-- {!! $errors->first('Paid_TFCl', '<small class="help-block">:message</small>') !!} -->
					</div>
          <div class="form-group {!! $errors->has('Avoir_TFCl') ? 'has-error' : '' !!}">
					  	{!! Form::checkbox('Avoir_TFCl',1 , null )!!} Avoir
					  	<!-- {!! $errors->first('Avoir_TFCl', '<small class="help-block">:message</small>') !!} -->
					</div>
          <div class="form-group {!! $errors->has('BlNote_TFCl') ? 'has-error' : '' !!}">Note
					  	{!! Form::text('BlNote_TFCl', null, ['class' => 'form-control', 'placeholder' => 'Note']) !!}
					  	<!-- {!! $errors->first('BlNote_TFCl', '<small class="help-block">:message</small>') !!} -->
					</div>
          <div class="form-group {!! $errors->has('Total_MO_HT_TFCl') ? 'has-error' : '' !!}">Total Main d Oeuvre HT
					  	{!! Form::text('Total_MO_HT_TFCl', null, ['class' => 'form-control', 'placeholder' => 'Total Main d Oeuvre HT']) !!}
					  	<!-- {!! $errors->first('Total_MO_HT_TFCl', '<small class="help-block">:message</small>') !!} -->
					</div>
          <div class="form-group {!! $errors->has('Total_Vente_HT_TFCl') ? 'has-error' : '' !!}">Total Vente HT
					  	{!! Form::text('Total_Vente_HT_TFCl', null, ['class' => 'form-control', 'placeholder' => 'Total Vente HT']) !!}
					  	<!-- {!! $errors->first('Total_Vente_HT_TFCl', '<small class="help-block">:message</small>') !!} -->
					</div>
          <div class="form-group {!! $errors->has('Total_Trajet_HT_TFCl') ? 'has-error' : '' !!}">Total Trajet HT
					  	{!! Form::text('Total_Trajet_HT_TFCl', null, ['class' => 'form-control', 'placeholder' => 'Total Trajet HT']) !!}
					  	<!-- {!! $errors->first('Total_Trajet_HT_TFCl', '<small class="help-block">:message</small>') !!} -->
					</div>
          <div class="form-group {!! $errors->has('Total_Depl_HT_TFCl') ? 'has-error' : '' !!}">Total Deplacement HT
					  	{!! Form::text('Total_Depl_HT_TFCl', null, ['class' => 'form-control', 'placeholder' => 'Total Deplacement HT']) !!}
					  	<!-- {!! $errors->first('Total_Depl_HT_TFCl', '<small class="help-block">:message</small>') !!} -->
					</div>
          <div class="form-group {!! $errors->has('Total_HT_TFCl') ? 'has-error' : '' !!}">Total HT
					  	{!! Form::text('Total_HT_TFCl', null, ['class' => 'form-control', 'placeholder' => 'Total HT']) !!}
					  	<!-- {!! $errors->first('Total_HT_TFClTotal_HT_TFClTotal_TTC_TFCl', '<small class="help-block">:message</small>') !!} -->
					</div>
          <div class="form-group {!! $errors->has('Total_TVA_TFCl') ? 'has-error' : '' !!}">Total TVA
					  	{!! Form::text('Total_TVA_TFCl', null, ['class' => 'form-control', 'placeholder' => 'Total TVA']) !!}
					  	<!-- {!! $errors->first('Total_TVA_TFCl', '<small class="help-block">:message</small>') !!} -->
					</div>
          <div class="form-group {!! $errors->has('Total_TTC_TFCl') ? 'has-error' : '' !!}">Total TTC
					  	{!! Form::text('Total_TTC_TFCl', null, ['class' => 'form-control', 'placeholder' => 'Total TTC']) !!}
					  	<!-- {!! $errors->first('Total_TTC_TFCl', '<small class="help-block">:message</small>') !!} -->
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
