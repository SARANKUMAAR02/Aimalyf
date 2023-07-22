<?php

    require 'connection.php';


    //create database by calling a function create_database() with cdb_name as parameter
    function create_database($cdb_name)
    {
        global $conn;
        $comm = "CREATE DATABASE " . $cdb_name . ";";
        if($conn->query($comm) === TRUE)
        {
            die ("Database Created Successfully...");
        }

        echo "ERROR : " . $conn->error;

    }

?>