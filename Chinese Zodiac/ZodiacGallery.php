<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Zodiac Images Gallery</title>
<meta http-equiv="content-type"     
    content="text/html; charset=iso-8859-1" />
    
    <!-- This page does not like the external style sheet -->
    
    <style>
    *{
    overflow-x: hidden;
    }
    html{
    background-color: #F8EDD3;
    }
    body{
        text-align: center;
    }
    </style>
    
    </style>
</head>


<body>
<?php
echo "<h1>Zodiac Image Gallery</h1>";
echo "<h3>Click on a image to see it enlarged.</h3>";

$SignImages = array(
                    "Rat.jpeg" => "Rat",
                    "Ox.jpeg" => "Ox",
                    "Tiger.jpeg" => "Tiger",
                    "Rabbit.jpeg" => "Rabbit",
                    "Dragon.jpeg" => "Dragon",
                    "Snake.jpeg" => "Snake",
                    "Horse.jpeg" => "Horse",
                    "Sheep.jpeg" => "Sheep",
                    "Monkey.jpeg" => "Monkey",
                    "Rooster.jpeg" => "Rooster",
                    "Dog.jpeg" => "Dog",
                    "Pig.jpeg" => "Pig");
?>
<table border="3">
<?php
echo "<tr>";
    foreach ($SignImages as $File => $Caption){
        echo "<td>";
        echo "<a href = \"Images/".$File."\"><img src = \"Images/$File\" alt = \"$Caption\" style =  height = 100%; width = 100%;>";
        echo "</td>";
    }
echo "</tr>";
?> 

</body>
</html>
