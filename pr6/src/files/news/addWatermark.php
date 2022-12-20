<?php
function addWatermark($image) {
    $image1 = $image;
    $image2 = "tmp/wt.png";
    list($width, $height) = getimagesize($image2);

    $image1 = imagecreatefromstring(file_get_contents($image1));
    $image2 = imagecreatefromstring(file_get_contents($image2));
    //$image2 = file_get_contents($image2);

    imagecopymerge($image1, $image2, 110, 10, 0, 0, $width, $height, 50);
    imagepng($image1, $image);
}

