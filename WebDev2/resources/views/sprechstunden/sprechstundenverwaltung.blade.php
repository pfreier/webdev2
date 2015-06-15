@extends('default') @section('navigation')
<!-- Sidebar -->
<div id="sidebar-wrapper">
	<ul class="sidebar-nav">
		<li class="sidebar-brand"><a href="#">Sprechstunden</a>
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
				<h2>Sprechstunden mit Warteliste</h2>
				<a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">
					Menü</a>
				<p>
			
			</div>
		</div>
	</div>

	<table class="table table-hover">
		<tr>
			<th>Datum</th>
			<th>Zeit</th>
			<th>Raum</th>
			<th>Termine in Warteliste</th>
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
	<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"> Bearbeiten</a>
	<p>

</div>

<!-- /#page-content-wrapper -->
@endsection
