<?php /* Template Name: fullwidth */ ?>

<?php get_header(); ?>

<div id="fullwidth">
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <? the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>
</div>

<?php wp_footer(); ?>

</body>
</html>
