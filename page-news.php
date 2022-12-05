<?php get_header();  
/*
*Template Name: Szablon aktualności bez paska bocznego
*Template Post Type: page
*/
?>
<body>
<header>
        <nav class="navbar fixed-top  navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>./images/logo.png" alt="SMWArmia" height="75">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>                    
                    <span class="navbar-text">
                        <a href="https://poczta.cyberfolks.pl/" target="_blank" rel="noopener noreferrer">
                            <i class="fa-solid fa-user"></i>
                        </a>
                    </span>
                </div>
            </div>
        </nav>
    </header>
<main>
    <section class="hero-section" id="home">
        <div class=" hero-wrapper">
            <div class="hero-wrapperPhoto">
                <img class="hero-photo" src="<?php echo get_stylesheet_directory_uri(); ?>./images/hero.jpg" alt="Hero" />
            </div>
        </div>
    </section> 
    <section class="brake none-text-transfrom">Aktualności</section>                      
        <div class="page-news-wrapper">
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

          
            $args = array (
                'post_type' => the_post(),
                'posts_per_page' => '6',
                'paged' => $paged,
                'category_name' => 'aktualnosci',  
            );
            ?>
            <?php

       
            $cquery = new WP_Query( $args );
            while ( $cquery->have_posts() ) : $cquery->the_post();
            ?>
            <div class="page-news-item">
                <a href="<?php the_permalink(); ?>">
                    <div class="page-news-item-title"><?php the_title(); ?> </div>                            
                    <div class="page-news-item-thumb"><?php
                        $args = array( 'post_type' => 'attachment', 'post_mime_type' => 'image' ,'post_parent' => $post->ID );
                        $attachments = get_posts($args);
                            if ($attachments) {
                            foreach ( $attachments as $attachment ) { ?>
                            <img src="<?php echo wp_get_attachment_url( $attachment->ID , true ); ?>" />
                            <?php   }
                            } ?>
                    </div>   
                    <div class="page-news-item-category">Kategoria: 
                        <span class="page-news-item-category-greenText">
                            <?php
                                $category = get_the_category();
                                echo $category[0]->cat_name;
                                ?>
                        </span>
                    </div>      
                </a>
            </div>           
            <?php
            $post->ID;
            endwhile;

            $big = 999999999;
            ?>
            
        </div> 
        <div class="page-news-pagination">
            <div class="pagination">
                <?php
                echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' =>  $cquery->max_num_pages
                    ) );
                ?>
            </div>
        </div>     
</main>


<?php get_footer(); ?>