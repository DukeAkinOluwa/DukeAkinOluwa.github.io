<?php

session_start();

    include("Connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="=UTF-8">
        <title>Homepage</title>
        <link rel="stylesheet" href="Login_Signup_Page.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="icon" href="http://127.0.0.1:3000/c:/xampp/htdocs/Simple Login Page/ALL/Images/Icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
    </head>
    <body>
        
        
    </body>
</html>
<!-- Hello ?php echo $user_data['First_Name'];?> &#44;&nbsp; ?php echo $user_data['Last_Name'];?> -->
<!-- <form action="Logout.php" method="post">
            <input type="submit" value="Logout">
        </form> -->