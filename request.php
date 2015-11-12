<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cabby</title>
		<meta name="description" content="A free HTML5/CSS3 template made exclusively for Codrops by Peter Finlan" />
		<meta name="keywords" content="html5 template, css3, one page, animations, agency, portfolio, web design" />
		<meta name="author" content="Peter Finlan" />
		<!-- Bootstrap -->
		<script src="js/modernizr.custom.js"></script>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
		<!-- <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet"> -->
		<link href="css/app.css" rel="stylesheet">
		
	    <link rel="stylesheet" type="text/css" media="screen"
	     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
		<!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<!-- open/close -->
		<header>
			<section class="header">
				<div class="container">
					<div class="row nav-wrapper">
						<div class="col-md-6 col-sm-6 col-xs-6 text-left">
							<a href="index.php"><img class="logo-img" src="img/cabby/logo.png" alt="Cabby Logo"></a>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 text-right navicon">
							<p>Bienvenida, Giulia</p>
						</div>
					</div>
				</div>
			</section>
		</header>

		<section id="register" class="section-overlay">
			<div class="texture-overlay"></div>
			<h1 class="title">Pedir Cabby</h1>
			<div class="container center">
				<span class="input input--nariko">
					<input class="input__field input__field--nariko" type="text" id="input-20" />
					<label class="input__label input__label--nariko" for="input-20">
						<span class="input__label-content input__label-content--nariko">Lugar de recepción</span>
					</label>
				</span>
				<span class="input input--nariko">
					<input class="input__field input__field--nariko" type="text" id="input-20" />
					<label class="input__label input__label--nariko" for="input-20">
						<span class="input__label-content input__label-content--nariko">Destino</span>
					</label>
				</span>
				<div class="container service-container">
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-4 feature-1 wp2">
								<div class="service-select" id="s-parents">
									<div class="feature-icon service-icon">
										<i class="fa fa-child"></i>
									</div>
									<div class="service-content">
										<h1>Cabby Kids</h1>
									</div>
								</div>
							</div>
							<div class="col-md-4 feature-2 wp2 delay-05s">
								<div class="service-select" id="s-elder">
									<div class="feature-icon service-icon">
										<i class="fa fa-heartbeat"></i>
									</div>
									<div class="service-content">
										<h1>Cabby Grown Ups</h1>
									</div>
								</div>
							</div>
							<div class="col-md-4 feature-3 wp2 delay-1s">
								<div class="service-select" id="s-business">
									<div class="feature-icon service-icon">
										<i class="fa fa-black-tie"></i>
									</div>
									<div class="service-content">
										<h1>Cabby Business</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="parents" class="services-tab hidden">
					<div class="container service-container">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-4 feature-1 wp2">
									<div class="car-select" id="s-car">
										<img src="img/cabby/sedan.png" alt="">
										<div class="service-content car-content">
											<h1>
												-1 Pantalla
											</h1>
										</div>
									</div>
								</div>
								<div class="col-md-4 feature-2 wp2 delay-05s">
									<div class="car-select" id="s-pickup">
										<img src="img/cabby/camioneta.png" alt="">
										<div class="service-content car-content">
											<h1>
												-1 Pantalla
												<br>
												-2 Tablets
											</h1>
										</div>
									</div>
								</div>
								<div class="col-md-4 feature-3 wp2 delay-1s">
									<div class="car-select" id="s-minivan">
										<img src="img/cabby/minivan.png" alt="">
										<div class="service-content car-content">
											<h1>
												-1 Pantalla
												<br>
												-2 Tablets
												<br>
												-Snacks Nutritivos
											</h1>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="container time-container">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-2 col-md-offset-1">
									<div class="time-select" id="s-once">
										<a class="middle button button--tamaya button--border-thick" data-text="Una vez"><span>Una vez</span></a>
									</div>
								</div>
								<div class="col-md-2 delay-05s">
									<div class="time-select" id="s-hour">
										<a class="middle button button--tamaya button--border-thick" data-text="Hora"><span>Hora</span></a>
									</div>
								</div>
								<div class="col-md-2 delay-1s">
									<div class="time-select" id="s-day">
										<a class="middle button button--tamaya button--border-thick" data-text="Día"><span>Día</span></a>
									</div>
								</div>
								<div class="col-md-2 delay-1s">
									<div class="time-select" id="s-week">
										<a class="middle button button--tamaya button--border-thick" data-text="Semana"><span>Semana</span></a>
									</div>
								</div>
								<div class="col-md-2 delay-1s">
									<div class="time-select" id="s-month">
										<a class="middle button button--tamaya button--border-thick" data-text="Mes"><span>Mes</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<p class="label-form">Fecha y Hora de Recepción: </p>
					<div id="datetimepicker" class="input-append date">
					    <input type="text"></input>
					    <span class="add-on">
					    	<i class="fa fa-calendar"></i>
					    </span>
					</div>
					
					<p class="label-form-one">Método de pago:</p>
					<div class="container pay-container">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-3">
									<div class="pay-select" id="s-cash">
										<a class="middle button button--tamaya button--border-thick" data-text="Efectivo"><span>Efectivo</span></a>
									</div>
								</div>
								<div class="col-md-3 delay-05s">
									<div class="pay-select" id="s-debit">
										<a class="middle button button--tamaya button--border-thick" data-text="Débito"><span>Débito</span></a>
									</div>
								</div>
								<div class="col-md-3 delay-1s">
									<div class="pay-select" id="s-credit">
										<a class="middle button button--tamaya button--border-thick" data-text="Crédito"><span>Crédito</span></a>
									</div>
								</div>
								<div class="col-md-3 delay-1s">
									<div class="pay-select" id="s-online">
										<a class="middle button button--tamaya button--border-thick" data-text="Online"><span>Online</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="payment">
						<p class="label-form-one">Costo Aproximado: </p>
						<p class="label-cost">$100 - $150</p>
					</div>
					<a style="display: none" class="request middle button button--tamaya button--border-thick" data-text="Solicitar"><span>Solicitar</span></a>
				    
				</div>
				<div id="elder" class="services-tab hidden">
					<div class="container service-container">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-4 feature-1 wp2">
									<div class="car-select" id="s-car">
										<img src="img/cabby/sedan.png" alt="">
										<div class="service-content car-content">
											<h1>
												-1 Pantalla
											</h1>
										</div>
									</div>
								</div>
								<div class="col-md-4 feature-2 wp2 delay-05s">
									<div class="car-select" id="s-pickup">
										<img src="img/cabby/camioneta.png" alt="">
										<div class="service-content car-content">
											<h1>
												-1 Pantalla
												<br>
												-2 Tablets
											</h1>
										</div>
									</div>
								</div>
								<div class="col-md-4 feature-3 wp2 delay-1s">
									<div class="car-select" id="s-minivan">
										<img src="img/cabby/minivan.png" alt="">
										<div class="service-content car-content">
											<h1>
												-1 Pantalla
												<br>
												-2 Tablets
												<br>
												-Snacks Nutritivos
											</h1>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="container time-container">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-2 col-md-offset-1">
									<div class="time-select" id="s-once">
										<a class="middle button button--tamaya button--border-thick" data-text="Una vez"><span>Una vez</span></a>
									</div>
								</div>
								<div class="col-md-2 delay-05s">
									<div class="time-select" id="s-hour">
										<a class="middle button button--tamaya button--border-thick" data-text="Hora"><span>Hora</span></a>
									</div>
								</div>
								<div class="col-md-2 delay-1s">
									<div class="time-select" id="s-day">
										<a class="middle button button--tamaya button--border-thick" data-text="Día"><span>Día</span></a>
									</div>
								</div>
								<div class="col-md-2 delay-1s">
									<div class="time-select" id="s-week">
										<a class="middle button button--tamaya button--border-thick" data-text="Semana"><span>Semana</span></a>
									</div>
								</div>
								<div class="col-md-2 delay-1s">
									<div class="time-select" id="s-month">
										<a class="middle button button--tamaya button--border-thick" data-text="Mes"><span>Mes</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<p class="label-form">Fecha y Hora de Recepción: </p>
					<div id="datetimepicker" class="input-append date">
					    <input type="text"></input>
					    <span class="add-on">
					    	<i class="fa fa-calendar"></i>
					    </span>
					</div>
					<span class="input input--nariko" style="margin-top: 0">
						<input class="input__field input__field--nariko" type="text" id="input-20" />
						<label class="input__label input__label--nariko" for="input-20">
							<span class="input__label-content input__label-content--nariko">Requerimientos Especiales</span>
						</label>
					</span>
					<p class="label-form-one">Método de pago:</p>
					<div class="container pay-container">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-3">
									<div class="pay-select" id="s-cash">
										<a class="middle button button--tamaya button--border-thick" data-text="Efectivo"><span>Efectivo</span></a>
									</div>
								</div>
								<div class="col-md-3 delay-05s">
									<div class="pay-select" id="s-debit">
										<a class="middle button button--tamaya button--border-thick" data-text="Débito"><span>Débito</span></a>
									</div>
								</div>
								<div class="col-md-3 delay-1s">
									<div class="pay-select" id="s-credit">
										<a class="middle button button--tamaya button--border-thick" data-text="Crédito"><span>Crédito</span></a>
									</div>
								</div>
								<div class="col-md-3 delay-1s">
									<div class="pay-select" id="s-online">
										<a class="middle button button--tamaya button--border-thick" data-text="Online"><span>Online</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="payment">
						<p class="label-form-one">Costo Aproximado: </p>
						<p class="label-cost">$100 - $150</p>
					</div>
					<a style="display: none" class="request middle button button--tamaya button--border-thick" data-text="Solicitar"><span>Solicitar</span></a>
				</div>
				<div id="business" class="services-tab hidden">
					<div class="container service-container">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-4 feature-1 wp2">
									<div class="car-select" id="s-car">
										<img src="img/cabby/sedan.png" alt="">
										<div class="service-content car-content">
											<h1>
												-1 Pantalla
											</h1>
										</div>
									</div>
								</div>
								<div class="col-md-4 feature-2 wp2 delay-05s">
									<div class="car-select" id="s-pickup">
										<img src="img/cabby/camioneta.png" alt="">
										<div class="service-content car-content">
											<h1>
												-1 Pantalla
												<br>
												-2 Tablets
											</h1>
										</div>
									</div>
								</div>
								<div class="col-md-4 feature-3 wp2 delay-1s">
									<div class="car-select" id="s-minivan">
										<img src="img/cabby/minivan.png" alt="">
										<div class="service-content car-content">
											<h1>
												-1 Pantalla
												<br>
												-2 Tablets
												<br>
												-Snacks Nutritivos
											</h1>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="container time-container">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-2 col-md-offset-1">
									<div class="time-select" id="s-once">
										<a class="middle button button--tamaya button--border-thick" data-text="Una vez"><span>Una vez</span></a>
									</div>
								</div>
								<div class="col-md-2 delay-05s">
									<div class="time-select" id="s-hour">
										<a class="middle button button--tamaya button--border-thick" data-text="Hora"><span>Hora</span></a>
									</div>
								</div>
								<div class="col-md-2 delay-1s">
									<div class="time-select" id="s-day">
										<a class="middle button button--tamaya button--border-thick" data-text="Día"><span>Día</span></a>
									</div>
								</div>
								<div class="col-md-2 delay-1s">
									<div class="time-select" id="s-week">
										<a class="middle button button--tamaya button--border-thick" data-text="Semana"><span>Semana</span></a>
									</div>
								</div>
								<div class="col-md-2 delay-1s">
									<div class="time-select" id="s-month">
										<a class="middle button button--tamaya button--border-thick" data-text="Mes"><span>Mes</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<p class="label-form">Fecha y Hora de Recepción: </p>
					<div id="datetimepicker" class="input-append date">
					    <input type="text"></input>
					    <span class="add-on">
					    	<i class="fa fa-calendar"></i>
					    </span>
					</div>
					<p class="label-form-one">Método de pago:</p>
					<div class="container pay-container">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-3">
									<div class="pay-select" id="s-cash">
										<a class="middle button button--tamaya button--border-thick" data-text="Efectivo"><span>Efectivo</span></a>
									</div>
								</div>
								<div class="col-md-3 delay-05s">
									<div class="pay-select" id="s-debit">
										<a class="middle button button--tamaya button--border-thick" data-text="Débito"><span>Débito</span></a>
									</div>
								</div>
								<div class="col-md-3 delay-1s">
									<div class="pay-select" id="s-credit">
										<a class="middle button button--tamaya button--border-thick" data-text="Crédito"><span>Crédito</span></a>
									</div>
								</div>
								<div class="col-md-3 delay-1s">
									<div class="pay-select" id="s-online">
										<a class="middle button button--tamaya button--border-thick" data-text="Online"><span>Online</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="payment">
						<p class="label-form-one">Costo Aproximado: </p>
						<p class="label-cost">$100 - $150</p>
					</div>
					<a style="display: none" class="request middle button button--tamaya button--border-thick" data-text="Solicitar"><span>Solicitar</span></a>
				</div>
			</div>
		</section>
		
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h1 class="footer-logo">
						<a href="index.php"><img class="logo-img" src="img/cabby/logo-negro.png" alt="Footer Logo"></a>
						</h1>
						<p>© Cabby 2015</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/min/toucheffects-min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/flickity.pkgd.min.js"></script>
		<script src="js/jquery.fancybox.pack.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/retina.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/min/scripts-min.js"></script>
		<!-- <script src="js/bootstrap-datepicker.js"></script>-->
		<script type="text/javascript"
	     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
	    </script>

		  <!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script> -->
		  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->

		<script>

		// $(function() {
		// 	$( "#datepicker" ).datepicker();
		// });


		// $('#dp2').datepicker('setValue', '11/13/15');

		$('#datetimepicker').datetimepicker({
	        format: 'dd/MM/yyyy hh:mm:ss',
	      });

		$(document).ready(function() {
			$('.service-select').click(function() {
				var selected = $(this).attr('id');
				var selectedId = selected.substring(2);

				$('.services-tab').each(function() {
					$(this).addClass('hidden');
				});
				$('.feature-icon').each(function() {
					$(this).addClass('service-icon');
				});
				$('#' + selectedId).removeClass('hidden');
				$(this).children('.feature-icon').removeClass('service-icon'); 
			});

			$('.car-select').click(function() {
				var selected = $(this).attr('id');

				$('.car-content').each(function() {
					$(this).removeClass('c-yellow');
				});

				$('#' + selected + ' .car-content').addClass('c-yellow');
			});

			$('.time-select').click(function() {
				var selected = $(this).attr('id');

				$('.button--tamaya').each(function() {
					$(this).removeClass('b-orange');
				});

				$('#' + selected + ' .button--tamaya').addClass('b-orange');
			});
			$('.pay-select').click(function() {
				var selected = $(this).attr('id');

				$('.button--tamaya').each(function() {
					$(this).removeClass('b-orange');
				});

				$('.payment').show();
				$('.request').show();

				$('#' + selected + ' .button--tamaya').addClass('b-orange');
			});

			$('.request').click(function() {
				alert('Tu pedido ha sido exitoso!');
			    location.reload();
			});
		});
		</script>
		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
		(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		e.src='//www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		ga('create','UA-XXXXX-X');ga('send','pageview');
		</script>
	</body>
</html>
