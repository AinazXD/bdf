<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Статистака</title>
    <meta name="description" content="админка">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Стили -->
    
    <link rel="stylesheet" href="css/profil.css">

    <!-- Font Awesome иконки -->
    <script src="https://kit.fontawesome.com/4a23243fb41.js" crossorigin="anonymous"></script>

    <!-- jQuery и скрипты -->
    <script src="js/vendor/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/stat_all.css">
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
        <main class="main-content" >
          <h2>Статистика пользователей и модераторов</h2>
<div class="center">
  <div class="card ">
    <div class="container" >
        <h4><b>Пользователи</b></h4>
        <p class="count">5</p>
    </div>
    </div>
    
    <div class="card">
    <div class="container">
        <h4><b>Модераторы</b></h4>
        <p class="count">2</p>
    </div> 
</div>

        </main>
     
</body>
</html>