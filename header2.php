<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 讓手機不判斷它是電話號碼變顏色-->
  <meta name="format-detection" content="telephone=no">

  <!-- Font Awesome-->
  <!-- <script src="<?php //ECHO_ASSET_PATH(); ?>/fontawesome/js/all.js" defer></script> -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- modernizr -->
  <script src="<?php ECHO_ASSET_PATH(); ?>/js/libs/modernizr-custom.min.js"></script>
  <script src="<?php ECHO_ASSET_PATH(); ?>/js/ModernizrAu.js"></script>


  <!-- wp_head start -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php
  printf(wp_body_open());
  ?>
  <div class="body-top" id="top"></div>
  <div class="btn-go_top" id="goTop">
    <a class="btn-go_top-inner" href="#top">
      <div class="svgicon"><svg viewBox="0 0 26 12"> <polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="1,11 13,1 25,11"/> </svg></div>
    </a>
  </div>
  <!-- =========================================================================-->
  <!-- .body_wrap  START-->
  <div class="body_wrap">
    <header class="page_header">
      <div class="container page_header-container">
        <div class="web_logo">
          <h1 class="text-hide m-0"><?php echo get_bloginfo( 'name' ); ?></h1>
          <?php echo get_custom_logo(); ?>
          <!-- <a class="pic" href="./">
            <img src="public/images/logo.svg" alt="LIZZ COSMETICS 儷氏化粧品">
          </a> -->
        </div>
        <div class="page_header-menu">
          <nav class="page_nav">
            <ul class="cf lis-n">
            <?php
              // 方法二 （自由度更高，不用寫walker）
              $locations = get_nav_menu_locations();
              $location_id = $locations["header_nav"];

              $menu_items = wp_get_nav_menu_items($location_id, array());

              if ($menu_items) :
                foreach($menu_items as $k => $v) :
                  if ($v->post_parent == 0) :
            ?>
              <li class="page_nav-item" data-highlight="<?php echo $v->xfn; ?>">
                <a class="page_nav-item-link" href="<?php echo $v->url; ?>">
                  <?php echo $v->title; ?>
                </a>
            <?php
                  endif;
                  // foreach($menu_items as $kk => $vv) :
                    if ($v->post_parent != 0 && $v->menu_item_parent == $v->ID) :
            ?>
                <nav class="sub_page_nav">
                  <ul class="lis-n">
                    <li class="sub_page_nav-item"><a class="sub_page_nav-item-link" href="about.html">公司簡介</a></li>
                  </ul>
                </nav>
            <?php
                    endif;
                  // endforeach;
            ?>
              </li>
            <?php
                endforeach;
              endif;
            ?>
            </ul>

            <?php
              /*// 方法一
              wp_nav_menu( array(
                'menu' => "header_nav",
                'menu_class' => "nav-lsit lis-n cf",
                'container' => "",
                'walker'   => new Designhu_Walker_HeaderNav(),
              ));*/
             ?>
          </nav>
          <!-- nav.page_nav  END  !! --------------------------------------------------------------------------->
          <div class="tools">
            <div class="tools_ctrl">
              <div class="tools_close">
                <div class="icon">
                  <i class="fas fa-times fa-w-16"></i>
                </div>
              </div>
              <div class="tools_search">
                <div class="icon"><img src="<?php ECHO_ASSET_PATH(); ?>/images/icons/icon-search.svg"></div>
              </div>
            </div>
            <div class="header_search">
              <input class="header_search-input lizz_frm-input style2" type="text" placeholder="請輸入關鍵字">
              <button class="header_search-btn lizz_btn lizz_btn-float" type="button">
                <div class="icon"><img src="<?php ECHO_ASSET_PATH(); ?>/images/icons/icon-search.svg"></div>
              </button>
            </div>
          </div>
        </div>
        <div class="m_menu" id="m_menu" onclick="lizzUI.mmenu().init();">
          <div class="group">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
            <div class="line4"></div>
          </div>
        </div>
      </div>
      <!-- .container  END  !!------->
    </header>
    <!-- header.page_header  END  !! --------------------------------------------------------------------------->