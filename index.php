<!DOCTYPE html>

<html>
<head>
		<title>MUJ ELECTIONS</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<meta charset="utf-8">
		<style>
					#title_name {
									text-align: center;
						}

					h1 {

						font-family: serif;
						text-align: center;
						opacity: 0.6;
						font-size: 40px;
					}

					body {

							background-image: url(manipal_image.jpg);
							background-repeat:no-repeat;
							background-size:cover;
					}

					p {

						font-size: 19px;
						font-family: 'LATO';
					}

					#loginpara {

						text-align: right;
						margin-right: 135px;
					}

					#intro {

						margin-left: 20px;
						float: left;
					}
					button {

						font-size: 19px;
						margin-right: 10px;
					}


.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

		</style>
</head>

<body>

			<h1>MUJ ELECTIONS</h1>

			<br><br>
			<p id="intro">Welcome to Manipal University Jaipur Election.</p>

	<p id="loginpara"><a href="login.php"><button type="button" class="button btn btn-primary btn-md"><span>Getting Started</button></span></a></p>
	<br><br><br><p style="margin-left:20px; font-size:14px;">Authorities can get in here</p><a href="adminlogin.php"><p style="margin-left:20px;font-size:14px;">Admin Panel</p></a>
</body>

</html>
