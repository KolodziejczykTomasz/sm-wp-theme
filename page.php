
<?php get_header();  
/*
*Template Name: Szablon strony z sidebar
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
                <img class="hero-photo" src="./images/hero.jpg" alt="Hero" />
            </div>
        </div>
    </section> 
    <section class="brake">Tytuł</section>
    <article class="post-single">
        <div class="left"><?php get_sidebar(); ?></div>
        <div class="right"> 
           
            <div class="post-wrapper" >
             <div class="post-header">
                 <div class="post-content">
                     <p>
                         Do czego tego użyć? </p>
                       <p>  Ogólnie znana teza głosi, iż użytkownika może
                     rozpraszać zrozumiała zawartość strony, kiedy ten chce
                           zobaczyć sam jej wygląd. Jedną z mocnych stron
                           używania Lorem Ipsum jest to, że ma wiele różnych
                           „kombinacji” zdań, słów i akapitów, w
                           przeciwieństwie do zwykłego: „tekst, tekst,
                           tekst”, sprawiającego, że wygląda to „zbyt czytelnie” po polsku.</p>
                           <p>Wielu webmasterów i designerów używa Lorem Ipsum
                                  jako domyślnego modelu tekstu i wpisanie w internetowej wyszukiwarce ‘lorem ipsum’ spowoduje znalezienie bardzo wielu stron, które wciąż są w budowie. Wiele wersji tekstu ewoluowało i zmieniało się przez lata, czasem przez przypadek, czasem specjalnie (humorystyczne wstawki itd).
                     </p>
                 </div>
                 <div class="post-content-image">
                     <img src="https://via.placeholder.com" />
                 </div>
             </div>
             <div class="post-gallery">
                 <div class="post-gallery-title">Galeria</div>
                 <div class="post-gallery-wrapper">
                     <img src="https://via.placeholder.com" />
                     <img src="https://placeholder.com" />
                     <img src="https://placeholder.com" />
                     <img src="https://placeholder.com" />
                     <img src="https://placeholder.com" />
                     <img src="https://placeholder.com" />
                     <img src="https://placeholder.com" />
                     <img src="https://placeholder.com" />
                     <img src="https://placeholder.com" />
                     <img src="https://placeholder.com" />
                     <img src="https://placeholder.com" />
                     <img src="https://placeholder.com" />
                </div>
                <div class="post-footer">
                     <div>Autor</div>
                     <div>Kategoria</div>
                     <div>Publikacja</div>
                </div>
            </div>
         </div>
        </div>
    </article>
</main>


<?php get_footer(); ?>