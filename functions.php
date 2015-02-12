<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/assets/javascripts/bootstrap.min.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );


add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', 'Primary Menu' );
}


if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));


function vb_pagination( $query=null ) {
 
    global $wp_query;
    $query = $query ? $query : $wp_query;
    $big = 999999999;
 
    $paginate = paginate_links( 
        array(
            'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'type'      => 'array',
            'total'     => $query->max_num_pages,
            'format'    => '?paged=%#%',
            'current'   => max( 1, get_query_var( 'paged' ) ),
            'prev_text' => __( '&laquo;' ),
            'next_text' => __( '&raquo;' ),
        )
    );
 
    if ( $query->max_num_pages > 1 ) :
?>
<hr>
<div class="row">
    <ul class="pagination">
        <?php
            foreach ( $paginate as $page ) {
                echo '<li>' . $page . '</li>';
            }
        ?>
    </ul>
</div>
<?php
    endif;
}