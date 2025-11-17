<?php

/**
 * @package Zifer Child
 */

global $wp_query;
$total_posts = $wp_query->post_count;
if ($total_posts>0) {

	$zerif_latestnews_background = get_theme_mod('zerif_latestnews_background');

	if( !empty($zerif_latestnews_background) ):
		echo '
		<style type="text/css">
			section.latest-news {
					filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src=\''.$zerif_latestnews_background.'\',sizingMethod=\'scale\');
					background-image: url("'.$zerif_latestnews_background.'");
			}
		</style>';
	endif;	
?>
<section class="latest-news" id="latestnews">

	<!-- SECTION HEADER -->
	<div class="section-header">
		<div class="container">
		<?php
		$zerif_latestnews_title = get_theme_mod('zerif_latestnews_title');

		if( !empty($zerif_latestnews_title) ):
			echo '<h2 class="white-text">' . __($zerif_latestnews_title,'zifer-child') . '</h2>';
		else:
			echo '<h2 class="white-text">' . __('Latest news','zifer-child') . '</h2>';
		endif;

		$zerif_latestnews_subtitle = get_theme_mod('zerif_latestnews_subtitle');

		if( !empty($zerif_latestnews_subtitle) ):
			echo '<h6 class="white-text">'.__($zerif_latestnews_subtitle,'zifer-child').'</h6>';
		endif;

		?>
		</div>
	</div>
	<div class="clear"></div>
	<div class="section-content">
		<div class="container">
			<div id="homepage-latestnews" class="carousel slide" >
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
					<?php
					$args = array( 'post_type' => 'post', 'posts_per_page' => $total_posts, 'order' => 'DESC');
					$zerif_customcategory_select = get_theme_mod('zerif_customcategory_select','');
					$cat='';

					if( !empty($zerif_customcategory_select) ):
						$args['cat']='-'.$zerif_customcategory_select;
					endif;

					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
						?>
						<div class="col-sm-3 latestnews-box">
							<div class="latestnews-img">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail(); ?>
								<?php else: ?>
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blank-latestposts.png">
								<?php endif; ?>

								</a>
							</div>
							<div class="latesnews-content">
								<h5 class="latestnews-title white-text"><?php the_title(); ?></h5>

								<?php custom_the_excerpt(110,"&gt; Read more"); ?>

							</div>
						</div><!-- .latestnews-box"> -->
					<?php
					endwhile;
					?>
			    </div>
			</div>
		</div>
	</div>
</section>
<?php } ?>
