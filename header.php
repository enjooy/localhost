<div class="headerstat">
    <a href="../index.php"><img src="../img/st.png" height="50" width="50"></a>
    <h1> Сообщество компьютеров и людей </h1>
    <?php
      // Проверяем, авторизован ли пользователь
      if (!$auth_usr)
      {
        ?>
        <a href="..\registration\reg.php" class="knopka">Зарегистрироваться</a>
        <a> или войти:</a>
        <a href="..\authorization\auth.php" class="knopka2">Почта</a>
        <?php
      }
      else
      {
        ?>
        <a href="../ext_usr.php" class="knopka">Выход</a>
        <a href="../profile/profile.php"><img src="../img/profile.png" class="profile" height="50" width="50"></a>
        <?php
      }
    ?>
</div>
<div class="pusto">

</div>
<style>
    .headerstat
    {
        position:fixed;
        top:0;
        width: 100%;
        z-index:1000;
        background-color: #373737;
        color: white;
        font: 12pt sans-serif;
    }
    .pusto
    {
        height:86px;
    }

    .headerstat a,
    .headerstat img,
    .headerstat h1{
        display: inline;
        vertical-align:middle;
    }

    .headerstat img {
        margin: 5px;
    }

    .headerstat .profile {
        float:right;
    }
    a.knopka {
        color: #fff; /* цвет текста */
        text-decoration: none; /* убирать подчёркивание у ссылок */
        user-select: none; /* убирать выделение текста */
        background: rgb(212,75,56); /* фон кнопки */
        padding: .7em 1.5em; /* отступ от текста */
        outline: none; /* убирать контур в Mozilla */
    }
    a.knopka:hover { background: rgb(232,95,76); } /* при наведении курсора мышки */
    a.knopka:active { background: rgb(152,15,0); } /* при нажатии */

    a.knopka2 {
        color: #fff; /* цвет текста */
        text-decoration: none; /* убирать подчёркивание у ссылок */
        user-select: none; /* убирать выделение текста */
        background: rgb(96,75,56); /* фон кнопки */
        padding: .7em 1.5em; /* отступ от текста */
        outline: none; /* убирать контур в Mozilla */
    }
    a.knopka2:hover { background: rgb(76,75,56); } /* при наведении курсора мышки */
    a.knopka2:active { background: rgb(59,75,56); } /* при нажатии */
</style>