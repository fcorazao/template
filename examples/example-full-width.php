<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/template/inc/demo.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/template/inc/functions.php');
$currentURL = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$baseURL = 'http://' . $_SERVER['HTTP_HOST'].'/template/';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Template</title>
<base href="<?php echo $baseURL; ?>">
<link href="https://fonts.googleapis.com/css?family=Lora:400,700|Roboto:300,400,500,700" rel="stylesheet">
<link href="libs/jquery-ui/jquery-ui.min.css" rel="stylesheet">
<link href="libs/jquery-ui/jquery-ui.structure.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="libs/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="libs/chartist/chartist.min.css"/>
<link rel="stylesheet" type="text/css" href="libs/chartist/chartist.responsive.css"/>
<link href="styles/styles.css" rel="stylesheet">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<script src="libs/jquery/jquery-3.3.1.js"></script>
<script src="libs/chartist/chartist.responsive.js"></script>
<script>
  FontAwesomeConfig = { searchPseudoElements: true };
</script>
<script defer src="libs/fontawesome/js/fontawesome-all.min.js"></script>
</head>
	
<body>
		
	<header id="header">
		<?php build_navigation('dark','text','full',$items,true,'',true); ?>
	</header>

	<section class="full-width-layout">
		
		<main id="main" class="bk-white full-on-small">
			
			<div class="row">
				<article>
					<div id="carousel">
						<div class="carousel">
							<div><img src="img/carousel-fw-1.jpg"><div class="slick-caption">Testing testing</div></div>
							<div><img src="img/carousel-fw-2.jpg"><div class="slick-caption">Another test</div></div>
							<div><img src="img/carousel-fw-3.jpg"></div>
							<div><img src="img/carousel-fw-4.jpg"><div class="slick-caption">One more test</div></div>
							<div><img src="img/carousel-fw-5.jpg"></div>
						</div>
					</div>
				</article>
			</div>
			
			<?php

			$series_donut_1 = '1,5,5,7,10';

			$bar_labels_1 = "'First quarter of the year', 'Second quarter of the year', 'Third quarter of the year', 'Fourth quarter of the year'";
			$bar_series_1 = '[60000, 40000, 80000, 70000],[40000, 30000, 70000, 65000],[8000, 3000, 10000, 6000]';

			$bar_labels_2 = "'Q1', 'Q2', 'Q3', 'Q4'";
			$bar_series_2 = '[800000, 1200000, 1400000, 1300000],[200000, 400000, 500000, 300000],[100000, 200000, 400000, 600000]';

			?>

			<div class="row margin-left margin-right">
				<div class="col-4 half-on-medium full-on-tiny ct-to-mayor-third-on-tiny">
					<?php build_chart('test-chart','bar',$bar_labels_1,$bar_series_1,'mixed','ct-major-third'); ?>
				</div>
				<div class="col-4 half-on-medium full-on-tiny ct-to-mayor-third-on-tiny">
					<?php build_chart('second-chart','donut','',$series_donut_1,'error','ct-major-third'); ?>
				</div>
				<div class="col-4 full-on-medium ct-to-double-octave-on-medium ct-to-mayor-third-on-tiny">
					<?php build_chart('another-chart','bar-stacked',$bar_labels_2,$bar_series_2,'success','ct-major-third'); ?>
				</div>
			</div>

			<div class="row margin-left margin-right">
				<div class="col-12 full-on-small">
					<?php build_table('test-table',NULL,$columns,$data,'active','test-view','test-icon',$table_style,5); ?>
				</div>
			</div>

			<div class="row">
				<div class="col-6 full-on-medium">
					<div class="card card-regular" id="tabs-1">
						<header>
							<nav class="hor-nav comment nav-text large">
								<ul>
									<li><a href="<?php echo $currentURL; ?>#tabs-1-1" class="outer">Link</a></li>
									<li><a href="<?php echo $currentURL; ?>#tabs-1-2" class="outer">Link</a></li>
									<li><a href="<?php echo $currentURL; ?>#tabs-1-3" class="outer">Link</a></li>
								</ul>
							</nav>
						</header>
						<div id="tabs-1-1" class="content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste in optio eligendi molestiae aliquam nam unde sit nisi qui maxime et esse dolorem ad similique doloribus quam ipsum, est excepturi.</p>
							<p class="text-right"><a class="btn btn-info btn-md btn-text">Accept</a></p>
						</div>
						<div id="tabs-1-2" class="content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste in optio eligendi molestiae aliquam nam unde sit nisi qui maxime et esse dolorem ad similique doloribus quam ipsum, est excepturi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus laboriosam modi eum quo voluptate distinctio, vel soluta eos officiis laborum earum, iusto error ullam adipisci ex, at nulla illum dolore.</p>
						</div>
						<div id="tabs-1-3" class="content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste in optio eligendi molestiae aliquam nam unde sit nisi qui maxime et esse dolorem ad similique doloribus quam ipsum, est excepturi. Bleh nisi qui maxime et esse dolorem ad similique doloribus quam ipsum, est excepturi.</p>
							<p class="text-right"><a class="btn btn-back btn-md btn-text">Volver</a><a class="btn btn-info btn-md btn-text">Accept</a></p>
						</div>
					</div>
				</div>
				<div class="col-6 full-on-medium">

				</div>
			</div>

		</main>
		
	</section>
	
	<script src="libs/jquery-ui/jquery-ui.min.js"></script>

	<script src="libs/autosize/autosize.min.js"></script>
	<script src="libs/slick/slick.min.js"></script>

	<script src="js/functions.js"></script>

</body>
</html>