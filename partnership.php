<?php
/*
 Template Name: 勵馨合作
*/
get_header();

 
$partnership = get_field('partnership');

?><div class="partnershipContainer"><?php
foreach ( $partnership as $ps ) {
	$img = $ps['backgroundImage'];
	$postId = $ps['page'];
	if ( $postId ) {
		$title = get_the_title($postId);
		$link = get_the_permalink($postId);
	} else {
		$title = $ps['title'];
		$link = $ps['link'];
	} 
	$info = $ps['info'];

	?>
	<div class="psItem">
		<a href="<?php echo $link;?>">
			<div class="psImg" style="background-image: url(<?php echo $img; ?>); background-size: cover; background-repeat: no-repeat; background-position: center; height: 500px;">
				<div class="psTitle"><?php echo $title; ?></div>
				<div class="psOverlay">
					<div class="psInner">
						<h3><?php echo $title; ?></h3>
						<div class="psInfo"><?php echo $info;?></div>
						<div class="psBtn">了解更多</div>
					</div>
				</div>
			</div>
		</a>
	</div>
	<?php

}
?></div><?php
 

get_footer();