<?php 

namespace App\Factory\Shapes;

use App\Factory\Interfaces\ShapeInterface;

class Circle implements ShapeInterface 
{
	public function draw(){
		$img = imagecreatetruecolor(400, 400);
		$bg = imagecolorallocate($img, 255, 255, 100);
		imagefill($img, 0, 0, $bg);
		$color_ellipsis = imagecolorallocate($img, 0, 0, 0);
		imageellipse($img, 200, 200, 300, 300, $color_ellipsis);
		imagepng($img, './circle.png');
		imagedestroy($img);
	}
}