<?php
/*
 Template Name: 全台服務分所
*/

get_header();
$current = get_queried_object();
$banner = get_field('kv');

$terms = get_terms( array(
    'taxonomy' => 'branch-area',
    'hide_empty' => false,
    'orderby' => id,
    'order' => asc,
) );


?>
<div class="branchBannerContainer" style="background-image: url(<?php echo $banner;?>);background-repeat: no-repeat; background-position: center; background-size: cover; height: 800px; margin-top: -40px;">
	<div class="branchTitle">
		<h1>全台服務分所</h1>
		<div class="branchInfo">我是範例文字我是範例文字我是範例文字我是範例文字，我是範例文字我是範例文字我是範例文字我是範例文字，我是範例文字我是範例文字。</div>
	</div>
	<svg width="20" height="40" viewBox="0 0 20 40" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="1" y="1" width="18" height="38" rx="9" stroke="white" stroke-width="2"/><circle cx="9.9987" cy="9.99998" r="6.66667" fill="white"/></svg>
</div>

<div class="allBranchContainer">
	<div class="container ab">
		<div class="abNavContainer">
			<?php
			foreach ( $terms as $term ) {
				$id = $term->term_id;
				$name = $term->name;
				?>
				<div class="abItem" data-id="<?php echo $id;?>"><?php echo $name;?></div>
				<?php
			}
			?>
		</div>
		<div class="abContentContainer"> 
		</div>
	</div>
</div>

<?php
get_footer();