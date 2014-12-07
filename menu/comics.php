<?php
$directory = "images/comics/";
//get all image files with a .jpg extension.
$images = glob($directory . "*.png");

foreach($images as $image)
{
    echo '<img src ="' . $image . '" style = "display: block; margin: auto"/>';
}
?>
<div style = "padding: 30px 0; display: block; margin: auto; width: 60%;">
<div style = "display: block; margin: auto;" class="input-group">
<form id="form" action="menu/check.php" method="post">
	<input name="sentence" type="text" placeholder="Insert the sentence you found" class="form-control">
	<span class="input-group-btn">
	<button onclick="document.getElementById("form").submit();" class="btn btn-danger"><i class="fa fa-arrow-right"></i></button>
	</span>
</form>
</div>
</div>