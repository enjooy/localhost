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
              <label>Email: </label>
              <?php include_once('../db_pdo.php');
                getAllData();
                echo "<input type='email' id='form_email' name='email' value='".$data_row['email']."'>";
              ?>
          </div>
          <div class='form-row'>
              <label>Никнейм: </label>
              <?php include_once('../db_pdo.php');
                getAllData();
                echo "<input type='text' id='form_nick' name='nick' value='".$data_row['nick']."'>";
              ?>
          </div>
          <div class='form-row'>
              <label>Пароль: </label>
          </div>
          <div class='form-row'>
              <label>Меня зовут: </label>
              <?php include_once('../db_pdo.php');
                getAllData();
                echo "<input type='text' id='form_name' name='name' value='".$data_row['name']."'>";
              ?>
          </div>
          <div class='form-row'>
              <label>Моя фамилия: </label>
              <?php include_once('../db_pdo.php');
                getAllData();
                echo "<input type='text' id='form_surn' name='surn' value='".$data_row['surn']."'>";
              ?>
          </div>
          <div class='form-row'>
              <label>В детстве я: </label>
              <p>
                <input type='radio' name='check1' value="m">
                <input type='radio' name='check1' value="j">
              </p>
          </div>
          <div class='form-row'>
              <label>Дата рождения:</label>
              <?php include_once('../db_pdo.php');
                getAllData();
                echo "<input type='date' id='form_date' name='date' value='".$data_row['date']."'>";
              ?>
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