<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<div class="container">
    <div class="title">LogIn</div>
    <form method="post" action="../Controller/submit_log_in.php">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Email</span>
                <input type="text" name="email" placeholder="Enter Your email" required>
            </div>
            <div class="input-box">
                <span class="details">Password</span>
                <input type="password" name="password" placeholder="Enter Your password" required>
            </div>
        </div>
              
        <div class="button">
            <input type="submit" name="sign_in" value = "Sign in ">
        </div>

        <div class="text sign-up-text">Don't have an account? <a
                        href="signup.php">SIGN UP</a></label></div>
    </form>


</div>
</body>
</html>