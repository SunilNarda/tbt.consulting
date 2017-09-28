<?php /* Template Name: about */ ?>

<?php get_header(); ?>

<?php get_template_part( 'navigation'); ?>

<style>
#custom_background{
  background-image: url("<?php the_field("bg_image"); ?> ");
}
</style>

<div id="custom_background">

<div id="content_wrapper_2">
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <? the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>
</div>

</div>

<?php get_template_part( 'footer2'); ?>
