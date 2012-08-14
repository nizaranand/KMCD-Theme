<?php
while (have_posts()) : the_post();
//get featured img
$feat_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'grid-thumb');
?>

<article class="loop-entry clearfix">
	<?php if($feat_img) { ?>
    	<a href="<?php the_permalink(' ') ?>" title="<?php the_title(); ?>" class="loop-entry-thumbnail"><img src="<?php echo $feat_img[0]; ?>" alt="<?php echo the_title(); ?>" /></a>
	<?php } ?>
	<h2><a href="<?php the_permalink(' ') ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<?php the_excerpt(''); ?>
</article>
<!-- loop-entry -->

<?php endwhile; ?>
