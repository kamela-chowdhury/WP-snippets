<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
          
  <div class="header-wrap" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">
     <header class="entry-header">
    <h1 class="entry-title"><?php the_title(); ?></h1>
     </header>
  </div>  
