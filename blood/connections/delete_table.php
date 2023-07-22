<?php

    require 'connect_database.php';

    //delete a table using a function delete_table() with 2 parameter
     // parameter 1 ---> $db_name
     // parameter 2 ---> $table_name
    function delete_table($db_name,$table_name)
    {
        $co_db = connect_database($db_name);
        if($co_db)
        {
            global $conn;
            $comm = "DROP TABLE " . $table_name . ";";
            if(!$conn->query($comm) === TRUE)
            {
                die ("ERROR : " . $conn->error);
            }

            return "Table : " . $table_name . " Deleted Successfully...";
        }
    }


?>