<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
</head>
</html>
<?php
  if (isset($_POST['login'])) { 
    $login = $_POST['login']; 
	if ($login == '') { 
	  unset($login);
	} 
  } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
  if (isset($_POST['pass'])) {
    $password=$_POST['pass']; 
	if ($password =='') { 
	  unset($password);
	} 
  }
  //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
  if (isset($_POST['email'])) {
    $email=$_POST['email']; 
	if ($email =='') { 
	  unset($email);
	} 
  }
  //заносим введенный пользователем email в переменную $password, если он пустой, то уничтожаем переменную
  if (empty($login) or empty($password) or empty($email)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
  {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
  }

  //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
  $login = stripslashes($login);
  $login = htmlspecialchars($login);
  $password = stripslashes($password);
  $password = htmlspecialchars($password);
  $email = stripslashes($email);
  $email = htmlspecialchars($email);
  //удаляем лишние пробелы
  $login = trim($login);
  $password = trim($password);
  $email = trim($email);
  // подключаемся к базе
  include ("../db_pdo.php");
  // файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь
  // проверка на существование пользователя с таким же логином
  $stmt = $dbh->prepare('SELECT * FROM users WHERE login=:login');
  $stmt->execute(array($login));
  $row = $stmt->fetch();

  if (!empty($row['email'])) {
    echo "Такой уже есть!. <a href='localhost'>Главная страница</a>";
  }
  /*while ($row = $stmt->fetch())
  {
    echo $row['email'] . "\n";
  }*/

  // Сохраняем данные
  $stmt = $dbh->prepare('INSERT INTO users (login,pass,email) VALUES(:login, :pass, :email)');
  $stmt->execute(array($login, sha1($password), $email));
  $_id = $dbh->lastInsertId();

  // Пустое поле для доп. информации
  $stmt = $dbh->prepare('INSERT INTO info_users (id) VALUES(:id)');
  $stmt->execute(array($_id));
?>