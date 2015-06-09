@extends('default')
@section('navigation')
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="./index.php">
                        FH HOF
                    </a>
                </li>
                <li>
                    <a href="">Neue Sprechstunde anlegen</a>
                </li>
                 <li>
                    <a href="">Sprechstunde suchen</a>
                </li>
                 <li>
                    <a href="">zurück zur Übersicht</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
@endsection

@section('content')
 <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Sprechstundenverwaltung</h1>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menü</a>
                    </div>
                </div>
            </div>
        </div>
@endsection