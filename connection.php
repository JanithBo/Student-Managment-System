<?php
     $conn = new mysqli("localhost","root","","studentdb");
     if(!$conn){
          //echo "Database Connection is sucessfull";
          die(mysqli_error($conn));
     }
     