<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Process Feedback</title>
<meta http-equiv="content-type"     
    content="text/html; charset=iso-8859-1" />

    <!-- External Style Sheet -->
    <link rel="stylesheet" href="zodiac_style.css">

</head>
<body>
<?php

include ("Includes/inc_connect.php");

//Need to set the default time zone
date_default_timezone_set('America/Chicago');

if ($allOk){
    //Good connection the database is there
    mysqli_select_db($DBConnect, $db_name);

    //check on the table
    $TableName = "zodiacfeedback";
    $SQLString = "SHOW TABLES LIKE '$TableName'";
    $QueryResult = @mysqli_query($DBConnect, $SQLString);
    if (mysqli_num_rows($QueryResult) == 0){

        //No visitors table so we need to make it
        $SQLIString = "CREATE TABLE $TableName(name VARCHAR(40), message VARCHAR(250), public TINYINT(1)";

        //Run the command
        if(!@mysqli_query($DBConnect, $SQLString)){

            //We can not create the table
            echo "<p>Can Not Run Table Command\n</p>";
            echo "<p>Unable to create table Error code: " . mysqli_connect_errno($DBConnect) . ":" . mysqli_connect_error($DBConnect) . "</p>";
            $allOk = false;
        }
    }
}
if($allOk){
    $Name = $_POST["name"];
    $Message = $_POST["message"];
    $Date = date('y-m-d');
    $Time = date('h:i:s');

    //Check if public exsists
    if (isset($_POST["public"])){
        $Public = "Y";
    }
    else{
        $Public = "N";
    }

    //$Message = str_replace("'", "", $Message);

    $SQLString = "INSERT INTO $TableName VALUES('$Date','$Time','$Name', '$Message', '$Public')";

    //Run the command
    if (!@mysqli_query($DBConnect, $SQLString)){

        //Addition did not work wrong
        echo "<p>Can Not Run add Command\n</p>";
        echo "<p>Unable to add to the table server Error code: " . mysqli_connect_errno($DBConnect) . ":" . mysqli_connect_error($DBConnect) . "</p>";
        $allOk = false;
    }
    else{

        //Everything worked
        echo "<h1>Thank you for your feedback</h1>";
    }
}

//Close the server connection
mysqli_close($DBConnect);

?>


</body>
</html>