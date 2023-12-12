<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['name'])) 
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="setting.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  <title>Настройки</title>
</head>
<body>
  <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="../index_file/img/1.jpg">
            <span class="font-weight-bold"><?php echo $_SESSION['name']; ?></h1></span><span class="text-black-50">
            <?php echo $_SESSION['user_name']; ?>
            </span><span> </span>
        </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Настройки профиля</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Имя</label><input type="text" class="form-control" placeholder="Имя" value=""></div>
                    <div class="col-md-6"><label class="labels">Фамилия</label><input type="text" class="form-control" value="" placeholder="Фамилия"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Телефон</label><input type="text" class="form-control" placeholder="введите ваш номер" value=""></div>
                    <div class="col-md-12"><label class="labels">обрзаование</label><input type="text" class="form-control" placeholder=" введите ваше обрзаование" value=""></div>
                </div>
                <div class="row mt-3">
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Сохранить</button></div>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>
<?php 
}else{
     header("Location: ");
     exit();
}
 ?>