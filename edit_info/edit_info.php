<?php
  include("../chck_sssn.php");
?>
    <!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
	<link href="edit_info_style.css" rel="stylesheet">
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
      <h3>Редактирование дополнительной информации</h3>
      <form action="edit_user.php" method='post' class='edit-form'>
		  <div class='form-row'>
              <label for='form_login'>Имя: </label>
              <input type='text' id='form_name' name='name'>
          </div>
          <div class='form-row'>
              <label for='form_login'>Фамилия: </label>
              <input type='text' id='form_surn' name='surn'>
          </div>
          <div class='form-row'>
              <label for='form_login'>Дата рождения:</label>
              <input type='date' id='form_date' name='date'>
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