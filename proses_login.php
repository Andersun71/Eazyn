<?php
  include 'config/connect.php';
  
      $username = $_POST['username'];
      $password = $_POST['password'];

      // Your existing login logic
      $query = "SELECT * FROM siswa WHERE username = '$username' AND passwd = '$password'";
      
      $result = mysqli_query($is_connect, $query);
      
      $data = mysqli_fetch_assoc($result);
      if ($data != null) {
          session_start();
          $_SESSION['id'] = $data['id'];
          $_SESSION['username'] = $username;

          header('Location: index.php');
          $query2 = "UPDATE siswa SET last_login = now() WHERE id = " .$_SESSION['id'];
          $result2 = mysqli_query($is_connect, $query2);

      } else {
          echo 'login gagal'; // Or a more informative message
      }
?>
