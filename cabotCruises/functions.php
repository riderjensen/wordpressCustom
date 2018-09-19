<?php

function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );
  remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

function wpdocs_excerpt_more( $more ) {
  return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
      get_permalink( get_the_ID() ),
      __( 'Read More', 'textdomain' )
  );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


?>