<?php
// when installed via composer
require_once '../../vendor/autoload.php';
include '../../vendor/amenadiel/jpgraph-4.4.1/src/jpgraph.php';
include '../../vendor/amenadiel/jpgraph-4.4.1/src/jpgraph_bar.php';
include '../../vendor/amenadiel/jpgraph-4.4.1/src/jpgraph_line.php';

function makeDiagram($ydata, $xdata, $count, $id): string{
    $graph = new Graph(450,200,"auto");
    $graph->SetScale("textlin");
    $graph->SetMarginColor('white');
    $graph->SetFrame(true,'#B3BCCB', 1);
    $graph->SetTickDensity(TICKD_DENSE);
    $graph->img->SetMargin(50,20,20,60);
    $graph->img->SetImgFormat('png');
    $graph->title->SetMargin(10);
    $graph->xaxis->SetTickLabels($xdata);
    $graph->xaxis->SetLabelAngle(90);
    $graph->xaxis->SetPos('min');

    $my_interval = ceil($count / 10);
    $graph->xaxis->SetTextTickInterval($my_interval);

    $lineplot=new LinePlot($ydata);
    $graph->Add($lineplot);
    /*$graph->Stroke();*/

    $gdImgHandler = $graph->Stroke(_IMG_HANDLER);
    $part_filename = "tmp/imagefile" . $id . ".png";
    $fileName = dirname(__FILE__)."/".$part_filename;
    $graph->Stroke($fileName);
    return $part_filename;
}

?>
 
