<?php
   include('session.php');
 if($_SERVER["REQUEST_METHOD"] == "POST")  {

   $myvote = mysqli_real_escape_string($db,$_POST['candidate']);


   $small_query = "UPDATE student set C_reg_no = '".$myvote."' where username = '".$user_check."' ";
   $result1 = mysqli_query($db, $small_query);

   if($result1){
     //  $sanity_error = "Records added successfully.";
     header("location: voted.php");
     }

     else{
 $sanity_error = "ERROR: Could not able to executed $query. " . mysqli_error($db);
   // $sanity_error = "Sorry for the inconvience caused !! Re-check the Details and fill it ";
 }

   if (!$result1) {
 printf("Error: %s\n", mysqli_error($db));
 exit();

 }
 }
?>

<HTML>

	<HEAD>
			<TITLE>Caste your vote</TITLE>
           <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

           <style type="text/css">

           .panel-heading {

           	text-align: center;
           }

           h1 {

                  font-family: serif;
                  text-align: center;
                  font-size: 40px;
                  color: #fff;

               }


               	#logout{

                 float: right;
                  color: #820

      		}

            h4 {

               margin-right: 40px;

            }

            ul
{
    list-style-type: none;
}


                 #back {
                          margin-left: 90px;
                          font-size: 20px;
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

          li {

                font-size: 17px;

          }

          input[type="radio"] {
              margin-right: 10px;
              margin-left: -30px;
}




           </style>
	</HEAD>

	<BODY>
			<h1>MUJ ELECTIONS</h1>
			            <h4 id="logout"><a href = "logout.php">Sign Out</a></h4>


			<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <strong>Vote</strong>
                </div>
          <div class="panel-body">
            <form class="form-horizontal" role="form" action="<?php $_PHP_SELF ?>" method="post">

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">

<?php
$connection = mysqli_query($db,"SELECT * FROM candidate ");

//$row = mysqli_fetch_array($connection,MYSQLI_ASSOC);

echo "<ul>\n";
while($row = mysqli_fetch_array($connection)){
    echo "<li><input type='radio' name='candidate' value='".$row['C_reg_no']."'>"
     .$row['C_name']."</li>";
}
echo "</ul>\n";


/*
$i=0;
while($row = mysqli_fetch_array($connection)) {
?>
<input type="checkbox" value="<?php echo $row["C_name"]; ?>"></input>
<?php
$i++;
}

*/
?>
</div>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-primary btn-md">
                                Vote</button>
                        </div>
                    </div>



            </form>
          </div>

            </div>
        </div>
    </div>
</div>

<br><br><br><br><br><br><br>


<h4 id= "back"><a href="welcome.php"><<&nbsp; Back</a></h4>
	</BODY>
</HTML>
