<?php

// Код из 16 бит
// 2 бита - фигура
define('SHAPE', 0b1100000000000000);

// 6 бит - цвет (каждый цвет по два бита)
define('RED', 0b0011000000000000);
define('GREEN', 0b0000110000000000);
define('BLUE', 0b0000001100000000);

// коэффициенты
define('COLOR', 85);
define('SIZE', 15);

// 4 бита - ширина
// 4 бита - высота
define('WIDTH', 0b0000000011110000);
define('HEIGHT', 0b0000000000001111);

function getParam($el, $mask, $shift) {
        return $el & $mask >> $shift;
    }

function getShape($code) {
    switch ($code) {
        case 0b00:
           return 'Circle';
        case 0b01:
            return 'Rectangle';
        case 0b10:
            return 'Romb';
        case 0b11:
            return 'Ellipse';
    }
}

function decode($code) {
    $shift = 16;
    $shape = getShape(getParam($code, SHAPE, $shift - 2));
    $red = getParam($code, RED, $shift - 4) * COLOR;
    $green = getParam($code, GREEN, $shift - 6) * COLOR;
    $blue = getParam($code, BLUE, $shift - 8) * COLOR;
    $width = getParam($code, WIDTH, $shift - 12) * SIZE;
    $height = getParam($code, HEIGHT, $shift - 16) * SIZE;
    $color = "rgb({$red}, {$green}, {$blue})";
    return ["shape" => $shape, "color" => $color, "width" => $width, "height" => $height];
}
?>
