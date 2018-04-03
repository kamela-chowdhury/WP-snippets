<?php 
if (is_post_type_archive() || is_category() || is_archive() || $paged > 1 || is_author() || is_tag() || is_date() || is_attachment() ){
?>
<meta name="robots" content="noindex,follow">
<?php }?>
