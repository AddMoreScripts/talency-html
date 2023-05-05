<?php include(__DIR__ . '/menu.php'); ?>

<!-- === === === ШАПКА СТАРТ === === === -->
  <div class="js-scroll-elem"></div>

  <header class="hdr">
    <div class="hdr__wrap flexi">

      <!-- Стандартный вывод логотипа WordPress ф-ей the_custom_logo() -->
      <a href="/" class="custom-logo-link">
        <img src="/img/ui/logo.svg" alt="">
      </a>

      <div class="hdr__burgerwrap">
        <button class="hdr__burger" data-hystmodal="#menuModal">
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
