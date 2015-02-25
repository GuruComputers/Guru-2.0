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
                    <div class="panel-heading"><h1>One Website for All Devices</h1></div>
                    <div class="panel-body text-center">
                        <h2>Responsive Website Design</h2>
                        <p>In Today's Technology Advanced World, people are more and more likely to access your website on Phones, Tablets and other Portable Devices.</p>
                        <p>Having a website that dynamically adjusts the user's experience to match their device, your showing your Brand's Attention to Detail.</p>
                        <p>Here at Guru Computers Ltd, we operate on a Mobile-First Approach. This means your website is fully optimized for Mobile Phones, and will look at home on all devices!</p>
                        <img src="img/responsive.png" alt="Responsive Website Design">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">Design</div>
                    <div class="panel-body text-center">
                        <p>Our design mockups and wireframes are presented in Mobile, Tablet & Desktop Formats.</p>
                        <p>These mockups allow us to work with you to make sure your visitors don't miss any important information when they use a smaller device.</p>
                        <p>We then adapt the website between these device designs to make sure a 7" tablet shows the same as a 10.1" so your website is truely fluid and responsive.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">Build</div>
                    <div class="panel-body text-center">
                        <p>Before we get stuck into coding your website, we ensure we have developed a secure, high performance platform for your website to run on.</p>
                        <p>We utilize the latest CSS3, SASS, LESS, HTML5 and jQuery Techniques to ensure your website works well on any device.</p>
                        <p>We also make sure that all Fonts, Images and other User Interface Elements are responsive to the best standard current web technologies allow for.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">Test</div>
                    <div class="panel-body text-center">
                        <p>Your website is only a success when it can be navigated with ease, so we perform rigourous testing throughout the development process.</p>
                        <p>We test your website thoughout the build on several different browsers and devices to ensure maxiumum compatibility. Then we check to make sure there are no vulnerabilities!</p>
                        <p>During this testing phase, we may invite you to test the website yourselves for ease-of-use.</p>
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