<?php
/**
 * @package WordPress
 * @subpackage Adapt Theme
 */
$options = get_option( 'adapt_theme_settings' );
?>
<?php get_header(); ?>

<div class="home-wrap clearfix">

    <!-- Homepage Highlights -->
    <?php
    //get post type ==> hp highlights
        global $post;
        $args = array(
            'post_type' =>'hp_highlights',
            'numberposts' => '-1'
        );
        $highlight_posts = get_posts($args);
    ?>
    <?php if($highlight_posts) { ?>


    <section id="home-highlights" class="clearfix">
        <?php
        $count=0;
        foreach($highlight_posts as $post) : setup_postdata($post);
        $count++;
        //get img
        $feat_img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full-size');
        ?>

        <article class="hp-highlight <?php if($count == '4') { echo 'remove-margin'; } if($count == '3') { echo ' responsive-clear'; } ?>">
            <h2><?php if($feat_img) { ?><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - Lesen Sie weiter..."><span><img src="<?php echo $feat_img[0]; ?>" alt="<?php the_title(); ?>" /></span></a><?php } ?><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - Lesen Sie weiter..."><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - Lesen Sie weiter...">Lesen Sie weiter...</a>
        </article>
        <!-- /hp-highlight -->

        <?php
        if($count == '4') { echo '<div class="clear"></div>'; $count=0; }
        endforeach; ?>
    </section>
    <!-- /home-projects -->
    <?php } ?>

    <!-- Recent Blog Posts from category "Allgemein" (ID 1) -->
    <section id="home-posts" class="clearfix">
		<h2 class="heading"><span><?php if(!empty($options['recent_work_text'])) { echo $options['recent_news_text']; } else { _e('Recent News','adapt'); }?></span></h2>
		<?php
		query_posts('posts_per_page=4&cat=1');
		while(have_posts()) : the_post();
		?>
		<article class="home-entry">
			<?php if ( has_post_thumbnail()) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - Lesen Sie weiter..."><?php the_post_thumbnail('related-post-thumbnail',array('title' => "")); ?></a>
			<?php endif; ?>
			<div class="home-entry-description">
				<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - Lesen Sie weiter..."><?php echo the_title(); ?></a></h3>
				<?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - Lesen Sie weiter...">Lesen Sie weiter ...</a>
			</div>
	    </article>
		<?php endwhile; ?>
		<div class="clear"></div>
	</section>
	<!-- /home-posts -->

</div>
<!-- END home-wrap -->
<?php get_footer(); ?>
