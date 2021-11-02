<?php
/**
 * designhu functions
 * v 0.1
 */
/*
* TOC
*
* require
* 主題設定
* Update jQuery
* Register Plugins 載入plugins
* Register Styles 載入style.css
* Register Script 載入script.js
* 為<script> 加上 attribute 或 註解
* 改 Logo class
* 建構 menus
* 修改 menu <li> class  (用Walker 後棄用。)
*/
 
require get_template_directory() . '/init/define.php';
include ('init/class-ChildNav.php'); 

add_action( 'rest_api_init', function () {
    require get_template_directory() . '/init/customApi.php';
    (new customApi)->registerRoutes();
});

function ECHO_ASSET_PATH() {
    echo ASSET_PATH;
}
 

// ============================================= 移除警示
function ure_block_admin_notices() {
    add_action('admin_print_scripts', 'ure_remove_admin_notices');    
}
add_action('admin_print_scripts', 'ure_remove_admin_notices'); 

function ure_remove_admin_notices() {
    global $wp_filter;
    if (is_user_admin()) {
        if (isset($wp_filter['user_admin_notices'])) {
            unset($wp_filter['user_admin_notices']);
        }
    } elseif (isset($wp_filter['admin_notices'])) {
        unset($wp_filter['admin_notices']);
    }
}

// ============================================= 關閉古騰堡編輯器
add_filter ( 'use_block_editor_for_post' , '__return_false' ); 
remove_action ( 'wp_enqueue_scripts' , 'wp_common_block_scripts_and_styles' );

// ============================================= 安裝 acf 依舊顯示預設 metabox
add_filter('acf/settings/remove_wp_meta_box', '__return_false');

// ============================================= Update jQuery
function update_jquery() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), false, true);
	 
	
    wp_enqueue_script('jquery');
	wp_enqueue_style('style-css', STYLE_URL, array() );
}
add_action('wp_enqueue_scripts', 'update_jquery');
 

// ============================================= 桌面/手機 選單
function registerDesktopMobileMenu() {
    add_theme_support( 'nav-menus' );
    register_nav_menus( array('desktop-menu' => __( '電腦版', 'skc' )) );
    register_nav_menus( array('mobile-menu' => __( '手機版', 'skc' )) );
    register_nav_menus( array('footer_menu_1' => __( '頁尾選單 1', 'skc' )) );
    register_nav_menus( array('footer_menu_2' => __( '頁尾選單 2', 'skc' )) );
    register_nav_menus( array('footer_menu_3' => __( '頁尾選單 3', 'skc' )) );
}
add_action( 'init', 'registerDesktopMobileMenu' );

// ============================================= Style Css
function add_theme_scripts() {
	global $wp_query; 
	wp_enqueue_style( 'style', get_stylesheet_uri() ); 
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css'); 
	wp_enqueue_script('masonry-js', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js');
	
	wp_enqueue_style( 'slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css' ); 
	wp_enqueue_script( 'slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js' ); 
	wp_enqueue_script( 'twzipcode-js', 'https://cdn.jsdelivr.net/npm/jquery-twzipcode@1.7.14/jquery.twzipcode.min.js' ); 
	  
	
	wp_enqueue_style( 'jPages-css',  get_template_directory_uri() . '/css/jPages.css' ); 
    wp_enqueue_style( 'slimmenu-css',  get_template_directory_uri() . '/css/slimmenu.min.css' ); 	

	wp_enqueue_script( 'jPages-js', get_template_directory_uri() . '/assets/js/jPages.min.js' );  
	wp_enqueue_script( 'birth-picker', get_template_directory_uri() . '/assets/js/jquery-birthday-picker.js' ); 
    wp_enqueue_script( 'slimmenu-js', get_template_directory_uri() . '/assets/js/jquery.slimmenu.min.js');  
	wp_enqueue_script( 'script-js', get_template_directory_uri() . '/assets/js/script.js' );

	wp_localize_script( 'script', 'loadMoreBook', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
		'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages
	) );
  
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// ============================================= RWD| ipad, mobile
function isRwd() {
    static $isRwd;

    if ( isset($isRwd) )
        return $isRwd;

    if ( empty($_SERVER['HTTP_USER_AGENT']) ) {
        $isRwd = false;
    } elseif (
        strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false ) {
            $isRwd = true;
    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false && strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') == false) {
            $isRwd = true;
    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') !== false) {
        $isRwd = true;
    } else {
        $isRwd = false;
    }

    return $isRwd;
}

// ============================================= 主題設定
function themeSetup(){
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'woocommerce' );
	//add_theme_support( 'responsive-embeds' );
	//add_theme_support( 'post-formats', array( 'aside, image', 'link', 'video' ) );
	//add_post_type_support( 'post', 'excerpt' );

}
add_action( 'after_setup_theme', 'themeSetup' ); 

// ============================================= 文章描述文字
function caption() {
  global $post;
  $thumbnail_id    = get_post_thumbnail_id($post->ID);
  $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));
  if ($thumbnail_image && isset($thumbnail_image[0])) { 
	  ?>
		<span class="featureImageExcerpt"><?php echo $thumbnail_image[0]->post_content; ?></span>
		<?php 
  }
}


// =============================================  Support Head Title
if ( ! function_exists( '_wp_render_title_tag' ) ) {
	function theme_slug_render_title() {
		?>
			<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php
	}
	add_action( 'wp_head', 'theme_slug_render_title' );
}


// =============================================  文章摘要長度，句尾
function wpdocs_custom_excerpt_length( $length ) {
	return 55;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );



function designhu_add_style() {
    echo '
        <style>
            .acf-accordion .acf-label.acf-accordion-title label {
                font-size: 1.2rem;
            }
            .vx_entries_table.contact_frm1 {
                display: table;
                width: 100%;
            }
            .vx_entries_table.contact_frm1 td {
                padding: 0.3rem 0.6rem;
            }
        </style>
    ';
}
add_action('admin_head', 'designhu_add_style');

function fontawesome_dashboard() {
   wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', '', '5.8.1', 'all');
}

add_action('admin_init', 'fontawesome_dashboard');


 function acf_to_rest_api($response, $post, $request) {
    if (!function_exists('get_fields')) return $response;

    if (isset($post)) {
        $acf = get_fields($post->id);
        $response->data['acf'] = $acf;
    }
    return $response;
}
add_filter('rest_prepare_page', 'acf_to_rest_api', 10, 3);
 
