<?php

// if (!$_COOKIE['myzip']) { 	header("Location: index.php"); }

$lang = $_GET['lang'];
if ($lang == "esp") { $esp = 1; } else { $esp = 0; }
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo (!$esp ? "New Packages || Xfinity Product Updates 2" : "Nuevos paquetes || Xfinity Producto Update"); ?></title>
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
			<!-- <?php if (!$esp) { ?>
	  		<div class="language">Language: English | <a href="?lang=esp">Espa&ntilde;ol</a></div>
			<?php } else { ?>
	  		<div class="language">Language: <a href="?lang=eng">English</a> | Espa&ntilde;ol</div>
			<?php } ?> -->
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!--Replace text with your app name or logo image-->
					<a class="navbar-brand" href="index.php<?php echo (!$esp ? "?lang=eng" : "?lang=esp"); ?>"><img class="nav_logo" src="img/White_XFINITY_Logo.png"></a>			    
			  </div>

				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li><a href="index.php"><?php echo (!$esp ? "Introduction" : "Introducci&oacute;n"); ?></a></li>
						<li><a href="new_packages.php"><?php echo (!$esp ? "New Packages" : "Nuevos Paquetes"); ?></a></li>
						<li><a href="discontinued.php"><?php echo (!$esp ? "Discontinued Packages" : "Nuevos Paquetes"); ?></a></li>
						<!-- <li><a onclick="$('#service').animatescroll({padding:71});"><?php echo (!$esp ? "New Services" : "Nuevos Servicios"); ?></a></li> -->
					</ul>
				</div>
			</div>
	  </nav>
	  
		<!-- HEADER
			================================================== -->	  
		<div class="visibled">
			<header style="background:url('img/Hero_Package_Page.png'); background-size: 100%; background-color: #000000; min-height:0;">
				<img src="img/spacer.png" style="width:100%;" class="spacer">
			</header>
		</div>

		<div style="width:100%; background-color:#f0f0f2;">
			<div class="container" style="width:75%; max-width:1410px;">
				<div class="row">
					<div class="col-md-12 packages">
						<h3 class="packages_title">Click here to subscribe to one of these new packages.</h3>
						<br>
						<a class="button_new" href="http://www.xfinity.com" target="_blank"><?php echo (!$esp ? "Subscribe" : "Cómpralo aquí"); ?></a>
					</div>
				</div>
			</div>
		</div>
    
    
    
        <section id="">
			<div class="container" style="padding-top:30px; padding-bottom:50px">
				<h3 class="xf" style="margin-top:0;"><?php echo (!$esp ? "XFINITY Quad Play Packages<sup>1,2,3</sup>" : ""); ?></h3>
              
				<table border="0" cellpadding="0" cellspacing="0">
	 		      <tr class="bb">
	    			<td></td>
	    			<td class="price-heading"><p><?php echo (!$esp ? "Price" : "Precio"); ?></p></td>
	  			  </tr>
                  
                  <!-- SURE PRICE PRODUCT BLOCK -->
	  			  <tr>
	    			<td class="channel-name1"><?php echo (!$esp ? "XF Starter Quad Play" : ""); ?></td>
	    			<td class="price1" rowspan="2">$189.95</td>
	  			  </tr>
	  			  <tr class="hov">
				    <td colspan="2" class="desc ">
                      <p><?php echo (!$esp ? "Includes Digital Starter and Streampix® for primary outlet, Blast!® Internet, XFINITY® Voice Unlimited and XFINITY Home – Secure" : ""); ?></p>
                    </td>
	  			  </tr>
                  <tr class="sp-w bb">
    				<td class="sp-title">SurePrice<sup>4</sup></td>
    				<td class="sure-price">$159.99</td>
  				  </tr>
                  
                  <!-- SURE PRICE PRODUCT BLOCK -->
	  			  <tr>
	    			<td class="channel-name1"><?php echo (!$esp ? "XF Preferred Quad Play" : ""); ?></td>
	    			<td class="price1" rowspan="2">$209.95</td>
	  			  </tr>
	  			  <tr class="hov">
				    <td colspan="2" class="desc ">
                      <p><?php echo (!$esp ? "Includes Digital Preferred, STARZ® and Streampix® for primary outlet, HD Technology Fee, Blast!® Internet, XFINITY® Voice Unlimited and XFINITY Home – Secure" : ""); ?></p>
                    </td>
	  			  </tr>
                  <tr class="sp-w bb">
    				<td class="sp-title">SurePrice<sup>4</sup></td>
    				<td class="sure-price">$179.99</td>
  				  </tr>
                  
                  <!-- SURE PRICE PRODUCT BLOCK -->
	  			  <tr>
	    			<td class="channel-name1"><?php echo (!$esp ? "XF Preferred Plus Quad Play" : ""); ?></td>
	    			<td class="price1" rowspan="2">$229.95</td>
	  			  </tr>
	  			  <tr class="hov">
				    <td colspan="2" class="desc ">
                      <p><?php echo (!$esp ? "Includes Digital Preferred, STARZ®, SHOWTIME®, THE MOVIE CHANNEL™ and Streampix® for primary outlet, HD Technology Fee, Blast!® Internet, XFINITY® Voice Unlimited and XFINITY Home – Secure" : ""); ?></p>
                    </td>
	  			  </tr>
                  <tr class="sp-w bb">
    				<td class="sp-title">SurePrice<sup>4</sup></td>
    				<td class="sure-price">$199.99</td>
  				  </tr>
                  
                   <!-- SURE PRICE PRODUCT BLOCK -->
	  			  <tr>
	    			<td class="channel-name1"><?php echo (!$esp ? "XF Premier Quad Play" : ""); ?></td>
	    			<td class="price1" rowspan="2">$249.95</td>
	  			  </tr>
	  			  <tr class="hov">
				    <td colspan="2" class="desc ">
                      <p><?php echo (!$esp ? "Includes Digital Premier, Streampix® and AnyRoom® DVR Service for primary outlet, HD Technology Fee, Blast!® Internet, XFINITY® Voice Unlimited and XFINITY Home – Secure" : ""); ?></p>
                    </td>
	  			  </tr>
                  <tr class="sp-w bb">
    				<td class="sp-title">SurePrice<sup>4</sup></td>
    				<td class="sure-price">$219.99</td>
  				  </tr>
                  
				</table>
			</div>
		</section>
      
         <section id="">
			<div class="container" style="padding-top:30px; padding-bottom:50px">
				<h3 class="xf" style="margin-top:0;"><?php echo (!$esp ? "XFINITY Triple Play Packages<sup>1,2</sup>" : ""); ?></h3>
              
				<table border="0" cellpadding="0" cellspacing="0">
	 		      <tr class="bb">
	    			<td></td>
	    			<td class="price-heading"><p><?php echo (!$esp ? "Price" : "Precio"); ?></p></td>
	  			  </tr>
                  
                  <!-- SURE PRICE PRODUCT BLOCK -->
	  			  <tr>
	    			<td class="channel-name1"><?php echo (!$esp ? "XF Starter Triple Play" : ""); ?></td>
	    			<td class="price1" rowspan="2">$150.00</td>
	  			  </tr>
	  			  <tr class="hov">
				    <td colspan="2" class="desc ">
                      <p><?php echo (!$esp ? "Includes Digital Starter and Streampix® for primary outlet, Blast!® Internet and XFINITY® Voice Unlimited" : ""); ?></p>
                    </td>
	  			  </tr>
                  <tr class="sp-w bb">
    				<td class="sp-title">SurePrice<sup>4</sup></td>
    				<td class="sure-price">$129.00</td>
  				  </tr>
                  
                  <!-- SURE PRICE PRODUCT BLOCK -->
	  			  <tr>
	    			<td class="channel-name1"><?php echo (!$esp ? "XF Preferred Triple Play" : ""); ?></td>
	    			<td class="price1" rowspan="2">$170.00</td>
	  			  </tr>
	  			  <tr class="hov">
				    <td colspan="2" class="desc ">
                      <p><?php echo (!$esp ? "Includes Digital Preferred, STARZ® and Streampix® for primary outlet, HD Technology Fee, Blast!® Internet and XFINITY® Voice Unlimited" : ""); ?></p>
                    </td>
	  			  </tr>
                  <tr class="sp-w bb">
    				<td class="sp-title">SurePrice<sup>4</sup></td>
    				<td class="sure-price">$149.99</td>
  				  </tr>
                  
                  <!-- SURE PRICE PRODUCT BLOCK -->
	  			  <tr>
	    			<td class="channel-name1"><?php echo (!$esp ? "XF Preferred Plus Triple Play" : ""); ?></td>
	    			<td class="price1" rowspan="2">$190.00</td>
	  			  </tr>
	  			  <tr class="hov">
				    <td colspan="2" class="desc ">
                      <p><?php echo (!$esp ? "Includes Digital Preferred, STARZ®, SHOWTIME®, THE MOVIE CHANNEL™ and Streampix® for primary outlet, HD Technology Fee, Blast!® Internet and XFINITY® Voice Unlimited" : ""); ?></p>
                    </td>
	  			  </tr>
                  <tr class="sp-w bb">
    				<td class="sp-title">SurePrice<sup>4</sup></td>
    				<td class="sure-price">$169.99</td>
  				  </tr>
                  
                   <!-- SURE PRICE PRODUCT BLOCK -->
	  			  <tr>
	    			<td class="channel-name1"><?php echo (!$esp ? "XF Premier Triple Play" : ""); ?></td>
	    			<td class="price1" rowspan="2">$210.00</td>
	  			  </tr>
	  			  <tr class="hov">
				    <td colspan="2" class="desc ">
                      <p><?php echo (!$esp ? "Includes Digital Premier and Streampix® for primary outlet, HD Technology Fee, Blast!® Internet and XFINITY® Voice Unlimited" : ""); ?></p>
                    </td>
	  			  </tr>
                  <tr class="sp-w bb">
    				<td class="sp-title">SurePrice<sup>4</sup></td>
    				<td class="sure-price">$189.99</td>
  				  </tr>
                  
                  <!-- SURE PRICE PRODUCT BLOCK -->
	  			  <tr>
	    			<td class="channel-name1"><?php echo (!$esp ? "XF Starter Secure Triple Play" : ""); ?></td>
	    			<td class="price1" rowspan="2">$150.00</td>
	  			  </tr>
	  			  <tr class="hov">
				    <td colspan="2" class="desc ">
                      <p><?php echo (!$esp ? "Includes Digital Starter and Streampix® for primary outlet, Blast!® Internet and XFINITY Home – Secure" : ""); ?></p>
                    </td>
	  			  </tr>
                  <tr class="sp-w bb">
    				<td class="sp-title">SurePrice<sup>4</sup></td>
    				<td class="sure-price">$129.00</td>
  				  </tr>
                  
                  <!-- SURE PRICE PRODUCT BLOCK -->
	  			  <tr>
	    			<td class="channel-name1"><?php echo (!$esp ? "XF Preferred Secure Triple Play" : ""); ?></td>
	    			<td class="price1" rowspan="2">$170.00</td>
	  			  </tr>
	  			  <tr class="hov">
				    <td colspan="2" class="desc ">
                      <p><?php echo (!$esp ? "Includes Digital Preferred, STARZ® and Streampix® for primary outlet, HD Technology Fee, Blast!® Internet and XFINITY Home – Secure" : ""); ?></p>
                    </td>
	  			  </tr>
                  <tr class="sp-w bb">
    				<td class="sp-title">SurePrice<sup>4</sup></td>
    				<td class="sure-price">$149.99</td>
  				  </tr>
                  
                  <!-- SURE PRICE PRODUCT BLOCK -->
	  			  <tr>
	    			<td class="channel-name1"><?php echo (!$esp ? "XF Preferred Plus Secure Triple Play" : ""); ?></td>
	    			<td class="price1" rowspan="2">$190.00</td>
	  			  </tr>
	  			  <tr class="hov">
				    <td colspan="2" class="desc ">
                      <p><?php echo (!$esp ? "Includes Digital Preferred, STARZ®, SHOWTIME®, THE MOVIE CHANNEL™ and Streampix® for primary outlet, HD Technology Fee, Blast!® Internet Internet and XFINITY Home – Secure" : ""); ?></p>
                    </td>
	  			  </tr>
                  <tr class="sp-w bb">
    				<td class="sp-title">SurePrice<sup>4</sup></td>
    				<td class="sure-price">$169.99</td>
  				  </tr>
                  
                   <!-- SURE PRICE PRODUCT BLOCK -->
	  			  <tr>
	    			<td class="channel-name1"><?php echo (!$esp ? "XF Premier Secure Triple Play" : ""); ?></td>
	    			<td class="price1" rowspan="2">$210.00</td>
	  			  </tr>
	  			  <tr class="hov">
				    <td colspan="2" class="desc ">
                      <p><?php echo (!$esp ? "Includes Digital Premier, Streampix® and AnyRoom® DVR Service for primary outlet, HD Technology Fee, Blast!® Internet and XFINITY Home – Secure" : ""); ?></p>
                    </td>
	  			  </tr>
                  <tr class="sp-w bb">
    				<td class="sp-title">SurePrice<sup>4</sup></td>
    				<td class="sure-price">$189.99</td>
  				  </tr>
                  
                  
				</table>
			</div>
		</section>
    
       <section id="">
			<div class="container" style="padding-top:30px; padding-bottom:50px">
				<h3 class="xf" style="margin-top:0;"><?php echo (!$esp ? "XFINITY Double Play Packages<sup>1,2</sup>" : ""); ?></h3>
              
				<table border="0" cellpadding="0" cellspacing="0">
	 		      <tr class="bb">
	    			<td></td>
	    			<td class="price-heading"><p><?php echo (!$esp ? "Price" : "Precio"); ?></p></td>
	  			  </tr>
                  
                  <!-- SURE PRICE PRODUCT BLOCK -->
	  			  <tr>
	    			<td class="channel-name1"><?php echo (!$esp ? "XF Starter Double Play" : ""); ?></td>
	    			<td class="price1" rowspan="2">$130.00</td>
	  			  </tr>
	  			  <tr class="hov">
				    <td colspan="2" class="desc ">
                      <p><?php echo (!$esp ? "Includes Digital Starter and Streampix® for primary outlet and Blast!® Internet" : ""); ?></p>
                    </td>
	  			  </tr>
                  <tr class="sp-w bb">
    				<td class="sp-title">SurePrice<sup>5</sup></td>
    				<td class="sure-price">$109.99</td>
  				  </tr>
                  
                  <!-- SURE PRICE PRODUCT BLOCK -->
	  			  <tr>
	    			<td class="channel-name1"><?php echo (!$esp ? "XF Preferred Double Play" : ""); ?></td>
	    			<td class="price1" rowspan="2">$150.00</td>
	  			  </tr>
	  			  <tr class="hov">
				    <td colspan="2" class="desc ">
                      <p><?php echo (!$esp ? "Includes Digital Preferred, STARZ® and Streampix® for primary outlet, HD Technology Fee and Blast!® Internet" : ""); ?></p>
                    </td>
	  			  </tr>
                  <tr class="sp-w bb">
    				<td class="sp-title">SurePrice<sup>5</sup></td>
    				<td class="sure-price">$129.99</td>
  				  </tr>
                  
                  <!-- SURE PRICE PRODUCT BLOCK -->
	  			  <tr>
	    			<td class="channel-name1"><?php echo (!$esp ? "XF Preferred Plus Double Play" : ""); ?></td>
	    			<td class="price1" rowspan="2">$170.00</td>
	  			  </tr>
	  			  <tr class="hov">
				    <td colspan="2" class="desc ">
                      <p><?php echo (!$esp ? "Includes Digital Preferred, STARZ® and Streampix® for primary outlet, HD Technology Fee and Blast!® Internet" : ""); ?></p>
                    </td>
	  			  </tr>
                  <tr class="sp-w bb">
    				<td class="sp-title">SurePrice<sup>5</sup></td>
    				<td class="sure-price">$149.99</td>
  				  </tr>
                  
                   <!-- SURE PRICE PRODUCT BLOCK -->
	  			  <tr>
	    			<td class="channel-name1"><?php echo (!$esp ? "XF Premier Double Play" : ""); ?></td>
	    			<td class="price1" rowspan="2">$190.00</td>
	  			  </tr>
	  			  <tr class="hov">
				    <td colspan="2" class="desc ">
                      <p><?php echo (!$esp ? "Includes Digital Premier and Streampix® for primary outlet, HD Technology Fee and Blast!® Internet" : ""); ?></p>
                    </td>
	  			  </tr>
                  <tr class="sp-w bb">
    				<td class="sp-title">SurePrice<sup>5</sup></td>
    				<td class="sure-price">$169.99</td>
  				  </tr>
                  
				</table>
			</div>
		</section>



		

		<div class="container">
			<div class="notes">
		      <ol>
                <li>Certain services available separately or as a part of other levels of service. Comcast service is subject to Comcast’s standard terms and conditions of service. Unless otherwise specified, prices shown are the monthly charge for the corresponding service, equipment or package. Prices shown do not include applicable taxes, franchise fees, FCC fees, Regulatory Recovery Fee, Public Access fees, other state or local fees or other applicable charges (e.g., per-call toll or international charges). Prices, services and features are subject to change. If you are a video service customer and you own a compatible digital converter or CableCARD device, please call 1-800-XFINITY for pricing information or visit xfinity.com/equipmentpolicy. ©2017 Comcast. All rights reserved.</li>
                <li>Requires a Voice/Data Modem.</li>
                <li>XFINITY Home – Secure requires 2 year agreement with early termination fee. Early termination fee applies if all XFINITY services are terminated during the agreement term. For additional information go to xfinity.com/home-security.html.</li>
                <li>SurePrice only available for 12 months to Triple Play or Quad Play customers after a 12 month or 24 month promotional package with SurePrice.</li>
                <li>SurePrice only available for 12 months for XF Starter Double Play, XF Preferred Double Play, XF Preferred Plus Double Play and XF Premier Double Play customers after 12 month promotional packages.</li>
              </ol>
              <br>
              <p><b>XFINITY Home License #s:</b><br>
                <b>AL:</b>b> 001484, 001504 <b>Alarm company operators are licensed and regulated by the Alabama Electronic Security Board of Licensure, 7956 Vaughn Road, PMB 392 Montgomery, AL 36116, Phone (334) 264-9388, Fax (334) 264-9332; AR:</b> 12-030; <b>AZ:</b> ROC 280515, BTR 18287-0; <b>CA:</b> CSLB 974291, ACO 7118 <b>licensed and regulated by the Bureau of Security and Investigative Services, Department of Consumer Affairs, Sacramento, CA, 95814; CT:</b> 1040196, ELC 0189754-C5; <b>DE:</b> FAL-0299, FAC-0293, SSPS 11-123; <b>FL:</b> EF0000921, EF20001002, EF0001095; <b>GA:</b> LVU406303, LVU406264, LVU406190; LVU406354; <b>IL:</b> PACA 127-001503; <b>LA:</b> F1691; <b>MA:</b> SS-001968; <b>MD:</b> 107-1776, <b>Baltimore County</b>: RK9552, <b>Howard County:</b> ER00990, <b>Washington County:</b> EL-R-0218, <b>Harford County:</b> 00005321, <b>Calvert County:</b> L0188, <b>Prince George’s County:</b> 13958-2014-0; <b>ME:</b> LM50017039; <b>MI:</b> 3601206217; <b>MN:</b> TS674412; <b>NC:</b> 2335-CSA; <b>NJ:</b> 34BF00047700; <b>NM:</b> 373379; <b>NY: licensed by the N.Y.S. Department of State</b> 12000305421, <b>Putnam County:</b> L00812; <b>OH:</b> 53-89-1732; <b>OR:</b> CCB 192945 <b>All electrical work is performed by a licensed subcontractor;</b> <b>SC:</b> SCBA-13497, SCFA-13440; <b>TN:</b> ACL 1597, ACL 1604; <b>TX:</b> B-16922,-02571, ACR-1672104,-1818 <b>We are licensed by the Texas Department of Public Safety Private Security Board whose address is: P.O. Box 4087, Austin, TX 78773, (512) 424-7710; UT:</b> 8226921-6501; <b>WA:</b> COMCABS892DS; <b>VT:</b> ES-02366; <b>VA:</b> 2705145289, DCJS 11-7361; <b>WASHINGTON, DC:</b> ECS 902687, BBL 60251200009; <b>WV:</b> WV049211.
                <br><b>MS: 15018010</b>
                <br>Valid 10/31/16. See xfinity.com/homesecurity for current list.</p>
			</div>
		</div>

		<?php include_once('footer.php'); ?>

	</body>  	
</html>