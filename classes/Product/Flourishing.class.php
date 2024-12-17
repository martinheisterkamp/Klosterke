<?php

namespace App\Product;

abstract class FlourishingProduct extends AbstractProduct
{

    public function tick(int $amount = 1): void
    {
        for ($i = 0; $i < $amount; $i++) {
            $this->expires_in -= 1;

            /* Quality of wine cannot exceed the given quality ceiling */
            if ($this->quality >= $this->quality_ceiling) {
                $this->quality = $this->quality_ceiling;
                return;
            }

            /* Quality of wine cannot exceed the given quality floor */
            if($this->quality <= $this->quality_floor) {
                $this->quality = $this->quality_floor;
                return;
            }

            /* Quality of wine increases by two every day, when there are 10 days left */
            if ($this->expires_in <= 10 && $this->expires_in > 5) {
                $this->quality += 2;
                return;
            }

            /* Quality of wine increases by three every day, when there are 5 days left */
            if ($this->expires_in <= 5 && $this->expires_in > 0) {
                $this->quality += 3;
                return;
            }

            /* Quality of wine tanks when it has expired */
            if ($this->expires_in <= 0) {
                $this->quality = $this->quality_floor;
                return;
            }

            $this->quality += 1;
        }
    }
}
