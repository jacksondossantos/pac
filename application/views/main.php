<!DOCTYPE html >
<html ng-app="PAC">
	<head>
		<base href="http://localhost/pac/">
		<title>CCC 2017</title>
	</head>

	<body>
		<h1>Bem vindo ao CCC <?php echo Date('Y')?></h1>
		
		[ <a href="<?php echo base_url()?>" title="DashBoard">DashBoard</a> ]
		[ <a href="<?php echo base_url()?>alunos" title="Alunos">Alunos</a> ]
		[ <a href="<?php echo base_url()?>turmas" title="Turmas">Turma</a> ]


		<div ng-view>
			
					
		</div>

		<!--BOWER_COMPONENTS-->
		<script src="<?php echo base_url()?>bower_components/angular/angular.js"></script>
		<script src="<?php echo base_url()?>bower_components/angular-route/angular-route.js"></script>
		<script src="<?php echo base_url()?>bower_components/oclazyload/dist/ocLazyLoad.js"></script>


		<!--ANGULAR.JS APPLICATION FILES-->
		<script src="<?php echo base_url()?>assets/js/app.js"></script>
		
	</body>
</html>	