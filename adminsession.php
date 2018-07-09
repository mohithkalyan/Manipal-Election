<?php
   include('config.php');
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($db,"SELECT * FROM admin WHERE username = '".$user_check."' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['Username'];
   $_SESSION['adminkaname'] = $row['Name'];
   //$_SESSION['userkacgpa'] = $row['Cgpa'];

   if(!isset($_SESSION['login_user'])){
      header("location:adminlogin.php");
   }
?>
