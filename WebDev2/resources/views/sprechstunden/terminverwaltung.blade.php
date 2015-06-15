@extends('default') @section('navigation')
<!-- Sidebar -->
<div id="sidebar-wrapper">
	<ul class="sidebar-nav">
		<li class="sidebar-brand"><a href="#">Sprechstunden</a>
		</li>
		<li><a href="#">Sprechstunden</a>
		</li>
		<li><a href="#">zur Übersicht</a>
		</li>
	</ul>
</div>
@endsection @section('content')
<!-- Page Content -->
<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">
					Menü</a>
			</div>
		</div>
	</div>

	<h3>Termine der Sprechstunde</h3>

	<table class="table table-hover">
		<tr>
			<th>Name</th>
			<th>Vorname</th>
			<th>Kurzbetreff</th>
			<th>Dauer in Minuten</th>
		</tr>
		<tr>
			<td>Max</td>
			<td>Musterman</td>
			<td>Hier steht der Betreff</td>
			<td>25</td>
		</tr>
		<tr>
			<td>Max</td>
			<td>Musterman</td>
			<td>Hier steht der Betreff</td>
			<td>25</td>
		</tr>
		<tr>
			<td>Max</td>
			<td>Musterman</td>
			<td>Hier steht der Betreff</td>
			<td>25</td>
		</tr>
		<tr>
			<td>Max</td>
			<td>Musterman</td>
			<td>Hier steht der Betreff</td>
			<td>25</td>
		</tr>
	</table>
	<div class="col-lg-12">
	<p>Restzeit in Minuten: 0 Minuten</p>
		<a href="" class="btn btn-default" id="menu-toggle"> Termin absagen</a>
		
	</div>

	<h3>Termine in der Warteliste</h3>

		<table class="table table-hover">
		<tr>
			<th>Name</th>
			<th>Vorname</th>
			<th>Kurzbetreff</th>
			<th>Dauer in Minuten</th>
		</tr>
		<tr>
			<td>Max</td>
			<td>Musterman</td>
			<td>Hier steht der Betreff</td>
			<td>25</td>
		</tr>
		<tr>
			<td>Max</td>
			<td>Musterman</td>
			<td>Hier steht der Betreff</td>
			<td>25</td>
		</tr>
		<tr>
			<td>Max</td>
			<td>Musterman</td>
			<td>Hier steht der Betreff</td>
			<td>25</td>
		</tr>
		<tr>
			<td>Max</td>
			<td>Musterman</td>
			<td>Hier steht der Betreff</td>
			<td>25</td>
		</tr>
	</table>
	<div class="col-lg-12">
		<a href="" class="btn btn-default" id="menu-toggle"> Termin zusagen</a>
	</div>
</div>
<!-- /#page-content-wrapper -->
@endsection
