<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather_database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="search" >
        <form method="get">
            <input type="text" placeholder="Enter the city name" spellcheck="false">
            <button type="submit" name="s1"><img src="img/search.png"></button>
        </div>
            <div class="weather">
                <h1 class="temp" name="temperature"></h1>
                <h1 class="city" name="city"></h1><br>
                <h2 id="humidity" name="weather_humidity">Loading...</h2>
            </div>
        </form>
        
    </div>
    <br>
<?php
    if(isset($_GET["s1"])){
        include "data.php" ;

    }
?>
    <script src="/script.js"></script>
</body>
</html>