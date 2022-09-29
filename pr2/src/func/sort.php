<?php


// Сортировка массива — сортировка выбором (по возрастанию)
function selectionSort($arr)
{
	$new_arr = [];
	$n = count($arr);
	for ($i=0; $i < $n; $i++) { 
		for ($j=$i+1; $j < $n; $j++) { 
			if ($arr[$j] < $arr[$i]) {
				$temp= $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $temp;
			}
		}
	}
	return $arr;

}

?>
