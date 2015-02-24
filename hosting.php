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
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="panel panel-info">
                        <div class="panel-heading">Entry Level Plan</div>
                        <!-- PRICE ITEM -->
                        <div class="panel price panel-red panel-centered">
                            <div class="panel-body text-center">
                                <p class="lead" style="font-size:40px"><strong>From £5 / month</strong></p>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Recommended for Personal use</li>
                                <li class="list-group-item"><i class="icon-ok text-danger"></i> 25GB RAID10 Protected Disk Space</li>
                                <li class="list-group-item"><i class="icon-ok text-danger"></i> 512MB Dedicated DDR3 RAM</li>
                                <li class="list-group-item"><i class="icon-ok text-danger"></i> 1TB Premium Bandwith</li>
                                <li class="list-group-item"><i class="icon-ok text-danger"></i> Choice of Linux OS</li>
                            </ul>
                            <div class="panel-footer">
                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="hosting">
                                    <center>
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="J3H3SPKGH7BXL">
                                    <table>
                                        <tr>
                                            <td style="color: black">
                                                <input type="hidden" name="on0" value="Management Options">Management Options
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color: black" class="text-center">
                                                <select name="os0">
                                                    <option value="Managed">Managed : £10.00 GBP - monthly</option>
                                                    <option value="Unmanaged">Unmanaged : £5.00 GBP - monthly</option>
                                                </select> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color: black">
                                                <input type="hidden" name="on1" value="Domain Name">Domain Name
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color: black">
                                                <input type="text" name="os1" maxlength="200">
                                            </td>
                                        </tr>
                                    </table>
                                    <br />
                                        <input type="hidden" name="currency_code" value="GBP">
                                        <input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                                        <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                                    </center>
                                </form>

                            </div>
                        </div>
                        <!-- /PRICE ITEM -->
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="panel panel-info">
                        <div class="panel-heading">Pro Plan</div>
                        <!-- PRICE ITEM -->
                        <div class="panel price panel-blue">
                            <div class="panel-body text-center">
                                <p class="lead" style="font-size:40px"><strong>From £10 / month</strong></p>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><i class="icon-ok text-info"></i> Ideal for Small Business use</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> 50GB RAID10 SSD Cached Storage</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> 1GB Dedicated DDR3 RAM</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> 2TB Premium Bandwidth</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> Choice of Linux OS</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> Software Update Support</li>
                            </ul>
                            <div class="panel-footer">
                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <center>
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="EB4ES56EH9SPA">
                                    <table>
                                        <tr>
                                            <td style="color: black">
                                                <input type="hidden" name="on0" value="Management Options">Management Options
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color: black">
                                                <select name="os0">
                                                    <option value="Managed">Managed : £15.00 GBP - monthly</option>
                                                    <option value="Unmanaged">Unmanaged : £10.00 GBP - monthly</option>
                                                </select> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color: black">
                                                <input type="hidden" name="on1" value="Domain Name">Domain Name
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color: black">
                                                <input type="text" name="os1" maxlength="200">
                                            </td>
                                        </tr>
                                    </table>
                                    <input type="hidden" name="currency_code" value="GBP">
                                    <input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                                    <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                                </center>
                                </form>
                            </div>
                        </div>
                        <!-- /PRICE ITEM -->
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="panel panel-info">
                        <div class="panel-heading">Business Plan</div>
                        <!-- PRICE ITEM -->
                        <div class="panel price panel-green">
                            <div class="panel-body text-center">
                                <p class="lead" style="font-size:40px"><strong>From £15 / month</strong></p>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><i class="icon-ok text-info"></i> Ideal for Small / Medium Business use</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> 100GB RAID10 SSD Cached Storage</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> 2GB Dedicated DDR3 RAM</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> 3TB Premium Bandwidth</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> Choice of Linux OS</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> Software Update Support</li>
                            </ul>
                            <div class="panel-footer">
                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <center>
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="NXU9MU3JCL6BG">
                                    <table>
                                        <tr>
                                            <td style="color: black">
                                                <input type="hidden" name="on0" value="Management Options">Management Options
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color: black">
                                                <select name="os0">
                                                    <option value="Managed">Managed : £20.00 GBP - monthly</option>
                                                    <option value="Unmanaged">Unmanaged : £15.00 GBP - monthly</option>
                                                </select> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color: black">
                                                <input type="hidden" name="on1" value="Domain Name">Domain Name
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color: black">
                                                <input type="text" name="os1" maxlength="200">
                                            </td>
                                        </tr>
                                    </table>
                                    <input type="hidden" name="currency_code" value="GBP">
                                    <input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                                    <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                                </center>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /PRICE ITEM -->
                </div>
                
                <div class="col-md-5">
                    <div class="panel panel-info">
                        <div class="panel-heading">Developer Plan</div>
                        <!-- PRICE ITEM -->
                        <div class="panel price panel-grey">
                            <div class="panel-body text-center">
                                <p class="lead" style="font-size:40px"><strong>From £20 / month</strong></p>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item"><i class="icon-ok text-info"></i> Ideal for Resellers</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> 150GB RAID10 SSD Cached Storage</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> 4GB Dedicated DDR3 RAM</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> 4TB Premium Bandwidth</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> Choice of Linux OS</li>
                                <li class="list-group-item"><i class="icon-ok text-info"></i> Software Update Support</li>
                            </ul>
                            <div class="panel-footer">
                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <center>
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="DP34U6BUEAHGS">
                                    <table>
                                        <tr>
                                            <td style="color: black">
                                                <input type="hidden" name="on0" value="Management Options">Management Options
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color: black">
                                                <select name="os0">
                                                    <option value="Managed">Managed : £25.00 GBP - monthly</option>
                                                    <option value="Unmanaged">Unmanaged : £20.00 GBP - monthly</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color: black">
                                                <input type="hidden" name="on1" value="Domain Name">Domain Name
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color: black">
                                                <input type="text" name="os1" maxlength="200">
                                            </td>
                                        </tr>
                                    </table>
                                    <input type="hidden" name="currency_code" value="GBP">
                                    <input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                                    <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                                </center>
                                </form>
                            </div>
                        </div>
                    <!-- /PRICE ITEM -->
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