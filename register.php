<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authorization</title>
    <style>
        *{
            padding: 4px;
            margin: 4px;
        }
        .msg{
            border: 2px solid #a68e01;
            background: #f69b28;
            width: 9.5em;
        }
    </style>
</head>
<body>
<form action="vendor/signup.php" method="post" enctype="multipart/form-data">
    <label for="">ФИО</label><br>
    <input type="text" name="fill_name" placeholder="введите имя"><br>
    <label for="">Логин</label><br>
    <input type="text" name="login" placeholder="введите логин"><br>
    <label for="">Почта</label><br>
    <input type="email" name="email" placeholder="введите почту"><br>
    <label for="">Аватар</label><br>
    <input type="file" name="img"><br>
    <label for="">Пароль</label><br>
    <input type="password" name="password" placeholder="введите пароль"><br>
    <label for="">Подтверждение пароля</label><br>
    <input type="password" name="password_confirm" placeholder="подтвердите пароль"><br>
    <button>Зарегистрироваться</button><br>
    <a href="#"></a>
    <p>
        У уже есть акк? - <a href="index.php">авторизируйтесь</a>!
    </p>
    <p class="msg" >
        Пароли не совподают
    </p>
</form>
</body>
</html>