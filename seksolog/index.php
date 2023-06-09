<!DOCTYPE html>
<html lang="ru">

<head>
  <title>Сексолог обучение | Онлайн университет Talentsy</title>
  <?php include('./../templates/head.php'); ?>
</head>

<body class="page-sexolog">


  <?php include('../templates/header.php'); ?>


  <nav class="breadcrumbs container jbm">
    <a href="/">Главная</a>
    <a href="">Факультет психологии</a>
    <span>Консультант в сфере сексуальных отношений</span>
  </nav>



  <section class="hero hero--sex">
    <h2 class="hero__small">Сексолог</h2>
    <div class="hero__h1 jbm">
      Профессия «Консультант<br>
      <b>в сфере сексуальных</b> <br>
      отношений»
    </div>
    <div class="hero__videowrap ">
      <div class="hero__videobox square">
        <video class="hero__video square__img" preload="auto" playsinline="" autoplay="" loop="" muted="">
          <source src="/img/sexolog/b1-video.mp4">
        </video>
      </div>
      <a href="#offer" class="hero__overbutton circlebutton" data-scrollto="">
        Стать сексологом-<br>
        консультатном
      </a>
    </div>



    <div class="sex1">
      <div class="container">
        <div class="sex1__grid">
          <div class="sex1__item">
            <div class="sex1__imgwrap">
              <img src="/img/sexolog/b2-1.png" alt="">
            </div>
            <div class="sex1__title">Диплом о проф. переподготовке</div>
            <div class="sex1__descr">Получите специализацию в сфере психологического консультирования, диплом о
              профессиональной переподготовке и начните заниматься частной практикой</div>
          </div>
          <div class="sex1__item">
            <div class="sex1__imgwrap">
              <img src="/img/sexolog/b2-2.png" alt="">
            </div>
            <div class="sex1__title">200+ часов практики</div>
            <div class="sex1__descr">Семинары и практические занятия в мини-группах под руководством практикующих сексологов
            </div>
          </div>
          <div class="sex1__item">
            <div class="sex1__imgwrap">
              <img src="/img/sexolog/b2-3.png" alt="">
            </div>
            <div class="sex1__title">Персональный наставник</div>
            <div class="sex1__descr">Создаст индивидуальную образовательную траекторию для каждого студента, поможет
              выстроить гибкое расписание, ответит на вопросы и напомнит о занятиях</div>
          </div>
          <div class="sex1__item">
            <div class="sex1__imgwrap">
              <img src="/img/sexolog/b2-4.png" alt="">
            </div>
            <div class="sex1__title">Лучшие специалисты</div>
            <div class="sex1__descr">Наши преподаватели – доктора и кандидаты наук, востребованные практикующие психологи и
              сексологи</div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="programfromlead">
    <div class="container">
      <h2 class="title">
        Получить полную<br> <b>программу курса</b>
      </h2>
      <?php
          $buttonTxt = 'Получить программу';
          include('./../templates/leadform.php');
          $buttonTxt = null;
        ?>
    </div>
  </section><!-- //programfromlead -->



  <section class="dreams sex3">
    <div class="container">
      <h2 class="title">В современном обществе <br>существует <b>целый ряд проблем</b></h2>
      <div class="grid-mob-scroll">
        <div class="dreams__grid">
          <div class="dreams__item dreams__item--border">
            <div class="dreams__iconwrap">
              <img data-src="/img/sexolog/b4-1.png" alt="" class="lazy js-slide-opac">
            </div>
            <div class="dreamsltitle">
              Насилие в семье и сексуальное насилие
            </div>
          </div>
          <div class="dreams__item dreams__item--border">
            <div class="dreams__iconwrap dreams__iconwrap--wide">
              <img data-src="/img/sexolog/b4-2.png" alt="" class="lazy js-slide-opac">
            </div>
            <div class="dreamsltitle">
              Отсутствие полового воспитания<br>&nbsp;
            </div>
          </div>
          <div class="dreams__item dreams__item--bg">
            <div class="dreams__iconwrap">
              <img data-src="/img/sexolog/b4-3.png" alt="" class="lazy">
            </div>
            <div class="dreamsltitle">
              Агрессивное навязывание <br>гендерных стереотипов
            </div>
          </div>
          <div class="dreams__item  dreams__item--light">
            <div class="dreams__iconwrap">
              <img data-src="/img/sexolog/b4-4.png" alt="" class="lazy js-slide-opac">
            </div>
            <div class="dreamsltitle">
              Неумение людей работать <br>со своей сексуальностью
            </div>
          </div>
          <div class="dreams__item">
            <div class="dreams__iconwrap">
              <img data-src="/img/sexolog/b4-5.png" alt="" class="lazy js-slide-opac">
            </div>
            <div class="dreamsltitle">
              Преследование людей <br>с нетрадиционной <br>ориентацией
            </div>
          </div>
          <div class="dreams__item  dreams__item--border dreams__item--extra">
            <div class="dreams__iconwrap dreams__iconwrap--wide">
              <img data-src="/img/sexolog/b4-6.png" alt="" class="lazy js-slide-opac">
            </div>
            <div class="dreamsltitle">
              Неумение открыто говорить <br>с партнером о сексе
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //dreams -->





  <section class="reviewsslider js-review-slider">
    <h2 class="title">Посмотрите <b>отзывы</b> наших <br><b>студентов</b></h2>
    <div class="reviewsslider__wrap">
      <button class="ctrl ctrl--prev"><img src="/img/ui/slider-ctrl.svg" alt=""></button>
      <button class="ctrl ctrl--next"><img src="/img/ui/slider-ctrl.svg" alt=""></button>
      <div class="reviewsslider__cont js-slide-bot">
        <div class="swiper">
          <div class="swiper-wrapper">
            <?php foreach (range(1, 7, 1) as $key => $videoNum) : ?>
            <div class="swiper-slide">
              <a href="/img/sexolog/reviews/<?= str_pad($videoNum, 3, '0', STR_PAD_LEFT); ?>-full.mp4" class="reviewsslider__videowrap square" data-ratio="0.5625" data-fancybox="reviewVideo">
                <video loop muted playsinline preload="auto" controlslist="nodownload" disablepictureinpicture="" crossorigin="anonymous" class="reviewsslider__screen square__img lazy">
                  <source data-src="/img/sexolog/reviews/<?= str_pad($videoNum, 3, '0', STR_PAD_LEFT); ?>.mp4">
                </video>
                <span class="reviewsslider__button">Смотреть видео</span>
              </a>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="sex6">
    <div class="container">
      <h3 class="sex6__title jbm">
        Средняя стоимость <br>
        консультации специалиста <br>
        по сексуальным отношениям<br>
        составляет
      </h3>
      <div class="sex6__pricewrap flexi">
        <div class="sex6__price flexi ">
          <span class="jbm">2500</span>
          <small>₽/час</small>
        </div>
        <div class="sex6__pricedescr">
          <b>Это на 20% больше,</b> чем <br>
          стоимость консультации<br>
          психолога общего профиля
        </div>
      </div>

      <div class="sex6__calc flexi">
        <dl class="sex6dl sex6dl--bg">
          <dt class="jbm">2</dt>
          <dd>Консультации <br>в день</dd>
        </dl>
        <div class="sex6__x"></div>
        <dl class="sex6dl sex6dl--border">
          <dt class="jbm">20</dt>
          <dd>Рабочих дней <br>в месяц</dd>
        </dl>
        <div class="sex6__x"></div>
        <dl class="sex6dl sex6dl--white">
          <dt class="jbm">
          <img src="/img/sexolog/b6-woman.png" class="sex6dl__dlimg" alt="">
          <span>2500p.</span></dt>
          <dd>
            Средняя стоимость <br>консультации по данным <br>Profi.ru
          </dd>
        </dl>
      </div>

      <div class="sex6__pricewrap flexi sex6__pricewrap--bot">
        <div class="sex6__price flexi">
          <span class="jbm"><i>=</i>100</span>
          <small>тыс.<br>₽/мес</small>
        </div>
        <div class="sex6__pricedescr">
          <b>
            Может зарабатывать <br>
            сексолог
          </b> при минимальной<br>
          нагрузке
        </div>
      </div>
    </div>
  </section>



  <div class="sex7">
    <div class="container">
      <h2 class="title">
        Поэтому спрос на<br>
        <b>квалифицированных консультантов </b><br>
        постоянно растёт
      </h2>
      <div class="grid2 sex7__grid">
        <div class="grid2__col">
          <div class="sex7__imgwrap">
            <img src="/img/sexolog/b7-1.png" alt="">
          </div>
          <div class="sex7__text">
            В 2020 году в России распалось <b>73% браков</b> — в числе основных причин: ревность, измены, отсутствие
            <b>взаимопонимания</b>
          </div>
        </div>
        <div class="grid2__col">
          <div class="sex7__imgwrap">
            <img src="/img/sexolog/b7-2.png" alt="">
          </div>
          <div class="sex7__text">
            Запросы на консультацию сексолога <b>выросли за два года на 55%</b> и с каждым месяцем продолжают расти
          </div>
        </div>
        <div class="grid2__col">
          <div class="sex7__imgwrap">
            <img src="/img/sexolog/b7-3.png" alt="">
          </div>
          <div class="sex7__text">
            На фоне изменений образа жизни в 2020 году количество запросов на тему «отношения в паре, семейные
            отношения, интимные отношения» возросло <b>в 2,5 раза по данным Яндекса</b>
          </div>
        </div>
        <div class="grid2__col">
          <div class="sex7__imgwrap">
            <img src="/img/sexolog/b7-4.png" alt="">
          </div>
          <div class="sex7__text">
            Сексология остается редкой профессией: на сайте hh.ru размещено 399 тысяч резюме психологов и только <b>1
              тысяча резюме сексологов.</b>
          </div>
        </div>
      </div>
    </div>
  </div><!-- //sex7 -->



  <section class="psy8">
    <div class="container">
      <h2 class="title">Мы готовим квалифицированных <br><b>консультантов в сфере <br>сексуальных отношений</b></h2>
      <img data-src="/img/sexolog/b8-bg.png" alt="" class="psy8__bg lazy" style="aspect-ratio: 1680 / 739;">
      <div class="psy8__post title js-slide-bot">
        с нуля за <b>6 месяцев</b>
      </div>
    </div>
  </section>



  <section class="mentors">
    <div class="container">
      <h2 class="title">вы будете учиться <span>у&nbsp;</span><b>10 лучших <br class="mobbr">специалистов</b> <span>со
          всей страны</span></h2>
      <div class="mentorsfeat">
        <div class="mentorsfeat__item">
          <img src="/img/sexolog/b9-1.svg" alt="" class="mentorsfeat__icon js-slide-opac">
          <div class="mentorsfeat__title">Мы потратили полгода и&nbsp;миллионы рублей</div>
          <div class="mentorsfeat__text">
            чтобы собрать их всех <br>в 1 курсе
          </div>
        </div>
        <div class="mentorsfeat__item">
          <img src="/img/sexolog/b9-2.svg" alt="" class="mentorsfeat__icon js-slide-opac">
          <div class="mentorsfeat__title">Это преподаватели и&nbsp;спикеры высочайшего класса и опыта</div>
          <div class="mentorsfeat__text">
            у которых календари расписаны <br>на полгода вперед
          </div>
        </div>
        <div class="mentorsfeat__item">
          <img src="/img/sexolog/b9-3.svg" alt="" class="mentorsfeat__icon js-slide-opac">
          <div class="mentorsfeat__title">Мы записали с ними <br>видео уроки в высоком качестве</div>
          <div class="mentorsfeat__text">
            чтобы ты мог учиться у лучших <br>из лучших
          </div>
        </div>
      </div>

      <div class="teamblock flexi">
        <div class="teamblock__nav jbm teamblock__nav--left">
          <a href="#" class="teamblock__navlink is-active" data-slide="0">Фомичева</a>
          <a href="#" class="teamblock__navlink" data-slide="1">Александрова</a>
          <a href="#" class="teamblock__navlink" data-slide="2">Новоселова</a>
          <a href="#" class="teamblock__navlink" data-slide="3">Оганезов</a>
          <a href="#" class="teamblock__navlink" data-slide="4">Малафеева</a>
          <a href="#" class="teamblock__navlink" data-slide="5">Литвинова</a>
        </div>
        <div class="teamblock__nav jbm teamblock__nav--right">
          <a href="#" class="teamblock__navlink" data-slide="6">Саарян</a>
          <a href="#" class="teamblock__navlink" data-slide="7">Николаева</a>
          <a href="#" class="teamblock__navlink" data-slide="8">Щёголева</a>
          <a href="#" class="teamblock__navlink" data-slide="9">Кунникова</a>
          <a href="#" class="teamblock__navlink" data-slide="10">Руколеева</a>
          <a href="#" class="teamblock__navlink" data-slide="11">Огородникова</a>
        </div>

        <div class="swiper teamslider js-team-slider">
          <div class="swiper-wrapper">

            <!-- Слайдер менторов -->
            <article class="swiper-slide teamslider__slide">
              <div class="teamslider__item">
                <img src="/img/psychology/mentors/009.jpg" alt="" class="teamslider__photo">
                <h3 class="teamslider__name">Наталья Фомичева</h3>
                <div class="teamslider__content">
                  <ul>
                    <li>Кандидат психологических наук, Сексолог, Клинический психолог</li>
                    <li>Специалист по психотерапии психосоматических нарушений пищевого поведения </li>
                    <li>Сертифицированный специалист в области экзистенциально-гуманистической психотерапии (частная
                      практика c 2007 года) </li>
                    <li>Директор АНО «Центр прикладных исследований „Русское общество психосоматики"» </li>
                    <li>Автор научных публикаций и книги «Близость: Книга о хорошем сексе» </li>
                  </ul>
                </div>
              </div>
            </article>
            <article class="swiper-slide teamslider__slide">
              <div class="teamslider__item">
                <img src="/img/mentors/alexandrova.jpg" alt="" class="teamslider__photo">
                <h3 class="teamslider__name">Ольга Александрова</h3>
                <div class="teamslider__content">
                  <ul>
                    <li>Клинический психолог</li>
                    <li>Член Профессиональной Психотерапевтической Лиги</li>
                    <li>Сертифицированный специалист по Эмоционально-образной терапии</li>
                    <li>Автор курса "Отношения: от созависимых к счастливым"</li>
                  </ul>
                </div>
              </div>
            </article>
            <article class="swiper-slide teamslider__slide">
              <div class="teamslider__item">
                <img src="/img/psychology/mentors/001.jpg" alt="" class="teamslider__photo">
                <h3 class="teamslider__name">Елена Новоселова</h3>
                <div class="teamslider__content">
                  <ul>
                    <li>Психотерапевт с 30-ти летним опытом</li>
                    <li>Автор книг и психологических программ на радио</li>
                    <li>Член профессиональной психотерапевтической лиги</li>
                    <li>Эксперт программы "Правила жизни" на телеканале Культура</li>
                  </ul>
                </div>
              </div>
            </article>
            <article class="swiper-slide teamslider__slide">
              <div class="teamslider__item">
                <img src="/img/mentors/oganezov.jpg" alt="" class="teamslider__photo">
                <h3 class="teamslider__name">Сергей Оганезов</h3>
                <div class="teamslider__content">
                  <ul>
                    <li>Клинический психолог, психотерапевт, сексолог</li>
                    <li>Более 15 лет опыта частной практики</li>
                    <li>Член Московской Ассоциации Психологов-сексологов</li>
                    <li>Автор обучающих программ и тренингов по сексологии.</li>
                  </ul>
                </div>
              </div>
            </article>
            <article class="swiper-slide teamslider__slide">
              <div class="teamslider__item">
                <img src="/img/mentors/malafeeva.jpg" alt="" class="teamslider__photo">
                <h3 class="teamslider__name">Юлия Малафеева</h3>
                <div class="teamslider__content">
                  <ul>
                    <li>Клинический психолог со стажем работы более 20 лет</li>
                    <li>Преподаватель в высшей школе</li>
                    <li>Эксперт в области сексологии, нейропсихологии, системной семейной терапии</li>
                  </ul>
                </div>
              </div>
            </article>
            <article class="swiper-slide teamslider__slide">
              <div class="teamslider__item">
                <img src="/img/mentors/saaryan.jpg" alt="" class="teamslider__photo">
                <h3 class="teamslider__name">Тигран Саарян</h3>
                <div class="teamslider__content">
                  <ul>
                    <li>Дипломированный сексолог</li>
                    <li>Психолог и телесный терапевт</li>
                    <li>Преподаватель авторских курсов эротического массажа</li>
                    <li>Основатель Школы гармоничных отношений</li>
                  </ul>
                </div>
              </div>
            </article>
            <article class="swiper-slide teamslider__slide">
              <div class="teamslider__item">
                <img src="/img/psychology/mentors/008.jpg" alt="" class="teamslider__photo">
                <h3 class="teamslider__name">Елена Николаева</h3>
                <div class="teamslider__content">
                  <ul>
                    <li> Доктор биологических наук, профессор </li>
                    <li> Заведующая кафедрой возрастной психологии и педагогики семьи Института детства Российского
                      государственного педагогического университета им. А.И. Герцена </li>
                    <li> Член Российского физиологического общества, Российского психологического общества, Европейской
                      ассоциации психологии здоровья (EHPA), Американской психологической ассоциации (APA)</li>
                  </ul>
                </div>
              </div>
            </article>
            <article class="swiper-slide teamslider__slide">
              <div class="teamslider__item">
                <img src="/img/mentors/shegoleva.jpg" alt="" class="teamslider__photo">
                <h3 class="teamslider__name">Ольга Щёголева</h3>
                <div class="teamslider__content">
                  <ul>
                    <li>Биолог, семейный психолог, специалист по половому воспитанию</li>
                    <li>Эксперт сообщества «Секспросвет 18+»</li>
                    <li>Автор популярного блога о секс-просвещении «Bodylanguge_edu»</li>
                    <li>Член Ассоциации развития сексуального образования и укрепления репродуктивного здоровья.</li>
                  </ul>
                </div>
              </div>
            </article>
            <article class="swiper-slide teamslider__slide">
              <div class="teamslider__item">
                <img src="/img/psychology/mentors/004.jpg" alt="" class="teamslider__photo">
                <h3 class="teamslider__name">Ксения Кунникова</h3>
                <div class="teamslider__content">
                  <ul>
                    <li> Кандидат психологических наук </li>
                    <li> Руководитель инновационного проекта MyBabyCheck" (диагностика раннего развития ребёнка). </li>
                    <li> Психофизиолог и специалист по раннему развитию </li>
                    <li> Руководитель грантов Российского фонда фундаментальных исследований </li>
                    <li> Сотрудник лаборатории мозга и нейрокогнитивного развития </li>
                  </ul>
                </div>
              </div>
            </article>
            <article class="swiper-slide teamslider__slide">
              <div class="teamslider__item">
                <img src="/img/mentors/rukoleeva.jpg" alt="" class="teamslider__photo">
                <h3 class="teamslider__name">Римма Руколеева</h3>
                <div class="teamslider__content">
                  <ul>
                    <li>Кандидат филологических наук, доцент</li>
                    <li>Преподаватель философии и культурологии, более 15 лет стажа</li>
                    <li>Автор 30 научных статей</li>
                    <li>Ведет авторские курсы по эстетике и воспитанию женственности</li>
                  </ul>
                </div>
              </div>
            </article>
            <article class="swiper-slide teamslider__slide">
              <div class="teamslider__item">
                <img src="/img/mentors/litvinova.jpg" alt="" class="teamslider__photo">
                <h3 class="teamslider__name">Наталья Литвинова</h3>
                <div class="teamslider__content">
                  <ul>
                    <li>Сертифицированный специалист по Эмоционально-фокусированной терапии</li>
                    <li>IFS-терапевт и супервизор</li>
                    <li>Системный семейный терапевт</li>
                    <li>Член Общества семейных консультантов и психотерапевтов (ОСКиП)</li>
                    <li>Член International Centre for Excellence in Emotionally Focused Therapy (ICEEFT)</li>
                  </ul>
                </div>
              </div>
            </article>
            <article class="swiper-slide teamslider__slide">
              <div class="teamslider__item">
                <img src="/img/mentors/ogorodnikova.jpg" alt="" class="teamslider__photo">
                <h3 class="teamslider__name">Елизавета Огородникова</h3>
                <div class="teamslider__content">
                  <ul>
                    <li>Клинический психолог</li>
                    <li>Член профессиональных ассоциаций специалистов по половому воспитанию и сексуальному образованию
                    </li>
                    <li>Автор проекта «Не стыдно»</li>
                  </ul>
                </div>
              </div>
            </article>
            <!-- конец: Слайдер менторов -->
          </div>
        </div>

      </div><!-- //teamblock -->
    </div>
  </section><!-- //mentors -->





  <section class="stepform sex11">
    <div class="container">
      <h2 class="title">Возникли вопросы?</h2>
      <div class="grid-mob-scroll">
        <div class="stepform__vector">
          <p class="js-slide-interval">Оставьте свой <br>номер телефона</p>
          <span class="stepform__arrow"></span>
          <p class="js-slide-interval">Наш специалист <br>свяжется с вами</p>
          <span class="stepform__arrow"></span>
          <p class="js-slide-interval">Даст подробную информацию <br>о&nbsp;начале учебы на&nbsp;курсе</p>
        </div>
      </div>
      <?php
        $formClassName = 'programfromlead__formwrap--red';
        include('./../templates/leadform.php');
        $formClassName = '';
      ?>
    </div>
  </section><!-- //stepform -->




  <section class="features sex12">
    <div class="container">
      <h2 class="title">Вас ждет <b>фундаментальная, <br>глубокая и подробная</b> <br><span>программа <br class="mobbr">обучения</span></h2>
      <div class="features__wrap">
        <div class="features__left js-slide-bot">
          <video preload="auto" playsinline autoplay loop muted class="lazy">
            <source data-src="/img/sexolog/b12-video.mp4">
          </video>
        </div>
        <div class="features__right">
          <div class="features__subtitle">
            Подробная как<br>
            в университете,<br><br class="mobbr">
            но компактная<br>
            и не скучная
          </div>

          <div class="features__grid">
            <div class="features__item">
              <img data-src="/img/sexolog/b12-1.png" alt="" class="lazy js-slide-opac">
              <p>Программа соответствует <b>профессиональным стандартам</b>
              </p>
            </div>
            <div class="features__item">
              <img data-src="/img/sexolog/b12-2.png" alt="" class="lazy js-slide-opac">
              <p><b>Практика</b> начнется с первых дней обучения</p>
            </div>
            <div class="features__item">
              <img data-src="/img/sexolog/b12-3.png" alt="" class="lazy js-slide-opac">
              <p><b>Современные</b> методики обучения</p>
            </div>
            <div class="features__item">
              <img data-src="/img/sexolog/b12-4.png" alt="" class="lazy js-slide-opac">
              <p>Более <b> 100 дополнительных материалов </b></p>
            </div>
          </div>

          <div class="psy11__gridwrap">
            <div class="grid-mob-scroll">
              <div class="psy11__grid">
                <div class="psy11__item psy11__item--wide">
                  <img data-src="/img/sexolog/b12-1.png" alt="" class="lazy js-slide-opac">
                  <p>Программа соответствует <b>профессиональным стандартам</b></p>
                </div>
                <div class="psy11__item">
                  <img data-src="/img/sexolog/b12-2.png" alt="" class="lazy js-slide-opac">
                  <p>Практика <b>начнется с первых дней обучения</b></p>
                </div>
                <div class="psy11__item">
                  <img data-src="/img/sexolog/b12-3.png" alt="" class="lazy js-slide-opac">
                  <p>Современные <b>методики обучения</b></p>
                </div>
                <div class="psy11__item">
                  <img data-src="/img/sexolog/b12-4.png" alt="" class="lazy js-slide-opac">
                  <p>Более 100 дополнительных материалов</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section><!-- //sex12 -->



  <section class="guideform sexguideform">
    <div class="container">
      <h3 class="guideform__title title js-slide-bot">
        <span>Получите <b>гайд</b></span>
        <span>по профессии</span>
        <span><b>Сексолог</b></span>
        <img src="/img/sexolog/b13-book.png" alt="">
      </h3>
      <?php
        $formClassName = 'programfromlead__formwrap--red';
        $buttonTxt = 'Получить гайд';
        include('./../templates/leadform.php');
        $buttonTxt = null;
        $formClassName = '';
      ?>
    </div>
  </section><!-- //guideform -->


  <section class="features sex15">
    <div class="container">
      <h2 class="title">Вас ждут практические <br>занятия, в <b>мини-группах</b></h2>
      <div class="features__wrap">
        <div class="features__left js-slide-bot">
          <video preload="auto" playsinline autoplay loop muted class="lazy">
            <source data-src="/img/sexolog/b15-video.mp4">
          </video>
        </div>
        <div class="features__right">
          <div class="features__subtitle">
            В формате семинаров, тренингов и&nbsp;супервизий под руководством опытных психологов
          </div>
          <div class="features__grid">
            <div class="features__item">
              <img src="/img/sexolog/b15-1.jpg" alt="" class="js-slide-opac">
              <p>Каждый получит <br>достаточно <b>внимания наставника</b></p>
            </div>
            <div class="features__item">
              <img src="/img/sexolog/b15-2.jpg" alt="" class="js-slide-opac">
              <p>Участники группы <b>мотивируют и помогают</b> друг другу</p>
            </div>
            <div class="features__item">
              <img src="/img/sexolog/b15-3.jpg" alt="" class="js-slide-opac">
              <p>Студенты растут <b>в среде единомышленников</b></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //sex15 -->



  <section class="timeslot timeslot--sex">
    <div class="container">
      <h2 class="title">
        Научим <b>рекламировать свои <br>
          услуги</b> и <b>привлекать <br>клиентов</b>
      </h2>
      <div class="timeslot__box">
        <img src="/img/sexolog/b19-bg.svg" alt="" class="timeslot__bg">
        <div class="timeslot__over flexi">
          <div class="timeslot__text">
            <p>
              С каждой группой<br>
              работает отдельный<br>
              куратор-специалист<br>
              по привлечению клиентов
            </p>
            <small>начиная с <span>третьего месяца</span> обучения</small>
          </div>
          <div class="timeslot__avawrap">
            <img src="/img/psychology/b19-ava.png" alt="" class="timeslot__ava js-slide-opac">
          </div>
          <img src="/img/psychology/b19-matrix.png" alt="" class="timeslot__matrix js-slide-opac">
        </div>
      </div>
      <div class="jbm timeslot__bot">с 3 месяца</div>
    </div>
  </section><!-- //timeslot -->





  <section class="diplomblock diplomblock--sex">
    <div class="container">
      <h2 class="title">
        <b>Вы получаете диплом <br>установленного образца</b> <br>
        о профессиональной переподготовке
      </h2>
      <div class="diplomblock__sub js-slide-opac">А так же два международных диплома</div>
      <div class="swiper js-diplomblock-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="/img/sexolog/b17-diplom.jpg" alt="" class="diplomblock__sl-pic">
          </div>
          <div class="swiper-slide">
            <img src="/img/sexolog/b17-diplom2.jpg" alt="" class="diplomblock__sl-pic">
          </div>
        </div>
        <button class="ctrl ctrl--prev"><img src="/img/ui/slider-ctrl.svg" alt=""></button>
        <button class="ctrl ctrl--next"><img src="/img/ui/slider-ctrl.svg" alt=""></button>
      </div>
      <div class="diplomblock__footer flexi">
        <p>
          Чтобы выпускники курса могли<br>
          <b>подтвердить свою квалификацию</b><br>
          перед клиентами и / или<br>
          работодателями
        </p>
        <a href="#offer" class="circlebutton" data-scrollto="#offer">Задать вопрос <br>специалисту</a>
      </div>
    </div>
  </section><!-- //diplomblock -->







  <section class="features sex18">
    <div class="container">
      <h2 class="title">Мы организовали <b>яркую <br>студенческую жизнь</b></h2>
      <div class="features__wrap">
        <div class="features__left js-slide-bot">
          <img src="/img/sexolog/b18-left.jpg" alt="" class="features__leftimg">
        </div>
        <div class="features__right">
          <div class="features__grid">
            <div class="features__item">
              <picture class="js-slide-opac">
                <!-- <source media="(min-width: 768px)" srcset="/img/sexolog/b18-1.webp"> -->
                <img src="/img/sexolog/b18-1.webp" alt="">
              </picture>
              <div class="features__subtitle">Научный клуб</div>
              <p>Научим составлять портфолио и подготовим к поступлению в магистратуру</p>
            </div>
            <div class="features__item">
              <picture class="js-slide-opac">
                <source media="(min-width: 768px)" srcset="/img/psychology/b16-2.jpg">
                <img src="/img/sexolog/b18-2.webp" alt="">
              </picture>
              <div class="features__subtitle">Киноклуб</div>
              <p>Обсуждаем фильмы в&nbsp;контексте сексологии</p>
            </div>
            <div class="features__item">
              <img src="/img/sexolog/b18-3.webp" alt="" class="js-slide-opac">
              <div class="features__subtitle">Читальный зал</div>
              <p>Обсуждаем интересные книги</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //sex18 -->





  <section class="stepform sex19">
    <div class="container">
      <h2 class="title">Получить консультацию специалиста</h2>
      <div class="grid-mob-scroll">
        <div class="stepform__vector js-slide-bot">
          <p>Оставьте свой <br>номер телефона</p>
          <span class="stepform__arrow"></span>
          <p>Наш специалист <br>свяжется с вами</p>
          <span class="stepform__arrow"></span>
          <p>Даст подробную информацию <br>
            о&nbsp;начале учебы на&nbsp;курсе</p>
        </div>
      </div>
      <?php
        $formClassName = 'programfromlead__formwrap--red';
        include('./../templates/leadform.php');
        $formClassName = '';
      ?>
    </div>
  </section><!-- //stepform -->


  <div class="sex20">
    <section class="statistic container psy20">
      <h2 class="title">Поговорим о цифрах</h2>
      <div class="statistic__grid">
        <dl class="statistic__item statistic__item--verbg">
          <dt>10<img src="/img/psychology/b20-star.svg" alt="" class="statistic__star"></dt>
          <dd>Топ <br>преподавателей</dd>
        </dl>
        <dl class="statistic__item statistic__item--verborder">
          <dt class="js-slide-opac">6</dt>
          <dd>Месяцев <br>обучения</dd>
        </dl>
        <dl class="statistic__item">
          <dt class="js-slide-opac">200+</dt>
          <dd>Часов работы с наставниками <br>и супервизорами</dd>
        </dl>
        <dl class="statistic__item">
          <dt class="js-slide-opac">400 <span>часов</span></dt>
          <dd>Интересных и насыщенных <br>занятий</dd>
        </dl>
        <dl class="statistic__item">
          <dt class="js-slide-opac">3</dt>
          <dd>Дня очных <br>мероприятий <br>в Москве</dd>
        </dl>
        <dl class="statistic__item  statistic__item--verred">
          <dt class="js-slide-opac">12/7</dt>
          <dd>Поддержка студентов во время обучения</dd>
        </dl>
      </div>
    </section>
  </div>

  <div class="sex21">
    <section class="progrmsummary container">
      <h2 class="title">Программа обучения</h2>
      <div class="progrmsummary__wrap">
        <div class="progrmsummary__item" data-hidewrap="1">
          <div class="progrmsummary__head" data-hideopen="1">
            <span>Модуль 1. Сексология не только про секс</span>
            <button class="progrmsummary__plus">+</button>
          </div>
          <div class="progrmsummary__contentwrap" data-hidebox="1">
            <div class="progrmsummary__content textcontent">
              <p>Вводный модуль погрузит вас в системное изучение этой науки и практики.</p>
              <p>Вы изучите:</p>
              <ul>
                <li>основные понятия и концепции сексуальности человека</li>
                <li>историко-эволюционные подходы к ролям мужчины и женщины в обществе</li>
                <li>концепцию развития сексуальной культуры в ходе истории человечества</li>
                <li>новейшие представления о трендах и тенденциях сексуальной жизни в XXI в.</li>
              </ul>
            </div>
          </div>
        </div><!-- //item -->

        <div class="progrmsummary__item" data-hidewrap="2">
          <div class="progrmsummary__head" data-hideopen="2">
            <span>Модуль 2. Особенности психологического консультирования по вопросам сексуальности</span>
            <button class="progrmsummary__plus">+</button>
          </div>
          <div class="progrmsummary__contentwrap" data-hidebox="2">
            <div class="progrmsummary__content textcontent">
              <p><i>Как проходит консультация в сфере сексуальных отношений?</i> Опытные практикующие сексологи расскажут
                об общих требованиях и особенностях консультирования в этой сфере и научат:</p>
              <ul>
                <li>эффективно организовывать начало работы с клиентом, собирать анамнез и выявлять проблемы</li>
                <li>определять цели и задачи консультирования</li>
                <li>следовать этике психолога-консультанта по сексуальным отношениям</li>
              </ul>
            </div>
          </div>
        </div><!-- //item -->

        <div class="progrmsummary__item" data-hidewrap="3">
          <div class="progrmsummary__head" data-hideopen="3">
            <span>Модуль 3. Мужская и женская сексуальность</span>
            <button class="progrmsummary__plus">+</button>
          </div>
          <div class="progrmsummary__contentwrap" data-hidebox="3">
            <div class="progrmsummary__content textcontent">
              <p>Изучив этот модуль, Вы узнаете:</p>
              <ul>
                <li>Об основах сексуального возбуждения и работе с сексуальными стимулами</li>
                <li>Что такое эрогенные зоны и как на них воздействовать</li>
                <li>Как половое поведение связано с возрастом и общим состоянием здоровья</li>
                <li>Что такое дисфункции, их разновидности, медицинские и психологические причины</li>
              </ul>
            </div>
          </div>
        </div><!-- //item -->

        <div class="progrmsummary__item" data-hidewrap="4">
          <div class="progrmsummary__head" data-hideopen="4">
            <span>Модуль 4. Как устроен мозг мужчины и женщины</span>
            <button class="progrmsummary__plus">+</button>
          </div>
          <div class="progrmsummary__contentwrap" data-hidebox="4">
            <div class="progrmsummary__content textcontent">
              <p>Что современная наука знает о различиях в строении и работе головного мозга у представителей разных
                полов, о работе гормонов и биохимических основах любви и привязанности.</p>
              <p>Основные темы модуля:</p>
              <ul>
                <li>психология мужчины и женщины, различия в развитии и строении головного мозга</li>
                <li>половые различия в мышлении и коммуникации, роль межполушарной асимметрии в поведении мужчин и женщин
                </li>
                <li>гормоны и их влияние на половое поведение, феромоны</li>
                <li>выбор партнера и биохимия любви, проблема формирования любовной зависимости, проблема переживания
                  разрыва отношений</li>
              </ul>
            </div>
          </div>
        </div><!-- //item -->

        <div class="progrmsummary__item" data-hidewrap="5">
          <div class="progrmsummary__head" data-hideopen="5">
            <span>Модуль 5. Развитие сексуальности и сексуальное воспитание</span>
            <button class="progrmsummary__plus">+</button>
          </div>
          <div class="progrmsummary__contentwrap" data-hidebox="5">
            <div class="progrmsummary__content textcontent">
              <p><i>Откуда берутся дети?</i> Насколько сексуальное поведение взрослого человека зависит от воспитания и
                традиций родительской семьи? Как заложить у ребенка психологические основы гармоничного общения с
                противоположным полом в будущем?</p>
              <p>В этом модуле вы узнаете:</p>
              <ul>
                <li>о закономерностях психосексуального развития человека</li>
                <li>факторах формирование здоровой сексуальности в детском и подростковом возрасте</li>
                <li>роль психологические травмы, полученные в детском возрасте</li>
                <li>о гендерных ролях, влиянии поведенческих моделей отца и матери на развитие сексуальности ребенка</li>
              </ul>
              <p>Также вы разберетесь с мифами и стереотипами о женственности и мужественности. На практических занятиях
                вместе с наставниками проанализируете популярные темы психологического консультирования родителей по
                вопросам сексуальности детей и подростков, поговорите об основных ошибках родителей в сексуальном
                воспитании детей.</p>
            </div>
          </div>
        </div><!-- //item -->

        <div class="progrmsummary__item" data-hidewrap="6">
          <div class="progrmsummary__head" data-hideopen="6">
            <span>Модуль 6. Формирование гендерной идентичности и сексуальной ориентации</span>
            <button class="progrmsummary__plus">+</button>
          </div>
          <div class="progrmsummary__contentwrap" data-hidebox="6">
            <div class="progrmsummary__content textcontent">
              <p><i>Хочу себе отрезать грудь!</i> В процессе изучения этого модуля, отбросив социальные стереотипы, вы
                разберетесь с тем:</p>
              <ul>
                <li>как формируется гендерная идентичность и с какими структурами мозга она связана</li>
                <li>что такое цисгендерная и трансгендерная идентичность</li>
                <li>что лежит в основе развития сексуальной ориентации и почему она не зависит от воспитания</li>
                <li>проблемы и запросы ЛГБ-клиентов, особенности психологического консультирования</li>
              </ul>
            </div>
          </div>
        </div><!-- //item -->

        <div class="progrmsummary__item" data-hidewrap="7">
          <div class="progrmsummary__head" data-hideopen="7">
            <span>Модуль 7. Семейно-супружеские аспекты в сексологическом консультировании</span>
            <button class="progrmsummary__plus">+</button>
          </div>
          <div class="progrmsummary__contentwrap" data-hidebox="7">
            <div class="progrmsummary__content textcontent">
              <p><i>Есть ли секс после конфетно-букетного периода или рождения детей?</i> В рамках модуля разбирается
                крайне важная для консультантов в сфере сексологии тема – семейные отношения. На практических занятиях вы
                обсудите конкретные запросы и кейсы из области семейного консультирования в сексологии. Отдельные занятия
                будут посвящены диагностике, основным стратегиям и техникам в семейном консультировании.</p>
              <p>Вы изучите:</p>
              <ul>
                <li>Системный подход в семейном консультировании</li>
                <li>Основные направления работы с парными запросами (КПТ, ЭФТ, ЭОТ)</li>
                <li>Стадии и кризисы, через которые проходит любая семья</li>
                <li>Основные проблемы в сексуальной жизни пары и особенности работы с ними</li>
              </ul>
            </div>
          </div>
        </div><!-- //item -->

        <div class="progrmsummary__item" data-hidewrap="8">
          <div class="progrmsummary__head" data-hideopen="8">
            <span>Модуль 8. Психологическое консультирование при проблеме отсутствия влечения и сексуального охлаждения в
              паре</span>
            <button class="progrmsummary__plus">+</button>
          </div>
          <div class="progrmsummary__contentwrap" data-hidebox="8">
            <div class="progrmsummary__content textcontent">
              <p><i>Почему супруги изменяют друг другу и есть ли жизнь после развода?</i> В модуле рассматриваются одни из
                самых распространенных запросов, с которыми пары обращаются за консультацией сексолога, и практические
                методы для улучшения качества интимной жизни в паре</p>
              <ul>
                <li>Сексуальная коммуникация в паре</li>
                <li>Диагностика психологических причин сексуального охлаждения в паре</li>
                <li>Особенности работы с проблемой супружеской измены</li>
                <li>Секс-терапия и техники интимного массажа для женщин</li>
                <li>Психологическая помощь после расставания и развода</li>
              </ul>
            </div>
          </div>
        </div><!-- //item -->

        <div class="progrmsummary__item" data-hidewrap="9">
          <div class="progrmsummary__head" data-hideopen="9">
            <span>Модуль 9. Деструктивная сексуальность</span>
            <button class="progrmsummary__plus">+</button>
          </div>
          <div class="progrmsummary__contentwrap" data-hidebox="9">
            <div class="progrmsummary__content textcontent">
              <p><i>Мне нравятся все женщины на свете.</i> В рамках модуля представлен разбор разных видов сексуальных
                девиаций. Для практикующего специалиста важно уметь распознавать парафилии (или половые девиации) и
                понимать причины их развития.</p>
              <p>Вы узнаете:</p>
              <ul>
                <li>как определить границы нормы в партнерских отношениях</li>
                <li>в каких случаях требуется лечение парафилии и вмешательство врача-психиатра</li>
                <li>в каких случаях могут применяться психотерапевтические методы</li>
                <li>алгоритм работы при проблеме порнозависимости</li>
                <li>об особенности психологической работы с жертвами инцеста</li>
                <li>о других видах парафилий (вуайеризм, эксгибиционизм, BDSM-отношения)</li>
              </ul>
            </div>
          </div>
        </div><!-- //item -->

        <div class="progrmsummary__item" data-hidewrap="10">
          <div class="progrmsummary__head" data-hideopen="10">
            <span>Модуль 10. Сексуальная агрессия</span>
            <button class="progrmsummary__plus">+</button>
          </div>
          <div class="progrmsummary__contentwrap" data-hidebox="10">
            <div class="progrmsummary__content textcontent">
              <p><i>Меня изнасиловали и я никому не скажу.</i> Как "разговорить" жертву сексуального насилия, оказать
                психологическую помощь и найти ресурсы для нормализации жизни? Помогут знания данного модуля:</p>
              <ul>
                <li>формы сексуальной агрессии</li>
                <li>техники помощи клиентам разных возрастов, подвергнувшихся сексуальному насилию</li>
                <li>что такое сексуальное домогательство и как работать с клиентами, пережившими харассмент</li>
                <li>почему важна проблема насилия в семьях, каковы ее причины и как сексолог может помочь женщинам,
                  ставшим жертвами домашнего насилия</li>
              </ul>
            </div>
          </div>
        </div><!-- //item -->

        <div class="progrmsummary__item" data-hidewrap="11">
          <div class="progrmsummary__head" data-hideopen="11">
            <span>Бизнес-модуль. Формирование личного бренда.</span>
            <button class="progrmsummary__plus">+</button>
          </div>
          <div class="progrmsummary__contentwrap" data-hidebox="11">
            <div class="progrmsummary__content textcontent">
              <p>Успешные блогеры и предприниматели-психологи расскажут о личном бренде как инструменте продвижения, о
                правилах позиционирования себя в социальных сетях, ведении аккаунтов и других составляющих продвижения
                себя как профессионала в сфере консультирования по вопросам сексуальности.</p>
            </div>
          </div>
        </div><!-- //item -->
      </div>
    </section><!-- //progrmsummary -->
  </div>



  <section class="quizlink">
    <div class="container">
      <h2 class="title">Подходит ли вам профессия <br>Сексолог-консультант?</h2>
      <div class="quizlink__box flexi js-slide-opac">
        <dl>
          <dt>7 вопросов</dt>
          <dd>Пройдите <br>тест из семи <br>вопросов</dd>
        </dl>
        <dl>
          <dt>5000 ₽</dt>
          <dd>Получите скидку <br>на обучение <br>в 5000 руб.</dd>
        </dl>
        <div class="quizlink__action flexi">
          <a href="#" class="circlebutton">Пройти <br>тест</a>
        </div>
      </div>
    </div>
  </section><!-- //quizlink -->







  <section class="dreams sex23">
    <div class="container">
      <h2 class="title">В результате обучения <br><b>вы сможете</b></h2>
      <div class="grid-mob-scroll">
        <div class="dreams__grid">
          <div class="dreams__item">
            <div class="dreams__iconwrap">
              <img src="/img/sexolog/b23-1.png" alt="" class="js-slide-opac">
            </div>
            <div class="dreamsltitle">
              Работать с сексуальными<br>
              дисфункциями, вызванными<br>
              психологическими причинами
            </div>
          </div>
          <div class="dreams__item">
            <div class="dreams__iconwrap dreams__iconwrap--wide">
              <img src="/img/sexolog/b23-2.png" alt="" class="js-slide-opac">
            </div>
            <div class="dreamsltitle">
              Помогать людям принять и полюбить<br>
              себя, собственное тело, чтобы<br>
              не бояться секса
            </div>
          </div>
          <div class="dreams__item dreams__item--bg">
            <div class="dreams__iconwrap">
              <img src="/img/sexolog/b23-3.png" alt="">
            </div>
            <div class="dreamsltitle">
              Глубже понять свою личность <br>и сексуальность
              <small class="dreamsltitle__min">
                работать с самооценкой и принятием своего
                тела, открыто говорить с партнером на интимные темы
              </small>
            </div>
          </div>
          <div class="dreams__item dreams__item--nobg">
            <div class="dreams__iconwrap">
              <img src="/img/sexolog/b23-4.png" alt="" class="js-slide-opac">
            </div>
            <div class="dreamsltitle">
              Помогать справиться <br>
              с расстройствами влечения<br>
              и возбуждения
            </div>
          </div>
          <div class="dreams__item dreams__item--nobg">
            <div class="dreams__iconwrap">
              <img src="/img/sexolog/b23-5.png" alt="" class="js-slide-opac">
            </div>
            <div class="dreamsltitle">
              Подсказать, как учесть разный<br>
              сексуальный темперамент у супругов,<br>
              чтобы это не мешало отношениям
            </div>
          </div>
          <div class="dreams__item dreams__item--border dreams__item--extra">
            <div class="dreams__iconwrap dreams__iconwrap--wide">
              <img src="/img/sexolog/b23-6.png" alt="" class="js-slide-opac">
            </div>
            <div class="dreamsltitle">
              Получать оргазм во время интимной<br>
              близости (по статистике его <br>
              испытывают меньше половины женщин)
            </div>
          </div>
          <div class="dreams__item">
            <div class="dreams__iconwrap">
              <img src="/img/sexolog/b23-7.png" alt="" class="js-slide-opac">
            </div>
            <div class="dreamsltitle">
              Проводить диагностику проблем<br>
              сексуальной сферы личности<br>
              и пары
              <small class="dreamsltitle__min">
                подбирать стратегию и тактику работы с индивидуальными и парными клиентскими запросами
              </small>
            </div>
          </div>
          <div class="dreams__item dreams__item--border">
            <div class="dreams__iconwrap">
              <img src="/img/sexolog/b23-8.png" alt="" class="js-slide-opac">
            </div>
            <div class="dreamsltitle">
              Помогать семейным парам<br>
              восстановить гармоничные<br>
              интимные отношения
              <small class="dreamsltitle__min">
                Помочь преодолеть охлаждение друг к другу и пережить кризисы в семейных отношениях, связанные с
                рождением ребенка, изменой одного из супругов
              </small>
            </div>
          </div>
        </div>
      </div>

      <h2 class="title">
        а также <b>Консультировать <br>родителей</b> по вопросам детской<br>и подростковой сексуальности
      </h2>
    </div>
  </section><!-- //dreams -->





  <section class="psy7 sex24">
    <div class="container">
      <h2 class="title">Для кого наш курс</h2>
      <div class="psy7__wrap">
        <div class="psy7__item js-slide-interval">
          <img src="/img/sexolog/b24-1.svg" alt="" class="psy7__icon">
          <div class="psy7__title">Для тех, кто мечтает о профессии сексолога с нуля</div>
          <div class="psy7__text">
            Вы всегда хотели зарабатывать любимым и благородным делом. Люди тянутся к вам за советами, у вас богатый
            жизненный опыт, но не хватает знаний
          </div>
        </div>
        <div class="psy7__item js-slide-interval">
          <img src="/img/sexolog/b24-2.svg" alt="" class="psy7__icon">
          <div class="psy7__title">Для тех, кто интересуется темой сексологии в личных целях</div>
          <div class="psy7__text">
            И хочет разобраться в вопросах секса, семейной психологии, отношений в паре, гендерной психологии и обрести
            благополучие в психологической и сексуальной сфере
          </div>
        </div>
        <div class="psy7__item js-slide-interval">
          <img src="/img/sexolog/b24-3.png" alt="" class="psy7__icon">
          <div class="psy7__title">Для специалистов с высшим психологическим образованием</div>
          <div class="psy7__text">
            Или студентов старших курсов по психологии, которые рассматривают обучение сексологии как способ расширить
            знания, повысить квалификацию и доход
          </div>
        </div>
        <div class="psy7__item js-slide-interval">
          <img src="/img/sexolog/b24-4.png" alt="" class="psy7__icon">
          <div class="psy7__title">Для тех, кому нужен диплом, чтобы работать официально.</div>
          <div class="psy7__text">
            Вы уже работаете и хотите подкрепить свой статус официальным документом - дипломом сексолога
          </div>
        </div>
      </div>
    </div>
  </section><!-- //psy6 -->



  <section class="priceblock" id="offer">
    <div class="container">
      <h2 class="title">Стоимость обучения</h2>
      <div class="priceblock__row flexi">
        <div class="priceblock__price jbm"><span>8300</span><span>₽/МЕС</span></div>
        <div class="priceblock__descr">
          <p>Беспроцентная рассрочка на 24 месяца.</p>
          <p>Первый платеж через 2 месяца.</p>
        </div>
      </div>
      <div class="priceblock__greenprice jbm"><span>От</span> <span>5000</span> <span>₽/МЕС</span> <small>Скидка <b>до
            7 апреля</b></small></div>
      <div class="priceblock__mobdescr">
        <p>Беспроцентная рассрочка на 24 месяца.</p>
        <p>Первый платеж через 2 месяца.</p>
      </div>
      <?php
        $isPromoForm = true;
        $formClassName = 'programfromlead__formwrap--red';
        include('./../templates/leadform.php');
        $isPromoForm = false;
        $formClassName = '';
      ?>
    </div>
  </section><!-- //priceblock -->






  <section class="faqblock">
    <h2 class="title">Часто задаваемые вопросы</h2>
    <div class="faqblock__wrap container">
      <div class="progrmsummary__item" data-hidewrap="faq1">
        <div class="progrmsummary__head" data-hideopen="faq1">
          <strong>Нужна ли специальная подготовка для обучения на этом курсе?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq1">
          <div class="progrmsummary__content">
            <p>Нет, специальная подготовка или психологическое образование не требуется. Учиться можно даже не имея высшего образования.</p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq2">
        <div class="progrmsummary__head" data-hideopen="faq2">
          <strong>Какой документ я получу после окончания обучения?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq2">
          <div class="progrmsummary__content">
            <p>Если на момент окончания обучения у вас не будет диплома о среднем профессиональном или высшем образовании, вы получите сертификат о прохождении обучения.</p>
            <p>
              Если на момент окончания обучения у вас будет высшее или среднее профессиональное образование, вы получите диплом установленного образца о профессиональной переподготовке. В дипломе будет указана квалификация: «Психолог-консультант в сфере сексуальных отношений».<br>
              Такой диплом дает право вести практическую деятельность.<br>
              Каждый выпускник курса получает два международных диплома.<br>
              Первый диплом <b>IPHM</b> и второй диплом <b>CPD</b>
            </p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq3">
        <div class="progrmsummary__head" data-hideopen="faq3">
          <strong>Смогу ли я получить все нужные навыки онлайн?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq3">
          <div class="progrmsummary__content">
            <p>Да. Наша образовательная программа включает 200 часов практических занятий в мини-группах, во время которых вы сможете закрепить знания и навыки, полученные на лекциях, разбирать реальные кейсы, работать с диагностическими методиками, и выполнять упражнения в парах.</p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq4">
        <div class="progrmsummary__head" data-hideopen="faq4">
          <strong>Если я пропустил практическое занятие, что делать?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq4">
          <div class="progrmsummary__content">
            <p>Особенностью нашей программы является построение индивидуальной траектории обучения и создание гибкого расписания для всех студентов. Если Вы пропустили занятие, Вы сможете посетить его с другой группой в удобное время или посмотреть в записи.</p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq5">
        <div class="progrmsummary__head" data-hideopen="faq5">
          <strong>Кому я смогу задавать вопросы в процессе обучения?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq5">
          <div class="progrmsummary__content">
            <p>За каждой группой наших студентов закреплен куратор, который сможет оперативно ответить на все вопросы. На все вопросы по содержанию лекций на платформе будут отвечать преподаватели.</p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq6">
        <div class="progrmsummary__head" data-hideopen="faq6">
          <strong>Смогу ли я совмещать обучение с работой?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq6">
          <div class="progrmsummary__content">
            <p>Мы организовали обучение так, чтобы Вам было максимально удобно и просто. Видеоуроки Вы смотрите у себя в личном кабинете в любое удобное время. К этим материалам можно будет возвращаться неограниченно. Куратор поможет Вам в организации процесса обучения и графика посещения практических занятий. Практики проходят 1 раз в неделю в утреннее или вечернее время, в зависимости от Вашего графика работы.</p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq7">
        <div class="progrmsummary__head" data-hideopen="faq7">
          <strong>Какое программное обеспечение мне понадобится для обучения?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq7">
          <div class="progrmsummary__content">
            <p>Мы постарались сделать курс максимально доступным для каждого студента. Поэтому в ходе обучения мы используем следующие сервисы:</p>
            <p>Zoom — для проведения практик и всех групповых активностей.</p>
            <p>Telegram — мессенджер, в котором происходит общение куратора, преподавателей и студентов.</p>
            <p>Платформа Talentsy открывается в любом веб-браузере, на ней размещаются лекции и дополнительные материалы к ним.</p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq8">
        <div class="progrmsummary__head" data-hideopen="faq8">
          <strong>Смогу ли я подключаться с планшета или телефона?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq8">
          <div class="progrmsummary__content">
            <p>Да. Для этого на нем должны быть установлены веб-браузер, zoom и Телеграм.</p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq9">
        <div class="progrmsummary__head" data-hideopen="faq9">
          <strong>Будет ли итоговый экзамен?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq9">
          <div class="progrmsummary__content">
            <p>Для нас очень важно, чтобы студенты усвоили все содержание курса на высоком уровне. Поэтому по итогам каждой недели обучения Вы будете проходить тест, где требуется набрать от 70% правильных ответов. Количество попыток прохождения теста не ограничено. В конце обучения будет итоговый тест. Вы получаете диплом при условии успешного прохождения этого тестирования.</p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq10">
        <div class="progrmsummary__head" data-hideopen="faq10">
          <strong>Что если мне не понравится?</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq10">
          <div class="progrmsummary__content">
            <p>Мы уверены в качестве нашей образовательной программы, поэтому если курс вам не понравится, мы сделаем возврат средств пропорционально пройденным материалам, согласно условиям публичной оферты.</p>
          </div>
        </div>
      </div><!-- //item -->

      <div class="progrmsummary__item" data-hidewrap="faq11">
        <div class="progrmsummary__head" data-hideopen="faq11">
          <strong>Особенности курсов сексологии</strong>
          <button class="progrmsummary__plus">+</button>
        </div>
        <div class="progrmsummary__contentwrap" data-hidebox="faq11">
          <div class="progrmsummary__content">
            <p>После окончания курсов у вас будет диплом о проф. переподготовке. Вы получите специализацию в сфере психологического консультирования, диплом о профессиональной переподготовке и начните заниматься частной практикой.</p>
            <p>На курсе более 200 часов практики. Занятия в мини-группах под руководством опытных практикующих сексологов.</p>
            <p>Наши преподаватели – доктора и кандидаты наук, востребованные практикующие психологи и сексологи</p>
          </div>
        </div>
      </div><!-- //item -->

    </div>
  </section>




  <section class="talentsyabout talentsyabout--sex">
    <div class="talentsyabout__topbg">
      <div class="container">
        <img src="/img/footer/logo-white.svg" alt="" class="talentsyabout__logo js-slide-opac">
        <dl class="talentsyabout__line1 flexi">
          <dt>Онлайн-обучение <br>гуманитарным <br>профессиям</dt>
          <dd>
            Мы помогаем развивать талант, чтобы вы могли начать заниматься любимым делом и превратили свое увлечение в
            профессию. Вас ждут самые актуальные подходы к обучению и топ-преподаватели на каждой программе. Мы создаем
            современный университет, в котором интересно учиться, и заботимся о каждом студенте.
          </dd>
        </dl>
        <div class="talentsyabout__props">
          <dl class="talentsyabout__prop">
            <dt class="js-slide-opac">6</dt>
            <dd>Факультетов</dd>
          </dl>
          <dl class="talentsyabout__prop">
            <dt class="js-slide-opac">20</dt>
            <dd>Образователь- <br>ных программ</dd>
          </dl>
          <dl class="talentsyabout__prop">
            <dt class="js-slide-opac">70+</dt>
            <dd>Выдающихся <br>преподавателей</dd>
          </dl>
          <dl class="talentsyabout__prop talentsyabout__prop--yellow">
            <dt class="js-slide-opac">13k<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 51 50" class="talentsyabout__heart"><path fill="currentColor" fill-rule="evenodd" d="M16.833.51c2.064.067 3.876.475 5.03 1.05 1.326.66 2.566 1.417 3.646 2.255 1.071-.834 2.299-1.589 3.608-2.253l.226.446-.226-.446C30.255.985 32.058.577 34.118.51c2.07-.068 4.444.206 6.733 1.032 2.29.826 4.504 2.209 6.233 4.361 1.73 2.154 2.951 5.053 3.298 8.876.721 7.956-1.907 14.137-6.48 19.567-4.554 5.406-11.051 10.086-18.08 15.062a.5.5 0 0 1-.578-.816c7.052-4.992 13.437-9.6 17.893-14.89 4.435-5.267 6.942-11.19 6.249-18.833-.331-3.65-1.49-6.357-3.082-8.34-1.594-1.985-3.643-3.271-5.793-4.047-2.152-.776-4.396-1.037-6.36-.973-1.973.065-3.618.456-4.582.945a21.696 21.696 0 0 0-3.27 2.015c1.249 1.106 2.213 2.335 2.742 3.658.535 1.338.62 2.766.105 4.224-.51 1.448-1.598 2.887-3.34 4.29a.5.5 0 0 1-.628 0c-1.741-1.403-2.828-2.839-3.337-4.283-.513-1.455-.425-2.879.111-4.214.534-1.327 1.507-2.561 2.766-3.675a21.107 21.107 0 0 0-3.3-2.014l.223-.447-.223.447c-.985-.49-2.642-.881-4.618-.946-1.967-.064-4.21.197-6.356.973C8.3 3.257 6.258 4.544 4.67 6.53c-1.586 1.982-2.74 4.689-3.072 8.34-1.24 13.684 9.574 23.525 17.777 29.395a.5.5 0 1 1-.582.813C10.594 39.21-.693 29.067.603 14.78c.346-3.822 1.563-6.72 3.286-8.875 1.722-2.152 3.928-3.536 6.215-4.362C12.388.716 14.759.442 16.833.51Zm8.676 4.597c-1.23 1.061-2.148 2.213-2.629 3.41-.453 1.128-.521 2.3-.096 3.508.402 1.138 1.254 2.342 2.708 3.578 1.454-1.236 2.308-2.443 2.711-3.585.428-1.212.361-2.39-.09-3.52-.477-1.192-1.385-2.338-2.604-3.391Z" clip-rule="evenodd"/></svg></dt>
            <dd>Любимых <br>студентов</dd>
          </dl>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="talentsyabout__tags" data-hidewrap="tags">
        <a href="#" class="talentsyabout__tag">Цена дистанционного обучения <br>на курсе сексологии</a>
        <a href="#" class="talentsyabout__tag">Сексология в психологическом<br> консультировании</a>
        <a href="" class="talentsyabout__tag">Сексология <br>и сексопатология</a>
        <a href="" class="talentsyabout__tag">Курсы повышения<br> квалификации</a>

        <div data-hidebox="tags" class="talentsyabout__more">
          <a href="" class="talentsyabout__tag">Основы сексологии</a>
          <a href="" class="talentsyabout__tag">Дистанционные курсы сексологии <br>и психологии</a>
          <a href="" class="talentsyabout__tag">Психотерапия сексуальных расстройств</a>
          <a href="" class="talentsyabout__tag">Программа повышения <br>квалификации</a>
          <a href="" class="talentsyabout__tag">Пройти курс сексологии <br>и психологии</a>
          <a href="" class="talentsyabout__tag">Курс психологии</a>
          <a href="" class="talentsyabout__tag">Повышение квалификации</a>

          <a href="" class="talentsyabout__tag">Профессиональная переподготовка</a>
          <a href="" class="talentsyabout__tag">Обучение сексологии</a>
          <a href="" class="talentsyabout__tag">Программы обучения</a>
        </div>
      </div>
      <div class="talentsyabout__action">
        <button data-hideopen="tags"><span>Показать еще</span><i>Cкрыть</i></button>
      </div>
    </div>
  </section><!-- //talentsyabout -->





  <?php include('../templates/footer.php'); ?>
  <?php include('../templates/end.php'); ?>


</body>

</html>
