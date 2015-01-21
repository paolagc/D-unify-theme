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
					<!-- Start Main Navbar -->
					<nav id="main_menu" role="navigation">
					  <?php 
					  print theme('links__system_main_menu', array(
			            'links' => $main_menu,
			            'attributes' => array(
			              'class' => array('links', 'inline', 'clearfix'),
			            ),
			            'heading' => array(
			              'text' => t('Main menu'),
			              'level' => 'h2',
			              'class' => array('element-invisible'),
			            ),
			          )); ?>
					</nav>
					<!-- End  Main Navbar -->
				</div>
			</div>
			<div class="navbar navbar-default mega-menu" role="navigation">
				<div class="container">			
					<!-- Start  logo-->		
					<?php if ($site_name || $site_slogan): ?>
				      <div class="header__name-and-slogan" id="name-and-slogan">
				        <?php if ($site_name): ?>
				          <h1 class="header__site-name" id="site-name">
				            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
				          </h1>
				        <?php endif; ?>

				        <?php if ($site_slogan): ?>
				          <div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
				        <?php endif; ?>
				      </div>
				    <?php endif; ?>
				    <!-- End  logo-->

				    <!-- Start  Secondary Navbar -->
				    <?php if ($secondary_menu): ?>
					      <nav class="header__secondary-menu" id="secondary-menu" role="navigation">
					        <?php print theme('links__system_secondary_menu', array(
					          'links' => $secondary_menu,
					          'attributes' => array(
					            'class' => array('links', 'inline', 'clearfix'),
					          ),
					          'heading' => array(
					            'text' => $secondary_menu_heading,
					            'level' => 'h2',
					            'class' => array('element-invisible'),
					          ),
					        )); ?>
	      				</nav>
   					<?php endif; ?>
   					<!-- End  Secondary Navbar -->
			</div>

			 <?php print render($page['header']); ?>

			<!-- Start breadcrumbs-->
			<div class="breadcrumbs">
				<a id="main-content"></a>
				      <?php print render($title_prefix); ?>
				      <?php if ($title): ?>
				        	<h1 class="page__title title pull-left" id="page-title"><?php print $title; ?></h1>
				      <?php endif; ?>
				      <?php print render($title_suffix); ?>				     
	      			  <?php print $breadcrumb; ?>
			</div>
			<!-- breadcrumbs-->

			<?php print render($page['highlighted']); ?>
		</header>
<!-- End header-->

