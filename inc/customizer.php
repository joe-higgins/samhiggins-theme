<?php
/**
 * samhiggins-theme Theme Customizer
 *
 * @package samhiggins-theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function samhiggins_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'samhiggins_theme_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'samhiggins_theme_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'samhiggins_theme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function samhiggins_theme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function samhiggins_theme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function samhiggins_theme_customize_preview_js() {
	wp_enqueue_script( 'samhiggins-theme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'samhiggins_theme_customize_preview_js' );

// ========  Added by Joe Higgins ============


// first parallax has site branding and background image
function sjh_add_parallax1($wp_customize) {
	$wp_customize->add_section('parallax1-section', array(
		'title'		=> 'First Parallax Section'
	));
	$wp_customize->add_setting('parallax1-owner', array(
		'default'	=> 'Owner Name'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'parallax1-owner-control', array(
		'label'			=> 'Owner Name',
		'section' 	=>	'parallax1-section',
		'settings'	=>	'parallax1-owner'
	)));
	$wp_customize->add_setting('parallax1-tagline', array(
		'default'	=> 'Tag Line'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'parallax1-tagline-control', array(
		'label'			=> 'Tag line',
		'section' 	=>	'parallax1-section',
		'settings'	=>	'parallax1-tagline'
	)));
	$wp_customize->add_setting('parallax1-image', array(
		'default'	=> 'Image'
	));
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'parallax1-image-control', array(
		'label'			=> 'Add parallax background image',
		'section' 	=>	'parallax1-section',
		'settings'	=>	'parallax1-image',
		'width'			=>	3000,
		'flex_width'	=> true,
		'flex_height'	=> true
	)));

}
add_action('customize_register', 'sjh_add_parallax1');


function sjh_parallax1_bg_image()
{
?>
    <style type="text/css">
        .parallax1 {
            background-image: url('<?php echo wp_get_attachment_url(get_theme_mod( 'parallax1-image' ));?>');
        }
    </style>
<?php
}
add_action( 'wp_head', 'sjh_parallax1_bg_image');

// Second parallax has 1 text area and background image
function sjh_add_parallax2($wp_customize) {
	$wp_customize->add_section('parallax2-section', array(
		'title'		=> 'Second Parallax Section'
	));
	$wp_customize->add_setting('parallax2-text', array(
		'default'	=> 'Display text'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'parallax2-text-control', array(
		'label'			=> 'Text to display over parallax 2 image',
		'section' 	=>	'parallax2-section',
		'settings'	=>	'parallax2-text'
	)));
	$wp_customize->add_setting('parallax2-heading', array(
		'default' 	=>  'Add heading for parallax 2 section'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'parallax2-heading-control', array(
		'label'  =>  'Add heading for parallax 2 section',
		'section' 	=>	'parallax2-section',
		'settings'	=>	'parallax2-heading'
	)));
	$wp_customize->add_setting('parallax2-tagline', array(
		'default'		=> 'Parallax 2 tagline'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'parallax2-tagline-control', array(
		'label'  =>  'Add tagline for parallax 2 section',
		'section' 	=>	'parallax2-section',
		'settings'	=>	'parallax2-tagline',
		'type'			=> 	'textarea'
	)));
	$wp_customize->add_setting('parallax2-image', array(
		'default'	=> 'Image'
	));
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'parallax2-image-control', array(
		'label'			=> 'Add parallax background image',
		'section' 	=>	'parallax2-section',
		'settings'	=>	'parallax2-image',
		'width'			=>	3000,
		'flex_width'	=> true,
		'flex_height'	=> true
	)));

}
add_action('customize_register', 'sjh_add_parallax2');

function sjh_parallax2_bg_image()
{
?>
    <style type="text/css">
        .parallax2 {
            background-image: url('<?php echo wp_get_attachment_url(get_theme_mod( 'parallax2-image' ));?>');
        }
    </style>
<?php
}
add_action( 'wp_head', 'sjh_parallax2_bg_image');
