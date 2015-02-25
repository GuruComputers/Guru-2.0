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
        $page = "websites";
        include "nav.php"; 
    ?>
    <div class="wrapper">
        <div id ="testimonials_content">
            <form action="add.php" method="post" accept-charset="utf-8" align="center">
                <fieldset><legend><h1>Add Testimonial</h1></legend>
                    <p>
                        <label for="name"><h2>Your Name</h2></label>
                        <input type="text" name="name" id="name" />
                    </p>
                    <p>
                        <label><h2>Service Performed</h2></label>
                        <input type="checkbox" name="comprepair" value="1" /> Computer Repair<br /><br />
                        <input type="checkbox" name="mobrepair" value="1" /> Mobile Phone Repair<br /><br />
                        <input type="checkbox" name="webdev" value="1" /> Website Development<br /><br />
                        <input type="checkbox" name="printing" value="1" /> Printing
                    <p>
                        <label for="rating"><h2>Rating</h2></label>
                        <input type="radio" name="rating" value="5" /> 5 
                        <input type="radio" name="rating" value="4" /> 4
                        <input type="radio" name="rating" value="3" /> 3
                        <input type="radio" name="rating" value="2" /> 2 
                        <input type="radio" name="rating" value="1" /> 1
                    </p>
                    <p>
                        <label for="comment"><h2>Your Comment</h2></label>
                        <textarea name="comment" rows="8" cols="40"></textarea>
                    </p>
                    <p>
                        <input type="submit" value="Submit Review">
                    </p>
                    <input type="hidden" name="status" value="Cat" id="status">
                </fieldset>
            </form>
        </div>
  	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <?php include "footer.php"; ?>
  </body>
</html>