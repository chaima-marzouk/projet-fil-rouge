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
     <!-- stylesheet -->
     <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/styleHome.css">
     <!-- bootstrap -->
     <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
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
 
        

        <ul class="nav-list">
            <div class="menu-icons close">
                <i class="icon ion-md-close"></i>
            </div>
            <li class="nav-items">
                <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-items">
                <a href="#" class="nav-link">About</a>
            </li>
            <li class="nav-items">
                <a href="#" class="nav-link">Donate</a>
            </li>
            <li class="nav-items">
                <a href="#" class="nav-link">Post</a>
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
                <!-- grid item n 1 -->
                <div class="activities-grid-item star-gazing">
                <div class="card text-center" style="width: 18rem; margin-left: 90px; margin-top: 100px;">
                <img src="<?=URLROOT?>/img/ask1.png" class="card-img-top" style="width: 100%; " alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-outline-info">Get your answer</button>
                    </div>
                </div>

                     <!-- grid item n 2 -->
                <div class="activities-grid-item star-gazing">
                <div class="card text-center" style="width: 18rem; margin-left: 90px; margin-top: 43px;">
                <img src="<?=URLROOT?>/img/ask2.jpg" class="card-img-top" style="width: 100%; " alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-outline-info">Get your answer</button>
                    </div>
                </div>
                     <!-- grid item n 3 -->
                <div class="activities-grid-item star-gazing">
                <div class="card text-center" style="width: 18rem; margin-left: 90px; margin-top: 43px;">
                <img src="<?=URLROOT?>/img/ask3.jpg" class="card-img-top" style="width: 100%; " alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-outline-info">Get your answer</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tests">
        <div class="container2">
            <div class="test">
                <div class="test-text-box">
                    <p>Donors List</p>
                    <ion-icon name="add-circle-outline"></ion-icon>
                </div>
                <div class="test-donor">
                    <img src="<?=URLROOT?>/img/donor.png" alt="">
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
            height: 8.7rem;
            background-size:cover;
            background: url(<?=URLROOT?>/img/wave-small.png) center no-repeat 
            
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
                height: 4.7rem;
                background-size: cover;
                background-image: url(<?=URLROOT?>/img/wave-small-reversed.png)
            }
    </style>

</body>
</html>