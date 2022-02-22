<?php
$email = "";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST["email"]))
    {
        $emailErr = "email-id is required";
    }else
    {
    $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $emailErr = "Invalid email format";
        }
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}    
?>