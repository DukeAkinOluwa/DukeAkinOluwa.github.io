<html>
    <head>
        <title>Form Submission</title>
        <link rel="icon" href="http://127.0.0.1:3000/c:/xampp/htdocs/Simple Login Page/ALL/Images/Icon.png">
    </head>
    <body>
    <?php

    session_start();

        include("Connection.php");
        include("functions.php");

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {

            $Username = $_POST["Username"];
            $Password = $_POST["Password"];

            // Select items to check if account is valiid
            if($con->connect_error){
                die('Connection Failed: '.$con->connect_error);
            }else{
                $stmt = "SELECT * FROM user_data WHERE Username = '$Username' limit 1";
                $result = mysqli_query($con, $stmt);
                $con->close();


                // Check if username and password are correct
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['Password'] === $Password){

                        $_SESSION['Id'] = $user_data['Id'];

                        // Redirect to Homepage
                        header("Location: Homepage.php");
                        die;
                    }else{
                        echo "Wrong Username Or Password";
                    }
                }else{
                    echo "Wrong Or Password Username";
                }
            }
        }
    ?>
    </body>
</html>