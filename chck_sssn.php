<?php
  session_start();
  // Проверяем, пусты ли переменные логина и id пользователя
  if (empty($_SESSION['login']) or empty($_SESSION['id']))
  {
    $auth_usr = false;  //не авторизован
  }
  else {
    $auth_usr = true;
    $login = $_SESSION['login'];
  }
?>