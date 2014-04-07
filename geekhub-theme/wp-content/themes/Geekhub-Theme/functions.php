<?php

load_theme_textdomain('geekhub', get_template_directory() . '/languages'); 

//stylesheet connection
add_action('wp_enqueue_scripts','load_style_script');
 function load_style_script() {
    wp_enqueue_style('style', get_stylesheet_uri() );
}

//navigation menu
register_nav_menus( array(
    'main_menu' => 'Main nav menu'
) );

//display post thumbnails
add_theme_support ('post-thumbnails');

//courses custom post type
add_action( 'init', 'courses_post_type' );
function courses_post_type() {
    register_post_type( 'our_courses',
        array(
            'labels' => array(
                'name'          => __( 'Our courses','geekhub' ),
                'singular_name' => __( 'Our courses', 'geekhub' ),
                'not_found'     => __('Courses not found', 'geekhub'),
                'add_new'       => __('Add new course', 'geekhub')
            ),
            'public'        => true,
            'has_archive'   => true,
            'description'   => 'Add and edit courses',
            'menu_position' => 5,
            'supports'      => array( 'title', 'editor', 'thumbnail')
        )
    );
}

//sponsors custom post type
add_action( 'init', 'sponsors_post_type' );
function sponsors_post_type() {
    register_post_type( 'our_sponsors',
        array(
            'labels' => array(
                'name'          => __( 'Our sponsors','geekhub' ),
                'singular_name' => __( 'Our sponsors', 'geekhub' ),
                'not_found'     => __('Sponsors not found', 'geekhub'),
                'add_new'       => __('Add new sponsor', 'geekhub')
            ),
            'public'        => true,
            'has_archive'   => true,
            'description'   => 'Add and edit sponsors',
            'menu_position' => 6,
            'supports'      => array( 'title', 'editor', 'thumbnail')
        )
    );
}
//team custom post type
add_action( 'init', 'team_post_type' );
function team_post_type() {
    register_post_type( 'our_team',
        array(
            'labels' => array(
                'name'          => __( 'Our team', 'geekhub' ),
                'singular_name' => __( 'We are the greatest!', 'geekhub' ),
                'not_found'     => __('posts are not found', 'geekhub'),
                'add_new'       => __('Add new team member', 'geekhub')
            ),
            'public'        => true,
            'has_archive'   => true,
            'description'   => 'Add and edit team',
            'menu_position' => 7,
            'supports'      => array( 'title', 'editor', 'thumbnail', 'custom-fields')
        )
    );
}
//downloading logo in customizer
add_action('customize_register', 'themeslug_theme_customizer');
function themeslug_theme_customizer( $wp_customize ) {
    $wp_customize->add_section( 'themeslug_logo_section' , array(
        'title'       => __( 'Geekhub logo', 'geekhub'),
        'priority'    => 30,
        'description' => 'Upload new logo, to replace old :)',
    ) );
    $wp_customize->add_setting( 'themeslug_logo' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
        'label'    => __( 'Logo', 'geekhub' ),
        'section'  => 'themeslug_logo_section',
        'settings' => 'themeslug_logo',
    ) ) );
}

//add social links in customizer
add_action( 'customize_register', 'social_links_customize_register' );
function social_links_customize_register($wp_customize) {
    class Social_links_Textarea_Control extends WP_Customize_Control {
        public $type = 'textarea';
        public function render_content() {
            ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <textarea rows="1" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
            </label>
        <?php
        }
    }
    $wp_customize->add_section( 'Social_links_section', array(
        'title'          => __('Social links add', 'geekhub'),
        'priority'       => 35,
    ) );
    $wp_customize->add_setting( 'facebook_setting', array(
        'default'        => '#',
    ) );

    $wp_customize->add_control( new Social_links_Textarea_Control ( $wp_customize, 'facebook_setting', array(
        'label'   => __('Put your facebook id', 'geekhub'),
        'section' => 'Social_links_section',
        'settings'   => 'facebook_setting',
    ) ) );
    $wp_customize->add_setting( 'vkontakte_setting', array(
        'default'        => '#',
    ) );

    $wp_customize->add_control( new Social_links_Textarea_Control ( $wp_customize, 'vkontakte_setting', array(
        'label'   => __('Put your vkontakte id', 'geekhub'),
        'section' => 'Social_links_section',
        'settings'   => 'vkontakte_setting',
    ) ) );
    $wp_customize->add_setting( 'twitter_setting', array(
        'default'        => '#',
    ) );

    $wp_customize->add_control( new Social_links_Textarea_Control ( $wp_customize, 'twitter_setting', array(
        'label'   => __('Put your twitter id', 'geekhub'),
        'section' => 'Social_links_section',
        'settings'   => 'twitter_setting',
    ) ) );
    $wp_customize->add_setting( 'youtube_setting', array(
        'default'        => '#',
    ) );

    $wp_customize->add_control( new Social_links_Textarea_Control ( $wp_customize, 'youtube_setting', array(
        'label'   => __('Put your youtube id', 'geekhub'),
        'section' => 'Social_links_section',
        'settings'   => 'youtube_setting',
    ) ) );
    $wp_customize->add_setting( 'vimeo_setting', array(
        'default'        => '#',
    ) );

    $wp_customize->add_control( new Social_links_Textarea_Control ( $wp_customize, 'vkontante_setting', array(
        'label'   => __('Put your vimeo id', 'geekhub'),
        'section' => 'Social_links_section',
        'settings'   => 'vimeo_setting',
    ) ) );
}

//choose description
add_action( 'customize_register', 'Geekhub_customize_register' );

    function Geekhub_customize_register($wp_customize) {
        $wp_customize->add_section('description_dropdown_section', array(
            'title'    => __('Chose description', 'geekhub'),
            'priority' => 35,
        ));
        $wp_customize->add_setting('description_dropdown_settings', array(
            'capability'     => 'edit_theme_options',
            'default'        => 'default_value',
        ));
        $wp_customize->add_control('themename_page_test', array(
            'label'      => __('Choose a page', 'geekhub'),
            'section'    => 'description_dropdown_section',
            'type'    => 'dropdown-pages',
            'settings'   => 'description_dropdown_settings',
        ));
}
//register widget area
add_action( 'widgets_init', 'Geekhub_widgets_init' );
function Geekhub_widgets_init() {
    register_sidebar( array(
        'name' => 'Footer sidebar',
        'id' => 'footer-sidebar',
        'before_widget' => '<li>',
        'after_widget' => '</li>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ) );
}