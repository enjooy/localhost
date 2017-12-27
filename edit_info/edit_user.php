<?php
  include("../chck_sssn.php");
?>

<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
</head>
</html>
<?php
  include ("../db_pdo.php");
  // проверка на существование пользователя с таким же логином

  $stmt = $dbh->prepare('SELECT * FROM info_users WHERE id=:id');
  $stmt->execute(array($s_id));
  $row = $stmt->fetch();

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

  if (isset($_POST['date'])) {
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

  if ( ($p_name !== $row['name']) and (isset($p_name)) )
  {
    $stmt = $dbh->prepare('UPDATE info_users SET name=:name where id=:id');
    $stmt->execute(array($p_name, $s_id));
    $row = $stmt->fetch();
  }

  if ( ($p_surn !== $row['surn']) and (isset($p_surn)) )
  {
    $stmt = $dbh->prepare('UPDATE info_users SET surn=:surn where id=:id');
    $stmt->execute(array($p_surn, $s_id));
    $row = $stmt->fetch();
  }

  if ( ($p_date !== $row['birth']) and (isset($p_date)) )
  {
    $stmt = $dbh->prepare('UPDATE info_users SET birth=:birth where id=:id');
    $stmt->execute(array($p_date, $s_id));
    $row = $stmt->fetch();
  }

  $stmt = $dbh->prepare('SELECT * FROM info_users WHERE id=:id');
  $stmt->execute(array($s_id));
  $row = $stmt->fetch();

  $_SESSION['name']=$row['name'];
  $_SESSION['surn']=$row['surn'];
  $_SESSION['date']=$row['birth'];
  echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='localhost'>Главная страница</a>";
?>