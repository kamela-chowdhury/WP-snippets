$args = array(
	'posts_per_page'   => $posts_per_page,
	'category'         => '',
	'orderby'          => $sort_by,
	'order'            => $sort_order,
	'post_type'        => 'services',
	'post_status'      => 'publish'
); 

?> 
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
		$query = new WP_Query($args); 
	?>
		<?php if ( $query->have_posts() ) { ?>
			<?php
			while ($query->have_posts()) {
			global $post;
			$query->the_post();
			}}
			wp_reset_postdata();
			wp_reset_query(); 
			?>
