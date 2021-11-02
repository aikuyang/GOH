<?php
/*
 Template Name: 國際事務
*/
get_header();

$current = get_queried_object(); 
$detail = (new Dev)->pageGetAcf(get_the_ID());


?>
<div class="branchBannerContainer" style="background-image: url(<?php echo $detail['img'];?>);background-repeat: no-repeat; background-position: center; background-size: cover; height: 800px; margin-top: -40px;">
	<div class="branchTitle">
		<h1><?php echo $current->post_title; ?></h1>
		<div class="branchInfo"><?php echo $detail['info'];?></div>
		<div class="branchSocialList">
			<a href="<?php echo $detail['facebook']; ?>" target="_blank" class="fb"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="30" height="30" rx="15" fill="white"/><path fill-rule="evenodd" clip-rule="evenodd" d="M19.1654 7.19747V9.74431L17.6538 9.74825C16.4689 9.74825 16.2406 10.3112 16.2406 11.1339V12.9564H19.063L18.6969 15.8063H16.2406V23.2225H13.2966V15.8063H10.832V12.9564H13.2966V10.8544C13.2966 8.41381 14.7842 7.08331 16.9649 7.08331C18.0045 7.08331 18.9016 7.16204 19.1654 7.19747Z" fill="#E50057"/></svg></a>
			<a href="<?php echo $detail['twitter']; ?>" target="_blank" class="twi"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="30" height="30" rx="15" fill="white"/><path d="M12.0318 21.9932C18.0698 21.9932 21.3718 16.9949 21.3718 12.6605C21.3718 12.5185 21.3689 12.3772 21.3625 12.2365C22.0035 11.7735 22.5606 11.1957 23 10.538C22.4118 10.7992 21.7789 10.9751 21.1149 11.0544C21.7926 10.6483 22.3129 10.0059 22.5584 9.24013C21.9241 9.61584 21.2218 9.88891 20.4739 10.0363C19.8749 9.39877 19.0221 9 18.0778 9C16.265 9 14.7949 10.469 14.7949 12.2797C14.7949 12.5371 14.8237 12.7874 14.88 13.0276C12.1517 12.8904 9.7325 11.5852 8.11341 9.60049C7.83149 10.0852 7.66893 10.6483 7.66893 11.2491C7.66893 12.3871 8.24847 13.3917 9.12975 13.9795C8.59118 13.9628 8.08525 13.8151 7.64305 13.5692C7.64257 13.583 7.64257 13.5964 7.64257 13.6111C7.64257 15.1997 8.7741 16.526 10.2761 16.8265C10.0003 16.9016 9.71008 16.9419 9.41055 16.9419C9.19935 16.9419 8.99358 16.9212 8.79359 16.8828C9.2115 18.1861 10.4234 19.1345 11.8601 19.161C10.7366 20.0409 9.32126 20.565 7.78303 20.565C7.51838 20.565 7.25695 20.55 7 20.5196C8.45281 21.4501 10.1779 21.993 12.032 21.993" fill="#E50057"/></svg></a>
		</div>
	</div>
	<svg width="20" height="40" viewBox="0 0 20 40" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="1" y="1" width="18" height="38" rx="9" stroke="white" stroke-width="2"/><circle cx="9.9987" cy="9.99998" r="6.66667" fill="white"/></svg>
</div>
<div class="worldmapContainer">
	<div class="container worldmap">
		<div class="worldMapNav">
			<div class="wmItem" data-id="AGC">
				<div class="title">AGC</div>
				<div class="content">
					<ul style="list-style: none; margin: 0px; padding: 0px;">
						<li>菲律賓</li>
						<li>日本</li>
						<li>印尼</li>
						<li>敘利亞</li>
						<li>越南</li>
						<li>土耳其</li>
						<li>柬埔寨</li>
						<li>美國</li>
						<li>泰國</li>
						<li>台灣</li>
						<li>尼泊爾</li>
						<li>印度</li>
						<li>孟加拉</li>
						<li>塔吉克斯坦</li>
						<li>蒙古</li>
						<li>巴基斯坦</li>
					</ul>
				</div>
			</div>
			<div class="wmItem" data-id="ANWS">
				<div class="title">ANWS</div>
				<div class="content">
					<ul style="list-style: none; margin: 0px; padding: 0px;">
						<li>柬埔寨</li>
						<li>日本</li>
						<li>馬來西亞</li>
						<li>台灣</li>
						<li>新加坡</li>
						<li>孟加拉</li>
						<li>蒙古</li>
						<li>越南</li>
						<li>韓國</li>
						<li>東帝汶</li>
						<li>尼泊爾</li>
						<li>印度</li>
						<li>香港</li>
					</ul>
				</div>
			</div>
			<div class="wmItem" data-id="GNWS">
				<div class="title">GNWS</div>
				<div class="content"> 
					<ul style="list-style: none; margin: 0px; padding: 0px;">
						<li>衣索比亞</li>
						<li>義大利</li>
						<li>肯亞</li>
						<li>以色列</li>
						<li>盧安達</li>
						<li>荷蘭</li>
						<li>南非</li>
						<li>厄瓜多爾</li>
						<li>日本</li>
						<li>墨西哥</li>
						<li>巴基斯坦</li>
						<li>摩洛哥</li>
						<li>越南</li>
						<li>美國</li>
						<li>亞美尼亞</li>
						<li>加拿大</li>
						<li>奧地利</li>
						<li>澳洲</li>
						<li>愛沙尼亞</li>
						<li>紐西蘭</li>
						<li>台灣</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="worldmap" style="background-image:url(http://goh.designhu-demo.com/wp-content/uploads/AGC_MapChart_Map.png); background-repeat: no-repeat; background-position: center; background-size: contain; height: 750px;"></div>
	</div>
</div>
<div class="toggleBlockContainer">
	<?php
		if ( $detail['toggleTitle_1'] ) {
			?>
			<div class="toggleItem active" data-index="1">
				<div class="toggleTitleContainer">
					<div class="container ti">
						<div class="tbTitle">
							<svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 6L0 0V12L10 6Z" fill="#E50057"/></svg><?php echo $detail['toggleTitle_1']; ?>
						</div> 
					</div>
				</div>
				<div class="toggleContentContainer">
					<div class="switchNav">
						<div class="sn prev" data-action="prev"><svg width="32" height="18" viewBox="0 0 32 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 17L16 2L31 17" stroke="#E50057" stroke-width="2" stroke-linecap="round"/></svg></div>
						<div class="sn next" data-action="next"><svg width="32" height="18" viewBox="0 0 32 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L16 16L31 1" stroke="#E50057" stroke-width="2" stroke-linecap="round"/></svg></div>
					</div>
					<div class="container ti"> 
						<div class="tbContent">
							<div class="tbCol-4">
								<h4><?php echo $detail['toggleTitle_1']; ?></h4>
								<?php 
									$i = 0;
									foreach ( $detail['affairs_1'] as $a ) {
										$title = $a['title']; 
										?>
										<div class="title" data-index="<?php echo $i++; ?>"><?php echo $title; ?></div>
										<?php
									}
								?>
							</div> 
							<div class="tbCol-8"> 
								<?php 
									$ii = 0;
									foreach ( $detail['affairs_1'] as $a ) {
										$img = $a['img']; 
										$content = $a['content'];
										?>
										<div class="inner" data-index="<?php echo $ii++;?>">
											<div class="img" style="background-image: url(<?php echo $img; ?>); background-repeat: no-repeat; background-position: center; background-size:contain; height: 270px;"></div>
											<div class="content"><?php echo $content; ?></div>
										</div>
										<?php
									}
								?>
							</div> 
						</div>
					</div>
				</div> 
			</div>			
			<?php
		}

		if ( $detail['toggleTitle_2'] ) {
			?>
			<div class="toggleItem" data-index="2">
				<div class="toggleTitleContainer">
					<div class="container ti">
						<div class="tbTitle">
							<svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 6L0 0V12L10 6Z" fill="#E50057"/></svg><?php echo $detail['toggleTitle_2']; ?></div> 
					</div>
				</div>
				<div class="toggleContentContainer">
					<div class="switchNav">
						<div class="sn prev" data-action="prev"><svg width="32" height="18" viewBox="0 0 32 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 17L16 2L31 17" stroke="#E50057" stroke-width="2" stroke-linecap="round"/></svg></div>
						<div class="sn next" data-action="next"><svg width="32" height="18" viewBox="0 0 32 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L16 16L31 1" stroke="#E50057" stroke-width="2" stroke-linecap="round"/></svg></div>
					</div>
					<div class="container ti"> 
						<div class="tbContent">
							<div class="tbCol-4">
								<h4><?php echo $detail['toggleTitle_2']; ?></h4> 
								<div class="tbInner">
									<?php echo $detail['affairs_2'][0]['content']; ?>
								</div>
							</div> 
							<div class="tbCol-8">
								<div class="tbInner">
									<div class="img" style="background-image:url(<?php echo $detail['affairs_2'][0]['img']; ?>); background-repeat: no-repeat; background-size: contain; background-position: center; height: 270px;"></div>
									<div class="content"><?php echo $detail['affairs_2'][0]['content_2']; ?></div>
								</div>
							</div> 
						</div>
					</div>
				</div> 
			</div>
			<?php
		}

		if ( $detail['toggleTitle_3'] ) {
			?>
			<div class="toggleItem" data-index="3">
				<div class="toggleTitleContainer">
					<div class="container ti">
						<div class="tbTitle">
							<svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 6L0 0V12L10 6Z" fill="#E50057"/></svg><?php echo $detail['toggleTitle_3'];?>
						</div> 
					</div>
				</div>
				<div class="toggleContentContainer">
					<div class="switchNav">
						<div class="sn prev" data-action="prev"><svg width="32" height="18" viewBox="0 0 32 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 17L16 2L31 17" stroke="#E50057" stroke-width="2" stroke-linecap="round"/></svg></div>
						<div class="sn next" data-action="next"><svg width="32" height="18" viewBox="0 0 32 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L16 16L31 1" stroke="#E50057" stroke-width="2" stroke-linecap="round"/></svg></div>
					</div>
					<div class="container ti"> 
						<div class="tbContent">
							<div class="tbCol-4">
								<h4><?php echo $detail['toggleTitle_3']; ?></h4> 
								<div class="tbInner">
									<?php echo $detail['affairs_3'][0]['content']; ?>
								</div>
							</div> 
							<div class="tbCol-8">
								<div class="tbInner">
									<div class="img" style="background-image:url(<?php echo $detail['affairs_3'][0]['img']; ?>); background-repeat: no-repeat; background-size: contain; background-position: center; height: 270px;"></div>
									<div class="content"><?php echo $detail['affairs_3'][0]['content_2']; ?></div>
								</div>
							</div> 
						</div>
					</div>
				</div> 
			</div>
			<?php
		}

		if ( $detail['toggleTitle_4'] ) {
			?>
			<div class="toggleItem" data-index="4">
				<div class="toggleTitleContainer">
					<div class="container ti">
						<div class="tbTitle">
							<svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 6L0 0V12L10 6Z" fill="#E50057"/></svg>
							<?php echo $detail['toggleTitle_4']; ?>
						</div> 
					</div>
				</div>
				<div class="toggleContentContainer">
					<div class="switchNav">
						<div class="sn prev" data-action="prev"><svg width="32" height="18" viewBox="0 0 32 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 17L16 2L31 17" stroke="#E50057" stroke-width="2" stroke-linecap="round"/></svg></div>
						<div class="sn next" data-action="next"><svg width="32" height="18" viewBox="0 0 32 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L16 16L31 1" stroke="#E50057" stroke-width="2" stroke-linecap="round"/></svg></div>
					</div>
					<div class="container ti"> 
						<div class="tbContent">
							<div class="tbCol-4">
								<h4><?php echo $detail['toggleTitle_4']; ?></h4> 
								<div class="tbInner">
									<?php echo $detail['affairs_4'][0]['content']; ?>
								</div>
							</div> 
							<div class="tbCol-8">
								<div class="tbInner">
									<div class="img" style="background-image:url(<?php echo $detail['affairs_4'][0]['img']; ?>); background-repeat: no-repeat; background-size: contain; background-position: center; height: 270px;"></div>
									<div class="content"><?php echo $detail['affairs_4'][0]['content_2']; ?></div>
								</div>
							</div> 
						</div>
					</div>
				</div> 
			</div>			
			<?php
		}

	?>




</div>
<div class="affairsNewsContainer">
	<div class="container affairsNews">
		<?php echo (new Dev)->sectionTitle('block', '最新消息', 'News'); ?>
		<?php echo (new Dev)->newsGrid(); ?>
	</div>
</div>
<div class="videoContainer">
	<div class="container video"> 
		<iframe src="https://www.youtube.com/embed/<?php echo $detail['video'];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
	</div>
</div>
<div class="freeBlockContainer">
	<div class="container freeBlock"> 
		<?php echo (new Dev)->sectionTitle('block', $detail['title'], $detail['subtitle']); ?>
		<div class="freeInnerContainer">
			<?php
				foreach ( $detail['blocks'] as $block ) {
					$img = $block['img'];
					$title = $block['title'];
					$content = $block['content'];
					$linkText = $block['LinkText'];
					$link = $block['Link'];
					?>
					<div class="blockItem"> 
						<div class="blockImg" style="background-image: url(<?php echo $img;?>); background-repeat: no-repeat; background-size: cover; background-position: center; height: 297px;"></div>
						<div class="blockInner">
							<h4><?php echo $title;?></h4>
							<div class="blockContetn"><?php echo $content;?></div>
						</div> 
						<div class="blockLink">
							<a href="<?php echo $link;?>" target="_blank"><?php echo $linkText;?></a>
						</div>
					</div>
					<?php
				}
			?>
		</div>
	</div>
</div>
<?php

get_footer();