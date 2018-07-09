<?php
          include('config.php');

             if($_SERVER["REQUEST_METHOD"] == "POST") {
                // username and password sent from form



                $userkiname = mysqli_real_escape_string($db,$_POST['name']);
                $userkimail = mysqli_real_escape_string($db,$_POST['email_id']);
                $userkiregno = mysqli_real_escape_string($db,$_POST['regNo']);
                $userkipassword = mysqli_real_escape_string($db,$_POST['password']);
                $userkirepassword = mysqli_real_escape_string($db,$_POST['re-password']);
                $userkicgpa = mysqli_real_escape_string($db,$_POST['cgpa']);

                $check = "SELECT * from builtin where Reg_no='".$userkiregno."'";
                $res = mysqli_query($db, $check);
                $rows = mysqli_fetch_array($res,MYSQLI_ASSOC);

               $count = mysqli_num_rows($res);

                if (!$res) {
                  printf("Error: %s\n", mysqli_error($db));
                  exit();
                }



                      if($count == 1) {
                        //$_SESSION["login_user"] = "myusername"
                         //session_register("myusername");
                         if($userkipassword == $userkirepassword) {
                           $sql = "INSERT INTO student(Name, Cgpa, Password, username, email_id) values ('".$userkiname."','".$userkicgpa."','".$userkipassword."','".$userkiregno."','".$userkimail."')";
                           $result = mysqli_query($db,$sql);
                           //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                           //$count = mysqli_num_rows($result);
                           if($result)
                             //  $sanity_error = "Records added successfully.";
                             header("location: newuser.php");

                           if (!$result) {
                                            printf("Error: %s\n", mysqli_error($db));
                                            exit();
                                        }
                     }
                     else
                       $error = "Please check the passwords enter.. Ensure you type the same password in two fields";

                      }

                      else
                         $error = "Your Reg No or password   is invalid";

                   }



?>

  <html>
          <head>
                  <title>Register to Vote </title>
                  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
                  <style>

                  h1 {

                        font-family: serif;
                        text-align: center;
                        font-size: 40px;
                        color: #fff;

                     }

                     body {
                        background: url('green_suburb.jpg') no-repeat center center fixed;
                        -webkit-background-size: cover;
                        -moz-background-size: cover;
                        -o-background-size: cover;
                        background-size: cover;
                     }

                      .panel-heading {

                        text-align: center;
                      }

                      input {

                        margin-right: 15px;
                      }


                  </style>
          </head>

          <body>
            <h1>MUJ ELECTIONS</h1>
            <br>
            <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <strong>Sign up</strong>
                        </div>
                  <div class="panel-body">
                    <form class="form-horizontal" role="form" action="<?php $_PHP_SELF ?>" method="post">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">
                                    Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputRegNo" placeholder="Enter your name" name="name" required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">
                                    Email</label>
                                <div class="col-sm-9">
                                    <input type="Email" class="form-control" id="inputPassword3" placeholder="Enter your Email Id" name="email_id" required="true">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">
                                    Registration no</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="inputPassword3" placeholder="Enter your Registration number" name="regNo" required="true">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">
                                    Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Enter your Password" name="password" required="true">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">
                                    Confirm Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Re-Enter your Password" name="re-password" required="true">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">
                                    CGPA</label>
                                <div class="col-sm-9">
                                    <input type="float" class="form-control" id="inputcgpa" placeholder="Enter your CGPA" name="cgpa" required="true">
                                </div>
                            </div>

                            <div class="form-group last">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-primary btn-md" style="margin-top:15px;">
                                        Sign up</button>

                                </div>
                              </div>
                            <?php
                                  if(isset($error))
                                echo '<br>  <div style="color:#FF0000;text-align:center;font-size:12px;">'.$error.'</div>';
                            ?>
                    </form>
                  </div>
                  <div class="panel-footer">
                       Already Registered? <a href="login.php"> &nbsp;Login here !!</a></div>
                </div>
                    </div>
                </div>
            </div>
        </div>
          </body>

</html>
