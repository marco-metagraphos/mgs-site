<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function menu_init() {

  register_sidebar( array(
    'name'          => 'Menu',
    'id'            => 'menu',
    'before_widget' => '<section>',
    'after_widget'  => '</section>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>',
  ) );

}
add_action( 'widgets_init', 'menu_init' );


function contacto_init() {

  register_sidebar( array(
    'name'          => 'Contacto',
    'id'            => 'contacto',
'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>',
  ) );

}
add_action( 'widgets_init', 'contacto_init' );


function copyright_init() {

  register_sidebar( array(
    'name'          => 'Copyright',
    'id'            => 'copyright',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>',
  ) );

}
add_action( 'widgets_init', 'copyright_init' );

function copyrightmov_init() {

  register_sidebar( array(
    'name'          => 'Copyright móvil',
    'id'            => 'copyright-movil',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>',
  ) );

}
add_action( 'widgets_init', 'copyrightmov_init' );

function footer_one_init() {

  register_sidebar( array(
    'name'          => 'Footer one',
    'id'            => 'footer-one',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>',
  ) );

}
add_action( 'widgets_init', 'footer_one_init' );


function footer_two_init() {

  register_sidebar( array(
    'name'          => 'Footer two',
    'id'            => 'footer-two',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>',
  ) );

}
add_action( 'widgets_init', 'footer_two_init' );


function footer_three_init() {

  register_sidebar( array(
    'name'          => 'Footer three',
    'id'            => 'footer-three',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>',
  ) );

}
add_action( 'widgets_init', 'footer_three_init' );


function footer_four_init() {

  register_sidebar( array(
    'name'          => 'Footer four',
    'id'            => 'footer-four',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>',
  ) );

}
add_action( 'widgets_init', 'footer_four_init' );

remove_filter( 'the_content', 'wpautop' );

if( !is_admin()){
  wp_deregister_script('jquery');
  wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"), false, '2.2.2');
  wp_enqueue_script('jquery');
}

?>
