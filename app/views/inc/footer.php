


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

            .form-section{
                background-size: cover;
                background-image: fixed ;
                width: 100%;
                position: relative;
                background: url(<?=URLROOT?>/img/testo2.jpg) fixed center
               
               
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