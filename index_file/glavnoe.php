<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FutureTech</title>
  <link rel="stylesheet" href="/index_file/css/normalize.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="icon" href="/index_file/img/favicon.png">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <header class="header">
    <nav class="nav_menu">

      <div class="logo"><img src="./img/Logo.svg" alt="">
        <a class="a_logo">+8 777 555 66 99</a>
        <a class="a_logo">Москва, Бульвар Ленина 33</a>
      </div>

    </nav>

    <div class="burger">
      <div class="menu-btn">
        <span></span>
        <span></span>
        <span></span>
      </div>

    </div>


    <div class="menu">
      <nav>
        <ul class="burg_ul">
          <li><a href="#"><img src="./img/Logo.svg" alt=""></a></li>
          <li><a href="#main">Главная</a></li>
          <li><a href="#blog">О нас</a></li>
          <li><a href="../log_file/login.html">Сообщения</a></li>
          <li><a href="#footer">Контакты</a></li>
        </ul>
      </nav>
    </div>
    <script src="./js/main.js"></script>


  </header>

  <!-- линия разрыва header и main -->
  <div class="line"></div>
  <!-- главная страница -->
  <div class="main" id="main">
    <h1 style="font-size: 30px; font-weight: bold;">Вместе мы создаем цифровое <br>пространство, где каждый может
      <br>найти свое место!</h1>
    <div class="center">
      <div class="btn">
        <a href="../log_file/login.php">АВТОРИЗАЦИЯ</a>
      </div>
    </div>
    <div class="right">
      <div class="btn2"><img src="./img/Vector 1.svg" alt="#"></div>
    </div>

    <div class="social">

    </div>
  </div>
  <hr>
  <!-- БЛОГ ПРО НАС -->
  <div class="blog container" id="blog">
    <h2 style="font-size: 30px; font-weight: bold;">О нас</h2>
    <div class="info ">
      <img src="./img/image 1.png" alt="">
      <p class="info_p">"Мы - сообщество единомышленников,
        которые стремятся создать уютное и
        дружелюбное цифровое пространство для
        всех.
        Здесь каждый может найти свое место,
        поделиться своими идеями, обсудить
        интересные темы и просто пообщаться с
        единомышленниками. Мы открыты для всех
        и готовы приветствовать новых участников
        в нашей дружной семье. Присоединяйтесь к
        нам и помогите создать уникальное сообщество, где каждый чувствует себя как
        дома!"</p>
    </div>

  </div>
  
  <div class="slider-body">

    <div class="flex-wrapper">
      <div class="slider-wrapper">
        <div class="slide active">
          <img class="slider_img" src="./img/6.png" alt="">
        </div>
        <div class="slide">
          <img class="slider_img" src="./img/5.jpg" alt="">
        </div>
        <div class="slide">
          <img class="slider_img" src="./img/7.jpg" alt="">
        </div>
        <div class="slide">
          <img class="slider_img" src="./img/4.jpg" alt="">
        </div>
        <div id="btn-prev"></div>
        <div id="btn-next"></div>
      </div>
    </div>
    <div class="dots-wrapper">
      <span class="dot active slider_span "></span>
      <span class="dot slider_span "></span>
      <span class="dot slider_span "></span>
      <span class="dot slider_span "></span>
    </div>
  </div>
  <script src="./js/script.js"></script>
  <hr>

  <div class="line"></div>
  <!-- card -->
  <section class="text-gray-600 body-font">
    <h2 class="h2_secty">Разработчики сайта</h1>
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -m-4">
          <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
            <div class="h-full text-center">
              <img alt="testimonial"
                class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100"
                src="./img/3.jpg">
              <p class="leading-relaxed">Программист отвечает за техническое руководство и наставничество для команды
                разработчиков программного обеспечения</p>
              <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
              <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Селиверстова Людмила Петровна
              </h2>
              <p class="text-gray-500">Веду́щий программи́ст</p>
            </div>
          </div>
          <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
            <div class="h-full text-center">
              <img alt="testimonial"
                class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100"
                src="./img/2.jpg">
              <p class="leading-relaxed"> Специалист, который проектирует и рисует интерфейсы цифровых продуктов:
                мобильных и веб-приложений, сайтов. Такой дизайнер может участвовать как в создании новых продуктов</p>
              <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
              <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Желтяков Павел Александрович</h2>
              <p class="text-gray-500">Разработчик пользовательского интерфейса</p>
            </div>
          </div>
          <div class="lg:w-1/3 lg:mb-0 p-4">
            <div class="h-full text-center">
              <img alt="testimonial"
                class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100"
                src="./img/1.jpg">
              <p class="leading-relaxed">Сотрудник компании, который занимается поддержкой компьютерного оборудования,
                следит за бесперебойной работой техники</p>
              <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
              <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Нургабылов Данияр Кабиевич</h2>
              <p class="text-gray-500">Системный админстратор</p>
            </div>
          </div>
        </div>
      </div>

  </section>
  <!-- end -->
  <hr>
  <footer class="text-gray-600 body-font" id="footer">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap md:text-left text-center order-first">
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Контактная информация</h2>
          <nav class="list-none mb-10">
            <ul>
              <li>
                <a class="text-gray-600 hover:text-gray-800">test@test.ru</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">+8 777 555 66 99</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">Москва, Бульвар Ленина 33</a>
              </li>
            </ul>

          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Социальные сети</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">VK.com</a>
            </li>

            <li>
              <a class="text-gray-600 hover:text-gray-800">Facebook</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Twitter</a>
            </li>
          </nav>
        </div>
      </div>

      <div class="bg-gray-100">
        <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            logo
            <span class="ml-3 text-xl">АПТ</span>
          </a>
          <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2023 Султанов Айназ —
            <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1"
              target="_blank">@aynazsultanov</a>
          </p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                viewBox="0 0 24 24">
                <path
                  d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                </path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                <path stroke="none"
                  d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                <circle cx="4" cy="4" r="2" stroke="none"></circle>
              </svg>
            </a>
          </span>
        </div>
      </div>
  </footer>
</body>

</html>