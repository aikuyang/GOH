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
	<div class="researchContainer"><?php include('template/research.php'); ?><div class="sep"></div></div>
	<div class="rcPagination"><?php include('template/pagination.php');?></div>
</div>
<?php




get_footer();