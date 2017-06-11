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
		<style> textarea { resize: none; } </style>
	</head>
	<body>

		<table class="table">
			<tbody>
				<button class="btn btn-primary" type="button">DashBord</button>
				<button class="btn btn-primary" type="button">Bon d'Intervention</button>
				<button class="btn btn-primary" type="button">Devis</button>
				<button class="btn btn-primary" type="button">Suivi de Chantier</button>
				<button class="btn btn-primary" type="button">Factures</button>
				<button class="btn btn-primary" type="button">Annuaire Clients</button>
				<button class="btn btn-primary" type="button">Fiche Collaborateurs</button>
				<button class="btn btn-primary" type="button">Stock</button>
				<button class="btn btn-primary" type="button">Recherche</button>

				

			</tbody>

		</table>
		@yield('contenu')
	</body>


</html>
