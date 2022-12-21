<?php
 //include('conexao.php');
 $DB_HOST= 'localhost';
 $DB_NAME= 'info';
$DB_USER='root';
 $DB_PASSWORD=''; 
   $conexao=mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());
   $db=mysqli_select_db($conexao,$DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());
    /* $ID = $_POST['user'];
     $Password = $_POST['pass'];
      */ 
      function SignIn() { session_start();
       //starting the session for user profile page if(!empty($_POST['user'])) 
       //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
       {
            $query = mysqli_query("SELECT * FROM administradores where email = '$_POST[email]' AND senha = '$_POST[senha]'") or die(mysqli_error());
        $row = mysqli_fetch_array($query); 

        if(!empty($row['email']) AND !empty($row['senha'])) {
             $_SESSION['email'] = $row['senha'];
              echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
              SignIn();
            } else { echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
                header('index.php');   
            }
             }
             } if(isset($_POST['submit'])) { SignIn();
                 } ?>
