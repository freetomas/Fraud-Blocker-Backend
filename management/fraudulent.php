<?php

include './checkLogin.php';
include '../api/include/sqlConnect.php';
include '../api/include/functions.php';
include './functions.php';

if(!isset($_POST["i"]))
  die();

fraudulent($conn, $_POST["i"],$reportTable,$blackListTable);
echo 'ok';
?>
