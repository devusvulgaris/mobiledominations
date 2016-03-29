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

<footer id="footer" class="front-footer" role="contentinfo">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
  <div class="container">
    <div class="row">
      <div class="footer-logo col-md-4">

         <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img id="footer-img" src="/wp-content/themes/_tk/images/mdlogo_white.png"></a>


      </div>
      <div class="social-links col-md-4">
       <a class="vk social-icon" href="https://vk.com/mobiledomination">Vkontakte</a>
       <a class="twitter social-icon" href="https://twitter.com/mob_domination">Twitter</a>
      </div>
      <div class="footer-info col-md-4">
       <p>Почта:<a href="mailto:info@mobiledomination.ru">info@mobiledomination.ru</a></p>
             </div>
    </div>
          <p class="footer-text text-center">&copy; 2015 Mobile Domination - доступный конструктор мобильных приложений<br />ИП Елизаров Олег Александрович, ОГРНИП 315784700123360</p>
      </div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>
