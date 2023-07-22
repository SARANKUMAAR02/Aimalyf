<?php

session_start();

require 'connections/connect_database.php';
connect_database('bloodproject');

global $conn;




$country=$_REQUEST['country'];
$state =$_REQUEST['state'];
$district = $_REQUEST['district'];
$city = $_REQUEST['city'];
$blood = $_REQUEST['blood'];

if($blood == "O")
{
    $blood = "O+ve";
}

elseif($blood == "A")
{
    $blood = "A+ve";
}
elseif($blood == "B")
{
    $blood = "B+ve";
}
elseif($blood == "AB")
{
    $blood = "AB+ve";
}



$_SESSION['country']=$country;
$_SESSION['state']=$state;
$_SESSION['district']=$district;
$_SESSION['city']=$city;
$_SESSION['blood']=$blood;


echo $_SESSION['country'];
echo $_SESSION['state'];
echo $_SESSION['district'];
echo $_SESSION['city'];
echo $_SESSION['blood'];
?>

