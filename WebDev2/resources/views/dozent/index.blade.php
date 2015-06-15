@extends('default') @section('navigation')
<!-- Sidebar -->
<div id="sidebar-wrapper">
	<ul class="sidebar-nav">
		<li class="sidebar-brand"><a href="#">Control Panel</a>
		</li>
		<li><a href="#">Abwesenheit eintragen</a>
		</li>
		<li><a href="#">Tagesansicht</a>
		</li>
		<li><a href="#">Wochenansicht</a>
		</li>
		<li><a href="#">Monatsansicht</a>
		</li>
		<li><a href="">Wartelisten bearbeiten</a>
		</li>
		<li><a href="">Einstellungen</a>
		</li>


	</ul>
</div>
@endsection @section('content')
<!-- Page Content -->
<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3">
				<h1>Übersicht</h1>
				<a href="#menu-toggle" class="btn-sm btn-primary" id="menu-toggle">
					Menü</a>
			</div>
		</div>
	</div>

	<h3>Sprechstunde hinzufügen</h3>
	<form class="form-group-add-Event">

		<div class="form-group">
			<label for="exampleInputEmail1">Date Picker Datum</label> <input
				type="text" class="form-control" id="exampleInputEmail1"
				placeholder="Date Picker Datum">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Dauer</label> <input type="text"
				class="form-control" id="exampleInputEmail1"
				placeholder="Dauer eingeben">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Uhrzeit</label> <input type="text"
				class="form-control" id="exampleInputEmail1"
				placeholder="Uhrzeit eingeben">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Raum</label> <input type="text"
				class="form-control" id="exampleInputEmail1"
				placeholder="Raum eingeben">
		</div>

		<select class="form-control">
			<option>täglich</option>
			<option>wöchentlich</option>
			<option>jährlich</option>
		</select><br>

		<button type="submit" class="btn btn-default">Hinzufügen</button>
	</form>
</div>
<!-- /#page-content-wrapper -->
@endsection
