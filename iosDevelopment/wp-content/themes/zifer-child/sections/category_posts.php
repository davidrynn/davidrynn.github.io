<?php

/**
 * @package Zifer Child
 */

?>

<section class="custom-category" id="custom-category">
	<div class="container">
		<!-- SECTION HEADER -->
		<div class="section-header">
			<!-- SECTION TITLE -->
			<?php 
			$zerif_customcategory_title = get_theme_mod('zerif_customcategory_title',__('Custom Category','zifer-child'));
			
			if( !empty($zerif_customcategory_title) ):
				echo '<h2  class="dark-text">'.__($zerif_customcategory_title,'zifer-child').'</h2>';
			endif;

			?>
		</div><!-- / END SECTION HEADER -->
			
		<!-- SECTION CONTENT -->
			
		<div class="section-content">
			<?php
			$zerif_customcategory_select = get_theme_mod('zerif_customcategory_select','');

			if( !empty($zerif_customcategory_select) ):
				echo '<span  class="dark-text">';
				// retrieve posts with category ID of $zerif_customcategory_select
				query_posts( 'cat='.$zerif_customcategory_select.'&posts_per_page=5&orderby=rand' );
				// set $more to 0 in order to only get the first part of the post
				global $more;
				$more = 0;
				// the Loop
				$i=0;
				while (have_posts()) : the_post();
					$i++;
					echo "<a title='".esc_attr(get_the_title())."' href='".esc_url(get_permalink())."' class='categ-block cat-block-".$i."'>
						<div>";
							?>
							
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail("full"); ?>
							<?php else: ?>
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blank-latestposts.png">
							<?php endif; ?>

							<?php
					echo "<div class='cat-hover'><span>".esc_attr(get_the_title())."</span></div>";
							
					echo "</div></a> ";
							
				endwhile;

				wp_reset_query();
				echo '</span>';

				else :
					echo '<span >';
					echo __('Select category from "Custom Category section"','zifer-child');
					echo '</span>';
				endif;

			?>
		</div><!-- / END SECTION CONTENT -->
	</div> <!-- / END CONTAINER -->
</section> <!-- END CUSTOM CATEGORY SECTION -->
