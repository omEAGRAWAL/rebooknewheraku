<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="rebookstyle.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  
    <link rel="stylesheet" href="rebookstyle.css">
    <link rel="stylesheet" href="button.css">
    <title>ReBook</title>
  </head>

  <body>
  <header>
  <div id="header_content" class="header">
    <nav>
      <li> <a class="active" href="index.html">
          <img style="width: 20px;" src="home.png" alt=""></a></li>
      <li><a class="login" id="login" href="login.html" ; target="_parent">LogIn</a></li>
      <li><a class="request" href="#book_category">Request campaign</a>
    </nav>
  </div>
  </header>
  <div id="header_content" class="header">
    <nav>
      <li> <a class="active" href="index.html">
          <img style="width: 20px;" src="home.png" alt=""></a></li>
      <li><a class="login" id="login" href="login.html" ; target="_parent">LogIn</a></li>
      <li><a class="request" href="#book_category">Request campaign</a>
    </nav>
  </div>
  <div class="st1part">
    <p id="st1line"> more than 30,00,000 orphans in india </p>
    <p id="nd2line">your one book will help three students</p>
    <p id=" rd3line"> sharing is carrying</p>
    <p id="th4line">join with us to bridge this gap</p>
  </div>



  <div id="camp1div">
    <a href="camp1.html"></a>
    <h2>camp1</h2>
      <img id="pic1" src="po1.jpg" alt="">
      <p id="camp1p1">donate your childs book to them</p>
        <a class="push_button red" id="buttoncamp1" href="donatebook.html">DONATE BOOK</a>
      </a>
    </div>


    <br>

    <div id="leapdiv">
      <a href="leap.html">
        <h2 id="leaph">leap</h2>
        <img src="po3.jpg" alt="">
        <p  id="leapline">we are helping poor students to crack jee</p>
      </a>
      <br>
      <a id="buttonleap" class="push_button blue" href="donatebook.php">Donate JEE Book</a>

    </div>



    
    <div id="what_we">
      <h3 id="what_we_h3">Vison</h3>
      <p id="what_we line1">To bring all<solid> orphanage</solid> &<br>
        <solid>NGO</solid>under one plateform</p>

      <p>you will help poor children to get a new bright future</p>
      <p>your one book will be used atleast 3 years</p>
    </div>




    <div id="our_aim" class="our_aim">
      <p>we are on a mission to help poor childrem with the source of knowledge</p>
      <p> REUSE of books will reduce the deforastation and carbon emmision</p>
    </div>


    <footer>
    
      <div id="contact_us" class="contact">
        <h2>Contact Us</h2>
        <a href="mailto:dharunramsarathy@gmail.com">Mail address</a>
      </div>
    </footer> 
    <?php require 'validate.php' ?>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
          <div class="modal-content clearfix">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                  <h3 class="title">Login Form</h3>
                  <p class="description">Login here Using Email & Password</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                  <div class="form-group">
                      <span class="input-icon"><i class="fa fa-user"></i></span>
                      <input type="email" class="form-control" placeholder="Enter email" name="email">
                  </div>
                  <div class="form-group">
                      <span class="input-icon"><i class="fas fa-key"></i></span>
                      <input type="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group checkbox">
                      <input type="checkbox">
                      <label>Remember me</label>
                  </div>
                  <a href="" class="forgot-pass">Forgot Password?</a>
                  <button class="btn">Login</button>
                </form>
                  <a class="sign_up" href="#">sign up</a>
              </div>
          </div>
      </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>

</html>