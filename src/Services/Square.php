<?php

declare(strict_types=1);

namespace Thiiagoms\OCP\Services;

use Exception;

class Square
{
    public function __construct(private float $height, private float $width)
    {
    }

    public function __get(string $property): float
    {
        if (property_exists($this, $property)) {
            return $this->{$property};
        }

        throw new Exception("Property {$property} not found");
    }
}