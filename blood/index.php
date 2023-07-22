<?php

require 'connections/connect_database.php';
connect_database('bloodproject');

global $conn;


?>










<!DOCTYPE html>
<html>
    <head>
        <title>Blood for Needy</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles.css" type="text/css" rel="stylesheet">
        <script src="script.js"></script>
        <script src="jquery.js"></script>
    </head>

    <body>
        <div class="header">
            <h1 id="tit">Blood For Needy</h1>
        </div>

        <div class="mid-box">
            <div id="mid-box-tit">
                <h2>FIND BLOOD DONORS</h2>
            </div>            

            <div class="tabular-search">
                <table>
                    <tr>
                        <th>Blood Group</th>
                        <td>
                            <select name="blood" id="blood" required="">
                                <option value="null">--Select--</option>
                                <option value="O">O+ve</option>
                                <option value="A">A+ve</option>
                                <option value="B">B+ve</option>
                                <option value="AB">AB+ve</option>
                                <option value="O-ve">O-ve</option>
                                <option value="A-ve">A-ve</option>
                                <option value="B-ve">B-ve</option>
                                <option value="AB-ve">AB-ve</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th>Select Country</th>
                        <td>
                            <select name="country" id="country">
                                <option value="null">--Select--</option>
                                <?php
                                $query = "select name from country";
                                if( $result = $conn -> query($query))
                                {
                                    while($row = $result -> fetch_assoc())
                                    {
                                        echo "<option value='" .$row['name']. "'>".$row['name']."</option>";
                                    }
                                }

                                ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th>Select State</th>
                        <td>
                            <select name="state" id="state">
                                <option value="null">--Select--</option>
                                <?php
                                $query = "select name from state";

                                if(isset($_POST['country']))
                                {
                                    $query = "select name from state where country_id = 1";
                                    if($result = $conn -> query($query))
                                    {
                                    while($row = $result -> fetch_assoc())
                                    {
                                        echo "<option value='" .$row['name']. "'>".$row['name']."</option>";
                                    }}

                                }
                                else
                                {
                                    if($result = $conn -> query($query))
                                    {
                                    while($row = $result -> fetch_assoc())
                                    {
                                        echo "<option value='" .$row['name']. "'>".$row['name']."</option>";
                                    }}
                                }

                                ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th>Select District</th>
                        <td>
                            <select name="district" id="district">
                                <option value="null">--Select--</option>
                                <?php
                                $query = "select name from district";
                                if( $result = $conn -> query($query))
                                {
                                    while($row = $result -> fetch_assoc())
                                    {
                                        echo "<option value='" .$row['name']. "'>".$row['name']."</option>";
                                    }
                                }

                                ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th>Select City</th>
                        <td>
                            <select name="City" id="city">
                                <option value="null">--Select--</option>
                                <?php
                                $query = "select name from city";
                                if( $result = $conn -> query($query))
                                {
                                    while($row = $result -> fetch_assoc())
                                    {
                                        echo "<option value='" .$row['name']. "'>".$row['name']."</option>";
                                    }
                                }

                                ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>

                        </td>
                        <td id="search-button">
                            <button type="submit" value="Search" id="searchbtn" onclick="mybtnclick()">Search</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>


        <div class="result">
            <table id="showresult"></table>
        </div>
    </body>
</html>