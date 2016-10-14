<?php
  // 1. customize ACF path
  add_filter('acf/settings/path', 'haris_acf_settings_path');
  function haris_acf_settings_path( $path ) {
      $path = get_stylesheet_directory() . '/lib/acf/';
      return $path;
  }

  // 2. customize ACF dir
  add_filter('acf/settings/dir', 'haris_acf_settings_dir');
  function haris_acf_settings_dir( $dir ) {
    $dir = get_stylesheet_directory_uri() . '/lib/acf/';
    return $dir;
  }

  // 3. Hide ACF field group menu item
  //add_filter('acf/settings/show_admin', '__return_false');

  // 4. Include ACF
  include_once( get_stylesheet_directory() . '/lib/acf/acf.php' );

  //include_once( get_stylesheet_directory() . '/lib/haris-acf.php' );

  //include_once( get_stylesheet_directory() . '/lib/haris-customobjects.php' );

  //enable svg upload to media library
  function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');