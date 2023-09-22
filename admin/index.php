    <?php
       include("include/connection.php");
   ?>
<!DOCTYPE html>
<html lang="en">
  <head>        
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
     <title>ADMIN</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="css/animated.css" rel="stylesheet">
       <link rel="stylesheet" href="style.css">   
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </head>

 <body>   
     <div id="form" class="form-signin animated shake"  >
      <h2 align="center" >ADMIN LOGIN</h2><hr>

          <form action="" method="POST">
            <div class="form-group">
              <label for="user"><b>Username:</b></label>
              <input type="text" class="form-control" name="un" value="" autocomplete="off">
            </div>

            <div class="form-group">
              <label for="pass"><b>Password:</b></label>
              <input type="password" class="form-control" name="ps">
            </div>
          
            <button type="submit" class="btn btn-lg btn-primary btn-block" name="sub"><b>login</b></button>

          </form> 


          <?php
           if(isset($_POST['sub']))
           {
           	     $un=$_POST['un'];
           	     $ps=$_POST['ps'];
           	    $q1="select * from admin";
           	    $run=mysqli_query($a,$q1);
           	    $row=mysqli_fetch_array($run);
           	     $u=$row['un'];
           	     $p=$row['ps'];
           	     if($un==$u && $ps==$p)
           	     {
                  echo "login sucess";
                  $_SESSION['un']=$u;
                  echo $u;
                  echo"<script>window.alert(\"logged in  sucessfully\");</script>";
           	     	header("Location:ahome.php");
           	     }
           	     else
           	     {
                  echo"<script>window.alert(\"logged in failed\");</script>";
           
           	     	header("Location:index.php?Wrong User");
           	     }

            }
           
	   ?>

  </div>
  
   
 </body>
 
</html>
