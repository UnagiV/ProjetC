@extends('template')

@section('contenu')
	<div class="col-sm-offset-4 col-sm-4">
		<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Création d'une facture</div>
			<div class="panel-body">
				<div class="col-sm-12">
					{!! Form::open(['route' => 'facture.store', 'class' => 'form-horizontal panel']) !!}

					<div class="form-group {!! $errors->has('Ste_TCl') ? 'has-error' : '' !!}">Nom du Client
              <select class="form-control" name="Ste_TCl">
								<option selected="selected"  hidden="hidden" >Nom du Client</option>
                @for($i = 0; $i < $entreprise->count(); $i++)
                <option value="{{$entreprise[$i]}}">{{$entreprise[$i]}}</option>
                @endfor
							</select>
          </div>

					<!-- <div class="form-group {!! $errors->has('Collaborateur_TCa') ? 'has-error' : '' !!}">
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

					</div> -->
					<div class="form-group {!! $errors->has('Responsable_TCa') ? 'has-error' : '' !!}">Responsable
              <select class="form-control" name="Responsable_TCa">
								<option selected="selected"  hidden="hidden" value ="" >Responsable</option>
                @for ($i = 0; $i < $responsables->count(); $i++)
								<option value="{{$responsables[$i]->Collaborateur_TCa}}">{{$responsables[$i]->Collaborateur_TCa}}</option>
                @endfor
							</select>
          </div>

					<div class="form-group }">Bon d'Intervention
              <select class="form-control" name="BonIntervention">
								<option selected="selected"  hidden="hidden" value ="" >Bon d'Intervention</option>
                @for ($i = 0; $i < $boninter->count(); $i++)
								@if($boninter[$i]->Facturation_TTa == 0)

								<option value="{{$boninter[$i]->Ste_TCl}}">{{$boninter[$i]->Ste_TCl}}</option>

								@endif
								@endfor
							</select>
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
