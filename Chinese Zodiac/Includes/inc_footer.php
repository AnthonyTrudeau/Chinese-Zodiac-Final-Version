<table style="border: solid 2px; background-color: grey; height: 80px; width:60%; margin-left:20%; margin-right:20%; padding: 0px">
<tr><td style="padding:0;"><strong>©2020</strong>

<p>Total visitors to this site: <?php echo $visitors; ?></p>

<?php



//Dragon Images Pull and Randomize
$DragonArray = array();
$IF = scandir("Images");
foreach ($IF as $dfile){
	if (preg_match('/^Dragon\d+\.jpg$/', $dfile)){
        $DragonArray[] = $dfile;
    }
}
shuffle($DragonArray);

//Connect
$DBConnect = @new mysqli("localhost", "root", "");
if ($DBConnect->connect_errno){
    echo "<p>Connection to proverbs failed.</p>";
}
else{

    //Connected
    $DBName = "chinese_zodiac";
    if (!@mysqli_select_db($DBConnect,$DBName)){

        //Random proverb does not exsist
        echo "<p>Chinese zodiac does not exsist.</p>";
    }
    else{

        $TableName = "randomproverb";
        //Pull a random proverb from the database
        $SQLString = "SELECT * FROM $TableName order by RAND() LIMIT 1";
        $QueryResult = @mysqli_query($DBConnect, $SQLString);

        //Display the proverb
        while ($row = $QueryResult -> fetch_assoc()){

            //Display the proverb
            echo "<p>A randomly displayed Chinese proverb read from the database.<br>".$row["proverb"]."</p>";

            //Update the proverb
            $SQLString = "UPDATE randomproverb SET display_count = display_count + 1 WHERE proverb_number = ".$row["proverb_number"];
            if ($DBConnect -> query($SQLString) !== true){
                //Display a message if the update is not working
                echo "<p>CAN NOT UPDATE SERVER</p>";
            }
        }
    }
}
mysqli_close($DBConnect);
?>
<img src="Images/<?php echo $DragonArray[0] ?>">
<?php
?></td>
</tr>
</table>