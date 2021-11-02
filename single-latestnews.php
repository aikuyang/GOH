<?php

get_header();

// ============================================= Post Info 
$current = get_queried_object();
$currentID = $current->ID;
$currentFeatureImgUrl = get_the_post_thumbnail_url($currentID);

$postType = get_post_type($currentID);



$currentTerms = get_the_terms($currentID, $postType.'-category');
$currentTermsID = $currentTerms[0]->term_id;
$currentTermsName = $currentTerms[0]->name;
$currentTermsLink = get_term_link($currentTermsID);

$detail = (new Dev)->postDetail(get_the_ID());
 

// ============================================= 勵馨消息 內頁選單
if ( ! isRwd() ) {
	?>
	<div class="container newsTopNav"><?php include('template/news-nav.php');?></div>
	<?php
}


// ============================================= 勵馨消息 內容

?>
<div class="container single_post_container">
	<!---------------- Date & Category ---------------->
	<div class="singlePostMeta">
		<div class="date"><?php echo get_the_date( 'Y/m/d', get_the_ID() );?></div>
		<div class="sep">|</div>
		<div class="category"><a href="<?php echo $currentTermsLink; ?>"><?php echo $currentTermsName; ?></a></div>
	</div>
	<!---------------- Title ---------------->
	<h2><?php echo get_the_title( get_the_ID() );?></h2>
	<!---------------- Write & Editor & Source ---------------->
	<div class="singlePostSource">
		<?php
			$w = $detail['writer'];
			$e = $detail['editor'];
			$lt = $detail['linkText'];
			$l = $detail['link'];

			if ( $w ) {
				?><div class="sps writer"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="10" height="10" fill="#F2F2F2"/></svg>撰文/<?php echo $w;?></div><?php
			}		

			if ( $e ) {
				?><div class="sps editor"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="10" height="10" fill="#F2F2F2"/></svg>編輯/<?php echo $e;?></div><?php
			}		

			if ( $lt ) {
				?>
				<div class="sps source">
					<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="10" height="10" fill="#F2F2F2"/></svg>
					<?php 
						if ( $l ) {
							?>轉載/<a href="<?php echo $l;?>" target="_blank"><?php echo $lt;?></a><?php
						} else {
							?>轉載/<?php echo $lt;?><?php
						}
					?>

				</div>
				<?php
			}
		?>
	</div>
	<!---------------- Feature Image ---------------->
	<div class="spFeatureImage" style="background-image:url(<?php echo $currentFeatureImgUrl; ?>); background-size: cover; background-repeat: no-repeat; background-position: center; height: 500px;"></div>
	<?php caption();?>
	<!---------------- Main Content ---------------->
	<div class="singleMainContent"><?php the_content();?></div>

	<!---------------- Sub Content ---------------->
	<div class="singleSubContent"><?php echo $detail['content_2']; ?></div>

	<!---------------- Share & Tags ---------------->
	<div class="shareTagsContainer">
		<div class="shareContainer">分享 <?php echo do_shortcode('[addtoany]'); ?></div>
		<div class="tagsContainer"><?php (new Dev)->singlePostTagsList( get_the_ID(), 'latestnews_tag' ); ?></div>
	</div>
	<?php 
	if ( $detail['file_url'] ) {
		?>
		<!---------------- Download ---------------->
		<div class="dlContainer">
			<?php echo (new Dev)->sectionTitle('inline', '下載檔案', ''); ?>
			<div class="fileContainer">
				<a href="<?php echo $detail['file_url']; ?>"><svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 0L24 9V27C24 27.7956 23.6839 28.5587 23.1213 29.1213C22.5587 29.6839 21.7956 30 21 30H3C2.20435 30 1.44129 29.6839 0.87868 29.1213C0.31607 28.5587 0 27.7956 0 27V3C0 2.20435 0.31607 1.44129 0.87868 0.87868C1.44129 0.31607 2.20435 0 3 0H15ZM21 27V10.5H13.5V3H3V27H21ZM10.38 15.465C10.02 14.31 9.225 10.62 11.325 10.56C13.425 10.5 12.045 15.24 12.045 15.24C12.63 17.475 15.075 19.08 15.075 19.08C15.825 18.855 20.1 18.36 19.5 20.58C18.855 22.8 14.25 20.715 14.25 20.715C11.325 20.925 9.135 21.705 9.135 21.705C7.44 24.87 5.46 26.25 4.65 24.915C3.645 23.25 7.845 21.105 7.845 21.105C10.02 17.58 10.35 15.525 10.38 15.465ZM11.355 16.725C10.755 18.675 9.555 20.76 9.555 20.76C10.83 20.25 13.62 19.665 13.62 19.665C11.91 18.165 11.385 16.74 11.355 16.725ZM16.065 19.98C16.065 19.98 18.69 20.955 18.75 20.565C18.855 20.16 16.755 19.8 16.065 19.98ZM7.575 22.215C6.42 22.665 5.31 24.585 5.58 24.585C5.85 24.6 6.945 23.685 7.575 22.215ZM11.355 13.89C11.355 13.815 12 11.37 11.355 11.295C10.905 11.25 11.34 13.83 11.355 13.89Z" fill="#E50057"/></svg><span class="fileName"><?php echo $detail['file_name']; ?></span>
				</a>

			</div>
		</div>		
		<?php
	} 
	?>

	<!---------------- Donate ---------------->
	<div class="donateContainer">
		<?php echo (new Dev)->sectionTitle('inline', '募資方案', ''); ?>
		<div class="dnContainer">
			<div class="dnImage" style="background-image:url(http://goh.designhu-demo.com/wp-content/uploads/Rectangle-39.png); background-repeat: no-repeat; background-position: center; background-size:cover; height:343px;"></div>
			<div class="dnContent">
				<h5>一杯咖啡 支持倡議更進一步</h5>
				<div class="dnInner">勵馨基金會三十多年來，秉持著服務與倡議同行的理念，持續在各大發聲，推動相關法案進行，近年來，我們促成了法案法案法案法案法案法案法案法案，如果您也一樣在意社會公眾利益，我們想邀請您...</div>
				<a href="/" class="dnBtn"><span>前往介紹頁面</span></a>
			</div>
		</div>
	</div>
	<!---------------- Related ---------------->
	<div class="relatedPostsContainer">
		<?php echo (new Dev)->sectionTitle('inline', '相關文章', ''); ?>
		<?php (new Dev)->singlePostBtmRelatedPostList( $detail['relateds'] ); ?>
	</div>
</div>

<?php



get_footer();