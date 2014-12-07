<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>We hack EULA!</title>
    
    <?php include 'assets.html'; ?>
    
    <style>
    @-webkit-keyframes circle {
        from { transform:rotate(0deg); }
        to { transform:rotate(360deg); }
    }
    
    @keyframes circle {
        from { transform:rotate(0deg); }
        to { transform:rotate(360deg); }
    }
    
    @-webkit-keyframes inner-circle {
        from { transform:rotate(0deg); }
        to { transform:rotate(-360deg); }
    }
    
    @keyframes inner-circle {
        from { transform:rotate(0deg); }
        to { transform:rotate(-360deg); }
    }
    
    #rotator {
       width:380px;
        height:380px;
        margin:100px auto;
        font-size:10px;
        line-height:1;
        animation: circle 25s linear infinite;
        -webkit-animation: circle 25s linear infinite;
        transform-origin: 50% 50%;
        position: relative;
    }
    
    .rotators, .rotators > div {
        -webkit-animation-play-state: paused !important; /* Chrome, Safari, Opera */
        animation-play-state: paused !important;
    }
    
    .rotatora, .rotatora > div {
        -webkit-animation-play-state: running !important; /* Chrome, Safari, Opera */
        animation-play-state: running !important;
    }
    
    #rotator > div {
        animation: inner-circle 25s linear infinite;
        -webkit-animation: inner-circle 25s linear infinite;
        background-color:#e1e1e1;
     width:120px;
     height:120px;
     border-radius: 50%;
    }
    
    #middleBubble {
      text-align: center;
      vertical-align: top;
      background-color: #24b463;
      padding: 40px 60px;
      border-radius: 50%;
      color: #252525;
      margin: auto;
      position: absolute;
      text-align:center;
      top: 33%;
      left: 45%;
    }
    </style>
    
  </head>
  <body>
  
    <div style="position: relative;">
        <div id="middleBubble"><p>a<br>a</p></div>
        
        <div id="rotator" class="rotatora">
            <div data-bubble1="1" data-bubble2="1" onmouseover="hovera();" onmouseout="hovers();"  id = "hover1">Text</div>
            <div data-bubble1="2" data-bubble2="2" onmouseover="hovera();" onmouseout="hovers();"  id = "hover2">Text</div>
            <div data-bubble1="3" data-bubble2="3" onmouseover="hovera();" onmouseout="hovers();"  id = "hover3">Text</div>
            <div data-bubble1="4" data-bubble2="4" onmouseover="hovera();" onmouseout="hovers();"  id = "hover4">Text</div>
            <div data-bubble1="5" data-bubble2="5" onmouseover="hovera();" onmouseout="hovers();"  id = "hover5">Text</div>
            <div data-bubble1="6" data-bubble2="6" onmouseover="hovera();" onmouseout="hovers();"  id = "hover6">Text</div>
        </div>
    </div>
  </body>
</html>