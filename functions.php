<?php 
function displayTime ($i) {
    $result = "";
    $component = "<i class = 'fa fa-dollar' style = 'color: #24B463'></i> ";
    for ($j = 0; $j < $i; $j ++)
    {
       
        $result .= $component;
    }
    return $result;
}

function displayDifficulty ($i) {
    $result = "";
    $component = "<i class = 'fa fa-unlock-alt' style = 'color: #EB0508'></i> ";
    for ($j = 0; $j < $i; $j ++)
    {
       
        $result .= $component;
    }
    return $result;
}

function setGame($i) {
    switch ($i) {
    case 1:
        $title = "EULA meets Reader!";
        $link = "story";
        break;
    case 2:
        $title = "Breaking News";
        $link = "news";
        break;
    case 3:
        $title = "Spoderman: Koding Hackathon episode";
        $link = "comics";
        break;
    case 4:
        $title = "<a style=\"color: #fff; text-decoration: underline;\"  href=\"final.php\">E</a>ULA Revenge: Sponsors";
        $link = "game";
        break;
    case 5:
        $title = "Back to basics!";
        $link = "classic";
        break;
    case 6:
        $title = "Silence, listen carefully!";
        $link = "song";
        break;
    }
    $array = array($title, $link);
    return $array;
}
?>