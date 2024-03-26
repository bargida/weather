<?php

    
include "database.php";

$city=$_GET["city"];
$temperature=$_GET["temperature"];
$weatherType=$_GET["weatherType"];

$fetch_query="SELECT * FROM weather WHERE city='{$city}'";
$result=mysqli_query($con,$fetch_query);

if(mysqli_num_rows($result)==0){
    
    $insert_query="INSERT INTO weather(city,temp,weatherType) VALUES('{$city}','{$temperature}','{$weatherType}')";
    mysqli_query($con,$insert_query);
}
else
{
    $update_query="UPDATE weather SET 
                        temperature='{$temperature}',
                        weatherType='{$weatherType}'
                        WHERE 
                        city='{$city}'
                        
                   ";
    mysqli_query($con,$update_query);
}

function display($city)
{
    include "database.php";
    $fetch_query="SELECT * FROM weather WHERE city='{$city}'";
    $res=mysqli_query($con,$fetch_query);
    $row=mysqli_fetch_array($res);
    
    
    
    include "index.php";

    echo "<div class='weather'>
    <div id='result'>{$row["city"]}</div>
    <h1 class='temp'>{$row["temperature"]}</h1>
    <h1 class='city'>{$row["weatherType"]}</h1>
</div>";
    }
  
    display($_GET["city"])
?>


