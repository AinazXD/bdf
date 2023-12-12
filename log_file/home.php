<?php
session_start();

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>
   <link rel="stylesheet" href="profil.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="js/burger.js"></script>
    <!-- custom css file link  -->
  

</head>
<body>
<body>
    <header class="header">
      <nav class="nav_menu">


        <div class="logo">
          <div class="logo"><img src="/index_file/img/Logo.svg" alt="">
            <a class="a_logo">+8 777 555 66 99</a>
            <a class="a_logo">Москва, Бульвар Ленина 33</a>
          </div>
          <img src="./assets/img/Logo.svg" alt="">
        </div>
        <div class="circle">
          <div class="dropdown">
            <img src="./icons8-пользователь-без-половых-признаков-50.png" alt="">
            <button>Профиль</button>
            <div class="dropdown-options">
              <a href="update_profile.php">Настройки</a>
              <a href="logout.php">Выйти</a>
            </div>
          </div>
        </div>
        <div class="btn_x">
          <div class="menu-btn">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
       
        <div class="menu">
          <nav>
            <ul class="burg_ul">
              <li><a href="#"><img src="Logo.svg" alt=""></a></li>
              <li><a href="#center">Главная</a></li>
              <li><a href="#footer">Контакты</a></li>
            </ul>
          </nav>
        </div>

      </nav>
    </header>
    <script src="main.js"></script>
    <!-- линия разрыва header и main -->
    <div class="line"></div>
    <!-- главная страница -->
    <div class="main">
      <h1 style="font-size: 30px; font-weight: bold;">
      <?php
      echo '<ul class="nav" action="Login.html" method="post">

                <li class="loginbtn">
                <h1>Добро пожаловать</h1>
                <a href="#">'.$_SESSION['name'].'</a></li>
      </ul>'?></h1>
      
        <div class="center" id="center">
          <div  class="btn">
            <a href="../chat/home.php">Начать чат</a>
          </div>
        </div>
        <div class="social">
        </div>
    </div>
    <hr>
    <div class="line"></div>
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