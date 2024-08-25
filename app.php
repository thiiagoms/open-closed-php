<?php

declare(strict_types=1);

use Thiiagoms\OCP\Services\Square;
use Thiiagoms\OCP\Services\AreaCalculatorService;
use Thiiagoms\OCP\Services\Triangle;

require __DIR__ . '/vendor/autoload.php';

$square = new Square(10, 10);
$triangle = new Triangle(10, 10);

$squareArea = new AreaCalculatorService();
$triangleArea = new AreaCalculatorService();

echo "Area of square: {$squareArea->calculate($square)}\n";
echo "Area of triangle: {$triangleArea->calculate($triangle)}\n";
