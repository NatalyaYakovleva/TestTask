<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>	
<!DOCTYPE HTML>
<html>
	<head>
		<title><?$APPLICATION->ShowTitle();?></title>
		<?$APPLICATION->ShowHead();?>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!-- Scripts -->
		<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.min.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.dropotron.min.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/browser.min.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/breakpoints.min.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/util.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/main.js"></script>
		<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/main.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<h1><a href="index.html" id="logo">Arcana <em>by HTML5 UP</em></a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="index.html">Home</a></li>
								<li>
									<a href="#">Dropdown</a>
									<ul>
										<li><a href="#">Lorem dolor</a></li>
										<li><a href="#">Magna phasellus</a></li>
										<li><a href="#">Etiam sed tempus</a></li>
										<li>
											<a href="#">Submenu</a>
											<ul>
												<li><a href="#">Lorem dolor</a></li>
												<li><a href="#">Phasellus magna</a></li>
												<li><a href="#">Magna phasellus</a></li>
												<li><a href="#">Etiam nisl</a></li>
												<li><a href="#">Veroeros feugiat</a></li>
											</ul>
										</li>
										<li><a href="#">Veroeros feugiat</a></li>
									</ul>
								</li>
								<li><a href="left-sidebar.html">Left Sidebar</a></li>
								<li><a href="right-sidebar.html">Right Sidebar</a></li>
								<li><a href="two-sidebar.html">Two Sidebar</a></li>
								<li><a href="no-sidebar.html">No Sidebar</a></li>
							</ul>
						</nav>

				</div>						