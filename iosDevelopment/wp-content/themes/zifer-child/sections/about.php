<?php

/**
 * @package Zifer Child
 */

?>
<section class="about" id="about">
	<div class="container">

		<!-- SECTION HEADER -->
		<div class="section-header">

			<!-- SECTION TITLE -->
			<?php 
			$zerif_about_title = get_theme_mod('zerif_about_title',__('About','zifer-child'));

			if( !empty($zerif_about_title) ):
				echo '<h2  class="dark-text">'.__($zerif_about_title,'zifer-child').'</h2>';
			endif;
			
			?>
		</div><!-- / END SECTION HEADER -->
			
		<!-- SECTION CONTENT -->
		<div class="section-content">
			<?php
				$zerif_about_text = get_theme_mod('zerif_about_text',__('Add a text in Customizer, "About section"','zifer-child'));

				if( !empty($zerif_about_text) ):
					echo '<span  class="dark-text">';
					echo __($zerif_about_text,'zifer-child');
					echo '</span>';
				endif;

			?>
		</div><!-- / END SECTION CONTENT -->
	</div> <!-- / END CONTAINER -->
</section> <!-- END ABOUT US SECTION -->