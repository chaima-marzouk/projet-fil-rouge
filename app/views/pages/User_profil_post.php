<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/profil.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/styleHome.css">
    <!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/stylePost.css">
    <!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->
    <title>User page</title>
</head>
<body>


<div class="sidebar">
    <header><img src="<?php echo URLROOT ; ?>/img/logob.png" alt="logo"></header>
     <ul>
     <button  type="button" class="btn text-white m-2" style="background-color: #0D4E6D;" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Add new post</button>
        <li><a href="<?php echo URLROOT ; ?>/UserController/">DONATE</a></li>
        <li><a href="<?php echo URLROOT ; ?>/UserController/profil">Profil</a></li>   
    </ul> 
</div> 

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                   <h5 class="modal-title" id="exampleModalLabel">New post</h5>
                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                                 <div class="modal-body">
                                           <!------ form add  ------>
                            <form action="<?php echo URLROOT ;?>/UserController/insert" method="post">
                            <div class="mb-3">
                                <label for="titre" name="titre" class="col-form-label">Tittre:</label>
                                <input type="text" name="titre" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label for="description" class="col-form-label">Description:</label>
                                <input class="form-control" name="description" >
                            </div>
                            <div class="mb-3">
                                <label for="contenu"  class="col-form-label">Contenu:</label>
                                <input class="form-control" name="contenu" id="message-text">
                            </div>
                            <button
                                type="submit" value="submit" name="submit_add" style="margin-top: 20px;"
                                class="btn btn-outline-warning btn-rounded"
                                data-mdb-ripple-color="dark"
                                >submit</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>



    <nav class="navbar navbar-expand-lg navbar-light bg-light" style=" margin-left: 249px; margin-top: 20px; margin-bottom: 30px;">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" style="margin-left:91px;" aria-current="page" href="<?php echo URLROOT ; ?>/UserController/index">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="<?php echo URLROOT;?>/UserController/Post">posts</a></li>
                  <li><a class="dropdown-item" href="<?php echo URLROOT ; ?>/UserController/rendezvous">Rendez-vous</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
            </form>
          </div>
        </div>
    </nav>
 
    <section class="post-section">
        <div class="blog_post">
            <div class="blog-post_img">
                <img src="<?php echo URLROOT;?>/img/no.png " alt="post image">
            </div>
            <div class="blog-post_info">
                <div class="blog-post_date">
                    <span>B-</span>
                    <span>Mercredi 28 juillet 2021</span>
                    <span>A Agadir/Ait melloul</span>
                </div>
                <h1 class="blog-post_title">Need help</h1>
                <p class="blog-post_details">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate a quod atque numquam neque voluptates consequatur nulla, eos, sed esse quibusdam, suscipit ratione? Dolore nulla facere iusto. Pariatur, placeat quidem!
                </p>
                <a href="" class="">Edit</a>
                <a href="" class="">Delete</a>
            </div>   
        </div>
    </section>

     <!-- post#2 -->


     <style>
          .blog-post{
                width: 100%;
                max-width: 98rem;
                padding: 5rem;
                background-color: #fff;
                box-shadow: 0 1.4rem 8rem rgba(0, 0, 0, 2);
                display: flex;
                align-items: center;
                border-radius: .8rem;
            }
            .post-section {
                width: 55%;
                height: 63vh;
                margin: auto;
                /* display: flex; */
                align-items: center;
                background-color: #eee;
                padding: 0 1.5rem;
                background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
            }


     </style>









      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>