<?php

	if ( have_posts() ):
		while( have_posts()) :  the_post();
			$link = get_field('link', get_the_ID() );

			?>
<div class="rcItem"><a href="<?php echo $link; ?>" target="_blank"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 0.039978L9.345 3.57998H4.5V6.57998L1.455 8.51498C0.585 9.03998 0 9.98498 0 11.08V26.08C0 27.745 1.35 29.08 3 29.08H27C28.665 29.08 30 27.745 30 26.08V11.08C30 9.98498 29.415 9.03998 28.545 8.51498L25.5 6.57998V3.57998H20.655L15 0.039978ZM7.5 6.57998H22.5V13.9L15 18.58L7.5 13.9V6.57998ZM9 8.07998V10.33H21V8.07998H9ZM4.5 10.15V12.025L3 11.08L4.5 10.15ZM25.5 10.15L27 11.08L25.5 12.025V10.15ZM9 11.83V14.08H21V11.83H9Z" fill="#B3B3B3"/></svg><span><?php the_title();?></span></a></div>
			<?php 

		endwhile;
	endif;