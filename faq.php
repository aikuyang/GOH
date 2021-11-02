<?php
/*
 Template Name: 常見問題
*/

get_header();

$current = get_queried_object();
$pageTitle = $current->label; 
$postTitle = $current->post_title;

$title = '';
if ( $pageTitle ) {
	$title = $pageTitle;
} else {
	$title = $postTitle;
}

$args = array( 
	'taxonomy' => 'faq-category',
    'hide_empty' => false,
    'parent' => 0,
    'orderby' => 'id',
    'order' => 'asc'
);

$terms = get_terms($args); 

$faqPosts = get_field('faqPosts' , '330');




?>
<div class="faqArchiveContainer">
	<div class="container projectsArchiveContainer">
		<div class="archiveTitleContainer">
			<?php echo (new Dev)->sectionTitle('null', $title, 'FAQ'); ?>
			<div class="atDesc"><?php echo $projectShortInfo = get_field('faqInfo'); ?></div>
		</div>  
	</div> 
	<div class="faqList container">
		<?php echo (new Dev)->sectionTitle('null', '常見問題', ''); ?>
		<div class="faqContentContainer">
		<?php
			foreach ( $faqPosts as $fp ) {
				$id = $fp;
				?>
				<div class="fcItem" data-id="<?php echo $id;?>" data-status="close">
					<span class="title"><?php echo get_the_title($id);?></span>
					<span class="content"><?php (new Dev)->getContent($id);?></span>
				</div>
				<?php
			}
		?>
		</div>
	</div>
	<div class="faqNavContainer">
		<div class="container fn">
			<div class="fnList">
				<?php 
					foreach ( $terms as $term ) {
						$name = $term->name;
						$id = $term->term_id;
						?>
						<div class="fnItem" data-id="<?php echo $id;?>"><span><?php echo $name;?></span></div>
						<?php
					}
				?>
			</div>
		</div>
	</div>

	<?php 
		foreach ( $terms as $term ) {
			$name = $term->name;
			$id = $term->term_id;
 
			$children = get_term_children($id, 'faq-category');


			?> 
			<div class="faqContainer">
				<div class="container fn">
					<?php echo (new Dev)->sectionTitle('null', $name, ''); ?>
					<div class="faqContentContainer">
						<?php
						if ( $children ) {
							foreach ( $children as $child ) {
								$term = get_term_by( 'id', $child, 'faq-category' );
								$name = $term->name;
								$id = $term->term_id;
								?>
								<div class="fcItem hasChild" data-id="<?php echo $id;?>" data-status="close">
									<span class="title"><?php echo $name;?></span>
								</div>
								<div class="fcItemSubContainer">
								<?php
								$args = array(
									'post_type' => 'faq',
									'tax_query' => array(
										array (
											'taxonomy' => 'faq-category',
											'field' => 'id',
											'terms' => $id
										)
									)
								); 

								$query = new WP_Query($args);
								if ( $query->have_posts() ) {
									while ( $query->have_posts() ) : $query->the_post();
										$postid = $query->ID;
										?> 
										<div class="fcItem sub" data-id="<?php echo $postid;?>" data-status="close">
											<span class="title"><?php echo get_the_title($postid);?></span>
											<span class="content"><?php (new Dev)->getContent($postid);?></span>
										</div>
										<?php
									endwhile;
								}  
								?></div><?php
							}
						} else {
							$args = array(
								'post_type' => 'faq',
								'tax_query' => array(
									array (
										'taxonomy' => 'faq-category',
										'field' => 'id',
										'terms' => $id
									)
								)
							); 

							$query = new WP_Query($args);
							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) : $query->the_post();
									$postid = $query->ID;
									?> 
									<div class="fcItem" data-id="<?php echo $postid;?>" data-status="close">
										<span class="title"><?php echo get_the_title($postid);?></span>
										<span class="content"><?php (new Dev)->getContent($postid);?></span>
									</div>
									<?php
								endwhile;
							} 
						}


						?>
					</div>
				</div>
			</div>
			<?php
		}
	?>
</div>
<?php




get_footer();