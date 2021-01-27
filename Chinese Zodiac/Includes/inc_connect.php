<?php
$db_name="chinese_zodiac";
$allOk = True;

//assign the connection and selected database to a var
$DBConnect = mysqli_connect("localhost","root","");

if ($DBConnect === False){
    echo "<p>Unable to connect to the database server.\n Error code". mysqli_errno($DBConnect).": ". mysqli_error($DBConnect). "</p>";
    $allOk = False;
}
else{
    //select the database
    $db = @mysqli_select_db($DBConnect, $db_name);
    if ($db === false){
        echo "<p>Unable to connect to the database server.\n Error code". mysqli_errno($DBConnect).": ". mysqli_error($DBConnect). "</p>";
        mysqli_close($DBConnect);
        $allOk = False;
    }
}
?>