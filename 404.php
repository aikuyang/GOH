<?php
/*
 Template Name: 404_page
*/


$pageNameArr = array(
  'pageNameTW' => get_post()->post_title,
  'pageNameEN' => get_post()->post_name
);

get_header();
?>
<!-- =========================================================================-->
<!-- 頁面內容  START-->
<!-- =========================================================================-->
<div id="LizzcosmeApp" class="page_wrap index_page">
    <section class="page_section page_main-hd">
        <div class="page_main-hd-inner text-center">
            <h2 class="title">歐毆～404找不到頁面ˇˇ</h2>
            <div class="lizz_breadcrumb">
                <ul class="cf lis-n">
                    <li class="lizz_breadcrumb-item"><a class="inner" href="<?php echo get_site_url(); ?>">回首頁</a></li>
                </ul>
            </div>
        </div>
    </section>

</div>
<!-- =========================================================================-->
<!-- 頁面內容  END  !!-->
<!-- =========================================================================-->



<?php
get_footer();