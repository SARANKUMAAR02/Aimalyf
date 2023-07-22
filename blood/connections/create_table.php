<?php

    require 'connect_database.php';
   
    //creating a table using function create_table with two parameters 
        // parameter 1 ---> $db_name
        // parameter 2 ---> $comm

        
    function create_table($db_name,$comm)
    {
        $co_db = connect_database($db_name);
        if($co_db)
        {
          global $conn;
          if(!$conn->query($comm) === TRUE)
          {
                die ("ERROR : " . $conn->error );
           }

           
           return "Query : " . $comm . " Executed Successfully...";
        }
    }

 
?>