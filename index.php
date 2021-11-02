<?php
/*
Template Name: index_page
*/

get_header();

$pageNameArr = array(
  'pageNameTW' => get_post()->post_title,
  'pageNameEN' => get_post()->post_name
);
?>

<!-- =========================================================================-->
<!-- 頁面內容  START-->
<!-- =========================================================================-->
<div id="LizzcosmeApp" class="page_wrap index_page">
  <!-- .page_section.page_main-hd  START-->
  <?php get_template_part('template/page_main_hd', null, $pageNameArr); ?>
  <!-- section.page_section.page_main-hd  END  !!-->


</div>
<!-- =========================================================================-->
<!-- 頁面內容  END  !!-->
<!-- =========================================================================-->




<?php
get_footer();