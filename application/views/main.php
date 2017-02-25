<!DOCTYPE html >
<html ng-app="PAC">
	<head>
		<base href="http://localhost/pac/">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>bower_components/bootstrap/dist/css/bootstrap.css">
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CCC 2017</title>
	</head>

	<body>
		
		<div ng-view>
			
					
		</div>

		<!--BOWER_COMPONENTS-->
		<script src="<?php echo base_url()?>bower_components/angular/angular.js"></script>
		<script src="<?php echo base_url()?>bower_components/angular-route/angular-route.js"></script>
		<script src="<?php echo base_url()?>bower_components/oclazyload/dist/ocLazyLoad.js"></script>
		<script src="<?php echo base_url()?>bower_components/bootstrap/dist/js/bootstrap.js"></script>


		<!--ANGULAR.JS APPLICATION FILES-->
		<script src="<?php echo base_url()?>assets/js/app.js"></script>
		
	</body>
</html>	