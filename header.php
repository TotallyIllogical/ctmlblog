<!doctype html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <?php wp_enqueue_script("jquery"); ?>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <?php wp_head(); ?>
    </head>
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <p class="navbar-brand"> <?php bloginfo( $show ); ?> </p>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">
                        <?php 
                            if ( has_nav_menu( 'primary' ) ) :
                                wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav' ) );
                            endif; 
                        ?> 
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
