<?php
/*
 Template Name: category
*/

get_header();
$pageNameArr = array(
    'pageNameTW' => "搜尋結果",
    'pageNameEN' => "search result"
);
?>
<!-- =========================================================================-->
<!-- 頁面內容  START-->
<!-- =========================================================================-->
<div id="LizzcosmeApp" class="page_wrap news_page">
    <!-- section.page_section.page_main-hd  START-->
    <?php get_template_part('template/page_main_hd', null, $pageNameArr); ?>
    <!-- section.page_section.page_main-hd  END  !!-->
    <!-- =========================================================================-->
    <!-- main.page_section.page_main-bd  START-->
    <main class="page_section page_main-bd news_main">
        <div class="container">
            <div class="row">
                <!-- .main_aside START  -->
                <?php get_template_part('template/page_main_aside', null, array(
                    'en' => $pageNameArr['pageNameEN']
                )); ?>
                <!-- /.main_aside END  -->
                <div class="main_container col-lg-9 offset-xl-1">
                    <div class="news_main-list" id="newsMainList">
                        <?php
                        // // https://gist.github.com/nkarpeev/5fb28d13e0aa02494d1464ecea374fd1
                        // Define page_id
                        $page_ID = get_the_ID();

                        // Custom loop
                        if ( have_posts() ) :
                        ?>
                        <ul class="lis-n row">
                        <?php
                            while ( have_posts() ) :
                                the_post();

                                /**
                                 * Displaying content
                                 *
                                 * the_title(), the_permalink(), the_content() etc
                                 * Or see Twentysixteen theme page.php
                                 * get_template_part( 'template-parts/content', 'page' );
                                 *
                                 */
                                // ＩＤ
                                $id = get_the_ID();
                                // 封面圖
                                $coverImage = get_field("cover_img", $id);
                                // 當前類別
                                $thisCategory = get_the_category()[0];
                                $thisCategoryId = $thisCategory->cat_ID;
                                $thisCategoryName = $thisCategory->cat_name;


                                $dataArr = array(
                                    'id'               => (!empty($id)) ? $id : "",
                                    'coverImage'       => (!empty($coverImage)) ? $coverImage : "",
                                    'thisCategory'     => (!empty($thisCategory)) ? $thisCategory : "",
                                    'thisCategoryId'   => (!empty($thisCategoryId)) ? $thisCategoryId : "",
                                    'thisCategoryName' => (!empty($thisCategoryName)) ? $thisCategoryName : "",
                                );

                                get_template_part('template/card', null, $dataArr);
                            endwhile;
                        ?>
                        </ul>
                        <?php
                                // $prevHTML  = '<div class="pagination-prev">';
                                // $prevHTML .= '   <div class="pagination-btn">';
                                $prevHTML  = '      <div class="svgicon">';
                                $prevHTML .= '          <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">';
                                $prevHTML .= '          <path d="M5 1L1 5L5 9"/>';
                                $prevHTML .= '          </svg>';
                                $prevHTML .= '      </div>';
                                // $prevHTML .= '   </div>';
                                // $prevHTML .= '</div>';

                                // $nextHTML  = '<div class="pagination-next">';
                                // $nextHTML .= '   <div class="pagination-btn">';
                                $nextHTML  = '      <div class="svgicon">';
                                $nextHTML .= '          <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">';
                                $nextHTML .= '          <path d="M1 1L5 5L1 9"/>';
                                $nextHTML .= '          </svg>';
                                $nextHTML .= '      </div>';
                                // $nextHTML .= '   </div>';
                                // $nextHTML .= '</div>';

                                /**
                                 * Pagination parameters of the_posts_pagination() since: 4.1.0
                                 *
                                 * @see the_posts_pagination
                                 * https://codex.wordpress.org/Function_Reference/the_posts_pagination
                                 *
                                 */
                                $pagination_args = array(
                                    'prev_text'          => $prevHTML,
                                    'next_text'          => $nextHTML,
                                    'before_page_number' => '',
                                );
                        ?>
                        <div class="lizz_pagination">
                        <?php
                                the_posts_pagination( $pagination_args );
                        ?>
                        </div>
                        <?php
                        else :
                            /**
                             * Empty Post
                             *
                             * Run your stuff here if posts empty
                             * Or see Twentysixteen theme page.php
                             * get_template_part( 'template-parts/content', 'none' );
                             */
                        endif;
                        wp_reset_query(); // Restore the $wp_query and global post data to the original main query.


                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- article.page_section.page_main-bd  END  !!-->
</div>
<!-- =========================================================================-->
<!-- 頁面內容  END  !!-->
<!-- =========================================================================-->



<?php
get_footer();