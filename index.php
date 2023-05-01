<!DOCTYPE html>
<html lang="ru">

<head>
  <title>Курсы по психологии | Онлайн университет Talentsy</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
  <?php include('./templates/head.php'); ?>
</head>

<body class="frontpage js-frontpage">
  <!-- Google Tag Manager (noscript) -->
  <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WKZSGDV" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript> -->
  <!-- End Google Tag Manager (noscript) -->


  <!-- === === === ШАПКА СТАРТ === === === -->
  <div class="js-scroll-elem"></div>

  <header class="hdr">
    <div class="hdr__wrap flexi">

      <!-- Стандартный вывод логотипа WordPress ф-ей the_custom_logo() -->
      <a href="/" class="custom-logo-link">
        <img src="/img/ui/logo.svg" alt="">
      </a>

      <div class="hdr__burgerwrap">
        <button class="hdr__burger">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="24" height="24">
            <path stroke="#fff" stroke-width="2" d="m1 7.5 20 1M3 15.5l20 1" />
          </svg>
          <span>Каталог курсов</span>
        </button>
      </div>

      <nav class="hdr__leftmenu">
        <ul>
          <li>
            <a href="https://blog.talentsy.ru/">Журнал</a>
          </li>
          <li>
            <a href="https://talentsy.ru/otzyvy">Отзывы</a>
          </li>
        </ul>
      </nav>

      <aside class="hdr__right flexi">
        <a href="https://talentsy.ru/o-talentsy">О Talentsy</a>
        <a href="tel:88007753768" class="hdr__phone">8 800 775 37 68</a>
        <a href="https://lk.talentsy.ru/" class="hdr__login flexi">Вход</a>
      </aside>

    </div>
  </header>
  <!-- /=== === === ШАПКА КОНЕЦ === === === -->

    <?php if(0): ?>
  <div class="frontlead">
    <div class="frontlead__bgs js-frontlead-bgs">
      <div class="frontleadbg"><img src="/img/frontpage/b1-1.jpg" alt=""></div>
      <div class="frontleadbg" style="background-color: #efefef;"><img src="/img/frontpage/b1-2.jpg" alt=""></div>
      <div class="frontleadbg" style="background-color: #bee8f4;"><img src="/img/frontpage/b1-3.jpg" alt=""></div>
      <div class="frontleadbg" style="background-color: #68ff5a;"><img src="/img/frontpage/b1-4.jpg" alt=""></div>
      <div class="frontleadbg" style="background-color: #fe9de0;"><img src="/img/frontpage/b1-5.jpg" alt=""></div>
      <div class="frontleadbg frontleadbg--6" style="background-color: #7ff4fe;"><img src="/img/frontpage/b1-6.jpg" alt=""></div>
    </div>
    <div class="frontlead__real">
      <div class="frontlead__title druk">Онлайн <br>университет <br><span style="color:#7835ff;">самореализации</span></div>
      <div class="frontlead__sub">Помогаем найти любимое <br>дело и начать на нем <br>зарабатывать</div>
    </div>

    <div class="frontlead__hovers">
      <div class="frontlead__hover js-fronthover" data-hover="1"></div>
      <div class="frontlead__hover js-fronthover" data-hover="2"></div>
      <div class="frontlead__hover js-fronthover" data-hover="3"></div>
      <div class="frontlead__hover js-fronthover" data-hover="4"></div>
      <div class="frontlead__hover js-fronthover" data-hover="5"></div>
      <div class="frontlead__hover js-fronthover" data-hover="6"></div>
    </div>
  </div>
  <?php endif; ?>



<?php
  $front2data = [
    [
      'title' => 'Учитесь <br>у лучших',
      'descr' => 'Вы будете учиться <br>у топ-преподавателей высочайшего класса <br>и опыта',
    ],
    [
      'title' => 'Современные форматы обучения',
      'descr' => 'Вас ждет высокое качество лекций, практические занятия в мини-группах, наставничество при работе с первыми клиентами',
    ],
    [
      'title' => 'Получите <br>диплом',
      'descr' => 'Мы выдаем дипломы о профессиональной переподготовке на основании государственной образовательной лицензии',
    ],
    [
      'title' => 'Работайте <br>на себя',
      'descr' => 'Нам важно не только дать навыки профессии, но и научить вас на них зарабатывать',
    ],
  ];
?>

<div class="" style="height:400px;"></div>

  <section class="front2">
    <div class="container">
      <div class="front2__wrap flexi">
        <?php foreach($front2data as $key => $data): ?>
        <div class="front2__item">
          <div class="front2__picwrap">
            <picture class="front2__pic front2__pic--<?=$key + 1; ?>">
              <img src="/img/frontpage/b2-<?=$key + 1; ?>.svg" alt="">
            </picture>
          </div>
          <div class="front2__title"><?=$data['title']; ?></div>
          <div class="front2__sub"><?=$data['descr']; ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>



  <?php include('./templates/footer.php'); ?>
  <!-- <script src="https://unpkg.com/@vkontakte/superappkit@1.57.0/dist/index-umd.js"></script> -->
  <!-- <script src="/js/custom/vkscript.js"></script> -->
</body>

</html>
