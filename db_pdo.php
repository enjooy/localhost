<?php
  $opt = array (
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
  );
  $dbh = new PDO('mysql:host=127.0.0.1;dbname=mysql', 'root', '', $opt);

  $data_row = array(
    "email" => '',
    "nick" => '',
    "name" => '',
    "surn" => '',
    "date" => ''
  );

  function getAllData(){
    global $data_row, $dbh, $s_id;
    $stmt = $dbh->prepare('SELECT * FROM users INNER JOIN info_users ON users.id = info_users.id where users.id=:id');
    $stmt->execute(array($s_id));
    $row = $stmt->fetch();
      $data_row = array(
          "email" => $row['email'],
          "nick" => $row['login'],
          "name" => $row['name'],
          "surn" => $row['surn'],
          "date" => $row['date'],
      );
  }
?>