<?php //stay
        error_reporting(0);
	ob_start();
        session_start();
	session_regenerate_id();
	require_once("config.php");
	require_once("functions.php");
	$index = "0x01";	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="shortcut icon" href="images/favicon.html">

    <title>kBase &bull; Database Lookup</title>

    <!--Core CSS -->
    <link href="bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="js/ie8/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <script src="js/lib/jquery.js"></script>
</head>

<body>

<section id="container" >
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.php" class="logo">
        <img width="100" height="50"src="/images/logo.png" alt="">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

</div>
</header>
<!--header end-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a href="index.php?site=home">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
                <?php
							if(isset($_SESSION['username'])){
								echo '<li>
                <a href="index.php?site=search">
                    <i class="fa fa-search"></i>
                    <span>Search</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Marketplace</span>
                </a>
                <ul class="sub">
                    <li><a href="index.php?site=buycredits">Purchase Credits</a></li>
                    <li><a href="index.php?site=removal">Hash Removal</a></li>
                </ul>
            </li>
            <li>
                <a href="index.php?site=info">
                    <i class="fa fa-user"></i>
                    <span>My Account</span>
                </a>
            </li>';
								echo '                <li>
                <a href="index.php?site=logout">
                    <i class="fa fa-cogs"></i>
                    <span>Logout</span>
                </a>
            </li>';
							}
							?>
							              <li>
                <a href="index.php?site=contact">
                    <i class="fa fa-envelope"></i>
                    <span>Contact Us</span>
                </a>
            </li>
                                     </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->

        <?php
					//--Load Pagina------
					if(isset($_GET['site'])){
						$phpfile = $_GET['site'];
						$phpfile = htmlentities($phpfile);
						$phpfile = $phpfile.'.php';
						if(file_exists('pages/'.$phpfile) && in_array($phpfile,scandir('pages')) && is_file("pages/$phpfile")){
							include('pages/'.$phpfile);
						}else{
							include('pages/home.php');
						}
					}else{
						include('pages/home.php');
					}
				?>
        <!-- page end-->
        </section>
    </section>
    <!--main content end-->

</section>

<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<script src="bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/accordion-menu/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scrollTo/jquery.scrollTo.min.js"></script>
<script src="js/nicescroll/jquery.nicescroll.js" type="text/javascript"></script>
<!--Easy Pie Chart-->
<script src="assets/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="assets/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="assets/flot-chart/jquery.flot.js"></script>
<script src="assets/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="assets/flot-chart/jquery.flot.resize.js"></script>
<script src="assets/flot-chart/jquery.flot.pie.resize.js"></script>


<!--common script init for all pages-->
<script src="js/scripts.js"></script>

</body>
</html>
<?php ob_flush(); ?>
                            
                            
                            
                            
                            