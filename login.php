<?php
session_start();
if ($_POST) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  // TODO: Add login authentication logic here
  if ($email == 'test@example.com' && $password == 'password') {
    $_SESSION['email'] = $email;
    echo 'success';
  } else {
    echo 'failure';
  }
}
?>
