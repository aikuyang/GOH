<?php

$current = get_queried_object(); 
$pageTitle = $current->name;  

$childLists = get_term_children('114', 'product_cat');


get_header();
?>
<div class="newsArchiveSliderContainer">
	<div class="newsArchiveSliderg">
		<div class="nasItem" style="background-image: url(http://goh.designhu-demo.com/wp-content/uploads/Rectangle-2-4.png); background-repeat: no-repeat; background-size: cover; background-position: center; height: 100vh;"></div>
		<div class="nasItem" style="background-image: url(http://goh.designhu-demo.com/wp-content/uploads/Rectangle-2-4.png); background-repeat: no-repeat; background-size: cover; background-position: center; height: 100vh;"></div>
		<div class="nasItem" style="background-image: url(http://goh.designhu-demo.com/wp-content/uploads/Rectangle-2-4.png); background-repeat: no-repeat; background-size: cover; background-position: center; height: 100vh;"></div>
		<div class="nasItem" style="background-image: url(http://goh.designhu-demo.com/wp-content/uploads/Rectangle-2-4.png); background-repeat: no-repeat; background-size: cover; background-position: center; height: 100vh;"></div>
	</div>
	<svg width="20" height="40" viewBox="0 0 20 40" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="1" y="1" width="18" height="38" rx="9" stroke="white" stroke-width="2"/><circle cx="9.9987" cy="9.99998" r="6.66667" fill="white"/></svg>
</div>
<div class="newsContainer productCatArchive">
	<div class="container news">
		<?php echo (new Dev)->sectionTitle('block', $pageTitle, 'Arcu, pellentesque pharetra integer purus auctor eget in ultricies enim.'); ?>
		<div class="pcaContainer">
			<div class="pcaTermListContainer">
				<?php
					foreach ( $childLists as $cl ) {
						$term = get_term($cl, 'product_cat');
						$name = $term->name;
						?>
						<div class="pcaItem" data-id="<?php echo $cl;?>"><?php echo $name;?></div>
						<?php

					} 

				?>
			</div>
		</div>
	</div>
</div>
<?php



get_footer();

 