<?php
$directory = "images/comics/";
//get all image files with a .jpg extension.
$images = glob($directory . "*.png");

$i = 1;
foreach($images as $image)
{
    echo '<img src ="' . $image . '" style = "display: block; margin: auto"/>';
}
?>