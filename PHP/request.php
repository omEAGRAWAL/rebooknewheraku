<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rebook/request</title>
    <link rel="stylesheet" href="Styles/request.css">
    <link rel="icon" type="image/x-icon" href="Pictures/favicon.ico">

</head>
<body>
    <h1>REQUEST CAMPAIGN</h1>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $organisationErr = $websiteErr = $phoneErr = "";
$name = $email = $organisation = $objective = $phone = $website = $book = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["objective"])) {
    $objective = "";
  } else {
    $objective = test_input($_POST["objective"]);
  }

  if (empty($_POST["organisation"])) {
    $organisationErr = "required";
  } else {
    $organisation = test_input($_POST["organisation"]);
  }
  if (empty($_POST["book"])) {
    $book = "";
  } else {
    $book = test_input($_POST["book"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

  <p><span class="error">* required field</span></p>
  <div class="container">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      <span class="error">* <?php echo $organisationErr;?></span>
      <input type="radio" id="NGO" name="organisation" value="NGO">
      <label for="NGO">NGO</label>
      <input type="radio" id="individual" name="organisation" value="individual">
      <label for="individual">Individual</label><br>
          
      Name<span class="error">* <?php echo $nameErr;?></span>:
      <input type="text" name="name" value="<?php echo $name;?>">
      <br><br>
      
      E-mail<span class="error">* <?php echo $emailErr;?></span>:
      <input type="text" name="email" value="<?php echo $email;?>">
      <br><br>
      
      Phone<span class="error">* <?php echo $phoneErr;?></span>:
      <input type="number" name="phone" value="<?php echo $phone;?>">
      <br><br>

      Website: <input type="text" name="website" value="<?php echo $website;?>">
      <span class="error"><?php echo $websiteErr;?></span>
      <br><br>

      Address: <input type="text" name="address" value="<?php echo $book;?>">
      <br><br>

      Your Objective: <textarea name="objective" rows="5" cols="40"><?php echo $objective;?></textarea>
      <br><br>

      Books required: <input type="text" name="book" value="<?php echo $book;?>">
      <br><br>

      <input type="reset" name="reset" value="reset">
      
      <input type="submit" name="submit" value="Submit">  
    </form>
  </div>
</body>
</html>