<div style = "margin-top: 80px"; "margin-bottom: 80px;" "margin-left: 10px;">
    <div id="mybook">
        <img src = "images/news/1.jpg" id = "1"/>
        <img src = "images/news/2.jpg" id = "2"/>
        <img src = "images/news/3.jpg" id = "3"/>
        <img src = "images/news/4.jpg" id = "4"/>
        <div>
            <h5  style = "position:absolute"> <a id ="eula-glow" style = "color: black" href ="final.php">EULA</a></h5>
            <img src = "images/news/5-large.jpg"/>
        </div>
			    
    </div>
</div>

 

<script>

$(function() {

    $('#mybook').booklet({
        width: "95%",
        height: $(".frame").height() - 190,
        pagePadding: 0,
        width:  1000,
        height: 350,
        pageNumbers: false,
        closed: true
    });
});

</script>

