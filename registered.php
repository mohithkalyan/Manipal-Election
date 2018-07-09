<?php
        include('session.php');

        if(true){
          $query = "UPDATE student set register_check = '1' where username = '".$user_check."' ";
          $reg_sql = mysqli_query($db,$query);
                if($reg_sql){
                  //  $sanity_error = "Records added successfully.";
                  $sanity_error = "Our Heartful congratulations on your nomination !!!";
                  }

                  else{
              $sanity_error = "ERROR: Could not able to executed $query. " . mysqli_error($db);
              echo $sanity_error;
                // $sanity_error = "Sorry for the inconvience caused !! Re-check the Details and fill it ";
              }
        }
 ?>

<html>

  <head>
    <link href="bootstrap.min.css" rel="stylesheet">
    <title>Congratulations !!</title>
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

                    #logout{

                    float: right;
                     color: #820

            }

               h4 {

                  margin-right: 40px;

               }

               h3 {

                 text-align: center;
                 color: #fff;
                 margin-top: 400px;
               }
               button {

                 margin-left: 100px;
                 margin-top: 20px;
               }

    </style>

  </head>

  <body>
    <h1>MUJ ELECTIONS</h1>
                <h4 id="logout"><a href = "logout.php">Sign Out</a></h4>
                <h3><?php echo $sanity_error ?></h3>
                <a href="welcome.php"><button class="btn btn-primary btn-md">
                    Back</button></a>
  </body>

</html>
