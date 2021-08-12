


<?php
   require APPROOT . '/views/inc/header.php';
?>




    <section class="position">
        <h1 style=" margin-bottom:20px;">Contact Us !!</h1>
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6795.880091047688!2d-8.067289571502688!3d31.608102561049407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1627252063324!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>

    <section class="contact">
        <div class="row">
            <div class="contact-col" style="margin-top :50px;">
                <div>
                    <i class="fa fa-map-marker" style="font-size: 28px; margin: 10px;"></i>
                    <span>
                    <h5>Morroco,Youssoufia</h5>
                    <p>Youcode</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone" style="font-size: 28px; margin: 10px;"></i>
                    <span>
                    <h5>Phone: +00 151515</h5>
                    <p>8h/21h</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope" style="font-size: 28px; margin: 10px;"></i> 
                    <span> 
                    <h5>Email: mail@mail.com</h5>
                    <p>24/24</p>
                    </span>
                </div>
            </div>
            <div class="contact-col">
             <form action="<?php echo URLROOT;?>/UserController/email" method="post">
                <input type="text" name="name" placeholder="Enter your name please" required>
                <input type="email" name="email" placeholder="Enter your email please" required>
                <input type="text" name="subject" placeholder="Enter your name subject" required>
                <textarea rows="8" name="message" placeholder="Message" required></textarea>
                <button type="submit" name="send" class="contact-button">Send</button>
            </form>
            </div>
        </div>
    </section>

<?php
   require APPROOT . '/views/inc/footer.php';
?>



</body>
</html>