<?php

    require 'connection.php';

    //connect to a database using a function connect_database() using db_name as parameter
    function connect_database($db_name)
    {
        global $conn, $servername, $db_user, $db_pass;

        $conn = new mysqli($servername , $db_user , $db_pass , $db_name);
        if($conn->connect_error)
        {
            die ("ERROR : " . $conn->connect_error);
        }
        
        return "Database : " . $db_name . "is now Connected";

    }


?>