<?php

$tileSize = 10;
$tileColumns = 20;
$tileRows = 20;

// Create a 200 x 200 image
$canvas = imagecreatetruecolor($tileSize * $tileColumns, $tileSize * $tileRows);

// Allocate colors

$colors = array(
	imagecolorallocate($canvas, 255, 105, 180),
	imagecolorallocate($canvas, 255, 255, 255),
	imagecolorallocate($canvas, 132, 135, 28)
	);

// Draw three rectangles each with its own color
$numberOfSquares = rand(10, 60);

for ($i=0; $i<$numberOfSquares; $i++)
{
	$x = rand(0, $tileColumns-1);
	$y = rand(0, $tileRows-1);
	$c = rand(0, count($colors)-1);
	imagefilledrectangle($canvas, $x * 10, $y * 10, ($x + 1) * 10, ($y + 1) * 10, $colors[$c]);
}

// Output and free from memory
header('Content-Type: image/png'); 

imagepng($canvas); 
imagedestroy($canvas);
?>

