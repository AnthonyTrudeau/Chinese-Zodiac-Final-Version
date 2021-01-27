<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Alphabete soup</title>
<meta http-equiv="content-type"     
    content="text/html; charset=iso-8859-1" />
    
    <!-- External Style Sheet -->
    <link rel="stylesheet" href="zodiac_style.css">
    
<meta http-equiv="content-type"     
    content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
    $CorrectSigns = array("rat","ox","tiger","rabbit","dragon","snake","horse","sheep","monkey","rooster","dog","pig");
    $ValidEntries = array();
    $FormDisplay = True;

    if (isset($_POST['submit'])){
        $FormDisplay = False;
        $EnteredSigns = explode(",", $_POST['list']);
        foreach ($EnteredSigns as $Sign){
            if (in_array($Sign, $CorrectSigns, TRUE)){
                array_push($ValidEntries, $Sign);
            }
        }
        //Sort the validated entries
        sort($ValidEntries);
        echo "<h1>Your entered signs sorted.</h1>";
        echo "<h3>";
        foreach ($ValidEntries as $Sign){
        echo $Sign."  ";
        }
        echo "</h3>";
    }

    if ($FormDisplay){
?>
    <h1>Enter the Zodiac Signs you want sorted below.</h1>
    <h2>Seperate your words with "," and no spaces.</h2>
    <form name="AlphabetizeSigns" action="AlphabetizeSigns.php" method='post'>
    <input type='text' name='list' required></input>
    <input type='reset' value="Clear"/>
    <input type='submit' name='submit' value='Sort your signs'/><hr />
    </form>
<?php
    }



?>
</body>
</html>