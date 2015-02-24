<?php /* Template Name: All blogpost */ ;?>
<?php get_header(); ?>

    <body>
    <div class="content">
    <div class="row">
        <div class="col-sm-8">
            <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_title( '<h2><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark"> ',  '</a></h2>' ); ?>
                <?php the_excerpt(); ?> <a href="<?php the_permalink();?>">Read more</a>
            <?php endwhile; ?>
            <hr>
            <?php echo paginate_links( $args ); ?>
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
          
