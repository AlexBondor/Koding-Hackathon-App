<link href="menu/booklet/jquery.booklet.latest.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script> window.jQuery || document.write('<script src="menu/booklet/jquery-2.1.0.min.js"><\/script>') </script>

<!-- jQuery UI (optional) -->
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script> window.jQuery.ui || document.write('<script src="menu/booklet/jquery-ui-1.10.4.custom.min.js"><\/script>') </script>

<!-- Booklet -->
<script src="menu/booklet/jquery.easing.1.3.js"></script>
<script src="menu/booklet/jquery.booklet.latest.min.js"></script>

<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/jquery.elevatezoom.js" type="text/javascript"></script>
 
 <script type="text/javascript" src="bootstrap/js/mootools.js"></script>
<script type="text/javascript" src="bootstrap/js/Zoomer.js"></script> 



<div style = "margin-top: 80px"; "margin-bottom: 80px;" "margin-left: 10px;">
    <div id="mybook">
        <img src = "images/news/1.jpg" id = "1"/>
        <img src = "images/news/2.jpg" id = "2"/>
        <img src = "images/news/3.jpg" id = "3"/>
        <img src = "images/news/4.jpg" id = "4"/>
    </div>
</div>


 

<script>

$(function() {

    $('#mybook').booklet({
        width: "95%",
        height: $(".frame").height() - 190,
        pagePadding: 0,
        width:  1000,
        height: 350

    });
});
window.addEvent('load', function(){
	new Zoomer('1', {
		big: 'images/news/1-large1.jpg',
		smooth: 10,
		transformOrigin: '0 0',
		zoom: 1
	});
		new Zoomer('2', {
		big: 'images/news/2-large.jpg',
		smooth: 15
	});
	new Zoomer('3', {
		big: 'images/news/3-large.jpg',
		smooth: 15
	});
	new Zoomer('4', {
		big: 'images/news/4-large.jpg',
		smooth: 15
	});
});




</script>

