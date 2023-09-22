<!--navbar -->

<div class="topnav" id="myTopnav">
        <a href="index.php" class="active">HOTEL MANAGEMENT SYSTEM</a>
        <a href="index.php">HOME</a>
        <a href="gallery.html">GALLERY</a>
        <a href="bms.php">BOOKING</a>
        <a href="contact.php">CONTACT US </a>
       
        <a href="aboutus.html">ABOUT US</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
      </div>

      
   <!--navbar responsive js script -->

           <script>
                function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
                }
         </script>
     <!--navbar responsive js script end-->

     <!--navbar end -->