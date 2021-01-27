<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type"     
    content="text/html; charset=iso-8859-1" />

    <style>
    *{
        text-align: left;
        padding: 0px;
        margin: 0px;
        overflow-x: hidden;
    }
    html{
        background-color: #F8EDD3;
    }

</style>
    
</head>
<body>
<?php
if (isset($_GET['source_file'])){
    $SourceFile = file_get_contents(
        stripslashes($_GET['source_file']));
        highlight_string($SourceFile);
}
else{
    echo "<p>No source file name entered</p>";
}
?>
</body>
</html>
