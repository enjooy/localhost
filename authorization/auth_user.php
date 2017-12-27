<?php
  session_start();//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
  header('Content-Type: text/html; charset=utf-8');
  if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if ($email == '') {
      unset($email);
    }
  } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную

  if (isset($_POST['pass'])) {
    $pass=$_POST['pass'];
    if ($pass =='') {
      unset($pass);
    }
  } //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную

  if (empty($email) or empty($pass)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
  {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
  } //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
  $email = stripslashes($email);
  $email = htmlspecialchars($email);
  $pass = stripslashes($pass);
  $pass = htmlspecialchars($pass);
  //удаляем лишние пробелы
  $email = trim($email);
  $pass = trim($pass);

  // подключаемся к базе
  include ("../db_pdo.php");
  $stmt = $dbh->prepare('SELECT * FROM users WHERE email=:email');
  $stmt->execute(array($email));
  $row = $stmt->fetch();

  if (empty($row['pass']))
  {
    //если пользователя с введенным логином не существует
    exit ("Извините, введённый вами login или пароль неверный.");
  }
  else {
    //если существует, то сверяем пароли
    if ($row['pass']==sha1($pass)) {
        //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
        $_SESSION['login']=$row['login'];
        $_SESSION['id']=$row['id'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
        $_id = $row['id'];

        $stmt = $dbh->prepare('SELECT * FROM info_users WHERE id=:id');
        $stmt->execute(array($_id));
        $row = $stmt->fetch();

        $_SESSION['name']=$row['name'];
        $_SESSION['surn']=$row['surn'];
        $_SESSION['date']=$row['birth'];
        echo "Вы успешно вошли на сайт! <a href='localhost'>Главная страница</a>";
    }
    else {
        //если пароли не сошлись

        exit ("Извините, введённый вами login или пароль неверный.");
    }
}
?>