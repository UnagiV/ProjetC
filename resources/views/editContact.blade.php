@extends('template')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Modification d'un client</div>
			<div class="panel-body">
				<div class="col-sm-12">
					{!! Form::model($client, ['route' => ['client.update', $client->Id_TCl], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
					<div class="form-group {!! $errors->has('Ste_TCl') ? 'has-error' : '' !!}">Nom du Client
					  	{!! Form::text('Ste_TCl', null, ['class' => 'form-control', 'placeholder' => 'Nom du Client']) !!}
					  	{!! $errors->first('Ste_TCl', '<small class="help-block">:message</small>') !!}
					</div>
          <div class="form-group {!! $errors->has('An_TCl') ? 'has-error' : '' !!}">Année de création
					  	{!! Form::text('An_TCl', null, ['class' => 'form-control', 'placeholder' => 'Année de création']) !!}
					  	{!! $errors->first('An_TCl', '<small class="help-block">:message</small>') !!}
					</div>
          <div class="form-group {!! $errors->has('Contact_TCl') ? 'has-error' : '' !!}">Contact Achat
					  	{!! Form::text('Contact_TCl', null, ['class' => 'form-control', 'placeholder' => 'Contact Achat']) !!}
					  	{!! $errors->first('Contact_TCl', '<small class="help-block">:message</small>') !!}
					</div>
          <div class="form-group {!! $errors->has('Adr_Fact_TCl') ? 'has-error' : '' !!}">Adresse de Facturation
					  	{!! Form::text('Adr_Fact_TCl', null, ['class' => 'form-control', 'placeholder' => 'Adresse de Facturation']) !!}
					  	{!! $errors->first('Adr_Fact_TCl', '<small class="help-block">:message</small>') !!}
					</div>
          <div class="form-group {!! $errors->has('Tel_TCl') ? 'has-error' : '' !!}">Téléphone
					  	{!! Form::text('Tel_TCl', null, ['class' => 'form-control', 'placeholder' => 'Téléphone']) !!}
					  	{!! $errors->first('Tel_TCl', '<small class="help-block">:message</small>') !!}
					</div>
          <div class="form-group {!! $errors->has('Fax_TCl') ? 'has-error' : '' !!}">Fax
					  	{!! Form::text('Fax_TCl', null, ['class' => 'form-control', 'placeholder' => 'Fax']) !!}
					  	{!! $errors->first('Fax_TCl', '<small class="help-block">:message</small>') !!}
					</div>
          <div class="form-group {!! $errors->has('Web_TCl') ? 'has-error' : '' !!}">Site Web
					  	{!! Form::text('Web_TCl', null, ['class' => 'form-control', 'placeholder' => 'Site Web']) !!}
					  	{!! $errors->first('Web_TCl', '<small class="help-block">:message</small>') !!}
					</div>
          <div class="form-group {!! $errors->has('EMail_TCl') ? 'has-error' : '' !!}">Email
					  	{!! Form::text('EMail_TCl', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
					  	{!! $errors->first('EMail_TCl', '<small class="help-block">:message</small>') !!}
					</div>
          <div class="form-group {!! $errors->has('Mdr_TCl') ? 'has-error' : '' !!}">Mode de reglement
					  	<select class="form-control" name="Mdr_TCl">
								<option selected="selected"  hidden="hidden" value="{{ $client->Mdr_TCl }}">{{ $client->Mdr_TCl }}</option>
								<option value="Chèque - Comptant">Chèque - Comptant</option>
								<option value="Chèque - 30 jours fin du mois le 15">Chèque - 30 jours fin du mois le 15</option>
                <option value="Chèque - 60 jours net">Chèque - 60 jours net</option>
								<option value="Espèces">Espèces</option>
                <option value="Virement - Comptant">Virement - Comptant</option>
								<option value="Virement - 30 jours fin du mois le 15">Virement - 30 jours fin du mois le 15</option>
                <option value="Virement - 60 jours net">Virement - 60 jours net</option>
							</select>
          </div>

          <div class="form-group {!! $errors->has('Information_TCl') ? 'has-error' : '' !!}">Information
					  	{!! Form::text('Information_TCl', null, ['class' => 'form-control', 'placeholder' => 'Information']) !!}
					  	<!-- {!! $errors->first('Information_TCl', '<small class="help-block">:message</small>') !!} -->
					</div>
          <div class="form-group {!! $errors->has('Siret_TCl') ? 'has-error' : '' !!}">Siret
					  	{!! Form::text('Siret_TCl', null, ['class' => 'form-control', 'placeholder' => 'Siret']) !!}
					  	<!-- {!! $errors->first('Siret_TCl', '<small class="help-block">:message</small>') !!} -->
					</div>
          <div class="form-group {!! $errors->has('Siren_TCl') ? 'has-error' : '' !!}">Siren
					  	{!! Form::text('Siren_TCl', null, ['class' => 'form-control', 'placeholder' => 'Siren']) !!}
					  	<!-- {!! $errors->first('Siren_TCl', '<small class="help-block">:message</small>') !!} -->
					</div>
          <div class="form-group">
						<div class="checkbox">
              <label>{!! Form::checkbox('TPE_TCl', 1, null) !!} TPE</label>
              <label>{!! Form::checkbox('PME_PMI_TCl', 1, null) !!} PME-PMI</label>
              <label>{!! Form::checkbox('ETI_TCl', 1, null) !!} ETI </label>
              <label>{!! Form::checkbox('Grands_Comptes_TCl', 1, null) !!} Grands Comptes</label>
              <label>{!! Form::checkbox('Particulier_TCl', 1, null) !!} Particulier </label>
              <label>{!! Form::checkbox('Collec_TCl', 1, null) !!} Collectivité </label>
            </div>
					</div>
          <div class="form-group {!! $errors->has('Tarif_Elec') ? 'has-error' : '' !!}">Tarif M.O. Electricté
					  	{!! Form::text('Tarif_Elec', null, ['class' => 'form-control', 'placeholder' => 'Tarif M.O. Electricté']) !!}
					  	{!! $errors->first('Tarif_Elec', '<small class="help-block">:message</small>') !!}
					</div>
          <div class="form-group {!! $errors->has('Tarif_Tech') ? 'has-error' : '' !!}">Tarif M.O. Diagnostic
					  	{!! Form::text('Tarif_Tech', null, ['class' => 'form-control', 'placeholder' => 'Tarif M.O. Diagnostic']) !!}
					  	{!! $errors->first('Tarif_Tech', '<small class="help-block">:message</small>') !!}
					</div>
          <div class="form-group {!! $errors->has('Tarif_Autom') ? 'has-error' : '' !!}">Tarif M.O. Automatisme
					  	{!! Form::text('Tarif_Autom', null, ['class' => 'form-control', 'placeholder' => 'Tarif M.O. Automatisme']) !!}
					  	{!! $errors->first('Tarif_Autom', '<small class="help-block">:message</small>') !!}
					</div>
          <div class="form-group {!! $errors->has('Tarif_Etude') ? 'has-error' : '' !!}">Tarif M.O. Etude
					  	{!! Form::text('Tarif_Etude', null, ['class' => 'form-control', 'placeholder' => 'Tarif M.O. Etude']) !!}
					  	{!! $errors->first('Tarif_Etude', '<small class="help-block">:message</small>') !!}
					</div>

          <?php $contactClient = DB::table('t_contact')->where('Ste_TCl',
          $client->Ste_TCl)->get() ?>
          @if($contactClient->count() > 0)
          <div class="text-primary"><strong>
            @for ($i = 0; $i < $contactClient->count(); $i++)
            <div class="text-primary" style="border:2px solid black">Contact :{!! Form::text(
              '$contactClient[$i]->Contact_TCo',null, ['class' => 'form-control',
              'placeholder' => 'Contact_TCo']) !!}
            </div>
            <p>Entité : {!! $contactClient[$i]->Entite_TCo !!}</p>
            <p>Téléphone Contact : {!! $contactClient[$i]->Tel_TCo !!}</p>
            <p>N° de poste : {!! $contactClient[$i]->N_Poste !!}</p>
            <p>N° Indicatif : {!! $contactClient[$i]->Indicatif_TCo !!}</p>
            <p>Portable Contact : {!! $contactClient[$i]->Port_TCo !!}</p>
            <p>Adresse de Livraison : {!! $contactClient[$i]->Adr_Liv_TCl !!}</p>



            @endfor
          </strong></div>
          @else
          <td class="text-primary"><strong>"Pas de contact"</strong></td>
          @endif



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
