<?php
require '../vendor/autoload.php';
use jokodm\Datamining\Klasifikasi\KNearestNeighbors;

$dtraining = [	[1.2, 2.3],
				[2.5, 4.6], 
				[4	,	1], 
				[5.6, 1.2], 
				[6	, 3.5]
			];
			
$labels = ["A", "A", "B", "B", "B"];

$classifier = new KNearestNeighbors($k=3);
$classifier->train($dtraining, $labels);

$pred = classifier->predict([3, 2]);

echo "Data testing x=3 dan y=2 <br/> Masuk kedalam Class ".$pred;