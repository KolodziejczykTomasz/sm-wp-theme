<?php 

//Logo

add_theme_support( 'custom-logo' );


//Menu Main

function reg_mymenu() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Menu główne' ),
      'extra-menu_1' => __( 'Menu List 1' ),
      'extra-menu_2' => __( 'Menu List 2' ),
      'extra-menu_3' => __( 'Menu List 3' ),
      'extra-menu_4' => __( 'Menu List 4' ),
      'extra-menu_5' => __( 'Menu List 5' ),
      'extra-menu_6' => __( 'Menu List 6' ),
      'extra-menu_7' => __( 'Menu List 7' ),
      'extra-menu_8' => __( 'Menu List 8' ),
      'extra-menu_9' => __( 'Menu List 9' ),
      'extra-menu_10' => __( 'Menu List 10' ),
      'extra-menu_11' => __( 'Menu List 11' ),
      'extra-menu_12' => __( 'Menu List 12' ),
      'sidebar-menu' => __( 'Sidebar' )
    )
  );
}
add_action( 'init', 'reg_mymenu' );


//Sidebar

register_sidebar(
    array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="widget__title">',
        'after_title'   => '</div>',
    )
);

//Excerpt


// Content

//Thumbnail

add_theme_support( 'post-thumbnails' );

//Footer copyright

function add_this_script_footer() { 
?>
<script>
document.getElementById("year").innerHTML = new Date().getFullYear();
</script>
<?php } 
add_action('wp_footer', 'add_this_script_footer');

//Pagination

function custom_pagination($pages = '', $range = 2)
{  
 $showitems = ($range * 2)+1;  

 global $paged;
 if(empty($paged)) $paged = 1;

 if($pages == '')
 {
     global $wp_query;
     $pages = $wp_query->max_num_pages;
     if(!$pages)
     {
         $pages = 1;
     }
 }   

 if(1 != $pages)
 {
     echo "<div class='pagination'>";
     if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
     if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

     for ($i=1; $i <= $pages; $i++)
     {
         if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
         {
             echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
         }
     }

     if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
     if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
     echo "</div>\n";
 }
 }

//Notice widget
function notice_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home center notice',
		'id'            => 'notice_center',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'notice_widgets_init' );


?>