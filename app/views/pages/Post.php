<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post page</title>
     <!--Ion Icons-->
     <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!--Google Fonts-->
     <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
     <!-- stylesheet -->
     <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/styleHome.css">
     <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/stylePost.css">
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
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
                <a href="<?php echo URLROOT;?>/UserController/about" class="nav-link" class="nav-link">About</a>
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
            <div class="activities-gride">    
                <!-- grid item  -->
                <div class="activities-grid-item star-gazing">    
                </div>
            </div>
    </section>

    <section class="Achawahada">
        <h1>Posts</h1>
        <?php foreach($data['posts'] as $post):?>
        <section class="post-section">
            <div class="blog_post">
                <div class="blog-post_img">
                    <img src="<?php echo URLROOT;?>/img/no.png " alt="post image">
                </div>
                <div class="blog-post_info">
                    <div class="blog-post_date">
                    <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == $post->user_id): ?>
                    

                        <div class="btn-group">
                        <button type="button" class="btn btn-outline-danger dropdown-toggle" style="float: right" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            More
                        </button>
                            <div class="dropdown-menu bg_grey dropdown-menu-right" style="margin-left: 335%; ">
                                <a href="<?php echo URLROOT . "/PostController/update/" . $post->id ?>">
                                            <!-- DELETE BUTTON -->
                                        <div class="dropdown-item">          
                                            <input name="update" value="Update"  type="submit" style="background:green;"></a>
                                            </div>
                                            <!-- DELETE BUTTON -->
                                        <form class="dropdown-item" action="<?php echo URLROOT . "/PostController/delete/" . $post->id ?>" method="POST">
                                            <input type="submit" name="delete" value="Delete" style="background:red;" >
                                        </form>
                            </div>
                        </div>
                    
                     <?php endif; ?>
                        <span><?php echo $post->email ?></span>
                        <span><?php echo $post->adress ?></span>
                        <span> <?php echo 'Creat at :' . date('F j h:m' , strtotime($post->created_at)) ?></span>
                        <span>Phone number : <?php echo $post->phone ?></span>
                    </div>
                        <h1 class="blog-post_title"><?php echo $post->fullname ?></h1>
                        <p class="blog-post_details">
                        <?php echo $post->details ?>
                        </p>
                        <a href="" class="blog-post_cta">Donate</a>
                    </div>  
                </div>  
    </section>
                     <?php endforeach ; ?>
   
        
    </section> 
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

            .blog-post{
                width: 100%;
                max-width: 98rem;
                padding: 5rem;
                background-color: #fff;
                box-shadow: 0 1.4rem 8rem rgba(0, 0, 0, 2);
                display: flex;
                align-items: center;
                border-radius: .8rem;
            } .blog-post{
                width: 100%;
                max-width: 98rem;
                padding: 5rem;
                background-color: #fff;
                box-shadow: 0 1.4rem 8rem rgba(0, 0, 0, 2);
                display: flex;
                align-items: center;
                border-radius: .8rem;
            }

        
    </style>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>