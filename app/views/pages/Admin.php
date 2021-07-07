<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <title>Blood bank</title>
</head>
<body>
<div class="sidebar">
    <header>LOGO</header>
     <ul>
        <button type="button" class="btn btn-light">Add new Admin</button>  
        <li><a href="<?php echo URLROOT ; ?>/UserController/test">Pages</a></li>
        <li><a href="<?php echo URLROOT ; ?>/UserController/profil">Profil</a></li>   
    </ul> 
</div> 
      <nav class="navbar navbar-expand-lg navbar-light bg-light" style=" margin-left: 249px; margin-top: 20px;">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" style="margin-left:91px;" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="<?php echo URLROOT;?>/UserController/Post">posts</a></li>
                  <li><a class="dropdown-item" href="<?php echo URLROOT ; ?>/UserController/rendezvous">Redez-vous</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
              
              <span class="oi oi-inbox"></span>
              <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-danger" type="submit">Search</button>
              <!-- <i class="far fa-comment-dots"></i> -->
            </form>
          </div>
        </div>
      </nav>

<table class="table table-sm" style="margin: 5% 20%;">
  <thead>
  
    <tr>
       
      <th scope="col">#</th>
      <th scope="col">Full name</th>
      <th scope="col">CND</th>
      <th scope="col">Adress</th>
      <th scope="col">Blood G.</th>
      <th scope="col">Phone nember</th>
      <th scope="col">age</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  
  <tbody>
     <?php foreach ($data["donors"] as $row) :?>
       <tr>
    
         <td><?php echo $row->id ;?></td>
       
            <td><?php echo $row->full_name ;?></td>
            <td><?php echo $row->cdn ;?></td>
            <td><?php echo $row->adress ;?></td>
            <td><?php echo $row->blood_group ;?></td>
            <td><?php echo $row->phone ;?></td>
            <td><?php echo $row->age ;?></td>
            <td><a href="<?php echo URLROOT;?>/UserController/delete?id=<?php echo $row->id;?>" button type="submit" name="delete" class="btn btn-danger">Delete</button></a></td>
      
      </tr>
    <?php endforeach ?>
   
  </tbody>
  
</table>


    






<!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>