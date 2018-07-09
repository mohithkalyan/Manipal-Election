<?php
   include('config.php');
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($db,"SELECT * FROM student WHERE username = '".$user_check."' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['username'];
   $_SESSION['userkaname'] = $row['Name'];
   //$_SESSION['userkacgpa'] = $row['Cgpa'];
   $userkacgpa = $row['Cgpa'];
   $_SESSION['registerkacheck'] = $row['register_check'];
   $_SESSION['vote'] = $row['C_reg_no'];
   $_SESSION['successfull'] = " You have created an account";
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
