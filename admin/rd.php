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

        <H2 style="margin-top:3px;">ROOM DETAILS</H2>

   <div class="container" style="background-color:whitesmoke;margin-top:19px; margin-bottom: 10px; border-radius: 15px;">
    <table>
				<tr>
					<th width="25%" height="50px">Room No</th>
                     <th width="25%" height="50px">Room Type</th>
                     <th width="25%" height="50px">Price</th>
                     <th width="25%" height="50px">Status</th>
                     <th width="25%" height="50px">Option</th>
				</tr>

				<?php
                 $q1="select * from room";
                 $run=mysqli_query($a,$q1);
                 while($row=mysqli_fetch_array($run))
                  {
                 	$rno=$row['rno'];
                 	$type=$row['type'];
                 	$price=$row['price'];
                 	$status=$row['status'];
                   
        ?>

				<tr >
					<td width="25%" height="50px"><?php echo $rno; ?></td>
					<td width="25%" height="50px"><?php echo $type; ?></td>
					<td width="25%" height="50px"><?php echo $price; ?></td>
					<td width="25%" height="50px"><?php echo $status; ?></td>
					<td><a style="color: blue" href="co.php? rno=<?php echo $rno; ?>" >Check Out</a> </td>
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