@extends('default') @section('navigation')
<!-- Sidebar -->
<div id="sidebar-wrapper">
	<ul class="sidebar-nav">
		<li class="sidebar-brand"><a href="#"> Einstellungen </a>
		</li>
		<li><a href="">zurück zur Übersicht</a>
		</li>

	</ul>
</div>
@endsection @section('content')
<!-- Page Content -->
<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">
				<h1>Einstellungen</h1>
				<a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">
					Menü</a>
			</div>

		</div>
	</div>
	<h3>Spamlist</h3>
	<form class="form-group-add-Event">

		<div class="form-group">
			<label for="exampleInputEmail1">E-Mail Adresse</label> <input
				type="email" class="form-control" id="exampleInputEmail1"
				placeholder="E-Mail...">
		</div>

		<select multiple class="form-control">
			<option>max@muster.de</option>
			<option>max@muster.de2</option>
			<option>max@muster.de3</option>
			<option>max@muster.de4</option>
			<option>max@muster.de5</option>
		</select> <br>
		<button type="submit" class="btn btn-default">Hinzufügen</button>
		<button type="submit" class="btn btn-default">Entfernen</button>
	</form>

	<div class="checkbox">
		<label> <input type="checkbox" value=""> Option one is this and
			that&mdash;be sure to include why it's great
		</label>
	</div>
	<div class="checkbox">
		<label> <input type="checkbox" value=""> Option one is this and
			that&mdash;be sure to include why it's great
		</label>
	</div>
	<div class="checkbox">
		<label> <input type="checkbox" value=""> Option one is this and
			that&mdash;be sure to include why it's great
		</label>
	</div>
	<div class="checkbox">
		<label> <input type="checkbox" value=""> Option one is this and
			that&mdash;be sure to include why it's great
		</label>
	</div>
	
	<button type="submit" class="btn btn-default">Einstellungen speichern</button>
</div>
<!-- /#page-content-wrapper -->
@endsection
