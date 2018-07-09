<?php
   include('session.php');

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $mycandidate = mysqli_real_escape_string($db,$_POST['user_name']);
        $myregno = mysqli_real_escape_string($db,$_POST['registration_number']);
        $mycgpa = mysqli_real_escape_string($db,$_POST['cgpa']);
        if($mycgpa >= 7.5)
  {
        $query = "INSERT INTO  candidate(C_name, C_reg_no) VALUES ('".$_SESSION['userkaname']."','".$login_session."')";
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
        # code...
        $sanity_error = "Your CGPA should be more than 7.5 !! We are sorry.";
      }
 }
?>

<HTML>

	<head>
			<TITLE>Register for the Election</TITLE>
           <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
           <style type="text/css">

           .panel-heading {
           	text-align: center;
           }

           	button {
           		margin-left: 80px;
           		margin-top: 20px;
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

					p {
							margin-top: 90px;
              margin-left: 30px;
              font-size: 13px;
					}

        #logout{
                  float: right;
                  color: #820
            }

     h4 {
            margin-right: 40px;
     }

     #back {
              margin-left: 90px;
              font-size: 20px;
     }
           </style>
	</head>

	<BODY>
			<h1>MUJ ELECTIONS</h1>
      <h4 id="logout"><a href = "logout.php">Sign Out</a></h4>

			<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <strong>Register for the Election</strong>
                </div>
          <div class="panel-body">
            <form class="form-horizontal" role="form" action="<?php $_PHP_SELF ?>" method="post">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">
                            Candidate Name</label>
                        <div class="col-sm-8">
                            <input type="name" class="form-control" id="candidate_name" placeholder="Enter your name" name="user_name" required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                            Registration No</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="Registration_number" placeholder="Enter your Reg No" name="registration_number" required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                            Cgpa*</label>
                        <div class="col-sm-8">
                            <input type="float" class="form-control" id="Registration_number" placeholder="Enter your Cgpa" name="cgpa" required="true">
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-primary btn-md">
                                Register</button>

                        </div>
                        <p> * The Candidate should have a minimum CGPA of 7.5</p>
                    </div>

                    <?php
                          if(isset($sanity_error)){
                        echo '<br>  <div style="color:#FF0000;text-align:center;font-size:12px;">'.$sanity_error.'</div>';
                                }
                    ?>

            </form>
          </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br>
<h4 id= "back"><a href="welcome.php"><<&nbsp; Back</a></h4>

	</BODY>
</HTML>
