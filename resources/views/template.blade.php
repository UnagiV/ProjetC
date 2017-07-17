<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CAMEI</title>
		{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') !!}
		{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css') !!}
		<!--[if lt IE 9]>
			{{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
			{{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
		<![endif]-->
		<style> textarea { resize: none; }</style>
		<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>jQuery UI Datepicker - Default functionality</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>

jQuery(function($){
	$.datepicker.regional['fr'] = {
		  closeText: 'Fermer',
	 		prevText: 'Précédent',
		  nextText: 'Suivant',
			currentText: 'Aujourd\'hui',
			monthNames: ['Janvier','Fevrier','Mars','Avril','Mai','Juin', 'Juillet','Aout','Septembre','Octobre','Novembre','Decembre'],
			monthNamesShort: ['Jan','Fev','Mar','Avr','Mai','Jun', 'Jul','Aou','Sep','Oct','Nov','Dec'],
			dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
			dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
			dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
			showButtonPanel: true
		  };
		 $.datepicker.setDefaults($.datepicker.regional['fr']);
	 });

$( function() {
	$( "#datepicker" ).datepicker({
		changeMonth: true,
		 changeYear: true,
		  minDate: "-120Y",
			 maxDate: "+20Y",
			  yearRange: "-100:+10"
			 }).datepicker(
				  "option",
					"dateFormat",
					"yy-mm-dd"
				);
} );
$( function() {
	$( "#datepicker2" ).datepicker({
		changeMonth: true,
		 changeYear: true,
		  minDate: "-120Y",
			 maxDate: "+20Y",
			  yearRange: "-100:+10"
			 }).datepicker(
				  "option",
					"dateFormat",
					"yy-mm-dd"
				);
} );
</script>
	</head>
<header class="col-sm-offset-0 col-sm-12">
	<br>
	<a href="{{ url('/') }}" class="btn btn-primary"> Accueil </a>
	<button class="btn btn-primary" type="button"> DashBoard  </button>
	<a href="{{ URL::route('bonintervention.index') }}" class="btn btn-primary"> Bon d'Intervention </a>
	<button class="btn btn-primary" type="button"> Devis </button>
	<button class="btn btn-primary" type="button"> Suivi de Chantier </button>
	<a href="{{ URL::route('facture.index') }}" class="btn btn-primary"> Factures </a>
	<a href="{{ URL::route('client.index') }}" class="btn btn-primary"> Annuaire Clients </a>
	<a href="{{ URL::route('collaborateur.index') }}" class="btn btn-primary"> Fiche Collaborateurs </a>
	<button class="btn btn-primary" type="button"> Stock </button>
	<button class="btn btn-primary" type="button"> Recherche </button>
	<!-- pour faire apparaitre le nom de l'user -->
	<!-- <a href="#" class="btn btn-primary">{{ Auth::user()->name }}</a> -->
	<a href="{{ route('logout') }}" onclick="event.preventDefault();
		document.getElementById('logout-form').submit();" class="btn btn-primary">
			Se Déconnecter </a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
			</form>

	<br>
	<br>



</header>
	<body >
		@yield('contenu')
	</body>


</html>
