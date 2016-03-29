<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
      </div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
    </div><!-- close .row -->
  </div><!-- close .container -->


  <!-- The WordPress Menu goes here -->
          <?php wp_nav_menu(
            array(
              'theme_location'  => 'primary',
              'depth'             => 2,
              'container'         => 'nav',
              'container_class'   => 'footer-nav',
              'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
              'menu_id'     => 'footer-menu',
              'walker'      => new wp_bootstrap_navwalker()
            )
          ); ?>

<footer id="footer" class="front-footer" role="contentinfo">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
  <div class="container">
    <div class="row">
      <div class="footer-logo col-md-4">

         <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img id="footer-img" alt="Конструктор мобильных приложений" src="/wp-content/themes/_tk/images/redlogo.png"></a>

      </div>
      <div class="social-links col-md-4">
        <a class="vk social-icon" target="_blank" href="https://vk.com/mobiledomination">Vkontakte</a>
        <a class="twitter social-icon" target="_blank" href="https://twitter.com/mob_domination">Twitter</a>
        <a class="instagram social-icon" target="_blank" href="https://instagram.com/mobiledomination.ru">Twitter</a>
      </div>
      <div class="footer-info col-md-4">
       <p>Почта:<a href="mailto:info@mobiledomination.ru">info@mobiledomination.ru</a></p>
             </div>
    </div>
          <p class="footer-text text-center">&copy; 2015 Mobile Domination - доступный конструктор мобильных приложений<br />ИП Елизаров Олег Александрович, ОГРНИП 315784700123360</p>
      </div><!-- close .container -->
</footer><!-- close #colophon -->
 <!--  Subscription Modal -->
  <div class="modal fade" id="subscriptionModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:#1993b6;" class="text-center"><span class="glyphicon glyphicon-lock"></span>Будьте в курсе мобильных технологий!</h4>
        </div>
        <div class="modal-body text-center">
          <?php if( function_exists( 'mc4wp_form' ) ) {
                mc4wp_form();
                }
         ?>
         <p>Присоединяйтесь к мобильной революции!</p>
        </div>

      </div>
    </div>
  </div>

<?php wp_footer(); ?>

</body>
</html>
