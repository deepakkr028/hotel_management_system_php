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
     
    <H2 style="margin-top:3px;">BOOKED ROOM DETAILS </H2>
  	<div class="table-responsive" style="background-color:whitesmoke;margin-top:19px; margin-bottom: 10px; border-radius: 15px;">
      <table>
            <tr>
              <th width="10%" height="50px"><center>Name </center></th>
              <th width="10%" height="50px"><center>Id Card Name </center></th>
                        <th width="10%" height="50px"><center>Id No. </center></th>
                        <th width="10%" height="50px"><center>City </center></th>
                        <th width="10%" height="50px"><center>District </center></th>
                        <th width="10%" height="50px"><center>State </center></th>
                        <th width="10%" height="50px"><center>Chack In Date </center></th>
                        <th width="10%" height="50px"><center>Chack Out Date </center></th>
                        <th width="10%" height="50px"><center>Member </center></th>
            </tr>
            <?php
                    $q1="select * from form";
                    $run=mysqli_query($a,$q1);
                    while($row=mysqli_fetch_array($run))
                    {
                      $name=$row['name'];
              $idnam =$row['idnam'];
                      $idno=$row['idno'];
                      $city=$row['city'];
                      $dis=$row['dis'];
                        $state=$row['state'];
                          $cidate=$row['chekin']; 
                          $codate=$row['chekout']; 
                          $m=$row['m']; 
                    ?>

            <tr>
              <td width="10%" height="50px"><center><?php echo $name; ?></center></td>
              <td width="10%" height="50px"><center><?php echo $idnam; ?></center></td>					 
              <td width="10%" height="50px"><center><?php echo $idno; ?></center></td>
              <td width="10%" height="50px"><center><?php echo $city; ?></center></td>
              <td width="10%" height="50px"><center><?php echo $dis; ?></center></td>
              <td width="10%" height="50px"><center><?php echo $state; ?></center></td>
              <td width="10%" height="50px"><center><?php echo $cidate; ?></center></td>
              <td width="10%" height="50px"><center><?php echo $codate; ?><center></td>
              <td width="10%" height="50px"><center><?php echo $m; ?></center></td>
            </tr>
            <?php
              }
            ?>
      </table>
   </div>
   
     <?php           
          require("include/footer.php");                 
          
     ?>
     
</body>
</html>