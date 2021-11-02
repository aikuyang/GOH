<?php

get_header();

global $query;

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
	<div class="publicationsContainer"> 
		<?php include('template/publications.php'); ?>
	</div>
	<div class="loadMoreContainer" style="display:block;  text-align:center;">
	<?php
		if (  $query->max_num_pages > 1 ) {
			echo '<div class="loadMore">載入更多</div>';
		} 
		 
	?>
	</div>
</div>
<?php




get_footer();