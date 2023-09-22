<!DOCTYPE html>
<html lang="en">
  
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=, initial-scale=1.0">
      <title>Hotel Management System </title>
      <link href="css/bootstrap.min.css" rel="stylesheet">

      <link rel="stylesheet" href="css/droup.css">
      <link rel="stylesheet" href="css/style.css">


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



        <style type="text/css">
          body{
              background-color:peachpuff;
            background-image:url("img/b.jpg");
          }

          .jumbotron{
            background-image:url("img/garden2.jpg");
          }
              </style>

  </head>
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
              <h1 align="center"><b> WELCOME BOOK YOUR ROOM  NOW  </b></h1>
              </div>
              
            </div>
              
      </div> 
          <!--jambotron end-->


        <!--================ booking area =================-->   
    
        <div class="container" style="background-color: springgreen;width:auto; height: 170px; border-radius:2% ;">
          <h2 >BOOK YOUR ROOM NOW </h2>
            <div id="f1" >
                <form action="r1.php" method="get">
                <center><table>
                    <tr>
                                <th width="20%" height="50px"><center> DESTINATION </center> </th>
                                <th width="20%" height="50px"><center> CHEK IN DATE </center></th>
                                <th width="20%" height="50px"><center> CHEK OUT DATE </center></th>
                                <th width="20%" height="50px"><center> ROOM </center></th>
                                <td rowspan="2"><input type="submit" value="Book Now" name="sub"></td>
                    </tr>
                    <tr>
                    
                        <td width="20%" height="50px"><center><input type="text" name="dest" placeholder="Enter Destination"></center></td>
                        <td width="20%" height="50px"><center><input type="date" name="ci"></center></td>
                        <td width="20%" height="50px"><center><input type="date" name="co"></center></td>
                        <td width="20%" height="50px">
                            <center><select name="room">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select></center>
                        </td>
                    </tr>
                </table></center>
            </form>
            </div>
        </div>
      <!--================ booking area =================-->

  <!--================ room images =================-->

      <section>
            <div class="container-fluid" style="background-color:lightgoldenrodyellow;"> 

              <h2 style="margin-top: 12px; background-color: lightslategray; border-radius: 6px;"> HOTEL ACCODIMATION</h2>

                <div class="row" style="margin-top:0px; margin-bottom:0px;">
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <a href="img/">
                        <img src="img/n3.jpg" alt="" style="width:100% ; height: 230px;">
                        <div class="caption">
                          <p>  </p>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <a href="img/bed.jpg">
                        <img src="img/bed.jpg" alt="" style="width:100% ; height:230px" >
                        <div class="caption">
                          <p>  </p>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <a href="img/photo3.jpg">
                        <img src="img/photo3.jpg" alt="" style="width:100%; height:230px">
                        <div class="caption">
                          <p></p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
          </div>

      </section>
  <!--================ room image send    =================-->
      <?php           
            require("include/footer.php");                 
            
        ?>

</body>
</html>