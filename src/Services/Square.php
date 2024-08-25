<?php

declare(strict_types=1);

namespace Thiiagoms\OCP\Services;

use Exception;
use Thiiagoms\OCP\Contracts\ShapeableContract;

class Square implements ShapeableContract
{
    public function __construct(private float $height, private float $width)
    {
    }

    public function area(): float
    {
        return $this->width * $this->height;
    }
}