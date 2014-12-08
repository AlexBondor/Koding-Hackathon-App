<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>We hack EULA!</title>
        
        <?php include 'assets.php'; ?>
        <style>
            .title-middle {
                text-align: center;
            }
            
            .subtitle-middle {
                text-align: center;
            }
        </style>
    </head>
    <body class = "body-middle">
    <div class="container">
        <h1 class = "title-middle">
            Let's face EULA together! Choose your weapon wisely:
        </h1>
        <div class = "row">
            <ul class = "ch-grid">
                <?php 
                    $games      = array('story', 'news', 'comics', 'game', 'classic', 'song');
                    $time       = array(4, 3, 2, 2, 5, 1);
                    $difficulty = array(3, 2, 2, 2, 5, 2);
                    //path to directory to scan
                    $directory = "images/menu/";
                    //get all image files with a .jpg extension.
                    $images = glob($directory . "*.jpg");
                    
                    $i = 1;
                    foreach($images as $image)
                    {
                        if ($i == 1)
                        {
                            echo '<div class = "row">';
                        }
                        if ($i == 4)
                        {
                            echo '</div><div class = "row">';
                        }
                        echo 
                         '<li>' .
                            '<div class="ch-item ch-img-' . $i . '">' .          
                                '<div class="ch-info-wrap">' .
                                    '<div class="ch-info">' .
                                        '<div class="ch-info-front ch-img-' . $i . '"></div>' .
                                        '<div class="ch-info-back">' .
                                            '<h3>' . $games[$i - 1] . '</h3>' .
                                            '<div class = "row">' .
                                                '<div class = "col-xs-6" style = "padding-right: 0px">' .
                                                    '<p align = "right">' .
                                                        'Time: ' .
                                                        '</br>' .
                                                        'Difficulty: ' . 
                                                    '</p>' .
                                                '</div>'.
                                                '<div class = "col-xs-6">' .
                                                    '<p align = "left">' .
                                                        displayTime($time[$i - 1]) . 
                                                        '</br>' .
                                                        displayDifficulty($difficulty[$i - 1]) .
                                                    '</p>' . 
                                                '</div>'.
                                                '<p>' .
                                                    '<a href="base.php?id=' . $i . '">Pick me</a>' .
                                                '</p>' . 
                                            '</div>'.
                                       '</div>' .
                                    '</div>' .
                                '</div>' .
                            '</div>' .
                        '</li>';
                        $i++;    
                    }
                    echo '</div>';
                ?>
            </ul>
        </div>
        <h3 class = "subtitle-middle">
            Cannot take a decision? See others' choice!
        </h3>
        </div>
    </body>
</html>