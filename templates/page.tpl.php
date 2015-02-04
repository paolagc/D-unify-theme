<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
<!-- Start wrapper-->
<div class="wrapper">
	<!-- Start page-->
	<div id="page">
		
		<?php include 'header.tpl.php';?>

		<!-- Start content-->
		<div class="container content">
			<!-- Start main content-->
			<div id="main-content">
				<?php print $messages; ?>
				<?php print render($tabs); ?>
				<?php if ($action_links): ?>
				  <ul class="action-links"><?php print render($action_links); ?></ul>
				<?php endif; ?>
				<?php 
					$content = $page['content'];
					print render($content);
				 ?>
			</div>
			<!-- End main content-->
		</div>
		<!-- End content-->

		<?php include 'footer.tpl.php';?>
	</div>
	<!-- End page-->
</div>
<!-- End wrapper->