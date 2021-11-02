<?php

get_header();

$current = get_queried_object();
$label = $current->label; 
$name = $current->name;
$description = $current->description;

if ( !$label ) {
	$pageTitle = $name;
} else {
	$pageTitle = $label;
}

// ============================================= 勵馨消息 內頁選單
if ( ! isRwd() ) {
	?>
	<div class="container newsTopNav"><?php include('template/news-nav.php');?></div>
	<?php
}

?>
<div class="container projectsArchiveContainer">
	<div class="archiveTitleContainer">
		<?php echo (new Dev)->sectionTitle('inline', $pageTitle, ''); ?>
		<div class="atDesc"><?php echo $description; ?></div>
	</div>
	<?php include('template/projectsBlock.php');?>
	<div class="postsGridContainer">
		<?php include('template/postGrid.php'); ?>
	</div>
	<?php include('template/pagination.php'); ?>
</div>
<?php




get_footer();