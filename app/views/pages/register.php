<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/loginn.css">
    <title>Signup</title>
</head>
<body>
    <div class="login-form">
        <div class="container">
            <div class="main">
                <div class="content">
                    <h2>Signup</h2>
                     <form action="<?php echo URLROOT ?>/UserController/signup" method="post" class="">
                        <input type="text" name="full_name" placeholder="full name"required autofocus=""  />
                        <input type="text" name="email" placeholder="email"  required autofocus=""/>
                        <input type="password" name="password" placeholder="Password" required autofocus=""/>
                        <input type="text" name="ville" placeholder="city" required autofocus=""/>
                        <input type="text" name="g_sang" placeholder="Blood G" required autofocus=""/>
                        <input type="text" name="phone" placeholder="Phone number" required autofocus=""/>
                        <input type="text" name="cin" placeholder="cin" required autofocus=""/>
                        <button type="submit" name="signup"  class="btn">register</button>
                    </form>
                </div>

                <div class="form-img">
                    <img src="<?php echo URLROOT ;?>/img/register.png" alt="Authentification image">
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>