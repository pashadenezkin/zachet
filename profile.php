<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

    <!-- Профиль -->

<form>
    <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
    <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
    <a href="#"><?= $_SESSION['user']['email'] ?></a>
    <a href="vendor/logout.php" class="logout">Выход</a>
</form>




<br><br>




<div class="container">

    <p class="text-center"><h1>Корзина с товарами:</h1></p>


<div class="card" style="width: 18rem; display: inline-block;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Товар</h5>
    <p class="card-text">Текст товара</p>
    <a href="#" class="btn btn-primary">1000 Рублей</a>
  </div>
</div>

<div class="card" style="width: 18rem; display: inline-block;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Товар</h5>
    <p class="card-text">Текст товара</p>
    <a href="#" class="btn btn-primary">1000 Рублей</a>
  </div>
</div>

<div class="card" style="width: 18rem; display: inline-block;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Товар</h5>
    <p class="card-text">Текст товара</p>
    <a href="#" class="btn btn-primary">1000 Рублей</a>
  </div>
</div>

<div class="card" style="width: 18rem; display: inline-block;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Товар</h5>
    <p class="card-text">Текст товара</p>
    <a href="#" class="btn btn-primary">1000 Рублей</a>
  </div>
</div>

<div class="card" style="width: 18rem; display: inline-block;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Товар</h5>
    <p class="card-text">Текст товара</p>
    <a href="#" class="btn btn-primary">1000 Рублей</a>
  </div>
</div>

<div class="card" style="width: 18rem; display: inline-block;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Товар</h5>
    <p class="card-text">Текст товара</p>
    <a href="#" class="btn btn-primary">1000 Рублей</a>
  </div>
</div>

<div class="card" style="width: 18rem; display: inline-block;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Товар</h5>
    <p class="card-text">Текст товара</p>
    <a href="#" class="btn btn-primary">1000 Рублей</a>
  </div>
</div>

</div>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</body>
</html>