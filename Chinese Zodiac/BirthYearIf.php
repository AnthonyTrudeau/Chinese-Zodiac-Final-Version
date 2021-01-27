<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Chinese Zodiac Using If/Else</title>
<meta http-equiv="content-type"     
    content="text/html; charset=iso-8859-1" />
    
    <!-- External Style Sheet -->
    <link rel="stylesheet" href="zodiac_style.css">
    
</head>
<body>
<?php
$animal = "";
$animalPic = 0;
$FormDisplay = True;
$imageStore = array("<img src=\"./Images/Rat.jpeg\" border=\"0\"/>",
    "<img src=\"./Images/Ox.jpeg\" border=\"0\"/>",
    "<img src=\"./Images/Tiger.jpeg\" border=\"0\"/>",
    "<img src=\"./Images/Rabbit.jpeg\" border=\"0\"/>",
    "<img src=\"./Images/Dragon.jpeg\" border=\"0\"/>",
    "<img src=\"./Images/Snake.jpeg\" border=\"0\"/>",
    "<img src=\"./Images/Horse.jpeg\" border=\"0\"/>",
    "<img src=\"./Images/Sheep.jpeg\" border=\"0\"/>",
    "<img src=\"./Images/Monkey.jpeg\" border=\"0\"/>",
    "<img src=\"./Images/Rooster.jpeg\" border=\"0\"/>",
    "<img src=\"./Images/Dog.jpeg\" border=\"0\"/>",
    "<img src=\"./Images/Pig.jpeg\" border=\"0\"/>");

if (isset($_POST['submit'])){
    $Year = $_POST['BYear'];
    if (is_numeric($_POST['BYear'])){
        $FormDisplay = false;
        if ($Year <= 2020 && $Year >= 1912){
            if ($Year == 1912 ||$Year == 1924 ||$Year == 1936 ||$Year == 1948 ||$Year == 1960 ||$Year == 1972 ||$Year == 1984 ||$Year == 1996 ||$Year == 2008 ||$Year == 2020){
                $animal = "Rat";
                $animalPic = 0;
            }
            else if ($Year == 1913 ||$Year == 1925 ||$Year == 1937 ||$Year == 1949 ||$Year == 1961 ||$Year == 1973 ||$Year == 1985 ||$Year == 1997 ||$Year == 2009){
                $animal = "Ox";
                $animalPic = 1;
            }
            else if ($Year == 1914 ||$Year == 1926 ||$Year == 1938 ||$Year == 1950 ||$Year == 1962 ||$Year == 1974 ||$Year == 1986 ||$Year == 1998 ||$Year == 2010){
                $animal = "Tiger";
                $animalPic = 2;
            }
            else if ($Year == 1915 ||$Year == 1927 ||$Year == 1939 ||$Year == 1951 ||$Year == 1963 ||$Year == 1975 ||$Year == 1987 ||$Year == 1999 ||$Year == 2011){
                $animal = "Rabbit";
                $animalPic = 3;
            }
            else if($Year == 1916 ||$Year == 1928 ||$Year == 1940 ||$Year == 1952 ||$Year == 1964 ||$Year == 1976 ||$Year == 1988 ||$Year == 2000 ||$Year == 2012){
                $animal = "Dragon";
                $animalPic = 4;
            }
            else if ($Year == 1917 ||$Year == 1929 ||$Year == 1941 ||$Year == 1953 ||$Year == 1965 ||$Year == 1977 ||$Year == 1989 ||$Year == 2001 ||$Year == 2013){
                $animal = "Snake";
                $animalPic = 5;
            }
            else if ($Year == 1918 ||$Year == 1930 ||$Year == 1942 ||$Year == 1954 ||$Year == 1966 ||$Year == 1978 ||$Year == 1990 ||$Year == 2002 ||$Year == 2014){
                $animal = "Horse";
                $animalPic = 6;
            }
            else if ($Year == 1919 ||$Year == 1931 ||$Year == 1943 ||$Year == 1955 ||$Year == 1967 ||$Year == 1979 ||$Year == 1991 ||$Year == 2003 ||$Year == 2015){
                $animal = "Sheep";
                $animalPic = 7;
            }
            else if ($Year == 1920 ||$Year == 1932 ||$Year == 1944 ||$Year == 1956 ||$Year == 1968 ||$Year == 1980 ||$Year == 1992 ||$Year == 2004 ||$Year == 2016){
                $animal = "Monkey";
                $animalPic = 8;
            }
            else if ($Year == 1921 ||$Year == 1933 ||$Year == 1945 ||$Year == 1957 ||$Year == 1969 ||$Year == 1981 ||$Year == 1993 ||$Year == 2005 ||$Year == 2017){
                $animal = "Rooster";
                $animalPic = 9;
            }
            else if ($Year == 1922 ||$Year == 1934 ||$Year == 1946 ||$Year == 1958 ||$Year == 1970 ||$Year == 1982 ||$Year == 1994 ||$Year == 2006 ||$Year == 2018){
                $animal = "Dog";
                $animalPic = 10;
            }
            else if ($Year == 1923 ||$Year == 1935 ||$Year == 1947 ||$Year == 1959 ||$Year == 1971 ||$Year == 1983 ||$Year == 1995 ||$Year == 2007 ||$Year == 2019){
                $animal = "Pig";
                $animalPic = 11;
            }
        }
        else{
        echo "<p>You need to put in a valid year(1912-2020).</p>";
        $Year = "";
        $FormDisplay = True;
        }
    }
    else{
    echo "<p>You need to put in a valid year(1912-2020).</p>";
    $Year = "";
    $FormDisplay = True;
    }
}
if ($FormDisplay){
    ?>

<h3>Enter your Birth Year.</h3>
<form name="BirthYearIf" action='BirthYearIf.php' method='post'>
<input type='text' name='BYear' required></textarea>
<input type='reset' value="Clear"/>
<input type='submit' name='submit' value='See your sign'/><hr />
</form>

    <?php
}
else if (file_exists("./Years/".$Year.".txt")){
    $File = ("./Years/".$Year.".txt");
    $FileRead = file_get_contents($File);
    $FileRead++;
    file_put_contents($File, $FileRead);
    echo "You are the ".$FileRead." person to choose ".$Year.".";
    echo "You were born in the year of the ".$animal.".";
    echo "<hr \>";
    echo "$imageStore[$animalPic]"; 
}
else{
    $File = ("./Years/".$Year.".txt");
    $FileRead = 1;
    file_put_contents($File, $FileRead);
    echo "You are the ".$FileRead." person to choose ".$Year.".";
    echo "You were born in the year of the ".$animal.".";
    echo "<hr \>";
    echo "$imageStore[$animalPic]"; 
}
?>
</body>
</html>