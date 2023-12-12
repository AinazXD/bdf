<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Модераторы</title>
    <meta name="description" content="админка">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Стили -->
    
    <link rel="stylesheet" href="css/profil.css">
    <link rel="stylesheet" href="css/sect.css">

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
        <main class="main-content">
     
      <h1 style="text-align: center;">Список модераторов</h1>
      <center>
        <table id="myTable" border="1" >
            <tr>
              <th>Имя</th>
              <th>email</th>
              <th>Действия</th>
            </tr>
            <tr>
              <td>Иван</td>
              <td>WW@gmail.com</td>
              <td><button onclick="editRow(this)">Редактировать</button></td>
            </tr>
            <tr>
              <td>Мария</td>
              <td>mari@mail.com</td>
              <td><button onclick="editRow(this)">Редактировать</button></td>
            </tr>
          </table>
          
          <div class="center">
            <input type="text" id="nameInput" placeholder="Имя">
            <input type="text" id="ageInput" placeholder="email">
            <button onclick="addRow()">Добавить запись</button>
            <button onclick="saveToLocalStorage()">Сохранить</button>
          </div>
      </center>
     
    

          
        




<script src="js/table.js">

 
</script>

        </main>
     
</body>
</html>