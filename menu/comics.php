<h4 class = "comic-intro"> <br/>Hello there! Funny heroes talking funny things.. Pay attention to the<br/>
<span style = "color: #219C2B">green words</span> and their order cuz we have a surprize for you. 
</h4>
<?php
$directory = "images/comics/";
//get all image files with a .jpg extension.
$images = glob($directory . "*.png");

foreach($images as $image)
{
    echo '<img src ="' . $image . '" style = "display: block; margin: auto"/>';
}
?>

<form id="form" action="menu/check.php" method="post">
    <div class = "row">
        <div class="centered-form col-xs-12 col-md-8">
            <div class="input-group">
                <input name = "sentence" type="text" placeholder="Insert the sentence you found" class="form-control">
                <span class="input-group-btn">
                    <button onclick="document.getElementById("form").submit();" class="btn btn-danger"><i class="fa fa-arrow-right"></i></button>
                </span>
            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
    </div>
</form>