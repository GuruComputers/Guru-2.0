<nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img alt="Guru Computers Ltd" src="img/logo.png" class="navbar-logo">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav nav-pills">
                    <?php 
                        if ($page == "home"){
                          echo '<li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>';
                     } else {
                          echo '<li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>';
                     }
                         if ($page == "about"){
                          echo '<li class="active"><a href="#">About</a></li>';
                     } else {
                          echo '<li><a href="#">About</a></li>';
                     }
                          if ($page == "contact"){
                          echo '<li class="dropdown active">';
                     } else {
                          echo '<li class="dropdown">';
                     }
                     ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contact Us <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="tel:07942759689"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Dave (07942 759689)</a></li>
                            <li><a href="tel:07942759739"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Neil (07942 759739)</a></li>
                            <li class="divider"></li>
                            <li><a href="mailto:sales@gurucomputers.co.uk"><img src="./img/email.jpg" class="menu-icons">Email Us</a></li>
                            <li class="divider"></li>
                            <li><a href="http:///www.twitter.com/gurucomputersuk" target="_blank"><img src="./img/twitter.png" class="menu-icons">Follow us on Twitter</a></li>
                            <li class="divider"></li>
                            <li><a href="http:///www.facebook.com/gurucomputersuk" target="_blank"><img src="./img/facebook.png" class="menu-icons">Add us on Facebook</a></li>
                        </ul>
                    </li>
                    <?php 
                        if ($page == "repairs"){
                          echo '<li class="dropdown active">';
                     } else {
                          echo '<li class="dropdown">';
                     }
                     ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Repairs <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="comprepairs">Computer Repairs</a></li>
                            <li><a href="#">Mobile Repairs</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Book Now</a></li>
                        </ul>
                    </li>
                    <?php 
                        if ($page == "websites"){
                          echo '<li class="dropdown active">';
                     } else {
                          echo '<li class="dropdown">';
                     }
                     ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Websites <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="webdev.php">Website Development</a></li>
                            <li><a href="hosting.php">Website Hosting</a></li>
                            <li class="divider"></li>
                            <li><a href="webportfolio.php">Our Portfolio</a></li>
                        </ul>
                    </li>
                    <?php 
                        if ($page == "printing"){
                          echo '<li class="dropdown active">';
                     } else {
                          echo '<li class="dropdown">';
                     }
                     ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Printing <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="cd.php">CD Printing & Duplication</a></li>
                            <li class="divider"></li>
                            <li><a href="flyers.php">Flyers</a></li>
                            <li><a href="#">Business Cards</a></li>
                            <li><a href="#">Letterheads</a></li>
                            <li class="divider"></li>
                            <li><a href="#">General Printing</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Our Portfolio</a></li>
                        </ul>
                    </li>
                    <?php 
                        if ($page == "shop"){
                          echo '<li class="active"><a href="http://www.gurucomputers.co.uk/shop" target="_blank">Shop</a></li>';
                     } else {
                          echo '<li><a href="http://www.gurucomputers.co.uk/shop" target="_blank">Shop</a></li>';
                     }
                     if ($page == "blog"){
                          echo '<li class="active"><a href="http://www.gurucomputers.co.uk/blog" target="_blank">Blog</a></li>';
                     } else {
                          echo '<li><a href="http://www.gurucomputers.co.uk/blog" target="_blank">Blog</a></li>';
                     }
                     if ($page == "testimonials"){
                          echo '<li class="dropdown active">';
                     } else {
                          echo '<li class="dropdown">';
                     }
                     ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Testimonials <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="testimonials.php">View Testimonials</a></li>
                            <li><a href="addtestimonial.php">Add a Testimonial</a></li>
                        </ul>
                    </li>
                </ul>
        </div>
    </nav>