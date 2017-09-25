<?php /* Template Name: wheel_page */ ?>


<?php get_header(); ?>

<?php get_template_part( 'navigation'); ?>

<div id="wheel_wrapper">
    <div class="wheel_part1">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/animation/cause.png" alt="CAUSE">
      </div>
      <div class="wheel_part2">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/animation/clarity.png" alt="CLARITY">
      </div>
      <div class="wheel_part3">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/animation/commitment.png" alt="COMMITMENT">
      </div>
      <div class="wheel_part4">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/animation/corage.png" alt="COURAGE">
      </div>
</div>


<div id="content_wrapper">
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <? the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>
</div>


<?php get_footer(); ?>
