<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>We hack EULA!</title>
		<?php include 'assets.php'; ?>
	</head>
	<body>
	<?php $id = $_GET['id']; ?>
    	<div class="container">
          <div class="row" style="margin-top: 50px;">
          <div  class="col-md-8 topart" style="background-color: #131313;">
            <div class="col-md-2">
              <a href="menuAlt.php">
                <div class="img-circle circle">
                    <i class="fa fa-arrow-left fa-4x"></i>
                </div>
              </a>
            </div>
            <div class="col-md-10">
                <h1 style="margin-left: 20px; color: #fff;"><?php echo setGame($id)[0]; ?></h1>
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col-md-12 frame">
                <?php include 'menu/' . setGame($id)[1] . '.php'; ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 col-md-push-9 site-footer oversf">
              <ul class="social-links" style="margin: 5px 0 15px 0;">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			  </ul>
    		</div>
        </div>
	</body>
</html>