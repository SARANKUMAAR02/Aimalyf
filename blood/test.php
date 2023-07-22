<?php

session_start();

require 'connections/connect_database.php';
connect_database('bloodproject');

global $conn;



$query="";
if($_SESSION['blood']!="null")
{

if($_SESSION['city']!="null")
{
    $query = "select name,birth,bloodgroup,phone,lastdonate from user_details where city_id = (select city_id from city where name='".$_SESSION['city']."') and bloodgroup = '".$_SESSION['blood']."';";
}
else{
    if($_SESSION['district']!="null")
{
    $query = "select name,birth,bloodgroup,phone,lastdonate from user_details where district_id = (select district_id from district where name='".$_SESSION['district']."') and bloodgroup = '".$_SESSION['blood']."';";
}
else{
    if($_SESSION['state']!="null")
{
    $query = "select name,birth,bloodgroup,phone,lastdonate from user_details where state_id = (select state_id from state where name='".$_SESSION['state']."') and bloodgroup = '".$_SESSION['blood']."';";
}
else{
    if($_SESSION['country']!="null")
{
    $query = "select name,birth,bloodgroup,phone,lastdonate from user_details where country_id = (select country_id from country where name='".$_SESSION['country']."') and bloodgroup = '".$_SESSION['blood']."';";
}

}}}}




$data = "";
if($result = $conn->query($query))
{
    echo "<tbody id='tablebdy'><tr class='row'><th>Name</th><th>Date of Birth</th><th>Blood Group</th><th>Phone Number</th><th>Last Donated On</th></tr>";
    while($rows = $result->fetch_assoc())
    {
        echo "<tr class='row'><td>".$rows['name']."</td><td>".$rows['birth']."</td><td>".$rows['bloodgroup']."</td><td><a href='tel:+91".$rows["phone"]."'>".$rows['phone']."</a></td><td>".$rows['lastdonate']."</td></tr>";
        #echo "<tr><td>hai</td><td>july</td><td>opos</td><td>theriyathu</td><td>theriyathu</td><tr>";
    }
}

echo "</tbody>";




?>

