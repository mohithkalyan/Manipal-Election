<?php
        include('session.php');
 ?>

<html>

  <head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Every vote counts !!</title>
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
                <h3>To vote is not only your right but also your duty.. Thank you so much !!</h3>
                <a href="welcome.php"><button class="btn btn-primary btn-md">
                    Back</button></a>
  </body>

</html>
