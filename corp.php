<?php
/*
 Template Name: 合作子頁面
*/

get_header();
$current = get_queried_object();  
$detail = (new Dev)->pageGetAcf(get_the_ID());


?>
<div class="branchBannerContainer" style="background-image: url(<?php echo $detail['kv'];?>);background-repeat: no-repeat; background-position: center; background-size: cover; height: 800px; margin-top: -40px;">
	<div class="branchTitle">
		<h1><?php echo $current->post_title;?></h1>
		<?php
			if ( !wp_is_mobile() ) {
				?><div class="branchInfo"><?php echo $detail['info'];?></div><?php
			}
		?> 
	</div>
	<svg width="20" height="40" viewBox="0 0 20 40" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="1" y="1" width="18" height="38" rx="9" stroke="white" stroke-width="2"/><circle cx="9.9987" cy="9.99998" r="6.66667" fill="white"/></svg>
</div>
<!------------------------------ 合作 ------------------------------> 
<div class="corpChildContainer">
	<div class="container corpChild">
		<?php echo (new Dev)->sectionTitle('null', $detail['title_1'], ''); ?> 
		<div class="ccdContainer">
			<?php 
				$coprItems = $detail['corpItemList'];
				$i = 1;
				foreach ( $coprItems as $coprItem ) {
					$title = $coprItem['title'];
					$content = $coprItem['content'];
					?>
					<div class="ccdItem">
						<div class="ccdTitle"><?php echo $i++;?>. <?php echo $title; ?>：</div> 
						<div class="ccdContent"><?php echo $content; ?></div>
					</div>
					<?php
				}
			?>
		</div>
	</div>
</div>

<!------------------------------ 合作方式流程＆其他＆各分所 ------------------------------> 
<div class="corpChild2Container">
	<div class="container corpChild2">
		<?php
			$telBlock = $detail['showBranchTelList'];  
		?>
		<div class="progressContainer <?php echo ( $telBlock != 'no' )?'withTel':'';?>">
			<div class="ptCol-<?php echo $telBlock?'6':'12';?>">
				<div class="infoBlock">
					<?php echo (new Dev)->sectionTitle('null', $detail['title_2'], ''); ?>
					<div class="infoContainer">
						<?php 
							echo $detail['content']; 
							$btn = $detail['btnText'];
							if ( $btn ) {
								?>
								<a href="<?php echo $detail['btnLink'];?>"><?php echo $btn; ?></a>
								<?php
							} 
						?>
						<div class="noteList">
							<?php
								$notes = $detail['note'];
								$n = 1;
								foreach ( $notes as $note ) {
									$content = $note['content'];
									?><div class="nlItem">註<?php echo $n++;?>：<?php echo $content;?></div><?php
								}
							?>
						</div>
					</div>
				</div>
				<?php
					$showTeacher = $detail['showTeacher'];
					if ( $showTeacher === 'yes' ) {
						?> 
						<div class="teacherBlock">
							<?php echo (new Dev)->sectionTitle('null', '專講講師群', ''); ?>
							<div class="tbContainer">
								<?php 
									$teacherLists = $detail['teacherList'];
									foreach ( $teacherLists as $tl ) {
										$img = $tl['img'];
										$name = $tl['name'];
										$jobTitle = $tl['jobTitle'];
										$branch = $tl['branch'];
										?>
										<div class="tbItem">
											<div class="tbImg" style="background-image: url(<?php echo $img;?>); background-repeat: no-repeat; background-position: center; background-size: cover; width: 165px; height: 165px; border-radius: 165px;"></div>
											<div class="tbInfo"><?php echo $name;?><span><?php echo $jobTitle.'｜'.$branch;?></span></div>
										</div>
										<?php
									}
								?>
							</div>
						</div>
						<?php
					}
				?> 
			</div>
			<?php
				if ( $telBlock ==='yes' ) {
					?>
					<div class="ptCol-6">
						<?php echo (new Dev)->sectionTitle('null', '各分事務所聯絡方式', ''); ?>
						<div class="ptInfo">如果您需要了解專講更多內容,請利用聯絡我們聯繫,或撥打全會各分部電話:</div>
						<div class="telListContainer">
							<div class="telListBlock">
								<div class="tlbTitle">
									<div class="tlbTi">地點</div>
									<div class="tlbTi">電話</div>
								</div> 
							<?php 

								$originBranchData = wp_remote_get( 'http://goh.designhu-demo.com/wp-json/twmap/v1/corptel/' );
								$apiResponse = json_decode( wp_remote_retrieve_body( $originBranchData ), true );
								
								foreach ( $apiResponse as $ar ) {  
								 
									$title = $ar['title'];
									$phone = $ar['st_1'];
									?>
									<div class="tlbItem">
										<div class="tlbi"><?php echo $title;?></div>
										<div class="tlbi"><?php echo $phone;?></div>
									</div>
									<?php  
								}
							?>
							</div>
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