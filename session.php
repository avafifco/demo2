<?php
session_start();

if($_POST['for'] == 'session'){
  $_SESSION['login'] = 1;
  echo json_encode('success');
}
?>
