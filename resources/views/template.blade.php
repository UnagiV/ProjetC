<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CAMEI</title>
		{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') !!}
		{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css') !!}
		<!--[if lt IE 9]>
			{{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
			{{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
		<![endif]-->
		<style> textarea { resize: none; }</style>
	</head>
<header class="col-sm-offset-1 col-sm-10">
<button class="btn btn-primary" type="button"> DashBoard </button>
	<a href="{{ URL::route('bonintervention.index') }}" class="btn btn-primary"> Bon d'Intervention </a>
	<button class="btn btn-primary" type="button">Devis</button>
	<button class="btn btn-primary" type="button">Suivi de Chantier</button>
	<a href="{{ URL::route('facture.index') }}" class="btn btn-primary"> Factures </a>
	<a href="{{ URL::route('client.index') }}" class="btn btn-primary"> Annuaire Clients </a>
	<a href="{{ URL::route('collaborateur.index') }}" class="btn btn-primary"> Fiche Collaborateurs </a>
	<button class="btn btn-primary" type="button">Stock</button>
	<button class="btn btn-primary" type="button">Recherche</button>

		<table class="col-sm-offset-4 col-sm-4">
			<tbody>
				<button class="btn btn-primary" type="button">DashBoard :</button>
				<button class="btn btn-primary" type="button">Bon d'Intervention</button>
				<button class="btn btn-primary" type="button">Devis</button>
				<button class="btn btn-primary" type="button">Suivi de Chantier</button>
				<button class="btn btn-primary" type="button">Factures</button>
				<button class="btn btn-primary" type="button">Annuaire Clients</button>
				<button class="btn btn-primary" type="button">Fiche Collaborateurs</button>
				<button class="btn btn-primary" type="button">Stock</button>
				<button class="btn btn-primary" type="button">Recherche</button>

</header>
	<body >
		@yield('contenu')
	</body>


</html>
