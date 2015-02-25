<?php

include('includes/connect.php'); 
include('classes/class_calendar.php');

$calendar = new booking_diary($link);

if (isset($_GET['month'])) $month = $_GET['month']; else $month = date("m");
if (isset($_GET['year'])) $year = $_GET['year']; else $year = date("Y");
if (isset($_GET['day'])) $day = $_GET['day']; else $day = 0;

$selected_date = mktime(0, 0, 0, $month, 01, $year); // Make a timestamp based on the GET values
$first_day = date("N", $selected_date) - 1; // Gives numeric representation of the day of the week 1 (for Monday) through 7 (for Sunday)
$back = strtotime("-1 month", $selected_date);
$forward = strtotime("+1 month", $selected_date);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guru Computers Ltd</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bookings.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php 
        $page = "repairs";
        include "nav.php"; 
    ?>
    <div class="wrapper">
        <div class="row">
            <div class="col-md-20">
                <div class="panel panel-info">
                    <div class="panel-heading">Book a Repair</div>
                        <?php
                            if($_SERVER['REQUEST_METHOD'] == 'post') {
                                $calendar->after_post($month, $day, $year);
                            }
                            // Call calendar function
                            $calendar->make_calendar($selected_date, $first_day, $back, $forward, $day, $month, $year);
                        ?>
                    </div>
                </div>
            </div>
        </div>
  	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <?php include "footer.php"; ?>
  </body>
</html>