<?php  
	global $query;

	$args = array(
		'post_type' => 'pr',
		'tax_query' => array(
			array(
				'taxonomy' => 'pr-category',
				'field'    => 'slug',
				'terms'    => 'publications',
			),
		), 
	);

	$query = new WP_Query( $args );
	
	if ( $query->have_posts() ):
		while( $query->have_posts()) :  $query->the_post();
			$posttype = get_post_type( get_the_ID() ); 
			$img = get_the_post_thumbnail_url( get_the_ID() );
			$title = get_the_title( get_the_ID() );
			$link = get_the_permalink( get_the_ID() );
			$term = wp_get_post_terms( get_the_ID(), $posttype.'-category');
			$excerpt = get_the_excerpt( get_the_ID() );

			
			$termName = $term[0]->name;
			$termLink = get_term_by('id', $term[0]->term_id, $posttype.'-category');

			$outLink = get_field('link');



			// book
			$year = get_field('year');
			$bookInfo = get_field('bookInfo');
			$status = get_field('status');
			$buyLink = get_field('buyLink');

			 

			$num = get_field('num', get_the_ID() );
		?>
		<div class="postGrid" data-id="<?php echo get_the_ID(); ?>">
			<div class="pgImg">
				<img src="<?php echo $img;?>" max-width="100%" width="100%" height="100%">
				<div class="pgOverylay">
					<span><svg width="30" height="25" viewBox="0 0 30 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.5 14.4278C23.5773 14.4278 24.7227 14.5437 25.9091 14.7756V16.9499C25.0636 16.718 23.9182 16.6021 22.5 16.6021C19.9091 16.6021 17.8773 17.0804 16.3636 18.0371V15.5874C17.9591 14.8191 20.0045 14.4278 22.5 14.4278ZM16.3636 11.7171C18.1227 10.9489 20.1682 10.572 22.5 10.572C23.5773 10.572 24.7227 10.6735 25.9091 10.9054V13.0797C25.0636 12.8478 23.9182 12.7318 22.5 12.7318C19.9091 12.7318 17.8773 13.2246 16.3636 14.1668V11.7171ZM22.5 8.87604C19.9091 8.87604 17.8773 9.33989 16.3636 10.3256V7.91935C18.0409 7.10761 20.0864 6.70174 22.5 6.70174C23.5773 6.70174 24.7227 6.8177 25.9091 7.03513V9.28191C24.9 9.0065 23.7409 8.87604 22.5 8.87604ZM27.2727 20.4723V3.80267C25.8545 3.32432 24.2591 3.0779 22.5 3.0779C19.7045 3.0779 17.2091 3.80267 15 5.2522V21.9219C17.2091 20.4723 19.7045 19.7476 22.5 19.7476C24.1227 19.7476 25.7182 19.9795 27.2727 20.4723ZM22.5 0.178833C25.7045 0.178833 28.2136 0.9036 30 2.35314V23.4584C30 23.6323 29.9318 23.8062 29.7818 23.9657C29.6318 24.0962 29.4682 24.2121 29.3182 24.2121C29.1682 24.2121 29.0591 24.1831 28.9773 24.1396C27.2318 23.1395 25.0636 22.6466 22.5 22.6466C19.7045 22.6466 17.2091 23.3714 15 24.8209C13.1727 23.3714 10.6773 22.6466 7.5 22.6466C5.23636 22.6466 3.06818 23.1685 1.02273 24.1976C0.981818 24.2121 0.927273 24.2121 0.859091 24.2411C0.804545 24.2556 0.75 24.2701 0.681818 24.2701C0.531818 24.2701 0.368182 24.2121 0.218182 24.0962C0.0681818 23.9367 0 23.7773 0 23.5888V2.35314C1.82727 0.9036 4.33636 0.178833 7.5 0.178833C10.6773 0.178833 13.1727 0.9036 15 2.35314C16.8273 0.9036 19.3227 0.178833 22.5 0.178833Z" fill="#E50057"/></svg>閱讀此書</span>
				</div>
			</div>
		</div>
		<?php




		endwhile;
	endif; 

 
