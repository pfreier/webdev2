@extends('app')
<div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="./index.php">
                        FH HOF
                    </a>
                </li>
                <li>
                    <a href="">Sprechstundenverwaltung</a>
                </li>
                 <li>
                    <a href="">Abwesenheit eintragen</a>
                </li>
                 <li>
                    <a href="">Tagesansicht</a>
                </li>
                 <li>
                    <a href="">Wochenansicht</a>
                </li>
                 <li>
                    <a href="">Monatsansicht</a>
                </li>


            </ul>
        </div>

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in!
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
