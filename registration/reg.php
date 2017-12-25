<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
	<link href="reg_style.css" rel="stylesheet">
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
      <h3>Регистрация</h3>
      <form action="save_user.php" method='post' class='reg-form'>
		<div class='form-row'>
			<label for='form_email'>Почта: </label>
    		<input type='email' id='form_email' name='email'>
  		</div>

  		<div class='form-row'>
    		<label for='form_login'>Логин: </label>
    		<input type='text' id='form_login' name='login'>
		</div>

		<div class='form-row'>
			<label for='form_pass'>Пароль: </label>
			<input type='password' id='form_pass' name='pass'>
		</div>

        <div class='form-row'>
          <label for='form_ava'>Аватарка: </label>
          <input type="file" name="ava">
        </div>

        <div class="form-row">
			<input type="submit" value='Go'>
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
  include_once('../footer.php');
?>

</body>
</html>
<?php

?>