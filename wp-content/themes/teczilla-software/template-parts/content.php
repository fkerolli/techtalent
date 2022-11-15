<?php 
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
?>


<div class="blog-cont mb-70 xs-mb-50">
	<?php if(has_post_thumbnail()) : ?>
        <div class="blog-image">
    		<?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>
    <div class="blg-content">
        <ul class="blog-meta">
            <?php teczilla_posted_on(); ?>
            <?php teczilla_posted_by(); ?>
        </ul>
        <h3 class="title mb-10"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
		<?php the_excerpt(); ?>
        <div class="btn-mor">
            <a class="read-mor" href="<?php the_permalink(); ?>"><?php echo esc_html__('Continue Reading','teczilla-software');?></a>
        </div>
    </div>
</div>