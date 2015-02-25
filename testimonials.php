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
    <div class="wrapper">
        <?php

        error_reporting(E_ALL);

        $servername = "localhost"; // Host name 
        $username = "customer"; // Mysql username 
        $password = "a8y8y8ebe"; // Mysql password 
        $db_name = "zadmin_testimonials"; // Database name 

        $conn=mysqli_connect($servername, $username, $password, $db_name);

        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        echo "<h3>Customer Comments</h3>";

        $sql = "SELECT * from approved WHERE status='Dog'";

        $result=mysqli_query($conn, $sql);
        while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        ?>
        <div class="col-md-20">
            <div class="panel panel-info">
                <div class="panel-heading"><?php echo $rows['reviewer_name']; ?></div>
                <div class="panel-body">
                    <?php echo $rows['comment']; ?><br />
                </div>
            </div>
        </div>
<?php
}
$conn->close(); //close database
?>
  	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <?php include "footer.php"; ?>
  </body>
</html>