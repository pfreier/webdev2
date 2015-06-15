@extends('default')
@section('navigation')
<!-- Sidebar -->
<div id="sidebar-wrapper">
	<ul class="sidebar-nav">
		<li class="sidebar-brand"><a href="#"> Student Control Panel </a>
		</li>
		<li><a href="#">Neuen Termin suchen</a>
		</li>
		<li><a href="#">Termin absagen</a>
		</li>
	</ul>
</div>
@endsection

@section('content')
<!-- Page Content -->
<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1>Dein Termin</h1>
				<a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">
				Menü</a>
			</div>
		</div>
	</div>
</div>
<!-- /#page-content-wrapper -->
@endsection