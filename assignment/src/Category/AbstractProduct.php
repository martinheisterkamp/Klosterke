<?php

namespace App\Category;

abstract class AbstractProduct
{
    public int $expires_in;
    public int $quality;

    protected int $quality_floor;
    protected int $quality_ceiling;

    public function tick(int $amount = 1): void
    {
        for ($i = 0; $i < $amount; $i++) {
            $this->expires_in -= 1;
        }
    }
}
