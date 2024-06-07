<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_and_child_styles' );
function enqueue_parent_and_child_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );
}

function enqueue_child_theme_scripts() {
    wp_enqueue_script( 'child-theme-script', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), null, true );
}

add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_scripts' );

// function enqueue_fancybox() {
//     // Add Fancybox CSS
//     wp_enqueue_style( 'fancybox-css', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css', array(), '3.5.7' );

//     // Add Fancybox JS
//     wp_enqueue_script( 'fancybox-js', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array( 'jquery' ), '3.5.7', true );
// }
// add_action( 'wp_enqueue_scripts', 'enqueue_fancybox' );


add_action( 'cmb2_admin_init', 'custom_homepage_layout_metabox' );
function custom_homepage_layout_metabox() {
    $prefix = 'homepage_layout_';

    $cmb = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => __( 'Homepage Layout', 'cmb2' ),
        'object_types'  => array( 'page' ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'home-template.php' ),
    ) );

    // $about_section = $cmb->add_field( array(
    //     'name' => 'About Section',
    //     'id'   => $prefix . 'about_section',
    //     'type' => 'group',
    //     'repeatable' => false,
    // ) );

    // $cmb->add_group_field( $about_section, array(
    //     'name' => 'Image',
    //     'id'   => $prefix . 'about_image',
    //     'type' => 'file',
    // ) );

    $cmb->add_group_field( $about_section, array(
        'name' => 'Content',
        'id'   => $prefix . 'about_content',
        'type' => 'textarea',
    ) );

// Image Section Repeater
$team_section = $cmb->add_field( array(
    'name'       => 'Team Section',
    'id'         => $prefix . 'team_section',
    'type'       => 'group',
    'repeatable' => true,
) );

$cmb->add_group_field( $team_section, array(
    'name' => 'Image',
    'id'   => $prefix . 'team_image',
    'type' => 'file',
) );

$cmb->add_group_field( $team_section, array(
    'name' => 'Image Lightbox',
    'id'   => $prefix . 'team_image_lightbox',
    'type' => 'file',
) );

// Content Not Repeater
$team_content = $cmb->add_field( array(
    'name' => 'Team Content',
    'id'   => $prefix . 'team_content',
    'type' => 'wysiwyg',
) );


    $slider_section = $cmb->add_field( array(
    'name' => 'Slider Section',
    'id'   => $prefix . 'slider_section',
    'type' => 'group',
    'repeatable' => true,
) );

$cmb->add_group_field( $slider_section, array(
    'name' => 'Image',
    'id'   => $prefix . 'slider_image',
    'type' => 'file',
) );

$cmb->add_group_field( $slider_section, array(
    'name' => 'Content',
    'id'   => $prefix . 'slider_content',
    'type' => 'wysiwyg',
    'options' => array(
        'wpautop' => true, 
        'textarea_rows' => 10, 
    ),
) );

$cmb->add_group_field( $slider_section, array(
    'name' => 'Slider Quote Title',
    'id'   => $prefix . 'slider_quote_title',
    'type' => 'text',
) );

$cmb->add_group_field( $slider_section, array(
    'name' => 'Slider Author Title',
    'id'   => $prefix . 'slider_author_title',
    'type' => 'text',
) );



    $cmb->add_field( array(
        'name' => 'Project Heading',
        'id'   => $prefix . 'project_heading',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name' => 'Project Description',
        'id'   => $prefix . 'project_description',
        'type' => 'wysiwyg',
    ) );




    $project_section = $cmb->add_field( array(
        'name'         => 'Project Box Section',
        'id'           => $prefix . 'project_section',
        'type'         => 'group',
        'repeatable'   => true, 
    ) );

    $cmb->add_group_field( $project_section, array(
        'name'         => 'Box Icon',
        'id'           => $prefix . 'project_box_icon',
        'type'         => 'file',
        'repeatable'   => true, 
    ) );
    
    $cmb->add_group_field( $project_section, array(
        'name'         => 'Box Title',
        'id'           => $prefix . 'project_box_title',
        'type'         => 'text',


    ) );
    
    $cmb->add_group_field( $project_section, array(
        'name'         => 'Box Text',
        'id'           => $prefix . 'project_box_text',
        'type'         => 'wysiwyg',
        'repeatable'   => true,
        'options' => array(
        'textarea_rows' => 5,
    ),
    ) );

}


