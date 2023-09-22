      <?php 
          ob_start();
        require("include/connection.php");
        $r=$_GET['room'];
        $ci=$_GET['ci'];
        $co=$_GET['co'];  
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
            <h1 align="center"><b>  BOOK YOUR ROOM NOW </b></h1>
            </div>
            
          </div>
            
     </div> 
         <!--jambotron end-->


 <!--================ About History Area  =================-->


        <div class="container" style="background-color:whitesmoke;margin-bottom: 10px; border-radius: 15px;">
              <form  action="r1.php" method="post">
                     <table class="table-responsive">

                            <?php
                              $q1="select * from room where status='unbook'";
                                $run=mysqli_query($a,$q1);
                                $row=mysqli_fetch_array($run);
                                $rno=$row['rno'];
                                $q="select * from room where status='unbook'";
                                $run=mysqli_query($a,$q);
                                $num=mysqli_num_rows($run);                              
                               /*     echo $num;   */                                                                
                                if($r<=$num)
                                {
                            ?>
                            <div class="container" style="background-color:yellow; margin-bottom: 8px; height: 50px;">
                             <MARQUEE>
                                <H1> HURRY UP! NOW , ONLY    <?php echo $num;   ?>  ROOM  AVILABLE NOW  </H1> 
                             <MARQUEE>
                          </div> 

                            <tr>
                                 <H2>ROOM BOOKING REGISTRATION</H2>                                                               
                           </tr>

                           <tr>
                            <td> Status</td>
                            <td > <input type="text" name="Status" value="AVAILABLE" disabled="disabled" title="Status" style="background-color: yellowgreen" > </td>
                            
                         </tr>
                         
                        <td>Name</td>
                        <td> <input type="text" name="name" placeholder="Enter Name" title="Name" required></td>
                        </tr>

                        <tr>
                        <td>Enter your ID Name</td>
                        <td> <input type="text"  name="idnam" placeholder="Enter ID Name" title="idnam" required></td>
                        
                        </tr>

                        <tr>
                            <td>ID Number</td>
                        <td> <input type="text"  name="idno" placeholder="Enter ID no" title="ID no" > </td>

                        
                        </tr>

                        <tr>
                            <td>City Name</td>
                            <td> <input type="text" name="city" placeholder="Enter city Name" title="city name" required> </td>
                            </tr>

                            <tr>
                                <td>District</td>
                            <td> <input type="text"name="dis" placeholder="Enter district " title="city name" > </td>
                            </tr>

                            <tr>
                                <td>State</td>
                            <td> <input type="text" name="state" placeholder="Enter State " title="State" required> </td>
                            </tr>

                            <tr>
                                <td>E-mail </td>
                            <td> <input type="text" name="email" placeholder="Enter E-mail" title="E-mail" > </td>
                            </tr>

                            <tr>
                                <td>Checkin date</td>
                                <td><input type="text" name="coin" value="<?php echo $ci;  ?> " title="Check in"></td>
                                <td>Check out</td>
                                <td><input type="text" name="coout" value=" <?php echo $co;  ?> " title="Check out"></td>
                            </tr>

                            <tr>
                        <td>Enter MEMBER</td>
                        <td> <input type="number"name="members" placeholder="Enter Members" title="Members" required> </td>
                       </tr>


                
                   </table>
                    <!--endtable-->
                    
                   <center>  <button type="submit" class="btn btn-primary btn-lg" name="submit" style="margin-bottom: 20px;"> BOOK NOW </button>
                      </center>

                    

                <?php    }
                    else
                    {
               	?>

                    <tr>
                  <td>Status</td>
                  <td><input type="text" name="Status" value="Not-AVAILABLE" disabled="disabled" title="Status"></td>
                </tr> 

              	<?php
                    }
				
				       ?>




            </form>

                <?php
                    if(isset($_POST['submit']))
                    {
                        $name=$_POST['name'];
                        $idnam=$_POST['idnam'];
                        $idno=$_POST['idno'];
                        $city=$_POST['city'];
                        $dis=$_POST['dis'];
                      $state=$_POST['state'];
                        $email=$_POST['email'];
                        $coin=$_POST['coin'];
                        $coout=$_POST['coout'];
                        $m=$_POST['members'];


                        if(mysqli_query($a,"insert into form (name,idnam,city,dis,email,state,chekin,chekout,m,idno) 
                        value('$name','$idnam','$city','$dis','$email','$state','$coin','$coout','$m','$idno')"))
                        {
                          mysqli_query($a,"update room set status='Book' where rno=$rno");

                          echo"<script>window.alert(\"ROOM BOOKING REGISTRATION COMPLETED  (THANKS FOR ROOM BOOKING)\");</script>";
                        header('refresh:0 url=index.php');
                          
                        }
                        else
                        {
                          echo"<script>window.alert(\"ROOM BOOKING REGISTRATION FAILED  (PLEASE TRY AGAIN)\");</script>";
                          header('refresh:-10 url=index.php');
                          
                        }
                    }
                  
              ?>



       </div>
   
       <?php 
          
          require("include/footer.php");
                  
          
      ?>

   
</body>
</html>