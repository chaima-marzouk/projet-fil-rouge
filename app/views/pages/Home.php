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

    <section class="hero" style=" background-image:url(<?=URLROOT?>/img/testo.jpg);">
        
        <div class="container">
            <div class="main-message">
                <h3>test</h3>
                <h1>testng if that works or not</h1>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, alias, eius quae sint nesciunt animi nulla blanditiis veritatis distinctio maxime cumque nemo corporis, recusandae rem magnam aspernatur molestiae voluptatem perferendis!
                </p>
                <div class="cta">
                    <a href="" class="btn">test now</a>
                </div>
            </div>
        </div>
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

</body>
</html>