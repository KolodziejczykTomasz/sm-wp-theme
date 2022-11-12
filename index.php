<?php get_header(); ?>
<?php 
$logo_id = get_theme_mod( 'custom_logo' );
echo wp_get_attachment_image( $logo_id , 'full' );?>
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
        <section class="brake">Spółdzielnia Mieszkaniowa "Warmia" w Lidzbarku Warmińskim</section>
        <section class="about-section">
            <div class="about-content">
                <div class="about-content-left-wrapper">
                    <div class="about-content-left-subtitle-green"> Kontakt </div>
                    <div class="about-content-left-wrappercashdesk">
                        <div class="about-content-left-subtitle">
                            <i class="fa-solid fa-angle-right"></i>Sekretariat/Prezes Zarządu
                        </div>
                        <p><i class="fa-solid fa-phone"></i> 89 767 25 48 </p>
                        <p class="about-content-second-row"><i class="fa-solid fa-envelope"></i>
                            <a href="mailto:sekretariat@smwarmia.pl">sekretariat@smwarmia.pl</a>
                        </p>
                        <p style="padding-right: 10px; padding-top: 30px">
                            <strong>
                                <em>
                                    Prezes przyjmuje interesantów codziennie w godzinach 8:00 - 14:00
                                </em>
                            </strong>
                        </p>
                    </div>
                    <div class="about-content-left-wrappertechnicalsupport">
                        <div class="about-content-left-subtitle" style=" margin-top: 20px"> <i class="fa-solid fa-angle-right"></i>Dział
                            Techniczny
                        </div>
                        <p class="about-content-second-row"> ul. Szwoleżerów 12 </p>
                        <p class="about-content-second-row"> <i class="fa-solid fa-phone"></i>89 767 21 32, 89 767 34 33 </p>
                        <p class="about-content-second-row"><i class="fa-solid fa-envelope"></i>
                            <a href="mailto:dzial.techniczny@smwarmia.pl">
                                dzial.techniczny@smwarmia.pl </a>
                        </p>
                        <p style="padding-right: 10px; padding-top: 30px"> <strong> <em>
                                    Telefon dyżurny konserwatora po godzinie 15:00 i w dni wolne od
                                    pracy: </em> 603 349 621 </strong>
                        </p>
                    </div>
                    <div class="about-content-left-wrappertechnicalsupport">
                        <div class="about-content-left-subtitle" style=" margin-top: 30px"> 
                        <i class="fa-solid fa-angle-right"></i>Telewizja Kablowa </div>
                        <p style="margin-top: 5px"> Biuro obsługi klienta: </p>
                        <p class="about-content-second-row"> Poniatowskiego 18 </p>
                        <p class="about-content-second-row"> <i class="fa-solid fa-phone"></i>89 767 20 95 </p>
                        <p style="padding-top: 30px"> Obsługa techniczna: </p>
                        <p class="about-content-second-row"> ul. Szwoleżerów 12 </p>
                        <p class="about-content-second-row"> <i class="fa-solid fa-phone"></i>89 767 21 32 </p>
                        <p class="about-content-second-row"> <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:tv.kablowa@smwarmia.pl">tv.kablowa@smwarmia.pl</a>
                        </p>
                    </div>
                    <div class="about-content-left-wrappertechnicalsupport">
                        <div class="about-content-left-subtitle" style=" margin-top: 30px">
                           <i class="fa-solid fa-angle-right"></i> Księgowość
                        </div>
                        <p class="about-content-second-row"> <i class="fa-solid fa-phone"></i>89 767 20 95 </p>
                        <p class="about-content-second-row">
                            <a href="mailto:księgowość@smwarmia.pl"><i class="fa-solid fa-envelope"></i>księgowość@smwarmia.pl</a>
                        </p>
                    </div>
                    <div class="about-content-left-wrappertechnicalsupport">
                        <div class="about-content-left-subtitle" style=" margin-top: 30px"> <i class="fa-solid fa-angle-right"></i>Dział Członkowsko - Mieszkaniowy </div>                        
                        <p class="about-content-second-row"> <i class="fa-solid fa-phone"></i>89 767 06 84 </p>
                        <p class="about-content-second-row"><i class="fa-solid fa-envelope"></i>
                            <a href="mailto:dzialczlonkowski@smwarmia.pl">dzialczlonkowski@smwarmia.pl</a>
                        </p>
                    </div>
                </div>
                <div class="about-content-center-sections">
                    <div class="about-content-center-wrapper">
                        <div class="about-content-center-header">Zapraszamy</div>
                        <div class="about-content-center-subtitle">
                            Spółdzielnia Mieszkaniowa "Warmia"
                        </div>
                        <div class="about-content-center-wrapperAddress">
                            <p>ul. Poniatowskiego 18</p>
                            <p>11-100 Lidzbark Warmiński</p>
                            <p>REGON: 000487723 </p>
                            <p>NIP 743-000-43-23 </p>
                            <div class="about-content-center-account">
                                <div style="margin-right: 5px">Nr konta bankowego: </div>
                                <div> 54 1020 3570 0000 2102 0007 7305</div>
                            </div>
                        </div>
                        <div class="about-content-center-wrapperPhoto">
                            <img class="about-content-center-photo" src="<?php echo get_stylesheet_directory_uri(); ?>./images/home.jpg" alt="Main Logo" />
                        </div>
                        <p style="margin: 30px 0; text-align: center; padding: 0 5px">
                            <em> <strong>Godziny pracy: poniedziałek - piątek: 7:00 - 15:00</strong> </em>
                        </p>
                        <div style="margin: 30px 0; text-align: center; padding: 0 5px">
                            <em> <strong>Kasa:</strong> </em>
                            <p>Poniedziałek - Czwartek: 8:00 - 13:00</p>
                        </div>
                    </div>
                </div>
                <div class="about-content-right-wrapper">
                    <div class="about-content-right-subtitle-green">
                        Kartka z kalendarza
                    </div>
                    <div class="about-content-right-wrapperCurrentDate">
                        <div class="about-content-right-subtitle">Dziś jest: </div>
                        <div id="date"></div>                
                    </div>
                    <div class="about-content-right-wrapperNameDay">                       
                         <div class="about-content-right-subtitle">Imieniny:</div>
                         <div id="nameDay" class=""></div>                     
                    </div>
                    <div class="about-content-right-wrapperWeather">
                        <div class="about-content-right-subtitle">Pogoda: <span id="ResName"></span></div>
                        <ul>
                            <li>
                                <div id="Image"></div>
                            </li>
                            <ListItem>
                                <em>- <span id="Description"></span></em>
                            </ListItem>
                            <li style="padding-top: 30px">
                                <small>Temperatura:</small> <span id="Temp"></span> °C
                            </li>
                            <li>
                                <small>Temperatura odczuwalna:</small> <span id="Feels_like"></span> °C
                            </li>
                            <li>
                                <small>Wilgotność:</small> <span id="Humidity"></span> %
                            </li>
                            <li>
                                <small>Ciśnienie:</small> <span id="Pressure"></span> hPa
                            </li>
                            <li>
                                <small>Prędkość wiatru:</small> <span id="Speed"></span> m/s
                            </li>
                        </ul>                  
                    </div>
                </div>
            </div>
        </section>
        <section class="brake">Menu</section>
        <section class="menulist-section">
            <div class="menulist-content">
                <div class="menuitem-wrapper">
                    <div class="menuitem-subtitle-green">
                        SM Warmia
                    </div>
                    <?php wp_nav_menu( array( 'theme_location' => 'extra-menu_1' ) ); ?>
                </div>
               <div class="menuitem-wrapper">
                    <div class="menuitem-subtitle-green">
                        Władze Spółdzielni
                    </div>
                    <?php wp_nav_menu( array( 'theme_location' => 'extra-menu_2' ) ); ?>
                </div><div class="menuitem-wrapper">
                    <div class="menuitem-subtitle-green">
                        Mieszkańcy
                    </div>
                    <?php wp_nav_menu( array( 'theme_location' => 'extra-menu_3' ) ); ?>
                </div><div class="menuitem-wrapper">
                    <div class="menuitem-subtitle-green">
                        Gospodarka odpadami
                    </div>
                    <?php wp_nav_menu( array( 'theme_location' => 'extra-menu_4' ) ); ?>
                </div><div class="menuitem-wrapper">
                    <div class="menuitem-subtitle-green">
                        RPO Warmia i Mazury 2014-2020
                    </div>
                    <?php wp_nav_menu( array( 'theme_location' => 'extra-menu_5' ) ); ?>
                </div><div class="menuitem-wrapper">
                    <div class="menuitem-subtitle-green">
                        Informacje
                    </div>
                    <?php wp_nav_menu( array( 'theme_location' => 'extra-menu_6' ) ); ?>
                </div><div class="menuitem-wrapper">
                    <div class="menuitem-subtitle-green">
                       Lokale do wynajęcia
                    </div>
                    <?php wp_nav_menu( array( 'theme_location' => 'extra-menu_7' ) ); ?>
                </div><div class="menuitem-wrapper">
                    <div class="menuitem-subtitle-green">
                        Przetargi
                    </div>
                    <?php wp_nav_menu( array( 'theme_location' => 'extra-menu_8' ) ); ?>
                </div><div class="menuitem-wrapper">
                    <div class="menuitem-subtitle-green">
                        RPO Warmia i Mazury 2007-2013
                    </div>
                    <?php wp_nav_menu( array( 'theme_location' => 'extra-menu_9' ) ); ?>
                </div><div class="menuitem-wrapper">
                    <div class="menuitem-subtitle-green">
                       Telewizja Kablowa
                    </div>
                    <?php wp_nav_menu( array( 'theme_location' => 'extra-menu_10' ) ); ?>
                </div><div class="menuitem-wrapper">
                    <div class="menuitem-subtitle-green">
                        Internet
                    </div>
                    <?php wp_nav_menu( array( 'theme_location' => 'extra-menu_11' ) ); ?>
                </div><div class="menuitem-wrapper">
                    <div class="menuitem-subtitle-green">
                        Ogłoszenia mieszkańców
                    </div>
                    <?php wp_nav_menu( array( 'theme_location' => 'extra-menu_12' ) ); ?>
                </div>
            </div>
        </section>
        <section class="brake">Ogłoszenia</section>
        <section class="noticemain-section">
            <div class="noticemain-content">
                <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?> 
                <div class="noticemainitem-wrapper">
                    
                    <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail();  ?></a>
                  
                </div>
                <?php endwhile; ?>
                <?php endif; ?>  
            </div>
            <div class="wrapper-button-more">
                <a href="#"><button class="button-more">Więcej</button></a>
            </div>
        </section>
        <section class="brake">Nasze Osiedla</section>
        <section class="gallerymain-section">
            <div class="gallerymain-wrapperItem">
                <img class="gallerymain-photo" src="<?php echo get_stylesheet_directory_uri(); ?>./images/estate/astronomow.jpg" alt="Osiedle Astronomów" />
                <div class="gallerymain-photoWrapper">
                    <a href="">
                        <div class="gallerymain-backgroud">
                            <div class="gallerymain-headerItem">Astronomów</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="gallerymain-wrapperItem">
                <img class="gallerymain-photo" src="<?php echo get_stylesheet_directory_uri(); ?>./images/estate/grabowskiego.jpg" alt="Osiedle Grabowskiego" />
                <div class="gallerymain-photoWrapper">
                    <a href="">
                        <div class="gallerymain-backgroud">
                            <div class="gallerymain-headerItem">Grabowskiego</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="gallerymain-wrapperItem">
                <img class="gallerymain-photo" src="<?php echo get_stylesheet_directory_uri(); ?>./images/estate/kosciuszki.jpg" alt="Osiedle Kościuszki" />
                <div class="gallerymain-photoWrapper">
                    <a href="">
                        <div class="gallerymain-backgroud">
                            <div class="gallerymain-headerItem">Kościuszki</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="gallerymain-wrapperItem">
                <img class="gallerymain-photo" src="<?php echo get_stylesheet_directory_uri(); ?>./images/estate/kromera.jpg" alt="Osiedle Kromera" />
                <div class="gallerymain-photoWrapper">
                    <a href="">
                        <div class="gallerymain-backgroud">
                            <div class="gallerymain-headerItem">Kromera</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="gallerymain-wrapperItem">
                <img class="gallerymain-photo" src="<?php echo get_stylesheet_directory_uri(); ?>./images/estate/legionow.jpg" alt="Osiedle Legionów" />
                <div class="gallerymain-photoWrapper">
                    <a href="">
                        <div class="gallerymain-backgroud">
                            <div class="gallerymain-headerItem">Legionów</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="gallerymain-wrapperItem">
                <img class="gallerymain-photo" src="<?php echo get_stylesheet_directory_uri(); ?>./images/estate/prosta.jpg" alt="Osiedle Prosta" />
                <div class="gallerymain-photoWrapper">
                    <a href="">
                        <div class="gallerymain-backgroud">
                            <div class="gallerymain-headerItem">Prosta</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="gallerymain-wrapperItem">
                <img class="gallerymain-photo" src="<?php echo get_stylesheet_directory_uri(); ?>./images/estate/warminska.jpg" alt="Osiedle Warmińska" />
                <div class="gallerymain-photoWrapper">
                    <a href="">
                        <div class="gallerymain-backgroud">
                            <div class="gallerymain-headerItem">Warmińska</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="gallerymain-wrapperItem">
                <img class="gallerymain-photo" src="<?php echo get_stylesheet_directory_uri(); ?>./images/estate/sloneczna.jpg" alt="Osiedle Słoneczna" />
                <div class="gallerymain-photoWrapper">
                    <a href="">
                        <div class="gallerymain-backgroud">
                            <div class="gallerymain-headerItem">Słoneczna</div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>
    <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>./config.js'></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>./js/script.js" type="text/javascript"></script>
    <?php get_footer(); ?>
