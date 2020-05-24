

<!DOCTYPE html>

<html>
    <head>
        <title>WEB DESIGN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="cont">
            <div class="form sign-in ">
                <form action="validation.php" method="post">
                <h2>Sign In</h2>
                 <label>
                        <span>Username</span>
                        <input type="text" name="user" class="form-control" required>
                    </label>
                 <label>
                    <span>Password</span>
                    <input type="password" name="password" class="form-control" required>
                </label>
                <button class="submit" type="submit" name="login">Sign In</button>
                </form>
                
               
                <div class="social-media"><ul>
                        <li><img src="facebook.png"></li>
                         <li><img src="twitter.png"></li>
                          <li><img src="instagram-sketched.png"></li>
                           <li><img src="linkedin.png"></li>
                    </ul>
                </div>
            </div>
            
            
            <div class="sub-cont">
                <div class="img">
                    <div class="img-text m-up">
                        <h2> New here?</h2>
                        <p>Sign up and discover great amount of new opportunities!</p>
                    </div>
                     <div class="img-text m-in">
                        <h2> One of us?</h2>
                        <p>if you already has an account,just sign in.We missed you!</p>
                    </div>
                    <div class="img-btn">
                        <span class="m-up">Sign Up</span>
                         <span class="m-in">Sign In</span>
                    </div>
                </div>
                <div  class="form sign-up"> 
                       <form action="registration.php" method="post">
                           
                    <h2>Sign Up</h2>
                    <label>
                        <span>Username</span>
                        <input type="text" name="user" class="form-control" required>
                    </label>
                     <label>
                        <span>Email</span>
                        <input  type="email" name="email" class="form-control" required>
                    </label>
                    <label>
                        <span>Password</span>
                        <input type="password" name="password" class="form-control" required>
                    </label>
                   
                    <button type="submit" class="submit">Sign Up Now</button>
                       </form>
            </div>
            </div>
        </div>
        <script type="text/javascript" src="script.js"></script>
    </body>
</html>


