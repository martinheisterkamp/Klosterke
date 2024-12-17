<?php

namespace App\Category;

abstract class AbstractProduct
{
    public int $expires_in;
    public int $quality;

    protected int $quality_floor = 0;
    protected int $quality_ceiling = 50;


    public function tick(): void
    {
        $this->expires_in -= 1;
    }

    protected function assertQuality(): void
    {
        /* Quality cannot increase above certain amount, so set it to that amount */
        if ($this->quality > $this->quality_ceiling) {
            $this->quality = $this->quality_ceiling;
        }

        /* Quality cannot decrease below certain amount, so set it to that amount */
        if ($this->quality < $this->quality_floor) {
            $this->quality = $this->quality_floor;
        }
    }
}
