<?php
   include('session.php');
 // echo !($_SESSION['vote'] == NULL);
?>
<html>

   <head>

      <title>Welcome to the Election</title>
      <link href="bootstrap.min.css" rel="stylesheet">
      <script>
                  function myRegister() {

                    <p>This is myregister functio</p>
                    <?php

                  //  $displayerror = "NULL";
                  echo "This is php code";
                    if($_SESSION['userkacgpa'] >= 7.5)
              {
                    $query = "INSERT INTO  candidate(C_name, C_reg_no) VALUES ('".$mycandidate."','".$myregno."')";
                    $reg_sql = mysqli_query($db,$query);
                          if($reg_sql){
                            //  $sanity_error = "Records added successfully.";
                                  header("location: registered.php");
                            }

                            else{
                        $sanity_error = "ERROR: Could not able to executed $query. " . mysqli_error($db);
                          // $sanity_error = "Sorry for the inconvience caused !! Re-check the Details and fill it ";
                        }
              /*
               if(!empty($current_id)) {
                 $sanity_error = "New User Added Successfully";
               }*/
                }
                  else {
                    # code... Your CGPA should be more than 7.5 !! We are sorry.
                    $displayerror = "";

                  }
                        ?>
}

</script>
      <style type="text/css">

      		#logout{

                 float: right;
                  color: #820;

      		}

            #welcome{
               margin-top: 40px;
               margin-left: 40px;

               color: #FFF;
            }
            h4 {

               margin-right: 40px;

            }
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


               .panel-default {
                  opacity: 0.9;
                  margin-top:30px;
               }

               .form-group.last {
                  margin-bottom:0px;
               }

               .panel-heading {

                  text-align: center;
               }

               button {

                  margin-left: -60px;
                  margin-top: 143px;

               }

               .panel-body {

                  height: 200px;

               }

               img {

                  text-align: center;
                  width: 80px;
                  height: 100px;
                  margin-left: 100px;
                  margin-top: -60px;
               }

               #box {

                  display: inline-block;
                  width: 1000px;
               }

               #first {

                  margin-left: 100px;
                  float: left;
               }

               #second {

                  float: right;
                  margin-left: 250px;
                  margin-top: -294px;
               }

               #register_image {

                    margin-left: 110px;

               }

               #register_button {

                  margin-left: -80px;
               }


      </style>
   </head>

   <body>
            <h1>MUJ ELECTIONS</h1>
            <h4 id="logout"><a href = "logout.php">Sign Out</a></h4>
          <h4 id="welcome">Welcome <span style="color: #428bca"><?php echo $_SESSION['userkaname']; ?></span></h4>
          <br><br><br><br>

              <div id="box">
               <div class="container" id="first">
        <div class="col-md-4 col-md-offset-1">
            <div class="panel panel-default">

                        <div class="panel-heading">
                                 <strong>Vote</strong>
                           </div>

                              <div class="panel-body">
                                       <img src="vote.jpg"/>
                                       <a href="votepage.php"><button class="btn btn-success btn-md"  <?php if (!($_SESSION['vote'] == NULL)) echo 'disabled="disabled"' ?>>vote</button></a>

                              </div>
                     </div>
            </div>
    </div>
</div>

   <div class="container" id="second">

        <div class="col-md-4 col-md-offset-6">
            <div class="panel panel-default">
                        <div class="panel-heading">
                                 <strong>Register</strong>
                           </div>

                              <div class="panel-body">
                                       <img src="register.png" id="register_image"/>
                                      <a href="check.php"><button class="btn btn-success btn-md" id="register_button" <?php if ($_SESSION['registerkacheck'] == 1) echo 'disabled="disabled"' ?>>Register</button></a>
                              </div>


                              <?php
/*

                                    if(isset($displayerror)){
                                  echo '<br>  <div style="color:#FF0000;text-align:center;font-size:12px;">'.$displayerror.'</div>';
                                          }
*/

                            /*
                      function displayerror() {
                            if($displayerror !== "NULL")
                            {
                              echo '<br>  <div style="color:#FF0000;text-align:center;font-size:12px;">'.$displayerror.'</div>';
                            }
                        }     */
                              ?>

                     </div>
            </div>
    </div>
</div>
</div>
      	<br><br>
      	<br><br>
        <b><p style="color:#820; margin-left:50px;"> * You can Register or Vote only once </p></b>
   </body>

</html>
