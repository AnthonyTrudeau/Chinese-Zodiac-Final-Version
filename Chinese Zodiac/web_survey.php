<?php
session_start();

//Survey array
$survey_questions = array(
    1 => "Was the navigation strightforward and did all the links work?",
    2 => "Was the selection of background color, font color, and font size appropriate?",
    3 => "Were the images appropriate and did they complement the Web content?",
    4 => "Were the descriptions of the PHP program complete and easy to understand?",
    5 => "Was the PHP code structured properly and well commented?"
);
$question_count = count($survey_questions);

if (isset($_SESSION['CurrentQuestion'])){
    if (($_SESSION['CurrentQuestion'] > 0) && (isset($_POST['response']))){
        $_SESSION['Responses'][$_SESSION['CurrentQuestion']] = $_POST['response'];
    }
    ++$_SESSION['CurrentQuestion'];
}
else{
    $_SESSION['CurrentQuestion'] = 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Survey</title>

        <!-- External Style Sheet -->
        <link rel="stylesheet" href="zodiac_style.css">

</head>

<body>

    <h1>Web Survey</h1>
    <?php
    
    if($_SESSION['CurrentQuestion'] == 0){
        ?>
            <p>Thank you for reviewing this Chinese Zodiac web site. Your responses will help in improving this site.</p>
        <?php
    }
    else if ($_SESSION['CurrentQuestion'] > $question_count){
        ?>
            <p>Thank you for reviewing the site!</p>
        <?php
        
            echo "<br \>";
            $counter = 1;
            foreach($_SESSION['Responses'] as $temp){
                echo $survey_questions[$counter];
                echo $temp . "</p>";
                $counter++;
            }

    }
    else{
        echo "<p>Question " . $_SESSION['CurrentQuestion'] . ": " . $survey_questions[$_SESSION['CurrentQuestion']] . "</p>\n";
    }

    if ($_SESSION['CurrentQuestion'] <= $question_count){
        echo "<form method='post' action='web_survey.php'>\n";
        echo "<input type='hidden' name='PHPSESSID' value=' ". session_id() . " '/>\n";
        if ($_SESSION['CurrentQuestion'] > 0){
            echo "<p><input type='radio' name='response' value='Exceeds Expectations' />" . " Exceeds Expectations<br />\n";
            echo "<p><input type='radio' name='response' value='Meets Expectations' />" . " Meets Expectations<br />\n";
            echo "<p><input type='radio' name='response' value='Below Expectations' />" . " Below Expectations<br />\n"; 
        }
        echo "<input type='submit' name='submit' value='";
        if ($_SESSION['CurrentQuestion'] == 0){
        echo "Start The Survey";
        }
        else if($_SESSION['CurrentQuestion'] == $question_count){
            echo "Finished";
        }
        else{
            echo "Next Question";
        }
        echo "' />\n";
        echo "</form>\n";
    }
    ?>
    
</body>
</html>