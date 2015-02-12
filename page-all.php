<?php /* Template Name: All blogpost */ ;?>
<?php get_header(); ?>

    <body>
    <div class="content">
    <div class="row">
        <div class="col-sm-8">
            <?php
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $wp_query = new WP_Query(
                    array(
                        'posts_per_page' => get_option( 'posts_per_page' ),
                        'paged'          => $paged,
                        )
                    )
                ;
            ?>
            <?php if ($wp_query->have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_title( '<h2><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark"> ',  '</a></h2>' ); ?>
                <?php the_excerpt(); ?> <a href="<?php the_permalink();?>">Read more</a>
            <?php endwhile; ?>
            <?php
            if ( function_exists( 'vb_pagination' ) ) {
                vb_pagination();
                }
            ?>

            <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>

        <div class="col-sm-4">
            <?php get_sidebar(); ?> 
        </div>
    </div>
    </div>
<?php get_footer(); ?>
          
