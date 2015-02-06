<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
<!-- Start header-->
		<header class="header" id="header" role="banner">
			<div class="topbar">
				<div class="container">
					<!-- Start User Navbar -->
					<?php if ($secondary_menu): ?>
					      <nav class="header__secondary-menu" id="secondary-menu" role="navigation">
					        <?php print theme('links__system_secondary_menu', array(
					          'links' => $secondary_menu,
					          'attributes' => array(
					            'class' => array('links', 'inline','pull-right'),
					          ),
					        )); ?>
	      				</nav>
   					<?php endif; ?>
					<!-- End  User Navbar -->
				</div>
			</div>
			<div class="navbar navbar-default mega-menu" role="navigation">
				<div class="container">
						<div class="navbar-header">
							<?php if($logo): ?>
					          <div id="logo-container">
	       						 <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
					          </div>
					        <?php endif; ?>

					        <?php if ($site_name || $site_slogan): ?>
					        <?php if ($site_name): ?>
					          <h1 class="site-branding__name">
					            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
					          </h1>
					        <?php endif; ?>

					        <?php if ($site_slogan): ?>
					          <h2 class="site-slogan"><?php print $site_slogan; ?></h2>
					        <?php endif; ?>
					      <?php endif; ?>
						</div>

						<div class="collapse navbar-collapse navbar-responsive-collapse">
							<!-- Start Main Navbar -->
						    <nav id="main_menu" role="navigation">
							<?php 
							  print theme('links__system_main_menu', array(
					            'links' => $main_menu,
					            'attributes' => array(
					              'class' => array('links', 'inline'),
					            ),
					            'heading' => array(
					              'text' => t('Main menu'),
					              'level' => 'h2',
					              'class' => array('element-invisible'),
					            ),
					          )); ?>
					          <i class="search fa search-btn fa-times"></i>
							</nav>
		   					<!-- End Main Navbar -->
						</div>	
				</div>			    
			</div>

			 <?php  print render($page['header']); ?>

			 
			 <?php if ($page['highlighted']): ?>
			 	<!-- Start higlighted-->
			 	<div id="highlighted">
			 		<?php print render($page['highlighted']); ?>
			 	</div>
			 	<!-- End higlighted-->
			 <?php endif; ?>
			 

			<!-- Start breadcrumbs-->
			<div class="breadcrumbs">
				<div class="container">
					<div id="page-title" class="pull-left">
						<a id="main-content"></a>
					      <?php print render($title_prefix); ?>
					      <?php if ($title): ?>
					        	<h2 class="page__title title pull-left" id="page-title"><?php print $title; ?></h2>
					      <?php endif; ?>
					      <?php print render($title_suffix); ?>	
					</div>
				 <!--start breadcrumb -->
				<?php if($breadcrumb): ?>
					<div  class="pull-right breadcrumbs">
					    <?php print $breadcrumb; ?>
					</div>
				<?php endif; ?>
				<!-- end breadcrumb -->
				</div>
			</div>
			<!-- breadcrumbs-->
		</header>
<!-- End header-->


<div id="wrapper">
	<div id="content">
		<div class="container">

			<?php if( $page['top']) : ?>
					<!-- Start aside-->
					<div class="row region" role="complementary">
						<?php print render($page['top']);?>
					</div>
			<?php endif ?>

			<div class="row">

				<?php if( $page['sidebar']) : ?>
					<!-- Start aside-->
					<aside class="region col-md-3" role="complementary">
						<?php print render($page['sidebar']);?>
					</aside>
					<!-- End aside-->
				<?php endif ?>


				<!-- Start main content-->
				<section id="main-content" class="col-md-<?php print  ($page['sidebar'])? 9 : 12;  ?>" role="main">
					<a id="main-content"></a>
				    <?php print render($title_suffix); ?>
				    <?php print $messages; ?>
				    <?php print render($tabs); ?>
				    <?php if ($action_links): ?>
				    <ul class="action-links"><?php print render($action_links); ?></ul>
				    <?php endif; ?>
				    <?php print render($page['content']); ?>
				</section>
				<!-- End main content-->
			</div>

			<?php if( $page['bottom']) : ?>
					<!-- Start aside-->
					<div class="row region" role="complementary">
						<?php print render($page['bottom']);?>
					</div>
			<?php endif ?>
			

		</div>
	</div>
</div>

<footer class="footer">
	<div class="inner container">
		<?php print render($page['bottom']);?>
	</div>
	<div class="copyright">
		<div class="container">

		</div>
	</div>
</footer>
