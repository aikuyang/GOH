<?php
/*
 Template Name: test_page
*/

get_header();
?>


<style>
p:first-of-type {
    padding-top: 80px;
}
</style>
<p>get_stylesheet_directory_uri:<?php echo get_stylesheet_directory_uri(); ?></p>
<p>get_template_directory_uri:<?php echo get_template_directory_uri(); ?></p>
<p>wp_get_theme:<?php echo wp_get_theme(); ?></p>
<p>
    get_custom_logo:<?php echo get_custom_logo(); ?>
</p>
<p>
    wp_get_theme:<?php print_r(wp_get_theme()); ?>
</p>
<pre>
    <?php print_r($wp_customize); ?>
</pre>
<p>
    get_theme_mod:<?php print_r(get_theme_mod('custom_logo')); ?>
</p>
<p>
    get_bloginfo:<?php printf(get_bloginfo()); ?>
</p>

<ul>
    <?php 
        $files = get_included_files();
        foreach ($files as $key => $path) {
            if(strstr($path, ABSPATH.'wp-content/themes/')){
                echo '<li>'.str_replace(ABSPATH.'wp-content/themes/','', $path).'</pre>';
            }
        }
     ?>
</ul>

<p>
    <?php
        print_r(get_registered_nav_menus());
    ?>
</p>

<ul>
    <?php
    if ( has_nav_menu( 'primary' ) ) {

        wp_nav_menu(
            array(
                'container'  => '',
                'items_wrap' => '%3$s',
                'theme_location' => 'primary',
            )
        );

    }
    elseif ( ! has_nav_menu( 'expanded' ) ) {

        wp_list_pages(
            array(
                'match_menu_classes' => true,
                'show_sub_menu_icons' => true,
                'title_li' => false,
                // 'walker'   => new TwentyTwenty_Walker_Page(),
            )
        );

    }
    ?>

</ul>

<?php
get_footer();