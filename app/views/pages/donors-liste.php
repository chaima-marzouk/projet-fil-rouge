<!-- --------header-------- -->
<?php
   require APPROOT . '/views/inc/header.php';
?>
<!-- --------header-------- -->

    <section class="experience-outdoors">  
            <div class="activities-gride">             
                <div class="activities-grid-item star-gazing">    
                </div>
            </div>    
    </section>

    <section>
        <p class="table-title">Be the hero today<span>!</span> </p>
        <p class="table-title2">Add your name to the donors list 
            <a href=""><i class="icon ion-md-add" style="color:black;"></i></a>
        </p>
        <div style="overflow-x:auto;">
            <table>
                <tr>
                <th scope="col">Full name</th>
                <th scope="col">Adress</th>
                <th scope="col">Blood G.</th>
                <th scope="col">Phone nember</th>
                <th scope="col">age</th>
                </tr>
                    <?php foreach ($data["donors"] as $row) :?>
                <tr>
                <td><?php echo $row->full_name ;?></td>
                        <td><?php echo $row->adress ;?></td>
                        <td><?php echo $row->blood_group ;?></td>
                        <td><?php echo $row->phone ;?></td>
                        <td><?php echo $row->age ;?></td>
                </tr>
                <?php endforeach ?>

            </table>
    </div>
    </section>
    <section class="form-section">
        <div class="form-liste">
            <form action="<?php echo URLROOT?>/UserController/insert" method="post">
                <label for="fname">Full Name</label>
                <input type="text" id="fname" name="full_name" placeholder="Your name..">

                <label for="CND">CDN</label>
                <input type="text" id="cnd" name="cdn" placeholder="Your identity card..">

                <label for="adress">Adress</label>
                <input type="text" name="adress" placeholder="Your adress..">
                <select id="city" name="adress">
                <option value="agadir">Agadir</option>
                <option value="casa">Casa</option>
                <option value="Youssoufia">Youssoufia</option>
                </select>


                <label for="Blood G.">Blood G.</label>
                <select id="Blood G." name="blood_group">
                <option value="AB">AB</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                </select>


                <label for="pn">Phone number</label>
                <input type="text" id="cnd" name="phone" placeholder="Your phone number..">

                <label for="age">Age</label>
                <input type="text" id="age" name="age" placeholder="Your phone age..">

                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </section>

   





    <!-- -------JS------- -->
    <script type="text/javascript" src="public/js/app.js">
    </script>
    <!-- -------JS------- -->



    <!-- -------footer------- -->
    <?php
   require APPROOT . '/views/inc/footer.php';
   ?>
    <!-- -------footer------- -->


    <style>
          span{
            background: rgb(107,188,226);
            background: linear-gradient(0deg, rgba(107,188,226,1) 43%, rgba(255,48,40,1) 100%);
            }
    </style>
</body>
</html>