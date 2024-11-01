<?php 
/*
Plugin Name: Titlebar Effect
Description: Plugin for animating titlebar text. This will use to your users’ attention when they open a new tab in the browser.
Author: Jagruti R.
Version: 1.0

*/


function TEffect_enqueue_script()
{   
    wp_enqueue_script( 'title_js', plugin_dir_url( __FILE__ ) . 'assets/js/title.js' );
}
add_action('wp_enqueue_scripts', 'TEffect_enqueue_script');

add_action( 'wp_footer', 'TEffect_footer_scripts' );
function TEffect_footer_scripts(){
  ?>
  <script>
  
  Title.animation('marquee');

  </script>
  <?php
}