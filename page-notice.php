<?php get_header();  
/*
*Template Name: Szablon ogłoszeń z sidebar
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
    <section class="brake none-text-transfrom"><?php the_title(); ?></section>
    <article class="page-single">
        <div class="left"><?php get_sidebar(); ?></div>
        <div class="right">            
            <div class="page-wrapper" >
                <div class="page-notice-wrapper">
                    <div class="page-notice-item">
                        <div>Kategoria: sprzedam</div>
                        <div>Treść ogłoszenia</div>
                    </div>
                </div>            
                <div class="wrapper-button-back">
                    <a href="/"><button class="button-back">Powrót</button></a>
                </div>        
            </div>
        </div>
    </article>
</main>


<?php get_footer(); ?>