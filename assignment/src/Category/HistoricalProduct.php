<?php

namespace App\Category;

class HistoricalProduct extends AbstractProduct
{
    protected int $quality_ceiling = 80;

    public int $quality = 80;

    public function tick(int $amount = 1): void
    {
        for ($i = 0; $i < $amount; $i++) {
            parent::tick();
        }
    }

}
