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
                <div class="panel panel-info">
                    <div class="panel-heading">We are confident you will love our websites!</div>
                    <div class="panel-body text-center">
                        <h2>A sample of some of our works</h2>
                        <p>Many companies claim to be Website Developers when in fact all they do is use someone else's template and a CMS System</p>
                        <p>Here at Guru Computers Ltd, we believe that a website should be unique, just like you are!</p>
                        <p>That's why we avoid using other's templates, and all the websites below have been coded by our own hands and lots of coffee!</p>
                        <img src="img/responsive.png" alt="Responsive Website Design">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-20">
                <?php
                    $files = scandir('img/web/'); 
                    foreach ($files as $file){
                        if($file != '.' && $file != '..'){
                            $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file);
                            echo '<div class="col-md-5">'."\n";
                            echo '<div class="panel panel-info">'."\n";
                            echo '<div class="panel-heading"><h2>www.'.$withoutExt.'</h2></div>'."\n";
                            echo '<div class="panel-body text-center">'."\n";
                            echo '<a href="http://www.'.$withoutExt.'" target="_blank">'."\n".'<img src="img/web/'.$file.'" alt="Portfolio Image" class="img-responsive"></a>'."\n";
                            echo '</div></div></div>';
                        }
                    }
                ?>
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