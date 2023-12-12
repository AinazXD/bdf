<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Статистака активности</title>
    <meta name="description" content="админка">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Стили -->
    <link rel="stylesheet" href="css/set.css">
    <link rel="stylesheet" href="css/profil.css">

    <!-- Font Awesome иконки -->
    <script src="https://kit.fontawesome.com/4a23243fb41.js" crossorigin="anonymous"></script>

    <!-- jQuery и скрипты -->
    <script src="js/vendor/jquery-3.4.1.min.js"></script>
    
    <script src="js/prof.js"></script>

</head>
<body>

    <!-- Главный контейнер -->
    <div class="container">

        <!-- Заголовок -->
        <header class="dashboard-header">
            <h1 class="dashboard-header__logo">Админка</h1>
        </header>

        <!-- Левое меню -->
        <nav class="sidebar-menu">
            <ul class="sidebar-menu__items">
                <li class="sidebar-menu__item">
                    <a href="admin.php" class="sidebar-menu__item-title">
                        <span>Общие</span>
                        <i class="fas fa-caret-down"></i>
                    </a>
                    <ul class="sidebar-menu__subitems">
                        <li class="sidebar-menu__subitem">
                            <a href="section.php">
                                <i class="fas fa-list-ul"></i>
                                <span>Модераторы</span>
                            </a>
                        </li>
                  
                        <li class="sidebar-menu__subitem">
                            <a href="user_stats.php">
                                <i class="fas fa-user"></i>
                                <span>Пользователи</span>
                            </a>
                        </li>
                      
                    </ul>
                </li>
                <li class="sidebar-menu__item">
                    <a href="#" class="sidebar-menu__item-title">
                        <span>Настройки</span>
                        <i class="fas fa-caret-down"></i>
                    </a>
                    <ul class="sidebar-menu__subitems">
                        <li class="sidebar-menu__subitem">
                            <a href="setting_user.php">
                                <i class="fas fa-user-friends"></i>
                                <span>Пользователи</span>
                            </a>
                        </li>
                        <li class="sidebar-menu__subitem">
                            <a href="stat_all.php">
                                <i class="fas fa-info-circle"></i>
                                <span>Статистика</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Главный контент -->
        <main class="main-content center" style="background: #444e80;">
          <div class="year-stats">
            <div class="month-group">
              <div class="bar h-100"></div>
              <p class="month">янв</p>
            </div>
            <div class="month-group">
              <div class="bar h-50"></div>
              <p class="month">февр</p>
            </div>
            <div class="month-group">
              <div class="bar h-75"></div>
              <p class="month">март</p>
            </div>
            <div class="month-group">
              <div class="bar h-25"></div>
              <p class="month">апр</p>
            </div>
            <div class="month-group selected">
              <div class="bar h-100"></div>
              <p class="month">май</p>
            </div>
            <div class="month-group">
              <div class="bar h-50"></div>
              <p class="month">июнь</p>
            </div>
            <div class="month-group">
              <div class="bar h-75"></div>
              <p class="month">июль</p>
            </div>
            <div class="month-group">
              <div class="bar h-25"></div>
              <p class="month">авг</p>
            </div>
            <div class="month-group">
              <div class="bar h-50"></div>
              <p class="month">сент</p>
            </div>
            <div class="month-group">
              <div class="bar h-75"></div>
              <p class="month">окт</p>
            </div>
            <div class="month-group">
              <div class="bar h-25"></div>
              <p class="month">нояб</p>
            </div>
            <div class="month-group">
              <div class="bar h-100"></div>
              <p class="month">дек</p>
            </div>
          </div>
      
          <div class="stats-info">
            <div class="graph-container">
              <div class="percent">
                <svg viewBox="0 0 36 36" class="circular-chart">
                  <path class="circle" stroke-dasharray="100, 100" d="M18 2.0845
            a 15.9155 15.9155 0 0 1 0 31.831
            a 15.9155 15.9155 0 0 1 0 -31.831" />
                 
                  <path class="circle" stroke-dasharray="60, 100" d="M18 2.0845
            a 15.9155 15.9155 0 0 1 0 31.831
            a 15.9155 15.9155 0 0 1 0 -31.831" />
                  <path class="circle" stroke-dasharray="30, 100" d="M18 2.0845
            a 15.9155 15.9155 0 0 1 0 31.831
            a 15.9155 15.9155 0 0 1 0 -31.831" />
                </svg>
              </div>
            </div>
      
            <div class="info">
              <p style= "color:#e59f3c">Максимальная активность пользователй </p>
              <p style="color: #5397d6;">Минимальная активность пользователей </p>
              <p style="color:#915db1">Активность чатов <span></span></p>
            </div>
          </div>
          <h1 style="text-align: center;">Статистака активности </h1>

        </div>
        
        </main>
     
</body>
</html>