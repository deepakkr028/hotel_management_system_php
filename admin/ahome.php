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



    <!--================ About History Area  =================-->
	<div id="banner" style="background-image:url('img/garden2.jpg');"><br><br><br><br><br>
			<h1 style="color:orange;text-align: center; font-size:80px;">welcome <?php 
                        echo$_SESSION['un']
                          ?>  </h1>      
		</div>

         
     <?php           
          require("include/footer.php");                 
          
     ?>
</body>
</html>