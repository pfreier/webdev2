<html>
<head>
<title>Hello World!</title>
</head>
<body>
	<div ng-app="helloWorldModule">
		<div ng-controller="HelloWorldController">
			name: <input type="text" ng-model="name">
			<hr>
			<div>Hello {{name}}</div>
		</div>
	</div>
	
	<script src="{{ URL::asset('js/angular.min.js') }}"></script>
</body>
</html>
