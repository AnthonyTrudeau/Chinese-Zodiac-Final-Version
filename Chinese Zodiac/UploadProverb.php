<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PHP Code Blocks</title>
<meta http-equiv="content-type"     
    content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
    $FormDisplay = True;
    if (isset($_POST['submit'])){
        $FormDisplay = FALSE;
    }

    if ($FormDisplay){ //DISPLAY THE FORM
        ?>
    <h3>Add a Proverb</h3>  
    <form name="UploadProverb" action="UploadProverb.php" method="post">
    <input type="text" name="Proverb" required ></input>
    <input type="submit" name="submit" value="Submit Your Proverb" />
    </form>
    <?php
    }
    else if (file_exists("./proverbs.txt")){
        $proverb = $_POST['Proverb'];
        $of = fopen("proverbs.txt", "a");
        fwrite($of, $proverb."\n");
        fclose($of);
        echo "File appended Successfuly!";
    }
    else{
        echo "It didnt work.";
    }
    ?>
</body>
</html>
