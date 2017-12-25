<?php
  include("../chck_sssn.php");
?>
<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
	<link href="profile_style.css" rel="stylesheet">
	<title>Сообщество компьютеров и людей</title>
</head>
<?php
  include_once('../header.php');
?>
<body>
  <header>
  </header>

<main>
  <article>
    <section>
      <h3>Профиль пользователя</h3>
      <a href="../edit_info/edit_info.php"><h4>Редактировать профиль</h4></a>
      <div class="form-profile">
          <img src="../img/profile.png" height="180" width="180">
          <a>
              <?php
                echo $_SESSION['login'];
              ?>
          </a>
          <a>
            <?php
              echo $_SESSION['name']." ".$_SESSION['surn'];
            ?>
          </a>
      </div>
    </section>
  </article>
  <aside>
    <h3>Боковая колонка</h3>
      <p>боковая колонка для всего остального</p>
        <h4>Моё</h4>
        <menu>
          <li><a href="#">Мой компьютер</a></li>
          <li><a href="#">Альбом</a></li>
          <li><a href="#">Обмен</a></li>
		</menu>
  </aside>
</main>
<?php
// Проверяем, пусты ли переменные логина и id пользователя
if (!$auth_usr)
{
    // Если пусты, то мы не выводим ссылку
    echo "Вы вошли на сайт, как гость<br>";
}
else
{
    // Если не пусты, то мы выводим ссылку
    echo "Вы вошли на сайт";
}
?>

<?php
  include_once('../footer.php');
?>

</body>
</html>
<?php

?>