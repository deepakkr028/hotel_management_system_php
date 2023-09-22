    <?php 
          ob_start();
        require("include/connection.php");
               
        
    ?>


<!DOCTYPE html>
<html lang="en">
    <?php           
        require("include/header.php");               
        
    ?>
<body>

        <!--navbar -->

        <?php 
          
          require("include/navbar.php");
                  
              ?>
      <!--navbar end -->

      <!--jambotron-->
      <div class="jumbotron" style="background-image:url('img/garden2.jpg');">
        <div class="container">
          <div id="head" class="animated fadeInLeft">
            <h1 align="center"><b>CONTACT US</b></h1>
            </div>
            
          </div>
            
     </div> 

         <!--jambotron end-->

<!--gallery -->
    <div class="container" ">
      <div class="row">
        <div class="col-md-6" >
          <div class="feedback" style="border:red;"">
          
            <form name="comment"action="" onsubmit="return validateForm()" method="POST">
              <div class="form-group">
                <label for="nam">Name:</label>
                <input type="name" class="form-control" name="nam" required>
              </div>

                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" name="email" required>
                </div>

                <b>enter your comment:</b>
                <textarea name="comments" cols="40" rows="6" style="margin-bottom: 10px;" required>
                </textarea>
                <br>
            
              <button type="submit"  name="submit" class="btn btn-sucess" style="margin-left:40px">submit</button>


            </form>

            <?Php
                      if(isset($_POST['submit']))
                      {
                        $nam =$_POST['nam'];
                        $email =$_POST['email'];
                        $comments =$_POST['comments'];
                          
                            $sql= "INSERT INTO comment (nam,email,comments)VALUES('$nam','$email','$comments')";
                            $query= mysqli_query($a,$sql); 

                        if($query){
                          echo"<script>window.alert(\"comments add  sucessfully!\");</script>";  

                        }else{
                          echo"error:";
                        }


                      }

                    ?>



          </div>
        

        </div>

        <div class="col-md-6">
          <img class="img-fluid" src="img/g2.jpg" alt="img" style="border-radius :600px; margin: 10px 20px 30px 40px ;" >
      </div>
     </div>
    </div>

      <?php 
          require("include/footer.php");                
          
      ?>


   
</body>
</html>