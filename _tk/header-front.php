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


<body data-spy="scroll" data-target=".navbar-collapse" <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>
  <div class="loader"><div class="loader-inner"></div></div>

  <header class="site-header" role="banner" id="header" data-z-index="1" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/appsbgreddark.jpg">
    <?php // substitute the class "container-fluid" below if you want a wider content area ?>
    <nav class="site-navigation">
      <?php // substitute the class "container-fluid" below if you want a wider content area ?>
      <div class="container">
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
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img id="logo-img" alt="конструктор мобильных приложений" src="wp-content/themes/_tk/images/redlogo.png"></a>



              </div>

              <!-- The WordPress Menu goes here -->
              <div class="collapse navbar-collapse">
               <ul class="onepage-menu nav navbar-nav navbar-right">

                <li>
                  <a class="onepage-link" href="#benefits">Что Вы получите</a>
                </li>
                <li>
                  <a class="onepage-link" href="#workflow">Как это работает</a>
                </li>
                <li>
                  <a class="onepage-link" href="#features">Возможности</a>
                </li>
                <li>
                  <a class="onepage-link" href="#whom">Для кого</a>
                </li>
                <li>
                  <a class="onepage-link" href="#price">Стоимость</a>
                </li>
                <li>
                  <a class="onepage-link" href="#faq">Частые вопросы</a>
                </li>
                <li>
                  <a class="onepage-link" href="#contact">Контакты</a>
                </li>
                <li>
                  <a href="blog">Блог</a>
                </li>
              </ul>

            </div>






          </div><!-- .navbar -->

<?php // if ( !is_user_logged_in() ) {
       //  echo '<a class="login-link" href="#" data-toggle="modal" data-target="#modal-login">Войти</a>';
       //   }
        //   else

        //   { echo '<a class="logout-link" href="' . wp_logout_url( home_url() ) . '">Выйти</a>';
       // }


 ?>



</div>
</div>
</div><!-- .container -->
</nav><!-- .site-navigation -->



<div class="container">
  <div class="row">
   <div class="site-header-inner col-sm-12">

    <?php $header_image = get_header_image();
    if ( ! empty( $header_image ) ) { ?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
      <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
    </a>
    <?php } // end if ( ! empty( $header_image ) ) ?>


    <div class="site-branding">
     <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
     <p class="lead"><?php bloginfo( 'description' ); ?></p>
   </div>

 </div>
</div>
</div><!-- .container -->

<div class="container in-header">

  <div class="header-cell">
   <div class="header-text"  >
     <h1 class="text-center"><?php //the_title(); ?>Создавайте мобильные приложения без навыков программирования!</h1>
     <div class="header-descr">
       <h3 class="text-center"><?php // echo get_post_meta($post->ID, 'Subtitle', true); ?>Доступ к конструктору приложений для iOS, Android и HTML5</h3>
       <button class="center-block order-btn btn-red" data-toggle="modal" data-target="#cart-form">Получить доступ!</button>
     </div>
   </div>
 </div>
</div>

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

  <div class="container-fluid">
    <div class="row">

