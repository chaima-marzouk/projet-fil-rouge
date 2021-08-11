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
     <!-- bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
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
                <a href="<?php echo URLROOT;?>/UserController/about" class="nav-link" class="nav-link">About</a>
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
                    </div>
                </div>
            </section>


            <section class="card_section">

                <div class="card-deck">
                    <div class="card ">
                        <img class="card-img-top" src="<?php echo URLROOT?>/img/ask1.png"  alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title text-danger">Am I Eligible to Donate Blood after Covid vaccin ?</h5>
                        <p class="card-text ">Great news: if you receive the vaccine, you can still donate blood, platelets and AB Elite plasma! Donating blood is essential to help save lives and support the efforts of those on the frontlines of the pandemic..</p>
                        <h5 class="card-title text-danger">Is donating blood safe?</h5>
                        <p class="card-text ">Absolutely. Blood donation conditions are sanitary, and needles are sterile and disposable...</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="<?php echo URLROOT?>/img/ask222.jpg"  alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title text-danger">What are the major blood types?</h5>
                        <p class="card-text">
                        <span class="text-success">O Positive </span> -> O+, A+, B+, AB+  <span class="text-danger">You can receive from:</span> O+, O-<br>
                        <span class="text-success">A Positive </span> -> A+, AB+  <span class="text-danger">You can receive from:</span>A+, A-, O+, O-<br>
                        <span class="text-success">B Positive </span> -> B+, AB+ <span class="text-danger">You can receive from:</span>B+, B-, O+, O-<br>
                        <span class="text-success">AB Positive </span> -> AB+ Only <span class="text-danger">You can receive from:</span>All Blood Types<br>
                        <span class="text-success">O Positive </span> -> O Negative <span class="text-danger">You can receive from:</span>	O-<br>
                        <span class="text-success">A Negative </span> -> A-, A+, AB-, AB+ <span class="text-danger">You can receive from:</span>A-, O-<br>
                        <span class="text-success">B Negative </span> -> B-, B+, AB-, AB+ <span class="text-danger">You can receive from:</span>B-, O-<br>
                        <span class="text-success">AB Negative </span> -> AB-, AB+ <span class="text-danger">You can receive from:</span>AB-, A-, B-, O-<br>
                         <br>

                        </p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="<?php echo URLROOT?>/img/ask3.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title text-danger">Are you eligible for blood donation?</h5>
                        <p class="card-text"> 
                        Find out about the eligibility requirements
                        to donate blood today. Learn about 
                        general health, travel, medications, 
                        tattoos, and more...</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    </div>
</section>


    <section>
    <!-- <h1 class="titre-icons">Our services</h1> -->
        <div class="test-donor" style="display: flex;">
             <div class="tooltip1">
                <a href="<?=URLROOT?>/UserController/donorsliste"><img src="<?=URLROOT?>/img/donor.png" alt=""></a>
                <span class="tooltiptext">Tooltip text</span>
             </div>

             <a href=""><img src="<?=URLROOT?>/img/blood-bag.png" alt=""></a>
             <a href=""><img src="<?=URLROOT?>/img/communicate.png"alt=""></a>
        </div>
    </section>

    <section class="tests">
       
    </section>
    


    







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
            .social-media {
                /* max-width: ; */
                display: flex;
                margin: 0 51%;
            }
            .social-icon{
                margin: 20%;
            }

            .test-donor {
                width: 82%;
                margin: auto;
                /* margin-top: -1%; */
                margin-left: 21%;
            }
    </style>

</body>
</html>