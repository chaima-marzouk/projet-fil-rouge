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
    <!-- <input type="submit" value="Add new admin"> -->
    
     <ul>
    <button type="button" class="btn btn-light">Add new Admin</button>
        <li><a href="#">New post</a></li>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
           aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="mb-3">
                    <label for="message-text" class="col-form-label">Message:</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
              </div>
            </div>
          </div>
        </div>
        <li><a href="<?php echo URLROOT ; ?>/UserController/test">Pages</a></li>
        <li><a href="#">Profil</a></li> 
         <li><a href="#">test2</a></li> 
        
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
                  <li><a class="dropdown-item" href="#">Redez-vous</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <span><i class="bi bi-chat-dots-fill"></i></span> 
            </ul>
              
              <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
              </svg>
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