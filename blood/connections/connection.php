<?php
 $servername="localhost";
 $db_user="root";
 $db_pass="";


 //connet to database
     $conn = new mysqli($servername,$db_user,$db_pass);
     if($conn->connect_error)
     {
         die("Connection Failed:". $conn->connect_error);
     }

 
?>