<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
<?php include 'header.tpl.php';?>
<div id="wrapper">
	<div id="content">
		<div class="container">

			<?php if( $page['top']) : ?>
					<!-- Start aside-->
					<div class="row region" role="complementary">
						<?php print render($page['top']); ?>
					</div>
			<?php endif ?>

			<div class="row">

				<?php if( $page['sidebar']) : ?>
					<!-- Start aside-->
					<aside class="region col-md-3" role="complementary">
						<?php print render($page['sidebar']); ?>
					</aside>
					<!-- End aside-->
				<?php endif ?>


				<!-- Start main content-->
				<section id="main-content" class="col-md-<?php print  ($page['sidebar'])? 9 : 12;  ?>" role="main">
					<?php print $messages; ?>
					<?php print render($tabs); ?>
					<?php if ($action_links): ?>
					  <ul class="action-links"><?php print render($action_links); ?></ul>
					<?php endif; ?>
					<?php 
						$content = $page['content'];
						print render($content);
					 ?>
				</section>
				<!-- End main content-->
			</div>

			<?php if( $page['bottom']) : ?>
					<!-- Start aside-->
					<div class="row region" role="complementary">
						<?php print render($page['bottom']); ?>
					</div>
			<?php endif ?>
			

		</div>
	</div>
</div>
<!-- End wrapper-->
<?php include 'footer.tpl.php';?>
