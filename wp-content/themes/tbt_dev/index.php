<?php get_header(); ?>

<?php get_template_part( 'navigation'); ?>

<div id="content_wrapper">
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <? the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>
</div>


<?php get_footer(); ?>
