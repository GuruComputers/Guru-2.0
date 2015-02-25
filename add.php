<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guru Computers Ltd</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/hosting.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php 
        $page = "testimonials";
        include "nav.php"; 
    ?>
<?php

	$servername = "localhost"; // Host name 
	$username = "customer"; // Mysql username 
	$password = "a8y8y8ebe"; // Mysql password 
	$db_name = "zadmin_testimonials"; // Database name 

	// Connect to server and select database.
	$conn = new mysqli($servername, $username, $password, $db_name);

	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 

	$datetime=date("y-m-d h:i:s"); //date time

	$sql = "INSERT INTO approved (comprepair, mobrepair, webdev, printing, rating, comment, reviewer_name, review_date, status) VALUES ('$_POST[comprepair]','$_POST[mobrepair]', '$_POST[webdev]', '$_POST[printing]', '$_POST[rating]', '$_POST[comment]', '$_POST[name]', '$datetime', '$_POST[status]')";

	if ($conn->query($sql) === TRUE) {
    	echo "<br /><br />New record created successfully, Redirecting to Testimonials Page...";
    	header('Refresh: 5; URL=./testimonials.php');
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();

?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <?php include "footer.php"; ?>
  </body>
</html>