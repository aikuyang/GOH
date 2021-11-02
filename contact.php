<?php
/*
 Template Name: 聯絡我們
*/

get_header();

$detail = (new Dev)->pageGetAcf(get_the_ID());
 
?>
<div class="partnershipContainer contact">
	<div class="psItem contact"> 
		<div class="psImg" style="background-image: url(<?php echo $detail['img_1']; ?>); background-size: cover; background-repeat: no-repeat; background-position: center; height: 500px;">
			<div class="psTitle">加入勵馨</div>
			<div class="psOverlay">
				<div class="psInner">
					<h3>加入勵馨</h3> 
					<?php
						if ( $detail['Links_1'] ) { 
							?>
							<div class="cList">
								<?php
									foreach ( $detail['Links_1'] as $d ) {
										$title = $d['title'];
										$link = $d['link'];
										?>
										<div class="cItem"><a href="<?php echo $link;?>"><?php echo $title; ?></a></div>
										<?php
									}
								?>
							</div>
							<?php
						}
					?>
				</div>
			</div>
		</div> 
	</div>
	<div class="psItem contact"> 
		<div class="psImg" style="background-image: url(<?php echo $detail['img_2']; ?>); background-size: cover; background-repeat: no-repeat; background-position: center; height: 500px;">
			<div class="psTitle">勵馨合作</div>
			<div class="psOverlay">
				<div class="psInner">
					<h3>勵馨合作</h3> 
					<?php
						if ( $detail['Links_2'] ) { 
							?>
							<div class="cList">
								<?php
									foreach ( $detail['Links_2'] as $d ) {
										$title = $d['title'];
										$link = $d['link'];
										?>
										<div class="cItem"><a href="<?php echo $link;?>"><?php echo $title; ?></a></div>
										<?php
									}
								?>
							</div>
							<?php
						}
					?>
				</div>
			</div>
		</div> 
	</div>
	<div class="psItem contact"> 
		<div class="psImg" style="background-image: url(<?php echo $detail['img_3']; ?>); background-size: cover; background-repeat: no-repeat; background-position: center; height: 500px;">
			<div class="psTitle">客服信箱</div>
			<div class="psOverlay">
				<div class="psInner">
					<h3>客服信箱</h3> 
					<?php
						if ( $detail['Links_3'] ) { 
							?>
							<div class="cList">
								<?php
									foreach ( $detail['Links_3'] as $d ) {
										$title = $d['title'];
										$link = $d['link'];
										?>
										<div class="cItem"><a href="<?php echo $link;?>"><?php echo $title; ?></a></div>
										<?php
									}
								?>
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

get_footer();