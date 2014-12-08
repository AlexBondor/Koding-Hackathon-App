<div id = "mybook">
    <img src = "images/story/story-1.png" style = "height: auto; width: 100%" />
    <img src = "images/story/story-2.png" style = "height: auto; width: 100%" />
    <img src = "images/story/story-3.png" style = "height: auto; width: 100%" />
    <img src = "images/story/story-4.png" style = "height: auto; width: 100%" />
    <img src = "images/story/story-5.png" style = "height: auto; width: 100%" />
    <img src = "images/story/story-6.png" style = "height: auto; width: 100%" />
    <div>
    <img src = "images/story/story-7.png" style = "height: auto; width: 100%; z-index: -2" />
    <h5 class = "final-message">Meanwhile, the first page was built up. Check it out <a href = "final.php">HERE</a>.</h5>
    </div>
    <img src = "images/story/story-8.png" style = "height: auto; width: 100%;" />
</div>
<div id = "mystory">
    <img src = "images/story/story-1.png" style = "height: auto; width: 100%" />
    <img src = "images/story/story-2.png" style = "height: auto; width: 100%" />
    <img src = "images/story/story-3.png" style = "height: auto; width: 100%" />
    <img src = "images/story/story-4.png" style = "height: auto; width: 100%" />
    <img src = "images/story/story-5.png" style = "height: auto; width: 100%" />
    <img src = "images/story/story-6.png" style = "height: auto; width: 100%" />
    <h5>Meanwhile, the first page was built up. Check it out <a href = "final.php">HERE</a>.</h5>
    <img src = "images/story/story-8.png" style = "height: auto; width: 100%;" />
</div>
<script>
$(function() {
    $('#mybook').booklet({ 
        closed: true ,
        pagePadding: 0,
        width:  '80%',
        height: $('.frame').height() - 10,
        pageNumbers: false
    });
});
</script>