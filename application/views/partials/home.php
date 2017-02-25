<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/styles.css" />
<!-- Custom Style (Responsive) -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/responsive.css" />
<!-- Bootstrap-select -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap-select.min.css" />
<!-- ResponsiveSlides -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/responsiveslides.css" />




<header>
		<section class="container">
			<section class="row">
				<section class="col-xs-12 col-sm-5">
					<img src="<?php echo base_url()?>assets/images/logo.png" alt="" class="img-responsive" />
				</section>
				<section class="col-xs-12 col-sm-7">
					<h1>CCC 2017</h1>
					<p>Curso de Capacitação para Células.</p>
					<nav>
						<a href="https://www.facebook.com/forumieqrv/" class="icons icon-facebook"></a>
						<a href="https://www.youtube.com/channel/UC4v8jI0VwlH_dULlkIozWCQ" class="icons icon-youtube"></a>
					</nav>
					<a href="#" class="btn btn-lg btn-warning">Portal do Aluno</a>
				</section>
			</section>
		</section>
	</header>
	
	<section class="container outer">
		<section class="clearfix">
			<section class="column-2">
				<h3><span class="glyphicon glyphicon-picture"></span> &nbsp; CCC 2017</h3>
				<p>O CCC - Curso de Capacitação para Células, é uma ferramenta de desenvolvida pela Igreja do Evangelho quadrangular da Restinga Velha em Porto Alegre. Ao ver a necessidade de treinar de foema mais eficaz o novos líderes de células, foi concebido o CCC, atualmente o curso se divide em 3 módulos com várias disciplinas, o curso possuiu em seu curriculo atual uma carga horária de 144h.</p>
			</section>
			<section class="column-2">
				<h3><span class="glyphicon glyphicon-phone"></span> &nbsp;E-CCC</h3>
				<p>O E-CCC é uma evolução do Curso de Capacitação para Células, que visa abrimorar ainda mais o conhecimento dos Líderes de Células já formados pelo CCC, este curso funciona de forma extensiva, tendo sua carga horária de 144h, com um conteúdo dinâmico. </p>
			</section>
		</section>
	</section>
	
	<section class="dark-bg outer centered text-white">
		<section class="container">
			<section class="row">
				<section class="col-xs-12">
					<h2>WHAT I HAVE DONE</h2>
					<p class="gray-text medium-text less-margin">Browse some of the most accurate and complex works I have created</p>
					<select name="category" class="selectpicker">
						<option value="all">All</option>
						<option value="category-1">Category 1</option>
						<option value="category-2">Category 2</option>
						<option value="category-3">Category 3</option>
					</select>
					
					<div class="rslides_container">
						<ul class="rslides slider" id="slider">
							<li class="item all category-1"><img src="assets/images/slide-1.jpg" alt=""></li>
							<li class="item all category-1"><img src="assets/images/slide-2.jpg" alt=""></li>
							<li class="item all category-1"><img src="assets/images/slide-3.jpg" alt=""></li>
							<li class="item all category-2"><img src="assets/images/slide-4.jpg" alt=""></li>
							<li class="item all category-2"><img src="assets/images/slide-5.jpg" alt=""></li>
							<li class="item all category-2"><img src="assets/images/slide-6.jpg" alt=""></li>
							<li class="item all category-3"><img src="assets/images/slide-3.jpg" alt=""></li>
							<li class="item all category-3"><img src="assets/images/slide-2.jpg" alt=""></li>
							<li class="item all category-3"><img src="assets/images/slide-1.jpg" alt=""></li>
						</ul>
					</div>
				</section>
			</section>
		</section>
	</section>
	
	<section class="sky-bg outer centered text-white">
		<section class="container">
			<section class="row">
				<section class="col-xs-12">
					<h2>NEED A WEB DESIGNER ?</h2>
					<p class="medium-text">One morning, when Gregor Samsa woke from the troubled dreams,<br />he found himself transformed inside his bed into<br />lay on his armour back, and if kurama</p>
					<a href="#" class="btn btn-lg btn-ext">CONTACT ME NOW</a>
				</section>
			</section>
		</section>
	</section>
	
	<footer class="dark-bg">
		<nav>
			<a href="#" class="icons icons-small icon-dribble"></a>
			<a href="#" class="icons icons-small icon-facebook"></a>
			<a href="#" class="icons icons-small icon-linkedin"></a>
			<a href="#" class="icons icons-small icon-flickr"></a>
			<a href="#" class="icons icons-small icon-twitter"></a>
		</nav>
		&copy; 2014 Freelance Website - All rights reserved<br />
		Built with love using <a href="http://getbootstrap.com/" target="_blank">Twitter Bootstrap</a>, developed by <a href="http://www.bootstrapzen.com/" target="_blank">BootstrapZen</a>
	</footer>
	
	<!-- jQuery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<!-- Bootstrap-select -->
	<script src="<?php echo base_url()?>assets/js/bootstrap-select.min.js"></script>
	<!-- ResponsiveSlides -->
	<script src="<?php echo base_url()?>assets/js/responsiveslides.min.js"></script>
	
	<script>
	<!--
	$(function(){
		var slider = $(".rslides_container").html();
		
		$(".selectpicker").selectpicker({size: 6}).change(function(){
			$(".rslides_container").html("").append( slider );
			
			var current = $(this).val();
			$("#slider li").each(function(){ if ( !$(this).hasClass(current) ) $(this).remove() });
			slideit();
		});
		
		var slideit = function(){
			$("#slider").responsiveSlides({
		        auto: false,
		        pager: false,
		        nav: true,
		        speed: 500,
		        maxwidth: 800,
		        namespace: "large-btns"
			});
		};
		slideit();
	});
	-->
	</script>