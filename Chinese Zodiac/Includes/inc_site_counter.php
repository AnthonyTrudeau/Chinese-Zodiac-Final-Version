<?php

include ("Includes/inc_connect.php");

if (empty($_COOKIE["visits"])){
    //increment the counter in the database
    $SQL = "UPDATE visit_counter SET counter = counter +1 WHERE id = 1";
    mysqli_query($DBConnect, $SQL);

    $SQL = "SELECT counter FROM visit_counter WHERE id = 1";
    $QR = mysqli_query($DBConnect, $SQL);

    if (($row = mysqli_fetch_assoc($QR)) !== false){
        $visitors = $row['counter'];
    }
    else{
        $visitors = 1;
    }
    //Set cookie
    setcookie("visits", $visitors, time()+(60*60*24));
}
else{
    $visitors = $_COOKIE["visits"];
}
?>