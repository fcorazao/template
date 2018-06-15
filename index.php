<?php
include_once('inc/demo.php');
include_once('inc/functions.php');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Template</title>
<link href="https://fonts.googleapis.com/css?family=Lora:400,700|Roboto:300,400,500,700" rel="stylesheet">
<link href="libs/jquery-ui/jquery-ui.min.css" rel="stylesheet">
<link href="libs/jquery-ui/jquery-ui.structure.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="libs/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="libs/chartist/chartist.min.css"/>
<link href="styles/styles.css" rel="stylesheet">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<script src="libs/jquery/jquery-3.3.1.js"></script>
<script>
  FontAwesomeConfig = { searchPseudoElements: true };
</script>
<script defer src="libs/fontawesome/js/fontawesome-all.min.js"></script>
</head>
<body>

<main>
	
	
	
	<!-- Colors -->
	
	<section id="Colors_Section">
		
		<div class="wrapper">
			
			<h3>Colors</h3>
			
			<article>
				<div class="title">
					<h4>Template colors</h4>
				</div>
				<div class="row">
					<div class="cb">
						<div class="color-box-left color-red">Red</div>
						<div class="color-box-right color-red-2">Red 2</div>
					</div>
					<div class="cb">
						<div class="color-box-left color-orange">Orange</div>
						<div class="color-box-right color-orange-2">Orange 2</div>
					</div>
					<div class="cb">
						<div class="color-box-left color-yellow">Yellow</div>
						<div class="color-box-right color-yellow-2">Yellow 2</div>
					</div>
					<div class="cb">
						<div class="color-box-left color-green">Green</div>
						<div class="color-box-right color-green-2">Green 2</div>
					</div>
					<div class="cb">
						<div class="color-box-left color-mint">Mint</div>
						<div class="color-box-right color-mint-2">Mint 2</div>
					</div>
					<div class="cb">
						<div class="color-box-left color-aqua">Aqua</div>
						<div class="color-box-right color-aqua-2">Aqua 2</div>
					</div>
				</div>
				<div class="row">
					<div class="cb">
						<div class="color-box-left color-blue">Blue</div>
						<div class="color-box-right color-blue-2">Blue 2</div>
					</div>
					<div class="cb">
						<div class="color-box-left color-purple">Purple</div>
						<div class="color-box-right color-purple-2">Purple 2</div>
					</div>
					<div class="cb">
						<div class="color-box-left color-pink">Pink</div>
						<div class="color-box-right color-pink-2">Pink 2</div>
					</div>
					<div class="cb">
						<div class="color-box-left color-light-grey t-dark">Grey light</div>
						<div class="color-box-right color-light-grey-2 t-dark">Grey light 2</div>
					</div>
					<div class="cb">
						<div class="color-box-left color-medium-grey t-dark">Grey medium</div>
						<div class="color-box-right color-medium-grey-2 t-dark">Grey medium 2</div>
					</div>
					<div class="cb">
						<div class="color-box-left color-dark-grey">Grey dark</div>
						<div class="color-box-right color-dark-grey-2">Grey dark 2</div>
					</div>
				</div>
				<div class="title">
					<h4>Corporate Colors</h4>
				</div>
				<div class="row">
					<div class="cb">
						<div class="color-box-left color-corp-main">Corp main</div>
						<div class="color-box-right color-corp-main-2">Corp main 2</div>
					</div>
					<div class="cb">
						<div class="color-box-left color-corp-sec">Corp sec</div>
						<div class="color-box-right color-corp-sec-2">Corp sec 2</div>
					</div>
					<div class="cb">
						<div class="color-box-left color-corp-alt">Corp alt</div>
						<div class="color-box-right color-corp-alt-2">Corp alt 2</div>
					</div>
				</div>
			</article>
			
		</div>
		
	</section>
		
	<hr>
	
	
	
	<!-- Buttons -->
	
	<section id="Buttons_Section">
		
		<div class="wrapper">
			
			<h3>Buttons</h3>
			
			<article>
				<div class="title">
					<h4>Colors</h4>
				</div>
				<div class="row">
					<button class="btn btn-main btn-md btn-text">Main Button</button>
					<button class="btn btn-accept btn-md btn-text">Accept Button</button>
					<button class="btn btn-save btn-md btn-text">Save Button</button>
					<button class="btn btn-cancel btn-md btn-text">Cancel Button</button>
					<button class="btn btn-back btn-md btn-text">Back Button</button>
					<button class="btn btn-info btn-md btn-text">Info Button</button>
				</div>
			</article>

			<article>
				<div class="title">
					<h4>Styles</h4>
				</div>
				<div class="row">
					<button class="btn btn-main btn-md btn-text">Text only</button>
					<button class="btn btn-main btn-md btn-text btn-round">Text only rounded</button>
					<button class="btn btn-main btn-md btn-text-icon"><i class="far fa-angle-down fa-fw"></i> Text and Icon</button>
					<button class="btn btn-main btn-md btn-text-icon btn-round"><i class="far fa-angle-down fa-fw"></i> Text and Icon Rounded</button>
					<button class="btn btn-main btn-md btn-icon"><i class="far fa-angle-down fa-fw"></i></button>
					<button class="btn btn-main btn-md btn-icon btn-round"><i class="far fa-angle-down fa-fw"></i></button>
				</div>
			</article>

			<article>
				<div class="title">
					<h4>Sizes</h4>
				</div>
				<div class="row">
					<button class="btn btn-main btn-xs btn-text">Tiny Button</button>
					<button class="btn btn-main btn-sm btn-text">Small Button</button>
					<button class="btn btn-main btn-md btn-text">Regular Button</button>
					<button class="btn btn-main btn-lg btn-text">Large Button</button>
				</div>
				<div class="row">
					<button class="btn btn-accept btn-xs btn-text btn-round">Tiny Button</button>
					<button class="btn btn-accept btn-sm btn-text btn-round">Small Button</button>
					<button class="btn btn-accept btn-md btn-text btn-round">Regular Button</button>
					<button class="btn btn-accept btn-lg btn-text btn-round">Large Button</button>
				</div>
				
				<div class="row">
					<button class="btn btn-save btn-xs btn-text-icon"><i class="far fa-angle-down fa-fw"></i> Tiny Button</button>
					<button class="btn btn-save btn-sm btn-text-icon"><i class="far fa-angle-down fa-fw"></i> Small Button</button>
					<button class="btn btn-save btn-md btn-text-icon"><i class="far fa-angle-down fa-fw"></i> Regular Button</button>
					<button class="btn btn-save btn-lg btn-text-icon"><i class="far fa-angle-down fa-fw"></i> Large Button</button>
				</div>
				<div class="row">
					<button class="btn btn-cancel btn-xs btn-text-icon btn-round"><i class="far fa-angle-down fa-fw"></i> Tiny Button</button>
					<button class="btn btn-cancel btn-sm btn-text-icon btn-round"><i class="far fa-angle-down fa-fw"></i> Small Button</button>
					<button class="btn btn-cancel btn-md btn-text-icon btn-round"><i class="far fa-angle-down fa-fw"></i> Regular Button</button>
					<button class="btn btn-cancel btn-lg btn-text-icon btn-round"><i class="far fa-angle-down fa-fw"></i> Large Button</button>
				</div>
				
				<div class="row">
					<button class="btn btn-back btn-xs btn-icon"><i class="far fa-angle-down fa-fw"></i></button>
					<button class="btn btn-back btn-sm btn-icon"><i class="far fa-angle-down fa-fw"></i></button>
					<button class="btn btn-back btn-md btn-icon"><i class="far fa-angle-down fa-fw"></i></button>
					<button class="btn btn-back btn-lg btn-icon"><i class="far fa-angle-down fa-fw"></i></button>
				</div>
				<div class="row">
					<button class="btn btn-info btn-xs btn-icon btn-round"><i class="far fa-angle-down fa-fw"></i></button>
					<button class="btn btn-info btn-sm btn-icon btn-round"><i class="far fa-angle-down fa-fw"></i></button>
					<button class="btn btn-info btn-md btn-icon btn-round"><i class="far fa-angle-down fa-fw"></i></button>
					<button class="btn btn-info btn-lg btn-icon btn-round"><i class="far fa-angle-down fa-fw"></i></button>
				</div>
			</article>
			
		</div>
		
	</section>
		
	<hr>
	
	
	
	<!-- Forms -->
	
	<section id="Forms_Section">
		
		<div class="wrapper">
			
			<h3>Forms</h3>
			
			<article>
				<form>
					
					<div class="row">
						<div class="col-3">
							<label class="text success with-icon-right">
								<span class="border"></span>
								<input type="text">
								<span class="label">Success input</span>
								<span class="icon right"><i class="far fa-check fa-fw fa-lg"></i></span>
							</label>
						</div>
						<div class="col-3">
							<label class="text error with-icon-right">
								<span class="border"></span>
								<input type="text">
								<span class="label">Error input</span>
								<span class="icon right"><i class="far fa-times fa-fw fa-lg"></i></span>
							</label>
						</div>
						<div class="col-6">
							<label class="textarea warning with-icon-right">
								<span class="border"></span>
								<textarea></textarea>
								<span class="label">Warning textarea</span>
								<span class="icon right"><i class="far fa-exclamation-circle fa-fw fa-lg"></i></span>
							</label>
						</div>
					</div>
					
					<div class="row">
						<div class="col-3">
							<label class="text">
								<span class="border"></span>
								<input type="text">
								<span class="label">Basic input</span>
							</label>
						</div>
						<div class="col-3">
							<label class="text with-icon-left">
								<span class="border"></span>
								<input type="text">
								<span class="label">Input with icon</span>
								<span class="icon left"><i class="fas fa-user fa-fw"></i></span>
							</label>
						</div>
						<div class="col-6">
							<label class="textarea with-icon-left">
								<span class="border"></span>
								<textarea></textarea>
								<span class="label">Textarea with icon</span>
								<span class="icon left"><i class="far fa-user fa-fw fa-lg"></i></span>
							</label>
						</div>
					</div>
					
					<div class="row">
						<div class="col-3">
							<div class="title">
								<h4>Radio buttons</h4>
							</div>
							<label for="radio-1" class="radchk success"><span class="label">Success</span></label>
							<input type="radio" name="radio-1" id="radio-1" class="checkradio">
							<label for="radio-2" class="radchk info"><span class="label">Info</span></label>
							<input type="radio" name="radio-1" id="radio-2" class="checkradio">
							<label for="radio-3" class="radchk warning"><span class="label">Warning</span></label>
							<input type="radio" name="radio-1" id="radio-3" class="checkradio">
						</div>
						<div class="col-3">
							<div class="title">
								<h4>Checkbox</h4>
							</div>
							<label for="checkbox-1" class="radchk error"><span class="label">Error</span>
							<input type="checkbox" name="checkbox-1" id="checkbox-1" class="checkradio"></label>
							<label for="checkbox-2" class="radchk success"><span class="label">Success</span>
							<input type="checkbox" name="checkbox-2" id="checkbox-2" class="checkradio"></label>
							<label for="checkbox-3" class="radchk info"><span class="label">Info</span>
							<input type="checkbox" name="checkbox-3" id="checkbox-3" class="checkradio"></label>
						</div>
						<div class="col-6">
							<label class="textarea">
								<span class="border"></span>
								<textarea></textarea>
								<span class="label">Regular textarea</span>
							</label>
						</div>
					</div>
					
				</form>
			</article>
			
		</div>
		
	</section>
		
	<hr>
	
	
	
	<!-- Navigation -->
	
	<section id="Navigation_Section">
		
		<div class="wrapper">
			
			<h3>Navigation</h3>
			
			<div class="row">
				<div class="col-6">
					
					<article>
						<div class="title">
							<h4>Text menu</h4>
						</div>
						<?php build_navigation('comment','text','short',$items,true); ?>
					</article>
					
				</div>
				<div class="col-6">
					
					<article>
						<div class="title">
							<h4>Icon menu</h4>
						</div>
						<?php build_navigation('info','icon','short',$items_icon,true,'Icon menu'); ?>
					</article>
					
				</div>
			</div>
			
		</div>

		<div class="row">
			
			<?php build_navigation('info','text','large',$items,true); ?>
			
			<?php build_navigation('success','icon','large',$items_icon,true,'Success nav'); ?>
			
			<?php build_navigation('error','text','large',$items,true); ?>
			
			<?php build_navigation('warning','icon','large',$items_icon,true,'Warning nav'); ?>
			
			<?php build_navigation('comment','text','large',$items,true); ?>
			
		</div>
		
		<div class="wrapper">
			
			<h3>Vertical navigation</h3>
			
			<div class="row">
				<div class="col-6">
					
					<article>
						<div class="title">
							<h4>Menu</h4>
						</div>
						<div class="min_height_box">
							<?php build_vertical_navigation('error','open',false,$items_aside,true,'home','id_1'); ?>
						</div>
					</article>
					
				</div>
				<div class="col-6">
					
					<article>
						<div class="title">
							<h4>Menu</h4>
						</div>
						<div class="min_height_box">
							<?php build_vertical_navigation('comment','closed',true,$items_aside,true,'home','id_2'); ?>
						</div>
					</article>
					
				</div>
			</div>
			
		</div>
		
	</section>
	
	<hr>
	
	
	
	<!-- Misc -->
	
	<section id="Navigation_Section">
		
		<div class="wrapper">
			
			<h3>Misc</h3>
			
			<div class="row">
				<div class="col-6">
					
					<article>
						<div class="title">
							<h4>Progress Bars</h4>
						</div>
						<div id="progress_bar_1" class="progress_bar info"></div>
						<div id="progress_bar_2" class="progress_bar success"></div>
						<div id="progress_bar_3" class="progress_bar warning"></div>
						<div id="progress_bar_4" class="progress_bar error"></div>
					</article>
					
					<article>
						<div class="title">
							<h4>Navigation boxes</h4>
						</div>
						<div class="nav_boxes">
							<a class="nav_box active">
								<i class="far fa-home fa-fw fa-lg"></i>
								<span>Home</span>
							</a>
							<a class="nav_box">
								<i class="far fa-folder-open fa-fw fa-lg"></i>
								<span>Files</span>
							</a>
							<a class="nav_box">
								<i class="far fa-map-signs fa-fw fa-lg"></i>
								<span>Site map</span>
							</a>
							<a class="nav_box">
								<i class="far fa-users fa-fw fa-lg"></i>
								<span>Users</span>
							</a>
						</div>
					</article>
					
				</div>
				<div class="col-6">
					
					<article>
						<div class="title">
							<h4>Pagination</h4>
						</div>
						<ul class="pagination">
							<li><a href="#" class="words"><i class="fas fa-caret-left fa-sm"></i> Prev</a></li>
							<li>...</li>
							<li><a href="#">5</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#" class="current">7</a></li>
							<li><a href="#">8</a></li>
							<li><a href="#">9</a></li>
							<li>...</li>
							<li><a href="#" class="words">Next <i class="fas fa-caret-right fa-sm"></i></a></li>
						</ul>
					</article>
					
					<article>
						<div class="title">
							<h4>Sliders</h4>
						</div>
						<div id="slider_1" class="slider info"></div>
						<div id="slider_range_1" class="slider_range success"></div>
						<div id="slider_2" class="slider warning"></div>
						<div id="slider_range_2" class="slider_range error"></div>
					</article>
					
				</div>
			</div>
			
		</div>
		
	</section>
	
	<hr>
	
	
	
	<!-- Cards & Tabs -->
	
	<section id="Navigation_Section">
		
		<div class="wrapper">
			
			<h3>Cards & Tabs</h3>
			
			<div class="row">
				<div class="col-6">
					
					<article>
						<div class="title">
							<h4>White cards</h4>
						</div>
						<div class="card card-regular" id="tabs-1">
							<header>
								<nav class="hor-nav comment nav-text large">
									<ul>
										<li><a href="#tabs-1-1" class="outer">Link</a></li>
										<li><a href="#tabs-1-2" class="outer">Link</a></li>
										<li><a href="#tabs-1-3" class="outer">Link</a></li>
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
					</article>
					
				</div>
				<div class="col-6">
					
					<article>
						<div class="title">
							<h4>Clear cards</h4>
						</div>
						<div class="card card-clear" id="tabs-2">
							<header>
								<nav class="hor-nav info nav-text large">
									<ul>
										<li><a href="#tabs-2-1" class="outer">Link</a></li>
										<li><a href="#tabs-2-2" class="outer">Link</a></li>
										<li><a href="#tabs-2-3" class="outer">Link</a></li>
									</ul>
								</nav>
							</header>
							<div id="tabs-2-1" class="content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste in optio eligendi molestiae aliquam nam unde sit nisi qui maxime et esse dolorem ad similique doloribus quam ipsum, est excepturi.</p>
							</div>
							<div id="tabs-2-2" class="content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							</div>
							<div id="tabs-2-3" class="content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste in optio eligendi molestiae aliquam nam unde sit nisi qui maxime et esse dolorem ad.  Iste in optio eligendi molestiae aliquam nam unde sit nisi qui maxime et esse dolorem ad similique doloribus quam ipsum, est excepturi.</p>
							</div>
						</div>
					</article>
					
				</div>
			</div>
			
		</div>
		
	</section>
	
	<hr>
	
	
	
	<!-- Notifications -->
	
	<section id="Notifications_Section">
		
		<div class="wrapper">
			
			<h3>Notifications</h3>
			
			<article>
				<?php print_notification('error','short','Error','This is an alert'); ?>
				<?php print_notification('warning','short','Warning','Maybe you should look into this'); ?>
				<?php print_notification('success','short','Success','The process was completed succesfully'); ?>
				<?php print_notification('comment','short','Information','You should know this'); ?>
			</article>
			
		</div>
		
		<?php print_notification('error','large','Error','This is an alert'); ?>
		<?php print_notification('warning','large','Warning','Maybe you should look into this'); ?>
		<?php print_notification('success','large','Success','The process was completed succesfully'); ?>
		<?php print_notification('comment','large','Information','You should know this'); ?>
		
	</section>
	
	<hr>
	
	
	
	<!-- Typography -->
	
	<section id="Typography_Section">
		
		<div class="wrapper">
			
			<h3>Typography</h3>
			
			<article class="typography">
				
				<div class="row">
					<div class="type_line"><span>Heading 1</span><h1>This is a test</h1></div>
				</div>
				<div class="row">
					<div class="type_line"><span>Heading 2</span><h2>This is a test</h2></div>
				</div>
				<div class="row">
					<div class="type_line"><span>Heading 3</span><h3>This is a test</h3></div>
				</div>
				<div class="row">
					<div class="type_line"><span>Heading 4</span><h4>This is a test</h4></div>
				</div>
				<div class="row">
					<div class="type_line"><span>Heading 5</span><h5>This is a test</h5></div>
				</div>
				<div class="row">
					<div class="type_line"><span>Heading 6</span><h6>This is a test</h6></div>
				</div>
				<div class="row">
					<div class="type_line"><span>Parragraph</span><p>I remember the day that he came in I can't believe how long it's been Like a poet, he began to play Just an old friend that hung with the band A drinkin' man he had no plan But he played the 'Bird Played it for free</p></div>
				</div>
				<div class="row">
					<div class="type_line"><span>Quote</span><blockquote>If I leave here tomorrow Would you still remember me? For I must be traveling on, now Cause there's too many places I've got to see But, if I stayed here with you, girl Things just couldn't be the same Cause I'm as free as a bird now And this bird you can not change Oh, oh, oh, oh, oh And this bird you can not change And this bird you can not change Lord knows, I can't change<footer>Lynyrd Skynyrd, Free Bird</footer></blockquote></div>
				</div>
				
			</article>
		</div>
		
	</section>
	
	<hr>
	
	
	
	<!-- Images -->
	
	<section id="Images_Section">
		
		<div class="wrapper">
			
			<h3>Images</h3>
			
			<article>

				<div class="row">
					<h4>Styles</h4>
					<div class="col-2">
						<figure class="square regular">
							<img src="img/lindsey-stirling.jpg">
							<figcaption>Normal image</figcaption>
						</figure>
					</div>
					<div class="col-2">
						<figure class="square rounded">
							<img src="img/lindsey-stirling.jpg">
							<figcaption>Rounded image</figcaption>
						</figure>
					</div>
					<div class="col-2">
						<figure class="circle">
							<img src="img/lindsey-stirling.jpg">
							<figcaption>Circle image</figcaption>
						</figure>
					</div>
					<div class="col-2">
						<figure class="square regular shadow-regular">
							<img src="img/lindsey-stirling.jpg">
							<figcaption>Normal raised image</figcaption>
						</figure>
					</div>
					<div class="col-2">
						<figure class="square rounded shadow-regular">
							<img src="img/lindsey-stirling.jpg">
							<figcaption>Rounded raised image</figcaption>
						</figure>
					</div>
					<div class="col-2">
						<figure class="circle shadow-regular">
							<img src="img/lindsey-stirling.jpg">
							<figcaption>Circle raised<br>image</figcaption>
						</figure>
					</div>
				</div>

				<div class="row">
					<h4>Formats</h4>
					<div class="col-2">
						<figure class="square rounded shadow-regular">
							<img src="img/lindsey-stirling.jpg">
							<figcaption>Responsive square</figcaption>
						</figure>
					</div>
					<div class="col-2">
						<figure class="wide rounded shadow-regular">
							<img src="img/lindsey-stirling.jpg">
							<figcaption>Responsive wide</figcaption>
						</figure>
					</div>
					<div class="col-2">
						<figure class="ultrawide rounded shadow-regular">
							<img src="img/lindsey-stirling.jpg">
							<figcaption>Responsive ultrawide</figcaption>
						</figure>
					</div>
					<div class="col-2">
						<figure class="circle shadow-regular">
							<img src="img/lindsey-stirling.jpg">
							<figcaption>Responsive<br>Circle</figcaption>
						</figure>
					</div>
					<div class="col-2">
						<figure class="regular rounded shadow-regular">
							<img src="img/lindsey-stirling.jpg">
							<figcaption>Default image size</figcaption>
						</figure>
					</div>
					<div class="col-2">

					</div>
				</div>
				
			</article>
			
		</div>
		
	</section>
	
	<hr>
	
	
	
	<!-- Javascript -->
	
	<section id="Javascript_Section">
		
		<div class="wrapper">
			
			<h3>Javascript elements</h3>
			
			<div class="row">
				
				<div class="col-3">
					<article>
						<h4>Launch Modal</h4>
						<a class="btn btn-info btn-md btn-text" id="modal_trigger">Launch modal window</a>
					</article>
				</div>
				<div class="col-3">
					&nbsp;
				</div>
				<div class="col-6">
					<article>
						<h4>Popovers</h4>
						<a class="btn btn-md btn-accept btn-text popover_trigger">Left<span class="popover tooltip tooltip-left">This a very cool popover</span></a>
						<a class="btn btn-md btn-accept btn-text popover_trigger">Top<span class="popover tooltip tooltip-top">This a very cool popover</span></a>
						<a class="btn btn-md btn-accept btn-text popover_trigger">Bottom<span class="popover tooltip tooltip-bottom">This a very cool popover</span></a>
						<a class="btn btn-md btn-accept btn-text popover_trigger">Right<span class="popover tooltip tooltip-right">This a very cool popover</span></a>
					</article>
				</div>
				
			</div>
			
			<div class="row">
				
				<div class="col-3">
					<article>
						<h4>Datepicker</h4>
						<form>
							<label class="text">
								<span class="border"></span>
								<input type="text" id="datepicker" placeholder="<?php echo date("d/m/Y"); ?>">
							</label>
						</form>
					</article>
				</div>
				<div class="col-3">
					&nbsp;
				</div>
				<div class="col-6">
					<article>
						<h4>Tooltips</h4>
						<a class="btn btn-md btn-save btn-text tooltip_trigger">Left<span class="tooltip tooltip-left">This a very cool tooltip</span></a>
						<a class="btn btn-md btn-save btn-text tooltip_trigger">Top<span class="tooltip tooltip-top">This a very cool tooltip</span></a>
						<a class="btn btn-md btn-save btn-text tooltip_trigger">Bottom<span class="tooltip tooltip-bottom">This a very cool tooltip</span></a>
						<a class="btn btn-md btn-save btn-text tooltip_trigger">Right<span class="tooltip tooltip-right">This a very cool tooltip</span></a>
					</article>
				</div>
				
			</div>
			
			<div class="row">
				
				<div class="col-3">
					&nbsp;
				</div>
				<div class="col-3">
					&nbsp;
				</div>
				<div class="col-6">
					<article>
						<h4>Dropdowns</h4>
						
						<div class="dropdown active warning no-shadow">
							<a class="btn btn-back btn-md btn-text-icon">Ver <span>20</span> <i class="fas fa-chevron-down fa-fw"></i></a>
							<ul>
								<li class="filter_count" data-val="5">5</li>
								<li class="filter_count" data-val="10">10</li>
								<li class="filter_count" data-val="20">20</li>
								<li class="filter_count" data-val="50">50</li>
								<li class="filter_count" data-val="-1">All</li>
							</ul>
						</div>
						
						<div class="dropdown active info no-shadow">
							<a class="btn btn-back btn-md btn-text-icon">With icons: <span>All</span><i class="fas fa-chevron-down fa-fw"></i></a>
							<ul class="with-icons">
								<li class="filter_count" data-val="allergies"><span><i class="fas fa-check fa-fw"></i></span>Correct</li>
								<li class="filter_count" data-val="ambulance"><span><i class="fas fa-times fa-fw"></i></span>Incorrect</li>
								<li class="filter_count" data-val="anchor"><span><i class="fas fa-anchor fa-fw"></i></span>Boat anchor</li>
								<li class="filter_count" data-val="ban"><span><i class="fas fa-ban fa-fw"></i></span>Prohibited</li>
								<li class="filter_count" data-val="band-aid"><span><i class="far fa-band-aidrfa-fw"></i></span>A regular band aid</li>
								<li class="filter_count text-only" data-val="-1">All</li>
							</ul>
						</div>
						
						<div class="dropdown active error no-shadow">
							<a class="btn btn-back btn-md btn-text-icon">Right: <span>All</span><i class="fas fa-chevron-down fa-fw"></i></a>
							<ul class="with-icons align-right">
								<li class="filter_count" data-val="allergies"><span><i class="fas fa-check fa-fw"></i></span>Correct</li>
								<li class="filter_count" data-val="ambulance"><span><i class="fas fa-times fa-fw"></i></span>Incorrect</li>
								<li class="filter_count" data-val="anchor"><span><i class="fas fa-anchor fa-fw"></i></span>Boat anchor</li>
								<li class="filter_count" data-val="ban"><span><i class="fas fa-ban fa-fw"></i></span>Prohibited</li>
								<li class="filter_count" data-val="band-aid"><span><i class="far fa-band-aidrfa-fw"></i></span>A regular band aid</li>
								<li class="filter_count text-only" data-val="-1">All</li>
							</ul>
						</div>
						
					</article>
				</div>
				
			</div>
			
			<div class="row">
				<article>
					<h4 class="center_text">Carousel</h4>
					<div id="carousel">
						<div class="carousel">
							<div><img src="img/carousel-1.jpg"><div class="slick-caption">Testing testing</div></div>
							<div><img src="img/carousel-2.jpg"><div class="slick-caption">Another test</div></div>
							<div><img src="img/carousel-3.jpg"></div>
							<div><img src="img/carousel-4.jpg"><div class="slick-caption">One more test</div></div>
							<div><img src="img/carousel-5.jpg"></div>
						</div>
					</div>
				</article>
			</div>
			
		</div>
		
	</section>
	
	<hr>
	
	
	
	<!-- Tables -->
	
	<section id="Tables_Section">
		
		<div class="wrapper">
			
			<h3>Tables</h3>
			
			<?php build_table('test-table',NULL,$columns,$data,'active','test-view','test-icon',$table_style,5); ?>
			
		</div>
		
	</section>
	
	<hr>
	
	
	
	<!-- Graphs -->
	
	<section id="Graphs_Section">
		
		<div class="wrapper">
			
			<h3>Graphs</h3>
			
			<?php
			
			$labels_1 = "'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'";
			$series_1 = '[12, 9, 7, 8, 5],[2, 1, 3.5, 7, 3],[1, 3, 4, 5, 6],[12, 11, 13.5, 17, 13],[5, 6, 4, 7, 9]';
			
			$labels_2 = '1,2,3,4';
			$series_2 = '[7,12,15,18]';
			
			$series_donut_1 = '1,5,5,7,10';
			
			$series_pie_1 = '4,5,5,7,8,3,2,10,3';
			
			$bar_labels_1 = "'First quarter of the year', 'Second quarter of the year', 'Third quarter of the year', 'Fourth quarter of the year'";
			$bar_series_1 = '[60000, 40000, 80000, 70000],[40000, 30000, 70000, 65000],[8000, 3000, 10000, 6000]';
			
			$bar_labels_2 = "'Q1', 'Q2', 'Q3', 'Q4'";
			$bar_series_2 = '[800000, 1200000, 1400000, 1300000],[200000, 400000, 500000, 300000],[100000, 200000, 400000, 600000]';
			
			?>
			
			<div class="row">
				<div class="col-4">
					<?php build_chart('test-chart','bar',$bar_labels_1,$bar_series_1,'mixed'); ?>
				</div>
				<div class="col-4">
					<?php build_chart('second-chart','donut','',$series_donut_1,'error'); ?>
				</div>
				<div class="col-4">
					<?php build_chart('another-chart','bar-stacked',$bar_labels_2,$bar_series_2,'success'); ?>
				</div>
			</div>
			
			<div class="row">
				<div class="col-4">
					<?php build_chart('test-chart-2','line',$labels_2,$series_2,'info line-dashed'); ?>
				</div>
				<div class="col-4">
					<?php build_chart('second-chart-2','pie','',$series_pie_1,'mixed'); ?>
				</div>
				<div class="col-4">
					<?php build_chart('another-chart-2','line',$labels_1,$series_1,'corp-mixed line-solid'); ?>
				</div>
			</div>
			
		</div>
		
	</section>
	
	<hr>
	
	
	
	<!-- Examples -->
	
	<section id="Examples_Section">
		
		<div class="wrapper">
			
			<h3>Example</h3>
			
			<div class="row">
				<div class="col-4">
					&nbsp;
				</div>
				<div class="col-4">
					
					
					
					<div class="card card-regular" id="tabs-1">
						<header class="header bk-main">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel placeat nisi fugit repellendus accusamus repudiandae hic, sapiente ipsam doloremque dignissimos maiores dicta et, in laudantium tenetur molestiae. Rerum consequatur, modi.</p>
						</header>
						<div class="content">
							<form>
								<div class="row">
									<div class="col-2">&nbsp;</div>
									<div class="col-8">
										<h6 class="center_text">Login here</h6>
										<br>
										<fieldset>
											<label class="text with-icon-left">
												<span class="border main"></span>
												<input type="text" name="user_login">
												<span class="label">Username</span>
												<span class="icon left"><i class="fas fa-user fa-fw"></i></span>
											</label>
										</fieldset>
										<br>
										<fieldset>
											<label class="text with-icon-left">
												<span class="border main"></span>
												<input type="password" name="user_password">
												<span class="label">Password</span>
												<span class="icon left"><i class="fas fa-lock fa-fw"></i></span>
											</label>
										</fieldset>
										<br><br>
										<fieldset class="center_text">
											<button class="btn btn-main btn-md btn-text">Login</button>
										</fieldset>
										<p class="center_text"><a href="#">Or create an account</a></p>
										<br>
									</div>
									<div class="col-2">&nbsp;</div>
								</div>
							</form>
						</div>
					</div>
					
					
					
				</div>
				<div class="col-4">
					&nbsp;
				</div>
			</div>
			
		</div>
		
		
		
	</section>
</main>




<div id="modal">
	<header>
		<h4>This a modal test</h4>
	</header>
	<p><strong>Testing testing</strong><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus optio itaque voluptate quod, est recusandae illo odit, id totam odio natus veritatis quis molestiae blanditiis aspernatur fuga. Accusamus, blanditiis, repellendus!</p>
	<footer>
		<a class="btn btn-md btn-cancel btn-text">Cancel</a>
		<a class="btn btn-md btn-accept btn-text">Accept</a>
	</footer>
</div>
<div id="modal_background"></div>

<script src="libs/jquery-ui/jquery-ui.min.js"></script>

<script src="libs/autosize/autosize.min.js"></script>
<script src="libs/slick/slick.min.js"></script>
	
<script src="js/functions.js"></script>

</body>
</html>