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
    <title>ReBook</title>
  </head>

  <body>

    <div id="header_content" class="header">

      <nav>

        <a class="active" href="index.php"><img style="width: 20px;" src="home.png" alt=""></a>
      
        <a style="float:right; cursor:pointer"  type="a" class="login" data-toggle="modal" data-target="#myModal">
            LogIn
        </a>
        <a class="request" href="request.php">Request</a>
        <a class="donate" href="donate.php">Donate</a>
      

      </nav>
    </div>

    <div class="st1part">
      <p id="1stline">  more than 30,00,000 orphans in india </p>
      <p id="2ndline">your one book will help three students</p>
      <p id="3rdline"> sharing is carrying</p>
      <p id="4thline">join with us to bridge this gap</p>
    </div>




    <a href="camp1.html">
      <div id="campaign1">
        <img  id="pic1" src="img1.jpg" alt="">
        <p>donate your childs book to them</p>
        <a href="donate.php">
          <button id="donate-button">donate now</button>
        </a>
        <p id="elementimg1"></p>
        <p id="camp1"></p>

        <p id="om"></p>

      </div>
    </a>
    <footer>
    
      <div id="contact_us" class="contact">
        <h2>Contact Us</h2>
        <a href="mailto:dharunramsarathy@gmail.com">Mail address</a>
      </div>
    </footer> 
    <?php require "validate.php" ?>
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
