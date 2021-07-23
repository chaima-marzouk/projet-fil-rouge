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
</head>
<body>
    <header>
        <div class="container">
            <nav>
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
                    <a href="" class="btn">Donate now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="experience-outdoors">
        <div class="container">
            <div class="tittle-hedding">
                <h3>experiance</h3>
                <h1>the test bla bla</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, autem quisquam explicabo doloremque maxime saepe ipsum quaerat perferendis architecto eaque cumque aliquid delectus ducimus. Consequuntur saepe beatae dolorum tempore libero.</p>
            </div>

            <div class="activities-gride">
                <!-- grid item n 1 -->
                <div class="activities-grid-item star-gazing">
                    <i class="icon ion-md-star"></i>
                    <h1>Test tittle</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem error eum tempore praesentium, non repellat! Atque, perferendis. Nobis fuga qui, impedit, vero ducimus fugit expedita tempore voluptatum, numquam explicabo excepturi.</p>

                     <!-- grid item n 2 -->
                <div class="activities-grid-item star-gazing">
                    <i class="icon ion-md-compass"></i>
                    <h1>Test tittle 2</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem error eum tempore praesentium, non repellat! Atque, perferendis. Nobis fuga qui, impedit, vero ducimus fugit expedita tempore voluptatum, numquam explicabo excepturi.</p>

                     <!-- grid item n 3 -->
                <div class="activities-grid-item star-gazing">
                    <i class="icon ion-md-bonfire"></i>
                    <h1>Test tittle 3</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem error eum tempore praesentium, non repellat! Atque, perferendis. Nobis fuga qui, impedit, vero ducimus fugit expedita tempore voluptatum, numquam explicabo excepturi.</p>

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
            background-image:url(<?=URLROOT?>/img/testo2.jpg)
        }

        .hero::before{
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 4.7rem;
            background-size:cover;
            background: url(<?=URLROOT?>/img/wave-small.png) center no-repeat 
            
        }

        .ion-md-close:before {
            
            color: #fafafa;
        }
    </style>

</body>
</html>