<!-- Change email type to email and add required to all-->

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="=UTF-8">
        <title>Account Registeration</title>
        <link rel="stylesheet" href="All_Page.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="icon" href="http://127.0.0.1:3000/c:/xampp/htdocs/Simple Login Page/ALL/Images/Icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <input type="checkbox" id="flip">
            <div class="cover">
                <div class="front">
                    <img src="Images/FrontCover.jpg" alt="">
                    <div class="text">
                        <span class="text-1">Every new friend is a <br> new adventure</span>
                        <span class="text-2">Let's get connected</span>
                    </div>
                </div>
                <div class="back">
                    <img class ="backimage" src="Images/BackCover.jpg" alt="">
                    <div class="text">
                        <span class="text-1">Complete miles of journey <br> with one step</span>
                        <span class="text-2">Let's get started</span>
                    </div>
                </div>
            </div>
            <form action="Signup.php" method="post">
                <div class="form-content">
                    <div class="login-form">
                        <div class="title">Signup</div>
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" name="First_Name" placeholder="Enter Your First Name" maxlength="20" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" name="Last_Name" placeholder="Enter Your Last Name" maxlength="20" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="email" name="Email" placeholder="Enter Your Email" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-phone"></i>
                                <input type="tel" name="Phone_Number" placeholder="Enter Your Phone Number" minlength="11" maxlength="11" required>
                            </div>
                            <div class="button input-box">
                                <label for="flip" style="color: white;">Next</label>
                            </div>
                            <div class="text login-text">Already Have An Account? <a href="http://127.0.0.1/simple%20login%20page/ALL/Login_Page.php">Login</a></div>
                        </div>
                    </div>
                    <div class="signup-form">
                        <div class="title">Signup</div>
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-user-tie"></i>
                                <input type="text" name="Username" placeholder="Create A Username" maxlength="20" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="Password" placeholder="Create A Password" minlength="8" maxlength="200" required>
                            </div>
                            <div class="text TC">By clicking the Sign Up button, you agree to our <a href="#" class="TC">Terms And Conditions</a> and <a href="#" class="TC">Privacy Policy</a></p></div>
                            <div class="button input-box">
                                <input type="submit" value="Sign Up">
                            </div>
                            <div class="text sign-up-text"><label for="flip">Previous Page</label></div>
                            <div class="text sign-up-text">Already Have An Account? <a href="http://127.0.0.1/simple%20login%20page/ALL/Login_Page.php">Login</a></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>