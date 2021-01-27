<hr />
<table width="100% style = "border: 0">
<tr>
<td>
<?php
if (isset($_GET['section'])){
    switch ($_GET['section']){
        case 'zodiac':
            include('Includes/inc_chinese_zodiac.php');
        break;
        case 'php':
        default:
            include('Includes/inc_php_info.php');
        break;
    }
}
else{
    include('Includes/inc_php_info.php');
}
?>
</td>
</tr>

</table>