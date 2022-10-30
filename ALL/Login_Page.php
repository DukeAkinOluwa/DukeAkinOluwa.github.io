<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="=UTF-8">
        <title>Login</title>
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
            <form action="Login.php" method="post">
                <div class="form-content">
                    <div class="login-form">
                        <div class="title">Login</div>
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-user-tie"></i>
                                <input type="text" placeholder="Enter Your Username" name="Username" maxlength="20" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Enter Your Password" name="Password" minlength="8" required>
                            </div>
                            <div class="text"><a href="#">Forgot Password?</a></div>
                            <div class="button input-box">
                                <input type="submit" value="Login">
                            </div>
                            <div class="text login-text"><label for="flip">Do you wanna read a poem&#63;</label><br><br>OR<br><br>Don&apos;t Have An Account&#63; <a href="http://127.0.0.1/simple%20login%20page/ALL/Signup_Page.php">Create One Now&#33;</a></div>
                        </div>
                    </div>
                    <div class="signup-form">
                        <div class="title">From My Heart</div>
                        <div class="style"><p id="p"><br>
                                A million stars up in the sky&#46;<br>
                                One shines brighter I can&apos;t deny&#46;<br>
                                A love so precious&#44; a love so true&#44;<br>
                                a love that comes from me to you&#46;<br>
                                The angels sing when you are near&#46;<br>
                                Within your arms I have nothing to fear&#46;<br>
                                You always know just what to say&#46;<br>
                                Just talking to you makes my day&#46;<br>
                                I love you&#44; honey&#44; with all of my heart&#46;<br>
                                Together forever and never to part&#46;<br>
                                </p><br>
                                <P style="font-family: 'Brush Scipt MT', cursive; text-align: right;">AkinOluwa</P>
                        </div>
                        <div class="text2"><br>Return to the <label for="flip" class="Highlight">Login Page</label></div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
