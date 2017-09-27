<?php /* Template Name: wheel_page */ ?>


<?php get_header(); ?>

<?php get_template_part( 'navigation'); ?>

<style>
  #wheel_wrapper {
    margin-top: 500px;
  }
</style>

<div class="flex_container">

<div id="wheel_container">
  <div id="wheel_wrapper">
    <div id="wheel_part1">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/animation/cause.svg" alt="CAUSE">
    </div>
    <div id="wheel_part2">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/animation/clarity.svg" alt="CLARITY">
    </div>
    <div id="wheel_part3">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/animation/commitment.svg" alt="COMMITMENT">
    </div>
    <div id="wheel_part4">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/animation/courage.svg" alt="COURAGE">
    </div>
  </div>
</div>

<div id="wheel_textfelder">
  <div id="cause_textfield" class="wheel_textfield">
    <?php the_field("cause_txt"); ?>
  </div>
  <div id="clarity_textfield" class="wheel_textfield">
    <?php the_field("clarity_txt"); ?>
  </div>
  <div id="commitment_textfield" class="wheel_textfield">
    <?php the_field("commitment_txt"); ?>
  </div>
  <div id="courage_textfield" class="wheel_textfield">
    <?php the_field("courage_txt"); ?>
  </div>
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