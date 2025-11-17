<?php
/**
 * The Template for front page.
 *
 * @package Zifer Child
 */

?>

<?php get_header(); ?>

<?php
if ( get_option( 'show_on_front' ) == 'page' ) {
    ?>
	<div class="clear"></div>
	</header> <!-- / END HOME SECTION  -->

<div id="content" class="site-content">
	<div class="container">
	<div class="content-left-wrap col-md-9">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>
				<?php endwhile; ?>

				<?php zerif_paging_nav(); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>
			
			<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .content-left-wrap -->
	<div class="sidebar-wrap col-md-3 content-left-wrap">

		<?php get_sidebar(); ?>

	</div><!-- .sidebar-wrap -->

	</div><!-- .container -->
</div><!-- .site-content -->
	<?php
}else {

	$zerif_bigtitle_show = get_theme_mod('zerif_bigtitle_show');
	if( isset($zerif_bigtitle_show) && $zerif_bigtitle_show != 1 ):
		do_include("sections/big_title.php");
	endif;


?>
</header> <!-- / END HOME SECTION  -->

<div id="content" class="site-content">
<?php
	/* Category Posts */
	$zerif_customcategory_show = get_theme_mod('zerif_customcategory_show');
	if( isset($zerif_customcategory_show) && $zerif_customcategory_show != 1 ):
		do_include("sections/category_posts.php");
	endif;

	/* LATEST NEWS */
	$zerif_latestnews_show = get_theme_mod('zerif_latestnews_show');
	if( isset($zerif_latestnews_show) && $zerif_latestnews_show != 1 ):
		do_include("sections/latest_news.php");
	endif;

	/* About */
	$zerif_about_show = get_theme_mod('zerif_about_show');
	if( isset($zerif_about_show) && $zerif_about_show != 1 ):
		do_include("sections/about.php");
	endif;
}
?>
</div><!-- .site-content -->

<?php get_footer(); ?>