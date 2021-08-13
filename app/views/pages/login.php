<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/loginn.css">
    <title>Login</title>
</head>
<body>
    <div class="login-form">
        <div class="container">
            <div class="main">
                <div class="content">
                    <h2>Login</h2>
                     <form  action="<?php echo URLROOT ?>/UserController/  login" method="post" class="">  
                        <input type="text" name="email" placeholder="email"  required autofocus=""/>
                        <input type="password" name="password" placeholder="Password" required autofocus=""/>
                        <button type="submit"  class="btn" />login</button>
                    </form>
                    <p class="account">Don't have an account ? <a href="<?php echo URLROOT;?>/UserController/register">Register</a></p>
                    <p class="account "> <a  style="color: red;" href="<?php echo URLROOT;?>/UserController/Adminlog">Admin</a></p>
                </div>

                <div class="form-img">
                    <img src="<?php echo URLROOT ;?>/img/auth.png" alt="Authentification image">
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>