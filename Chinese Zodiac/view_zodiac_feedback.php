<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>View Feedback</title>
<meta http-equiv="content-type"     
    content="text/html; charset=iso-8859-1" />

<style>
    *{
        text-align: center;
        padding: 0px;
        margin: 0px;
        overflow-x: hidden;
    }
    html{
        background-color: #F8EDD3;
    }
    table{
        margin-left: 25%;
        margin-right: 25%;
        background-color: whitesmoke;
    }
</style>

</head>
<body>
<?php


include ("Includes/inc_connect.php");

$TN = "zodiacfeedback";
$SQLString = "SELECT * from $TN WHERE public_message='Y'";
$QR = @mysqli_query($DBConnect, $SQLString);

if (mysqli_num_rows($QR) == 0){

    //If no entries
    echo "<p>No entries in the guest book table $TN.</p>";
}
else{

    echo "<h2>The following feedback has been provided: \n</h2>";
    echo "<table width = '50%' border = '1'";
    $cols = "SHOW COLUMNS FROM $TN";
    $res = mysqli_query($DBConnect, $cols);
    echo "<tr>";

    $count = 0;
    while (($row = mysqli_fetch_row($res)) !== NULL){
        echo "<th>$row[0]</th>";
        $count++;
    }
    echo "</tr>";

    while (($row = mysqli_fetch_row($QR)) !== NULL){
        echo "<tr>";

        for ($X = 0; $X < $count; $X ++){
            echo "<td>{$row[$X]}</td>";
        }
        
    echo "</tr>";

    }

    echo "</table>";

}

//Free up memory
mysqli_free_result($QR);
@mysqli_close($DBConnect);
?>


</body>
</html>