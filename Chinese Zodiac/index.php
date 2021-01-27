<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chinese Zodiac</title>
    
    <!-- External Style Sheet -->
    <link rel="stylesheet" href="zodiac_style.css">

</head>

<?php include ("Includes/inc_site_counter.php " );?>

<header">

    <?php include ("Includes/inc_header.php " );?>

</header>

<buttons>

    <?php include ("Includes/inc_banner_display.php " );?>
    <br>
    <?php include ("Includes/inc_button_nav.php");?>

</buttons>

<body>

    <?php 
    if (isset($_GET['page'])){
        switch ($_GET['page']){
            case 'site_layout':
                include('Includes/inc_site_layout.php');
            break;
            case 'control_structures':
                include('Includes/inc_control_structures.php');
            break;
            case 'string_functions':
                include('Includes/inc_string_functions.php');
            break;
            case 'web_forms':
                include('Includes/inc_web_forms.php');
            break;
            case 'midterm_assessment':
                include('Includes/inc_midterm_assessment.php');
            break;
            case 'state_information':
                include('Includes/inc_state_information.php');
            break;
            case 'final_project':
                include('Includes/inc_final_project.php');
            break;
            case 'home_page':
            default:
                include('Includes/inc_home.php');
            break;
        }
    }
    else{
        include('Includes/inc_home.php');
    }
    ?>

</body>

<footer>

    <?php include ("Includes/inc_footer.php");?>

</footer>

</html>