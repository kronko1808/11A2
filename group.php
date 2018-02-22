<!DOCTYPE html>
<?php
if(!isset($_COOKIE['user']))
{
	$q = $_GET['q'];
	header('Location: login.php?uri=group.php?q='.$q);
}
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Một công cụ nhỏ để index :v">
	<meta name="author" content="Như Tiến">
	<meta property="og:url" content="http://a2mda.herokuapp.com" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="A2 Index Tool" />
	<meta property="og:description" content="Một công cụ nhỏ để index :v" />
	<meta property="og:image" content="images/social.jpg" />
	<link rel="icon" href="images/favicon.ico">

	<title>11A2 Index Tool</title>

	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.css">
	
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">
	
	<!-- font awesome -->
	<link rel="stylesheet" href="assets/vendor_components/font-awesome/css/font-awesome.css">
	
	<!-- ionicons -->
	<link rel="stylesheet" href="assets/vendor_components/Ionicons/css/ionicons.css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="css/master_style.css">
	
	<!-- fox_admin skins. choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="css/skins/_all-skins.css">
	
	<!-- weather weather -->
	<link rel="stylesheet" href="assets/vendor_components/weather-icons/weather-icons.css">
	
	<!-- jvectormap -->
	<link rel="stylesheet" href="assets/vendor_components/jvectormap/jquery-jvectormap.css">
	
	<!-- date picker -->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css">
	
	<!-- daterange picker -->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">
	
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">
	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">


</head>

<body class="hold-transition skin-red sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a href="index.php" class="logo">
				<span class="logo-mini"><b>A2</b></span>
				<span class="logo-lg"><b>11A2</b>Index</span>
			</a>
			<nav class="navbar navbar-static-top">
				<a href="index.php#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">		  
					</ul>
				</div>
			</nav>
		</header>
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->      
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu" data-widget="tree">        
					<li class="header">Menu</li>
					<li>
						<a href="index.php">
							<i class="fa fa-home"></i><span>TRANG CHỦ</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li>
					<li>
						<a href="contact.php">
							<i class="fa fa-address-book-o"></i><span>DANH BẠ</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li>
					<li>
						<a href="TKB.php">
							<i class="fa fa-calendar"></i>
							<span>THỜI KHÓA BIỂU</span>
							<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
						</a></li>
					<li class="treeview active">
						<a href="blank.php#">
							<i class="fa fa-map"></i> <span>GROUP</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li class="active"><a href="group.php"><i class="fa fa-circle-o"></i> Xem bài đăng</a></li>
							<li><a href="post.php"><i class="fa fa-circle-o"></i> Đăng bài</a></li>
						</ul>
					</li>

				</ul>
			</section>
			<div class="sidebar-footer">
				<a href="credit.php" class="link" data-toggle="tooltip" title="" data-original-title="Thông tin"><i class="fa fa-info-circle"></i></a>
				<!-- item-->
				<a href="https://m.me/nhutien1808" target="_blank" class="link" data-toggle="tooltip" title="" data-original-title="Hỗ trợ"><i class="fa fa-envelope"></i></a>
				<a href="logout.php" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
			</div>
			<!-- /.sidebar -->
		</aside>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					GROUP POST

				</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="breadcrumb-item">Group Post</a></li>
				</ol>
			</section>		
			<section class="content">
				<div class="row">
<?php 
	include_once "function.php";
	make_card();
?>
				</section>
			</div>
		</div>

		<script src="./assets/vendor_components/jquery/dist/jquery.min.js"></script>

		<!-- popper -->
		<script src="./assets/vendor_components/popper/dist/popper.min.js"></script>

		<!-- Bootstrap 4.0-->
		<script src="./assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

		<!-- SlimScroll -->
		<script src="./assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>

		<!-- FastClick -->
		<script src="./assets/vendor_components/fastclick/lib/fastclick.js"></script>

		<!-- foxadmin App -->
		<script src="./js/template.js"></script>

		<!-- foxadmin for demo purposes -->
		<script src="./js/demo.js"></script>
	</body>

	</html>