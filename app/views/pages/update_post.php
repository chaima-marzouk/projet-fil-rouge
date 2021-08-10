<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/profil.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/styleHome.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/css/stylePost.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <title>User page</title>
</head>
<body>


<div class="sidebar">
    <header><img src="<?php echo URLROOT ; ?>/img/logob.png" alt="logo"></header>
</div> 

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                        <!------ form add episode ------>
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
                                >submit
                            </button>
                        </form>
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
            
          </div>
        </div>
    </nav>



  
        
        <section class=>
            <div class="blog_post">
                <div class="blog-post_img">
                    <img src="<?php echo URLROOT;?>/img/no.png " alt="post image">
                </div>
                <div class="blog-post_info">
                    <div class="blog-post_date">
                        <form action="<?php echo URLROOT; ?>/PostController/update/<?php echo $data['post']->id ?>" method="Post">
                            <input type="text" name="email" value="<?php echo $data['post']->email ?>">
                            <input type="text" name="adress" value="<?php echo $data['post']->adress ?>">
                            <input type="text" name="phone" value="<?php echo $data['post']->phone ?>">
                            <input type="text" name="fullname" value="<?php echo $data['post']->fullname ?>">
                            <input type="text" name="created_at" value="<?php echo $data['post']->created_at ?>">
                            <textarea type="text" name="details" value=" <?php echo $data['post']->details ?>"></textarea><br>
                            <button class="blog-post_cta m-3" type="submit"> Update</button>
                        </form>
                </div>  
    </section>
                     
 









      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>