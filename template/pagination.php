<div class="pagination-wrapper">
	<?php
	$pag_args = array(
		'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
		'total'        => $wp_query->max_num_pages,
		'current'      => max( 1, get_query_var( 'paged' ) ),
		'format'       => '?paged=%#%',
		'show_all'     => false,
		'type'         => 'plain',
		'end_size'     => 2,
		'mid_size'     => 1,
		'prev_next'    => true,
		'prev_text'    => sprintf( '<'),
		'next_text'    => sprintf( '>'),
		'add_args'     => false,
		'add_fragment' => '',
	);
	echo paginate_links($pag_args);
	?>
</div>