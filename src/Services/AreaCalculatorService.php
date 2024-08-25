<?php

declare(strict_types=1);

namespace Thiiagoms\OCP\Services;

use Thiiagoms\OCP\Contracts\ShapeableContract;

class AreaCalculatorService
{
    public function calculate(ShapeableContract $shape): float
    {
        return $shape->area();
    }
}
