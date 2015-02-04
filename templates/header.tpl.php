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
					<div class="class-col-md-2">
						<?php if($logo): ?>
				          <div id="logo-container">
				            <?php print $imagelogo; ?>
				          </div>
				        <?php endif; ?>

				        <?php if($site_name || $siteslogan ): ?>
				          <!--start title and slogan-->
				          <div id="title-slogan">
				            <?php if($site_name): ?>
				              <?php print $sitename; ?>
				            <?php endif; ?>

				            <?php if($site_slogan): ?>
				              <?php print $siteslogan; ?>
				            <?php endif; ?>
				          </div>
				          <!--end title and slogan-->
				        <?php endif; ?>
					</div>
					<div class="col-md-10">
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
				          <i class="search fa search-btn fa-times"></i>
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


	      			  <!--start breadcrumb -->
					      <?php if($breadcrumb): ?>
					        	<div id="breadcrumb" class="pull-right">
					        		<?php print $breadcrumb; ?>
					        	</div>
					      <?php endif; ?>
				      <!-- end breadcrumb -->
			</div>
			<!-- breadcrumbs-->
		</header>
<!-- End header-->

