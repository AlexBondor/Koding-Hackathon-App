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
?>