<?php
/*
  Plugin Name: WordPress auto-update disabler
  Description: Disable all automatic updates.
*/

add_filter( 'auto_update_plugin', '__return_false' );
add_filter( 'auto_update_theme', '__return_false' );
