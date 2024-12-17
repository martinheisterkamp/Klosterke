<?php

namespace App\Product;

abstract class AbstractProduct
{
    protected int $quality = 75;
    protected int $expires_in = 15;

    public function tick(int $amount = 1): void
    {
        for ($i = 0; $i < $amount; $i++) {
            $this->expires_in -= 1;
        }
    }
}
