<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
     <!--Ion Icons-->
     <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!--Google Fonts-->
     <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
     <!-- stylesheet -->
     <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/styleHome.css">
     <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/style.scss">
     <!-- Bootstrap -->
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
 
        <ul class="nav-list">
            <div class="menu-icons close">
                <i class="icon ion-md-close"></i>
            </div>
            <li class="nav-items">
                <a href="<?php echo URLROOT;?>/UserController/index" class="nav-link" class="nav-link">Home</a>
            </li>
            <li class="nav-items">
                <a href="<?php echo URLROOT;?>/UserController/admin_signin" class="nav-link" class="nav-link">About</a>
            </li>
            <li class="nav-items">
                <a href="<?php echo URLROOT;?>/UserController/donorsliste" class="nav-link" class="nav-link">Donate</a>
            </li>
            <li class="nav-items">
                <a href="<?php echo URLROOT;?>/UserController/post" class="nav-link"class="nav-link">Post</a>
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
                    <a href="" class="btnn">Donate now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="experience-outdoors">
         <!-- <div class="container "> -->
            <div class="activities-gride">    
                <!-- grid item  -->
                <div class="activities-grid-item star-gazing">    
                </div>
            </div>
        <!-- </div> -->
    </section>

    <section class="position">
        <h1 style="margin-left: 44%; margin-bottom:20px;">Contact Us !!</h1>
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6795.880091047688!2d-8.067289571502688!3d31.608102561049407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1627252063324!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>

    <section class="contact">
        <div class="row">
            <div class="contact-col" style="margin-top :50px;">
                <div>
                    <i class="fa fa-map-marker" style="font-size: 28px; margin: 10px;"></i>
                    <span>
                    <h5>Morroco,Youssoufia</h5>
                    <p>Youcode</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone" style="font-size: 28px; margin: 10px;"></i>
                    <span>
                    <h5>Phone: +00 151515</h5>
                    <p>8h/21h</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope" style="font-size: 28px; margin: 10px;"></i> 
                    <span> 
                    <h5>Email: mail@mail.com</h5>
                    <p>24/24</p>
                    </span>
                </div>
            </div>
            <div class="contact-col">

            <form action="<?php echo URLROOT;?>/UserController/email" method="post">
                <input type="text" name="name" placeholder="Enter your name please" required>
                <input type="email" name="email" placeholder="Enter your email please" required>
                <input type="text" name="subject" placeholder="Enter your name subject" required>
                <textarea rows="8" name="message" placeholder="Message" required></textarea>
                <button type="submit" class="contact-button">Send</button>

            </form>
            </div>
        </div>

    </section>

    <section class="tests">
        <div class="container2">
            <div class="test">
                <div class="test-text-box">
                </div>       
            </div>
        </div>
    </section>
</main>


<script type="text/javascript" >
                // Function expression to select elements.
            const selectElement = (s) => document.querySelector(s);


                //Open the menu on click
            selectElement('.open').addEventListener('click', () => {
            selectElement('.nav-list').classList.add('active');
            });


                //Close the menu on click
            selectElement('.close').addEventListener('click', () => {
            selectElement('.nav-list').classList.remove('active');
            });
    </script>



<style>
        .hero{
            background:url(<?=URLROOT?>/img/testo2.jpg) fixed
        }

        .hero::before{
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 17.7rem;
            background-size:cover;
            background: url(<?=URLROOT?>/img/wave-large.png) center no-repeat 
            
        }

        .ion-md-close:before {

            color: #fafafa;
        }

        .activities-grid-item::before{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 97%; 
            background-color: #63a4ff;
            background-image: linear-gradient(315deg, #63a4ff 0%, #83eaf1 74%);
            z-index: -1;
        }

        .tests{
            width: 100%;
            height: 80vh;
            margin-top: 45px;
            background-size: cover;
            position: relative;
            background:url(<?=URLROOT?>/img/donlist.png)  center no-repeat fixed 
            
            }

            .tests::before{
                content:"";
                margin-top: -2px;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 17.7rem;
                background-size: cover;
                background-image: url(<?=URLROOT?>/img/wave-large-reversed.png)
            }

            h1{
                margin-top: 20px;
            }

        
    </style>
</body>
</html>