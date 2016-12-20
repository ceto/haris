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


  function haris_login_logo_url() {
    return home_url();
  }
  add_filter( 'login_headerurl', 'haris_login_logo_url' );


  function haris_login_stylesheet() {
      wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/dist/styles/login.css' );
  }

  add_action( 'login_enqueue_scripts', 'haris_login_stylesheet' );

  /**
   * Redirect user after successful login.
   *
   * @param string $redirect_to URL to redirect to.
   * @param string $request URL the user is coming from.
   * @param object $user Logged user's data.
   * @return string
   */
  function haris_login_redirect( $redirect_to, $request, $user ) {
    //is there a user to check?
    if ( isset( $user->roles ) && is_array( $user->roles ) ) {
      //check for admins
      if ( in_array( 'administrator', $user->roles ) ) {
        // redirect them to the default place
        return $redirect_to;
      } else {
        return home_url();
      }
    } else {
      return $redirect_to;
    }
  }

  add_filter( 'login_redirect', 'haris_login_redirect', 10, 3 );


  function haris_logout_redirect() {
      return home_url();
  }
  add_filter( 'logout_redirect', 'haris_logout_redirect');


  function haris_no_dashboard() {
    if (!current_user_can('manage_options') && $_SERVER['DOING_AJAX'] != '/wp-admin/admin-ajax.php') {
    wp_redirect(home_url()); exit;
    }
  }
  add_action('admin_init', 'haris_no_dashboard');

  if ( ! current_user_can( 'manage_options' ) ) {
      show_admin_bar( false );
  }
