<?php
/**
 * Template name: Full width
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */

get_header('front'); ?>


<?php // while ( have_posts() ) : the_post(); ?>

  <?php //get_template_part( 'content', 'page' ); ?>

  <?php
			// If comments are open or we have at least one comment, load up the comment template
			//if ( comments_open() || '0' != get_comments_number() )
			//	comments_template();
  ?>

  <?php //endwhile; // end of the loop. ?>

  <section id="konstruktor">
   <div class="container">
    <div class="row vpadding">
     <h2 class="text-center">Уникальное предложение!</h2>
     <div class="icon-div col-sm-push-0 col-sm-12 col-md-push-1 col-md-10">
       <p>
        Хотите делать функциональные мобильные приложения, но Вам не хватает опыта в программировании?
        Предоставляем доступ к двум конструкторам мобильных приложений.
        Один конструктор подходит для быстрого создания мобильных приложений без навыков программирования.
        Второй конструктор с продвинутым функционалом подойдёт для фрилансеров и веб-студий.
      </p>
      <p>Не упустите отличную возможность создать приложение и начать бизнес на мобильных приложениях!</p>


 <!-- <p>Для просмотра видео обзора и получения более полного представления о работе данного конструктора нажмите <a class="onepage-link" href="#video">сюда</a></p>
-->
</div>
</div>
</div>
</section>


<section id="benefits">
  <div class="container">
    <div class="row vpadding">
      <h2 class="text-center">Что Вы получите?</h2>

      <div class="icon-div col-xs-12 col-sm-6 col-md-4">
        <img class="icon" src="wp-content/themes/_tk/images/icons/unlimitedred.png" alt="Безлимитные приложения">
        <h3>Безлимитные приложения</h3>
        <p>Вы сможете создавать сколько угодно приложений для iOS и Android</p>
      </div>
      <div class="icon-div col-xs-12 col-sm-6 col-md-4">
        <img class="icon" src="wp-content/themes/_tk/images/icons/updatered.png" alt="Обновление приложений">
        <h3>Обновления</h3>
        <p>Обновляйте контент в приложении и поддерживайте взаимодействие с пользователями</p>
      </div>
      <div class="icon-div col-xs-12 col-sm-6 col-md-4">
        <img class="icon" src="wp-content/themes/_tk/images/icons/savingred.png" alt="Самый доступный конструктор приложений">
        <h3>Самая низкая цена</h3>
        <p>Мы гарантируем, что Вы нигде не найдёте более выгодного предложения и условий</p>
      </div>
      <div class="icon-div col-xs-12 col-sm-6 col-md-4">
        <img class="icon" src="wp-content/themes/_tk/images/icons/programmingred.png" alt="Конструктор приложений без навыков программирования">
        <h3>Программирование не обязательно</h3>
        <p>Вам не нужно быть xCode и java программистом, чтобы создать своё приложение. Вы можете создать приложение, выбрав шаблон и добавив необходимый контент, аудио и видео</p>
      </div>
      <div class="icon-div col-xs-12 col-sm-6 col-md-4">
        <img class="icon" src="wp-content/themes/_tk/images/icons/featuresred.png" alt="Возможности конструктора пиложений от Mobile Domination">
        <h3>Возможности конструктора</h3>
        <p>С помощью конструктора Вы можете создавать интересные и функциональне приложения, обновлять контент в уже опубликованных приложениях и монетизировать созданные Вами приложения</p>
      </div>
      <div class="icon-div col-xs-12 col-sm-6 col-md-4">
        <img class="icon" src="wp-content/themes/_tk/images/icons/clienthelpred.png" alt="Поддержка клиентов">
        <h3>Поддержка клиентов</h3>
        <p>Мы всегда будем рады помочь Вам по любым вопросам</p>
      </div>
    </div>
  </div>
</section>

<section id="workflow">
  <div class="container">
    <div class="row vpadding">
      <h2 class="text-center">Как это работает</h2>

      <div class="icon-div col-xs-12 col-sm-6 col-md-3">
        <img class="icon" src="wp-content/themes/_tk/images/icons/choosered.png" alt="Выберите шаблон в конструкторе приложений">
        <h3>Выберите шаблон</h3>
        <p>Доступно более 60-ти шаблонов для разных видов приложений.</p>
      </div>
      <div class="icon-div col-xs-12 col-sm-6 col-md-3">
        <img class="icon" src="wp-content/themes/_tk/images/icons/editred.png" alt="Отредактируйте шаблон в конструктре приложений">
        <h3>Отредактируйте</h3>
        <p>Измените выбранный шаблон в соответствии с Вашими нуждами</p>
      </div>
      <div class="icon-div col-xs-12 col-sm-6 col-md-3">
       <img class="icon" src="wp-content/themes/_tk/images/icons/developmentred.png" alt="Создание приложений Mobile Domination">
       <h3>Процесс создания</h3>
       <p>Конструктор создаст необходимые файлы для магазинов приложений</p>
     </div>
     <div class="icon-div col-xs-12 col-sm-6 col-md-3">
      <img class="icon" src="wp-content/themes/_tk/images/icons/publishred.png" alt="Размещение в магазинах приложений">
      <h3>Размещение в магазинах приложений</h3>
      <p>Опубликуйте приложение и оно будет доступно для скачивания</p>
    </div>
  </div>
</div>
</section>

<section class="parallax-container" data-z-index="1" data-natural-height="763" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/bgimg2.jpg">
  <div class="container">
    <div class="row vpadding">
      <div class="quote-text clearfix">
        <div class="icon-div col-md-6">
          <h3 class="h2">Мобильная революция только начинается</h3>
          <p class="quote-author">Forbes</p>
          <button class="order-btn btn-white" data-toggle="modal" data-target="#cart-form">Присоединиться!</button>
        </div>
        <div class="col-md-6">
         <img class="rev-pic" src="wp-content/themes/_tk/images/mobilerevolutionred.png" alt="мобильная революция в России">
       </div>
     </div>
   </div>
 </div>
</section>


<section id="features">
  <div class="container">
    <div class="row vpadding">
     <h2 class="text-center">Функциональность</h2>
     <div class="icon-div col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <img class="icon" src="wp-content/themes/_tk/images/icons/syncred.png" alt="Синхронизация контета в приложении">
      <h3>Синхронизация</h3>
      <p>Добавьте новый контент в ваше приложение и мы обновим все установленные приложения через облачный сервис</p>
    </div>
    <div class="icon-div col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <img class="icon" src="wp-content/themes/_tk/images/icons/pushred.png" alt="Push уведомления конструктор приложений">
      <h3>Push уведомления</h3>
      <p>Отсылайте информационные уведомления всем Вашим пользователям, у которых установлены ваши мобильные приложения</p>
    </div>
    <div class="icon-div col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <img class="icon" src="wp-content/themes/_tk/images/icons/purchasered.png" alt="Покупки внутри приложения">
      <h3>Покупки внутри приложения</h3>
      <p>Продавайте Ваши товары и услуги в приложении, увеличивая общую прибыль</p>
    </div>
    <div class="icon-div col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <img class="icon" src="wp-content/themes/_tk/images/icons/rssred.png" alt="RSS ридер в приложении">
      <h3>RSS ридер</h3>
      <p>Измените RSS ленту в легко читаемую страницу на мобильном устройстве</p>
    </div>

    <div class="icon-div col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <img class="icon" src="wp-content/themes/_tk/images/icons/loginred.png" alt="страница входа в приложении">
      <h3>Страница входа</h3>
      <p>Установите доступ по паролю для отдельных страниц</p>
    </div>
    <div class="icon-div col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <img class="icon" src="wp-content/themes/_tk/images/icons/overlayred.png" alt="наложение изображений в приложении">
      <h3>Наложение изображений</h3>
      <p>Сделайте фотографию и наложите её на любое изображение. Изменяйте, двигайте и поварачивайте на Ваш вкус</p>
    </div>
    <div class="icon-div col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <img class="icon" src="wp-content/themes/_tk/images/icons/searchred.png" alt="Поиск в приложении">
      <h3>Поиск в приложении</h3>
      <p>Весь контент в приложении индексируется. Поиск по словам отобразит список страниц, содержащих искомое слово</p>
    </div>
    <div class="icon-div col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <img class="icon" src="wp-content/themes/_tk/images/icons/locationred.png" alt="GPS и направления в приложении">
      <h3>GPS и направления</h3>
      <p>Показывает местоположение на карте. Также возможно проложение маршрута к указанным во время создания местам</p>
    </div>

    <div class="icon-div col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <img class="icon" src="wp-content/themes/_tk/images/icons/mobilepagered.png" alt="Ваш сайт в приложении">
      <h3>Ваш сайт в приложении</h3>
      <p>Добавьте ваш сайт в приложение. Страница будет загружаться с Вашего сервера</p>
    </div>
    <div class="icon-div col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <img class="icon" src="wp-content/themes/_tk/images/icons/galleryred.png" alt="Галерея в приложении">
      <h3>Галерея изображений</h3>
      <p>Добавьте галерею в своё приложение с возможность поворота изображений</p>
    </div>
    <div class="icon-div col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <img class="icon" src="wp-content/themes/_tk/images/icons/analyticsred.png" alt="Аналитика приложений">
      <h3>Аналитика</h3>
      <p>Собирайте детальную статистику о Вашем приложении при помощи Google Analytics</p>
    </div>
    <div class="icon-div col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <img class="icon" src="wp-content/themes/_tk/images/icons/adsred.png" alt="Монетизируйте мобильное приложение">
      <h3>Реклама в приложениях</h3>
      <p>Монетизируйте Ваши приложения, добавив баннеры и контекстную рекламу</p>
    </div>
  </div>
</div>
</section>

<!-- <section id="video" class="vpadding">
<div class="container">
 <h2>Видео обзор</h2>
    <div class=" video-div">
      <iframe width="853" height="480" src="https://www.youtube.com/embed/ZPXK1SG3NHM" allowfullscreen></iframe>
    </div>
  </div>
</section> -->

<section id="whom" class="offset vpadding">
 <div class="container">
  <div class="row">
   <h2 class="text-center">Наш сервис поможет Вам, если Вы:</h2>
   <div class="col-md-12">
     <ul class="tick-menu">
       <li class="left"> Вы владелец бизнеса и хотите сами создать мобильное приложение для Вашего бизнеса</li>
       <li class="right">Вы фрилансер или представитель веб студии и хотите делать приложения для Ваших клиентов</li>
       <li class="left">Вы хотите создавать информационные приложения</li>
       <li class="right">Вы занимаетесь арбитражем траффика и хотите создавать рекламные сети из приложений</li>
       <li class="left">Вы просто интересуетесь созданием мобильных приложений, но нет времени изучать программирование</li>
       <li class="right">Вы программист и разрабатываете мобильные приложение, и Вы хотите ускорить процесс создания кроссплатформенных приложений</li>
     </ul>
   </div>
 </div>
</div>
</section>

<section id="calculator">
  <div class="container">
    <div class="row">
      <h2>Возможный заработок</h2>
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
          <a href="#clientProfitTab" aria-controls="clientProfit" role="tab" data-toggle="tab">Создание клиентам</a>
        </li>
        <li role="presentation">
          <a href="#adProfitTab" aria-controls="adProfit" role="tab" data-toggle="tab">Заработок на рекламе</a>
        </li>
      </ul>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="clientProfitTab">
          <h3>Возможный заработок на создании приложений клиентам</h3>
          <div class="col-md-6">
            <p class="calc-text">
              Сколько приложений Вы планируете создавать:
              <span class="result colored"></span>
            </p>
            <div id="slider"></div>
            <p class="calc-numbers">
              1
              <span>50</span>
            </p>

            <p>
              Цена за приложение:
              <span class="result2 colored"></span>
            </p>
            <div id="slider-price"></div>
            <p class="calc-numbers">
              25 000
              <span>100 000</span>
            </p>
            <p>
              Абонентская плата:
              <span class="result3 colored"></span>
            </p>

            <div id="slider-monthly"></div>
            <p class="calc-numbers">
              500
              <span>20 000</span>
            </p>

          </div>
          <div class="col-md-6">
            <p>Ваш заработок<br>
              <span id="profitBox"></span><br>
              рублей в месяц</p>
              <img class="profitimg" src="profit.png" alt="Заработок на мобильных приложениях">
            </div>
          </div>

          <div role="tabpanel" class="tab-pane" id="adProfitTab">
            <h3>Возможный заработок на создании тематических приложений</h3>
            <div class="col-md-6">
              <p>
                Создавайте тематические приложения, приложения-каталоги и информационные приложения
              </p>
              <p class="calc-text">
                Количество созданных приложений:
                <span class="ad-apps-res colored"></span>
              </p>
              <div id="ad-apps"></div>
              <p class="calc-numbers">
                1
                <span>50</span>
              </p>

              <p>
                Среднее количество рекламных блоков в приложении:
                <span class="ad-amount-res colored"></span>
              </p>
              <div id="ad-amount"></div>
              <p class="calc-numbers">
                1
                <span>100</span>
              </p>

              <p>
                Средняя оплата за рекламу:
                <span class="ad-price-res colored"></span>
              </p>
              <div id="ad-price"></div>
              <p class="calc-numbers">
                500
                <span>10 000</span>
              </p>
            </div>
            <div class="col-md-6">
              <p>Ваш заработок<br>
                <span id="adProfitbox"></span><br>
                рублей в месяц</p>
                <img class="profitimg" src="profit.png" alt="Заработок на мобильных приложениях">
              </div>
            </div>
          </div>

        </div>
        <p class="disclaimer text-center">Данный расчет является ознакомительным. Mobile Domination не несёт ответственности за Ваши результаты.</p>
      </div>
    </section>


    <section id="reviews">
      <div class="container">
        <div class="row">
          <h2>Отзывы пользователей</h2>
          <div id="reviews-carousel" class="carousel slide" data-ride="carousel">

           <!-- Indicators -->
           <ol class="carousel-indicators">
            <li data-target="#reviews-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#reviews-carousel" data-slide-to="1"></li>

          </ol>



          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <div class="review-div">
                <p class="review">В мобильных приложениях я слабо шарил, никогда не задумывался над их созданием и монетизацией, до тех пор пока не наткнулся на рекламу http://mobiledomination.ru. Скажу сразу, что я чертовски рад, что решил попробывать свои силы в создании приложений на конструкторе Seattle Clouds. Для новичков, как я, это сэкономит кучу времени, сил и средств.</p>
                <p>По сути оказалось создать приложение очень легко, главное знать все подводные камни, о которых рассказал и помог обойти Олег Елизаров. На данный момент уже плотно занимаюсь 2 идеями.
                  В общем, для таких как я, у которых нет времени учить языки программирования, работа с конструктором мобильных приложений существенно сократит время создания приложений, главное иметь желание и заниматься этим.</p>
                  <p>В итоге, рекемендую всем попробывать свои силы в этом деле, ведь под лежачий камень вода не течет. Всем успехов друзья!!!<i class="fa fa-quote-right"></i>
                  </p>
                </div>
                <p class="review-author">Виталий Макаренко<br>http://infomager.ru</p>

              </div>
    <!-- <div class="item">
      <p>Review 2</p>

    </div> -->

  </div>
</div>
</div>
</div>
</section>

<section id="examples">
  <div class="container">
    <h2>Созданные приложения</h2>
    <div class="row">
      <div id="carousel-example" class="carousel " data-ride="carousel">


        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="col-md-6">
              <img class="img-responsive" src="wp-content/themes/_tk/images/parkssample.png" alt="Примеры приложений в конструкторе Mobile Domination">
            </div>

            <div class="sample-text col-md-6">
              <h3>Автосервис Park S</h3>
              <p>Park S сервис - автосервис в Санкт-Петербурге. Наша команда имеет опыт в ремонте современных автомобилей разных классов. Не боимся сложности выполнения работ. Экономя ваше время, поможем в доставке запасных частей без вашего присутствия.Большое количество запасных частей и деталей есть в наличии.</p>
              <i class="fa fa-android fared fa-3x"></i><img class="qrimg" src="wp-content/themes/_tk/images/parksqr.png" alt="мобильное приложение для автосервиса">
            </div>

          </div>

          <div class="item">
            <div class="col-md-6">

              <img class="img-responsive" src="wp-content/themes/_tk/images/lugansksample.png" alt="Примеры приложений в конструкторе Mobile Domination">
            </div>
            <div class="sample-text col-md-6">
              <h3>Приложение "Весь Луганск"</h3>
              <p>Друзья, в эти времена мы решили создать актуальный информационный справочник города Луганск. Который, как надеемся искренне, принесет пользу каждому пользователю и станет поистине народным!</p>
              <i class="fa fa-android fared fa-3x"></i><img class="qrimg" src="wp-content/themes/_tk/images/luganskqr.png" alt="мобильное приложение справочник">
            </div>
          </div>




        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example" role="button" data-slide="prev">
          <span class="fa fa-chevron-left fa-2x glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example" role="button" data-slide="next">
          <span class="fa fa-chevron-right fa-2x glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
  </div>
</section>




<section id="price">
 <div class="container">
  <div class="row vpadding">
   <h2 class="text-center">Стоимость</h2>


   <div class="col-md-3">
    <div class="price-div ">
      <h3>Тестовый доступ</h3>
      <p class="recurrent-text">Абонентская плата:</p><p><span class="monthly-fee">0<i class="fa fa-rub"></i></span><span class="monthly-fee-rub">за 5 дней</span></p>

      <ul>
        <li>Предоставляем тестовый доступ к конструктору на 5 дней, в течение которых вы можете оценить возможности конструктора.</li>

        <li>Начните создавать приложение сейчас!</li>
      </ul>
   <!--  <p class="recurrent-text">Стоимость подключения:</p><p><span class="setup-fee">990</span><span class="setup-fee-rub"> р</span></p>
 -->
 <a target="_blank" class="center-block btn btn-red" href="<?php echo site_url();?>/testaccess">Начать работу!</a>
 <?php // echo do_shortcode('[add_to_cart id="223" sku=""]'); ?>
 <!--  <p>Перевод с кошелька Яндекс денег:</p><p><iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/small.xml?account=410013241774951&quickpay=small&yamoney-payment-type=on&button-text=01&button-size=s&button-color=white&targets=%09%D0%9F%D0%BE%D0%B4%D0%BF%D0%B8%D1%81%D0%BA%D0%B0+%D0%BD%D0%B0+%D0%BA%D0%BE%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D0%BE%D1%80+%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D1%8C%D0%BD%D1%8B%D1%85+%D0%BF%D1%80%D0%B8%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B9%2C+%D0%BF%D0%BE%D0%BC%D0%B5%D1%81%D1%8F%D1%87%D0%BD%D0%BE&default-sum=1530&mail=on&successURL=" width="140" height="54"></iframe></p>
       <p>Оплата картой через Яндекс деньги:</p><p><iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/small.xml?account=410013241774951&quickpay=small&any-card-payment-type=on&button-text=01&button-size=s&button-color=white&targets=%09%D0%9F%D0%BE%D0%B4%D0%BF%D0%B8%D1%81%D0%BA%D0%B0+%D0%BD%D0%B0+%D0%BA%D0%BE%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D0%BE%D1%80+%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D1%8C%D0%BD%D1%8B%D1%85+%D0%BF%D1%80%D0%B8%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B9%2C+%D0%BF%D0%BE%D0%BC%D0%B5%D1%81%D1%8F%D1%87%D0%BD%D0%BE&default-sum=1530&mail=on&successURL=" width="134" height="31"></iframe></p>
     -->
   </div>
 </div>
 <div class="col-md-3">
  <div class="price-div ">
    <h3>Помесячно</h3>
    <p class="recurrent-text">Абонентская плата:</p><p><span class="monthly-fee">590<i class="fa fa-rub"></i></span><span class="monthly-fee-rub">в месяц</span></p>
    <ul>
      <li>Неограниченное создание приложений</li>
      <li>Неограниченное обновление приложений</li>
      <li>Неограниченнок количество push уведомлений</li>
      <li>Помощь и поддержка</li>
      <li>Начинайте создавать приложения почти без вложений</li>
    </ul>
   <!--  <p class="recurrent-text">Стоимость подключения:</p><p><span class="setup-fee">990</span><span class="setup-fee-rub"> р</span></p>
 -->
 <?php echo do_shortcode('[add_to_cart id="9" sku=""]'); ?>
 <!--  <p>Перевод с кошелька Яндекс денег:</p><p><iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/small.xml?account=410013241774951&quickpay=small&yamoney-payment-type=on&button-text=01&button-size=s&button-color=white&targets=%09%D0%9F%D0%BE%D0%B4%D0%BF%D0%B8%D1%81%D0%BA%D0%B0+%D0%BD%D0%B0+%D0%BA%D0%BE%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D0%BE%D1%80+%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D1%8C%D0%BD%D1%8B%D1%85+%D0%BF%D1%80%D0%B8%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B9%2C+%D0%BF%D0%BE%D0%BC%D0%B5%D1%81%D1%8F%D1%87%D0%BD%D0%BE&default-sum=1530&mail=on&successURL=" width="140" height="54"></iframe></p>
       <p>Оплата картой через Яндекс деньги:</p><p><iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/small.xml?account=410013241774951&quickpay=small&any-card-payment-type=on&button-text=01&button-size=s&button-color=white&targets=%09%D0%9F%D0%BE%D0%B4%D0%BF%D0%B8%D1%81%D0%BA%D0%B0+%D0%BD%D0%B0+%D0%BA%D0%BE%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D0%BE%D1%80+%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D1%8C%D0%BD%D1%8B%D1%85+%D0%BF%D1%80%D0%B8%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B9%2C+%D0%BF%D0%BE%D0%BC%D0%B5%D1%81%D1%8F%D1%87%D0%BD%D0%BE&default-sum=1530&mail=on&successURL=" width="134" height="31"></iframe></p>
     -->
   </div>
 </div>
 <div class="col-md-3">
  <div class="price-div ">
    <div class="recommend-badge"></div>
    <h3>За полгода</h3>
    <p class="recurrent-text">Абонентская плата:</p><p><span class="monthly-fee">490<i class="fa fa-rub"></i></span><span class="monthly-fee-rub">в месяц</span></p>
    <ul>
      <li>Неограниченное создание приложений</li>
      <li>Неограниченное обновление приложений</li>
      <li>Неограниченнок количество push уведомлений</li>
      <li>Помощь и поддержка</li>
      <li>Вы экономите <b>600</b> рублей при оплате за полгода!</li>
    </ul>
   <!--  <p class="recurrent-text">Стоимость подключения:</p><p><span class="setup-fee">990</span><span class="setup-fee-rub"> р</span></p>
 -->

 <?php echo do_shortcode('[add_to_cart id="38" sku=""]'); ?>

    <!--   <p>Перевод с кошелька Яндекс денег:</p><p> <iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/small.xml?account=410013241774951&quickpay=small&yamoney-payment-type=on&button-text=01&button-size=s&button-color=white&targets=%D0%9F%D0%BE%D0%B4%D0%BF%D0%B8%D1%81%D0%BA%D0%B0+%D0%BD%D0%B0+%D0%BA%D0%BE%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D0%BE%D1%80+%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D1%8C%D0%BD%D1%8B%D1%85+%D0%BF%D1%80%D0%B8%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B9%2C+%D0%BF%D0%BE%D0%BB%D0%B3%D0%BE%D0%B4%D0%B0&default-sum=3630&mail=on&successURL=" width="140" height="54"></iframe></p>
       <p>Оплата картой через Яндекс деньги:</p><p> <iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/small.xml?account=410013241774951&quickpay=small&any-card-payment-type=on&button-text=01&button-size=s&button-color=white&targets=%D0%9F%D0%BE%D0%B4%D0%BF%D0%B8%D1%81%D0%BA%D0%B0+%D0%BD%D0%B0+%D0%BA%D0%BE%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D0%BE%D1%80+%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D1%8C%D0%BD%D1%8B%D1%85+%D0%BF%D1%80%D0%B8%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B9%2C+%D0%BF%D0%BE%D0%BB%D0%B3%D0%BE%D0%B4%D0%B0&default-sum=3630&mail=on&successURL=" width="140" height="54"></iframe>
       </p>
     -->
   </div>
 </div>

 <div class="col-md-3">
   <div class="price-div ">
    <h3>За год</h3>
    <p class="recurrent-text">Абонентская плата:</p><p><span class="monthly-fee">390<i class="fa fa-rub"></i></span><span class="monthly-fee-rub">в месяц</span></p>
    <ul>
      <li>Неограниченное создание приложений</li>
      <li>Неограниченное обновление приложений</li>
      <li>Неограниченнок количество push уведомлений</li>
      <li>Помощь и поддержка</li>
      <li>Вы экономите <b>1200</b> рублей при оплате за год!</li>
    </ul>
  <!--   <p class="recurrent-text">Стоимость подключения:</p><p><span class="setup-fee">990</span><span class="setup-fee-rub"> р</span></p>
-->
<?php echo do_shortcode('[add_to_cart id="39" sku=""]'); ?>

   <!--   <p>Перевод с кошелька Яндекс денег:</p><p><iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/small.xml?account=410013241774951&quickpay=small&yamoney-payment-type=on&button-text=01&button-size=s&button-color=white&targets=%D0%93%D0%BE%D0%B4%D0%BE%D0%B2%D0%B0%D1%8F+%D0%BF%D0%BE%D0%B4%D0%BF%D0%B8%D1%81%D0%BA%D0%B0+%D0%BD%D0%B0+%D0%BA%D0%BE%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D0%BE%D1%80+%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D1%8C%D0%BD%D1%8B%D1%85+%D0%BF%D1%80%D0%B8%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B9&default-sum=5070&mail=on&successURL=" width="140" height="54"></iframe></p>
       <p>Оплата картой через Яндекс деньги:</p><p><iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/small.xml?account=410013241774951&quickpay=small&any-card-payment-type=on&button-text=01&button-size=s&button-color=white&targets=%D0%93%D0%BE%D0%B4%D0%BE%D0%B2%D0%B0%D1%8F+%D0%BF%D0%BE%D0%B4%D0%BF%D0%B8%D1%81%D0%BA%D0%B0+%D0%BD%D0%B0+%D0%BA%D0%BE%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D0%BE%D1%80+%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D1%8C%D0%BD%D1%8B%D1%85+%D0%BF%D1%80%D0%B8%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B9&default-sum=5070&mail=on&successURL=" width="140" height="54"></iframe></p>
     -->
   </div>
 </div>
</div>
</div>
</section>

<section id="opportunity" class="parallax-container" data-z-index="1" data-natural-height="763" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/bgimg3.jpg">
  <div class="container opp-div">
    <div class="row vpadding opp-text">
      <div class="col-sm-6 ">
        <h3>Индустрия мобильных приложений</h3>
        <p>это рынок объёмом в миллиарды долларов. Рынок еще в начале становления и является одним из самых быстрорастущих в истории!
          Не упустите такую возможность!</p>
        </div>
        <div class="col-sm-6">
<!-- <img class="opp-icon" src="wp-content/themes/_tk/images/androidwhite.png" alt="Конструктор приложений для андроид">
<img class="opp-icon" src="wp-content/themes/_tk/images/applewhite.png" alt="Конструктор приложений для iPhone и iPad">
 --><!-- <img class="opp-icon" src="wp-content/themes/_tk/images/html5white.png" alt="Конструктор приложений html5">
--><i class="opp-icon fa fa-android fa-4x"></i>
<i class="opp-icon fa fa-apple fa-4x"></i>
<i class="opp-icon fa fa-html5 fa-4x"></i>
</div>
</div>
<div class="row opp-row">
  <div class="cols-sm-12 center-block"><button class="order-btn btn-white" data-toggle="modal" data-target="#cart-form">Начать работу</button></div>
</div>
</div>
</section>

<section id="facts">
  <div class="container">
    <h2>Факты о мобильной индустрии</h2>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <input type="text" value="89fdisclaimer" class="dia dial">
        <p>медиа времени пользователи проводят в интернете через мобильные приложения</p>
      </div>
      <div class="col-md-3 col-sm-6">
        <input type="text" value="76" class="dia dial2" data-thickness=".2">
        <p>рост использования мобильных приложений в 2014м году</p>
      </div>
      <div class="col-md-3 col-sm-6">
        <input type="text" value="268.7" class="dia dial3">
        <p>миллионов - предполагаемое количество загрузок мобильных приложений к 2017 году</p>
      </div>
      <div class="col-md-3 col-sm-6">
        <input type="text" value="24.5" class="dia dial4">
        <p>миллиардов долларов ожидаемая выручка от мобильных приложений в 2016 году</p>
      </div>
    </div>
    <p class="disclaimer">Источники:<br>
     http://www.smartinsights.com/mobile-marketing/mobile-marketing-analytics/mobile-marketing-statistics/<br>
     http://www.entrepreneur.com/article/236832<br>
     http://www.statista.com/topics/1002/mobile-app-usage/
   </p>
 </div>
</section>


<section id="faq">
 <div class="container">
  <div id="accordion" class="row vpadding">
    <h2>Частые вопросы</h2>

    <div class="col-sm-12">
      <div class="faq-item">
        <h4 class="down">Есть ли какие-либо скрытые платежи за использование конструктора приложений?</h4>
        <div class="answer"><p>Нет! Вы платите только за подключение к сервису и ежемесячную абонентскую плату.</p></div>
      </div>
      <div class="faq-item">
        <h4 class="down">Что еще мне нужно для публикации приложения в магазинах приложений?</h4>
        <div class="answer"><p> Вам нужен аккаунт разработчика Google Play (одноразовая оплата 25$) и/или аккаунт Apple (99$ ежегодно)</p></div>
      </div>
      <div class="faq-item">
        <h4 class="down">Я программирую мобильные приложения. Могу ли я добавить свой код в конструктор приложений?</h4>
        <div class="answer"><p>При создании приложения для iOS платформы вы можете использовать Ваши знания в программировании и создавать необходимый Вам функционал. Для Android платформы можно использовать PhoneGap при создании приложения.</p></div>
      </div>
      <div class="faq-item">
        <h4 class="down">Что произойдет с моими приложениями, если я перестану платить абонентскую плату?</h4>
        <div class="answer"><p>Ваши приложения будут доступны для скачивания и сохранят работоспособность.  Однако Вы не сможете обновлять приложения и отсылать push-уведомления.</p></div>
      </div>
      <div class="faq-item">
        <h4 class="down">Нужны ли мне навыки программирования или веб разработки?</h4>
        <div class="answer"><p> Нет. Вам необязательно обладать знаниями программирования или веб разработки. Однако если у Вас имеются знания HTML, CSS и JS, то это поможет создавать более функциональные приложения</p></div>
      </div>
      <div class="faq-item">
        <h4 class="down">Почему такая низкая стоимость подписки? В чём подвох?</h4>
        <div class="answer"><p> Seattle Clouds позволяет выкупить пожизненное право доступа к платформе и продажи аккаунтов со всеми обновлениями в будущем.
          Стоимость лицензии приведена на сайте компании. Инвестировав раз, мы можем сами устанавливать тарифы за доступ к конструктору.
          Более того, мы - первая компания на Российском рынке, предоставляющая такую возможность, и наша цель - не заработать на Вас,
          а предоставить полезный инструмент для разработки приложений за очень умеренную плату.</p></div>
        </div>

        <div class="faq-item">
          <h4 class="down">Как оплатить подписку?</h4>
          <div class="answer"><p>Наш сервис подключен к системе "Яндекс Касса", и вы легко можете оплатить доступ к конструктору любым удобным вам способом.
           Просто нажмите на кнопку "Добавить в корзину" в разделе <a class="onepage-link" href="#price">"Стоимость"</a>
           и Вы будете перенаправлены на страницу оформления заказа</p></div>
         </div>
       </div>
     </div>
   </section>
   <section id="contact">
     <div class="container">
      <div class="row vpadding">
       <h2>Остались еще вопросы?</h2>


       <div class="left col-sm-6">
         <h3>Служба поддержки</h3>
         <img class="img-circle photo2" alt="служба поддержки конструктора мобильных приложений" src="wp-content/themes/_tk/images/oleg.jpg">
         <h3>Олег Елизаров</h3>
         <p>5 лет опыта в веб дизайне и веб разработке</p>
         <p>Высшее образование по специализации "Маркетинг"</p>
         <p>Связаться <a target="_blank" href="https://vk.com/oleg0789">вконтакте</a></p>
         <p>По <a href="mailto:info@mobiledomination.ru">электронной почте</a></p>
         <p>По скайпу: oleg0789</p>
       </div>
       <div class="right col-sm-6">
         <h3>Форма контактов</h3>
         <?php echo do_shortcode('[contact-form-7 id="35" title="Контакты"]'); ?>
       </div>

     </div>
   </div>
 </div>
</section>


<div id="modal-form" class="modal fade in">
 <div class="modal-dialog">
  <div class="modal-content">
   <div id="order" class="order form-horizontal">
     <div class="modal-header">
       <a class="close" data-dismiss="modal">×</a>
       <h3 class="text-center">Запишитесь на консультацию и мы ответим на все Ваши вопросы</h3>
     </div>
     <div class="modal-body">
       <?php echo do_shortcode('[contact-form-7 id="46" title="Заявка на консультацию"]'); ?>
     </div>
   </div>
 </div>
</div>
</div>

<!-- Add to cart modal -->
<div id="cart-form" class="modal fade in">
 <div class="modal-dialog">
  <div class="modal-content">
   <div id="order" class="order form-horizontal">
     <div class="modal-header">
       <a class="close" data-dismiss="modal">×</a>
       <h3 class="text-center">Тестовый доступ</h3>
     </div>
     <div class="modal-body">
       <div class="row">
         <div class="col-md-12">
          <div class="price-div2">

            <p><span class="monthly-fee">0<i class="fa fa-rub"></i></span><span class="monthly-fee-rub">на 5 дней</span></p>

            <ul>
              <li>Предоставляем тестовый доступ к конструктору на 5 дней, в течение которых вы можете оценить возможности конструктора.</li>

              <li><b>Начните создавать приложение сейчас!</b></li>
            </ul>
   <!--  <p class="recurrent-text">Стоимость подключения:</p><p><span class="setup-fee">990</span><span class="setup-fee-rub"> р</span></p>
 -->
 <a target="_blank" style="width:50%" class="center-block order-btn btn-red" href="<?php echo site_url();?>/testaccess">Начать работу!</a>
 <?php // echo do_shortcode('[add_to_cart id="223" sku=""]'); ?>
 <!--  <p>Перевод с кошелька Яндекс денег:</p><p><iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/small.xml?account=410013241774951&quickpay=small&yamoney-payment-type=on&button-text=01&button-size=s&button-color=white&targets=%09%D0%9F%D0%BE%D0%B4%D0%BF%D0%B8%D1%81%D0%BA%D0%B0+%D0%BD%D0%B0+%D0%BA%D0%BE%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D0%BE%D1%80+%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D1%8C%D0%BD%D1%8B%D1%85+%D0%BF%D1%80%D0%B8%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B9%2C+%D0%BF%D0%BE%D0%BC%D0%B5%D1%81%D1%8F%D1%87%D0%BD%D0%BE&default-sum=1530&mail=on&successURL=" width="140" height="54"></iframe></p>
       <p>Оплата картой через Яндекс деньги:</p><p><iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/small.xml?account=410013241774951&quickpay=small&any-card-payment-type=on&button-text=01&button-size=s&button-color=white&targets=%09%D0%9F%D0%BE%D0%B4%D0%BF%D0%B8%D1%81%D0%BA%D0%B0+%D0%BD%D0%B0+%D0%BA%D0%BE%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D0%BE%D1%80+%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D1%8C%D0%BD%D1%8B%D1%85+%D0%BF%D1%80%D0%B8%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B9%2C+%D0%BF%D0%BE%D0%BC%D0%B5%D1%81%D1%8F%D1%87%D0%BD%D0%BE&default-sum=1530&mail=on&successURL=" width="134" height="31"></iframe></p>
     -->
   </div>
 </div>



</div>
</div>
</div>
</div>
</div>
</div>

<!--  Webinar Modal -->
<div class="modal fade" id="discountModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 style="color:#1993b6;" class="text-center"><span class="glyphicon glyphicon-lock"></span>Вебинар - обзор конструктора и заработок на мобильных приложениях!</h4>
      </div>
      <div class="modal-body text-center">
        <p>Присоединяйтесь!</p>
        <p>В эту субботу, 5-го сентября в 16.00 по Москве!</p>
        <p>Если у вас не будет возможности посетить вебинар, то всё равно регистрируйтесь - будет доступна аудио-версия вебинара.</p>
        <p>В этом вебинаре я проведу обзор нашего конструктора приложений и сравнение разных конструкторов приложений. Также расскажу о видах приложений и способах заработка на создании мобильных приложений.
         Регистрация на вебинар по этой <a target="_blank" href="http://fastwebinar.ru/events/5367">ссылке</a></p>
       </div>

     </div>
   </div>
 </div>




 <a class="back-to-top" href="#"></a>

 <?php get_footer(); ?>
