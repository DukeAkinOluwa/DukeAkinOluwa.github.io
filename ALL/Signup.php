<?php

session_start();

    include("Connection.php");
    include("Functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

        $First_Name = $_POST["First_Name"];
        $Last_Name = $_POST["Last_Name"];
        $Email = $_POST["Email"];
        $Phone_Number = $_POST["Phone_Number"];
        $Username = $_POST["Username"];
        $Password = $_POST["Password"];
        $Id = random_num(30);

        // SQL statement to add user data to database
        if($con->connect_error){
            die('Connection Failed: '.$con->connect_error);
        }else{
            $stmt = $con->prepare("insert into user_data(Id, First_Name, Last_Name, Email, Phone_Number, Username, Password)
            values(?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("isssiss",$Id, $First_Name, $Last_Name, $Email, $Phone_Number, $Username, $Password);
            $stmt->execute();
            echo "Registeration Succesful";
            $stmt->close();
            $con->close();

            header("Location: login_Page.php");
            die;
        }


        $Data = [$Id, $First_Name, $Last_Name, $Email, $Phone_Number, $Username, $Password];

        $f = fopen("user_data.csv", "a");
        fputcsv($f, $Data);
        fclose($f);
    }
?>
<html>
    <head>
        <title>Form Submission</title>
    </head>
    <body>
    </body>
</html>