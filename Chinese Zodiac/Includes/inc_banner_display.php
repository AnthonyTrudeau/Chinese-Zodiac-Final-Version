<?php
$banner_array = array("Images/banner1.png","Images/banner2.png","Images/banner3.png","Images/banner4.png","Images/banner5.png");
$banner_count = count($banner_array);

if (empty($_COOKIE["lastbanner"])){
    //Generate a random index greater than or equal to 0,
    //and less than the number of elements in the $banner_array array
    $banner_index = rand(0, $banner_count - 1 );
}
else {
    //asssign the cookie value to the $banner_index
    $banner_index = $_COOKIE["lastbanner"];
    //increment the banner index and use the modulus operator to ensure that the index is greater than or equal to
    //0 and less than the number of elements in the $banner_array array
    $banner_index = (++$banner_index) % $banner_count;
}
//Set or update the cookie value
setcookie("lastbanner", $banner_index, time()+(60*60*24*7));


$image = $banner_array[$banner_index];
?>

<!-- I think this is where its wanted? It works -->
<img class="btn" src="<?php echo $image; ?>" alt="[Banner Ad]" title="Banner Ad" style="border:0" />