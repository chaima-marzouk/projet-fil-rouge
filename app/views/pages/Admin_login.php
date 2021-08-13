<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
     <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/login.css">
     <link rel="stylesheet" href="login.css">
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form  action="<?php echo URLROOT ?>/UserController/login" method="post" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <?php if (isset($data['email_err'])) {echo $data['email_err'];} ?>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="email" placeholder="email" />
              <!--  -->
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
              <!--  -->
            </div>
            <input type="submit" value="Login" class="btn solid" />
          </form>







          
          <form action="<?php echo URLROOT ?>/UserController/signup" method="post" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="full_name" placeholder="full name" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email"  name="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <div class="input-field">
             <i class="fas fa-city"></i>
              <input type="text" name="ville" placeholder="city"/>
            </div>
            <div class="input-field">
            <i class="fas fa-tint"></i>
              <input type="text" name="g_sang" placeholder="Blood G"/>
            </div>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="text" name="phone" placeholder="Phone number"/>
            </div>
            <div class="input-field">
             <i class="fas fa-address-card"></i>
              <input type="text" name="cin" placeholder="cin"/>
            </div>
            <input type="submit"  name="signup" class="btn" value="Sign up"/>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script>
        const sign_in_btn = document.querySelector("#sign-in-btn");
        const sign_up_btn = document.querySelector("#sign-up-btn");
        const container = document.querySelector(".container");

        sign_up_btn.addEventListener("click", () => {
        container.classList.add("sign-up-mode");
        });

        sign_in_btn.addEventListener("click", () => {
        container.classList.remove("sign-up-mode");
        });
    </script>
  </body>
</html>

   
id_user	full_name	email	password	g_sang	phone	ville	cin	