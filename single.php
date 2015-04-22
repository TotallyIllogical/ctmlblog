<?php get_header(); ?>
    <body>
    <div class="content">
    <div class="row">
        <div class="col-sm-8">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                <h1><?php the_title(); ?></h1>
                <p class="datetime">Published: <?php the_time( 'Y-n-j G:i' ); ?> </p>  
                <?php the_content(); ?>
                <?php comments_template(); ?> 
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
          
