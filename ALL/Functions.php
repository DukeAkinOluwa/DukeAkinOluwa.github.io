<?php

function check_login($con)
{
    if(isset($_SESSION['Id']))
    {
        $id = $_SESSION['Id'];
        $query = "SELECT * FROM user_data WHERE Id = '$id' limit 1";

        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    // Redirect To Login
    header("Location: login_Page.php");
    die;

}

function random_num($length)
{


    $text = "";
    if($length < 9)
    {
        $length = 9;
    }

    $len = rand(8,$length);

    for ($i=0; $i < $len; $i++) {
        #code... 

        $text .= rand(0,9);
    }

    return $text;




}


?>