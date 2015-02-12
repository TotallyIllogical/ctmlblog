<?php get_header(); ?>
    <body>
    <div class="content">
    <div class="row">
        <div class="col-sm-8">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_title(); ?>
                <?php the_content(); ?>
            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>

        <div class="col-sm-4">
            <?php get_sidebar(); ?> 
        </div>
    </div>
    </div>
<?php get_footer(); ?>
          
