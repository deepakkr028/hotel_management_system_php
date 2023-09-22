      

       <div class="topnav" id="myTopnav">
        <a href="ahome.php" class="active">HOTEL MANAGEMENT SYSTEM</a>
        <a href="ahome.php">HOME</a>
        <a href="room.php">ROOM UPDATE</a>
        <a href="booking.php">BOOKING</a>
        <a href="rd.php">ROOM DETAILS </a>       
        <a href="feedback.php">FEEDBACK</a>
        <a href="logout.php">LOG OUT</a>

        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
      </div>
    
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
     