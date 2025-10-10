<?php 

namespace App\Factory\Shape\Exceptions;

use Exception;

class ShapeUnknownException extends Exception 
{
    protected $message = 'Unknown shape type';

    public function __construct($shapeType)
    {
        $this->message = "Unknown shape type: " . $shapeType;
    }

    public function getShapeType()
    {
        return $this->message;
    }

    
}