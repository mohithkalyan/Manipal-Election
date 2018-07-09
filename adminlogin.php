<?php
 include("config.php");
 session_start();

 if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);
    $sql = "SELECT * FROM admin WHERE username = '".$myusername."' and password = '".$mypassword."'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  //  $active = $row['active'];

    $count = mysqli_num_rows($result);

    if (!$result) {
  printf("Error: %s\n", mysqli_error($db));
  exit();
}
    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count == 1) {
      //$_SESSION["login_user"] = "myusername"
       //session_register("myusername");
       $_SESSION['login_user'] = $myusername;
       header("location: admin.php");
    }
    else {
       $error = "Your Username or Password is invalid";
    }
 }
?>

<html>

  <head>
    <link href="bootstrap.min.css" rel="stylesheet">
    <title>Admin Login</title>
    <style>

      h1 {

            font-family: serif;
            text-align: center;
            font-size: 40px;
            color: #fff;
          }

          			body {
           						background: url('muj3.jpg') no-repeat center center fixed;
           						-webkit-background-size: cover;
           						-moz-background-size: cover;
           						-o-background-size: cover;
           						background-size: cover;
          					}

                    .panel-default {
               						opacity: 0.9;
               						margin-top:30px;
              					}

              			.form-group.last {

               						margin-bottom:0px;
                          margin-left: 30px;
              					}
                    .form-group {

                        margin-top: 40px;
                    }

                      #box {
                              margin-top: 80px;

                      }
                      .panel-heading {
                        text-align: center;
                      }

                      button {

                          text-align: center;
                      }

    </style>

  </head>

  <body>
    <h1>MUJ ELECTIONS</h1>
    <div class="container" id="box">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <strong>Login</strong>
                </div>
          <div class="panel-body">
            <form class="form-horizontal" role="form" action="<?php $_PHP_SELF ?>" method="post">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">
                            Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputRegNo" placeholder="Registration Number" name="username" required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                            Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password" required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                    Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-primary btn-md">
                                Sign in</button>

                        </div>
                    </div>

                    <?php
                          if(isset($error)){
                        echo '<br>  <div style="color:#FF0000;text-align:center;font-size:12px;">'.$error.'</div>';
                                }
                    ?>

            </form>
          </div>
            </div>
        </div>
    </div>
</div>

<a href="login.php"><p style="margin-left:40px;">User Login </p></a>


  </body>

</html>
