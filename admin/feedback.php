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

    <H2 style="margin-top:3px;">FEEDBACK </H2>
    <div class="container" style="background-color:whitesmoke;margin-top:19px; margin-bottom: 10px; border-radius: 15px;">
      <table>
          <tr>
            
                        <th width="25%" height="50px">NAME</th>
                        <th width="25%" height="50px">EMAIL</th>
                        <th width="25%" height="50px">COMMENT</th>
                        <th width="25%" height="50px">Delete</th>
          </tr>


          
                                <?php
                                      $sql = "(SELECT nam,email,comments FROM comment)";
                                      $result = mysqli_query($a, $sql);
                                        while($row=mysqli_fetch_array($result)){

                                ?>


                                      <tr>
                                  
                                        <td> <?php echo $row['nam']; ?> </td>
                                        <td> <?php echo $row['email']; ?> </td>
                                        <td> <?php echo $row['comments']; ?> </td>
                                        <td> <a href="deletec.php?id=<?php echo $row['id']; ?>">delete</td>
                                        
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