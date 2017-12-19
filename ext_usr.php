<?
  session_start();
  unset($_SESSION['id']);
  unset($_SESSION['login']);

  include_once ("chck_sssn.php");
  header("Location: index.php");
  exit();
?>