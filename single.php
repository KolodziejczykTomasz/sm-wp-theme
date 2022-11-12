<?php get_header();?>  
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
    <section class="brake none-text-transfrom"><?php the_title(); ?></section>
    <article class="post-single">
        <div class="left"><?php get_sidebar(); ?></div>
        <div class="right">           
            <div class="post-wrapper" >
                <div class="post-header">
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                    <div class="post-content-image">
                        <?php
                            if(has_post_thumbnail()) {
                            the_post_thumbnail();
                        } else null
                        ?>
                    </div>
                </div>            
                <div class="post-footer">                    
                    <div class="postmetadata"><em>Kategoria: <?php the_category(', '); ?></em></div>
                    <div class="entry-author"></div>
                    <div class="entry-date"><em>Publikacja: <span class="green-text"><?php the_time('d-m-Y'); ?></span></em></div>                    
                </div>            
            </div>
              <div class="wrapper-button-back">
                <a href="/"><button class="button-back">Powrót</button></a>
            </div>
        </div>
    </article>
</main>
<?php get_footer(); ?>