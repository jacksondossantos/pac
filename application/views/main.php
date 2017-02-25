<!DOCTYPE html >
<html ng-app="PAC">
	<head>
		<title>CCC 2017</title>
	</head>

	<body>
		<h1>Bem vindo ao CCC <?php echo Date('Y')?></h1>
		
		[ <a href="#/" title="Home">Home</a> ]
		[ <a href="#/sobre" title="Sobre">Sobre</a> ]
		[ <a href="#/login" title="Login">Login</a> ]


		<div ng-view>
			
					
		</div>


		<script src="<?php echo base_url()?>bower_components/angular/angular.js"></script>
		<script src="<?php echo base_url()?>bower_components/angular-route/angular-route.js"></script>

		<script src="<?php echo base_url()?>assets/js/app.js"></script>
		<script src="<?php echo base_url()?>assets/js/controllers/HomeCtrl.js"></script>
	</body>
</html>	