<?php

function register_my_menus () {
  register_nav_menus (
    array (
      'header-menu' => __ ('Header menu'),
      'footer-menu' => __ ('Footer menu'),

      )
    );
}

add_action ('init', 'register_my_menus');
