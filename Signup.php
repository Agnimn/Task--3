<?php include('server.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <title>Sign-up Page</title>
    <link rel="stylesheet" href="Signup.css">
</head>
<body>
    <header>
        <div class="hdr">
            <div class="icon">
                <div class="img">

                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="box">
            <div class="sign-up">
                <h2>Sign Up to start <br>listening</h2>
    
            </div>
            <br>
            <br>
            <form class="e-adress" method="post" action="signup.php">
                <?php include('errors.php');?>
                <label required type="email"  for="username" id="text" name="email" >Email address</label><br><br>
                <input type="text" form="Email" id="Email" placeholder="name@domain.com">
                <br>
                <br>
                <div class="passw">
                    <label for="pass"  name="cpassword" >Create Password</label><br><br>
                    <input type="password" placeholder="Password">
                </div>
                <br>
                <div class="passw">
                    <label for="pass"  name="repassword" >Re-Enter Password</label><br><br>
                    <input type="password" placeholder="Password">
                </div>
                <br>
                <div class="phn-num">
                    <div class="num">
                        <a href="#">Use Phone number instead.</a>
                    </div>
                </div>
                <br>
                <button class="btn" type="submit" >
                    <a href="login.php" style="background-color: #1ed760; text-decoration:none">Sign Up
                       
                </a>
                </button>
                <br>
                <br>
                <div class="or">
                    <hr>
                    <br>
                    <div class="txt">
                        Or
                    </div>
                </div>
                <br>

            </form>
            <div class="other">
                <div class="sign-ggl">
                    <a href="#">Sign Up with Google</a>
                </div>
                <div class="sign-ggl">
                    <a href="#">Sign Up with Facebook</a>
                </div>
                <div class="sign-ggl">
                    <a href="#">Sign Up with Apple</a>
                </div>
            </div>
            

        </div>
        <div class="clicl-here">
            <div class="had-account">
                <p>Already have an account?</p>
        
            </div>
            <div class="login">
                <a href="login.php" target="_blank">Log in here.</a>
        
            </div>
        
        </div>

    </main>

    
    
        
       
    
    
</body>
</html>