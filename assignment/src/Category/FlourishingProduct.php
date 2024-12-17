<?php

namespace App\Category;

class FlourishingProduct extends AbstractProduct
{

    protected int $quality_floor = 0;
    protected int $quality_ceiling = 50;

    public function tick(int $amount = 1): void
    {
        for ($i = 0; $i < $amount; $i++) {
            $this->expires_in -= 1;

            /* Quality of wine increases normally */
            if($this->expires_in > 10) $this->quality += 1;

            /* Quality of wine increases by two every day, when there are 10 days left */
            if ($this->expires_in <= 10 && $this->expires_in > 5) $this->quality += 2;

            /* Quality of wine increases by three every day, when there are 5 days left */
            if ($this->expires_in <= 5 && $this->expires_in > 0) $this->quality += 3;

            /* Quality of wine cannot exceed the given quality ceiling */
            if ($this->quality >= $this->quality_ceiling) $this->quality = $this->quality_ceiling;

            /* Quality of wine tanks after expired, and quality of wine cannot exceed the given quality floor */
            if($this->expires_in <= 0 || $this->quality <= $this->quality_floor) {
                $this->quality = $this->quality_floor;
            }
        }
    }
}
