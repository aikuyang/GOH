<?php 

	if ( have_posts() ):
		while( have_posts()) :  the_post();
			$posttype = get_post_type( get_the_ID() ); 
			$img = get_the_post_thumbnail_url( get_the_ID() );
			$title = get_the_title( get_the_ID() );
			$link = get_the_permalink( get_the_ID() );
			$term = wp_get_post_terms( get_the_ID(), $posttype.'-category');
			$excerpt = get_the_excerpt( get_the_ID() );

			
			$termName = $term[0]->name;
			$termLink = get_term_by('id', $term[0]->term_id, $posttype.'-category');

			$outLink = get_field('link');


			 

			$num = get_field('num', get_the_ID() );
		?>
		<div class="postGrid">
			<div class="pgImg" style="background-image:url(<?php echo $img;?>); background-repeat: no-repeat; background-position: center; background-size:cover; height: 270px;">
				<div class="pgOverylay"><span>閱讀全文</span></div>
			</div>
			<div class="pgContent">
				<div class="pgMeta">
					<?php
					if ( $num ) {
						?><a><?php echo $num;?></a><?php
					} else {
						?><a href="<?php echo $termLink->slug;?>"><?php echo $termName; ?></a><?php
					}
					?>
				</div>
				<h4><?php echo $title;?></h4>
				<div class="pgExcerpt"><?php echo $excerpt; ?></div>
			</div>
			<?php 
			if ( $outLink ) {
				?><a href="<?php echo $outLink;?>" target="_blank"></a><?php
			} else {
				?><a href="<?php echo $link;?>"></a><?php
			}
			?>
			
		</div>
		<?php




		endwhile;
	endif; 