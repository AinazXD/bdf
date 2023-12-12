<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Пользователи</title>
    <meta name="description" content="админка">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Стили -->
    
    <link rel="stylesheet" href="css/profil.css">

    <!-- Font Awesome иконки -->
    <script src="https://kit.fontawesome.com/4a23243fb41.js" crossorigin="anonymous"></script>

    <!-- jQuery и скрипты -->
    <script src="js/vendor/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/stats_user.css">
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
          <div class="table-users">
            <div class="header">Пользователи</div>

            <table cellspacing="0">
               <tr>
                  <th>Picture</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th width="230">Comments</th>
               </tr>
         
               <tr>
                  <td><img src="/img/1.png" alt="" /></td>
                  <td>Jane Doe</td>
                  <td>jane.doe@foo.com</td>
                  <td>791545332</td>
                  <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </td>
               </tr>
         
               <tr>
                  <td><img src="/img/2.png" alt="" /></td>
                  <td>John Doe</td>
                  <td>john.doe@foo.com</td>
                  <td>791354332</td>
                  <td>Blanditiis, aliquid numquam iure voluptatibus ut maiores explicabo ducimus neque, nesciunt rerum perferendis, inventore.</td>
               </tr>
         
               <tr>
                  <td><img src="img/1.png" alt="" /></td>
                  <td>Jane Smith</td>
                  <td>jane.smith@foo.com</td>
                  <td>791354533</td>
                  <td> Culpa praesentium unde pariatur fugit eos recusandae voluptas.</td>
               </tr>
               
               <tr>
                  <td><img src="img/2.png" alt="" /></td>
                  <td>John Smith</td>
                  <td>john.smith@foo.com</td>
                  <td>791354532</td>
                  <td>Aut voluptatum accusantium, eveniet, sapiente quaerat adipisci consequatur maxime temporibus quas, dolorem impedit.</td>
               </tr>
            </table>
         </div>
        </main>
</html>