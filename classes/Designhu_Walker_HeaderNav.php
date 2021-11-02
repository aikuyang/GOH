<?php 
/**
 * Custom walker class.
 */
class Designhu_Walker_HeaderNav extends Walker_Nav_Menu {
    // menu HTML結構:
    // <nav class="page_nav">
    //   <ul class="cf lis-n">
    //     <li class="page_nav-item">
    //       <a class="page_nav-item-link" href="">關於</a>
    //       <nav class="sub_page_nav">
    //         <ul class="lis-n">
    //           <li class="sub_page_nav-item">
    //             <a class="sub_page_nav-item-link" href="">公司簡介</a>
    //           </li>
    //         </ul>
    //       </nav>
    //     </li>
    //   </ul>
    // </nav>
    public $menuClass = "page_nav";
    public $subMenuClass = "sub_page_nav";

    /**
     * Starts the list before the elements are added.
     *
     * Adds classes to the unordered list sub-menus.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $menuClass = $this->menuClass;
        $subMenuClass = $this->subMenuClass;
        // Depth-dependent classes.
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            $subMenuClass,
            // ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
            ( $display_depth >=2 ? "sub-$subMenuClass" : '' ),
            'menu-depth-' . $display_depth
        );
        $class_names = implode( ' ', $classes );
 
        // Build HTML for output.
        if ($display_depth == 1) {
            $output .= "\n" . $indent . '<nav class="'.$class_names.'"><ul class="lis-n">' . "\n";
        }
        else {
            $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
        }
    }
 
    /**
     * Start the element output.
     *
     * Adds main/sub-classes to the list items and links.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item   Menu item data object.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     * @param int    $id     Current item ID.
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        global $wp_query;
        $menuClass = $this->menuClass;
        $subMenuClass = $this->subMenuClass;
        // echo "<pre>";
        // var_dump($item);
        // echo "</pre>";
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

        // Depth-dependent classes.
        $depth_classes = array(
            ( $depth == 0 ? "$menuClass-item" : "$subMenuClass-item" ),
            ( $depth >=2 ? "sub-$subMenuClass-item" : '' ),
            // ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

        // Passed classes.
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) ) );

        $setHighlight = array(
            '118' => 'about',
            '119' => 'service',
            '456' => 'rnd',
            '208' => 'news',
            '104' => 'contact'
        );

        // Build HTML.
        if ($depth == 0) {
            $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '" data-highlight="' . (isset($setHighlight["$item->ID"]) ? $setHighlight["$item->ID"] : "") . '">';
        }
        else {
            $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
        }

        // Link attributes.
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $attributes .= ' class="menu-link ' . ( $depth > 0 ? "$subMenuClass-item-link" : "$menuClass-item-link" ) . '"';

        // Build HTML output and pass through the proper filter.
        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}
 ?>