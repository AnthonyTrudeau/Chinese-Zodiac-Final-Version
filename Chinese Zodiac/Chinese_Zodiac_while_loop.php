<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Zodiac while Loop</title>
<meta http-equiv="content-type"     
    content="text/html; charset=iso-8859-1" />
    
    <!-- External Style Sheet -->
    <link rel="stylesheet" href="zodiac_style.css">
    
</head>
<body>

    <?php
    //Set up variables and arrays
    $count = 0;
    $year = 1912;
    $animalName = array("Rat","Ox","Tiger","Rabbit","Dragon","Snake","Horse","Sheep","Monkey","Rooster","Dog","Pig");
    $imageStore = array("<img src='./Images/Rat.jpeg' border='0'/>",
    "<img src='./Images/Ox.jpeg' border='0'/>",
    "<img src='./Images/Tiger.jpeg' border='0'/>",
    "<img src='./Images/Rabbit.jpeg' border='0'/>",
    "<img src='./Images/Dragon.jpeg' border='0'/>",
    "<img src='./Images/Snake.jpeg' border='0'/>",
    "<img src='./Images/Horse.jpeg' border='0'/>",
    "<img src='./Images/Sheep.jpeg' border='0'/>",
    "<img src='./Images/Monkey.jpeg' border='0'/>",
    "<img src='./Images/Rooster.jpeg' border='0'/>",
    "<img src='./Images/Dog.jpeg' border='0'/>",
    "<img src='./Images/Pig.jpeg' border='0'/>");
    ?>

    <table border="3">
        <?php
        echo "<tr>";
        //Loop the images
        for ($imageCount = 0; $imageCount <= 11; $imageCount++){
            echo "<td>";
            echo "$imageStore[$imageCount]";
            echo "</td>";
        }
        //Loop the names
        echo "</tr>";
        for ($nameCount = 0; $nameCount <=11; $nameCount++){
            echo "<td>";
            echo "$animalName[$nameCount]";
            echo "</td>";
        }
        echo "</tr>";
        //Loop the years
        while ($year <= 2020)
        {
            echo "<td>";
            echo "$year";
            echo "</td>";
            if ($count % 12 == 11){
                echo "</tr>";
                echo "<tr>";
            }
            $count++;
            $year++;
        }
        echo "<tr>";
        ?>    
</body>
</html>
