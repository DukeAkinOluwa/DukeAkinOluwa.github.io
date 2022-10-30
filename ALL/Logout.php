<?php

session_start();
if(isset($_SESSION['Id']))
{
    unset($_SESSION['Id']);
};

header("location: Login_Page.php")

?>