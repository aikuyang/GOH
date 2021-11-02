<?php
/*
 Template Name: 加入連署
*/

get_header();
$current = get_queried_object(); 
$detail = (new Dev)->coSign();
$kv = $detail['kv'];
$btnLink = $detail['btnLink'];

$title = $detail['title'];
$enTitle = $detail['enTitle'];
$content = $detail['content'];

$coSignList = $detail['coSignList'];
$decl = $detail['decl'];

?>
<div class="branchBannerContainer" style="background-image: url(<?php echo $kv;?>);background-repeat: no-repeat; background-position: center; background-size: cover; height: 800px; margin-top: -40px;">
	<div class="branchTitle">
		<h1>加入聯署</h1>
		<div class="branchInfo">Join the co-sign</div>
		<?php
			if ( $btnLink ) {
				?><a href="<?php echo $btnLink;?>" target="_blank">前往聯署</a><?php
			} else {
				?><a href="#go">前往聯署</a><?php
			}
		?>
	</div>
	<svg width="20" height="40" viewBox="0 0 20 40" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="1" y="1" width="18" height="38" rx="9" stroke="white" stroke-width="2"/><circle cx="9.9987" cy="9.99998" r="6.66667" fill="white"/></svg>
</div>
<!------------------------------ 區塊一 ------------------------------>
<div class="csMainContainer">
	<div class="container csMain">
		<?php echo (new Dev)->sectionTitle('block', $title, $enTitle); ?>
		<div class="csmContainer"><?php echo $content;?></div>
	</div>
	<div class="container csGrid">
		<div class="csGridContainer">
			<div class="csgMain">
				<?php 
					$img = $coSignList[0]['img'];
					$title = $coSignList[0]['title'];
					$content = $coSignList[0]['content'];
					$linkText = $coSignList[0]['linkText'];
					$linkLink = $coSignList[0]['linkLink'];
				?> 
				<div class="csgmImg" style="background-image: url(<?php echo $img;?>); background-repeat: no-repeat; background-position: center; background-size: cover;"></div>
				<div class="csgmContent">
					<h4><?php echo $title;?></h4>
					<div class="csgmInner"><?php echo $content;?></div>
					<a href="<?php echo $linkLink;?>" target="_blank"><?php echo $linkText; ?><svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1.5L6 6.5L1 11.5" stroke="#E50057" stroke-width="2" stroke-linecap="round"/></svg></a>
				</div>
			</div>
		</div>
		<div class="csgItemContainer">
		<?php 
			foreach ( array_slice($coSignList, 1) as $csl ) {
				$img = $csl['img'];
				$title = $csl['title'];
				$content = $csl['content'];
				$linkText = $csl['linkText'];
				$linkLink = $csl['linkLink'];
				?>
				<div class="csgItem">
					<a href="<?php echo $linkLink;?>">
						<div class="item" style="background-image: url(<?php echo $img;?>); background-repeat: no-repeat; background-position: center; background-size: cover;"></div>
						<h4><?php echo $title;?></h4>
					</a>
				</div>
				<?php
			} 

		?>
		</div>
	</div>
</div>

<!------------------------------ 正在聯署 ------------------------------>
<div class="onGoingContainer">
	<div class="container onGoing">
		<?php echo (new Dev)->sectionTitle('block', '正在聯署', 'Arcu, pellentesque pharetra integer purus auctor eget in ultricies enim.'); ?>
		<div class="onGContainer">
			<?php
				$onLists = (new Dev)->getNews('perspectives','perspectives_tag', '102');
				$o = 0;
				foreach ( $onLists as $onList ) {
					$id = $onList->id;
					$img = $onList->img;
					$title = get_the_title($id);
					$link = get_the_permalink($id);

					if ( $o++ <= 2 ) { 
						?>
						<div class="ongItem">
							<a href="<?php echo $link;?>" target="_blank">
								<div class="ongImg" style="background-image: url(<?php echo $img;?>); background-repeat: no-repeat; background-position: center; background-size: cover;"></div>
								<div class="ongContent">
									<h4><?php echo $title;?></h4>
									<span>我要聯署</span>
								</div>
							</a>
						</div>
						<?php
					}
				} 
			?> 
		</div>
	</div>
</div>
<!------------------------------ 最新聯合聲明 ------------------------------>
<div class="csNoticeContainer">
	<div class="container csNotice">
		<?php echo (new Dev)->sectionTitle('block', '最新聯合聲明', 'Arcu, pellentesque pharetra integer purus auctor eget in ultricies enim.'); ?>
		<div class="csNoticeList" id="csn">
			<?php
				foreach ( $decl as $d ) {
					$img = $d['img'];
					$title = $d['title'];
					$content = $d['content'];
					$link = $d['link'];
					?>
					<div class="csni">
						<div class="csnItem">
							<div class="csnContent">
								<div class="csnTag">#聯署消息</div>
								<h4><?php echo $title;?></h4>
								<div class="csnInner"><?php echo $content;?></div>
								<a href="<?php echo $link;?>" target="_blank">了解更多<svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1.08594L6 6.08594L1 11.0859" stroke="#E50057" stroke-width="2" stroke-linecap="round"/></svg></a>
							</div>
							<div class="csnImg" style="background-image: url(<?php echo $img;?>); background-repeat: no-repeat; background-position: center; background-size:cover;"></div>
						</div>
				</div>
					<?php
				} 
			?>
		</div>
		<div class="holder"></div>
	</div>
</div>
<?php


get_footer();