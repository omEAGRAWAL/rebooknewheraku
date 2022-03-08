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
  
  <div class="st1part" id="st1part">
    <img id="front1" src="front1.png" alt="">
  </div>

<div id="row1">

  <div id="camp1div" class="camp" >
    <a href="camp1.html"></a>
    <h2>camp1</h2>
      <img id="pic1" src="po1.jpg" alt="">
      <p id="camp1p1" class="image">donate your childs book to them</p>
        <a class="push_button red" id="button" href="donatebook.html">DONATE BOOK</a>
      </a>
    </div>


    <div id="row1"></div>

    <div id="camp1div" class="camp" >
      <a href="leap.html"></a>
      <h2>camp1</h2>
        <img id="pic1" src="po3.jpg" alt="">
        <p id="camp1p1" class="image">we are helping them to crack jee</p>
          <a class="push_button red" id="button" href="donatebook.html">DONATE  BOOK</a>
        </a>
      </div>
    
</div>

<div id="our_aim" class="whatudo">
  <h3 id="our_aimh3">Vison</h3>
  <p id="what_we line1">To bring all<solid> orphanage</solid> &<br>
    <solid>NGO</solid>under one plateform</p>

  <p>we are on a mission to help poor childrem with the source of knowledge</p>
  <p> REUSE of books will reduce the deforastation and carbon emmision</p>
</div>
    
    <div id="whatudo" class="whatudo">
      <h3 class="h3whatudo">What U Do</h3>
      <p>you will help poor children to get a new bright future</p>
      <p>your one book will be used atleast 3 times</p>
    </div>

    <footer>

<!-- Remove the container if you want to extend the Footer to full width. -->


  <footer style="background-color: #deded5;">
  <div class="container p-4">
    <div class="row">
      <div class="col-lg-6 col-md-12 mb-4">
        <h5 class="mb-3" style="letter-spacing: 2px; color: #818963;"></h5>
        <p>
         We are on a mission to help the poor children by donating  used books.
         <br>
          we wnt to build donating book a habit .
        </p>
      </div>
      <div style=" display: flex; flex-direction: row ; align-items: center;  ">
      <div class="col-lg-3 col-md-6 mb-4" >
        <h5 class="mb-3" style="letter-spacing: 2px; color: #818963;">links</h5>
        <ul class="list-unstyled mb-0">
          <li class="mb-1">
            <a href="index.php" style="color: #4f4f4f;">home</a>
          </li>
          <li class="mb-1">
            <a href="camp1.html" style="color: #4f4f4f;">camps</a>
          </li>
          <li class="mb-1">
            <a href="donatebook.php" style="color: #4f4f4f;"> Donate book</a>
          </li>
          
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <h5 class="mb-1" style="letter-spacing: 2px; color: #818963;">opening hours</h5>
        <table class="table" style="color: #4f4f4f; border-color: #666;">
          <tbody>
            <tr>
              <td>address</td>
              <td>Nit Puducherry ,karaikal,puduchery</td>
            </tr>
            <tr>
              <td>Contact Us</td>
             <a href="rebookpy@gmail.com"></a> <td>rebookpy@gmail.com</td></a>
            </tr>
          </tbody>
        </table>
      </div>
      </div>
    </div>
  </div>

  <!-- Copyright -->
</footer>

</div>
<!-- End of .container -->


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