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
        <div class="row">
            <div class="col-md-20">
                <ul id="portfolio">
                    <?php
                        $files = scandir('img/web/'); 
                        foreach ($files as $file){
                            if($file != '.' && $file != '..'){
                                $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file);
                                echo '<li class="portfolio_item"><a href="http://www.'.$withoutExt.'" target="_blank">'."\n".'<img src="images/'.$file.'" alt="Portfolio Image">'."\n";
                                echo '<h2>www.'.$withoutExt.'</h2></a></li>'."\n";
                            }
                        }
                    ?>
                </ul>   
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