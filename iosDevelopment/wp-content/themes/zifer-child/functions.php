<?php

/**
 * Zifer functions and definitions
 *
 * @package Zifer Child
 */

/**
 * Activates default theme features
 */
function zifer_theme_setup(){

	// Make theme available for translation.
	// Translations can be filed in the /languages/ directory.
	// uncomment to enable (remove the // before load_theme_textdomain )
	load_theme_textdomain( 'zifer-child', get_stylesheet_directory() . '/languages' );

}
add_action( 'after_setup_theme', 'zifer_theme_setup' );

/**
 * Register our scripts (js/css)
 */
add_action( 'wp_enqueue_scripts', 'zifer_enqueue_scripts',999 );
function zifer_enqueue_scripts(){

	// Uncomment the line below and add a
	// scripts.js file to your child theme
	// to add custom javascript to your child theme
	wp_enqueue_script( 'zifer-scripts', get_stylesheet_directory_uri() . '/js/child-scripts.js', array('zerif_script'), '20140101', true );
	wp_enqueue_style('zifer_font', zifer_slug_fonts_url(), array(), null );
	wp_dequeue_style('zerif_font');
}
function zifer_slug_fonts_url() {
    $fonts_url = '';
    $font_families[] = 'Open Sans:400,300,600,700,400italic';
    $query_args = array(
        'family' => urlencode( implode( '|', $font_families ) ),
        'subset' => urlencode( 'latin,latin-ext' ),
    );
    $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
    return $fonts_url;
}


/**
 * Disable things from parent
 */
add_action('wp_loaded','zifer_disable_from_parent',50);

function zifer_disable_from_parent(){

	remove_action('widgets_init', 'zerif_widgets_init');
	remove_action('widgets_init', 'zerif_register_widgets');
	remove_action('admin_enqueue_scripts', 'zerif_ourfocus_widget_scripts');
	remove_action('admin_enqueue_scripts', 'zerif_testimonial_widget_scripts');
	remove_action('admin_enqueue_scripts', 'zerif_clients_widget_scripts');
	remove_action('admin_enqueue_scripts', 'zerif_team_widget_scripts');
	remove_action('admin_menu', 'zerif_lite_add_upsell', 11 );
	remove_filter('excerpt_more', 'zerif_excerpt_more');
}



/**
 * Disable customizer fields from parent
 */

add_action( 'customize_register', 'zifer_customize_register',50 );

function zifer_customize_register( $wp_customize ){

/**
* Remove all what is not required
*/

	/*************** ORDER *****************************/
	$wp_customize->remove_section( 'zerif_order_section');
	$wp_customize->remove_setting( 'zerif_order_section');
	$wp_customize->remove_control( 'zerif_order_section');

	/*************** COLORS ****************************/
	$wp_customize->remove_section( 'zerif_colors_section');
	$wp_customize->remove_setting( 'zerif_colors_section');
	$wp_customize->remove_control( 'zerif_colors_section');

	/************** GENERAL OPTIONS  *******************/
	/* COPYRIGHT */
	$wp_customize->remove_setting( 'zerif_copyright');
	$wp_customize->remove_control( 'zerif_copyright');

	/*************  OUR FOCUS SECTION ******************/
	$wp_customize->remove_section( 'zerif_ourfocus_section');
		/* show/hide */
	$wp_customize->remove_setting( 'zerif_ourfocus_show');
	$wp_customize->remove_control( 'zerif_ourfocus_show');
		/* our focus title */
	$wp_customize->remove_setting( 'zerif_ourfocus_title');
	$wp_customize->remove_control( 'zerif_ourfocus_title');
		/* our focus subtitle */
	$wp_customize->remove_setting( 'zerif_ourfocus_subtitle');
	$wp_customize->remove_control( 'zerif_ourfocus_subtitle');

	/*************  ABOUT US SECTION *******************/
	$wp_customize->remove_section( 'zerif_aboutus_section');
		/* about us show/hide */
	$wp_customize->remove_setting( 'zerif_aboutus_show');
	$wp_customize->remove_control( 'zerif_aboutus_show');
		/* title */
	$wp_customize->remove_setting( 'zerif_aboutus_title');
	$wp_customize->remove_control( 'zerif_aboutus_title');
		/* big left title */
	$wp_customize->remove_setting( 'zerif_aboutus_subtitle');
	$wp_customize->remove_control( 'zerif_aboutus_subtitle');
		/* subtitle */
	$wp_customize->remove_setting( 'zerif_aboutus_biglefttitle');
	$wp_customize->remove_control( 'zerif_aboutus_biglefttitle');
		/* text */
	$wp_customize->remove_setting( 'zerif_aboutus_text');
	$wp_customize->remove_control( 'zerif_aboutus_text');
		/* feature no#1 */
	$wp_customize->remove_setting( 'zerif_aboutus_feature1_title');
	$wp_customize->remove_control( 'zerif_aboutus_feature1_title');
	$wp_customize->remove_setting( 'zerif_aboutus_feature1_text');
	$wp_customize->remove_control( 'zerif_aboutus_feature1_text');
	$wp_customize->remove_setting( 'zerif_aboutus_feature1_nr');
	$wp_customize->remove_control( 'zerif_aboutus_feature1_nr');
		/* feature no#2 */
	$wp_customize->remove_setting( 'zerif_aboutus_feature2_title');
	$wp_customize->remove_control( 'zerif_aboutus_feature2_title');
	$wp_customize->remove_setting( 'zerif_aboutus_feature2_text');
	$wp_customize->remove_control( 'zerif_aboutus_feature2_text');
	$wp_customize->remove_setting( 'zerif_aboutus_feature2_nr');
	$wp_customize->remove_control( 'zerif_aboutus_feature2_nr');
		/* feature no#3 */
	$wp_customize->remove_setting( 'zerif_aboutus_feature3_title');
	$wp_customize->remove_control( 'zerif_aboutus_feature3_title');
	$wp_customize->remove_setting( 'zerif_aboutus_feature3_text');
	$wp_customize->remove_control( 'zerif_aboutus_feature3_text');
	$wp_customize->remove_setting( 'zerif_aboutus_feature3_nr');
	$wp_customize->remove_control( 'zerif_aboutus_feature3_nr');
		/* feature no#4 */
	$wp_customize->remove_setting( 'zerif_aboutus_feature4_title');
	$wp_customize->remove_control( 'zerif_aboutus_feature4_title');
	$wp_customize->remove_setting( 'zerif_aboutus_feature4_text');
	$wp_customize->remove_control( 'zerif_aboutus_feature4_text');
	$wp_customize->remove_setting( 'zerif_aboutus_feature4_nr');
	$wp_customize->remove_control( 'zerif_aboutus_feature4_nr');

	/*************  OUR TEAM SECTION ******************/
	$wp_customize->remove_section( 'zerif_ourteam_section');
		/* our team show/hide */
	$wp_customize->remove_setting( 'zerif_ourteam_show');
	$wp_customize->remove_control( 'zerif_ourteam_show');
		/* our team title */
	$wp_customize->remove_setting( 'zerif_ourteam_title');
	$wp_customize->remove_control( 'zerif_ourteam_title');
		/* our team subtitle */
	$wp_customize->remove_setting( 'zerif_ourteam_subtitle');
	$wp_customize->remove_control( 'zerif_ourteam_subtitle');

	/**********	TESTIMONIALS SECTION **************/
	$wp_customize->remove_section( 'zerif_testimonials_section');
	/* testimonials show/hide */
	$wp_customize->remove_setting( 'zerif_testimonials_show');
	$wp_customize->remove_control( 'zerif_testimonials_show');
	/* testimonials title */
	$wp_customize->remove_setting( 'zerif_testimonials_title');
	$wp_customize->remove_control( 'zerif_testimonials_title');
	/* testimonials subtitle */
	$wp_customize->remove_setting( 'zerif_testimonials_subtitle');
	$wp_customize->remove_control( 'zerif_testimonials_subtitle');

	/********* RIBBONS ****************************************/
	$wp_customize->remove_section( 'zerif_ribbon_section');
	/* RIBBON SECTION WITH BOTTOM BUTTON */
	/* text */
	$wp_customize->remove_setting( 'zerif_bottomribbon_text');
	$wp_customize->remove_control( 'zerif_bottomribbon_text');
	/* button label */
	$wp_customize->remove_setting( 'zerif_bottomribbon_buttonlabel');
	$wp_customize->remove_control( 'zerif_bottomribbon_buttonlabel');
	/* button link */
	$wp_customize->remove_setting( 'zerif_bottomribbon_buttonlink');
	$wp_customize->remove_control( 'zerif_bottomribbon_buttonlink');
	/* RIBBON SECTION WITH BUTTON IN THE RIGHT SIDE */
	/* text */
	$wp_customize->remove_setting( 'zerif_ribbonright_text');
	$wp_customize->remove_control( 'zerif_ribbonright_text');
	/* button label */
	$wp_customize->remove_setting( 'zerif_ribbonright_buttonlabel');
	$wp_customize->remove_control( 'zerif_ribbonright_buttonlabel');
	/* button link */
	$wp_customize->remove_setting( 'zerif_ribbonright_buttonlink');
	$wp_customize->remove_control( 'zerif_ribbonright_buttonlink');

	/************	CONTACT US SECTION *********************/
	$wp_customize->remove_section( 'zerif_contactus_section');
	/* contact us show/hide */
	$wp_customize->remove_setting( 'zerif_contactus_show');
	$wp_customize->remove_control( 'zerif_contactus_show');
	/* contactus title */
	$wp_customize->remove_setting( 'zerif_contactus_title');
	$wp_customize->remove_control( 'zerif_contactus_title');
	/* contactus subtitle */
	$wp_customize->remove_setting( 'zerif_contactus_subtitle');
	$wp_customize->remove_control( 'zerif_contactus_subtitle');
	/* contactus email */
	$wp_customize->remove_setting( 'zerif_contactus_email');
	$wp_customize->remove_control( 'zerif_contactus_email');
	/* contactus button label */
	$wp_customize->remove_setting( 'zerif_contactus_button_label');
	$wp_customize->remove_control( 'zerif_contactus_button_label');

	/* Google maps section */
	$wp_customize->remove_section( 'zerif_googlemap_section');
	$wp_customize->remove_setting( 'zerif_googlemap_section');
	$wp_customize->remove_control( 'zerif_googlemap_section');

	/* Pricing section */
	$wp_customize->remove_section( 'zerif_pricing_section');
	$wp_customize->remove_setting( 'zerif_pricing_section');
	$wp_customize->remove_control( 'zerif_pricing_section');

/**
 *   Add new fields
 */

	/* Background to Latest News	*/
	$wp_customize->add_setting( 'zerif_latestnews_background', array('sanitize_callback' => 'esc_url_raw'));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'zerif_latestnews_background', array(
		'label'    => __( 'Background', 'zifer-child' ),
		'section'  => 'zerif_latestnews_section',
		'settings' => 'zerif_latestnews_background',
		'priority'    => 1,
	)));

	/* Background to BIG TITLE SECTION	*/
	$wp_customize->add_setting( 'zerif_bigtitle_background', array('sanitize_callback' => 'esc_url_raw'));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'zerif_bigtitle_background', array(
		'label'    => __( 'Background', 'zifer-child' ),
		'section'  => 'zerif_bigtitle_section',
		'settings' => 'zerif_bigtitle_background',
		'priority'    => 1,
	)));

	/* text */
	$wp_customize->add_setting( 'zerif_bigtitle_text', array( 'sanitize_callback' => 'zerif_sanitize_text','default' => 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. ') );
	$wp_customize->add_control( new Zerif_Customize_Textarea_Control( $wp_customize, 'zerif_bigtitle_text', array(
		'label'   => __( 'Text', 'zifer-child' ),
		'section' => 'zerif_bigtitle_section',
		'settings'   => 'zerif_bigtitle_text',
		'priority' => 2
	)) );

	/* blue button to BIG TITLE SECTION	*/

	$wp_customize->add_setting( 'zerif_bigtitle_bluebutton_label', array('sanitize_callback' => 'zerif_sanitize_text','default' => __('First button','zifer-child')));
	$wp_customize->add_control( 'zerif_bigtitle_bluebutton_label', array(
		'label'    => __( 'Blue button label', 'zifer-child' ),
		'section'  => 'zerif_bigtitle_section',
		'settings' => 'zerif_bigtitle_bluebutton_label',
		'priority'    => 2,
	));

	$wp_customize->add_setting( 'zerif_bigtitle_bluebutton_url', array('sanitize_callback' => 'esc_url_raw','default' => '#'));
	$wp_customize->add_control( 'zerif_bigtitle_bluebutton_url', array(
		'label'    => __( 'Blue button link', 'zifer-child' ),
		'section'  => 'zerif_bigtitle_section',
		'settings' => 'zerif_bigtitle_bluebutton_url',
		'priority'    => 2,
	));

	/**************** About  SECTION	****************/
	$wp_customize->add_section( 'zerif_about_section' , array(
		'title'       => __( 'About section', 'zifer-child' ),
		'priority'    => 38
	));

	/* show/hide */
	$wp_customize->add_setting( 'zerif_about_show', array('sanitize_callback' => 'zerif_sanitize_text'));
	$wp_customize->add_control(
		'zerif_about_show',
		array(
			'type' => 'checkbox',
			'label' => 'Hide about section?',
			'section' => 'zerif_about_section',
			'priority'    => 1,
		)
	);

	/* title */
	$wp_customize->add_setting( 'zerif_about_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => __('About the author ','zifer-child')));
	$wp_customize->add_control( 'zerif_about_title', array(
		'label'    => __( 'Title', 'zifer-child' ),
		'section'  => 'zerif_about_section',
		'settings' => 'zerif_about_title',
		'priority'    => 2,
	));

	$wp_customize->add_setting( 'zerif_about_text', array( 'sanitize_callback' => 'zerif_sanitize_text','default' => 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. ') );
	$wp_customize->add_control( new Zerif_Customize_Textarea_Control( $wp_customize, 'zerif_about_text', array(
		'label'   => __( 'Text', 'zifer-child' ),
		'section' => 'zerif_about_section',
		'settings'   => 'zerif_about_text',
		'priority' => 3
	)) );

	/**************** Custom Category  SECTION	****************/
	$wp_customize->add_section( 'zerif_customcategory_section' , array(
		'title'       => __( 'Custom category section', 'zifer-child' ),
		'priority'    => 36
	));
	/* show/hide */
	$wp_customize->add_setting( 'zerif_customcategory_show', array('sanitize_callback' => 'zerif_sanitize_text'));
	$wp_customize->add_control(
		'zerif_customcategory_show',
		array(
			'type' => 'checkbox',
			'label' => 'Hide custom section?',
			'section' => 'zerif_customcategory_section',
			'priority'    => 1,
		)
	);
	/* title */
	$wp_customize->add_setting( 'zerif_customcategory_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => __('Featured posts','zifer-child')));
	$wp_customize->add_control( 'zerif_customcategory_title', array(
			'label'    => __( 'Title', 'zifer-child' ),
			'section'  => 'zerif_customcategory_section',
			'settings' => 'zerif_customcategory_title',
			'priority'    => 2,
	));
	/* category select */
	class Zerif_Category_Dropdown_Control extends WP_Customize_Control {

		private $cats = false;

		public function __construct($manager, $id, $args = array(), $options = array())
		{
			$this->cats = get_categories($options);
			parent::__construct( $manager, $id, $args );
		}

		/**
		 * Render the content of the category dropdown
		 *
		 * @return HTML
		 */
		public function render_content()
		{
			if(!empty($this->cats))
			{
				?>
				<label>
					<span class="customize-category-select-control"><?php echo esc_html( $this->label ); ?></span>
					<select <?php $this->link(); ?> >
					<?php
						foreach ( $this->cats as $cat ) {
							printf('<option value="%s" %s>%s</option>', $cat->term_id, selected($this->value(), $cat->term_id, false), $cat->name);
						}
					?>
					</select>
				</label>
				<?php
			}
		}
	}

	$wp_customize->add_setting( 'zerif_customcategory_select', array('sanitize_callback' => 'zerif_sanitize_text') );
	$wp_customize->add_control( new Zerif_Category_Dropdown_Control( $wp_customize, 'zerif_customcategory_select', array(
		'label'   => __( 'Category', 'zifer-child' ),
		'section' => 'zerif_customcategory_section',
		'settings'   => 'zerif_customcategory_select',
		'priority' => 3
	)) );
}

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function zifer_widgets_init()
{
	register_sidebar(array(
		'name' => __('Sidebar', 'zifer-child'),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	));
}
add_action('widgets_init', 'zifer_widgets_init');


/**
 * Include from children if exist ,  if not include from parent
 */
function do_include($file){
	$parent = get_template_directory() . '/'.$file;
	$child = get_stylesheet_directory() . '/'.$file;
	if(file_exists($child))
		include($child);
	else
		include($parent);
}

/**
 * Display or return a custom excerpt
 *
 * @param int $charlength the characters length to be returned or displayed
 * @param string $more the excerpt that shoud apear . ex: "[...]" or "Read more"
 * @param boolean $more_link the excerpt to be link or not
 * @param boolean $print to print (true) or to return the output (false)
 *
 * @return string the new excerpt if $print=false.
 */
function custom_the_excerpt($charlength, $more='[...]', $more_link=true, $print=true){
	$excerpt = get_the_excerpt();
	$charlength++;
	$out='<p class="excerpt-content">';

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - mb_strlen($more) );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			$out.= mb_substr( $subex, 0, $excut );
		} else {
			$out.= $subex;
		}

		if($more_link){
			$out.= '</p><a class="read-more" href="'.get_permalink().'">'.$more.'</a>';
		}
		else $out.= $more.'</p>';
	}
	else {
		$out.= $excerpt.'</p>';
	}
	if($print)
		echo $out;
	else
		return $out;
}
/**
 * customize function "zerif_posted_on()" from parent
 */

function zerif_posted_on() {
	$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string .= '<time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$category_list = get_the_category_list( __( ', ', 'zifer-child' ) );
	print('<i class="fa fa-pencil-square-o fa"></i>');
	printf( __( '<span class="byline"> by %2$s</span><span class="posted-on"> on %1$s</span><span class="category-of"> in %3$s</span>', 'zifer-child' ),
		$time_string,
		sprintf( '<span class="author vcard">%1$s</span>',
			esc_html( get_the_author() )
		),
		$category_list
	);
}

/**
 *	Remove sidebars
 */
function zerif_remove_sidebars(){
	unregister_sidebar( 'sidebar-ourfocus' );
	unregister_sidebar( 'sidebar-testimonials' );
	unregister_sidebar( 'sidebar-aboutus' );
	unregister_sidebar( 'sidebar-ourteam' );
}
add_action( 'widgets_init', 'zerif_remove_sidebars', 11 );
