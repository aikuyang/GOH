<?php

get_header();

$current = get_queried_object();
$pageTitle = $current->label;  
$detail = (new Dev)->newsArchiveField();
$sliders = $detail['banner'];
$reports = $detail['reports'];

// ============================================= SLIDER
?>
<div class="newsArchiveSliderContainer">
	<div class="newsArchiveSlider">
	<?php
		foreach ( $sliders as $slider ) {
			$img = $slider['img'];
			?>
			<div class="nasItem" style="background-image: url(<?php echo $img;?>); background-repeat: no-repeat; background-size: cover; background-position: center; height: 100vh;"></div>
			<?php
		}

	?> 
	</div>
	<svg width="20" height="40" viewBox="0 0 20 40" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="1" y="1" width="18" height="38" rx="9" stroke="white" stroke-width="2"/><circle cx="9.9987" cy="9.99998" r="6.66667" fill="white"/></svg>
</div>
<?php
// ============================================= 勵馨消息 內頁選單
if ( ! isRwd() ) {
	?>
	<div class="container newsTopNav"><?php include('template/news-nav.php');?></div>
	<?php
}
?>
<!------------------------------ 最新消息 ------------------------------>
<div class="newsContainer">
	<div class="container news">
		<?php echo (new Dev)->sectionTitle('null', '最新消息', 'GOHs News'); ?>
		<div class="newsInnerContainer">
			<div class="niCol-4">
				<?php

					$projects = (new Dev)->getNews('projects');
					$id = $projects[0]->id;
					$img = $projects[0]->img;
					$taxName = $projects[0]->tax[0]->name;
					$taxLink = get_term_link($projects[0]->tax[0]);
					$title = get_the_title($id);
					$excerpt = get_the_excerpt($id);
					$link = get_the_permalink($id);  
				 
				?>
				<div class="niMain">
					<div class="nimImg" style="background-image: url(<?php echo $img;?>); background-repeat: no-repeat; background-position: center; background-size: cover; height: 270px;"></div>
					<div class="nimContent">
						<div class="nimMeta"><a href="<?php echo $taxLink;?>"><?php echo $taxName;?></a></div>
						<h4><?php echo $title;?></h4>
						<div class="nimExcerpt"><?php echo $excerpt;?></div>
					</div>
					<a href="<?php echo $link;?>"></a>
				</div>
			</div>
			<div class="niCol-8">
				<div class="nimList">
				<?php

					$events = (new Dev)->getNews('latestnews','latestnews-category', '47');

					foreach ( $events as $event ) {
						$id = $event->id;
						$taxName = $event->tax[0]->name;
						$taxLink = get_term_link($event->tax[0]);
						$title = get_the_title($id); 
						$link = get_the_permalink($id);  
						$img = $event->img;
						?>
						<div class="nimItem">
							<div class="nimCol-4" style="background-image: url(<?php echo $img;?>); background-repeat: no-repeat; background-position: center; background-size: cover;"></div>
							<div class="nimCol-8">
								<div class="nimMeta"><a href="<?php echo $taxLink;?>"><?php echo $taxName; ?></a></div>
								<h4><?php echo $title; ?></h4>
							</div>
							<a href="<?php echo $link;?>"></a>
						</div>
						<?php
					}

				?>
				</div>
			</div>
		</div>
	</div>
</div>
	 
<!------------------------------ 勵馨觀點/媒體報導 ------------------------------>
<div class="viewsContainer">
	<div class="container views">
		<div class="vCol-8">
			<?php echo (new Dev)->sectionTitle('null', '勵馨觀點', 'GOHs View'); ?>
			<div class="viewList">
			<?php
				$perspectives = (new Dev)->getNews('perspectives');
				$i = 0;
				foreach ( $perspectives as $p ) {
					$id = $p->id;
					$img = $p->img;
					$taxName = $p->tax[0]->name;
					$taxLink = get_term_link($p->tax[0]);
					$title = get_the_title($id); 
					$link = get_the_permalink($id);  

					if ( $i++ <= 3 ) {
						?>
						<div class="viewItem">
							<div class="viImg" style="background-image: url(<?php echo $img;?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
								<div class="viOverlay"><span>閱讀全文</span></div>
							</div>
							<div class="viContent">
								<div class="vic">
									<div class="viMeta"><a href="<?php echo $taxLink;?>"><?php echo $taxName; ?></a></div>
									<div class="viTitle"><?php echo $title; ?></div>
								</div>
							</div>
							<a href="<?php echo $link;?>"></a>
						</div>
						<?php
					}
				} 
			?>
			</div>
		</div>
		<div class="vCol-4">
			<?php echo (new Dev)->sectionTitle('null', '媒體報導', 'GOHs View'); ?>
			<div class="mediaList">
				<?php
					foreach ( $reports as $r ) {
						$source = $r['source'];
						$title = $r['title'];
						$link = $r['link'];
						?>
						<div class="mlItem">
							<a href="<?php echo $link;?>">
								<div class="mlMeta"><?php echo $source; ?></div>
								<h5><?php echo $title;?></h5>
							</a>
						</div>
						<?php
					}
				?>
			</div> 
		</div>
	</div>
</div>

<!------------------------------ 專題報導 ------------------------------>
<div class="newsContainer second">
	<div class="container news">
		<?php echo (new Dev)->sectionTitle('null', '專題報導', 'GOHs Report'); ?>
		<div class="newsInnerContainer">
			<div class="niCol-4">
				<?php

					$projects = (new Dev)->getNews('projects');
					$id = $projects[0]->id;
					$img = $projects[0]->img;
					$taxName = $projects[0]->tax[0]->name;
					$taxLink = get_term_link($projects[0]->tax[0]);
					$title = get_the_title($id);
					$excerpt = get_the_excerpt($id);
					$link = get_the_permalink($id);  
				 
				?>
				<div class="niMain">
					<div class="nimImg" style="background-image: url(<?php echo $img;?>); background-repeat: no-repeat; background-position: center; background-size: cover; height: 270px;"></div>
					<div class="nimContent">
						<div class="nimMeta"><a href="<?php echo $taxLink;?>"><?php echo $taxName;?></a></div>
						<h4><?php echo $title;?></h4>
						<div class="nimExcerpt"><?php echo $excerpt;?></div>
					</div>
					<a href="<?php echo $link;?>"></a>
				</div>
			</div>
			<div class="niCol-8">
				<div class="nimList">
				<?php

					$events = (new Dev)->getNews('projects');
					$e = 0;
					foreach ( $events as $event ) {
						$id = $event->id;
						$taxName = $event->tax[0]->name;
						$taxLink = get_term_link($event->tax[0]);
						$title = get_the_title($id); 
						$link = get_the_permalink($id);  
						$img = $event->img;
						
						if ( $e++ <= 2 ) { 
							?>
							<div class="nimItem">
								<div class="nimCol-4" style="background-image: url(<?php echo $img;?>); background-repeat: no-repeat; background-position: center; background-size: cover;"></div>
								<div class="nimCol-8">
									<div class="nimMeta"><a href="<?php echo $taxLink;?>"><?php echo $taxName; ?></a></div>
									<h4><?php echo $title; ?></h4>
								</div>
								<a href="<?php echo $link;?>"></a>
							</div>
							<?php
						}
					}

				?>
				</div>				
			</div>
		</div>
	</div>
</div>

<!------------------------------ 活動快訊 ------------------------------>
<div class="newsEventContainer">
	<div class="container ne">
		<?php echo (new Dev)->sectionTitle('null', '活動快訊', 'GOHs Report'); ?> 
		<div class="neContainer">
		<?php
		$events = (new Dev)->getNews('latestnews','latestnews-category', '47');

		$i = 0;
		foreach ( $events as $event ) {
			$id = $event->id;
			$taxName = $event->tax[0]->name;
			$taxLink = get_term_link($event->tax[0]);
			$title = get_the_title($id); 
			$link = get_the_permalink($id);
			$excerpt = get_the_excerpt($id);
			$img = $event->img;

			if ( $i++ <= 2 ) {
				?>
				<div class="postGrid">
					<div class="pgImg" style="background-image:url(<?php echo $img;?>); background-repeat: no-repeat; background-position: center; background-size:cover; height: 270px;">
						<div class="pgOverylay"><span>閱讀全文</span></div>
					</div>
					<div class="pgContent">
						<div class="pgMeta"><a href="<?php echo $taxLink;?>"><?php echo $taxName; ?></a></div>
						<h4><?php echo $title;?></h4>
						<div class="pgExcerpt"><?php echo $excerpt; ?></div>
					</div>
					<a href="<?php echo $link;?>"></a>
				</div>		
				<?php
			}
		}

		?> 
		</div>
	</div>
</div>

<!------------------------------ 愛馨企業 ------------------------------>
<div class="caringContainer">
	<div class="container caring">
		<?php echo (new Dev)->sectionTitle('null', '愛馨企業', 'GOHs Caring Enterprise'); ?> 
		<div class="caringList">
			<?php 
				$caring = (new Dev)->getNews('latestnews','latestnews-category', '71');
				foreach ( $caring as $ca ) {
					$id = $ca->id;
					$img = $ca->img; 
					$title = get_the_title($id); 
					$link = get_the_permalink($id);  
 
						?>
						<div class="viewItem">
							<div class="viImg" style="background-image: url(<?php echo $img;?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
								<div class="viOverlay"><span>閱讀全文</span></div>
							</div>
							<div class="viContent">
								<div class="vic"> 
									<div class="viTitle"><?php echo $title; ?></div>
								</div>
							</div>
							<a href="<?php echo $link;?>"></a>
						</div>
						<?php 
				} 
			
			?>
		</div>
	</div>
</div>

<!------------------------------ 勵馨出版 ------------------------------>
<div class="publishContainer">
	<div class="container publish">
		<?php echo (new Dev)->sectionTitle('null', '勵馨出版', 'GOHs Publish'); ?> 
		<div class="publishList">
			<?php
				$publishs = (new Dev)->getNews('pr','pr-category', '74');
				foreach ( $publishs as $publish ) {
					$id = $publish->id;
					$title = $publish->outTitle;
					$img = $publish->img;
					$fileLink = $publish->fileLink;
					?>
					<div class="pItem">
						<a href="<?php echo $fileLink;?>" target="_blank">
							<div class="pItemImg" style="background-image: url(<?php echo $img;?>); background-repeat: no-repeat; background-position: center; background-size: contain; height: 263px;"></div>
							<div class="pItemTitle"><span class="publish">勵馨會訊</span><?php echo $title;?></div>
						</a>
					</div>
					<?php
				}
			?>
		</div>
	</div>
</div>

<!------------------------------ 記者媒體採訪/愛馨企業合作 ------------------------------>
<div class="corpContainer">
	<div class="container corp">
		<div class="cpContainer">
			<div class="cpCol-6">
				<?php echo (new Dev)->sectionTitle('null', '記者/媒體採訪', 'GOHs Publish'); ?>
				<div class="coprInner">
					<?php echo $detail['content_1'];?>
				</div>
				<a href="<?php echo $detail['bl_1'];?>"><?php echo $detail['bt_1'];;?></a>
			</div>
			<div class="cpCol-6">
				<?php echo (new Dev)->sectionTitle('null', '愛馨企業合作', 'GOHs Publish'); ?>
				<div class="coprInner">
					<?php echo $detail['content_2'];?>
				</div>
				<a href="<?php echo $detail['bl_2'];?>"><?php echo $detail['bt_2'];;?></a>
			</div>
		</div>
	</div>
</div>

 

<?php
get_footer();