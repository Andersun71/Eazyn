<?php 
include 'config/connect.php';
  $username = $_POST['username'];
  $password = $_POST['password'];
  $kuery = "SELECT * FROM siswa WHERE username = '$username' AND password = '$password'";
  $result = $is_connect->query($kuery);
  
  if ($result->num_rows > 0) {
      session_start();
      $_SESSION['username'] = $username;
      header('Location: index.php');
  } else {
      echo 'login gagal';
  }
?>