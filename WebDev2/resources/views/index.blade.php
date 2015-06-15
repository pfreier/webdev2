<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="assets/img/favicon.png">

<title>Sprechstundenverwaltung FH Hof</title>

<!-- Bootstrap -->

<link href="{{ asset('/css/bootstrap-theme.css') }}" rel="stylesheet">
<link href="{{ asset('/css/bootstrapsimple.css') }}" rel="stylesheet">

<!-- siimple style -->

<link href="{{ asset('/css/style.css') }}" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html">FH Hof</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{ url('/login') }}">Einloggen</a></li>
					<li><a href="{{ url('/user/create') }}">Registrieren</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>

	<div id="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h1>Sprechstunden FH Hof</h1>
					<h2 class="subtitle">
						Dozent suchen oder vorhandenen Termin Token eingeben <br>
						Vor der Suche muss die E-Mail Adresse einmalig validiert werden
					</h2>


					<form class="form-inline signup" role="form">
						<div class="form-group">
							<input type="email" class="form-control" id="exampleInputEmail1"
								placeholder="E-Mail eingeben">
						</div>
						<button type="submit" class="btn btn-primary">E-Mail validieren</button>
					</form>


					<form class="form-inline signup" role="form">
						<div class="form-group">
							<input type="text" class="form-control" id="exampleInputEmail1"
								placeholder="Termin Token">
						</div>
						<button type="submit" class="btn btn-primary">Suchen</button>
					</form>
					
					<form class="form-inline signup" role="form">
						<div class="form-group">
							<input type="text" class="form-control" id="exampleInputEmail1"
								placeholder="Dozent">
						</div>
						<button type="submit" class="btn btn-primary">Suchen</button>
					</form>

				</div>

			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
