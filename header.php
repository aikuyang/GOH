<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 讓手機不判斷它是電話號碼變顏色-->
  <meta name="format-detection" content="telephone=no">
  <link rel="icon" href="http://goh.designhu-demo.com/wp-content/uploads/favicon.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- modernizr -->
  <script src="<?php ECHO_ASSET_PATH(); ?>/js/libs/modernizr-custom.min.js"></script>
  <script src="<?php ECHO_ASSET_PATH(); ?>/js/ModernizrAu.js"></script>
  <!-- wp_head start -->
  <?php wp_head(); ?>
	<script>
		jQuery(document).ready(function($) {
			$('ul#menu-main').slimmenu({
				resizeWidth: '800',
				collapserTitle: '',
				animSpeed: 'medium',
				easingEffect: null,
				indentChildren: false,
				expandIcon: '+',
				collapseIcon: '-',
				childrenIndenter: '&nbsp;',
				
			});    
	}); 
	</script>
</head>
<body <?php body_class(); ?>><div id="fb-root"></div><script async defer crossorigin="anonymous" src="https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v11.0" nonce="KtL4Yd4i"></script>
	<?php
  printf(wp_body_open());
  ?>
  <div class="body-top" id="top"></div>
  <div class="btn-go_top" id="goTop">
    <a class="btn-go_top-inner" href="#top">
      <div class="svgicon"><!--svg viewBox="0 0 26 12"> <polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="1,11 13,1 25,11"/> </svg--></div>
    </a>
  </div>
  <!-- =========================================================================-->
  <!-- .body_wrap  START-->
  <div class="body_wrap">
	  <?php include('template/nav.php');?>