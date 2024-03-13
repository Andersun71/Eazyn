<?php
  include 'config/connect.php';

  // Check if username and password are received via POST
  if (isset($_POST['username'], $_POST['password'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      // Your existing login logic
      $query = "SELECT * FROM siswa WHERE username = '$username' AND passwd = '$password'";
      $result = mysqli_query($is_connect, $query);

      if (mysqli_num_rows($result) > 0) {
          session_start();
          $_SESSION['username'] = $username;
          header('Location: index.php');
      } else {
          echo 'login gagal'; // Or a more informative message
      }
  } else {
      echo "Invalid request"; // Handle missing data
  }
?>
