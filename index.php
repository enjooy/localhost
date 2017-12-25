<?
  include_once('chck_sssn.php');
?>
<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
	<link href="style.css" rel="stylesheet">
	<title>Сообщество компьютеров и людей</title>
</head>
<body>
  <?php
    include_once('header.php');
  ?>
  <header>
  </header>
  <main>
    <article>
      <h2>Заголовок статьи</h2>
      <p>В содержании сайта, может быть текст, фото, видео, аудио ...</p>
      <section>
        <h3>Заголовок</h3>
        <p>здесь могут быть похожие записи, слайдер, баннеры, миниатюры и т.д...</p>
      </section>
    </article>
    <aside>
      <h3>Боковая колонка</h3>
      <p>боковая колонка для всего остального</p>
      <h4>Моё</h4>
	    <menu>
          <li><a>Мой компьютер</a></li>
          <li><a>Смотреть видео</a></li>
          <li><a>Слушать музыку</a></li>
		</menu>
    </aside>
  </main>
  <?php
    include_once('footer.php');
  ?>
</body>
</html>