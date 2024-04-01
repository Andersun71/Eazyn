<?php
  include 'config/connect.php';

  // Check if username and password are received via POST
      $username = $_POST['username'];
      $password = $_POST['password'];

      // Your existing login logic
      $query = "SELECT * FROM siswa WHERE username = '$username' AND passwd = '$password'";
      $result = mysqli_query($is_connect, $query);
      $data = mysqli_fetch_assoc($result);
      if (mysqli_num_rows($result) > 0) {
          session_start();
          $_SESSION['id'] = $data['id'];
          $_SESSION['username'] = $username;

          header('Location: index.php');
      } else {
          echo 'login gagal'; // Or a more informative message
      }
?>
