<div id="navi_wrapper">

    <div id="logo">
      <a href="<?php echo get_home_url(); ?>" title="Home">
        <img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="Kaltenbacher Consulting"></a>

    </div>

    <div id="navi">

        <?php wp_nav_menu( array( 'theme_location' => 'header-menu') ); ?>

    </div>
</div>
