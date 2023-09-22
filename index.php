<!DOCTYPE html>
<html lang="en">
    <?php           
        require("include/header.php");               
        
    ?>
<body>

      <?php           
        require("include/navbar.php");               
        
      ?>

      <!--jambotron-->
      <div class="jumbotron"  style="background-image:url('img/garden2.jpg');">
        <div class="container">
          <div id="head" class="animated fadeInLeft">
            <h1 align="center"><b>HOTEL MANAGEMENT SYSTEM</b></h1>
            </div>
            
          </div>
            
     </div> 
     <!--jambotron end-->



    <!----slider----->
    <div class="slider" style="margin-top: -45px; border: radius 5px;">
          <div class="container my-4">
          
              <hr class="my-4">
          
              <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/beds.jpg" alt="First slide" style="height: 570px;">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/b2.jfif" alt="Second slide" style="height:570px">
                  </div>

                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/garden2.jpg" alt="Third slide" style="height:570px">
                  </div>

                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/photo1.jpg" alt="Third slide" style="height:570px">
                  </div>

                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/coffe1.jpg" alt="Third slide" style="height:570px">
                  </div>

               </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-thumb" data-slide-to="0" class="active"> <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(88).jpg"
                      class="img-fluid"></li>
                  <li data-target="#carousel-thumb" data-slide-to="1"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(121).jpg"
                      class="img-fluid"></li>
                  <li data-target="#carousel-thumb" data-slide-to="2"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(31).jpg"
                      class="img-fluid"></li>
                </ol>
              </div>
              <!--/.Carousel Wrapper-->
          
           </div>
      </div>

         <!--slider  end-->




     <div class="container" style="background-color: springgreen;width:auto; height: 170px; border-radius:2% ;">
      <h2 >BOOK YOUR ROOM NOW </h2>
         <div id="f1" >
            <form action="r1.php" method="get">
           <div class="table-responsive">
            <center><table>
                <tr>
                            <th width="20%" height="50px"><center> DESTINATION </center> </th>
                            <th width="20%" height="50px"><center> CHEK IN DATE </center></th>
                            <th width="20%" height="50px"><center> CHEK OUT DATE </center></th>
                            <th width="20%" height="50px"><center> ROOM </center></th>
                            <td rowspan="80%" style:"widh:56%">
                            <td rowspan="2"><input type="submit" value="Book Now" name="sub"></td>
                          
                </tr>
                <tr>
                
                    <td width="20%" height="50px"><center><input type="text" name="d1" placeholder="Enter Destination"></center></td>
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

          </div>
        </form>
        </div>
    </div>




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


  <!--================ Facilities Area  =================-->
        <section class="facilities_area section_gap">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">  
            </div>
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_w" style="margin-top: 20px;">FACILITIES</h2>
                    <p></p>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restaurant</h4>
                            <img src="img/rect.jpg" alt="" STYLE="width:270PX; HEIGHT:200px ; border-radius:5%; ">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Sports CLub</h4>
                            <img src="img/sport.jpg" alt="" STYLE="width:270PX; HEIGHT:200px ; border-radius:5%; ">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Swimming Pool</h4>
                            <img src="img/sp2.jpg" alt="" STYLE="width:270PX; HEIGHT:1250 ; border-radius:5%; ">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-car"></i>Rent a Car</h4>
                            <img src="img/car.jpg" alt="" STYLE="width:270PX; HEIGHT:1250 ; border-radius:5%; ">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Gymnesium</h4>
                            <img src="img/gym.jpg" alt="" STYLE="width:270PX; HEIGHT:1250 ; border-radius:5%; ">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Bar</h4>
                            <img src="img/desi.jpg" alt="" STYLE="width:270PX; HEIGHT:1250 ; border-radius:5%; ">
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <!--================ Facilities Area  =================-->

  <!--================ footer Area  =================-->
       <?php 
          
          require("include/footer.php");
                  
          
      ?>

  <!--================ footer Area closed =================-->  
 
</body>
</html>