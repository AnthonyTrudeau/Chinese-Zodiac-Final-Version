<?php
session_start();
require_once("class_EventCalendar.php");
if(class_exists("EventCalendar")){
    if (isset($_SESSION['currentCalendar'])){
        $Calendar = unserialize($_SESSION['currentCalendar']);
    }
    else{
        $Calendar = new EventCalendar();
    }
}
else{
    $Calendar = NULL;
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PHP Code Blocks</title>
<meta http-equiv="content-type"     
    content="text/html; charset=iso-8859-1" />
    <!-- External Style Sheet -->
    <link rel="stylesheet" href="zodiac_style.css">
</head>
<body>
<h1>Add Calendar Event</h1>
<?php

if (isset($_POST['EventDate']) && isset($_POST['EventTitle']) && isset($_POST['EventDesc'])){
    if ($Calendar === NULL){
        echo "<p>There was an error creating the calendar object</p>\n";
    }
    else{
        $Calendar->addEvent(stripslashes($_POST['EventDate']), stripslashes($_POST['EventTitle']), stripslashes($_POST['EventDesc']));
        $_SESSION['currentCalendar'] = serialize($Calendar);
    }
}
?>

<form action="AddCalendarEvent.php?PHPSESSID=<?php
echo
    session_id(); ?>" method="POST">
    <p>Date (yyyy-mm-dd): <input type="text" name="EventDate" /> (required) </p>
    <p>Title: <input type="text" name="EventTitle" /> (required) </p>
    <p>Description: <input type="text" name="EventDesc" /> (optional) </p>
    <p><input type="submit" name="submit" value="Save Event" /></p>
</form>

<a href="EventCalendar.php?PHPSESSID=<?php echo session_id(); ?>">View the event Calendar</a>

</body>
</html>
