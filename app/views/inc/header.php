<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
     <!--Ion Icons-->
     <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!--Google Fonts-->
     <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
     <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
     <!-- stylesheet -->
     <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/styleHome.css">
     <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/style.scss">
     <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/stylePost.css">
     <!-- bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
     <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <div class="container">
            <nav style="display: flex;">
                <div class="nav-barand">
                    <img src="<?php echo URLROOT; ?>/img/logob.png" alt="LOGO">
                </div>
             
                <div class="menu-icons open">
                    <i class="icon ion-md-menu" style="margin-right: 30px;"></i>
                </div>
            </nav>

        </div>

        <?php if(isset($_SESSION['user_id'])): ?>
            <style>
                .btnn{
                    display: none;
                }
            </style>

        <?php endif; ?>


 
        

        <ul class="nav-list">
            <div class="menu-icons close">
                <i class="icon ion-md-close"></i>
            </div>
            <li class="nav-items">
                <a href="<?php echo URLROOT;?>/UserController/index" class="nav-link" class="nav-link">Home</a>
            </li>
            <li class="nav-items">
                <a href="<?php echo URLROOT;?>/UserController/donorsliste" class="nav-link" class="nav-link">Donate</a>
            </li>
            <li class="nav-items">
                <a href="<?php echo URLROOT;?>/PostController/index" class="nav-link"class="nav-link">Post</a>
            </li>
            <li class="nav-items">
                <a href="<?php echo URLROOT;?>/UserController/admin_signin" class="nav-link">login</a>
            </li>
            <li class="nav-items">
                <a href="<?php echo URLROOT;?>/UserController/contactUs" class="nav-link">Contact us</a>
            </li>
            
        </ul>
    </header>

            <main>
            <section class="hero">
                <div class="container">
                    <div class="main-message">
                        <h3>#Give blood</h3>
                        <h1>DONATE BLOOD | SAVE A LIFE</h1>
                        <p>
                        Sometimes we tend to forget how easy can be to help another human been but this page manages to remind us. By highlighting the simplicity of the process, the slogan has also the merit to comfort and convince people that are afraid of donating blood to give it a try
                        </p>
                        <div class="cta">
                            <a href="<?php echo URLROOT?>/UserController/admin_signin" class="btnn">SIGNIN</a>
                        </div>
                        <div class="cta">
                            <a href="<?php echo URLROOT?>/UserController/admin_signin" class="btnnn">Profil</a>
                        </div>
                    </div>
                </div>
            </section>
            

        






    


    







   