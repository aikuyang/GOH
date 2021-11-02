<?php
/*
 Template Name: 客服信箱
*/

get_header();

$title = get_field('title');
$enTitle = get_field('enTitle');
$img = get_field('img');
$content = get_field('content');
$spContent = get_field('spContent');
$btnText = get_field('btnText');
$btnLink = get_field('btnLink'); 
?>
<div class="contactContainer">
	<div class="container content">
		<div class="titleSection">
			<?php echo (new Dev)->sectionTitle('block', $title, $enTitle); ?>
		</div>
		<div class="contactSection">
			<div class="csContainer">
				<div class="csCol-3">
					<img src="<?php echo $img;?>" alt="">
				</div>
				<div class="csCol-9">
					<div class="content">
						<?php echo $content; ?>
					</div>
					<div class="spContent">
						<?php 
							foreach ( $spContent as $spc ) {
								$content = $spc['content'];
								?><div class="spItem"><?php echo $content; ?></div><?php 
							} 
						?>
					</div>
					<a href="<?php echo $btnLink;?>"><?php echo $btnText; ?></a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php


get_footer();