<?php
$allCategory = get_categories();
$thisCategory = get_the_category();
// var_dump($allCategory);
?>

<aside class="main_aside col-lg-2">
	<div class="news_category">
		<h3 class="heading txt-white txt-h4">分類</h3>
		<ul class="lis-n">
			<li class="news_category-item"><a class="inner" href="<?php echo get_site_url() . "/" . $args['en']; ?>">所有文章</a></li>
			<?php
			foreach ($allCategory as $key => $value) :
				// var_dump($value);
				$cateid = $value->cat_ID;
				$name = $value->cat_name;
				$slug = $value->category_nicename;
				$link = get_category_link($cateid);
				$current = "";

				// var_dump($thisCategory);
				if ($thisCategory) {
					$current = ( $thisCategory[0]->cat_ID == $cateid && !empty($thisCategory)) ? "current-category" : "";
				}
			?>
			<li class="news_category-item<?php echo " " . $current; ?>" data-category="<?php echo $cateid; ?>"><a class="inner" href="<?php echo $link; ?>"><?php echo $name; ?></a></li>
			<?php
			endforeach;
			?>
		</ul>
	</div>
</aside>