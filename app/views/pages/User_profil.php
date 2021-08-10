<?php



if (session_status() == PHP_SESSION_NONE) {

session_start();
}

$name_session = $_SESSION['utilisateur'];

$email_session = $_SESSION['user_email'];

$password = $_SESSION['user_password'];

$id = $_SESSION['user_id'];


?>





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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <title>User page</title>
</head>
<body>


<div class="sidebar">
    <header><img src="<?php echo URLROOT ; ?>/img/logob.png" alt="logo"></header>
     <ul>
     <button  type="button" class="btn text-white bg-primary m-2"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Add new post</button>
        <li><a href=""><?php echo $name_session; ?></a></li>
        <li><a href="<?php echo URLROOT ;?>/UserController/profil">Profil</a></li>   
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
                                           <!------ form add Post ------>
                            <form action="<?php echo URLROOT ;?>/PostController/insert" method="post">
                            <!-- full name -->
                            <div class=" form-item mb-3">
                                <label for="fullname" name="fullname" class="col-form-label">Full name:</label>
                                <input  name="fullname" class="form-control">
                            </div>
                            <!-- email -->
                            <div class="mb-3">
                                <label for="email" class="col-form-label">email:</label>
                                <input class="form-control" name="email" >
                            </div>
                            <!-- adress -->
                            <div class="mb-3">
                                <label for="adress"  class="col-form-label">adress:</label>
                                <input class="form-control" name="adress" id="message-text">
                            </div>
                            <!-- phone -->
                            <div class="mb-3">
                                <label for="phone"  class="col-form-label">Phone number:</label>
                                <input class="form-control" name="phone" id="message-text">
                            </div>
                            <!-- details -->
                            <div class="mb-3">
                                <label for="details"  class="col-form-label">Details:</label>
                                <textarea class="form-control" name="details" id="message-text"></textarea>
                            </div>
                            <button
                                type="submit" value="submit" name="submit_add" style="margin-top: 20px;"
                                class="btn btn-outline-primary btn-rounded"
                                data-mdb-ripple-color="dark"
                                >Add</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>



<nav class="navbar navbar-expand-lg navbar-light bg-light" style=" margin-left: 249px; margin-top: 20px;">
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
                  
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="<?php echo URLROOT;?>/PostController/index">Posts</a></li>
                  <li><a class="dropdown-item" href="<?php echo URLROOT ; ?>/UserController/rendezvous">DONATE</a></li>
                  <li><a class="dropdown-item" href="<?php echo URLROOT ; ?>/UserController/rendezvous">Delete account</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <!-- <form action="post" action=""> -->
                  <li><a class="dropdown-item " href="<?php echo URLROOT; ?>/UserController/logout"> <button class="bg-danger text-white" type="submit" name="logout">Logout</button> </a></li>
                  <!-- </form> -->
                </ul>
                <li class="nav-item">
             <a class="nav-link active " style="" aria-current="page" href="<?php echo URLROOT ;?>/UserController/profil"> <p style="margin-left: 188px;">Welcome
             <span style="color:blue"><?php echo $name_session; ?> </span></p></a>
              </li>
              </li>  
          </div>
        </div>
      </nav>

      
      <form style="width: 58%; margin: auto;margin-top: 115px;" action="<?php echo URLROOT; ?>/UserController/update?id_user=<?php echo $id ?>" method="POST">
 <h3>Account</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" value="<?php echo $email_session; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="text" name="password" class="form-control" value="<?php echo $password; ?>" id="exampleInputPassword1">
  </div>
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">full_name</label>
    <input type="text" name="full_name" class="form-control" value="" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">ville</label>
    <input type="text" name="ville" class="form-control" value="" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">cin</label>
    <input type="text" name="cin" class="form-control" value="" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">g_sang</label>
    <input type="text"  name="g_sang" class="form-control" value="" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone</label>
    <input type="text" name="phone" class="form-control" value="" id="exampleInputPassword1">
  </div> -->
 
  <button  type="submit"  name="update" class="btn btn-primary">Edit info</button>
  
</form>











      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
