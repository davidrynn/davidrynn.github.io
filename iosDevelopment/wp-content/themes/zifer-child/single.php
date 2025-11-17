<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Zifer Child
 */
get_header(); ?>
<div class="clear"></div>
</header> <!-- / END HOME SECTION  -->
<?php $zerif_bigtitle_background = get_theme_mod('zerif_bigtitle_background');

if( !empty($zerif_bigtitle_background) ):
	echo '
	<style type="text/css">
		.site-content .single-header-title{
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src=\''.$zerif_bigtitle_background.'\',sizingMethod=\'scale\');
			background-image: url("'.$zerif_bigtitle_background.'");
		}
	</style>';
endif;	
?>
<div id="content" class="site-content">
	<div class="single-header-title">
		<div class="container">
			<div class="row-fix">
				<div class="col-md-12 ">	
						<?php the_title(); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row-fix">
			<div class="content-left-wrap col-md-9">
				<div id="primary" class="content-area"> 
					<main id="main" class="site-main" role="main">
					<?php while ( have_posts() ) : the_post(); 
							
							 get_template_part( 'content', 'single' );
							 
							 zerif_post_nav(); 
						 
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || '0' != get_comments_number() ) :
								comments_template('');
							endif;
						endwhile; // end of the loop. ?>
					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
			<div class="sidebar-wrap col-md-3 content-left-wrap">
				<?php get_sidebar(); ?>
			</div><!-- .sidebar-wrap -->
		</div>
	</div>
</div>
<?php get_footer(); ?>