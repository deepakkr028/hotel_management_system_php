<?php 
  require("include/connection.php");
  require("include/restrictadmin.php");
?>
<!DOCTYPE html>
<html lang="en">

     <?php           
          require("include/header.php");                 
          
     ?>

  <body>
        <?php           
            require("include/navbar.php"); 
      ?> 
          <div class="container" style="background-color:whitesmoke;margin-top:10px; margin-bottom: 10px; border-radius: 15px;">
                <form  action="room.php" method="POST">
                        <table class="table-responsive">
                                  <tr>
                                    <H2>ROOM DETAILS</H2>
                                                                
                                  </tr>

                              <tr>
                                <td> ROOM</td>
                                <td > <input type="text" name="rno" placeholder="Enter Room No" title="Enter Room No" required> </td>
                              </tr>
                                <tr>
                                  <td>ROOM TYPE </td>
                                  <td> <input type="text" name="type" placeholder="Enter Room Type" title="Enter Room Type"></td>
                              </tr>

                            <tr>
                              <td>ROOM PRICE</td>
                              <td><input type="text"  name="price" placeholder="Enter Room Price" title="Enter Room Price"></td>
                            </tr>                                                        
                        </table>
                      <!--endtable-->                    
                  <center>  <button type="submit" class="btn btn-primary btn-lg" name="submit" style="margin-bottom: 20px;">SUBMIT</button>
                  </center>
              </form>					
              <?php
                  if(isset($_POST['submit']))
                  {
                    $rno=$_POST['rno'];
                    $type=$_POST['type'];
                    $p=$_POST['price'];
                    if(mysqli_query($a,"insert into room(rno,type,price,status) values('$rno','$type','$p','unbook')"))
                    {
                      echo"<script>window.alert(\"ROOM ADDED SUCESSFULLY\");</script>";
                        header('refresh:0 url=ROOM.php');
                    
                    }
                    else
                    {
                      echo"<script>window.alert(\"ROOM CANNOT ADDED , PLEASE TRY AGIN LATER\");</script>";
                        header('refresh:0 url=ROOM.php');
                    
                    }
                  }

              ?>
        </div>
    
        <?php           
            require("include/footer.php");                 
            
      ?>
  
  </body>
</html>