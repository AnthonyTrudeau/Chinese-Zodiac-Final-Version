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
    
    </style>
</head>
<body>
<?php
$animal = "";
$animalPic = 0;
$FormDisplay = True;
$run = 1;
$Rat0 = array("Start Date" => 1900, "End Date" => 2020, "President" => "George Washington");
$Ox0 = array("Start Date" => 1901, "End Date" => 2021, "President" => "Barack Obama");
$Tiger0 = array("Start Date" => 1902, "End Date" => 2022, "President" => "Dwight Eisenhower");
$Rabbit0 = array("Start Date" => 1903, "End Date" => 2023, "President" => "John Adams");
$Dragon0 = array("Start Date" => 1904, "End Date" => 2024, "President" => "Abraham Lincoln");
$Snake0 = array("Start Date" => 1905, "End Date" => 2025, "President" => "John Kennedy");
$Horse0 = array("Start Date" => 1906, "End Date" => 2026, "President" => "Theodore Roosevelt");
$Sheep0 = array("Start Date" => 1907, "End Date" => 2027, "President" => "James Madison");
$Monkey0 = array("Start Date" => 1908, "End Date" => 2028, "President" => "Harry Truman");
$Rooster0 = array("Start Date" => 1909, "End Date" => 2029, "President" => "Grover Cleveland");
$Dog0 = array("Start Date" => 1910, "End Date" => 2030, "President" => "George Walker Bush");
$Pig0 = array("Start Date" => 1911, "End Date" => 2031, "President" => "Ronald Reagan");

$AnimalSigns = array(
    "Rat" => $Rat0,
    "Ox" => $Ox0,
    "Tiger" => $Tiger0,
    "Rabbit" => $Rabbit0,
    "Dragon" => $Dragon0,
    "Snake" => $Snake0,
    "Horse" => $Horse0,
    "Sheep" => $Sheep0,
    "Monkey" => $Monkey0,
    "Rooster" => $Rooster0,
    "Dog" => $Dog0,
    "Pig" => $Pig0
);
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

if (isset($_POST['submit'])){
    if (is_numeric($_POST['BYear'])){
        $FormDisplay = False;
        $Year = $_POST['BYear'];
        switch ($Year){
            case 1912:
            case 1924:
            case 1936:
            case 1948:
            case 1960:
            case 1972:
            case 1984:
            case 1996:
            case 2008:
            case 2020:
                $animal = "Rat";
                $animalPic = 0;
            break;
            case 1913:
            case 1925:
            case 1937:
            case 1949:
            case 1961:
            case 1973:
            case 1985:
            case 1997:
            case 2009:
                $animal = "Ox";
                $animalPic = 1;
            break;
            case 1914:
            case 1926:
            case 1938:
            case 1950:
            case 1962:
            case 1974:
            case 1986:
            case 1998:
            case 2010:
                $animal = "Tiger";
                $animalPic = 2;
            break;
            case 1915:
            case 1927:
            case 1939:
            case 1951:
            case 1963:
            case 1975:
            case 1987:
            case 1999:
            case 2011:
                $animal = "Rabbit";
                $animalPic = 3;
            break;
            case 1916:
            case 1928:
            case 1940:
            case 1952:
            case 1964:
            case 1976:
            case 1988:
            case 2000:
            case 2012:
                $animal = "Dragon";
                $animalPic = 4;
            break;
            case 1917:
            case 1929:
            case 1941:
            case 1953:
            case 1965:
            case 1977:
            case 1989:
            case 2001:
            case 2013:
                $animal = "Snake";
                $animalPic = 5;
            break;
            case 1918:
            case 1930:
            case 1942:
            case 1954:
            case 1966:
            case 1978:
            case 1990:
            case 2002:
            case 2014:
                $animal = "Horse";
                $animalPic = 6;
            break;
            case 1919:
            case 1931:
            case 1943:
            case 1955:
            case 1967:
            case 1979:
            case 1991:
            case 2003:
            case 2015:
                $animal = "Sheep";
                $animalPic = 7;
            break;
            case 1920:
            case 1932:
            case 1944:
            case 1956:
            case 1968:
            case 1980:
            case 1992:
            case 2004:
            case 2016:
                $animal = "Monkey";
                $animalPic = 8;
            break;
            case 1921:
            case 1933:
            case 1945:
            case 1957:
            case 1969:
            case 1981:
            case 1993:
            case 2005:
            case 2017:
                $animal = "Rooster";
                $animalPic = 9;
            break;
            case 1922:
            case 1934:
            case 1946:
            case 1958:
            case 1970:
            case 1982:
            case 1994:
            case 2006:
            case 2018:
                $animal = "Dog";
                $animalPic = 10;
            break;
            case 1923:
            case 1935:
            case 1947:
            case 1959:
            case 1971:
            case 1983:
            case 1995:
            case 2007:
            case 2019:
                $animal = "Pig";
                $animalPic = 11;
            break;
            default:
            $FormDisplay = True;
            $run = 0;
            break;
        }
        $SignMessage = "If your Chinese zodiac sign is the $animal, you share a zodiac sign with President ".$AnimalSigns[$animal]["President"].".";
        $SignMessage .= "Years of the $animal include ";
        for ($i = $AnimalSigns[$animal]["Start Date"]; $i < $AnimalSigns[$animal]["End Date"]; $i+=12){
            $SignMessage .= $i.", ";
        }
        $SignMessage .= "and ".$AnimalSigns[$animal]["End Date"].".";
        switch ($run){
            case 1:
                switch (file_exists("./Years/".$Year.".txt")){
                    case True:
                        $File = ("./Years/".$Year.".txt");
                        $FileRead = file_get_contents($File);
                        $FileRead++;
                        file_put_contents($File, $FileRead);
                    break;
                    case False:
                        $File = ("./Years/".$Year.".txt");
                        $FileRead = 1;
                        file_put_contents($File, $FileRead);
                }
                //echo "<p>If your sign is the ".$animal." you share a zodiac sign with President ".$AnimalSigns[$animal]["President"].".</p>";
                echo $SignMessage;
                echo "<hr \>";
                echo "You are the ".$FileRead." person to choose ".$Year.".";
                echo "You were born in the year of the ".$animal.".";
                echo "<hr \>";
                echo "$imageStore[$animalPic]";
            break;
            case 0:
                echo "<p>Year Must Be A Number Between 1912-2020.";
        }
    }
    else{
        echo "<p>Year Must Be A Number Between 1912-2020.";
    }
}
    if ($FormDisplay){
?>
    
<h3>Enter your Birth Year.</h3>
<form name="BirthYearSwitch" action='BirthYearSwitch.php' method='post'>
<input type='text' name='BYear' required></textarea>
<input type='reset' value="Clear"/>
<input type='submit' name='submit' value='See your sign'/><hr />
</form>

    <?php
}
?>
</body>
</html>
