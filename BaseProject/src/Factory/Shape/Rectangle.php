<?php 

namespace App\Factory\Shape;

use App\Factory\Shape\Interfaces\ShapeInterface;

class Rectangle implements ShapeInterface 
{
	public function draw(){
		$img = imagecreatetruecolor(400, 400);
		$bg = imagecolorallocate($img, 255, 255, 100);
		imagefill($img, 0, 0, $bg);
		$color_rectangle = imagecolorallocate($img, 0, 0, 0);
		imagerectangle($img, 50, 50, 350, 350, $color_rectangle);
		imagepng($img, './rectangle.png');
		imagedestroy($img);
	}
}