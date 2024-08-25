<?php

declare(strict_types=1);

namespace Thiiagoms\OCP\Services;

class AreaCalculatorService
{
    public function calculate($shape): float
    {
        if ($shape instanceof Triangle) {
            return ($shape->width * $shape->height) / 2;
        }

        return $shape->width * $shape->height;
    }
}
