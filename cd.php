<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guru Computers Ltd</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include "nav.php"; ?>

    <div class="wrapper">
        <div class="container">
            <div class="row clearfix">
                <div class="row clearfix">

                    <div class="col-md-10 column">
                        <div class="panel panel-info">
                            <div class="panel-heading">Need some CD's printed?</div>
                            <div class="panel-body">
                                <p>Our In-House CD printing is what you need.</P>
                                <p>We are able to print your CD's on a range of full face printable CD's.</p>
                                <p>Due to the CD's being printed in-house we are able to get the fastest turn around possible.</p>
                                <p>Need help in the design?    That's no problem our professional team are able to tweak your graphics to enable the best results.</p>
                                <br/>
                                <ul>
                                    <li>HTML5</li>
                                    <li>CSS3</li>
                                    <li>PHP</li>
                                    <li>Javascript</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-10 column">
                        <div class="panel panel-info">
                            <div class="panel-heading">Computer Running Slow?</div>
                            <div class="panel-body">
                                <p>Here at Guru Computers Ltd we never put a healthy computer down!</p>
                                <p>We have been busting Computer Viruses as a team for the best part of 17 years, and we aren't going to stop now! With the use of Multi-layered Antivirus Technology, we can provide fast and effective protection against current and future threats.</p>
                                <p>The bottom line is we keep you safe and we keep it simple! Our range of services include:- </p>
                                <ul>
                                    <li>Virus Removals</li>
                                    <li>PC Upgrades</li>
                                    <li>Reinstalls</li>
                                    <li>Laptop Screen Replacements</li>
                                    <li>Remote Support</li>
                                    <li>Data Recovery</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <footer class="footer">
        <center>
          <ul>
            <li>
              <?php
                $start=2014;
                $current=date("Y");
                $cy="";
                if ($current==$start) {
                  $cy=$start;
                }
                if ($current>$start) {
                  $cy=$start."-".$current;
                }
                echo "&copy"." ".$cy." Guru Computers Ltd."."\n"; 
              ?>
            </li>
            <li>
             <a href="mailto:sales@gurucomputers.co.uk"><img src="./img/email.jpg" class="icons">Email Us</a>
            </li>
            <li>
              <a href="https://www.youtube.com/user/gurucomputersuk" target="_blank"><img src="./img/youtube.png" class="icons">Guru Channel</a>
            </li>
            <li>
              <a href="https://www.facebook.com/GuruComputersUK" target="_blank"><img src="./img/facebook.png" class="icons">Guru Facebook</a>
            </li>
            <li>
              <a href="https://twitter.com/GuruComputersUK" target="_blank"><img src="./img/twitter.png" class="icons">Guru Twitter</a>
            </li>
          </ul>
        </center>
      </div>
    </footer>

  </body>
</html>