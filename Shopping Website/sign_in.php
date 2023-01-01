<?php
    if(isset($_POST['submit'])){
        $first_name = htmlentities($_POST['fname']);
        setcookie('firstname',$first_name,time()+20);
    } 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="style2.css" type="text/css">
    <!-- Getting Font Online -->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <!-- Importing Poppins Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <script src="sign_in_validation.js"></script>
    
</head>
<body>
    <img class="background" src="images/background_image.jpg">
    <img class = "sign_in_back" src="images/signin_background.png">
    <h1>Sign In</h1>
    <br>
    <form name="form" id="form" method="POST">
        <div class="fname">
            <label>First Name</label><br>
            <input name="fname" id="fname" type="text" placeholder="Enter First Name">
            <span id="fname_error"></span><br>
        </div>

        <div class="lname">
            <label>Last Name</label><br>
            <input name="lname" id="lname" type="text" placeholder="Enter Last Name">
            <span id="lname_error"></span><br>
        </div>

        
        <div class="email">
            <label>Email</label><br>
            <input name="email" id="email" type="text" placeholder="Enter Email">
            <span id="email_error"></span><br>
        </div>

        
        <div class="user">
            <label>User ID</label><br>
            <input name="user" id="user" type="text" placeholder="Enter User ID">
            <span id="user_error"></span><br>
        </div>

        
        <div class="password">
            <label>Password</label><br>
            <input id="password" type="password" placeholder="Enter Password">
            <span id="pass_error"></span><br>
        </div>


        <div class="re_password">
            <label>Re-enter Password</label><br>
            <input id="re_password" type="password" placeholder="Re-enter Password">
            <span class="repass_error" id="repass_error"></span>
        </div>
        <button name='submit' class="button" id="button" type="Submit" value="Submit" onclick="return check()">Submit</button>
    </form>


</body>
</html>