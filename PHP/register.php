<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/main2.css">
    <link rel="stylesheet" href="../CSS/register.css">
    <title>Школьный портал</title>
</head>
<body>
    <form class="form" action="check.php" method="post" enctype="">

        <h1 class="form_title">Регистрация</h1>
      
        <div class="form_grup">
            
            <label class="form_label"></label>
            <input class="form_input" placeholder=" ФИО " required="" type="text" name="name">
          </div>
          <div class="form_grup">
            <label class="form_label"></label>
            <input class="form_input" placeholder=" Логин " required="" type="login" name="login">
          </div>
          <div class="form_grup">
            <label class="form_label"></label>
            <input class="form_input" placeholder=" Email " required="" type="email" name="email">
          </div>
          <div class="form_grup">
            <label class="form_label"></label>
            <input class="form_input" placeholder=" Пароль " required="" type="password" name="password">
          </div>
          <!--<div class="form_grup">
            <label class="form_label"></label>
            <input class="form_input" placeholder=" Повторите пароль " required="" type="password" name="password_povtor">
          </div>-->
          <div class="form_grup">
          <p><input type="checkbox" name="a" required="" value="1680" > Согласие на обработку персональный данных</p>
        </div>
          <button class="form_button" type="submit">Войти</button>
          <a href="../index.php" class="form_button" > Авторизоваться</a>
            </form>

      <body>





    

<script src="JS/app.js"></script>

</body>
</html>