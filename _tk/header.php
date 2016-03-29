<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>
  <?php do_action( 'before' ); ?>
  <div class="loader"><div class="loader-inner"></div></div>

  <header class="site-header" role="banner" id="header2">
   <nav class="site-navigation">
    <div class="container-fluid">
      <div class="row">
        <div class="site-navigation-inner col-sm-12">
          <div class="navbar navbar-default navbar-fixed-top">
            <div class="navbar-header">
              <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only"><?php _e('Toggle navigation','_tk') ?> </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <!-- Your site title as branding in the menu -->
              <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img id="logo-img" src="/wp-content/themes/_tk/images/redlogo.png"></a>

            </div>

            <!-- The WordPress Menu goes here -->
            <!-- The WordPress Menu goes here -->
            <?php wp_nav_menu(
              array(
                'theme_location'  => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'menu_class'    => 'nav navbar-nav navbar-right',
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'menu_id'     => 'main-menu',
                'walker'      => new wp_bootstrap_navwalker()
                )
                ); ?>

              </div><!-- .navbar -->

<?php //if ( !is_user_logged_in() ) {
       //  echo '<a class="login-link" href="#" data-toggle="modal" data-target="#modal-login">Войти</a>';
        //  }
        //   else

         //  { echo '<a class="logout-link" href="' . wp_logout_url( home_url() ) . '">Выйти</a>';
      //  }


 ?>

</div>
</div>
</div><!-- .container -->
</nav><!-- .site-navigation -->



<div class="container-fluid">
  <div class="row">
    <div class="site-header-inner col-sm-12">
      <?php  if( function_exists( 'mc4wp_form' ) ) {
       mc4wp_form();
     }  ?>

   </div>
 </div>
</div><!-- .container -->


<div class="modal fade" id="modal-login"  role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Форма входа</h4>
      </div>
      <div class="modal-body">
        <?php wp_login_form(); ?>
        <?php echo class_exists('VK_api') ? VK_api::get_vk_login() : null; ?>
      </div>
      <div class="modal-footer">
        <?php wp_register('', ''); ?> | <a href="<?php echo wp_lostpassword_url( get_bloginfo('url') ); ?>" title="Восстановление пароля">Восстановление пароля</a>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



</header><!-- #masthead -->




<div class="main-content">
  <?php // substitute the class "container-fluid" below if you want a wider content area ?>
  <div class="container">
    <div class="row">
