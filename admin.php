
<?php
            include('adminsession.php');

 ?>
<html>

  <head>
    <link href="bootstrap.min.css" rel="stylesheet">
    <title>Admin</title>
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

                    #logout{

                    float: right;
                    color:#fff;

            }

            #welcome{
               margin-top: 40px;
               margin-left: 40px;

               color: #FFF;
            }

            #name {

                  margin-right: 10px;
                  margin-left: 10px;
            }

            #val {

                margin-left: 30px;

            }

               h4 {

                  margin-right: 40px;
                  color: #fff;

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

               #box {

                  margin-top: -60px;
               }
/*
               a {

                 color: #428bca;
               }
*/


        #bottom {

              text-align: left;
          }


          #top {

              text-align: center;
          }



    </style>

  </head>

  <body>
    <h1>MUJ ELECTIONS</h1>

                <a href="adminlogout.php"><h4 id="logout">Sign Out</h4></a>
                <h4 id="welcome">Welcome <?php echo $_SESSION['adminkaname']; ?>,</h4>
                <br><br>
                <?php
                $i = 0 ;

                $connect = mysqli_query($db,"SELECT c.C_reg_no, c.C_name ,

                  (SELECT count(*) from student where C_reg_no = c.C_reg_no) votes from candidate c");


                /*

                //$naam = mysqli_query($db,"SELECT * FROM candidate");
                //$j=0;
                //$rows = mysqli_fetch_array($naam);
                //$array2[] = array();
                //$array2 = $rows;
                /*
                while($rows > 0){
                  $array2[] = $rows;
                  $array3[$j] = $array2[$j]['C_name'];
                  $j++;
                }
*/

                $array1 = array();

                ?>



                              <div class="container" id="box">
                                <div class="row">
                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" id="top">
                                              <span class="center"><strong>Results</strong></span>
                                            </div>
                                            <div class="panel-heading" id="bottom">
                                              <span class="left"><strong><pre>Name                             Votes</pre></strong></span>

                                            </div>
                                      <div class="panel-body">
  <form class="form-horizontal" role="form" action="" >
                                        <?php

                                        while ($row = mysqli_fetch_array($connect)) {
                                          $array1[] = $row;
                                          $candidate = $array1[$i]['C_name'];
                                          //echo $candidate;
                                          //$candidateName = $array2[$candidate]['C_name'];
                                        //  $candidateName = ;
                                          $CandiVoteCount = $array1[$i]['votes'];
                                          ?>
                                          <?php
                                          //echo "$candidate = $CandiVoteCount";


                                         ?>

                                         <div class="form-group">
                                             <label for="inputEmail3" class="col-sm-4 control-label">
                                                 <?php echo $candidate ?></label>
                                             <label for="inputEmail13" class="col-sm-6 control-label">
                                                 <?php echo $CandiVoteCount;?>
                                             </label>
                                         </div>

                                                        <label id="val"></label>
                                                        <br>

                                                          <?php $i++;
                                                      }
                                                        ?>
                                                    </form>
                                                </div>
                                      </div>

                                        </div>
                                    </div>
                                </div>
                            </div>




  </body>

</html>
