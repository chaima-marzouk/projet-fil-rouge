        
        <?php var_dump($data['comment'][2] );?>
        

             <!-- --------header-------- -->
        <?php
        require APPROOT . '/views/inc/header.php';
        ?>
        <!-- --------header-------- -->

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
                        <!-- <a href="" class="blog-post_cta">Donate</a> -->
                        <form action="" class="comment-form">
                            <input type="text" placeholder="add comment to donate">
                            <button>Add</button>
                        </form>

                        <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == $post->user_id && $post->id ==  $data['comment'][0]->id_post ): ?>

                       <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                        Show all comments
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">My comments</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <!-- <?php foreach($data['comment'][3]->{"comment"} as $comments):?> -->

                                <div>
                                <h1>name</h1>
                                <span><?php echo( $data['comment'][3]->{"comment"})?></span>
                            </div>
                            <!-- <div>
                                <h1>name</h1>
                                <span>Comment Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quibusdam ad dolorem nisi illum, quam cumque quas dolor, officia optio eaque quisquam dolore ipsa quis rerum ipsam ratione nostrum voluptatibus.</span>
                            </div>
                            <div>
                                <h1>name</h1>
                                <span>Comment Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quibusdam ad dolorem nisi illum, quam cumque quas dolor, officia optio eaque quisquam dolore ipsa quis rerum ipsam ratione nostrum voluptatibus.</span>
                            </div> -->
                            <!-- <?php endforeach ; ?> -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <?php endif; ?>
                        
           
                </div>  
    </section>
                     <?php endforeach ; ?>
   
        


 <!-- -------JS------- -->
 <script type="text/javascript" src="public/js/app.js"></script>
    <!-- -------JS------- -->



    <!-- -------footer------- -->
    <?php
   require APPROOT . '/views/inc/footer.php';
   ?>
    <!-- -------footer------- -->


   
</body>
</html>