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
					            'class' => array('links', 'inline', 'clearfix','pull-right'),
					          ),
					        )); ?>
	      				</nav>
   					<?php endif; ?>
					<!-- End  User Navbar -->
				</div>
			</div>
			<div class="navbar navbar-default mega-menu" role="navigation">
				<div class="container">			
					<div class="class-col-md-3">
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
					</div>
					<div class="col-md-9">
						<!-- Start Main Navbar -->
					    <nav id="main_menu" role="navigation">
						<?php 
						  print theme('links__system_main_menu', array(
				            'links' => $main_menu,
				            'attributes' => array(
				              'class' => array('links', 'inline', 'clearfix','pull-right'),
				            ),
				            'heading' => array(
				              'text' => t('Main menu'),
				              'level' => 'h2',
				              'class' => array('element-invisible'),
				            ),
				          )); ?>
						</nav>
	   					<!-- End Main Navbar -->
					</div>	
				</div>			    
			</div>

			 <?php 
			 $header = $page['header'];
			 print render($header);
			  ?>

			 <!-- Start higlighted-->
			 <?php if ($page['highlighted']): ?>
			 	<div id="highlighted">
			 		<?php
			 			$highlighted = $page['highlighted'];
			 		 	print render($highlighted);
			 		 ?>
			 	</div>
			 <?php endif; ?>
			 <!-- End higlighted-->

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
		</header>
<!-- End header-->

