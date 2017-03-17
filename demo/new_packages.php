<?php

// if (!$_COOKIE['myzip']) { 	header("Location: index.php"); }

$lang = $_GET['lang'];
if ($lang == "esp") { $esp = 1; } else { $esp = 0; }
?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php echo (!$esp ? "New Packages || Xfinity Product Updates" : "Nuevos paquetes || Xfinity Producto Update"); ?></title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSS 
        ================================================== -->
    <!-- Bootstrap 3-->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic|Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
    <!-- Template Styles -->
    <link href="css/style.css" rel="stylesheet" media="screen">
	</head>
  
  <body>
		<!-- NAVBAR
			==================================================== -->
		<nav class="navbar navbar-default navbar-fixed-top"> <!--role="navigation"-->
			<?php if (!$esp) { ?>
				<div class="language">Language: English | <a href="?lang=esp">Espa&ntilde;ol</a></div>
			<?php } else { ?>
				<div class="language">Language: <a href="?lang=eng">English</a> | Espa&ntilde;ol</div>
			<?php } ?>
			<div class="container">
				<div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			      <span class="sr-only">Toggle navigation</span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			    </button>
			    <!--Replace text with your app name or logo image-->
			    <a class="navbar-brand" href="index.php<?php echo (!$esp ? "?lang=eng" : "?lang=esp"); ?>"><img src"http://grfx.cstv.com/schools/mifl/graphics/mifl-11-logo-xfinity2.gif"></a>
			  </div>
			  
			  <div class="collapse navbar-collapse navbar-ex1-collapse">
			  	<a href="index.php<?php echo (!$esp ? "?lang=eng" : "?lang=esp"); ?>"><img src"../img/logo.png"></a>
			    <ul class="nav navbar-nav">
			      <li><a href="index.php<?php echo (!$esp ? "?lang=eng" : "?lang=esp"); ?>"><?php echo (!$esp ? "Back Home" : "Regresar a la página principal"); ?></a></li>
			    </ul>
			  </div>
		  </div>
	  </nav>
	  
		<!-- HEADER
			================================================== -->	  
		<div class="visibled">
			<header style="background: url('img/Hero_Bundle.png'); background-position:center 75px; background-size:100%; background-color:#000000; min-height:0; ">
				<img src="img/spacer.gif" style="width:100%;" class="spacer">
			</header>
		</div>	  

		<div style="width:100%;background-color:#eeeeee;">
			<div class="container" style="width:75%; max-width:1410px;">
				<div class="row">
					<div class="col-md-6 packages rightline">
						<div class="gray" style="padding-top:7px;" onclick="$('#triple').animatescroll({padding:71});">
							<h1><?php echo (!$esp ? "Triple Plays" : "Paquete Triple"); ?></h1>
							<?php echo (!$esp ? "With" : "con"); ?> XFINITY Voice
						</div>
							XFINITY TV<br>
							+ Internet + Voice<br>
							<br>
							<a class="button" href="http://<?php echo (!$esp ? "www." : "es."); ?>xfinity.com/Corporate/Learn/Bundles/bundles.html" target="_blank"><?php echo (!$esp ? "Start Shopping" : "Cómpralo aquí"); ?></a>
					</div>

					<div class="col-md-6 packages rightline">
						<div class="gray" style="padding-top:13px;" onclick="$('#double').animatescroll({padding:71});">
							<h1><?php echo (!$esp ? "Double Plays" : "Paquetes Dobles"); ?></h1>
						</div>
						XFINITY TV + Internet<br>
						<br>
						<br>
						<a class="button" href="http://<?php echo (!$esp ? "www." : "es."); ?>xfinity.com/cable-internet-packages.html" target="_blank"><?php echo (!$esp ? "Start Shopping" : "Cómpralo aquí"); ?></a>
					</div>
				</div>
			</div>
		</div>

		<section id="triple2">
			<div class="container" style="padding-top:30px; padding-bottom:50px">
				<div class="wrapper">
					<h3 class="xf" style="margin-top:0;"><?php echo (!$esp ? "Triple Plays" : "Paquete Triple"); ?> <span style="font-weight:200;color: rgb(86,83,90)"><?php echo (!$esp ? "with" : "con"); ?> XFINITY Voice</span></h3>
					<table border="0" cellpadding="0" cellspacing="0">
						<tr class="bb">
							<td></td>
							<td class="price-heading"><p><?php echo (!$esp ? "Price" : "Precio"); ?></p></td>
						</tr>
  					<tr>
    					<td class="channel-name1"><?php echo (!$esp ? "X1 Starter Extreme Triple Play" : "X1 Starter Extreme Paquete Triple"); ?></td>
    					<td class="price1" rowspan="2">$190.00</td>
  					</tr>
  					<tr class="hov bb">
    					<td colspan="2" class="desc bb"><p><?php echo (!$esp ? "Includes Digital Starter for primary outlet, DVR, HD Technology Fee, Streampix, Extreme 300 Internet, and XFINITY Voice Unlimited." : "lncluye Digital Starter para la conexión primaria, DVR, cargos de technologia HD, Streampix, Extreme 300 Internet, y XFINITY Voice Unlimited."); ?></p></td>
  					</tr>
  					<tr>
    					<td class="channel-name1"><?php echo (!$esp ? "X1 Preferred Extreme Triple Play" : "X1 Preferred Extreme Paquete Triple"); ?></td>
    					<td class="price1" rowspan="2">$210.00</td>
  					</tr>
  					<tr class="hov bb">
    					<td colspan="2" class="desc bb"><p><?php echo (!$esp ? "Includes Digital Preferred for primary outlet, DVR, HD Technology Fee, STARZ&reg;, Streampix, Extreme 300 Internet, and XFINITY Voice Unlimited." : "lncluye Digital Preferred para la conexión primaria, DVR, cargos de technologia HD, STARZ&reg;, Streampix, Extreme 300 Internet, y XFINITY Voice Unlimited."); ?></p></td>
  					</tr>
  					<tr>
    					<td class="channel-name1"><?php echo (!$esp ? "X1 Premier Extreme Triple Play" : "X1 Premier Extreme Paquete Triple"); ?></td>
    					<td class="price1" rowspan="2">$240.00</td>
  					</tr>
  					<tr class="hov bb">
    					<td colspan="2" class="desc bb"><p><?php echo (!$esp ? "Includes Digital Premier for primary outlet, DVR, HD Technology Fee, HBO&reg;, SHOWTIME&reg;, CINEMAX&reg;, THE MOVIE CHANNEL&reg;, STARZ&reg;, Streampix, Extreme 300 Internet, and XFINITY Voice Unlimited." : "lncluye Digital Premier para la conexión primaria, DVR, cargos de technologia HD, HBO&reg;, SHOWTIME&reg;, CINEMAX&reg;, THE MOVIE CHANNEL&reg;, STARZ&reg;, Streampix, Extreme 300 Internet, y XFINITY Voice Unlimited."); ?></p></td>
  					</tr>
					</table>
				</div>
			</div>
		</section>

		<section id="double">
			<div class="row" style="margin-left:0; margin-right:0; background-color:#eeeeee; padding-bottom:50px">
				<div class="col-md-12" style="padding-left:0; padding-right:0;">
					<div class="container" style="padding-top:30px;">
						<div class="wrapper">
							<h3 class="xf" style="margin-top:0;"><?php echo (!$esp ? "Double Plays" : "Paquetes Dobles"); ?></h3>
							<table border="0" cellpadding="0" cellspacing="0">
 								<tr class="bb">
    							<td></td>
    							<td class="price-heading"><p><?php echo (!$esp ? "Price" : "Precio"); ?></p></td>
  							</tr>
  							<tr>
    							<td class="channel-name1"><?php echo (!$esp ? "Blast! Pro Plus Double Play" : "Blast! Pro Plus Paquete Doble"); ?></td>
    							<td class="price1" rowspan="2">$89.95</td>
  							</tr>
  							<tr class="hov bb">
    							<td colspan="2" class="desc bb"><p><?php echo (!$esp ? "Includes Limited Basic, Streampix, and choice of HBO&reg; or SHOWTIME&reg; for primary outlet, and Blast! Pro Internet" : "lncluye Limited Basic, Streampix, y la elección de HBO&reg; o SHOWTIME&reg; para la conexión primaria, y Blast! Pro Internet"); ?></p></td>
  							</tr>
  							<tr>
    							<td class="channel-name1"><?php echo (!$esp ? "X1 Starter Extreme Double Play" : "X1 Starter Extreme Paquete Doble"); ?></td>
    							<td class="price1" rowspan="2">$170.00</td>
  							</tr>
  							<tr class="hov bb">
    							<td colspan="2" class="desc bb"><p><?php echo (!$esp ? "Includes Digital Starter for primary outlet, DVR, HD Technology Fee, Streampix, and Extreme 300 Internet." : "lncluye Digital Starter para la conexión primaria, DVR, cargos de tecnología HD, Streampix, y Extreme 300 Internet"); ?></p></td>
  							</tr>
  							<tr>
    							<td class="channel-name1"><?php echo (!$esp ? "X1 Preferred Extreme Double Play" : "X1 Preferred Extreme Paquete Doble"); ?></td>
    							<td class="price1" rowspan="2">$190.00</td>
  							</tr>
  							<tr class="hov bb">
    							<td colspan="2" class="desc bb"><p><?php echo (!$esp ? "Includes Digital Preferred for primary outlet, DVR, HD Technology Fee, STARZ&reg;, Streampix, and Extreme&nbsp;300&nbsp;Internet." : "lncluye Digital Preferred para la conexión primaria, DVR, cargos de tecnología HD, STARZ&reg;, Streampix, y Extreme&nbsp;300&nbsp;Internet"); ?></p></td>
  							</tr>
  							<tr>
    							<td class="channel-name1"><?php echo (!$esp ? "X1 Premier Extreme Double Play" : "X1 Premier Extreme Paquete Doble"); ?></td>
    							<td class="price1" rowspan="2">$220.00</td>
  							</tr>
  							<tr class="hov bb">
    							<td colspan="2" class="desc bb"><p><?php echo (!$esp ? "Includes Digital Premier for primary outlet, DVR, HD Technology Fee, HBO&reg;, SHOWTIME&reg;, CINEMAX&reg;, THE MOVIE CHANNEL&reg;, STARZ&reg;, Streampix, and Extreme 300 Internet." : "lncluye Digital Premier para la conexión primaria, DVR, cargos de tecnología HD, HBO&reg;, SHOWTIME&reg;, CINEMAX&reg;, THE MOVIE CHANNEL&reg;, STARZ&reg;, Streampix, y Extreme 300 Internet"); ?></p></td>
  							</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="notes">
			<br>
			<br>
			<?php echo (!$esp ? "Requires a Voice/Data Modem" : "Requiere un módem de Voice/Data"); ?>
		</div>

		<?php include_once('footer.php'); ?>
  	
	</body>
</html>