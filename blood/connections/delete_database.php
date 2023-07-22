<?php

    require 'connection.php';

    //delete database by calling a function delete_database() with ddb_name as parameter
    function delete_database($ddb_name)
    {
        global $conn;
        $comm = "DROP DATABASE " . $ddb_name . ";";
        if($conn->query($comm) === TRUE)
        {
            die ("Database Deleted Successfully...");
        }
        echo "ERROR : " . $conn->error;
    }


?>