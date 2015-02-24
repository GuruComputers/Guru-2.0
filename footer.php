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