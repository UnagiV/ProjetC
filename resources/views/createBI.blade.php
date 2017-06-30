@extends('template')

@section('contenu')

<div class="col-sm-offset-1 col-sm-10">
  <br>
  <div class="panel panel-primary">
    <div class="panel-heading">Création d'un bon d'intervention</div>
    <div class="panel-body">
      <div class="col-sm-12">

        {!! Form::open(['route' => 'bonintervention.store', 'class' => 'form-horizontal panel']) !!}


        <div>
        <div class="form-group col-sm-6">
                  <label>Bon d'intervention en cours</label>
                  <input class="form-control" placeholder= "{{$boninterventionEnCours}}" disabled="" type="text">
                  <div>aaa</div>
                  <div>aaa</div>
                  <div>aaa</div>
                  <div>aaa</div>
                  <div>aaa</div>
                  <div>aaa</div>
                  <div>aaa</div>
                  <div>aaa</div>
                  <div>aaa</div>
                  <div>aaa</div>
        </div>

        </div>

        <div class="form-group col-sm-6"  style="margin-left: 30px;">

                  <p><strong>Date</strong></p>
                  <!-- <input type="text" id="datepicker" value={{'Date_TTa'}}> -->
                  {!! Form::date('Date_TTa', null, ['class' => 'form-control', 'placeholder' => 'Date', 'id' => 'datepicker']) !!}

        </div>
        <div class="form-group col-sm-6"  style="margin-left: 30px;">

                  <p><strong>Date de début</strong></p>
                  <!-- <input type="text" id="datepicker" value={{'Date_TTa'}}> -->
                  {!! Form::date('Date_Debut_TTa', null, ['class' => 'form-control', 'placeholder' => 'Date de début', 'id' => 'datepicker2']) !!}

        </div>










        <div class="col-sm-12">
        {!! Form::submit('Envoyer', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
  <div>
  <a href="javascript:history.back()" class="btn btn-primary">
    <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
  </a>
</div>
</div>

@endsection
