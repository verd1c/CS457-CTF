<?php
   session_start();

   define('DB_SERVER',   '127.0.0.1');
   define('DB_USERNAME', 'user');
   define('DB_PASSWORD', 'makjrwasnothere');
   define('DB_DATABASE', 'CS457');
   $mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

   // Check connection
   if ($mysqli -> connect_errno) {
      print("Failed to connect to MySQL: " . $mysqli -> connect_error);
      exit();
   }

   function console_log( $data ){
      echo '<script>';
      echo 'console.log('. json_encode( $data ) .')';
      echo '</script>';
    }

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $username = $_POST['username'];
      $password = $_POST['password'];

      $sql = "SELECT * FROM admin WHERE acc='${username}' and pw='${password}';";
      $result = $mysqli->query($sql);
      if ($mysqli->errno) { die($mysqli->error); }
      // If result matched $username and $password, table row must be 1 row

      if ($result->num_rows == 1) {

         $row = $result->fetch_assoc();
         $_SESSION['login_user'] = $row['acc'];

         http_response_code(200);
         exit('{"status":"success"}');
      } else {
         http_response_code(404);
         exit('{"status":"Your Login Name or Password is invalid"}');
      }

      $thread = $mysqli->thread_id;
      $mysqli->kill($thread);
      $mysqli->close();
   }
?>
