<?php
  include_once ("../chck_sssn.php");
?>
<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
	<link href="auth_style.css" rel="stylesheet">
	<title>Сообщество компьютеров и людей</title>
</head>
<body>
  <?php
    include_once('../header.php');
  ?>
  <header>
  </header>

  <main>
    <article>
      <section>
        <h3>Авторизация пользователя</h3>
        <form action="auth_user.php" method='post' class='reg-form'>
		  <div class='form-row'>
			<label for='form_email'>Почта: </label>
    		<input type='email' id='form_email' name='email'>
  		  </div>
          <div class='form-row'>
			<label for='form_pass'>Пароль: </label>
			<input type='password' id='form_pass' name='pass'>
		  </div>
		  <div class="form-row">
			<input type="submit" value='Войти'>
		  </div>
	    </form>
      </section>
    </article>
    <aside>
      <h3>Боковая колонка</h3>
      <p>боковая колонка для всего остального</p>
      <h4>Моё</h4>
      <menu>
        <li><a href="#">Мой компьютер</a></li>
        <li><a href="#">Смотреть видео</a></li>
        <li><a href="#">Слушать музыку</a></li>
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
    echo "Вы вошли на сайт, как ".$_SESSION['email']."<br><a  href='http://tvpavlovsk.sk6.ru/'>Эта ссылка доступна только  зарегистрированным пользователям</a>";
  }
  ?>
  <footer>
    <p>
      <small>
        <time>2017-12-11</time> © <a>Bezvorotniy</a>
      </small>
    </p>
  </footer>
</body>
</html>
<?php

?>