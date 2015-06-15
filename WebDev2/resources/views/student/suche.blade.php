@extends('default') @section('navigation')
<!-- Sidebar -->
<div id="sidebar-wrapper">
	<ul class="sidebar-nav">
		<li class="sidebar-brand"><a href="#"> Student Control Panel </a>
		</li>
		<li><a href="#">Neue suche starten</a>
		</li>
	</ul>
</div>
@endsection @section('content')
<!-- Page Content -->
<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1>Sprechstundenliste {{$name}}</h1>
				<a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">
					Menü</a>
				<div></div>
				<br>
				<table class="table table-hover">
					<tr>
						<th>Datum</th>
						<th>Uhrzeit</th>
						<th>Raum</th>
						<th>vorhandene Zeit in Minuten</th>
					</tr>
					<tr>
						<td>12.06.2015</td>
						<td>14:00</td>
						<td>B114</td>
						<td>5</td>
					</tr>
					<tr>
						<td>12.06.2015</td>
						<td>14:00</td>
						<td>B114</td>
						<td>5</td>
					</tr>
					<tr>
						<td>12.06.2015</td>
						<td>14:00</td>
						<td>B114</td>
						<td>5</td>
					</tr>
					<tr>
						<td>12.06.2015</td>
						<td>14:00</td>
						<td>B114</td>
						<td>5</td>
					</tr>
					<tr>
						<td>12.06.2015</td>
						<td>14:00</td>
						<td>B114</td>
						<td>5</td>
					</tr>
				</table>
				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">
					Sprechstunde wählen</a>
				<p>
				
				
				<h3>Termin hinzufügen</h3>
				<form class="form-group-add-Event">

					<div class="form-group">
						<label for="exampleInputEmail1">Vorname</label> <input type="text"
							class="form-control" id="exampleInputEmail1"
							placeholder="Vorname eingaben">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Nachname</label> <input
							type="text" class="form-control" id="exampleInputEmail1"
							placeholder="Nachname eingeben">
					</div>
					<select class="form-control">
						<option>15 Minuten</option>
						<option>30 Minuten</option>
						<option>45 Minuten</option>
						<option>60 Minuten</option>
					</select><br>
					<div class="form-group">
						<label for="exampleInputEmail1">Kurz Betreff</label> <input
							type="text" class="form-control" id="exampleInputEmail1"
							placeholder="Kurzen Betreff eingeben...">
					</div>

					<h4>Nachricht</h4>
					<textarea class="form-control" rows="4"></textarea>
					<br>

					<button type="submit" class="btn btn-default">Hinzufügen</button>
				</form>

			</div>
		</div>
	</div>
	<!-- /#page-content-wrapper -->
	@endsection