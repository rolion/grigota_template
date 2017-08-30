<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url( 'web/assets/img/apple-icon.png' ) ?>">
	<link rel="icon" type="image/png" href="<?= base_url( 'web/assets/img/favicon.png' ) ?>">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Get Shit Done Kit by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<link href="<?= base_url( 'web/assets/css/bootstrap.css' ) ?>" rel="stylesheet" />
	<link href="<?= base_url( 'web/assets/css/font-awesome.css' ) ?>" rel="stylesheet" />

	<link href="<?= base_url( 'web/assets/css/gsdk.css' ) ?>" rel="stylesheet" />
	<link href="<?= base_url( 'web/assets/css/demo_2.css' ) ?>" rel="stylesheet" />

	<!--     Font Awesome     -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
	{extras_css}
</head>

<body>
<div id="navbar-full">
	<div id="navbar">
		<nav class="navbar navbar-ct-cranberry navbar-transparent navbar-fixed-top" role="navigation">
			<div class="alert alert-success hidden">
				<div class="container">
					<b>Lorem ipsum</b> dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
					tincidunt ut laoreet dolore magna aliquam erat volutpat.
				</div>
			</div>

			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
							data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?= base_url( 'web/home' ) ?>">
						<img src="<?= base_url( 'web/assets/img/rotaract_full_logo.png' ) ?>"
							 style="max-height: 58px;margin-top: 7px; margin-left: 7px">
					</a>
					<img
						style="color:white; background: white; width: 2px;height: 58px;position: absolute;margin-left: 10px;margin-top: 7px">
					<img src="<?= base_url( 'web/assets/img/lema_17-18.png' ) ?>" alt=""
						 style="max-height: 58px; margin-top: 7px;margin-left: 20px">
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#gsdk">Inicio</a></li>
						<li class="active"><a id="link-quienes-somos" href="#gsdk">¿Qui&eacute;nes somos?</a></li>
						<li class="active"><a id="link-actividades" href="#gsdk">Actividades</a></li>
						<li class="active"><a id="link-directorio" href="#gsdk">Directorio</a></li>
						<!--<li class="dropdown">
							  <a href="#gsdk" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							  <ul class="dropdown-menu">
								<li><a href="#gsdk">Action</a></li>
								<li><a href="#gsdk">Another action</a></li>
								<li><a href="#gsdk">Something</a></li>
								<li><a href="#gsdk">Another action</a></li>
								<li><a href="#gsdk">Something</a></li>
								<li class="divider"></li>
								<li><a href="#gsdk">Separated link</a></li>
							  </ul>
						</li>-->
					</ul>
					<!-- <form class="navbar-form navbar-left navbar-search-form" role="search">
					   <div class="form-group">
							<input type="text" value="" class="form-control" placeholder="Search...">
					   </div>
					</form>-->
					<ul class="nav navbar-nav navbar-right">

						<li>
							<button href="#gsdk" class="btn btn-round btn-default">contactanos</button>
						</li>
					</ul>

				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<div class="blurred-container" style="height: 490px;">
			<img class="blurred-img img-responsive" src="<?= base_url( 'web/assets/img/slider_1.png' ) ?>"
				 alt="Chania" width="100%" style="overflow: hidden">
		</div>
	</div>
</div>

<div class="main">
	{content_page}
	{extra_content}
</body>

<script src="<?= base_url( 'web/assets/js/jquery-1.10.2.js' ) ?>" type="text/javascript"></script>
<script src="<?= base_url( 'web/assets/js/jquery-ui-1.10.4.custom.min.js' ) ?>" type="text/javascript"></script>
<script src="<?= base_url( 'web/assets/js/bootstrap.js' ) ?>" type="text/javascript"></script>
<script src="<?= base_url( 'web/assets/js/gsdk-checkbox.js' ) ?>"></script>
<script src="<?= base_url( 'web/assets/js/gsdk-radio.js' ) ?>"></script>
<script src="<?= base_url( 'web/assets/js/gsdk-bootstrapswitch.js' ) ?>"></script>
<script src="<?= base_url( 'web/assets/js/get-shit-done.js' ) ?>"></script>
<script src="<?= base_url( 'web/assets/js/custom.js' ) ?>"></script>
<script src="<?= base_url( 'web/assets/js/main.js' ) ?>"></script>
{extras_js}
</html>
