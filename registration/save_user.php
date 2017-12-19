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
  include ("../db.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь
  // проверка на существование пользователя с таким же логином
  $result = mysql_query("SELECT email FROM users WHERE login='$login'",$db);
  $myrow = mysql_fetch_array($result);
  if (!empty($myrow['email'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
  }
  // если такого нет, то сохраняем данные
  $result2 = mysql_query ("INSERT INTO users (login,pass,email) VALUES('$login','$password','$email')");
  // Проверяем, есть ли ошибки
  if ($result2=='TRUE')
  {
    $result3 = mysql_query ("SELECT * FROM users WHERE login='$login'");
    $myrow = mysql_fetch_array($result3);
    $_id = $myrow['id'];
    $result3 = mysql_query ("INSERT INTO info_users (id) VALUES('$_id')");
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='localhost'>Главная страница</a>";
  }
  else {
    echo "Ошибка! Вы не зарегистрированы.";
  }
?>