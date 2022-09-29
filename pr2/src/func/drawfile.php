<?php
function draw($shape, $color, $w, $h){ 
    $openTag = "<svg xmlns='http://www.w3.org/2000/svg' version='1.1' width='500' height='300'>";
    $closeTag = "</svg>";
    $colorTag = "style='fill: {$color}'/>";
    $param = min($h, $w) / 2;
    $r = $param / 2;
    switch ($shape) {
        case "Circle":
            $f = "<circle cx='{$param}' cy='{$param}' r = '{$r}' ";
            break;
        case "Rectangle":
            $f = "<rect x='23' y='23' width='{$w}' height='{$h}' ";
            break;
        case "Romb":
            $hSize2 = round($h / 2);
            $hSize1 = round($w / 2);
            $f = "<polygon points='0,{$hSize2} {$hSize1},{$h} {$w},{$hSize2} {$hSize1},0' ";
            break;
        case "Ellipse":
            $f = "<ellipse cx='{$w}' cy='{$h}' rx='{$w}' ry='{$h}'";
            break;
        default:
             break;
    }
    return $openTag.$f.$colorTag.$closeTag; 
}

?>