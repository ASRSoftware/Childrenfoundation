<!doctype html>


<html lang="en" class="no-js">

<!-- Mirrored from ignitionthemes.eu/theme/cobalt/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Sep 2014 06:57:10 GMT -->
<head>
	<title>Children Foundation</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
<link rel="icon" href="images/CF.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
	
</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header>

			<div class="logo-box"  style="margin-left: -20px;>
				<a class="logo" href="index.html"><img alt="" src="images/Children foundation.jpg"></a>
			</div>
			
			<a class="elemadded responsive-link" href="#">Menu</a>

			<div class="menu-box">
				<ul class="menu">
					<li class="drop"><a  href="index.php"><span>Home</span></a>	
					</li>
					<li class="drop"><a href="about.php"><span>About us</span></a>
						
					</li>
					<li class="drop"><a class="active" href="wedo.php"><span>Donate us</span></a>						
					</li>
					<li class="drop"><a href="photo_gallary.php"><span>Photos</span></a>					
					</li>
					<li><a href="contact.php"><span>Contact</span></a></li>
				</ul>				
			</div>
			<div class="header-foot">
				<div class="social-box">
					<ul class="social-icons">
						<li><a href="#" class="facebook" ><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="twitter" ><i class="fa fa-twitter"></i></a></li>
					<!--	<li><a href="#" class="google" ><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="linkedin" ><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" class="pinterest" ><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" class="youtube" ><i class="fa fa-youtube"></i></a></li>
						<li><a href="#" class="flickr" ><i class="fa fa-flickr"></i></a></li>
						<li><a href="#" class="vimeo" ><i class="fa fa-vimeo-square"></i></a></li> -->
					</ul>
				</div>

				<div class="copyright-box">
					<p>Children Foundation 2014. All rights reserved</p>
					<p>Powered by <a href="http://www.asrsoftwares.com" target="_blank">ASR Software PVT. LTD.</a></p>
				</div>
			</div>
		</header>
		<!-- End Header -->

		<!-- content 
			================================================== -->
		<div id="content">
			<div class="inner-content">
				<div class="services-page">
					<div class="services-page-content">
						<div class="container">
							<div class="services-box">
								<h1>Email Information <span>&lt; back to home <a href="index.php"><i class="fa fa-times"></i></a></span></h1>
								<?php
                                include('db.php');
								
								  $sql = 'select * from user_detail order by date desc limit 20;';
								  $retval = mysql_query( $sql, $conn );
                                $rows = array();
								?>
								<table border="2">
								<tr>
								<th>id  </th>
								<th>name  </th>
								<th> phone </th>
								<th>email  </th>
								<th> message </th>
								<th> Date </th>
							
								</tr>
								
								<?php
								$i = 1;
									while($row = mysql_fetch_array($retval))
										$rows[] = $row;
									foreach($rows as $row){ 
								//	echo    $ename = stripslashes($row['name']);
								//	 echo   $eemail = stripcslashes($row['email']);
									 ?><tr>
                                      <td><?php echo $i;?></td>
									  <td><?php echo $row['name'];?></td>
									   <td><?php echo $row['phone'];;?></td>
									    <td><?php echo $row['email'];?></td>
										 <td><?php echo $row['message'];?></td>
										  <td><?php echo $row['date'];?></td>
										  </tr>
										  
									 <?php
									 $i++;
									}
								 ?>
								
								</table>
								<a href="export.php">Download Report </a>
								
						</div>
					</div>
				</div>				
			</div>
		</div>
		<!-- End content -->

	</div>
	<!-- End Container -->

	<div class="preloader">
		<img alt="" src="images/preloader.gif">
	</div>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/jquery.appear.js"></script>
	<script type="text/javascript" src="js/jquery.countTo.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>


</body>

<!-- Mirrored from ignitionthemes.eu/theme/cobalt/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Sep 2014 06:57:15 GMT -->
</html>