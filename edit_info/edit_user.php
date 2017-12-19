<?php
  include("../chck_sssn.php");
?>

    <!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
</head>
</html>
<?php
  include ("../db.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь
  // проверка на существование пользователя с таким же логином

  $_zapros = mysql_query("SELECT * FROM info_users WHERE id='$s_id'",$db);
  $myrow = mysql_fetch_array($_zapros);


  if (isset($_POST['name'])) {
    $p_name = $_POST['name'];
	if ($p_name == '') {
	  unset($p_name);
	} 
  } //заносим введенный пользователем логин в переменную $p_name, если он пустой, то уничтожаем переменную

  if (isset($_POST['surn'])) {
    $p_surn=$_POST['surn'];
	if ($p_surn =='') {
	  unset($p_surn);
	} 
  } //заносим введенный пользователем пароль в переменную $p_surn, если он пустой, то уничтожаем переменную

  if (isset($_POST['birth'])) {
    $p_date=$_POST['date'];
	if ($p_date =='') {
	  unset($p_date);
	}
  }

  //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
  $p_name = stripslashes($p_name);
  $p_name = htmlspecialchars($p_name);
  $p_surn = stripslashes($p_surn);
  $p_surn = htmlspecialchars($p_surn);
  $p_date = stripslashes($p_date);
  $p_date = htmlspecialchars($p_date);
  //удаляем лишние пробелы
  $p_name = trim($p_name);
  $p_surn = trim($p_surn);
  $p_date = trim($p_date);

  if ( ($p_name !== $myrow['name']) and (isset($p_name)) )
  {
      $result2 = mysql_query ("UPDATE info_users SET name='$p_name' where id='$s_id'");
      if ($result2=='TRUE')
      {
          echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='localhost'>Главная страница</a>";
      }
      else {
          echo "Ошибка! Вы не зарегистрированы.";
      }
  }

if ( ($p_surn !== $myrow['surn']) and (isset($p_surn)) )
{
    $result2 = mysql_query ("UPDATE info_users SET surn='$p_surn' where id='$s_id'");
    if ($result2=='TRUE')
    {
        echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='localhost'>Главная страница</a>";
    }
    else {
        echo "Ошибка! Вы не зарегистрированы.";
    }
}

if ( ($p_date !== $myrow['birth']) and (isset($p_date)) )
{
    $result2 = mysql_query ("UPDATE info_users SET birth='$p_date' where id='$s_id'");
    if ($result2=='TRUE')
    {
        echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='localhost'>Главная страница</a>";
    }
    else {
        echo "Ошибка! Вы не зарегистрированы.";
    }
}
?>