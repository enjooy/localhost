<?php
  $opt = array (
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
  );
  $dbh = new PDO('mysql:host=127.0.0.1;dbname=mysql', 'root', '', $opt);
?>