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
  	<nav class="navbar navbar-default">
  		<div class="container-fluid">
    		<div class="navbar-header">
    			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    				<span class="sr-only">Toggle navigation</span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    			</button>
      			<a class="navbar-brand" href="#">
        			<img alt="Guru Computers Ltd" src="img/logo.png" class="navbar-logo">
        		</a>
        	</div>
        	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        		<ul class="nav navbar-nav nav-pills">
        			<li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        			<li><a href="#">Aboutk</a></li>
        			<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contact Us <span class="caret"></span></a>
        				<ul class="dropdown-menu" role="menu">
        					<li><a href="tel:07942759689">Phone Dave</a></li>
        					<li><a href="tel:07942759739">Phone Neil</a></li>
        					<li class="divider"></li>
        					<li><a href="#">Email Us</a></li>
        					<li class="divider"></li>
        					<li><a href="#">Follow us on Twitter</a></li>
        					<li class="divider"></li>
        					<li><a href="#">Add us on Facebook</a></li>
        				</ul>
        			</li>
        		</ul>
        		<form class="navbar-form navbar-left" role="search">
        			<div class="form-group">
        				<input type="text" class="form-control" placeholder="Search">
        			</div>
        			<button type="submit" class="btn btn-default">Submit</button>
        		</form>
        	</div>
	</nav>
    <div class="wrapper">
    	<div class="jumbotron">
    		<h1>Welcome to Guru Computers</h1> 
    		<p>This page will grow as we add more and more components from Bootstrap...</p>
  		</div>
  		<p>This is another paragraph.</p> 
  		<p>This is a paragraph.</p> 
  		<p>This is another paragraph.</p>
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